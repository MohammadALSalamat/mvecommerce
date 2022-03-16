@extends('frontend.frontend_layout.main_desgin')
<!-- Default CSS -->
 <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('front-style/assets/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-style/assets/vendor/nouislider/nouislider.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-style/assets/vendor/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-style/assets/css/style.min.css') }}">
@section('content')

<!-- Start of Main -->
        <main class="main">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb bb-no">
                        <li><a href="demo1.html">Home</a></li>
                        <li><a href="shop-banner-sidebar.html">Shop</a></li>
                        <li>List</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="mb-10 page-content">
                <!-- Start of Shop Banner -->
                <div class="mb-6 shop-default-banner shop-boxed-banner banner d-flex align-items-center"
                    style="background-image: url(assets/images/shop/banner2.jpg); background-color: #FFC74E;">
                    <div class="container banner-content">
                        <h4 class="banner-subtitle font-weight-bold">Accessories Collection</h4>
                        <h3 class="text-white banner-title text-uppercase font-weight-bolder ls-10">Smart Watches</h3>
                        <a href="shop-banner-sidebar.html" class="btn btn-dark btn-rounded btn-icon-right">Discover
                            Now<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                </div>
                <!-- End of Shop Banner -->
                <div class="container-fluid">
                    <!-- Start of Shop Content -->
                    <div class="shop-content">
                        <!-- Start of Sidebar, Shop Sidebar -->
                        <aside class="sidebar shop-sidebar left-sidebar sticky-sidebar-wrapper">
                            <!-- Start of Sidebar Overlay -->
                            <div class="sidebar-overlay"></div>
                            <a class="sidebar-close" href="#"><i class="close-icon"></i></a>


                            <!-- Start of Sidebar Content -->
                            <div class="sidebar-content scrollable">
                                <div class="filter-actions">
                                    <label>Filter :</label>
                                    <a href="#" class="btn btn-dark btn-link filter-clean">Clean All</a>
                                </div>
                                <!-- Start of Collapsible widget -->
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title"><span>All Categories</span></h3>
                                    <ul class="widget-body filter-items search-ul">
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Babies</a></li>
                                        <li><a href="#">Beauty</a></li>
                                        <li><a href="#">Decoration</a></li>
                                        <li><a href="#">Electronics</a></li>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Food</a></li>
                                        <li><a href="#">Furniture</a></li>
                                        <li><a href="#">Kitchen</a></li>
                                        <li><a href="#">Medical</a></li>
                                        <li><a href="#">Sports</a></li>
                                        <li><a href="#">Watches</a></li>
                                    </ul>
                                </div>
                                <!-- End of Collapsible Widget -->

                                <!-- Start of Collapsible Widget -->
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title"><span>Price</span></h3>
                                    <div class="widget-body">
                                        <ul class="filter-items search-ul">
                                            <li><a href="#">$0.00 - $100.00</a></li>
                                            <li><a href="#">$100.00 - $200.00</a></li>
                                            <li><a href="#">$200.00 - $300.00</a></li>
                                            <li><a href="#">$300.00 - $500.00</a></li>
                                            <li><a href="#">$500.00+</a></li>
                                        </ul>
                                        <form class="price-range">
                                            <input type="number" name="min_price" class="text-center min_price"
                                                placeholder="$min"><span class="delimiter">-</span><input type="number"
                                                name="max_price" class="text-center max_price" placeholder="$max"><a
                                                href="#" class="btn btn-primary btn-rounded">Go</a>
                                        </form>
                                    </div>
                                </div>
                                <!-- End of Collapsible Widget -->

                                <!-- Start of Collapsible Widget -->
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title"><span>Size</span></h3>
                                    <ul class="mt-1 widget-body filter-items item-check">
                                        <li><a href="#">Extra Large</a></li>
                                        <li><a href="#">Large</a></li>
                                        <li><a href="#">Medium</a></li>
                                        <li><a href="#">Small</a></li>
                                    </ul>
                                </div>
                                <!-- End of Collapsible Widget -->

                                <!-- Start of Collapsible Widget -->
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title"><span>Brand</span></h3>
                                    <ul class="mt-1 widget-body filter-items item-check">
                                        <li><a href="#">Elegant Auto Group</a></li>
                                        <li><a href="#">Green Grass</a></li>
                                        <li><a href="#">Node Js</a></li>
                                        <li><a href="#">NS8</a></li>
                                        <li><a href="#">Red</a></li>
                                        <li><a href="#">Skysuite Tech</a></li>
                                        <li><a href="#">Sterling</a></li>
                                    </ul>
                                </div>
                                <!-- End of Collapsible Widget -->

                                <!-- Start of Collapsible Widget -->
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title"><span>Color</span></h3>
                                    <ul class="mt-1 widget-body filter-items item-check">
                                        <li><a href="#">Black</a></li>
                                        <li><a href="#">Blue</a></li>
                                        <li><a href="#">Brown</a></li>
                                        <li><a href="#">Green</a></li>
                                        <li><a href="#">Grey</a></li>
                                        <li><a href="#">Orange</a></li>
                                        <li><a href="#">Yellow</a></li>
                                    </ul>
                                </div>
                                <!-- End of Collapsible Widget -->
                            </div>
                            <!-- End of Sidebar Content -->
                        </aside>
                        <!-- End of Shop Sidebar -->

                        <!-- Start of Shop Main Content -->
                        <div class="main-content">
                            <nav class="toolbox sticky-toolbox sticky-content fix-top">
                                <div class="toolbox-left">
                                    <a href="#" class="btn btn-primary btn-outline btn-rounded left-sidebar-toggle btn-icon-left"><i class="w-icon-category"></i><span>Filters</span></a>
                                    <div class="toolbox-item toolbox-sort select-box text-dark">
                                        <label>Sort By :</label>
                                        <select name="orderby" class="form-control">
                                            <option value="default" selected="selected">Default sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="date">Sort by latest</option>
                                            <option value="price-low">Sort by pric: low to high</option>
                                            <option value="price-high">Sort by price: high to low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="toolbox-right">
                                    <div class="toolbox-item toolbox-show select-box">
                                        <select name="count" class="form-control">
                                            <option value="9">Show 9</option>
                                            <option value="12" selected="selected">Show 12</option>
                                            <option value="24">Show 24</option>
                                            <option value="36">Show 36</option>
                                        </select>
                                    </div>
                                    <div class="toolbox-item toolbox-layout">
                                        <a href="{{ route('shop_page') }}" class="icon-mode-grid btn-layout">
                                            <i class="w-icon-grid"></i>
                                        </a>
                                        <a href="{{ route('shop_list') }}" class="icon-mode-list btn-layout active">
                                            <i class="w-icon-list"></i>
                                        </a>
                                    </div>
                                </div>
                            </nav>
                            <div class="product-wrapper row cols-xl-2 cols-sm-1 cols-xs-2 cols-1">
                                <div class="product product-list product-select">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                             <img src="{{ asset('front-style/assets/images/shop/2-1.jpg') }}" alt="Product" width="330"
                                                height="338" />
                                            <img src="{{ asset('assets/images/shop/2-2.jpg') }}" alt="Product" width="330"
                                                height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quick View"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="shop-banner-sidebar.html">Electronics</a>
                                        </div>
                                        <h4 class="product-name">
                                            <a href="product-default.html">3D Television</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 Reviews)</a>
                                        </div>
                                        <div class="product-price">$220.00 - $230.00</div>
                                        <div class="product-desc">
                                            Ultrices eros in cursus turpis massa cursus mattis. Volutpat ac tincidunt
                                            vitae semper quis lectus. Aliquam id diam maecenas ultricies…
                                        </div>
                                        <div class="product-action">
                                            <a href="product-default.html" class="btn-product btn-cart"
                                                title="Add to Cart"><i class="w-icon-cart"></i>Select Options</a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-list">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('front-style/assets/images/shop/2-1.jpg') }}" alt="Product" width="330"
                                                height="338" />
                                            <img src="{{ asset('assets/images/shop/2-2.jpg') }}" alt="Product" width="330"
                                                height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quick View"></a>
                                        </div>
                                        <div class="product-countdown-container">
                                            <div class="product-countdown countdown-compact" data-until="2021, 9, 9"
                                                data-format="DHMS" data-compact="false"
                                                data-labels-short="Days, Hours, Mins, Secs">
                                                00:00:00:00</div>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="shop-banner-sidebar.html">Electronics</a>
                                        </div>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Alarm Clock With Lamp</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 Reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$30.00</ins><del class="old-price">$60.00</del>
                                        </div>
                                        <div class="product-desc">
                                            Ultrices eros in cursus turpis massa cursus mattis. Volutpat ac tincidunt
                                            vitae semper quis lectus. Aliquam id diam maecenas ultricies…
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to Cart"><i
                                                    class="w-icon-cart"></i> Add To Cart</a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                    </div>
                                </div>
  
                            </div>
                            <div class="toolbox toolbox-pagination justify-content-between">
                                <p class="mb-2 showing-info mb-sm-0">
                                    Showing<span>1-12 of 60</span>Products
                                </p>
                                <ul class="pagination">
                                    <li class="prev disabled">
                                        <a href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                            <i class="w-icon-long-arrow-left"></i>Prev
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="next">
                                        <a href="#" aria-label="Next">
                                            Next<i class="w-icon-long-arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End of Shop Main Content -->
                    </div>
                    <!-- End of Shop Content -->
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->
    <script src="{{ asset('front-style/assets/vendor/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('front-style/assets/vendor/jquery.countdown/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('front-style/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('front-style/assets/vendor/zoom/jquery.zoom.js') }}"></script>
    <script src="{{ asset('front-style/assets/js/main.min.js') }}"></script>
@endsection