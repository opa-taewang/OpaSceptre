@extends('layouts.app')
@section('content')
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index-2.html"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </div>
    </nav>

    <div class="container mb-6">
        <ul class="checkout-progress-bar">
            <li class="active">
                <span>Shipping</span>
            </li>
            <li>
                <span>Review &amp; Payments</span>
            </li>
        </ul>
        <div class="row">
            <div class="col-lg-8">
                <ul class="checkout-steps">
                    <li>
                        <div class="checkout-info-box">
							<h3 class="step-title">Ship To:
                                <a href="{{route('addShippingAddress')}}" title="Edit" class="step-title-edit" data-toggle="modal" data-target="#addAddress">
                                    <span class="sr-only">Edit</span><i class="icon-pencil"></i>
                                </a>
                            </h3>
                            <div class="row">
                                @foreach ($shipping_addresses as $shipping_address)
                                <div class="col-md-4 border border-info m-1">
                                    <address>
                                        {{$shipping_address->first_name}} {{$shipping_address->last_name}} <br>
                                        {{$shipping_address->street_address}} <br>
                                        {{$shipping_address->lgarea_name}} <br>
                                        {{$shipping_address->state_name}}<br>
                                        Nigeria<br>
                                        (234) {{$shipping_address->contact_number}}
                                    </address>
                                </div>
                                @endforeach
                            </div>
						</div><!-- End .checkout-info-box -->

                    </li>
                </ul>
            </div><!-- End .col-lg-8 -->

            <div class="col-lg-4">
                <div class="order-summary">
                    <h3>Summary</h3>

                    <h4>
                        <a data-toggle="collapse" href="#order-cart-section" class="collapsed" role="button" aria-expanded="false" aria-controls="order-cart-section">{{$total->cart_quantity}} products in Cart</a>
                    </h4>

                    <div class="collapse" id="order-cart-section">
                        <table class="table table-mini-cart">
                            <tbody>
                                @foreach ($carts as $cart)
                                    <tr>
                                    <td class="product-col">
                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="https://res.cloudinary.com/opasceptre/image/upload/{{$cart->product_image}}" alt="product">
                                            </a>
                                        </figure>
                                        <div>
                                            <h2 class="product-title">
                                                <a href="product.html">{{$cart->product_name}}</a>
                                            </h2>

                                            <span class="product-qty">Qty: {{$cart->product_quantity}}</span>
                                        </div>
                                    </td>
                                    <td class="price-col">&#8358;{{number_format($cart->product_price, 2)}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div><!-- End #order-cart-section -->
                </div><!-- End .order-summary -->
            </div><!-- End .col-lg-4 -->
        </div><!-- End .row -->

        <div class="row">
            <div class="col-lg-8">
                <div class="checkout-steps-action">
                    <a href="checkout-review.html" class="btn btn-primary float-right">NEXT</a>
                </div><!-- End .checkout-steps-action -->
            </div><!-- End .col-lg-8 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <!-- Modal -->
    <div class="modal fade mx-auto" id="addAddress" tabindex="-1" role="dialog" aria-labelledby="addAddressLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <add-address></add-address>
        </div>
    </div>
    </div>

@endsection
