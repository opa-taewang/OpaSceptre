@extends('layouts.app')
@section('content')
    <main class="main">
    <div class="container">
        <div class="home-slider-container">
            <div class="home-slider owl-carousel owl-theme owl-theme-light nav-pos-outside show-nav-hover slide-animate">
                @foreach ($main_slider as $homeslider)
                    <div class="home-slide">
                    <div class="slide-bg owl-lazy" src="/storage/{{$homeslider->image_one}}" data-src="/storage/{{$homeslider->image_one}}"></div><!-- End .slide-bg -->
                    <div class="home-slide-content sale-banner">
                        <div class="row no-gutter bg-primary appear-animate" data-animation-name="fadeInLeftShorter">
                            <div class="col-auto col-md-6 d-flex flex-column justify-content-center col-1">
                                <h4 class="align-left text-uppercase mb-0 appear-animate" data-animation-name="slideInRight" data-animation-delay="400">Furniture &amp; Garden</h4>
                                <h3 class="text-white mb-0 align-left text-uppercase appear-animate" data-animation-name="slideInRight" data-animation-delay="400">Huge Sale</h3>
                            </div>

                            <div class="col-auto col-md-6 col-2 appear-animate" data-animation-name="slideInLeft" data-animation-delay="400">
                                <h2 class="text-white mb-0 position-relative align-left">50<small>%<ins>OFF</ins></small>
                                </h2>
                            </div>
                        </div>
                        <div class="mb-0 text-right" >
                            <button class="btn btn-lg btn-dark appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="600">Shop Now!</button>
                        </div>
                    </div>
                </div><!-- End .home-slide -->
                @endforeach

            </div><!-- End .home-slider -->
        </div><!-- End .home-slider-container -->
    </div><!-- End .container -->

    <div class="container banner-container">
        <div class="row">
             @php
                $i=0;
            @endphp
            @foreach ($mid_slider as $midslider)
                <div class="col-md-4 col-sm-6 appear-animate" data-animation-name="{{$mid_slider_animation[$i]}}" data-y="200">
                    <h3 class="subtitle">SHOP {{strtoupper($midslider->category_name)}}</h3>
                    <div class="heading-spacer"></div>
                    <div class="banner banner-image">
                        <a href="#">
                            <img src="/storage/{{$midslider->image_one}}" width="360" height="270" alt="banner"/>
                        </a>
                        <div class="banner-meta">
                            <a href="#">{{$midslider->product_name}}</a>

                            <span class="banner-price">Starting at
                                <strong>
                                    @if ($midslider->discount_price == NULL)
                                        <span class="product-price">&#8358;{{$midslider->selling_price}}</span>
                                    @else
                                        <span class="product-price">&#8358;<del>{{$midslider->selling_price}}</del></span>
                                        &nbsp;
                                        <span class="product-price">&#8358;{{$midslider->discount_price}}</span>
                                    @endif
                                </strong>
                            </span>
                        </div><!-- End .banner-meta -->
                    </div><!-- End .banner -->
                </div><!-- End .col-md-4 -->
                @php
                    $i++;
                @endphp
            @endforeach
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-3"></div><!-- margin -->
    {{-- Featured Product --}}
    <div class="container feature-container">
        <h2 class="subtitle text-center">TRENDING PRODUCTS</h2>
        <div class="heading-spacer"></div>
        <div class="row">
            @foreach ($trend as $trending)
                <div class="col-6 col-sm-4 col-md-3 appear-animate" data-animation-delay="100" data-animation-duration="1500">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="product.html">
                            <img src="/storage/{{$trending->image_one}}" alt="product" width="300" height="300"/>
                            <img src="/storage/{{$trending->image_two}}" alt="product" width="300" height="300"/>
                        </a>
                        <div class="btn-icon-group">
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                        </div>
                        <a href="{{route('quickview', $trending->id)}}" class="btn-quickview" title="Quick View">Quick View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="brand.html" class="product-category">{{$trending->brand_name}}</a>,
                                <a href="category.html" class="product-category">{{$trending->category_name}}</a>,
                                <a href="subcategory.html" class="product-category">{{$trending->subcategory_name}}</a>
                            </div>
                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">{{$trending->product_name}}</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <div class="price-box">
                            @if ($trending->discount_price == NULL)
                                <span class="product-price">&#8358;{{$trending->selling_price}}</span>
                            @else
                                <span class="product-price">&#8358;<del>{{$trending->selling_price}}</del></span>
                                &nbsp;
                                <span class="product-price">&#8358;{{$trending->discount_price}}</span>
                            @endif

                        </div><!-- End .price-box -->
                    </div><!-- End .product-details -->
                </div>
            </div>
            @endforeach
        </div>
    </div><!-- End .container -->

    <div class="sale-banner banner appear-animate" data-animation-delay="100" data-animation-duration="1500">
        <div class="container banner-content">
            <div class="row no-gutter bg-secondary">
                <div class="col-auto col-md-4 d-flex flex-column justify-content-center col-1">
                    <h4 class="align-left text-uppercase mb-0">Furniture &amp; Garden</h4>
                    <h3 class="text-white mb-0 align-left text-uppercase">Huge Sale</h3>
                </div>
                <div class="col-auto col-md-4 col-2">
                    <h2 class="text-white mb-0 position-relative align-left">50<small>%<ins>OFF</ins></small>
                    </h2>
                </div>
                <div class="mb-0 col-md-4 col-3 col-auto">
                    <button class="btn btn-lg btn-primary">Shop Now!</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="product-widgets row pt-1 m-b-2 mb-6">
            {{-- Best Rated Products --}}
            <div class="col-md-4 col-sm-6 pb-5 appear-animate" data-animation-name="fadeInRightShorter">
                <h4 class="subtitle text-left text-uppercase">Best Rated Products</h4>
                <div class="heading-spacer"></div>
                @foreach ($best_rated as $bestrated)
                    <div class="product-default left-details product-widget mb-2">
                        <figure>
                            <a href="product.html">
                                <img src="/storage/{{$bestrated->image_one}}" width="175" height="175" alt="product" />
                                <img src="/storage/{{$bestrated->image_two}}" width="175" height="175" alt="product" />
                            </a>
                        </figure>
                        <div class="product-details">
                            <div class="category-list">
                                <a href="category.html" class="product-category">caps</a>,
                                <a href="category.html" class="product-category">fashion</a>,
                                <a href="category.html" class="product-category">t-shirts</a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">{{$bestrated->product_name}}</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                @if ($bestrated->discount_price == NULL)
                                    <span class="product-price">&#8358;{{$bestrated->selling_price}}</span>
                                @else
                                    <span class="product-price">&#8358;<del>{{$bestrated->selling_price}}</del></span>
                                    &nbsp;
                                    <span class="product-price">&#8358;{{$bestrated->discount_price}}</span>
                                @endif
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                @endforeach
            </div>
            {{-- Best Selling Product --}}
            <div class="col-md-4 col-sm-6 pb-5 appear-animate"  data-animation-delay="100" data-animation-duration="1500">
                <h4 class="subtitle text-left text-uppercase">Hot Deal</h4>
                <div class="heading-spacer"></div>
                @foreach ($hot_deal as $hotdeal)
                    <div class="product-default left-details product-widget mb-2">
                        <figure>
                            <a href="product.html">
                                <img src="/storage/{{$hotdeal->image_one}}" width="175" height="175" alt="product" />
                                <img src="/storage/{{$hotdeal->image_two}}" width="175" height="175" alt="product" />
                            </a>
                        </figure>
                        <div class="product-details">
                            <div class="category-list">
                                <a href="category.html" class="product-category">Fashion</a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">{{$hotdeal->product_name}}</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                @if ($hotdeal->discount_price == NULL)
                                    <span class="product-price">&#8358;{{$hotdeal->selling_price}}</span>
                                @else
                                    <span class="product-price">&#8358;<del>{{$hotdeal->selling_price}}</del></span>
                                    &nbsp;
                                    <span class="product-price">&#8358;{{$hotdeal->discount_price}}</span>
                                @endif
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                @endforeach
            </div>
            {{-- Latest Products --}}
            <div class="col-md-4 col-sm-6 pb-5 appear-animate" data-animation-name="fadeInLeftShorter">
                <h4 class="subtitle text-left text-uppercase">Hot New</h4>
                <div class="heading-spacer"></div>
                    @foreach ($hot_new as $hotnew)
                    <div class="product-default left-details product-widget mb-2">
                        <figure>
                            <a href="product.html">
                                <img src="/storage/{{$hotnew->image_one}}" width="175" height="175" alt="product" />
                                <img src="/storage/{{$hotnew->image_two}}" width="175" height="175" alt="product" />
                            </a>
                        </figure>
                        <div class="product-details">
                            <div class="category-list">
                                <a href="category.html" class="product-category">Accessories</a>,
                                <a href="category.html" class="product-category">Caps</a>,
                                <a href="category.html" class="product-category">Dress</a>,
                                <a href="category.html" class="product-category">Electronics</a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">{{$hotnew->product_name}}</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                @if ($hotnew->discount_price == NULL)
                                    <span class="product-price">&#8358;{{$hotnew->selling_price}}</span>
                                @else
                                    <span class="product-price">&#8358;<del>{{$hotnew->selling_price}}</del></span>
                                    &nbsp;
                                    <span class="product-price">&#8358;{{$hotnew->discount_price}}</span>
                                @endif
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
            @endforeach
        </div><!-- End .product-widgets -->
    </div>

    <div class="container">
        <div class="brands-slider images-center owl-carousel owl-theme nav-pos-outside show-nav-hover appear-animate">
            @php
                $brands = App\FrontendControl::brands();
            @endphp
            @foreach ($brands as $brand)
                <img src="/storage/{{$brand->brand_logo}}" width="140"  height="60" alt="logo" />
            @endforeach
        </div><!-- End .partners-carousel -->
    </div><!-- End .container -->

    <div class="instagram-section appear-animate">
        <h3 class="subtitle text-uppercase">Follow On Instagram</h3>
        <div class="heading-spacer"></div>
        <div class="owl-carousel instagram-feed-carousel instagram-feed-list">
            <a href="#"><img src="/storage/images/instagram/1.jpg" width="197" height="150" alt="Feed"></a>
            <a href="#"><img src="/storage/images/instagram/2.jpg" width="197" height="150" alt="Feed"></a>
            <a href="#"><img src="/storage/images/instagram/3.jpg" width="197" height="150" alt="Feed"></a>
            <a href="#"><img src="/storage/images/instagram/4.jpg" width="197" height="150" alt="Feed"></a>
            <a href="#"><img src="/storage/images/instagram/5.jpg" width="197" height="150" alt="Feed"></a>
            <a href="#"><img src="/storage/images/instagram/6.jpg" width="197" height="150" alt="Feed"></a>
            <a href="#"><img src="/storage/images/instagram/7.jpg" width="197" height="150" alt="Feed"></a>
            <a href="#"><img src="/storage/images/instagram/8.jpg" width="197" height="150" alt="Feed"></a>
            <a href="#"><img src="/storage/images/instagram/9.jpg" width="197" height="150" alt="Feed"></a>
            <a href="#"><img src="/storage/images/instagram/10.jpg" width="197" height="150" alt="Feed"></a>
        </div><!-- End .instagram-feed-carousel -->
    </div><!-- End .instagram-section -->
</main><!-- End .main -->
@endsection
