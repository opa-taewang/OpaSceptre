@extends('layouts.app')
@section('content')
    <main class="main">
    <div class="container">
        <div class="home-slider-container">
            <div class="home-slider owl-carousel owl-theme owl-theme-light nav-pos-outside show-nav-hover slide-animate">
                <div class="home-slide">
                    <div class="slide-bg owl-lazy" src="/storage/images/slider/slide-1.jpg" data-src="/storage/images/slider/slide-1.jpg"></div><!-- End .slide-bg -->
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

                <div class="home-slide home-slide-left">
                    <div class="slide-bg owl-lazy" src="/storage/images/slider/slide-2.jpg" data-src="/storage/images/slider/slide-2.jpg"></div><!-- End .slide-bg -->
                    <div class="home-slide-content slide-content-dark sale-banner">
                        <div class="row no-gutter bg-secondary appear-animate" data-animation-name="fadeInRightShorter">
                            <div class="col-auto col-md-6 d-flex flex-column justify-content-center col-1">
                                <h4 class="align-left text-uppercase mb-0 appear-animate" data-animation-name="slideInRight" data-animation-delay="300">Home office sale</h4>
                                <h3 class="text-white mb-0 align-left text-uppercase appear-animate" data-animation-name="slideInRight" data-animation-delay="300">mega off</h3>
                            </div>

                            <div class="col-auto col-md-6 col-2 appear-animate" data-animation-name="slideInLeft" data-animation-delay="300">
                                <h2 class="text-white mb-0 position-relative align-left">50<small>%<ins>OFF</ins></small>
                                </h2>
                            </div>
                        </div>
                        <div class="mb-0" >
                            <button class="btn btn-lg btn-primary appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="600">Shop Now!</button>
                        </div>
                    </div><!-- End .home-slide-content -->
                </div><!-- End .home-slide -->
            </div><!-- End .home-slider -->
        </div><!-- End .home-slider-container -->
    </div><!-- End .container -->

    <div class="container banner-container">
        <div class="row">
            <div class="col-md-4 col-sm-6 appear-animate" data-animation-name="fadeInRightShorter" data-y="200">
                <h3 class="subtitle">SHOP LIVING ROOM</h3>
                <div class="heading-spacer"></div>
                <div class="banner banner-image">
                    <a href="#">
                        <img src="/storage/images/banners/banner-living.jpg" width="360" height="270" alt="banner"/>
                    </a>
                    <div class="banner-meta">
                        <a href="#">LIVING ROOM </a>

                        <span class="banner-price">Starting at <strong>$999</strong></span>
                    </div><!-- End .banner-meta -->
                </div><!-- End .banner -->
            </div><!-- End .col-md-4 -->

            <div class="col-md-4 col-sm-6 appear-animate"  data-animation-duration="1500">
                <h3 class="subtitle">SHOP DINNING ROOM</h3>
                <div class="heading-spacer"></div>
                <div class="banner banner-image">
                    <a href="#">
                        <img src="/storage/images/banners/banner-dining.jpg" alt="banner" width="360" height="270" />
                    </a>
                    <div class="banner-meta">
                        <a href="#" class="white-nowrap">DINNING ROOM </a>

                        <span class="banner-price white-nowrap">Starting at <strong>$899</strong></span>
                    </div><!-- End .banner-meta -->
                </div><!-- End .banner -->
            </div><!-- End .col-md-4 -->

            <div class="col-md-4 col-sm-6 appear-animate" data-animation-name="fadeInLeftShorter">
                <h3 class="subtitle">SHOP BEDROOM</h3>
                <div class="heading-spacer"></div>
                <div class="banner banner-image">
                    <a href="#">
                        <img src="/storage/images/banners/banner-bedroom.jpg" alt="banner" width="360" height="270" />
                    </a>
                    <div class="banner-meta">
                        <a href="#">BEDROOM</a>

                        <span class="banner-price">Starting at <strong>$799</strong></span>
                    </div><!-- End .banner-meta -->
                </div><!-- End .banner -->
            </div><!-- End .col-md-4 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-3"></div><!-- margin -->
    {{-- Featured Product --}}
    <div class="container feature-container">
        <h2 class="subtitle text-center">FEATURED PRODUCTS</h2>
        <div class="heading-spacer"></div>
        <div class="row">
            <div class="col-6 col-sm-4 col-md-3 appear-animate" data-animation-delay="100" data-animation-duration="1500">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="product.html">
                            <img src="/storage/images/products/product-2.jpg" alt="product" width="300" height="300"/>
                            <img src="/storage/images/products/product-8.jpg" alt="product" width="300" height="300"/>
                        </a>
                        <div class="btn-icon-group">
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                        </div>
                        <a href="/product-quick-view" class="btn-quickview" title="Quick View">Quick View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="category.html" class="product-category">Electronics</a>,
                                <a href="category.html" class="product-category">Fashion</a>,
                                <a href="category.html" class="product-category">watches</a>
                            </div>
                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Porto Brown Chair</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <div class="price-box">
                            <span class="product-price">$101.00 – $111.00</span>
                        </div><!-- End .price-box -->
                    </div><!-- End .product-details -->
                </div>
            </div>
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
            {{-- Top rated Products --}}
            <div class="col-md-4 col-sm-6 pb-5 appear-animate" data-animation-name="fadeInRightShorter">
                <h4 class="subtitle text-left text-uppercase">Top Rated Products</h4>
                <div class="heading-spacer"></div>
                <div class="product-default left-details product-widget mb-2">
                    <figure>
                        <a href="product.html">
                            <img src="/storage/images/products/product-8.jpg" width="175" height="175" alt="product" />
                            <img src="/storage/images/products/product-1.jpg" width="175" height="175" alt="product" />
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html" class="product-category">caps</a>,
                            <a href="category.html" class="product-category">fashion</a>,
                            <a href="category.html" class="product-category">t-shirts</a>
                        </div>
                        <h2 class="product-title">
                            <a href="product.html">Porto Arm Chair</a>
                        </h2>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <div class="price-box">
                            <span class="product-price">$69.00</span>
                        </div><!-- End .price-box -->
                    </div><!-- End .product-details -->
                </div>
            </div>
            {{-- Best Selling Product --}}
            <div class="col-md-4 col-sm-6 pb-5 appear-animate"  data-animation-delay="100" data-animation-duration="1500">
                <h4 class="subtitle text-left text-uppercase">Best Selling Products</h4>
                <div class="heading-spacer"></div>
                <div class="product-default left-details product-widget mb-2">
                    <figure>
                        <a href="product.html">
                            <img src="/storage/images/products/product-19.jpg" width="175" height="175" alt="product"/>
                            <img src="/storage/images/products/product-9.jpg" width="175" height="175" alt="product" />
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html" class="product-category">Fashion</a>
                        </div>
                        <h2 class="product-title">
                            <a href="product.html">Brown Leather Sofa</a>
                        </h2>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <div class="price-box">
                            <span class="product-price">$199.00 – $209.00</span>
                        </div><!-- End .price-box -->
                    </div><!-- End .product-details -->
                </div>
            </div>
            {{-- Latest Products --}}
            <div class="col-md-4 col-sm-6 pb-5 appear-animate" data-animation-name="fadeInLeftShorter">
                <h4 class="subtitle text-left text-uppercase">Latest Products</h4>
                <div class="heading-spacer"></div>
                <div class="product-default left-details product-widget mb-2">
                    <figure>
                        <a href="product.html">
                            <img src="/storage/images/products/product-25.jpg" width="175" height="175" alt="banner"/>
                            <img src="/storage/images/products/product-5.jpg" width="175" height="175" alt="product" />
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
                            <a href="product.html">Product Left Sidebar</a>
                        </h2>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <div class="price-box">
                            <span class="product-price">$101.00 – $111.00</span>
                        </div><!-- End .price-box -->
                    </div><!-- End .product-details -->
                </div>
            </div>
        </div><!-- End .product-widgets -->
    </div>

    <div class="container">
        <div class="brands-slider images-center owl-carousel owl-theme nav-pos-outside show-nav-hover appear-animate">
            <img src="/storage/images/logos/1.png" width="140"  height="60" alt="logo" />
            <img src="/storage/images/logos/2.png" width="140"  height="60" alt="logo" />
            <img src="/storage/images/logos/3.png" width="140"  height="60" alt="logo" />
            <img src="/storage/images/logos/4.png" width="140"  height="60" alt="logo" />
            <img src="/storage/images/logos/5.png" width="140"  height="60" alt="logo" />
            <img src="/storage/images/logos/6.png" width="140"  height="60" alt="logo" />
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
