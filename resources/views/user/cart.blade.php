@extends('layouts.app')
@section('content')
    <main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index-2.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
					</ol>
				</div>
			</nav>

			<div class="container mb-6">
				<div class="row">
					<div class="col-lg-8">
						<div class="cart-table-container">
							<table class="table table-cart">
								<thead>
									<tr>
										<th class="product-col">Product</th>
										<th class="price-col">Price</th>
										<th class="qty-col">Qty</th>
										<th>Subtotal</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach ($cart as $cart)
                                        <tr class="product-row">
                                            <td class="product-col">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="https://res.cloudinary.com/opasceptre/image/upload/{{$cart->product_image}}" alt="{{$cart->product_name}}" height="100" width="100">
                                                    </a>
                                                </figure>
                                                <h2 class="product-title">
                                                    <a href="product.html">{{$cart->product_name}}</a>
                                                </h2>
                                            </td>
                                            <td>{{$cart->product_price / $cart->product_quantity}}</td>
                                            <td>
                                                <update-cart product-id="{{$cart->product_id}}" @if(Auth::check()) status="" @endif current-value="{{$cart->product_quantity}}"></update-cart>
                                                {{-- @php
                                                    $quantities = \App\Product::productColourSize($cart->product_id);
                                                @endphp
                                                <form action="/cart.php" method="POST" id="quantityForm{{$cart->product_id}}">
                                                    @csrf
                                                    <select class="custom-select selectQuantity mt-5" name="product_quantity" id="{{$cart->product_id}}">
                                                        @foreach ($quantities as $quantity)
                                                            <option value="{{$quantity}}" @if($quantity == $cart->product_quantity) {{'selected'}} @endif>{{$quantity}}</option>
                                                        @endforeach
                                                    </select>
                                                </form> --}}
                                                {{-- <input class="vertical-quantity form-control" type="text"> --}}
                                            </td>
                                            <td>{{$cart->product_price}}</td>
									    </tr>
                                        <tr class="product-action-row">
                                            <td colspan="4" class="clearfix">
                                                <div class="float-left">
                                                    <a href="{{route('cart.moveToWishlist', $cart->product_id)}}" class="btn-move">Move to Wishlist</a>
                                                </div><!-- End .float-left -->

                                                <div class="float-right">
                                                    <form method="post" action="{{route('cart.remove', $cart->product_id)}}">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-sm" type="submit" onclick="return confirm('Are you sure you want to Remove?');" style="background-color:transparent"><span class="sr-only">Remove</span><i class="far fa-trash-alt"></i></button>
                                                        <a title="Remove product" class="btn-remove"></a>
                                                    </form>
                                                </div><!-- End .float-right -->
                                            </td>
                                        </tr>
                                    @endforeach
								</tbody>

								<tfoot>
									<tr>
										<td colspan="4" class="clearfix">
											<div class="float-left">
												<a href="category.html" class="btn btn-outline-secondary">Continue Shopping</a>
											</div><!-- End .float-left -->

											<div class="float-right">
												<a href="#" class="btn btn-outline-secondary btn-clear-cart">Clear Shopping Cart</a>
												{{-- <a href="#" class="btn btn-outline-secondary btn-update-cart">Update Shopping Cart</a> --}}
											</div><!-- End .float-right -->
										</td>
									</tr>
								</tfoot>
							</table>
						</div><!-- End .cart-table-container -->

						<div class="cart-discount">
							<h4>Apply Coupon Code</h4>
                            <form method="POST" action="{{route('coupon.add')}}">
                                @csrf
								<div class="input-group">
                                    <input type="text" id="coupon" class="form-control form-control-sm @error('coupon_code') is-invalid @enderror" placeholder="Enter coupon code" name="coupon_code" >
                                    @error('coupon_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
									<div class="input-group-append">
										<button class="btn btn-sm btn-primary" type="submit">Apply Coupon</button>
									</div>
								</div><!-- End .input-group -->
							</form>
						</div><!-- End .cart-discount -->
					</div><!-- End .col-lg-8 -->

					<div class="col-lg-4">
						<div class="cart-summary">
							<h3>Summary</h3>

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

								</tbody>
								<tfoot>
									<tr>
										<td>Order Total</td>
										<td>
											@if (Session::has(env('APP_NAME') . '_coupon'))
												@php
													$order_total = $total->total_price - $discount_price;
												@endphp
											@else
												@php
													$order_total = $total->total_price;
												@endphp
											@endif
											&#8358;{{number_format($order_total, 2)}}
										</td>
									</tr>
								</tfoot>
							</table>

							<div class="checkout-methods">
								<a href="{{route('checkout')}}" class="btn btn-block btn-sm btn-primary">Go to Checkout</a>
							</div><!-- End .checkout-methods -->
						</div><!-- End .cart-summary -->
					</div><!-- End .col-lg-4 -->
				</div><!-- End .row -->
			</div><!-- End .container -->
		</main><!-- End .main -->
@endsection
