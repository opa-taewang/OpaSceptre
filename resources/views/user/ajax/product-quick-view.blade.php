<div class="page-wrapper" id="app">
<div class="product-single-container product-single-default product-quick-view">
	<div class="row row-sparse">
		<div class="col-lg-6 product-single-gallery">
			<div class="product-slider-container">
				<div class="product-single-carousel owl-carousel owl-theme">
					<div class="product-item">
						<img class="product-single-image" src="https://res.cloudinary.com/opasceptre/image/upload/{{$product->image_one}}" data-zoom-image="https://res.cloudinary.com/opasceptre/image/upload/{{$product->image_one}}"/>
					</div>
					<div class="product-item">
						<img class="product-single-image" src="https://res.cloudinary.com/opasceptre/image/upload/{{$product->image_two}}" data-zoom-image="https://res.cloudinary.com/opasceptre/image/upload/{{$product->image_two}}"/>
					</div>
					<div class="product-item">
						<img class="product-single-image" src="https://res.cloudinary.com/opasceptre/image/upload/{{$product->image_three}}" data-zoom-image="https://res.cloudinary.com/opasceptre/image/upload/{{$product->image_three}}"/>
					</div>
					<div class="product-item">
						<img class="product-single-image" src="https://res.cloudinary.com/opasceptre/image/upload/{{$product->image_four}}" data-zoom-image="https://res.cloudinary.com/opasceptre/image/upload/{{$product->image_four}}"/>
					</div>
				</div>
				<!-- End .product-single-carousel -->
			</div>
			<div class="prod-thumbnail owl-dots" id='carousel-custom-dots'>
				<div class="owl-dot">
					<img src="https://res.cloudinary.com/opasceptre/image/upload/{{$product->image_one}}"/>
				</div>
				<div class="owl-dot">
					<img src="https://res.cloudinary.com/opasceptre/image/upload/{{$product->image_two}}"/>
				</div>
				<div class="owl-dot">
					<img src="https://res.cloudinary.com/opasceptre/image/upload/{{$product->image_three}}"/>
				</div>
				<div class="owl-dot">
					<img src="https://res.cloudinary.com/opasceptre/image/upload/{{$product->image_four}}"/>
				</div>
			</div>
		</div><!-- End .product-single-gallery -->

		<div class="col-lg-6 product-single-details">
			<h1 class="product-title">{{$product->product_name}}</h1>

			<div class="ratings-container">
				<div class="product-ratings">
					<span class="ratings" style="width:60%"></span><!-- End .ratings -->
				</div><!-- End .product-ratings -->

				<a href="#" class="rating-link">( 6 Reviews )</a>
			</div><!-- End .product-container -->

			<div class="price-box">
                @if ($product->discount_price == NULL)
                    <span class="product-price">&#8358;{{$product->selling_price}}</span>
                @else
                    <span class="old-price">&#8358;<del>{{$product->selling_price}}</del></span>
                    &nbsp;
                    <span class="product-price">&#8358;{{$product->discount_price}}</span>
                @endif
			</div><!-- End .price-box -->

			<div class="product-desc">
				<p>{!!$product->product_details!!}</p>
			</div><!-- End .product-desc -->

            <add-to-cart product-id="{{$product->id}}" @if(Auth::check()) status="" @endif></add-to-cart>

			<hr class="divider">

			<div class="product-single-share">
				<label class="sr-only">Share:</label>
				<div class="social-icons mr-2">
					<a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
					<a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
					<a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank" title="Linkedin"></a>
					<a href="#" class="social-icon social-gplus fab fa-google-plus-g" target="_blank" title="Google +"></a>
					<a href="#" class="social-icon social-mail icon-mail-alt" target="_blank" title="Mail"></a>
                </div><!-- End .social-icons -->
                @php
                    if (Auth::check()) {
                        $wishlistStatus = \App\Wishlist::where('product_id', $product->id)->where('user_id', Auth::id())->first() ? 1 : 0;
                    }
                @endphp
                <add-to-wishlist class="mr-auto" v-b-tooltip.hover title="Add to wishlist" product-id="{{$product->id}}" @if(Auth::check()) status="{{$wishlistStatus}}" @endif></add-to-wishlist>
				<a href="#" class="add-wishlist" title="Add to Wishlist">Add to Wishlist</a>
			</div><!-- End .product single-share -->
		</div><!-- End .product-single-details -->
	</div><!-- End .row -->
</div><!-- End .product-single-container -->
</div>
