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
                    <a href="#language"><img src="{{ asset('front-style/assets/images/flags/eng.png')}}" alt="ENG Flag"
                            width="14" height="8" class="dropdown-image" /> ENG</a>
                    <div class="dropdown-box">
                        <a href="#ENG">
                            <img src="assets/images/flags/eng.png" alt="ENG Flag" width="14" height="8"
                                class="dropdown-image" />
                            ENG
                        </a>
                        <a href="#FRA">
                            <img src="{{ asset('front-style/assets/images/flags/fra.png')}}" alt="FRA Flag" width="14"
                                height="8" class="dropdown-image" />
                            FRA
                        </a>
                    </div>
                </div>
                <!-- End of Dropdown Menu -->
                <span class="divider d-lg-show"></span>
                <a href="blog.html" class="d-lg-show">Blog</a>
                <a href="contact-us.html" class="d-lg-show">Contact Us</a>
                @auth
                <div class="dropdown">
                    <a href="">My Account</a>
                    <div class="dropdown-box" style="max-width: 400px;min-width:100px">
                        <a href="#USD">hello {{ auth()->user()->full_name }}</a>
                        <a href="{{ route('userdashboard') }}">Dashboard</a>
                        <a class="" href="{{ route('logout_front_user') }}">Log Out </a>

                    </div>
                </div>
                @else
                <a href="{{route('loginForm')}}" class=""><i class="w-icon-account"></i>Sign In</a>
                <span class="delimiter d-lg-show">/</span>
                <a href="{{route('loginForm')}}"
                    class="ml-0 d-lg-show ">Register</a>
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
                    <img src="{{asset('/front-style/assets/images/itajer_logo.png')}}" alt="logo" width="144"
                        height="45" />
                </a>
                <form method="get" action="#" class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper">
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
                <a class="wishlist label-down link d-xs-show" style="position: relative"
                    href="{{ route('view_wishlist') }}">
                    <i class="w-icon-heart">
                        <span id="wishlist_counter" style="position: absolute;width: 1.9rem;height: 1.9rem;border-radius: 50%;font-style: normal;z-index: 1;right: -8px;top: -5px;font-family: Poppins, sans-serif;font-size: 1.1rem;font-weight: 400;line-height: 1.8rem;background: #ee432a;color: #fff;text-align: center;">
                            {{ \Gloudemans\Shoppingcart\Facades\Cart::instance('wishlist')->count() }}
                        </span>
                    </i>
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
                            <span class="cart-count"
                                id="cart-counter">{{ \Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->count() }}</span>
                        </i>
                        <span class="cart-label">Cart</span>
                    </a>
                    <div class="dropdown-box">
                        <div class="cart-header">
                            <span>Shopping Cart</span>
                            <a href="#" class="btn-close">Close<i class="w-icon-long-arrow-right"></i></a>
                        </div>

                        <div class="products">
                            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->content() as $item)
                            <div class="product product-cart">
                                <div class="product-detail">
                                    <a href="{{ route('singleproduct',$item->model->slug) }}"
                                        class="product-name">{{ $item->name }}</a>
                                    <div class="price-box">
                                        <span class="product-quantity">{{ $item->qty }}</span>
                                        <span class="product-price">AED {{ $item->price }}</span>
                                    </div>
                                </div>
                                <figure class="product-media">
                                    <a href="{{ route('singleproduct',$item->model->slug) }}">
                                        <img src="{{ $item->model->image }}" alt="product" height="84" width="94" />
                                    </a>
                                </figure>
                                <button class="btn btn-link btn-close cart_delete" aria-label="button"
                                    data-id="{{ $item->rowId }}">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            @endforeach
                        </div>
                        <div class="cart-total">
                            <label>Subtotal:</label>
                            @if(session()->has('coupon'))
                            <span class="price">AED
                                {{ \Gloudemans\Shoppingcart\Facades\Cart::subtotal() - session('coupon')['value'] }}</span>
                            @else
                            <span class="price">AED {{ \Gloudemans\Shoppingcart\Facades\Cart::subtotal() }}</span>
                            @endif
                        </div>

                        <div class="cart-action">
                            <a href="{{ route('viewcart') }}" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                            <a href="{{ route('checkout') }}" class="btn btn-primary btn-rounded">Checkout</a>
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
                            aria-haspopup="true" aria-expanded="true" data-display="static" title="Browse Categories">
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
                                        @php
                                            $sub_cat = \App\Models\category::where('parent_id',$category->id)->where('status',1)->get();
                                            @endphp
                                        @if(count($sub_cat) > 4)
                                        <div class="row">
                                        @foreach ($sub_cat as $single_cat )
                                            <div class="col-3">
                                                <li>
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">{{$single_cat->title}}</a></li>
                                                        
                                                    </ul>
                                                </li>
                                            </div>
                                            @endforeach
                                        </div>
                                        @else
                                            @foreach ($sub_cat as $single_cat )
                                            <li>
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.html">{{$single_cat->title}}</a></li>
                                                    
                                                </ul>
                                            </li>
                                            @endforeach
                                            @endif
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- Nav bar after categories -->
                    <nav class="main-nav">
                        <ul class="menu active-underline">
                            <li class="{{ request()->routeIs('homepage') ? 'active' : '' }}">
                                <a href="{{ route('homepage') }}">Home</a>
                            </li>
                            <li class="{{ request()->routeIs('shop_page') ? 'active' : '' }}">
                                <a href="{{ route('shop_page') }}">Shop</a>
                            </li>
                            
                            <li class="{{ request()->routeIs('become_seller') ? 'active' : '' }}">
                                <a href="{{ route('become_seller') }}">Become A Vendor</a>
                            </li>
                            <li class="{{ request()->routeIs('sellers_list') ? 'active' : '' }}" >
                                <a href="{{ route('sellers_list') }}">Vendors</a>
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
    <!-- End of Header -->