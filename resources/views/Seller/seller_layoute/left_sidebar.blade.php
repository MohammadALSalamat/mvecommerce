  <!-- ////////////////////////////////////////////////////////////////////////////-->
  @if (Config::get('app.locale') == 'en')
  <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item"><a href="{{ route('seller') }}"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span><span class="float-right mr-2 badge badge-info badge-pill">0</span></a>
        </li>
        <li class=" nav-item" 
        ><a href="{{ route('documentaion') }}"><i class="la la-book"></i><span class="menu-title" data-i18n="nav.templates.main">Documentaion</span></a></li>
        <li class=" nav-item" 
        ><a href="#"><i class="la la-television"></i><span class="menu-title" data-i18n="nav.templates.main">Products Managment</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('seller_viewproducts') }}" data-i18n="nav.templates.vert.main">View Products</a>
            </li>
            <li><a class="menu-item" href="{{ route('seller_createproducts') }}" data-i18n="nav.templates.horz.main">Create Products</a>
            </li>
          </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-arrows-v"></i><span class="menu-title" data-i18n="nav.vertical_nav.main">Orders Managment</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('view_order_seller') }}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">View Orders</a>
            </li>
          </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-cc-visa"></i><span class="menu-title" data-i18n="nav.footers.main">Subscraibe Managment</span>
          @php
            $subscribe_plan = \App\Models\subscription::where('seller_id',Auth::guard('seller')->user()->id)->value('stripe_plan');
          @endphp
          <span class="float-right mr-2 badge badge-pill badge-danger">{{ $subscribe_plan }}</span>
        </a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('viewSubscription_Status') }}" data-i18n="nav.footers.footer_light"> View Status Of Subscription</a>
            </li>
          </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-download"></i><span class="menu-title" data-i18n="nav.footers.main">Sittings Managment</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('view_seller_details') }}" data-i18n="nav.footers.footer_light">View Profile</a>
            </li>
            
          </ul>
        </li>
        <li class=" nav-item">
         
          <a class="" href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">  <i class="la la-power-off"></i>
          {{ __('Logout') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
                                    
        </li>
        <li>
        </li>
      </ul>
    </div>
  </div>
  @else
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item"><a href="{{ route('seller') }}"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">لحة التحكم</span><span class="float-right mr-2 badge badge-info badge-pill">0</span></a>
        </li>
        <li class=" nav-item" 
        ><a href="{{ route('documentaion') }}"><i class="la la-book"></i><span class="menu-title" data-i18n="nav.templates.main">دليل الاستخدام</span></a></li>
        <li class=" nav-item" 
        ><a href="#"><i class="la la-television"></i><span class="menu-title" data-i18n="nav.templates.main">أدارة المنتجات</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('seller_viewproducts') }}" data-i18n="nav.templates.vert.main">رؤية المنتجات</a>
            </li>
            <li><a class="menu-item" href="{{ route('seller_createproducts') }}" data-i18n="nav.templates.horz.main">أضافة منتج</a>
            </li>
          </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-arrows-v"></i><span class="menu-title" data-i18n="nav.vertical_nav.main">أدارة الطلبات</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('view_order_seller') }}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">رؤية جميع الطلبات</a>
            </li>
          </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-cc-visa"></i><span class="menu-title" data-i18n="nav.footers.main">أدارة الاشتراك</span>
          @php
            $subscribe_plan = \App\Models\subscription::where('seller_id',Auth::guard('seller')->user()->id)->value('stripe_plan');
          @endphp
          <span class="float-right mr-2 badge badge-pill badge-danger">{{ $subscribe_plan }}</span>
        </a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('viewSubscription_Status') }}" data-i18n="nav.footers.footer_light"> حالة الاشتراك</a>
            </li>
          </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-download"></i><span class="menu-title" data-i18n="nav.footers.main">اعدادت أخرى</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('view_seller_details') }}" data-i18n="nav.footers.footer_light">الملف الشخصي</a>
            </li>
            
          </ul>
        </li>
        <li class=" nav-item">
         
          <a class="" href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">  <i class="la la-power-off"></i>
تسجيل الخروج
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
                                    
        </li>
        <li>
        </li>
      </ul>
    </div>
  </div>
  @endif
