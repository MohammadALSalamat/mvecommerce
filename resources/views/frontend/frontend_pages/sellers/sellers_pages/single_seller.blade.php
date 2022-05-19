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
                            {{-- <div class="widget widget-collapsible widget-categories">
                                    <h3 class="widget-title"><span>All Categories</span></h3>
                                    <ul class="widget-body filter-items search-ul">
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Computers</a></li>
                                        <li><a href="#">Electronics</a></li>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Furniture</a></li>
                                        <li><a href="#">Games</a></li>
                                        <li><a href="#">Kitchen</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Sports</a></li>
                                    </ul>
                                </div> --}}
                            <!-- End of Widget -->
                            <div class="widget widget-collapsible widget-contact">
                                <h3 class="widget-title"><span>Contact Vendor</span></h3>
                                <div class="widget-body">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Your Name" />
                                    <input type="text" class="form-control" name="email" id="email_1"
                                        placeholder="you@example.com" />
                                    <textarea name="message" maxlength="1000" cols="25" rows="6"
                                        placeholder="Type your messsage..." class="form-control"
                                        required="required"></textarea>
                                    <a href="#" class="btn btn-dark btn-rounded">Send Message</a>
                                </div>
                            </div>
                            <!-- End of Widget -->
                            {{-- <div class="widget widget-collapsible widget-time">
                                    <h3 class="widget-title"><span>Store Time</span></h3>
                                    <ul class="widget-body">
                                        <li><label>Sunday</label></li>
                                        <li><label>Monday</label></li>
                                        <li><label>Tuesday</label></li>
                                        <li><label>Wednesday</label></li>
                                        <li><label>Thursday</label></li>
                                        <li><label>Friday</label></li>
                                        <li><label>Saturday</label></li>
                                    </ul>
                                </div> --}}
                            <!-- End of Widget -->
                            <div class="widget widget-collapsible widget-products">
                                <h3 class="widget-title"><span>Best Selling</span></h3>
                                <div class="widget-body">
                                    @foreach ($top_selles_vendor as $product_vendor )
                                    @php
                                    $vednors_products_top_sellers = \App\Models\product::where('id',
                                    $product_vendor->product_id)->where('vendor_id',$seller->id)->get();
                                    @endphp
                                    @foreach ( $vednors_products_top_sellers as $top_selling)
                                    @php
                                    $avareg_review =
                                    \App\Models\ProductReview::where('product_id',$top_selling->id)->get();
                                    #review rateing
                                    $avareg = 0;
                                    $sum = 0;
                                    foreach($avareg_review as $avg){
                                    $sum += $avg->rate;
                                    $countavg = count($avareg_review);
                                    $avareg = $sum / $countavg;
                                    }
                                    $other_image = explode(',', $top_selling->image);
                                    @endphp
                                    <div class="product product-widget">
                                        <figure class="product-media">
                                            <a href="{{ route('singleproduct',$top_selling->slug) }}">
                                                @if(count($other_image) > 1)
                                                <img src="{{ asset($other_image[0]) }}" alt="Product" style="width: 100% !important;
                                                    height: 100px !important;object-fit: contain;" />
                                                <img src="{{ asset($other_image[1]) }}" alt="Product" style="width: 100% !important;
                                                     height: 150px !important;object-fit: contain;" />
                                                @else
                                                <img src="{{ asset($other_image[0]) }}" alt="Product" style="width: 100% !important;
                                                     height: 100px !important;object-fit: contain;" />
                                                @endif
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a
                                                    href="{{ route('singleproduct',$top_selling->slug) }}">{{ $top_selling->title }}</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" @if (number_format($avareg,1)==5)
                                                        style="width: 100%;" @elseif(number_format($avareg,1)>= 4.5)
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
                                                @if(Config::get('app.locale') == 'en')
                                                @if (!empty($top_selling->discound) || $top_selling->discound != null)
                                                <small
                                                    style="font-size:10px;background: green;color:#fff;padding:5px 10px;border-radius:20px;margin-left:5px">
                                                    {{ $top_selling->discound }}% OFF</small>
                                                @endif
                                                @else
                                                
                                                @if (!empty($top_selling->discound) || $top_selling->discound != null)
                                                <small
                                                    style="font-size:12px;background: green;color:#fff;padding:10px 20px;border-radius:20px;margin-left:10px">{{ $top_selling->discound }}%
                                                    خصم</small>
                                                @endif
                                                @endif
                                            </div>

                                            <div class="product-price">
                                                @if(Config::get('app.locale') == 'en')

                                                @if(empty($top_selling->offer_price) ||
                                                $top_selling->offer_price == null)
                                                {{ $top_selling->price }} AED
                                                @else <del>{{ $top_selling->price }} AED </del> -
                                                {{ $top_selling->offer_price }} AED @endif
                                                @else
                                                @if(empty($top_selling->offer_price) ||
                                                $top_selling->offer_price == null)
                                                {{ $top_selling->price }} د.أ
                                                @else <del>{{ $top_selling->price }} د.أ </del> -
                                                {{ $top_selling->offer_price }} د.أ @endif
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach

                                    @endforeach

                                </div>
                            </div>
                            <!-- End of Widget -->
                            <div class="widget widget-collapsible widget-products">
                                <h3 class="widget-title"><span>Top Rated</span></h3>
                                <div class="widget-body">
                                    @foreach ($top_reviewed_vendor_product as $product_vendor )
                                    @php
                                    $vednors_products_top_sellers = \App\Models\product::where('id',
                                    $product_vendor->product_id)->where('vendor_id',$seller->id)->get();
                                    @endphp
                                    @foreach ( $vednors_products_top_sellers as $top_selling)
                                    @php
                                    $avareg_review =
                                    \App\Models\ProductReview::where('product_id',$top_selling->id)->get();
                                    #review rateing
                                    $avareg = 0;
                                    $sum = 0;
                                    foreach($avareg_review as $avg){
                                    $sum += $avg->rate;
                                    $countavg = count($avareg_review);
                                    $avareg = $sum / $countavg;
                                    }
                                    $other_image = explode(',', $top_selling->image);
                                    @endphp
                                    <div class="product product-widget">
                                        <figure class="product-media">
                                            <a href="{{ route('singleproduct',$top_selling->slug) }}">
                                                @if(count($other_image) > 1)
                                                <img src="{{ asset($other_image[0]) }}" alt="Product" style="width: 100% !important;
                                                    height: 100px !important;object-fit: contain;" />
                                                <img src="{{ asset($other_image[1]) }}" alt="Product" style="width: 100% !important;
                                                     height: 150px !important;object-fit: contain;" />
                                                @else
                                                <img src="{{ asset($other_image[0]) }}" alt="Product" style="width: 100% !important;
                                                     height: 100px !important;object-fit: contain;" />
                                                @endif
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a
                                                    href="{{ route('singleproduct',$top_selling->slug) }}">{{ $top_selling->title }}</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" @if (number_format($avareg,1)==5)
                                                        style="width: 100%;" @elseif(number_format($avareg,1)>= 4.5)
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
                                                @if(Config::get('app.locale') == 'en')
                                                @if (!empty($top_selling->discound) || $top_selling->discound != null)
                                                <small
                                                    style="font-size:10px;background: green;color:#fff;padding:5px 10px;border-radius:20px;margin-left:5px">
                                                    {{ $top_selling->discound }}% OFF</small>
                                                @endif
                                                @else
                                                
                                                @if (!empty($top_selling->discound) || $top_selling->discound != null)
                                                <small
                                                    style="font-size:12px;background: green;color:#fff;padding:10px 20px;border-radius:20px;margin-left:10px">{{ $top_selling->discound }}%
                                                    خصم</small>
                                                @endif
                                                @endif
                                            </div>
                                            <div class="product-price">
                                                @if(Config::get('app.locale') == 'en')

                                                @if(empty($top_selling->offer_price) ||
                                                $top_selling->offer_price == null)
                                                {{ $top_selling->price }} AED
                                                @else <del>{{ $top_selling->price }} AED </del> -
                                                {{ $top_selling->offer_price }} AED @endif
                                                @else
                                                @if(empty($top_selling->offer_price) ||
                                                $top_selling->offer_price == null)
                                                {{ $top_selling->price }} د.أ
                                                @else <del>{{ $top_selling->price }} د.أ </del> -
                                                {{ $top_selling->offer_price }} د.أ @endif
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endforeach
                                </div>
                            </div>
                            <!-- End of Widget -->
                        </div>
                    </div>
                </aside>
                <!-- End of Sidebar -->

                <div class="main-content">
                    <div class="store store-banner mb-4">
                        <figure class="store-media">
                            @if (empty( $seller->banner_image) || $seller->banner_image == null)
                            <img src="{{ asset('front-style/assets/images/vendor/wcmp/1.jpg') }}" alt="Product" style="width: 100% !important;
