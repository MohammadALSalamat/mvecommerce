  <!-- ////////////////////////////////////////////////////////////////////////////-->
  @if (Config::get('app.locale') == 'en')
  <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item"><a href="{{ route('admin') }}"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span></a>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-users"></i><span class="menu-title" data-i18n="nav.templates.main">Users Management</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('viewusers') }}" data-i18n="nav.templates.vert.main">View Users</a>
            </li>
            <li><a class="menu-item" href="{{ route('createusers') }}" data-i18n="nav.templates.horz.main">Create Users</a>
            <li><a class="menu-item" href="{{ route('activation_sellers') }}" data-i18n="nav.templates.horz.main">Activate Sellers</a>
            </li>
          </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-television"></i><span class="menu-title" data-i18n="nav.templates.main">Products Management</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('viewproducts') }}" data-i18n="nav.templates.vert.main">View Products</a>
            </li>
            <li><a class="menu-item" href="{{ route('adminviewproducts') }}" data-i18n="nav.templates.vert.main">View Admin Products</a>
            </li>
            <li><a class="menu-item" href="{{ route('createproducts') }}" data-i18n="nav.templates.horz.main">Create Products</a>
            </li>
          </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Category Management</span><span class="float-right mr-2 badge badge-pill badge-danger">New</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('viewcategories') }}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">View Categories</a>
            </li>
             <li><a class="menu-item" href="{{ route('createcategories') }}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">Add Category</a>
            </li>
          </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-arrows-v"></i><span class="menu-title" data-i18n="nav.vertical_nav.main">Orders Management</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('view_order') }}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">View Orders</a>
            </li>
          </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-image"></i><span class="menu-title" data-i18n="nav.horz_nav.main">Banners Management</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('bannersview') }}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">View Banners</a>
            </li>
             <li><a class="menu-item" href="{{ route('createbanner') }}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">Add Banners</a>
            </li>
          </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-header"></i><span class="menu-title" data-i18n="nav.page_headers.main">Brands Management</span></a>
            <ul class="menu-content">
                <li><a class="menu-item" href="{{ route('viewbrand') }}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">View Brands</a>
                </li>
                 <li><a class="menu-item" href="{{ route('createbrand') }}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">Add Brands</a>
                </li>
              </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-header"></i><span class="menu-title" data-i18n="nav.page_headers.main">Coupons Management</span></a>
            <ul class="menu-content">
                <li><a class="menu-item" href="{{ route('view_coupon') }}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">View Coupons</a>
                </li>
                 <li><a class="menu-item" href="{{ route('create_coupon') }}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">Add Coupons</a>
                </li>
              </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-header"></i><span class="menu-title" data-i18n="nav.page_headers.main">Shipping Management</span></a>
            <ul class="menu-content">
                <li><a class="menu-item" href="{{ route('view_shipping') }}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">View Shipping</a>
                </li>
                <li><a class="menu-item" href="{{ route('create_shipping') }}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">Add Shipping</a>
                </li>
              </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-navicon"></i><span class="menu-title" data-i18n="nav.navbars.main">Cart</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="navbar-light.html" data-i18n="nav.navbars.nav_light">Navbar Light</a>
            </li>
            <li><a class="menu-item" href="navbar-dark.html" data-i18n="nav.navbars.nav_dark">Navbar Dark</a>
            </li>
            <li><a class="menu-item" href="navbar-semi-dark.html" data-i18n="nav.navbars.nav_semi">Navbar Semi Dark</a>
            </li>
            <li><a class="menu-item" href="navbar-brand-center.html" data-i18n="nav.navbars.nav_brand_center">Brand Center</a>
            </li>
            <li><a class="menu-item" href="navbar-fixed-top.html" data-i18n="nav.navbars.nav_fixed_top">Fixed Top</a>
            </li>
            <li><a class="menu-item" href="#" data-i18n="nav.navbars.nav_hide_on_scroll.main">Hide on Scroll</a>
              <ul class="menu-content">
                <li><a class="menu-item" href="navbar-hide-on-scroll-top.html" data-i18n="nav.navbars.nav_hide_on_scroll.nav_hide_on_scroll_top">Hide on Scroll Top</a>
                </li>
                <li><a class="menu-item" href="navbar-hide-on-scroll-bottom.html" data-i18n="nav.navbars.nav_hide_on_scroll.nav_hide_on_scroll_bottom">Hide on Scroll Bottom</a>
                </li>
              </ul>
            </li>
            <li><a class="menu-item" href="navbar-components.html" data-i18n="nav.navbars.nav_components">Navbar Components</a>
            </li>
            <li><a class="menu-item" href="navbar-styling.html" data-i18n="nav.navbars.nav_styling">Navbar Styling</a>
            </li>
          </ul>
        </li>
      
        <li class=" nav-item"><a href="#"><i class="la la-download"></i><span class="menu-title" data-i18n="nav.footers.main">Sittings</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="footer-light.html" data-i18n="nav.footers.footer_light">Footer Light</a>
            </li>
            <li><a class="menu-item" href="footer-dark.html" data-i18n="nav.footers.footer_dark">Footer Dark</a>
            </li>
            <li><a class="menu-item" href="footer-transparent.html" data-i18n="nav.footers.footer_transparent">Footer Transparent</a>
            </li>
            <li><a class="menu-item" href="footer-fixed.html" data-i18n="nav.footers.footer_fixed">Footer Fixed</a>
            </li>
            <li><a class="menu-item" href="footer-components.html" data-i18n="nav.footers.footer_components">Footer Components</a>
            </li>
          </ul>
        </li>
        <li class=" nav-item">
          <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
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
        <li class=" nav-item"><a href="{{ route('admin') }}"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">لوحة التخكم</span><span class="float-right mr-2 badge badge-info badge-pill">0</span></a>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-users"></i><span class="menu-title" data-i18n="nav.templates.main">إدارة المستخدمين</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('viewusers') }}" data-i18n="nav.templates.vert.main">عرض المستخدمين</a>
            </li>
            <li><a class="menu-item" href="{{ route('createusers') }}" data-i18n="nav.templates.horz.main">أنشئ مستخدمين</a>
            <li><a class="menu-item" href="{{ route('activation_sellers') }}" data-i18n="nav.templates.horz.main">تنشيط البائعين</a>
            </li>
          </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-television"></i><span class="menu-title" data-i18n="nav.templates.main">إدارة المنتجات</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('viewproducts') }}" data-i18n="nav.templates.vert.main">عرض المنتجات</a>
            </li>
            <li><a class="menu-item" href="{{ route('adminviewproducts') }}" data-i18n="nav.templates.vert.main">عرض منتجات المدير</a>
            </li>
            <li><a class="menu-item" href="{{ route('createproducts') }}" data-i18n="nav.templates.horz.main">إنشاء المنتجات</a>
            </li>
          </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">إدارة اﻷقسام</span><span class="float-right mr-2 badge badge-pill badge-danger">New</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('viewcategories') }}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">عرض اﻷقسام</a>
            </li>
             <li><a class="menu-item" href="{{ route('createcategories') }}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">أضافة قسم</a>
            </li>
          </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-arrows-v"></i><span class="menu-title" data-i18n="nav.vertical_nav.main">أدارة الطلبات </span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('view_order') }}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">عرض الطلبات </a>
            </li>
          </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-image"></i><span class="menu-title" data-i18n="nav.horz_nav.main"> إدارة اللافتات و العروض </span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('bannersview') }}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">عرض الافتات</a>
            </li>
             <li><a class="menu-item" href="{{ route('createbanner') }}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">أضافة لافتة أو عرض</a>
            </li>
          </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-header"></i><span class="menu-title" data-i18n="nav.page_headers.main">أدارة الشركاء</span></a>
            <ul class="menu-content">
                <li><a class="menu-item" href="{{ route('viewbrand') }}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">عرض الشركاء</a>
                </li>
                <li><a class="menu-item" href="{{ route('createbrand') }}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">أضافة شريك</a>
                </li>
              </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-header"></i><span class="menu-title" data-i18n="nav.page_headers.main">أدارة الخصم </span></a>
            <ul class="menu-content">
                <li><a class="menu-item" href="{{ route('view_coupon') }}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">عرض الخصم</a>
                </li>
                 <li><a class="menu-item" href="{{ route('create_coupon') }}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">أضافة خصم</a>
                </li>
              </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-header"></i><span class="menu-title" data-i18n="nav.page_headers.main">إدارة الشحن</span></a>
            <ul class="menu-content">
                <li><a class="menu-item" href="{{ route('view_shipping') }}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">جميع معلومات إدارة الشحن</a>
                </li>
                <li><a class="menu-item" href="{{ route('create_shipping') }}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">أضافة معلومات إدارة الشحن</a>
                </li>
              </ul>
        </li>
        <li class=" nav-item">
          <a class="" href="{{ route('logout') }}"
                onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                                        {{ __('تسجيل الخروج') }}
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
