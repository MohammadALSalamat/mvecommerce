@extends('frontend.frontend_layout.main_desgin')
@section('mytitle', 'single Seller Page')
@section('content')
<!-- Start of Main -->
<main class="main">
    <!-- Start of Breadcrumb -->

    <!-- End of Breadcrumb -->

    <!-- Start of Pgae Contetn -->
    <div class="page-content mb-8">
        <div class="container">
            <div class="row gutter-lg">
                <aside class="sidebar left-sidebar vendor-sidebar sticky-sidebar-wrapper sidebar-fixed">
                    <!-- Start of Sidebar Overlay -->
                    <div class="sidebar-overlay"></div>
                    <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
                    <a href="#" class="sidebar-toggle"><i class="fas fa-chevron-right"></i></a>
                    <div class="sidebar-content">
                        <div class="sticky-sidebar">
                            <!-- End of Widget -->
                            @include('frontend.frontend_pages.sellers.sellers_pages.short_code.sidebar_for_single_seller')
                            <!-- End of Widget -->
                        </div>
                    </div>
                </aside>
                <!-- End of Sidebar -->

                <div class="main-content">
                    <div class="store store-banner mb-4">
                        <figure class="store-media">
                            @if (empty( $seller->banner_image) || $seller->banner_image == null)
                            <img src="{{ asset('front-style/assets/images/defualtSellerbanner.png') }}" alt="Product" style="width: 100% !important;height: 150px !important;object-fit: contain;" />
                            @else
                            <img src="{{ asset('/storage/seller/'.$seller->banner_image) }}" alt="Vendor" style="background-color: #fff;width: 100% !important;
                                    height: 450px !important;object-fit: contain;" />
                            @endif
                        </figure>
                      
                    </div>
                    <!-- End of Store Banner -->
                    @if(Config::get('app.locale') == 'en')

                    <h2 class="title vendor-product-title mb-4"><a href="#">Products</a></h2>

                    @else
                    <h2 class="title vendor-product-title mb-4"><a href="#">المنتجات</a></h2>
                    @endif
                    <div class="product-wrapper row cols-md-3 cols-sm-2 cols-2">
                        @foreach ($vendor_product as $product)
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
                        if(empty($product->child_category_id)|| $product->child_category_id == null){
                        $category_name = \App\Models\category::where('id' , $product->category_id)->value('title');
                        }else{
                        $category_name = \App\Models\category::where('id' ,
                        $product->child_category_id)->value('title');
                        }
                        $other_image = explode(',', $product->image);

                        @endphp
                        <div class="product-wrap">
                            <div class="text-center product">
                                <figure class="product-media">
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
                                        <a href="" data-product-id="{{$product->id}}" id="add_to_cart{{$product->id}}"
                                            data-quantity="1" class="add-to-cart btn-product-icon w-icon-cart btn-cart"
                                            title="Add to cart"></a>
                                        <!--Add to wishlist funtion -->
                                        <a href="javascript:void(0)" data-id="{{ $product->id }}"
                                            id="add_to_wishlist{{ $product->id }}" data-quantity="1"
                                            class=" add_to_wishlist btn-product-icon btn-wishlist w-icon-heart"
                                            title="Wishlist"></a>

                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <span>{{ $category_name}}</span>
                                    </div>
                                    @if(Config::get('app.locale') == 'en')
                                    <h3 class="product-name">
                                        <a href="{{ route('singleproduct',$product->slug) }}">{{ $product->title}}</a>
                                    </h3>
                                    @else
                                    <h3 class="product-name">
                                        <a href="{{ route('singleproduct',$product->slug) }}">{{ $product->ar_title}}</a>
                                    </h3>
                                    @endif
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" @if (number_format($avareg,1)==5) style="width: 100%;"
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
                                                @endif
                                                ></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        @if(Config::get('app.locale') == 'en')
                                        @if (!empty($product->discound) || $product->discound != null)
                                        <small
                                            style="font-size:10px;background: green;color:#fff;padding:5px 10px;border-radius:20px;margin-left:5px">
                                            {{ $product->discound }}% OFF</small>
                                        @endif
                                        @else
                                        
                                        @if (!empty($product->discound) || $product->discound != null)
                                        <small
                                            style="font-size:10px;background: green;color:#fff;padding:5px 10px;border-radius:20px;margin-left:5px">{{ $product->discound }}%
                                            خصم</small>
                                        @endif
                                        @endif
                                    </div>
                                    <div class="product-pa-wrapper">
                                        <div class="product-price">
                                            
                                            @if(Config::get('app.locale') == 'en')
                                            @if(empty($product->offer_price) ||
                                            $product->offer_price == null)
                                            {{ $product->price }} AED
                                            @else <del>{{ $product->price }} AED </del> -
                                            {{ $product->offer_price }} AED @endif
                                            @else
                                            @if(empty($product->offer_price) ||
                                            $product->offer_price == null)
                                            {{ $product->price }} د.أ
                                            @else <del>{{ $product->price }} د.أ </del> -
                                            {{ $product->offer_price }} د.أ @endif
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- End of Main Content -->
            </div>
        </div>
    </div>
    <!-- End of Page Content -->
</main>
<!-- End of Main -->
@endsection