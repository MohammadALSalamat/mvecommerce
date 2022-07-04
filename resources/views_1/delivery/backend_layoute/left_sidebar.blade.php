  <!-- ////////////////////////////////////////////////////////////////////////////-->
  @if (Config::get('app.locale') == 'en')
  <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item"><a href="{{ route('delivery') }}"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span></a>
        </li>
      
        <li class=" nav-item"><a href="#"><i class="la la-arrows-v"></i><span class="menu-title" data-i18n="nav.vertical_nav.main">Orders Management</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('delivery_view_order') }}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">View Orders</a>
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
       
        <li class=" nav-item"><a href="#"><i class="la la-arrows-v"></i><span class="menu-title" data-i18n="nav.vertical_nav.main">أدارة الطلبات </span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('view_order') }}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">عرض الطلبات </a>
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
