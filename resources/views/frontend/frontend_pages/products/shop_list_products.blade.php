@extends('frontend.frontend_layout.main_desgin')
@section('mytitle','Shop Category')
<!-- Default CSS -->
 <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('front-style/assets/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-style/assets/vendor/nouislider/nouislider.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-style/assets/vendor/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-style/assets/css/style.min.css') }}">
@section('content')
<main class="main">
    

    <!-- Start of Page Content -->
    <div class="page-content">
        <div class="container">
            <!-- Start of Shop Banner -->
            <div class="shop-default-banner banner d-flex align-items-center mb-5 br-xs"
                style="background-image: url(assets/images/shop/banner1.jpg); background-color: #FFC74E;">
                <div class="banner-content">
                    <h4 class="banner-subtitle font-weight-bold">Accessories Collection</h4>
                    <h3 class="banner-title text-white text-uppercase font-weight-bolder ls-normal">Smart Wrist
                        Watches</h3>
                    <a href="shop-banner-sidebar.html" class="btn btn-dark btn-rounded btn-icon-right">Discover
                        Now<i class="w-icon-long-arrow-right"></i></a>
                </div>
            </div>
            <!-- End of Shop Brands-->

            <!-- Start of Shop Category -->
            @php
            $sub_cat = \App\Models\category::where('parent_id',$category_product->id)->where('status',1)->get();
            @endphp
            @if($sub_cat->count() > 0)
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
                    <div style="width: 100%;height:auto !important;object-fit:contain" class="swiper-wrapper row gutter-lg cols-xl-8 cols-lg-7 cols-md-6 cols-sm-4 cols-xs-3 cols-2">
                        @foreach ($sub_cat as $single_cat )
                        <div class="swiper-slide category-wrap">
                            <div class="category category-ellipse">
                                <figure class="category-media">
                                    <a href="{{ route('shop_child_cat',$single_cat->slug) }}">
                                        <img src="{{ asset($single_cat->image) }}" alt="Categroy"
                                            style="width: 100%;height:130px !important;object-fit:contain;background:#fff"  />
                                    </a>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">
                                        <a href="{{ route('shop_child_cat',$single_cat->slug) }}">{{ $single_cat->title }}</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            @endif
            <!-- End of Shop Category -->

            <div class="shop-content pb-10">
                <!-- Start of Shop Main Content -->
                <div class="main-content">
                    <nav class="toolbox sticky-toolbox sticky-content fix-top">
                        <div class="toolbox-left">
                            <div class="toolbox-item toolbox-sort select-box text-dark">
                                <label>Sort By :</label>
                                <select name="orderby" class="form-control" id="sortBy">
                                    <option value="default" >Default sorting</option>
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
                        </div>
                    </nav>
                    @if ($count_product > 0)
                    <div class="product-wrapper row cols-md-4 cols-sm-3 cols-2 scroll-load">
                        @foreach ($products as $products_category )
                    @php
                    $avareg_review = \App\Models\ProductReview::where('product_id',$products_category->id)->get();
                               #review rateing 
                               $avareg = 0;
                               $sum = 0;
                               foreach($avareg_review as $avg){
                                   $sum += $avg->rate;
                                   $countavg = count($avareg_review);
                                   $avareg = $sum / $countavg;
                                }  
                        $other_image = explode(',',$products_category->image);
                    @endphp
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        @if(count($other_image) > 1 )
                                        <img src="{{ $other_image[0]}}" alt="Product" style="width: 100%;height:200px !important;object-fit:contain;"/>
                                        <img src="{{ $other_image[1] }}" alt="Product" style="width: 100%;height:200px !important;object-fit:contain;" />
                                            @else
                                            <img src="{{ $other_image[0]}}" alt="Product" style="width: 100%;height:200px !important;object-fit:contain;"/>
                                            @endif
                                    </a>
                                    <div class="product-action-horizontal">
                                        <a href="javascript:void(0)" data-product-id="{{$products_category->id}}" id="add_to_cart{{$products_category->id}}" data-quantity="1" class="add-to-cart btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="javascript:void(0)" data-id="{{ $products_category->id }}" id="add_to_wishlist{{ $products_category->id }}" data-quantity="1" class=" add_to_wishlist btn-product-icon btn-wishlist w-icon-heart"
                                            title="Wishlist"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="{{ route('shop_special_category',$category_product->slug) }}">{{ $category_product->title }}</a>
                                    </div>
                                    <h4 class="product-name">
                                        <a href="{{ route('singleproduct',$products_category->slug) }}">{{ $products_category->title }}</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" 
                                            @if (number_format($avareg,1)==5) style="width: 100%;"
                                            @elseif(number_format($avareg,1)>= 4.5)
                                            style="width: 90%;"
                                            @elseif(number_format($avareg,1) >= 4)
                                            style="width: 80%;"
                                            @elseif(number_format($avareg,1) >= 3.5)
                                            style="width: 70%;"
                                            @elseif(number_format($avareg,1) >= 3)
                                            style="width: 60%;"
                                            @elseif(number_format($avareg,1) >= 2.5)
                                            style="width: 50%;"
                                            @elseif(number_format($avareg,1) >= 2)
                                            style="width: 40%;"
                                            @else
                                            style="width: 20%;"
                                            @endif></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="product-pa-wrapper">
                                        <div class="product-price">
                                            @if(Config::get('app.locale') == 'en')

                                            @if(empty($products_category->offer_price) ||
                                            $products_category->offer_price == null)
                                            {{ $products_category->price }} AED
                                            @else <del>{{ $products_category->price }} AED </del> -
                                            {{ $products_category->offer_price }} AED @endif
                                            @else
                                            @if(empty($products_category->offer_price) ||
                                            $products_category->offer_price == null)
                                            {{ $products_category->price }} د.أ
                                            @else <del>{{ $products_category->price }} د.أ </del> -
                                            {{ $products_category->offer_price }} د.أ @endif
                                            @endif                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    @else
                    <h1 class="text-center" style="color: #fff;background:red;padding:20pxborder:1px solid red"> There is No Products related to this category</h1>
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
                                    <input type="number" name="min_price" class="min_price text-center"
                                        placeholder="$min"><span class="delimiter">-</span><input type="number"
                                        name="max_price" class="max_price text-center" placeholder="$max"><a
                                        href="#" class="btn btn-primary btn-rounded">Go</a>
                                </form>
                            </div>
                        </div>
                        <!-- End of Collapsible Widget -->

                        <!-- Start of Collapsible Widget -->
                        <div class="widget widget-collapsible">
                            <h3 class="widget-title"><span>Size</span></h3>
                            <ul class="widget-body filter-items item-check mt-1">
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
                            <ul class="widget-body filter-items item-check mt-1">
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
                            <ul class="widget-body filter-items item-check">
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
            </div>
            <!-- End of Shop Content -->
        </div>
    </div>
    <!-- End of Page Content -->
</main>


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
        window.location = "{{ url(''.$route.'') }}/{{ $category_product->slug}}?sort="+sortVal;
    });

</script>
@stop