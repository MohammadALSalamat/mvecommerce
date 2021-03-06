@extends('frontend.frontend_layout.main_desgin')
@if(Config::get('app.locale') == 'en')
@section('mytitle','Shop Category')

@else
@section('mytitle','أقسام السوق')

@endif
<!-- Default CSS -->

@section('content')
<main class="main">
    

    <!-- Start of Page Content -->
    <div class="page-content">
        <div class="container">
            <!-- Start of Shop Banner -->
            {{-- <div class="shop-default-banner banner d-flex align-items-center mb-5 br-xs"
                style="background-image: url(assets/images/shop/banner1.jpg); background-color: #FFC74E;"> --}}
                {{-- <div class="banner-content">
                    <h4 class="banner-subtitle font-weight-bold">Accessories Collection</h4>
                    <h3 class="banner-title text-white text-uppercase font-weight-bolder ls-normal">Smart Wrist
                        Watches</h3>
                    <a href="shop-banner-sidebar.html" class="btn btn-dark btn-rounded btn-icon-right">Discover
                        Now<i class="w-icon-long-arrow-right"></i></a>
                </div> --}}
            {{-- </div> --}}
            <!-- End of Shop Brands-->

            <!-- Start of Shop Category -->
            @include('frontend.frontend_pages.products.short_code._adsbanners')

            @php
            $sub_cat = \App\Models\category::where('parent_id',$category_product->parent_id)->where('id','!=',$category_product->id)->where('status',1)->get();
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
                                @if(Config::get('app.locale') == 'en')
                                <div class="category-content">
                                    <h4 class="category-name">
                                        <a href="{{ route('shop_child_cat',$single_cat->slug) }}">{{ $single_cat->title }}</a>
                                    </h4>
                                </div>
                                @else
                                <div class="category-content">
                                    <h4 class="category-name">
                                        <a href="{{ route('shop_child_cat',$single_cat->slug) }}">{{ $single_cat->ar_title }}</a>
                                    </h4>
                                </div>
                                @endif
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
                            @if(Config::get('app.locale') == 'en')
                                <div class="toolbox-left">
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
                    @if ($count_product > 0)
                    <div class="product-wrapper row cols-xl-7 cols-lg-6 cols-md-4 cols-sm-3 cols-2">
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
                                    <a href="{{ route('singleproduct',$products_category->slug) }}">
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
                                    <div class="product-label-group" style="left:0rem !important;top:0rem !important">
                                        @if(Config::get('app.locale') == 'en')
                                        @if (!empty($products_category-> discound) || $products_category-> discound != null)
                                        <label class="product-label label-discount"
                                            style="font-size: 12px">{{$products_category-> discound}}% off</label>
                                        @endif
                                        @else
                                        @if (!empty($products_category-> discound) || $products_category-> discound != null)
                                        <label class="product-label label-discount"
                                            style="font-size: 12px">{{$products_category-> discound}}% خصم</label>
                                        @endif
                                        @endif
                                    </div>
                                </figure>
                                <div class="product-details">
                                    @if(Config::get('app.locale') == 'en')

                                    <div class="product-cat">
                                        <a href="{{ route('shop_special_category',$category_product->slug) }}">{{ $category_product->title }}</a>
                                    </div>
                                    <h4 class="product-name">
                                        <a href="{{ route('singleproduct',$products_category->slug) }}">{{ $products_category->title }}</a>
                                    </h4>
                                    @else 
                                    <div class="product-cat">
                                        <a href="{{ route('shop_special_category',$category_product->slug) }}">{{ $category_product->ar_title }}</a>
                                    </div>
                                    <h4 class="product-name">
                                        <a href="{{ route('singleproduct',$products_category->slug) }}">{{ $products_category->ar_title }}</a>
                                    </h4>
                                    @endif
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
                       @if(Config::get('app.locale') == 'en')
                    <h1 class="text-center" style="color: #fff;background:red;padding:20pxborder:1px solid red"> There is No Products related to this category</h1>
                    @else
                    <h1 class="text-center" style="color: #fff;background:red;padding:20pxborder:1px solid red"> لا توجد منتجات متعلقة بهذه الفئة</h1>
                    @endif
                @endif
                </div>
               
            </div>
            <!-- End of Shop Content -->
        </div>
    </div>
    <!-- End of Page Content -->
</main>


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