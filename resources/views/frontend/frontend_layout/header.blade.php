  <!-- Start of Header -->
  <header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <p class="welcome-msg">Welcome to ITajer Store message or remove it!</p>
            </div>
            <div class="header-right">
                <div class="dropdown">
                    <a href="#currency">USD</a>
                    <div class="dropdown-box">
                        <a href="#USD">USD</a>
                        <a href="#EUR">EUR</a>
                    </div>
                </div>
                <!-- End of DropDown Menu -->

                <div class="dropdown">
                    <a href="#language"><img src="{{ asset('front-style/assets/images/flags/eng.png')}}" alt="ENG Flag" width="14"
                            height="8" class="dropdown-image" /> ENG</a>
                    <div class="dropdown-box">
                        <a href="#ENG">
                            <img src="assets/images/flags/eng.png" alt="ENG Flag" width="14" height="8"
                                class="dropdown-image" />
                            ENG
                        </a>
                        <a href="#FRA">
                            <img src="{{ asset('front-style/assets/images/flags/fra.png')}}" alt="FRA Flag" width="14" height="8"
                                class="dropdown-image" />
                            FRA
                        </a>
                    </div>
                </div>
                <!-- End of Dropdown Menu -->
                <span class="divider d-lg-show"></span>
                <a href="blog.html" class="d-lg-show">Blog</a>
                <a href="contact-us.html" class="d-lg-show">Contact Us</a>
                @auth
                <div class="dropdown" >
                    <a href="">My Account</a>
                    <div class="dropdown-box" style="max-width: 400px;min-width:100px">
                        <a href="#USD">hello {{ auth()->user()->full_name }}</a>
                        <a href="{{ route('userdashboard') }}">Dashboard</a>
                        <a class="" href="{{ route('logout_front_user') }}">Log Out </a>
                        
                    </div>
                </div>
                @else
                    <a href="{{route('loginForm')}}" class=""><i
                            class="w-icon-account"></i>Sign In</a>
                    <span class="delimiter d-lg-show">/</span>
                    <a href="{{asset('front-style/assets/ajax/login.html')}}" class="ml-0 d-lg-show login register">Register</a>
                @endauth
            </div>
        </div>
    </div>
    <!-- End of Header Top -->

    <div class="header-middle">
        <div class="container">
            <div class="header-left mr-md-4">
                <a href="#" class="mobile-menu-toggle w-icon-hamburger" aria-label="menu-toggle">
                </a>
                <a href="{{ route('homepage') }}" class="logo ml-lg-0">
                    <img src="{{asset('/front-style/assets/images/itajer_logo.png')}}" alt="logo" width="144" height="45" />
                </a>
                <form method="get" action="#"
                    class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper">
                    <div class="select-box">
                        <select id="category" name="category">
                            <option value="">All Categories</option>
                            <option value="4">Fashion</option>
                            <option value="5">Furniture</option>
                            <option value="6">Shoes</option>
                            <option value="7">Sports</option>
                            <option value="8">Games</option>
                            <option value="9">Computers</option>
                            <option value="10">Electronics</option>
                            <option value="11">Kitchen</option>
                            <option value="12">Clothing</option>
                        </select>
                    </div>
                    <input type="text" class="form-control" name="search" id="search" placeholder="Search in..."
                        required />
                    <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                    </button>
                </form>
            </div>
            <div class="ml-4 header-right">
                <div class="header-call d-xs-show d-lg-flex align-items-center">
                    <a href="tel:#" class="w-icon-call"></a>
                    <div class="call-info d-lg-show">
                        <h4 class="mb-0 chat font-weight-normal font-size-md text-normal ls-normal text-light">
                            <a href="mailto:#" class="text-capitalize">Live Chat</a> or :</h4>
                        <a href="tel:#" class="phone-number font-weight-bolder ls-50">0(800)123-456</a>
                    </div>
                </div>
                <a class="wishlist label-down link d-xs-show" href="wishlist.html">
                    <i class="w-icon-heart"></i>
                    <span class="wishlist-label d-lg-show">Wishlist</span>
                </a>
                <a class="compare label-down link d-xs-show" href="compare.html">
                    <i class="w-icon-compare"></i>
                    <span class="compare-label d-lg-show">Compare</span>
                </a>
                <div class="mr-0 dropdown cart-dropdown cart-offcanvas mr-lg-2">
                    <div class="cart-overlay"></div>
                    <a href="#" class="cart-toggle label-down link">
                        <i class="w-icon-cart">
                            <span class="cart-count">2</span>
                        </i>
                        <span class="cart-label">Cart</span>
                    </a>
                    <div class="dropdown-box">
                        <div class="cart-header">
                            <span>Shopping Cart</span>
                            <a href="#" class="btn-close">Close<i class="w-icon-long-arrow-right"></i></a>
                        </div>

                        <div class="products">
                            <div class="product product-cart">
                                <div class="product-detail">
                                    <a href="product-default.html" class="product-name">Beige knitted
                                        elas<br>tic
                                        runner shoes</a>
                                    <div class="price-box">
                                        <span class="product-quantity">1</span>
                                        <span class="product-price">$25.68</span>
                                    </div>
                                </div>
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ asset('front-style/assets/images/cart/product-1.jpg')}}" alt="product" height="84"
                                            width="94" />
                                    </a>
                                </figure>
                                <button class="btn btn-link btn-close" aria-label="button">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>

                            <div class="product product-cart">
                                <div class="product-detail">
                                    <a href="product-default.html" class="product-name">Blue utility
                                        pina<br>fore
                                        denim dress</a>
                                    <div class="price-box">
                                        <span class="product-quantity">1</span>
                                        <span class="product-price">$32.99</span>
                                    </div>
                                </div>
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="assets/images/cart/product-2.jpg" alt="product" width="84"
                                            height="94" />
                                    </a>
                                </figure>
                                <button class="btn btn-link btn-close" aria-label="button">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>

                        <div class="cart-total">
                            <label>Subtotal:</label>
                            <span class="price">$58.67</span>
                        </div>

                        <div class="cart-action">
                            <a href="cart.html" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                            <a href="checkout.html" class="btn btn-primary btn-rounded">Checkout</a>
                        </div>
                    </div>
                    <!-- End of Dropdown Box -->
                </div>
            </div>
        </div>
    </div>
    <!-- End of Header Middle -->

    <div class="header-bottom sticky-content fix-top sticky-header">
        <div class="container">
            <div class="inner-wrap">
                <div class="flex-1 header-left">
                    <div class="dropdown category-dropdown has-border" data-visible="true">
                        <a href="#" class="category-toggle text-dark" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="true" data-display="static"
                            title="Browse Categories">
                            <i class="w-icon-category"></i>
                            <span>Browse Categories</span>
                        </a>

                        <div class="dropdown-box">
                            <ul class="menu vertical-menu category-menu">
                            @php
                            $categories = \App\Models\category::where('is_parent',0)->where('status',1)->get();
                            @endphp
                            @foreach($categories as $category )
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-home"></i>{{$category->title}}
                                    </a>
                                    <ul class="megamenu">
                                        <li>
                                            <h4 class="menu-title">Bedroom</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">Beds, Frames &
                                                        Bases</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Dressers</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Nightstands</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">Kid's Beds &
                                                        Headboards</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Armoires</a></li>
                                            </ul>

                                            <h4 class="mt-1 menu-title">Living Room</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">Coffee Tables</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">Chairs</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Tables</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Futons & Sofa
                                                        Beds</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Cabinets &
                                                        Chests</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                    <nav class="main-nav">
                        <ul class="menu active-underline">
                            <li class="active">
                                <a href="{{ route('homepage') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('shop_page') }}">Shop</a>
                            </li>
                            <li>
                                <a href="vendor-dokan-store.html">Vendor</a>
                                <ul>
                                    <li>
                                        <a href="vendor-dokan-store-list.html">Store Listing</a>
                                        <ul>
                                            <li><a href="vendor-dokan-store-list.html">Store listing 1</a></li>
                                            <li><a href="vendor-wcfm-store-list.html">Store listing 2</a></li>
                                            <li><a href="vendor-wcmp-store-list.html">Store listing 3</a></li>
                                            <li><a href="vendor-wc-store-list.html">Store listing 4</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="vendor-dokan-store.html">Vendor Store</a>
                                        <ul>
                                            <li><a href="vendor-dokan-store.html">Vendor Store 1</a></li>
                                            <li><a href="vendor-wcfm-store-product-grid.html">Vendor Store 2</a>
                                            </li>
                                            <li><a href="vendor-wcmp-store-product-grid.html">Vendor Store 3</a>
                                            </li>
                                            <li><a href="vendor-wc-store-product-grid.html">Vendor Store 4</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="blog.html">Blog</a>
                            </li>
                            <li>
                                <a href="about-us.html">Pages</a>
                                <ul>

                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="become-a-vendor.html">Become A Vendor</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="error-404.html">Error 404</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="compare.html">Compare</a></li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <a href="#" class="d-xl-show"><i class="mr-1 w-icon-map-marker"></i>Track Order</a>
                    <a href="#"><i class="w-icon-sale"></i>Daily Deals</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End of Header -->
