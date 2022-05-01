    <div class="header-top">
        <div class="container">
            @if(Config::get('app.locale') == 'en')

            <div class="header-left">
                <p class="welcome-msg">Welcome to ITajer Store Get the best Deals with us !</p>
            </div>
            @else
            <div class="header-left">
                <p class="welcome-msg">مرحبا بك في متجرنا . معنا ستحصل على افضل العروض وبارخص الاسعار</p>
            </div>
            @endif
            <div class="header-right">
                <div class="dropdown">
                    <a href="#currency">USD</a>
                    {{-- <div class="dropdown-box">
                        <a href="#USD">USD</a>
                        <a href="#EUR">EUR</a>
                    </div> --}}
                </div>
                <!-- End of DropDown Menu -->

                <div class="">
                    @if(Config::get('app.locale') == 'en')
                    <a href="{{ route('lang.switch','ar') }}">
                        <img src="{{ asset('front-style/assets/images/flags/uae.png')}}" alt="ENG Flag"
                            width="20" height="8" class="dropdown-image " style="margin-right: 6px" /> Ar
                        </a>
                    @else
                    <a href="{{ route('lang.switch','en') }}">
                        ENG <img src="{{ asset('front-style/assets/images/flags/eng.png')}}" alt="ENG Flag"
                            width="20" height="8" class="dropdown-image " style="margin-right: 6px"/> 
                            
                        </a>
                    @endif
                    
                </div>
                <!-- End of Dropdown Menu -->
                <!-- Change the language -->
                @if(Config::get('app.locale') == 'en')

                <span class="divider d-lg-show"></span>
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

                @else
