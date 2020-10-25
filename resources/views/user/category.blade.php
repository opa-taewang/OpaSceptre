@extends('layouts.app')
@section('content')
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index-2.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item"><a href="#">Men</a></li>
						<li class="breadcrumb-item active" aria-current="page">Accessories</li>
					</ol>
				</div>
			</nav>

			<div class="container pb-3">
				<div class="row">
					<div class="col-lg-9">
						<nav class="toolbox">
							<div class="toolbox-left">
								<div class="toolbox-item toolbox-sort">
									<label>Sort By:</label>

									<div class="select-custom">
										<select name="orderby" class="form-control">
											<option value="menu_order" selected="selected">Default sorting</option>
											<option value="popularity">Sort by popularity</option>
											<option value="rating">Sort by average rating</option>
											<option value="date">Sort by newness</option>
											<option value="price">Sort by price: low to high</option>
											<option value="price-desc">Sort by price: high to low</option>
										</select>
									</div><!-- End .select-custom -->

								</div><!-- End .toolbox-item -->
							</div><!-- End .toolbox-left -->

							<div class="toolbox-right">
								<div class="toolbox-item toolbox-show">
									<label>Show:</label>

									<div class="select-custom">
										<select name="count" class="form-control">
											<option value="12">12</option>
											<option value="24">24</option>
											<option value="36">36</option>
										</select>
									</div><!-- End .select-custom -->
								</div><!-- End .toolbox-item -->

								<div class="toolbox-item layout-modes">
									<a href="category.html" class="layout-btn btn-grid active" title="Grid">
										<i class="icon-mode-grid"></i>
									</a>
									<a href="category-list.html" class="layout-btn btn-list" title="List">
										<i class="icon-mode-list"></i>
									</a>
								</div><!-- End .layout-modes -->
							</div><!-- End .toolbox-right -->
						</nav>

						<div class="row">
                            @foreach ($products as $product)
                                <div class="col-6 col-sm-4 col-md-3">
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="{{route('singleProduct', $product->id)}}">
                                                <img src="https://res.cloudinary.com/opasceptre/image/upload/{{$product->image_one}}">
                                            </a>
                                            <div class="label-group">
                                                @if ($product->hot_new == 1)
                                                    <div class="product-label label-hot">HOT</div>
                                                @endif
                                                @if ($product->discount_price !== NULL)
                                                    @php
                                                        // $discount = ()
                                                        $discount = ((($product->selling_price - $product->discount_price)/$product->selling_price) * 100);
                                                        $discount = ceil($discount)
                                                    @endphp
                                                    <div class="product-label label-sale">{{$discount}}&#37;</div>
                                                @endif
                                            </div>
                                            @php
                                                if (Auth::check()) {
                                                    $wishlistStatus = \App\Wishlist::where('product_id', $product->id)->where('user_id', Auth::id())->first() ? 1 : 0;
                                                }
                                            @endphp
                                            <add-to-cart-one v-b-tooltip.hover title="Add to cart" product-id="{{$product->id}}" @if(Auth::check()) status="{{$wishlistStatus}}" @endif></add-to-cart-one>
                                            <a href="{{route('quickview', $product->id)}}" class="btn-quickview" title="Quick View">Quick View</a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="brand.html" class="product-category">{{$product->brand_name}}</a>,
                                                    <a href="category.html" class="product-category">{{$product->category_name}}</a>,
                                                    <a href="subcategory.html" class="product-category">{{$product->subcategory_name}}</a>
                                                </div>
                                                @php
                                                    if (Auth::check()) {
                                                        $wishlistStatus = \App\Wishlist::where('product_id', $product->id)->where('user_id', Auth::id())->first() ? 1 : 0;
                                                    }
                                                @endphp
                                                <add-to-wishlist class="mr-auto" v-b-tooltip.hover title="Add to wishlist" product-id="{{$product->id}}" @if(Auth::check()) status="{{$wishlistStatus}}" @endif></add-to-wishlist>
                                            </div>
                                            <h2 class="product-title">
                                                <a href="product.html">{{$product->product_name}}</a>
                                            </h2>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                @if ($product->discount_price == NULL)
                                                    <span class="product-price">&#8358;{{$product->selling_price}}</span>
                                                @else
                                                    <span class="product-price">&#8358;<del>{{$product->selling_price}}</del></span>
                                                    &nbsp;
                                                    <span class="product-price">&#8358;{{$product->discount_price}}</span>
                                                @endif
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div>
							    </div><!-- End .col-md-3 -->
                            @endforeach
						</div><!-- End .row -->

						<nav class="toolbox toolbox-pagination">
							<div class="toolbox-item toolbox-show">
								<label>Show:</label>

								<div class="select-custom">
									<select name="count" class="form-control">
										<option value="12">12</option>
										<option value="24">24</option>
										<option value="36">36</option>
									</select>
								</div><!-- End .select-custom -->
							</div><!-- End .toolbox-item -->

							<ul class="pagination toolbox-item">
								<li class="page-item disabled">
									<a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
								</li>
								<li class="page-item active">
									<a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
								</li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">4</a></li>
								<li class="page-item"><a class="page-link" href="#">5</a></li>
								<li class="page-item"><span class="page-link">...</span></li>
								<li class="page-item">
									<a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
								</li>
							</ul>
						</nav>
					</div><!-- End. col-lg-9 -->

					<div class="sidebar-overlay"></div>
					<div class="sidebar-toggle"><i class="fas fa-sliders-h"></i></div>
					<aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar">
						<div class="sidebar-wrapper">
							<div class="widget">
								<h3 class="widget-title">
									<a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Categories</a>
								</h3>

								<div class="collapse show" id="widget-body-2">
									<div class="widget-body">
										<ul class="cat-list">
                                            @foreach ($subCategories as $subcategory)
                                                <li><a href="{{route('category.get',['category'=>$category->id, 'subcategory'=>$subcategory])}}">{{$subcategory->subcategory_name}}</a></li>
                                            @endforeach
										</ul>
									</div><!-- End .widget-body -->
								</div><!-- End .collapse -->
							</div><!-- End .widget -->

							<div class="widget">
								<h3 class="widget-title">
									<a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="true" aria-controls="widget-body-3">Price</a>
								</h3>

								<div class="collapse show" id="widget-body-3">
									<div class="widget-body">
										<form action="#">
											<div class="price-slider-wrapper">
												<div id="price-slider"></div><!-- End #price-slider -->
											</div><!-- End .price-slider-wrapper -->

											<div class="filter-price-action d-flex align-items-center justify-content-between flex-wrap">
												<button type="submit" class="btn btn-primary">Filter</button>

												<div class="filter-price-text">
													Price:
													<span id="filter-price-range"></span>
												</div><!-- End .filter-price-text -->
											</div><!-- End .filter-price-action -->
										</form>
									</div><!-- End .widget-body -->
								</div><!-- End .collapse -->
							</div><!-- End .widget -->

							<div class="widget">
								<h3 class="widget-title">
									<a data-toggle="collapse" href="#widget-body-4" role="button" aria-expanded="true" aria-controls="widget-body-4">Size</a>
								</h3>

								<div class="collapse show" id="widget-body-4">
									<div class="widget-body">
										<ul class="cat-list">
											<li><a href="#">Small</a></li>
											<li><a href="#">Medium</a></li>
											<li><a href="#">Large</a></li>
											<li><a href="#">Extra Large</a></li>
										</ul>
									</div><!-- End .widget-body -->
								</div><!-- End .collapse -->
							</div><!-- End .widget -->

							<div class="widget">
								<h3 class="widget-title">
									<a data-toggle="collapse" href="#widget-body-5" role="button" aria-expanded="true" aria-controls="widget-body-5">Brand</a>
								</h3>

								<div class="collapse show" id="widget-body-5">
									<div class="widget-body">
										<ul class="cat-list">
											<li><a href="#">Adidas</a></li>
											<li><a href="#">Calvin Klein (26)</a></li>
											<li><a href="#">Diesel (3)</a></li>
											<li><a href="#">Lacoste (8)</a></li>
										</ul>
									</div><!-- End .widget-body -->
								</div><!-- End .collapse -->
							</div><!-- End .widget -->

							<div class="widget">
								<h3 class="widget-title">
									<a data-toggle="collapse" href="#widget-body-6" role="button" aria-expanded="true" aria-controls="widget-body-6">Color</a>
								</h3>

								<div class="collapse show" id="widget-body-6">
									<div class="widget-body">
										<ul class="config-swatch-list">
											<li class="active">
												<a href="#" style="background-color: #000;"></a>
												<span>Black</span>
											</li>
											<li>
												<a href="#" style="background-color: #0188cc;"></a>
												<span>Blue</span>
											</li>
											<li>
												<a href="#" style="background-color: #81d742;"></a>
												<span>Green</span>
											</li>
											<li>
												<a href="#" style="background-color: #6085a5;"></a>
												<span>Indigo</span>
											</li>
											<li>
												<a href="#" style="background-color: #ab6e6e;"></a>
												<span>Red</span>
											</li>
											<li>
												<a href="#" style="background-color: #ddb373;"></a>
												<span>Brown</span>
											</li>
											<li>
												<a href="#" style="background-color: #6b97bf;"></a>
												<span>Light-Blue</span>
											</li>
											<li>
												<a href="#" style="background-color: #eded68;"></a>
												<span>Yellow</span>
											</li>
										</ul>
									</div><!-- End .widget-body -->
								</div><!-- End .collapse -->
							</div><!-- End .widget -->
						</div><!-- End .sidebar-wrapper -->
					</aside><!-- End .col-lg-3 -->
				</div><!-- End .row -->
			</div><!-- End .container -->
@endsection
