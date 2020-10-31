<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active"><a href="/">Home</a></li>
                    <li>
                        <a href="#">Categories</a>
                            <ul>
                                @foreach (App\FrontendControl::getCategory() as $category)
                                <li>
                                    <a href="#">{{$category->category_name}}</a>
                                    <ul>
                                        @php
                                            $subcategory = DB::table('subcategories')->where('category_id', $category->id)->get();
                                        @endphp
                                        @foreach ($subcategory as $subcategory)
                                            <li><a href="{{route('category.get', ['category'=> $category->id, 'subcategory' => $subcategory->id])}}">{{$subcategory->subcategory_name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                            </ul>

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
                    @auth
                        <li>
                            <a href="/account">My Account</a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </a>
                        </li>
                    @else
                        <li>
                            <a class="login" href="/login">Log In</a>
                        </li>
                        <li>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        </li>
                    @endauth
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->
