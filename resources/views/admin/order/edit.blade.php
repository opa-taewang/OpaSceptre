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
              <li class="breadcrumb-item"><a href="{{route('admin.product.index')}}">Order</a></li>
              <li class="breadcrumb-item active">{{$order->id}}</li>
              <li class="breadcrumb-item"><a href="#">Edit</a></li>
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
                        <h3 class="card-title">Update Product</h3>
                    </div>
                    <div class="ml-auto">
                        <a class="btn btn-info" href="{{route('admin.product.index')}}">View All</a>
                        <a class="btn btn-info" href="{{route('admin.order.show', $order)}}">View Order</a>
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body row">
                    {{-- Content here --}}
                    <div class="col-md-6">
                        <form method="post" action="{{route('admin.order.update.order.status', $order->id)}}">
                            @method('patch')
                            @csrf
                            <div class="col-md-12">
                                {{-- Order Status Update --}}
                                <div class="form-group">
                                    <label for="selectSubCategory" class="@error('order_status') is-invalid @enderror">Order Status:&nbsp;<span class="text-danger">*</span></label>
                                    <select class="form-control select2 @error('order_status') is-invalid @enderror" name="order_status" style="width: 100%;" id="selectSubCategory">
                                        <option value="">Select Order Status</option>
                                        @foreach ($order_statuses as $order_status)
                                            <option value="{{$order_status->id}}" {{$order->order_status == $order_status->id ? 'selected': ''}}>{{$order_status->order_status_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('order_status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row ml-1 mb-3">
                                <button class="btn btn-success btn-block" type="submit">Update Order Status</button>
                            </div>
                        </form>
                    </div>

                    {{-- Payment Status --}}
                    <div class="col-md-6">
                        <form method="post" action="{{route('admin.order.update.payment.status', $order->id)}}">
                            @method('patch')
                            @csrf
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="paymentStatus" class="pb-2" class="@error('payment_status') is-invalid @enderror">Order Payment Status:&nbsp;<span class="text-danger">*</span></label><br>
                                    <input type="checkbox" name="payment_status" data-bootstrap-switch data-off-color="danger" data-on-color="success" value="1" id="paymentStatus"{{$order->order_payment_status == '1' ? 'checked' : ''}}>
                                    @error('payment_status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row ml-1 mb-3">
                                <button class="btn btn-info btn-block" type="submit">Update Payment Status</button>
                            </div>
                        </form>
                    </div>
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
