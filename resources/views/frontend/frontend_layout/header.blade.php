   <!-- Make the text best deals Glowing if there is products -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
    div.checkRadioContainer > label > input {
	visibility: hidden;
}

div.checkRadioContainer {
	max-width: 100%;
}
div.checkRadioContainer > label {
	display: block;
	border: 2px solid grey;
	margin-bottom: -2px;
	cursor: pointer;
    margin: 10px 0
}

div.checkRadioContainer > label:hover {
	background-color: AliceBlue;
}

div.checkRadioContainer > label > span {
	display: inline-block;
	vertical-align: top;
	line-height: 2em;
}

div.checkRadioContainer > label > input + i {
	visibility: hidden;
	color: green;
	margin-left: 10px;
	margin-right: 0.2em;
}

div.checkRadioContainer > label > input:checked + i {
	visibility: visible;
}
</style>
   <style>
       .modal {
           position: fixed;
           top: 0;
           left: 0;
           z-index: 1055;
           display: none;
           width: 100%;
           height: 100%;
           overflow-x: hidden;
           overflow-y: auto;
           outline: 0
       }

       .modal-dialog {
           position: relative;
           width: auto;
           margin: .5rem;
           pointer-events: none
       }

       .modal.fade .modal-dialog {
           transition: transform .3s ease-out;
           transform: translate(0, -50px)
       }

       @media (prefers-reduced-motion:reduce) {
           .modal.fade .modal-dialog {
               transition: none
           }
       }

       .modal.show .modal-dialog {
           transform: none
       }

       .modal.modal-static .modal-dialog {
           transform: scale(1.02)
       }

       .modal-dialog-scrollable {
           height: calc(100% - 1rem)
       }

       .modal-dialog-scrollable .modal-content {
           max-height: 100%;
           overflow: hidden
       }

       .modal-dialog-scrollable .modal-body {
           overflow-y: auto
       }

       .modal-dialog-centered {
           display: flex;
           align-items: center;
           min-height: calc(100% - 1rem)
       }

       .modal-content {
           position: relative;
           display: flex;
           flex-direction: column;
           width: 100%;
           pointer-events: auto;
           background-color: #fff;
           background-clip: padding-box;
           border: 1px solid rgba(0, 0, 0, .2);
           border-radius: .3rem;
           outline: 0
       }

       .modal-backdrop {
           position: fixed;
           top: 0;
           left: 0;
           z-index: 1050;
           width: 100vw;
           height: 100vh;
           background-color: #000
       }

       .modal-backdrop.fade {
           opacity: 0
       }

       .modal-backdrop.show {
           opacity: .5
       }

       .modal-header {
           display: flex;
           flex-shrink: 0;
           align-items: center;
           justify-content: space-between;
           padding: 1rem 1rem;
           border-bottom: 1px solid #dee2e6;
           border-top-left-radius: calc(.3rem - 1px);
           border-top-right-radius: calc(.3rem - 1px)
       }

       .modal-header .btn-close {
           padding: .5rem .5rem;
           margin: -.5rem -.5rem -.5rem auto
       }

       .modal-title {
           margin-bottom: 0;
           line-height: 1.5
       }

       .modal-body {
           position: relative;
           flex: 1 1 auto;
           padding: 1rem
       }

       .modal-footer {
           display: flex;
           flex-wrap: wrap;
           flex-shrink: 0;
           align-items: center;
           justify-content: flex-end;
           padding: .75rem;
           border-top: 1px solid #dee2e6;
           border-bottom-right-radius: calc(.3rem - 1px);
           border-bottom-left-radius: calc(.3rem - 1px)
       }

       .modal-footer>* {
           margin: .25rem
       }

       @media (min-width:576px) {
           .modal-dialog {
               max-width: 500px;
               margin: 1.75rem auto
           }

           .modal-dialog-scrollable {
               height: calc(100% - 3.5rem)
           }

           .modal-dialog-centered {
               min-height: calc(100% - 3.5rem)
           }

           .modal-sm {
               max-width: 300px
           }
       }

       @media (min-width:992px) {

           .modal-lg,
           .modal-xl {
               max-width: 800px
           }
       }

       @media (min-width:1200px) {
           .modal-xl {
               max-width: 1140px
           }
       }

       .modal-fullscreen {
           width: 100vw;
           max-width: none;
           height: 100%;
           margin: 0
       }

       .modal-fullscreen .modal-content {
           height: 100%;
           border: 0;
           border-radius: 0
       }

       .modal-fullscreen .modal-header {
           border-radius: 0
       }

       .modal-fullscreen .modal-body {
           overflow-y: auto
       }

       .modal-fullscreen .modal-footer {
           border-radius: 0
       }

       @media (max-width:575.98px) {
           .modal-fullscreen-sm-down {
               width: 100vw;
               max-width: none;
               height: 100%;
               margin: 0
           }

           .modal-fullscreen-sm-down .modal-content {
               height: 100%;
               border: 0;
               border-radius: 0
           }

           .modal-fullscreen-sm-down .modal-header {
               border-radius: 0
           }

           .modal-fullscreen-sm-down .modal-body {
               overflow-y: auto
           }

           .modal-fullscreen-sm-down .modal-footer {
               border-radius: 0
           }
       }

       @media (max-width:767.98px) {
           .modal-fullscreen-md-down {
               width: 100vw;
               max-width: none;
               height: 100%;
               margin: 0
           }

           .modal-fullscreen-md-down .modal-content {
               height: 100%;
               border: 0;
               border-radius: 0
           }

           .modal-fullscreen-md-down .modal-header {
               border-radius: 0
           }

           .modal-fullscreen-md-down .modal-body {
               overflow-y: auto
           }

           .modal-fullscreen-md-down .modal-footer {
               border-radius: 0
           }
       }

       @media (max-width:991.98px) {
           .modal-fullscreen-lg-down {
               width: 100vw;
               max-width: none;
               height: 100%;
               margin: 0
           }

           .modal-fullscreen-lg-down .modal-content {
               height: 100%;
               border: 0;
               border-radius: 0
           }

           .modal-fullscreen-lg-down .modal-header {
               border-radius: 0
           }

           .modal-fullscreen-lg-down .modal-body {
               overflow-y: auto
           }

           .modal-fullscreen-lg-down .modal-footer {
               border-radius: 0
           }
       }

       @media (max-width:1199.98px) {
           .modal-fullscreen-xl-down {
               width: 100vw;
               max-width: none;
               height: 100%;
               margin: 0
           }

           .modal-fullscreen-xl-down .modal-content {
               height: 100%;
               border: 0;
               border-radius: 0
           }

           .modal-fullscreen-xl-down .modal-header {
               border-radius: 0
           }

           .modal-fullscreen-xl-down .modal-body {
               overflow-y: auto
           }

           .modal-fullscreen-xl-down .modal-footer {
               border-radius: 0
           }
       }

       @media (max-width:1399.98px) {
           .modal-fullscreen-xxl-down {
               width: 100vw;
               max-width: none;
               height: 100%;
               margin: 0
           }

           .modal-fullscreen-xxl-down .modal-content {
               height: 100%;
               border: 0;
               border-radius: 0
           }

           .modal-fullscreen-xxl-down .modal-header {
               border-radius: 0
           }

           .modal-fullscreen-xxl-down .modal-body {
               overflow-y: auto
           }

           .modal-fullscreen-xxl-down .modal-footer {
               border-radius: 0
           }
       }

       .glow {
           color: #000;
           text-align: center;
           /* animation: glow 1s ease-in-out infinite alternate; */
           animation: heartbeat 3s ease-in-out infinite alternate;

       }

       @keyframes heartbeat {
           0% {
               transform: scale(.75);
               text-shadow: 0 0 2px #fff, 0 0 4px #fff, 0 0 6px #e60000, 0 0 8px #e60000, 0 0 10px #e60000, 0 0 12px #e60000, 0 0 14px #e60000;

           }

           20% {
               transform: scale(1);
           }

           40% {
               transform: scale(.75);
           }

           60% {
               transform: scale(1);
           }

           80% {
               transform: scale(.75);
           }

           100% {
               transform: scale(.75);
               text-shadow: 0 0 2px #fff, 0 0 4px #ff6969, 0 0 6px #ff6969, 0 0 8px #ff6969, 0 0 10px #ff6969, 0 0 12px #ff6969, 0 0 15px #ff6969;

           }

       }

       /* @-webkit-keyframes glow {
   from {
     text-shadow: 0 0 2px #fff, 0 0 4px #fff, 0 0 6px #e60000, 0 0 8px #e60000, 0 0 10px #e60000, 0 0 12px #e60000, 0 0 14px #e60000;
   }
   
   to {
     text-shadow: 0 0 2px #fff, 0 0 4px #ff6969, 0 0 6px #ff6969, 0 0 8px #ff6969, 0 0 10px #ff6969, 0 0 12px #ff6969, 0 0 15px #ff6969;
   } */
       }
   </style>

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
                   <a href="#currency">AED</a>
                   <div class="dropdown-box">
                       <a href="#USD">AED</a>
                   </div>
               </div>
               <!-- End of DropDown Menu -->

               <div class="">
                   @if(Config::get('app.locale') == 'en')
                   <a href="{{ route('lang.switch','ar') }}">
                       <img src="{{ asset('front-style/assets/images/flags/uae.png')}}" alt="ENG Flag" width="20"
                           height="8" class="dropdown-image " style="margin-right: 6px" /> Ar
                   </a>
                   @else
                   <a href="{{ route('lang.switch','en') }}">
                       ENG <img src="{{ asset('front-style/assets/images/flags/eng.png')}}" alt="ENG Flag" width="20"
                           height="8" class="dropdown-image " style="margin-right: 6px" />

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
               <a href="{{route('loginForm')}}" class="ml-0 d-lg-show ">Register</a>
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
               <a href="{{route('loginForm')}}" class="ml-0 d-lg-show ">حساب جديد</a>
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
               <form method="POST" action="{{ route('search_product') }}"
                   class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper"
                   style="border-right: 2px solid #ee432a;border-left:2px solid #ee432a">
                   @csrf
                   <input type="text" class="form-control" name="search_product" id="search_text"
                       placeholder="Search in..." required />
                   <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                   </button>
               </form>
           </div>
           <div class="ml-4 header-right">
               <div class="header-call d-xs-show d-lg-flex align-items-start">
                   <a href="#">
                       <img src="{{ asset('front-style/assets/images/flags/uae.png')}}" alt="ENG Flag" width="40"
                           height="20" class="dropdown-image " style="margin-right: 6px;margin-top:10px" />
                   </a>
                   <div class="call-info d-lg-show">
                       <div class="modal-drop" data-bs-toggle="modal" data-bs-target="#exampleModal">
                           <span style="font-size:20px;font-weight:bold;">
                               <a>
                                   <h4 class="m-0" style="margin:0">Deliver To</h4>
                               </a>
                               <a> @auth
                                   <p class="mt-0"> {{ auth()->user()->full_name }} </p>
                                   @else
                                   <p class="mt-0"> UAE <b>(ONLY)</b> </p>
                                   @endauth</a>
                           </span>
                       </div>

                       <!-- Modal -->
                       <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                           aria-hidden="true">
                           <div class="modal-dialog">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLabel">Choose your delivery location
                                       </h5>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal"
                                           aria-label="Close"></button>
                                   </div>
                                   @auth
                                   @php
                                       dump(auth()->user()->address);
                                   @endphp
                                   @if(empty(auth()->user()->address) || auth()->user()->address == null)
                                   <div class="modal-body">
                                    Delivery options and delivery speeds may vary for different locations <br>
                                    <b class="mt-2 mb-2">The Current user does not have any address stores so Please Click below to add new addresses
                                    </b>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <a href="{{route('userdashboard').'/#account-addresses'}}" class=""><button type="submit"
                                                class="btn btn-primary">Add New Address</button></a>
                                    </div>
                                   @else
                                   <form action="{{route('userdashboard')}}" method="Post">
                                       <div class="modal-body">
                                           @csrf
                                           <div class="checkRadioContainer">
                                            <label style=" padding:10px">
                                                <input type="radio" name="radioGroup" checked  />
                                                <i class="fa fa-check fa-2x"></i>
                                                <span>MOHAMMAD شارع العلم Nirvana travel and tourism, Abu Dhabi Marina Mall</span>
                                            </label>
                                            <label style=" padding:10px">
                                                <input type="radio" name="radioGroup"   />
                                                <i class="fa fa-check fa-2x"></i>
                                                <span>9yards kalifahlifa first street, Abu Dhabi Abu Dhabi Intl Airport</span>
                                            </label>
                                            <label style=" padding:10px">
                                                <input type="radio" name="radioGroup"   />
                                                <i class="fa fa-check fa-2x"></i>
                                                <span>Walied Mohammad bin khalifa Tal Al Sanawbar restaurant & Grills, Al Ain Hili</span>
                                            </label>
                                        </div>
                                       </div>
                                       <div class="modal-footer">
                                           <button type="button" class="btn btn-secondary"
                                               data-bs-dismiss="modal">Close</button>
                                           <button type="submit" class="btn btn-primary">Save Location</button>
                                       </div>
                                   </form>
                                   @endif
                                   @else
                                   <div class="modal-body">
                                       Delivery options and delivery speeds may vary for different locations <br>
                                       <b> Click below Sign in to see your addresses
                                       </b>
                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary"
                                           data-bs-dismiss="modal">Close</button>
                                       <a href="{{route('loginForm')}}" class=""><button type="submit"
                                               class="btn btn-primary">Please login First</button></a>
                                   </div>
                                   @endauth
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <a class="wishlist label-down link d-xs-show" style="position: relative"
                   href="{{ route('view_wishlist') }}">
                   <i class="w-icon-heart">
                       <span id="wishlist_counter"
                           style="position: absolute;width: 1.9rem;height: 1.9rem;border-radius: 50%;font-style: normal;z-index: 1;right: -8px;top: -5px;font-family: Poppins, sans-serif;font-size: 1.1rem;font-weight: 400;line-height: 1.8rem;background: #ee432a;color: #fff;text-align: center;">
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
                           @php
                           $other_image = explode(',', $item->model->image);
                           @endphp
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
                                       @if(count($other_image) > 1)
                                       <img src="{{ asset($other_image[0]) }}" alt="Product" style="width: 100% !important;
                                         height: 90px !important;object-fit: contain;" />
                                       <img src="{{ asset($other_image[1]) }}" alt="Product" style="width: 100% !important;
                                          height: 90px !important;object-fit: contain;" />
                                       @else
                                       <img src="{{ asset($other_image[0]) }}" alt="Product" style="width: 100% !important;
                                          height: 90px !important;object-fit: contain;" />
                                       @endif </a>
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
                               {{ number_format((float) str_replace(',','',\Gloudemans\Shoppingcart\Facades\Cart::subtotal()) - session('coupon')['value'],2) }}</span>
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
                                   $sub_cat =
                                   \App\Models\category::where('parent_id',$category->id)->where('status',1)->get();
                                   @endphp
                                   @if($sub_cat->count()>0)

                                   <ul class="megamenu">
                                       <li>

                                           <h4 class="menu-title">Most Popular</h4>
                                           <hr class="divider">
                                           <ul>
                                               @foreach ($sub_cat as $single_cat )
                                               <li><a
                                                       href="{{ route('shop_child_cat',$single_cat->slug) }}">{{$single_cat->title}}</a>
                                               </li>
                                               @endforeach
                                           </ul>
                                       </li>
                                       <li>
                                           <h4 class="menu-title">Top Brands</h4>
                                           <hr class="divider">
                                           @php
                                           $brands = \App\Models\brand::where('cat_id',$category->id)->get();
                                           @endphp
                                           <ul>
                                               @foreach ($brands as $brand)
                                               <li><a
                                                       href="{{ route('shop_brands',$brand->slug) }}">{{ $brand->title }}</a>
                                               </li>
                                               @endforeach
                                           </ul>
                                       </li>
                                       <li>
                                           <div class="banner-fixed menu-banner menu-banner2">
                                               <figure>
                                                   <img src="{{ asset('front-style/assets/images/menu/logobanner.png') }}"
                                                       alt="Menu Banner" width="235" height="347" />
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
                               <a href="{{ route('shop_page') }}">Collections</a>
                           </li>
                           <li class="{{ request()->routeIs('grocery_shop_only') ? 'active' : '' }}">
                               <a href="{{ route('grocery_shop_only') }}">Grocery</a>
                           </li>
                           <li class="{{ request()->routeIs('become_seller') ? 'active' : '' }}">
                               <a href="{{ route('become_seller') }}">Become A Vendor</a>
                           </li>
                           <li class="{{ request()->routeIs('sellers_list') ? 'active' : '' }}">
                               <a href="{{ route('sellers_list') }}">Vendors</a>
                           </li>
                       </ul>
                   </nav>
               </div>
               <div class="header-right">
                   <a href="#" class="d-xl-show"><i class="mr-1 w-icon-map-marker"></i>Track Order</a>
                   @php
                   $best_deals_checker = \App\Models\product::where(['status' => 1])->where('discound','>',20)->count();
                   @endphp
                   <a class="@if ($best_deals_checker > 0 ) glow @else @endif
                     " href="{{ route('best_deals') }}"><i class="w-icon-sale glow"></i>Best Deals</a>
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
               <form method="POST" action="{{ route('search_product') }}"
                   class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper"
                   style="border-right: 2px solid #ee432a">
                   @csrf
                   <input type="text" class="form-control" name="search_product" id="search_text"
                       placeholder="ما الذي تبحث عنه ؟ " required />
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
                       <a href="tel:+971501413429" class="phone-number font-weight-bolder ls-50 "
                           style="float:left;direction:ltr">+(971)501413429</a>
                   </div>
               </div>
               <a class="wishlist label-down link d-xs-show" style="position: relative"
                   href="{{ route('view_wishlist') }}">
                   <i class="w-icon-heart">
                       <span id="wishlist_counter"
                           style="position: absolute;width: 1.9rem;height: 1.9rem;border-radius: 50%;font-style: normal;z-index: 1;right: -8px;top: -5px;font-family: Poppins, sans-serif;font-size: 1.1rem;font-weight: 400;line-height: 1.8rem;background: #ee432a;color: #fff;text-align: center;">
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
                               {{ number_format((float) str_replace(',','',\Gloudemans\Shoppingcart\Facades\Cart::subtotal()) - session('coupon')['value'],2) }}</span>
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
                                   $sub_cat =
                                   \App\Models\category::where('parent_id',$category->id)->where('status',1)->get();
                                   @endphp
                                   @if($sub_cat->count() > 0)
                                   <ul class="megamenu">
                                       <li>

                                           <h4 class="menu-title">الاكثر زيارة</h4>
                                           <hr class="divider">
                                           <ul>
                                               @foreach ($sub_cat as $single_cat )
                                               <li><a
                                                       href="{{ route('shop_special_category',$category->slug) }}">{{$single_cat->ar_title}}</a>
                                               </li>
                                               @endforeach
                                           </ul>
                                       </li>
                                       <li>
                                           <h4 class="menu-title">العلامات التجارية</h4>
                                           <hr class="divider">
                                           @php
                                           $brands = \App\Models\brand::where('cat_id',$category->id)->get();
                                           @endphp
                                           <ul>
                                               @foreach ($brands as $brand)
                                               <li><a
                                                       href="{{ route('shop_brands',$brand->slug) }}">{{ $brand->ar_title }}</a>
                                               </li>
                                               @endforeach
                                           </ul>
                                       </li>
                                       <li>
                                           <div class="banner-fixed menu-banner menu-banner2">
                                               <figure>
                                                   <img src="{{ asset('front-style/assets/images/menu/logobanner.png') }}"
                                                       alt="Menu Banner" width="235" height="347" />
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
                           <li class="{{ request()->routeIs('grocery_shop_only') ? 'active' : '' }}">
                               <a href="{{ route('grocery_shop_only') }}"> البقالة</a>
                           </li>
                           <li class="{{ request()->routeIs('become_seller') ? 'active' : '' }}">
                               <a href="{{ route('become_seller') }}">كيف تصبح تاجر</a>
                           </li>
                           <li class="{{ request()->routeIs('sellers_list') ? 'active' : '' }}">
                               <a href="{{ route('sellers_list') }}">قائمة التجار</a>
                           </li>
                       </ul>
                   </nav>
               </div>
               <div class="header-right">
                   <a href="#" class="d-xl-show"><i class="mr-1 w-icon-map-marker"></i>مسار الشحنة</a>
                   @php
                   $best_deals_checker = \App\Models\product::where(['status' => 1])->where('discound','>',20)->count();
                   @endphp
                   <a class="@if ($best_deals_checker > 0 ) glow @else @endif
                         " href="{{ route('best_deals') }}"><i class="w-icon-sale glow"></i> أفضل العروض</a>
               </div>
           </div>
       </div>
   </div>
   @endif
   <!-- End of Header -->