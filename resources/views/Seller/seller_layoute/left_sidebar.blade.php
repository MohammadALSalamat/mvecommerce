  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item"><a href="{{ route('seller') }}"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span><span class="float-right mr-2 badge badge-info badge-pill">0</span></a>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-television"></i><span class="menu-title" data-i18n="nav.templates.main">Products Managment</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('seller_viewproducts') }}" data-i18n="nav.templates.vert.main">View Products</a>
            </li>
            <li><a class="menu-item" href="{{ route('seller_createproducts') }}" data-i18n="nav.templates.horz.main">Create Products</a>
            </li>
          </ul>
        </li>

        <li class=" nav-item"><a href="#"><i class="la la-arrows-v"></i><span class="menu-title" data-i18n="nav.vertical_nav.main">Orders Managment</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('view_order') }}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">View Orders</a>
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
