@extends('frontend.frontend_layout.main_desgin')
@section('mytitle','Shop')
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
            @include('frontend.frontend_layout._breadcrumb')

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
                <div class="container">
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
                                  @include('frontend.frontend_pages.products.short_code._left-filter')
                                   
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
                                       <select name="orderby" class="form-control" id="sortBy">
                                            <option value="default" selected="selected">Default sorting</option>
                                            <option value="alpha-asc">Sort by alpha-asc</option>
                                            <option value="alpha-desc">Sort by alpha-desc</option>
                                            <option value="discountLTH">Sort by dicount : low to high</option>
                                            <option value="discountHTL">Sort by dicount : high to low</option>
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
                             @foreach ($products as $product )
                                <div class="product product-list">
                                    <figure class="product-media">
                                            <a href="{{ route('singleproduct', $product->slug) }}">
                                                <img src="{{ asset($product->image) }}" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                            <div class="product-action-horizontal">
                                                <!--Add to cart funtion -->
                                                <a href="" data-product-id="{{$product->id}}" id="add_to_cart{{$product->id}}" data-quantity="1" class="add-to-cart btn-product-icon w-icon-cart btn-cart"
                                                    title="Add to cart"></a>

                                                     <!--Add to wishlist funtion -->
                                                <a href="javascript:void(0)" data-id="{{ $product->id }}" id="add_to_wishlist{{ $product->id }}" data-quantity="1" class=" add_to_wishlist btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a>


                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="shop-banner-sidebar.html">Electronics</a>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="product-default.html">{{ $product->title}}</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                            </div>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">
                                                    @if ( empty($product->offer_price) || $product->offer_price == null)
                                                   <ins> {{ $product->price}} AED </ins>
                                                        
                                                    @else
                                                        
                                                    <ins> {{ $product->offer_price}} AED </ins> - <del>{{ $product->price}} AED</del>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            @endforeach
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
@section('script')
<script>
    // filter the products using AJaxe
    $('#sortBy').change(function(){
        let sortVal = $('#sortBy').val();
        alert(sortVal);
        window.location = "{{ url(''.$route.'') }}?sort="+sortVal;
    });

</script>

@stop