<!-- Arabice Version -->
                <span class="divider d-lg-show"></span>
                <a href="contact-us.html" class="d-lg-show">أتصل بنا</a>
                @auth
                <div class="dropdown">
                    <a href="">حسابي</a>
                    <div class="dropdown-box" style="max-width: 400px;min-width:100px">
                        <a href="#USD">مرحبا {{ auth()->user()->full_name }}</a>
                        <a href="{{ route('userdashboard') }}">لوحة التحكم</a>
                        <a class="" href="{{ route('logout_front_user') }}">تسجيل الخروج </a>

                    </div>
                </div>
                @else
                <a href="{{route('loginForm')}}" class=""><i class="w-icon-account"></i>تسجيل الدخول</a>
                <span class="delimiter d-lg-show">/</span>
                <a href="{{route('loginForm')}}"
                    class="ml-0 d-lg-show ">حساب جديد</a>
                @endauth

                @endif
            </div>
        </div>
    </div>
    <!-- End of Header Top -->
    @if(Config::get('app.locale') == 'en')
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
                            <option value="">All Department </option>
                            <option value="shps_business">Shop Business</option>
                            <option value="home_business">Home Business</option>
                            <option value="personal_business">Personal Business</option>
                            
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
                        <a href="tel:+971501413429" class="phone-number font-weight-bolder ls-50">+(971)501413429</a>
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

                        <div class="products" style="overflow-y: auto">
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
                                    <a href="{{ route('shop_special_category',$category->slug) }}">
                                        {{$category->title}}
                                    </a>
                                    @php
                                    $sub_cat = \App\Models\category::where('parent_id',$category->id)->where('status',1)->get();
                                    @endphp
                                    @if($sub_cat->count()>0)

                                    <ul class="megamenu">
                                        <li>
                                           
                                            <h4 class="menu-title">Most Popular</h4>
                                            <hr class="divider">
                                            <ul>
                                                @foreach ($sub_cat as $single_cat )
                                                <li><a href="{{ route('shop_special_category',$category->slug) }}">{{$single_cat->title}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li>
                                            <h4 class="menu-title">Top Brands</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">New Arrivals</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">Best Sellers</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Accessories</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">Jewlery &
                                                        Watches</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="banner-fixed menu-banner menu-banner2">
                                                <figure>
                                                    <img src="{{ asset('front-style/assets/images/menu/banner-2.jpg') }}" alt="Menu Banner"
                                                        width="235" height="347" />
                                                </figure>
                                            </div>
                                        </li>
                                    </ul>
                                    @endif
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
    @else
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
                            <option value="">الفئات</option>
                            <option value="shop_business">الاسواق</option>
                            <option value="personal_business">الفردية</option>
                            <option value="home_business">المنزلية</option>
                            
                        </select>
                    </div>
                    <input type="text" class="form-control" name="search" id="search" placeholder="بحث....."
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
                            <a href="mailto:#" class="text-capitalize">أتصال مباشر</a> أو :</h4>
                        <a href="tel:+971501413429" class="phone-number font-weight-bolder ls-50 " style="float:left;direction:ltr">+(971)501413429</a>
                    </div>
                </div>
                <a class="wishlist label-down link d-xs-show" style="position: relative"
                    href="{{ route('view_wishlist') }}">
                    <i class="w-icon-heart">
                        <span id="wishlist_counter" style="position: absolute;width: 1.9rem;height: 1.9rem;border-radius: 50%;font-style: normal;z-index: 1;right: -8px;top: -5px;font-family: Poppins, sans-serif;font-size: 1.1rem;font-weight: 400;line-height: 1.8rem;background: #ee432a;color: #fff;text-align: center;">
                            {{ \Gloudemans\Shoppingcart\Facades\Cart::instance('wishlist')->count() }}
                        </span>
                    </i>
                    <span class="wishlist-label d-lg-show">المفضلة</span>
                </a>
                <div class="mr-0 dropdown cart-dropdown cart-offcanvas mr-lg-2">
                    <div class="cart-overlay"></div>
                    <a href="#" class="cart-toggle label-down link">
                        <i class="w-icon-cart">
                            <span class="cart-count"
                                id="cart-counter">{{ \Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->count() }}</span>
                        </i>
                        <span class="cart-label">السلة</span>
                    </a>
                    <div class="dropdown-box">
                        <div class="cart-header">
                            <span>سلة المشتريات</span>
                            <a href="#" class="btn-close">أغلاق<i class="w-icon-long-arrow-left"></i></a>
                        </div>

                        <div class="products" style="overflow-y: auto">
                            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->content() as $item)
                            <div class="product product-cart">
                                <div class="product-detail">
                                    <a href="{{ route('singleproduct',$item->model->slug) }}"
                                        class="product-name">{{ $item->name }}</a>
                                    <div class="price-box">
                                        <span class="product-quantity">{{ $item->qty }}</span>
                                        <span class="product-price"> د.إ {{ $item->price }}</span>
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
                            <label>المجموع:</label>
                            @if(session()->has('coupon'))
                            <span class="price"> د.إ
                                {{ \Gloudemans\Shoppingcart\Facades\Cart::subtotal() - session('coupon')['value'] }}</span>
                            @else
                            <span class="price"> د.إ {{ \Gloudemans\Shoppingcart\Facades\Cart::subtotal() }}</span>
                            @endif
                        </div>

                        <div class="cart-action">
                            <a href="{{ route('viewcart') }}" class="btn btn-dark btn-outline btn-rounded">السلة</a>
                            <a href="{{ route('checkout') }}" class="btn btn-primary btn-rounded">صفحة الدفع</a>
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
                            <span>تصفح الاقسام</span>
                        </a>
                        
                        <div class="dropdown-box">
                            <ul class="menu vertical-menu category-menu">
                                @php
                                $categories = \App\Models\category::where('is_parent',0)->where('status',1)->get();
                                @endphp
                                @foreach($categories as $category )
                                <li>
                                    <a href="{{ route('shop_special_category',$category->slug) }}">
                                        {{$category->ar_title}}
                                    </a>
                                    @php
                                    $sub_cat = \App\Models\category::where('parent_id',$category->id)->where('status',1)->get();
                                    @endphp
                                    @if($sub_cat->count() > 0)
                                    <ul class="megamenu">
                                        <li>
                                           
                                            <h4 class="menu-title">الاكثر زيارة</h4>
                                            <hr class="divider">
                                            <ul>
                                                @foreach ($sub_cat as $single_cat )
                                                <li><a href="{{ route('shop_special_category',$category->slug) }}">{{$single_cat->ar_title}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li>
                                            <h4 class="menu-title">العلامات التجارية</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="#">مرسيدس</a>
                                                </li>
                                                <li><a href="#">اودي</a>
                                                </li>
                                                <li><a href="#">لولو ماركت</a></li>
                                                <li><a href="#">اديداس</a></li>
                                                
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="banner-fixed menu-banner menu-banner2">
                                                <figure>
                                                    <img src="{{ asset('front-style/assets/images/menu/banner-2.jpg') }}" alt="Menu Banner"
                                                        width="235" height="347" />
                                                </figure>
                                            </div>
                                        </li>
                                    </ul>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- Nav bar after categories -->
                    <nav class="main-nav">
                        <ul class="menu active-underline">
                            <li class="{{ request()->routeIs('homepage') ? 'active' : '' }}">
                                <a href="{{ route('homepage') }}">الرئيسية</a>
                            </li>
                            <li class="{{ request()->routeIs('shop_page') ? 'active' : '' }}">
                                <a href="{{ route('shop_page') }}">المتجر</a>
                            </li>
                            
                            <li class="{{ request()->routeIs('become_seller') ? 'active' : '' }}">
                                <a href="{{ route('become_seller') }}">كيف تصبح تاجر</a>
                            </li>
                            <li class="{{ request()->routeIs('sellers_list') ? 'active' : '' }}" >
                                <a href="{{ route('sellers_list') }}">قائمة التجار</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <a href="#" class="d-xl-show"><i class="mr-1 w-icon-map-marker"></i>مسار الشحنة</a>
                    <a href="#"><i class="w-icon-sale"></i>أفضل العروض</a>
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- End of Header -->