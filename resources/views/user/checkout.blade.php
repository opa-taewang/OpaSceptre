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
            <li>
                <span>Shipping</span>
            </li>
            <li class="active">
                <span>Review &amp; Payments</span>
            </li>
        </ul>
        <div class="row">
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

                        <table class="table table-totals">
								<tbody>
									<tr>
										<td>Subtotal</td>
										<td>&#8358;{{number_format($total->total_price,2)}}</td>
									</tr>

                                    <tr>
										<td>Coupon</td>
										<td>
                                            @if (Session::has(env('APP_NAME') . '_coupon'))
                                                @php
                                                    $discount_price = (Session::get(env('APP_NAME') . '_coupon')['discount'] * $total->total_price)/100
												@endphp
                                                <span class="badge bg-success">
                                                    {{Session::get(env('APP_NAME') . '_coupon')['name']}}
                                                    {{Session::get(env('APP_NAME') . '_coupon')['discount']}}%
                                                    <a href="{{route('coupon.remove')}}" onclick="return confirm('Remove {{Session::get(env('APP_NAME') . '_coupon')['name']}}?');"><i class="fas fa-minus-circle"></i></a>
												</span>
												{{-- Discount price --}}
                                                -&#8358;{{number_format($discount_price,2)}}
                                            @else
                                                <a href="#coupon">Add coupon</a>
                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
										<td>Shipping Fee</td>
										<td>&#8358;{{number_format($default_address->shipping_fee,2)}}</td>
                                    </tr>

								</tbody>
								<tfoot>
									<tr>
										<td>Order Total</td>
										<td>
											@if (Session::has(env('APP_NAME') . '_coupon'))
												@php
													$order_total = ($total->total_price - $discount_price) + $default_address->shipping_fee;
												@endphp
											@else
												@php
													$order_total = ($total->total_price + $default_address->shipping_fee);
												@endphp
											@endif
											&#8358;{{number_format($order_total, 2)}}
										</td>
									</tr>
								</tfoot>
							</table>
                    </div><!-- End #order-cart-section -->
                </div><!-- End .order-summary -->

                <div class="checkout-info-box">
                    <h3 class="step-title">Ship To:
                        <a href="#" title="Edit" class="step-title-edit"><span class="sr-only">Edit</span><i class="icon-pencil"></i></a>
                    </h3>
                    <address>
                        {{$default_address->first_name}} {{$default_address->last_name}} <br>
                        {{$default_address->street_address}} <br>
                        {{$default_address->lgarea_name}} <br>
                        {{$default_address->state_name}}<br>
                        Nigeria<br>
                        (234) {{$default_address->contact_number}}
                    </address>
                </div><!-- End .checkout-info-box -->

                <div class="checkout-info-box">
                    <h3 class="step-title">Shipping Method:
                        <a href="#" title="Edit" class="step-title-edit"><span class="sr-only">Edit</span><i class="icon-pencil"></i></a>
                    </h3>

                    <p>Flat Rate - Fixed</p>
                </div><!-- End .checkout-info-box -->
            </div><!-- End .col-lg-4 -->

            <div class="col-lg-8 order-lg-first">
                <form method="POST" action="{{route('payment.method.select')}}">
                    @csrf
                    <input type="hidden" name="amount" value="{{$order_total}}" /> <!-- Replace the value with your transaction amount -->
                    <input type="hidden" name="country" value="NG" /> <!-- Replace the value with your transaction country -->
                    <input type="hidden" name="currency" value="NGN" /> <!-- Replace the value with your transaction currency -->
                    <input type="hidden" name="description" value="New food" /> <!-- Replace the value with your transaction description -->
                    <input type="hidden" name="email" value="{{auth()->user()->email}}" /> <!-- Replace the value with your customer email -->
                    <input type="hidden" name="firstname" value="{{$default_address->first_name}}" /> <!-- Replace the value with your customer firstname -->
                    <input type="hidden" name="lastname" value="{{$default_address->last_name}}" /> <!-- Replace the value with your customer lastname -->
                    <input type="hidden" name="phonenumber" value="{{$default_address->contact_number}}" /> <!-- Replace the value with your customer phonenumber -->
                    <input type="hidden" name="ref" value="opasceptre_{{rand(1000000000, 10000000000)}}" /> <!-- Ucomment and  Replace the value with your transaction reference. It must be unique per transaction. You can delete this line if you want one to be generated for you. -->
                    <input type="hidden" name="shipping_address" value="{{$default_address->id}}" />
                    <input type="hidden" name="shipping_fee" value="{{$default_address->shipping_fee}}" />
                    <input type="hidden" name="sub_total" value="{{$total->total_price}}" />
                    <input type="hidden" name="quantity" value="{{$total->cart_quantity}}" />

                    @if ((Session::has(env('APP_NAME') . '_coupon')) ?  : '')
                    <input type="hidden" name="coupon" value="{{Session::get(env('APP_NAME') . '_coupon')['name']}}" />
                    <input type="hidden" name="discount_price" value="{{$discount_price}}" />
                    @endif



                    <div class="checkout-payment">
                        <h2 class="step-title">Payment Method:</h2>

                        <h4>Select Payment Method</h4>

                        <div class="row">
                            @foreach ($paymentMethods as $paymentMethod)
                                <div class="col-md-4">
                                <label>
                                    <input type="radio" name="payment_method" value="{{$paymentMethod->payment_name}}" checked>
                                    <img src="https://res.cloudinary.com/opasceptre/image/upload/v1600627348/{{$paymentMethod->payment_logo}}">
                                </label>
                                </div>
                            @endforeach
                        </div><!-- End #new-checkout-address -->

                        <div class="clearfix">
                            <button type="submit" class="btn btn-primary float-right">Place Order</button>
                        </div><!-- End .clearfix -->
                    </div><!-- End .checkout-payment -->
                </form>

                <div class="checkout-discount" id="coupon">
                    <h4>
                        <a data-toggle="collapse" href="#checkout-discount-section" class="collapsed" role="button" aria-expanded="false" aria-controls="checkout-discount-section">Apply Discount Code</a>
                    </h4>

                    <div class="collapse" id="checkout-discount-section">
                        <form action="{{route('coupon.add')}}" method='post'>
                            @csrf
                            <input type="text" class="form-control form-control-sm @error('coupon_code') is-invalid @enderror" placeholder="Enter coupon code" name="coupon_code" >
                            @error('coupon_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <button class="btn btn-sm btn-outline-secondary" type="submit">Apply Discount</button>
                        </form>
                    </div><!-- End .collapse -->
                </div><!-- End .checkout-discount -->
            </div><!-- End .col-lg-8 -->
        </div><!-- End .row -->
    </div><!-- End .container -->
@endsection
