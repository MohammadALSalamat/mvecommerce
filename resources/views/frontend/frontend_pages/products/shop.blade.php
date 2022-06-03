@extends('frontend.frontend_layout.main_desgin')
@section('mytitle','Shop')
<!-- Default CSS -->
 <!-- Plugins CSS -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  
@section('content')
        <!-- Start of Main -->
        <main class="main">
            <!-- Start of Breadcrumb -->
            {{-- @include('frontend.frontend_layout._breadcrumb') --}}

            <!-- End of Breadcrumb -->
            <!-- End of Page Content -->
               <!-- Start of Page Content -->
               <div class="page-content mb-10">
                <section class="intro-section container">
                    @php
                    $sponser_banner = \App\Models\sponserAds::where('image_place' ,'collection_page_main_banner')->get();
                    @endphp
                    @if($sponser_banner->count() > 0)
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($sponser_banner as $key => $slider)
                            @if($slider->image_place == 'collection_page_main_banner')
                            <!-- change to the arabic image -->
                            @if(Config::get('app.locale') == 'en')
                            <div class="carousel-item {{ $key == 0 ? 'active':'' }}">
                                <img src="{{url($slider->image_English)}}" class="d-block w-100" alt="{{ $slider->image_place }}">
                            </div>
                            @else
                            <div class="carousel-item {{ $key == 0 ? 'active':'' }}">
                                <img src="{{url($slider->image_Arabic)}}" class="d-block w-100" alt="{{ $slider->image_place }}">
                            </div>
                            @endif
                            <!-- change to the arabic image -->
                            @endif
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    </div>
                    @endif
                </section>
                <div class="container">
                    @if(!empty($main_categories) || $main_categories->count() > 0)
                    <!-- End of Shop Banner -->
                        <div class="shop-default-category category-ellipse-section mb-6"  style="height: auto !important">
                            <div class="swiper-container swiper-theme shadow-swiper" style="height: auto !important"
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
                                <div  style="height: auto !important" class="swiper-wrapper row gutter-lg cols-xl-8 cols-lg-7 cols-md-6 cols-sm-4 cols-xs-3 cols-2">
                                @foreach ($main_categories as $category)
                                @if (Config::get('app.locale') == 'en')
                                <div class="swiper-slide category-wrap">
                                    <div class="category category-ellipse">
                                        <figure class="category-media">
                                            <a href="{{ route('shop_special_category',$category->slug) }}">
                                                <img src="{{asset($category->image)}}" alt="Categroy"
                                                    style="background-color: #fff;width:100%;height:120px;object-fit:contain" />
                                            </a>
                                        </figure>
                                        <div class="category-content">
                                            <h4 class="category-name">
                                                <a href="{{ route('shop_special_category',$category->slug) }}">{{ $category->title }}</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="swiper-slide category-wrap">
                                    <div class="category category-ellipse">
                                        <figure class="category-media">
                                            <a href="{{ route('shop_special_category',$category->slug) }}">
                                                <img src="{{asset($category->ar_image)}}" alt="Categroy"
                                                        style="background-color: #fff;width:100%;height:120px;object-fit:contain" />
                                            </a>
                                        </figure>
                                        <div class="category-content">
                                            <h4 class="category-name">
                                                <a href="{{ route('shop_special_category',$category->slug) }}">{{ $category->ar_title }}</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    @endif
                    <!-- Start of Shop Category -->
                    <!-- Start of Shop Content -->
                    <div class="shop-content">
                        <!-- Start of Shop Main Content -->
                        <div class="main-content">
                            <nav class="toolbox sticky-toolbox sticky-content fix-top">
                                @if(Config::get('app.locale') == 'en')
                                <div class="toolbox-left">
                                    <a href="#" class="btn btn-primary btn-outline btn-rounded left-sidebar-toggle 
                                        btn-icon-left"><i class="w-icon-category"></i><span>Filters</span></a>
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
                                @else
                                <div class="toolbox-left">
                                    <a href="#" class="btn btn-primary btn-outline btn-rounded left-sidebar-toggle 
                                        btn-icon-left"><i class="w-icon-category"></i><span>فلتر</span></a>
                                    <div class="toolbox-item toolbox-sort select-box text-dark">
                                        <label>ترتيب حسب :</label>
                                        <select name="orderby" class="form-control" id="sortBy">
                                            <option value="default" selected="selected">الترتيب العادي</option>
                                            <option value="alpha-asc">ترتيب حسب الاحرف تنازليا</option>
                                            <option value="alpha-desc">ترتيب حسب الاحرف تصاعديا</option>
                                            <option value="discountLTH">ترتيب حسب العروض : من الاقل الى اﻷكثر</option>
                                            <option value="discountHTL">ترتيب حسب العروض : من اﻷكثر الى اﻷقل</option>
                                            <option value="price-low">ترتيب حسب السعر : من الاقل الى اﻷكثر</option>
                                            <option value="price-high">ترتيب حسب السعر : من اﻷكثر الى اﻷقل</option>
                                        </select>
                                    </div>
                                </div>
                                @endif
                            </nav>
                            @if(!empty($products) || $products->count() > 0 )
                            <div class="product-wrapper row cols-xl-7 cols-lg-6 cols-md-4 cols-sm-3 cols-2">
                                @foreach ($products as $product )
                                @php
                                $avareg_review = \App\Models\ProductReview::where('product_id',$product->id)->get();
                               #review rateing 
                               $avareg = 0;
                               $sum = 0;
                               foreach($avareg_review as $avg){
                                   $sum += $avg->rate;
                                   $countavg = count($avareg_review);
                                   $avareg = $sum / $countavg;
                                }    
                                $other_image = explode(',', $product->image);
                               @endphp
                                <div class="product-wrap">
                                    <div class="text-center product">
                                        <figure class="product-media" >
                                            <a href="{{ route('singleproduct', $product->slug) }}">
                                                @if(count($other_image) > 1)
                                                <img src="{{ asset($other_image[0]) }}" alt="Product" style="width: 100% !important;
                                                height: 150px !important;object-fit: contain;" />
                                                 <img src="{{ asset($other_image[1]) }}" alt="Product" style="width: 100% !important;
                                                 height: 150px !important;object-fit: contain;" />
                                                 @else
                                                 <img src="{{ asset($other_image[0]) }}" alt="Product" style="width: 100% !important;
                                                 height: 150px !important;object-fit: contain;" />
                                                 @endif

                                            </a>
                                            <div class="product-action-horizontal">
                                                <!--Add to cart funtion -->
                                                <a href="" data-product-id="{{$product->id}}" id="add_to_cart{{$product->id}}" data-quantity="1" class="add-to-cart btn-product-icon w-icon-cart btn-cart"
                                                    title="Add to cart"></a>

                                                     <!--Add to wishlist funtion -->
                                                <a href="javascript:void(0)" data-id="{{ $product->id }}" id="add_to_wishlist{{ $product->id }}" data-quantity="1" class=" add_to_wishlist btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a>
                                               
                                            </div>
                                            <div class="product-label-group">
                                                @if(Config::get('app.locale') == 'en')
                                                @if (!empty($product-> discound) || $product-> discound != null)
                                                <label class="product-label label-discount"
                                                    style="font-size: 12px">{{$product-> discound}}% off</label>
                                                @endif
                                                @else
                                                @if (!empty($product-> discound) || $product-> discound != null)
                                                <label class="product-label label-discount"
                                                    style="font-size: 12px">{{$product-> discound}}% خصم</label>
                                                @endif
                                                @endif
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                            </div>
                                            <h3 class="product-name">
                                                @if(Config::get('app.locale') == 'en')

                                                <a href="{{ route('singleproduct',$product->slug) }}">{{ $product->title}}</a>
                                                @else
                                                <a href="{{ route('singleproduct',$product->slug) }}">{{ $product->ar_title}}</a>

                                                @endif
                                            </h3>
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
                                                    <ins class="new-price">
                                                        @if(empty($product->offer_price) ||
                                                        $product->offer_price == null)
                                                        {{ number_format($product->price) }} AED
                                                        @else {{ number_format($product->offer_price) }} AED - <del
                                                            style="color:#ccc"> {{ number_format($product->price) }} AED </del>
                                                        @endif
                                                    </ins>
                                                    @else
                                                    <ins class="new-price">
                                                        @if(empty($product->offer_price) ||
                                                        $product->offer_price == null)
                                                        {{ number_format($product->price) }} د.أ
                                                        @else {{ number_format($product->offer_price) }} د.أ - <del
                                                            style="color:#ccc"> {{ number_format($product->price) }} د.أ </del>
                                                        @endif
                                                    </ins>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                @endforeach
                            </div>
                            <div class="toolbox toolbox-pagination justify-content-between">
                                <p class="mb-2 showing-info mb-sm-0">
                                    @if(Config::get('app.locale') == 'en')
                                    Showing Products
                                    @else
                                    رؤية المنتجات
                                    @endif
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