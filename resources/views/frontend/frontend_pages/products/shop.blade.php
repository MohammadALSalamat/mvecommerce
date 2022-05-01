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
            {{-- @include('frontend.frontend_layout._breadcrumb') --}}

            <!-- End of Breadcrumb -->
            <!-- End of Page Content -->
               <!-- Start of Page Content -->
               <div class="page-content mb-10">
                <div class="shop-default-banner shop-boxed-banner banner d-flex align-items-center mb-6"
                    style="background-image: url(assets/images/shop/banner2.jpg); background-color: #FFC74E;">
                    <div class="container banner-content">
                        <h4 class="banner-subtitle font-weight-bold">Accessories Collection</h4>
                        <h3 class="banner-title text-white text-uppercase font-weight-bolder ls-10">Smart Watches</h3>
                        <a href="shop-banner-sidebar.html" class="btn btn-dark btn-rounded btn-icon-right">Discover
                            Now<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                </div>
                <!-- End of Shop Banner -->
                <div class="shop-default-category category-ellipse-section mb-6">
                    <div class="swiper-container swiper-theme shadow-swiper"
                        data-swiper-options="{
                        'spaceBetween': 20,
                        'slidesPerView': 2,
                        'breakpoints': {
                            '480': {
                                'slidesPerView': 3
                            },
                            '576': {
                                'slidesPerView': 4
                            },
                            '768': {
                                'slidesPerView': 6
                            },
                            '992': {
                                'slidesPerView': 7
                            },
                            '1200': {
                                'slidesPerView': 8,
                                'spaceBetween': 30
                            }
                        }
                    }">
                        <div class="swiper-wrapper row gutter-lg cols-xl-8 cols-lg-7 cols-md-6 cols-sm-4 cols-xs-3 cols-2">
                            <div class="swiper-slide category-wrap">
                                <div class="category category-ellipse">
                                    <figure class="category-media">
                                        <a href="shop-banner-sidebar.html">
                                            <img src="{{asset('front-style/assets/images/categories/category-4.jpg')}}" alt="Categroy"
                                                width="190" height="190" style="background-color: #5C92C0;" />
                                        </a>
                                    </figure>
                                    <div class="category-content">
                                        <h4 class="category-name">
                                            <a href="shop-banner-sidebar.html">Sports</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide category-wrap">
                                <div class="category category-ellipse">
                                    <figure class="category-media">
                                        <a href="shop-banner-sidebar.html">
                                            <img src="assets/images/categories/category-5.jpg" alt="Categroy"
                                                width="190" height="190" style="background-color: #B8BDC1;" />
                                        </a>
                                    </figure>
                                    <div class="category-content">
                                        <h4 class="category-name">
                                            <a href="shop-banner-sidebar.html">Babies</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide category-wrap">
                                <div class="category category-ellipse">
                                    <figure class="category-media">
                                        <a href="shop-banner-sidebar.html">
                                            <img src="assets/images/categories/category-6.jpg" alt="Categroy"
                                                width="190" height="190" style="background-color: #99C4CA;" />
                                        </a>
                                    </figure>
                                    <div class="category-content">
                                        <h4 class="category-name">
                                            <a href="shop-banner-sidebar.html">Sneakers</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide category-wrap">
                                <div class="category category-ellipse">
                                    <figure class="category-media">
                                        <a href="shop-banner-sidebar.html">
                                            <img src="assets/images/categories/category-7.jpg" alt="Categroy"
                                                width="190" height="190" style="background-color: #4E5B63;" />
                                        </a>
                                    </figure>
                                    <div class="category-content">
                                        <h4 class="category-name">
                                            <a href="shop-banner-sidebar.html">Cameras</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide category-wrap">
                                <div class="category category-ellipse">
                                    <figure class="category-media">
                                        <a href="shop-banner-sidebar.html">
                                            <img src="assets/images/categories/category-8.jpg" alt="Categroy"
                                                width="190" height="190" style="background-color: #D3E5EF;" />
                                        </a>
                                    </figure>
                                    <div class="category-content">
                                        <h4 class="category-name">
                                            <a href="shop-banner-sidebar.html">Games</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide category-wrap">
                                <div class="category category-ellipse">
                                    <figure class="category-media">
                                        <a href="shop-banner-sidebar.html">
                                            <img src="assets/images/categories/category-9.jpg" alt="Categroy"
                                                width="190" height="190" style="background-color: #65737C;" />
                                        </a>
                                    </figure>
                                    <div class="category-content">
                                        <h4 class="category-name">
                                            <a href="shop-banner-sidebar.html">Kitchen</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide category-wrap">
                                <div class="category category-ellipse">
                                    <figure class="category-media">
                                        <a href="shop-banner-sidebar.html">
                                            <img src="assets/images/categories/category-20.jpg" alt="Categroy"
                                                width="190" height="190" style="background-color: #E4E4E4;" />
                                        </a>
                                    </figure>
                                    <div class="category-content">
                                        <h4 class="category-name">
                                            <a href="shop-banner-sidebar.html">Watches</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide category-wrap">
                                <div class="category category-ellipse">
                                    <figure class="category-media">
                                        <a href="shop-banner-sidebar.html">
                                            <img src="assets/images/categories/category-21.jpg" alt="Categroy"
                                                width="190" height="190" style="background-color: #D3D8DE;" />
                                        </a>
                                    </figure>
                                    <div class="category-content">
                                        <h4 class="category-name">
                                            <a href="shop-banner-sidebar.html">Clothes</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="container-fluid">
                    <!-- Start of Shop Category -->
                    <!-- Start of Shop Content -->
                    <div class="shop-content">
                        <!-- Start of Shop Main Content -->
                        <div class="main-content">
                            <nav class="toolbox sticky-toolbox sticky-content fix-top">
                                <div class="toolbox-left">
                                    <a href="#" class="btn btn-primary btn-outline btn-rounded left-sidebar-toggle 
                                        btn-icon-left"><i class="w-icon-category"></i><span>Filters</span></a>
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
                                
                            </nav>
                            @if(!empty($products) || $products->count() > 0 )
                            <div class="product-wrapper row cols-xl-7 cols-lg-6 cols-md-4 cols-sm-3 cols-2">
                                @foreach ($products as $product )
                                <div class="product-wrap">
                                    <div class="text-center product">
                                        <figure class="product-media" >
                                            <a href="{{ route('singleproduct', $product->slug) }}">
                                                <img src="{{ asset($product->image) }}" alt="Product" style="width: 100% !important;
                                                height: 150px !important;object-fit: contain;" />
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
                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quickview{{ $product->id }}" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                            </div>
                                            <h3 class="product-name">
                                                <a href="{{ route('singleproduct',$product->slug) }}">{{ $product->title}}</a>
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
                                                   <ins> {{ number_format($product->price,2)}} AED </ins>
                                                        
                                                    @else
                                                        
                                                    <ins> {{ number_format($product->offer_price,2)}} AED </ins> - <del style="color: #ccc">{{ number_format($product->price,2)}} AED</del>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                
                                @endforeach
                            </div>
                            @foreach ($products as $product )
                            
                            @include('frontend.frontend_layout._quickView')
                            @endforeach
                            <div class="toolbox toolbox-pagination justify-content-between">
                                <p class="mb-2 showing-info mb-sm-0">
                                    Showing Products
                                </p>
                                {{ $products->appends($_GET)->links('vendor.pagination.custompage') }}
                            </div>
                            @else 
                            
                            @endif
                        </div>
                        <!-- End of Shop Main Content -->

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
                    </div>
                    <!-- End of Shop Content -->
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->
            <!-- Main JS -->
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
        window.location = "{{ url(''.$route.'') }}?sort="+sortVal;
    });

</script>
@endsection