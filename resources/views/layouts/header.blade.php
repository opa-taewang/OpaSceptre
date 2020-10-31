<div class="top-notice text-white bg-dark">
                <div>
                    <div class="container">
                        Get Up to <b>40% OFF</b> New Furniture Deals <small>* Limited time only.</small>
                    </div>
                    <button class="mfp-close"></button>
                </div>
            </div>
<header class="header">
            <div class="header-top">
                <div class="header-row container">
                    <div class="header-left">
                        <div class="header-dropdown">
                            <a href="#" class="pl-0" >USD</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">USD</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div>
                        <div class="header-dropdown mr-auto mr-sm-3 mr-md-0">
                            <a href="#"><img src="/images/flags/en.png" width="16" height="11" alt="flag" />ENG</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#"><img src="/images/flags/en.png" width="16" height="11" alt="flag" />ENG</a></li>
                                    <li><a href="#"><img src="/images/flags/fr.png" width="16" height="11" alt="flag" />FRA</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div>
                    </div>
                    <div class="header-right">
                        <div class="wel-msg text-uppercase d-none d-lg-block">FREE Returns. Standard Shipping Orders $99+</div>
                        <span class="separator d-none d-xl-block"></span>
                        <ul class="top-links mega-menu show-arrow d-none d-sm-inline-block">
                            <li class="menu-item narrow"><a href="about.html">About Us</a></li>
                            <li class="menu-item narrow"><a href="blog.html">Blog</a></li>
                            <li class="menu-item narrow"><a href="#">My Wishlist</a></li>
                            <li class="menu-item narrow"><a href="{{route('cart.show')}}">Cart</a></li>
                            <li class="menu-item">
                                @auth
                                    <a href="/account">My Account</a>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                @else
                                    <a class="login" href="/login">Log In</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
                                @guest

                                @endguest
                                @auth

                                @endauth
                            </li>
                        </ul>
                        <span class="separator d-none d-xl-block"></span>
                        <div class="share-links d-none d-xl-block">
                            <a target="_blank" rel="nofollow" class="share-facebook icon-facebook" href="#" title="Facebook"></a>
                            <a target="_blank" rel="nofollow" class="share-twitter icon-twitter" href="#" title="Twitter"></a>
                            <a target="_blank" rel="nofollow" class="share-instagram icon-instagram" href="#" title="Instagram"></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler" type="button">
                            <i class="icon-menu"></i>
                        </button>
                        <div class="header-contact d-none d-lg-flex align-items-center pl-1 mr-lg-5 pr-xl-2">
                            <i class="fas fa-phone-alt"></i>
                            <h6>Call us now<a href="tel:#" class="text-dark font1">+123 5678 890</a></h6>
                        </div>
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <a href="index-2.html" class="logo">
                            <img src="/images/logo_red.png" alt="Porto Logo" width="104" height="41" />
                        </a>
                    </div><!-- End .headeer-center -->

                    <div class="header-right">

                        <div class="header-search header-search-popup header-search-category d-none d-sm-block">
                            {{-- Account Info --}}
                            @auth
                                <a href="/login" class="header-icon"><i class="far fa-user"></i></a>
                            @endauth
                            {{-- Wish list --}}
                            <a href="#" class="header-icon"><i class="far fa-heart"></i></a>
                            {{-- Search --}}
                            <a href="#" class="search-toggle" role="button"><i class="fas fa-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="q" id="q" placeholder="I'm searching for..." required="">
                                    <div class="select-custom">
                                        <select id="cat" name="cat">
                                            <option value="">All Categories</option>
                                            @foreach (App\FrontendControl::getCategory() as $category)
                                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div><!-- End .select-custom -->
                                    <button class="btn icon-search-3" type="submit"></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div>
                        <div class="dropdown cart-dropdown">
                            <header-cart></header-cart>
                        </div>

                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    <nav class="main-nav d-none d-lg-flex">
                        <div class="header-left">
                            <ul class="menu sf-arrows">
                                <li class="active"><a href="/">Home</a></li>
                                <li>
                                    <a href="#">Categories </a>
                                    <div class="megamenu megamenu-fixed-width">
                                        <div class="row">
                                            <div class="col-lg-8" id="categoryaccordion">
                                                <div class="row">
                                                    @foreach (App\FrontendControl::getCategory() as $category)
                                                        @php
                                                            $subcategory = DB::table('subcategories')->where('category_id', $category->id)->get();
                                                        @endphp
                                                         <div class="col-lg-6">
                                                             <div>
                                                                <a href="#category{{$category->id}}" data-toggle="collapse" aria-expanded="false" aria-controls="category{{$category->id}}"><h6>{{$category->category_name}}</h6></a>
                                                             </div>
                                                            <div class="collapse in" data-parent="#categoryaccordion" id="category{{$category->id}}">
                                                                <hr class="mt-0 mb-1">
                                                                    <div class="mt-0 font-weight-lighter">
                                                                        @foreach ($subcategory as $subcategory)
                                                                            <a href="{{route('category.get', ['category'=> $category->id, 'subcategory' => $subcategory->id])}}">
                                                                                <p class="ml-2">{{$subcategory->subcategory_name}}</p>
                                                                            </a>
                                                                        @endforeach
                                                                    </div>
                                                            </div>
                                                            {{-- <ul class="dropdown-menu" role="menu" aria-labelledby="{{$item->id}}">
                                                                <li role="presentation"><a role="menuitem" href="#">About Us</a></li>
                                                            </ul> --}}
                                                        </div><!-- End .col-lg-6 -->
                                                    @endforeach
                                                </div><!-- End .row -->
                                            </div><!-- End .col-lg-8 -->
                                            <div class="col-lg-4 pt-0 pr-0">
                                                <div class="banner">
                                                    <a href="#">
                                                        <img src="/storage/images/menu-banner-2.jpg" widith="380" height="614" alt="Menu banner" />
                                                    </a>
                                                </div><!-- End .banner -->
                                            </div><!-- End .col-lg-4 -->
                                        </div>
                                    </div><!-- End .megamenu -->
                                </li>
                                <li>
                                    <a href="blog.html">Blog</a>
                                </li>
                                <li>
                                    <a href="about.html">Shop</a>
                                </li>
                                <li>
                                    <a href="#">Contact us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="header-right">
                            <div class="menu-custom-block">
                                <a href="about.html">About us</a>
                                <a href="#">Contact us</a>
                            </div>
                        </div>
                    </nav>
                </div><!-- End .header-bottom -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->
