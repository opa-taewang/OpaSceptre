@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">{{Auth()->user()->role->name}}</a></li>
              <li class="breadcrumb-item"><a href="{{route('admin.order.index')}}">Order</a></li>
              <li class="breadcrumb-item active">{{$order->id}}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <div class="row">
                    <div>
                        <h3 class="card-title">Order {{$order->id}}</h3>
                    </div>
                    <div class="ml-auto">
                        <a class="btn btn-info" href="{{route('admin.product.index')}}">View All</a>
                        <a class="btn btn-info" href="{{route('admin.order.edit', $order)}}">Edit Order</a>
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> {{env('APP_NAME')}}
                    <small class="float-right">{{now()}}</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>{{env('APP_NAME')}},</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Phone: (804) 123-5432<br>
                    Email: info@almasaeedstudio.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                        <strong>{{$shipping_address->first_name}} {{$shipping_address->last_name}}</strong><br>
                        {{$shipping_address->street_address}} <br>
                        {{$lgarea}} <br>
                        {{$state}}<br>
                        Nigeria<br>
                        (234) {{$shipping_address->contact_number}}<br>
                        Email: {{auth()->user()->email}}
                    </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Invoice</b> <em>#{{$order->order_payment_reference}}</em><br>
                  <br>
                  <b>Order ID:</b> {{$order->id}}<br>
                  <b>Payment Due:</b>{{date("d M Y", strtotime($order->created_at))}}<br>
                  <b>Account:</b> 968-34567
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Qty</th>
                        <th>Product</th>
                        <th>Serial #</th>
                        <th>Product Colour</th>
                        <th>Product Size</th>
                        <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($order_items as $item)
                        <tr>
                            <td><img class="img-fluid" src="https://res.cloudinary.com/opasceptre/image/upload/v1604537283/{{$item->product_image}}" alt="{{$item->product_name}}" width="50px"></td>
                            <td>{{$item->product_quantity}}</td>
                            <td>{{$item->product_name}}</td>
                            <td>{{$item->id }}</td>
                            <td>{{$item->product_colour}}</td>
                            <td>{{$item->product_size}}</td>
                            <td>&#8358;{{number_format($item->product_price, 2)}}</td>

                        </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Payment Methods: <span class="font-weight-bolder">{{strtoupper($order->order_payment_method)}}</span></p>
                  <img src="https://res.cloudinary.com/opasceptre/image/upload/v1606218646/icons/visa_cyqw9q.png" alt="Visa">
                  <img src="https://res.cloudinary.com/opasceptre/image/upload/v1606218646/icons/mastercard_cim2cl.png" alt="Mastercard">
                  <img src="https://res.cloudinary.com/opasceptre/image/upload/v1606218646/icons/american-express_cx4c8l.png" alt="American Express">
                  <img src="https://res.cloudinary.com/opasceptre/image/upload/v1606218646/icons/paypal2_dklxzr.png" alt="Paypal">

                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                    plugg
                    dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead font-weight-bold">Payment Status:  <span class="font-weight-light font-italic">{{$order->order_payment_status === 1 ? "Paid" : "Not Paid"}}</span></p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>&#8358;{{number_format($order->subtotal, 2)}}</td>
                      </tr>
                      @if ($order->coupon)
                        <tr>
                            <th>Coupon <span class="font-italic">{{$order->coupon}}</span></th>
                            <td>&#8358;{{number_format($order->discount_price, 2)}}</td>
                        </tr>
                      @endif
                      <tr>
                        <th>Shipping:</th>
                        <td>&#8358;{{number_format($order->shipping_fee, 2)}}</td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td>&#8358;{{number_format($order->order_price, 2)}}</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <form method="post" action="{{route('admin.order.send.invoice', $order)}}">
                    @csrf
                    <button type="submit" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Send Invoice
                    </button>
                  </form>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </div>
              </div>
            </div>
            <!-- /.invoice -->

                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