height: 150px !important;object-fit: contain;" />
                            @else
                            <img src="{{ asset('/storage/seller/'.$seller->banner_image) }}" alt="Vendor" style="background-color: #fff;width: 100% !important;
                                    height: 450px !important;object-fit: contain;" />

                            @endif
                        </figure>
                        <div class="store-content">
                            <figure class="mb-3">
                                <img src="{{ asset('/storage/seller/'.$seller->brand) }}" alt="Brand" width="100px"
                                    height="100px" style="object-fit: contain" />
                            </figure>
                            <h4 class="store-title">{{ $seller->full_name}}</h4>
                            <ul class="seller-info-list list-style-none mb-6">
                                @if (empty($seller->address) || $seller->address ==null)
                                @else
                                <li class="store-address">
                                    <i class="w-icon-map-marker"></i>
                                    {{$seller->address}},{{ $seller->country }}
                                </li>

                                @endif
                                <li class="store-phone">
                                    <a href="tel:{{ $seller->phone }}">
                                        <i class="w-icon-phone"></i>
                                        {{ $seller->phone }}
                                    </a>
                                </li>
                                {{-- <li class="store-rating">
                                        <i class="w-icon-star-full"></i>
                                        4.33 rating from 3 reviews
                                    </li> --}}
                                <li class="store-open">
                                    <i class="w-icon-cart"></i>
                                    Store Open
                                </li>
                            </ul>
                            {{-- <div class="social-icons social-no-color border-thin">
                                    <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                    <a href="#" class="social-icon social-google w-icon-google"></a>
                                    <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                    <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                                    <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                                    <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                </div> --}}
                        </div>
                    </div>
                    <!-- End of Store Banner -->

                    <h2 class="title vendor-product-title mb-4"><a href="#">Products</a></h2>

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
                                    <h3 class="product-name">
                                        <a href="{{ route('singleproduct',$product->slug) }}">{{ $product->title}}</a>
                                    </h3>
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
                                            style="font-size:12px;background: green;color:#fff;padding:10px 20px;border-radius:20px;margin-left:10px">{{ $product->discound }}%
                                            خصم</small>
                                        @endif
                                        @endif
                                    </div>
                                    <div class="product-pa-wrapper">
                                        <div class="product-price">
                                            @if ( empty($product->offer_price) || $product->offer_price == null)
                                            <ins> {{ $product->price}} AED </ins>

                                            @else

                                            <ins> {{ $product->offer_price}} AED </ins> - <del>{{ $product->price}}
                                                AED</del>
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