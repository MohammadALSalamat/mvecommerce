@extends('frontend.frontend_layout.main_desgin')
@section('mytitle',$single_product->title )
@section('style')
<style>
    .carousel-item {
        width: 100%;
        height: 250px;
        background-position: center center !important;
        background-repeat: no-repeat !important;
        -webkit-background-size: cover !important;
        -moz-background-size: cover !important;
        -o-background-size: cover !important;
        background-size: cover !important;
    }

    .carousel {
        position: relative
    }

    .carousel.pointer-event {
        touch-action: pan-y
    }

    .carousel-inner {
        position: relative;
        width: 100%;
        overflow: hidden
    }

    .carousel-inner::after {
        display: block;
        clear: both;
        content: ""
    }

    .carousel-item {
        position: relative;
        display: none;
        float: left;
        width: 100%;
        margin-right: -100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        transition: transform .6s ease-in-out
    }

    @media (prefers-reduced-motion:reduce) {
        .carousel-item {
            transition: none
        }
    }

    .carousel-item-next,
    .carousel-item-prev,
    .carousel-item.active {
        display: block
    }

    .active.carousel-item-end,
    .carousel-item-next:not(.carousel-item-start) {
        transform: translateX(100%)
    }

    .active.carousel-item-start,
    .carousel-item-prev:not(.carousel-item-end) {
        transform: translateX(-100%)
    }

    .carousel-fade .carousel-item {
        opacity: 0;
        transition-property: opacity;
        transform: none
    }

    .carousel-fade .carousel-item-next.carousel-item-start,
    .carousel-fade .carousel-item-prev.carousel-item-end,
    .carousel-fade .carousel-item.active {
        z-index: 1;
        opacity: 1
    }

    .carousel-fade .active.carousel-item-end,
    .carousel-fade .active.carousel-item-start {
        z-index: 0;
        opacity: 0;
        transition: opacity 0s .6s
    }

    @media (prefers-reduced-motion:reduce) {

        .carousel-fade .active.carousel-item-end,
        .carousel-fade .active.carousel-item-start {
            transition: none
        }
    }

    .carousel-control-next,
    .carousel-control-prev {
        position: absolute;
        top: 0;
        bottom: 0;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 15%;
        padding: 0;
        color: #fff;
        text-align: center;
        background: 0 0;
        border: 0;
        opacity: .5;
        transition: opacity .15s ease
    }

    @media (prefers-reduced-motion:reduce) {

        .carousel-control-next,
        .carousel-control-prev {
            transition: none
        }
    }

    .carousel-control-next:focus,
    .carousel-control-next:hover,
    .carousel-control-prev:focus,
    .carousel-control-prev:hover {
        color: #fff;
        text-decoration: none;
        outline: 0;
        opacity: .9
    }

    .carousel-control-prev {
        left: 0
    }

    .carousel-control-next {
        right: 0
    }

    .carousel-control-next-icon,
    .carousel-control-prev-icon {
        display: inline-block;
        width: 2rem;
        height: 2rem;
        background-repeat: no-repeat;
        background-position: 50%;
        background-size: 100% 100%
    }

    .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e")
    }

    .carousel-control-next-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e")
    }

    .carousel-indicators {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 2;
        display: flex;
        justify-content: center;
        padding: 0;
        margin-right: 15%;
        margin-bottom: 1rem;
        margin-left: 15%;
        list-style: none
    }

    .carousel-indicators [data-bs-target] {
        box-sizing: content-box;
        flex: 0 1 auto;
        width: 30px;
        height: 3px;
        padding: 0;
        margin-right: 3px;
        margin-left: 3px;
        text-indent: -999px;
        cursor: pointer;
        background-color: #fff;
        background-clip: padding-box;
        border: 0;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        opacity: .5;
        transition: opacity .6s ease
    }

    @media (prefers-reduced-motion:reduce) {
        .carousel-indicators [data-bs-target] {
            transition: none
        }
    }

    .carousel-indicators .active {
        opacity: 1
    }

    .carousel-caption {
        position: absolute;
        right: 15%;
        bottom: 1.25rem;
        left: 15%;
        padding-top: 1.25rem;
        padding-bottom: 1.25rem;
        color: #fff;
        text-align: center
    }

    .carousel-dark .carousel-control-next-icon,
    .carousel-dark .carousel-control-prev-icon {
        filter: invert(1) grayscale(100)
    }

    .carousel-dark .carousel-indicators [data-bs-target] {
        background-color: #000
    }

    .carousel-dark .carousel-caption {
        color: #000
    }
</style>
<style>
    .row>.column {
        padding: 0 8px;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    .column {
        float: left;
        width: 25%;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: black;
    }

    /* Modal Content */
    .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        width: 90%;
        max-width: 1200px;
    }

    /* The Close Button */
    .close {
        color: white;
        position: absolute;
        top: 10px;
        right: 25px;
        font-size: 35px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #999;
        text-decoration: none;
        cursor: pointer;
    }

    .mySlides {
        display: none;
    }

    .cursor {
        cursor: pointer;
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    img {
        margin-bottom: -4px;
    }

    .caption-container {
        text-align: center;
        background-color: black;
        padding: 2px 16px;
        color: white;
    }

    .demo {
        opacity: 0.6;
    }

    .active,
    .demo:hover {
        opacity: 1;
    }

    img.hover-shadow {
        transition: 0.3s;
    }

    .hover-shadow:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .rating {
        display: flex;
        flex-direction: row-reverse;
        justify-content: center
    }

    .rating>input {
        display: none
    }

    .rating>label {
        position: relative;
        width: 30px;
        font-size: 30px;
        color: #F99932;
        cursor: pointer
    }

    .rating>label::before {
        content: "\2605";
        position: absolute;
        opacity: 0
    }

    .rating>label:hover:before,
    .rating>label:hover~label:before {
        opacity: 1 !important
    }
    .rating>input:checked~label:before {
        opacity: 1
    }
    .rating:hover>input:checked~label:before {
        opacity: 0.4
    }
  .product-tabs table  tr:nth-child(odd) {background-color: #f2f2f2;}
  .product-tabs table  td{
      padding: 10px;
  }
</style>
@endsection
@section('content')
<!-- Start of Main -->
<main class="pb-1 mb-10 main">
    @include('frontend.frontend_layout._breadcrumb')

    <!-- Start of Page Content -->
    <div class="page-content">
        <div class="container">
            <div class="row gutter-lg">
                <div class="main-content">
                    <div class="product product-single row">
                        <div class="mb-6 col-md-6">
                            <div class="product-gallery product-gallery-sticky">
                                <div class="swiper-container product-single-swiper swiper-theme nav-inner"
                                    data-swiper-options="{
                                    'navigation': {
                                        'nextEl': '.swiper-button-next',
                                        'prevEl': '.swiper-button-prev'
                                    }
                                }">
                                    <div class="swiper-wrapper row cols-1 gutter-no">
                                        <div class="swiper-slide">
                                            <figure class="product-image">
                                                <img src="{{ $single_product->image }}"
                                                    data-zoom-image="{{ $single_product->image }}"
                                                    alt="{{ $single_product->title }}" width="800" height="900">
                                            </figure>
                                        </div>  
                                        @foreach ($product_gallary as $image )
                                        <div class="swiper-slide">
                                            <figure class="product-image">
                                                <img src="{{asset('storage/popups/'.$image->gallery) }}"
                                                    data-zoom-image="{{asset('storage/popups/'.$image->gallery) }}"
                                                    alt="{{ $single_product->title }}" width="800" height="900">
                                            </figure>
                                        </div>
                                        @endforeach
                                    </div>
                                    <button class="swiper-button-next"></button>
                                    <button class="swiper-button-prev"></button>
                                    <a href="#" class="product-gallery-btn product-image-full"><i
                                            class="w-icon-zoom"></i></a>
                                </div>
                                <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                                    'navigation': {
                                        'nextEl': '.swiper-button-next',
                                        'prevEl': '.swiper-button-prev'
                                    }
                                }">
                                    <div class="product-thumbs swiper-wrapper row cols-4 gutter-sm">
                                        <div class="product-thumb swiper-slide">
                                            <img src="{{ $single_product->image }}" alt="Product Thumb" width="800"
                                                height="900">
                                        </div>
                                        @foreach ($product_gallary as $image )
                                        <div class="product-thumb swiper-slide">
                                            <img src="{{asset('storage/popups/'.$image->gallery) }}" alt="Product Thumb" width="800"
                                                height="900">
                                        </div>
                                        @endforeach
                                    </div>
                                    <button class="swiper-button-next"></button>
                                    <button class="swiper-button-prev"></button>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 col-md-6 mb-md-6">
                            <div class="product-details" data-sticky-options="{'minWidth': 767}">
                                <h1 class="product-title">{{ $single_product->title }}</h1>
                                <!-- Brand Logo-->
                                <div class="product-bm-wrapper">
                                    <figure class="brand">
                                        @if ($vendor_info->brand == null || empty($vendor_info->brand))
                                        <img src="{{asset('front-style/assets/images/itajer_logo.png')}}" alt="itajer" width="80"
                                        height="48" />
                                        @else
                                        <img src="{{asset('/storage/seller/'.$vendor_info->brand)}}" alt="Brand" width="102"
                                        height="48" />
                                    
                                        @endif
                                    </figure>
                                    <!-- Category Detailes -->
                                    <div class="product-meta">
                                        <div class="product-categories">
                                            Category:
                                            <span class="product-category"><a href="{{ route('shop_special_category',$Category_related_product->slug) }}">{{ $Category_related_product->title }}</a></span>
                                        </div>
                                        <div class="product-sku">
                                            SKU: <span>MS46891340</span>
                                        </div>
                                        <div class="mt-2">
                                            @if (!empty($vendor_info->shop_name) || $vendor_info->shop_name !=  null)
                                            Seller :  <a href="#" ><span>{{ $vendor_info->shop_name }}</span></a>
                                                
                                            @else
                                            Seller :  <a href="#" ><span>ITajer</span></a>
                                                
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <hr class="product-divider">
                                <h4> Summary</h4> <small style="font-size:12px;background: green;color:#fff;padding:10px 20px;border-radius:20px;margin-left:10px">{{ $single_product->discound }}% OFF</small>
                                <p>{!! $single_product->Summary !!}</p>
                                <hr class="product-divider">
                                <div class="product-price">
                                    <ins class="new-price">
                                        
                                    @if(empty($single_product->offer_price) ||
                                        $single_product->offer_price == null)
                                        {{ number_format($single_product->price) }} AED 
                                        @else {{ number_format($single_product->offer_price) }} AED  - <del style="color:#ccc"> {{ number_format($single_product->price) }} AED </del>  @endif
                                    </ins> 
                                    
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings"
                                        @if (number_format($avareg,1) == 5)
                                        style="width: 100%;"
                                        @elseif(number_format($avareg,1) >= 4.5)
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
                                    <a href="#product-tab-review" class="rating-reviews scroll-to">({{ $avareg_review->count() }}
                                        Reviews)</a>
                                </div>
                                <div class="product-short-desc">
                                    <ul class="list-type-check list-style-none">
                                        {!! $single_product->summary !!}
                                    </ul>
                                </div>
                                @if($product_attr->count() !== 0))
                                <hr class="product-divider">
                                <div class="form-group d-flex">
                                    <label for="sel1" style="font-size: 20px;">Select Size:</label>
                                    <select class="form-control form-control-sm" name="size" id="sel1"
                                        style="width: 50%;margin-left:10px">
                                        @foreach ($product_attr as $attr_size)
                                        <option value="{{ $attr_size->size }}">{{ $attr_size->size }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @else
                                @endif
                                {{-- <div class="product-form product-variation-form product-color-swatch">
                                    <label>Color:</label>
                                    <div class="d-flex align-items-center product-variations">
                                        <a href="#" class="color" style="background-color: #ffcc01"></a>
                                        <a href="#" class="color" style="background-color: #ca6d00;"></a>
                                        <a href="#" class="color" style="background-color: #1c93cb;"></a>
                                        <a href="#" class="color" style="background-color: #ccc;"></a>
                                        <a href="#" class="color" style="background-color: #333;"></a>
                                    </div>
                                </div>
                                <div class="product-form product-variation-form product-size-swatch">
                                    <label class="mb-1">Size:</label>
                                    <div class="flex-wrap d-flex align-items-center product-variations">
                                        <a href="#" class="size">Small</a>
                                        <a href="#" class="size">Medium</a>
                                        <a href="#" class="size">Large</a>
                                        <a href="#" class="size">Extra Large</a>
                                    </div>
                                    <a href="#" class="product-variation-clean">Clean All</a>
                                </div>
                                <div class="product-variation-price">
                                    <span></span>
                                </div> --}}
                                <hr class="product-divider">
                                @php
                                $size_guid =explode(',',$single_product->size_guid);
                                @endphp
                                @if(!empty($single_product->size_guid) || $single_product->size_guid != null)
                                <div class="d-flex align-items-center mb-2">
                                    <div class="row">
                                        <div class="col-3">
                                            <h5>Size Guide :</h5>
                                        </div>
                                        <div class="col-8">
                                            @foreach ($size_guid as $key => $size)
                                            <div class="column mr-1">
                                                <img src="{{ $size }}" style="width:100%"
                                                    onclick="openModal();currentSlide({{ $key }})"
                                                    class="hover-shadow cursor" style="width:auto;height:100px">
                                            </div>
                                            @endforeach
                                        </div>
                                        <div id="myModal" class="modal">
                                            <span class="close cursor" onclick="closeModal()">&times;</span>
                                            <div class="modal-content">
                                                @foreach ($size_guid as $key => $size)
                                                <div class="mySlides">
                                                    <img src="{{ $size }}" style="width:100%">
                                                </div>
                                                @endforeach
                                                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                                                <div class="caption-container">
                                                    <p id="caption"></p>
                                                </div>
                                                @foreach ($size_guid as $key => $size)
                                                <div class="column">
                                                    <img class="demo cursor" src="{{ $size }}" style="width:100%"
                                                        onclick="currentSlide({{ $key }})" alt="Nature and sunrise">
                                                </div>
                                                @endforeach
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class=" fix-bottom product-sticky-content sticky-content">
                                    <div class="container product-form align-middle">
                                        <div class="product-qty">
                                        <div class="quantity mr-2">
                                                <input class="qty form-control" type="number" min="1" max="99" name="quantity"
                                                data-id="{{ $single_product->id }}" id="qty-input-{{ $single_product->id }}" value="1" >
                    
                                        </div>
                                        </div>
                                        <button data-product-id="{{$single_product->id}}" id="add_to_cart{{$single_product->id}}" data-quantity="1" class="single-product-add-to-cart add-to-cart btn btn-primary btn-cart mt-2">
                                            <i class="w-icon-cart"></i>
                                            <span>Add to Cart</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="social-links-wrapper">
                                    <span class="divider d-xs-show"></span>
                                    <div class="product-link-wrapper d-flex">
                                        <a href="javascript:void(0)" data-id="{{ $single_product->id }}" id="add_to_wishlist{{ $single_product->id }}" data-quantity="1" class=" add_to_wishlist btn-product-icon btn-wishlist w-icon-heart"><span></span></a>
                                        <a href="#"
                                            class="btn-product-icon btn-compare btn-icon-left w-icon-compare"><span></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- more products with the item --->
                    <div class="mt-5 frequently-bought-together">
                        <h2 class="title title-underline">Frequently Bought Together</h2>
                        <div class="pb-4 mt-8 bought-together-products row">
                            <div class="text-center product product-wrap">
                                <figure class="product-media">
                                    <img src="assets/images/products/default/bought-1.jpg" alt="Product" width="138"
                                        height="138" />
                                    <div class="product-checkbox">
                                        <input type="checkbox" class="custom-checkbox" id="product_check1"
                                            name="product_check1">
                                        <label></label>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="#">Electronics Black Wrist Watch</a>
                                    </h4>
                                    <div class="product-price">$40.00</div>
                                </div>
                            </div>
                            <div class="text-center product product-wrap">
                                <figure class="product-media">
                                    <img src="assets/images/products/default/bought-2.jpg" alt="Product" width="138"
                                        height="138" />
                                    <div class="product-checkbox">
                                        <input type="checkbox" class="custom-checkbox" id="product_check2"
                                            name="product_check2">
                                        <label></label>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="#">Apple Laptop</a>
                                    </h4>
                                    <div class="product-price">$1,800.00</div>
                                </div>
                            </div>
                            <div class="text-center product product-wrap">
                                <figure class="product-media">
                                    <img src="assets/images/products/default/bought-3.jpg" alt="Product" width="138"
                                        height="138" />
                                    <div class="product-checkbox">
                                        <input type="checkbox" class="custom-checkbox" id="product_check3"
                                            name="product_check3">
                                        <label></label>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="#">White Lenovo Headphone</a>
                                    </h4>
                                    <div class="product-price">$34.00</div>
                                </div>
                            </div>
                            <div class="product-button">
                                <div class="bought-price font-weight-bolder text-primary ls-50">$1,874.00</div>
                                <div class="bought-count">For 3 items</div>
                                <a href="cart.html" class="btn btn-dark btn-rounded">Add All To Cart</a>
                            </div>
                        </div>
                    </div>

                    <!-- Tabs of Vednor and description --->
                    <div class="tab tab-nav-boxed tab-nav-underline product-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a href="#product-tab-description" class="nav-link active">Description</a>
                            </li>
                            <li class="nav-item">
                                <a href="#product-tab-specification" class="nav-link">Additional Information</a>
                            </li>
                            <li class="nav-item">
                                <a href="#product-tab-vendor" class="nav-link">Vendor Info</a>
                            </li>
                            <li class="nav-item">
                                <a href="#product-tab-review" class="nav-link">Customer Reviews ({{ count($user_review) }})</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="product-tab-description">
                                @if($single_product->description != null || !empty($single_product->description))
                                {!! $single_product->description !!}
                                @else
                                <p class=text-red-600" style="color: red"> There is no Description for this product</p>
                                @endif

                            </div>
                            <div class="tab-pane" id="product-tab-specification">
                                @if($single_product->additional_info != null ||
                                !empty($single_product->additional_info))
                                {!! $single_product->additional_info !!}
                                @else
                                <p class=text-red-600" style="color: red"> There is no additional information for this
                                    product</p>
                                @endif
                            </div>
                            <div class="tab-pane" id="product-tab-vendor">
                                <div class="mb-3 row">
                                    <div class="mb-4 col-md-6">
                                        <figure class="vendor-banner br-sm">
                                            @if (empty( $vendor_info->banner_image) || $vendor_info->banner_image == null)
                                            <img src="{{ asset('front-style/assets/images/vendor/wcmp/1.jpg') }}" alt="Vendor" 
                                            width="400" height="318" style="background-color: #454b63;" />
                                            @else
                                            <img src="{{ asset('/storage/seller/'.$vendor_info->banner_image) }}" alt="Vendor" 
                                                width="400px" height="318px" style="background-color: #454b63;" />
                                            
                                            @endif
                                        </figure>
                                    </div>
                                    <div class="pl-2 mb-4 col-md-6 pl-md-6">
                                        <div class="vendor-user">
                                            <figure class="mr-4 vendor-logo">
                                                <a href="#">
                                                    <img src="{{ asset('/storage/seller/'.$vendor_info->brand) }}" alt="Vendor Logo" width="80"
                                                        height="80" />
                                                </a>
                                            </figure>
                                            
                                        </div>
                                        <ul class="vendor-info list-style-none">
                                            <li class="store-name">
                                                <label>Store Name:</label>
                                                <span class="detail">{{ $vendor_info->shop_name }}</span>
                                            </li>
                                            @if (empty($vendor_info->address) || $vendor_info->address == null)
                                                
                                            @else
                                            <li class="store-address">
                                                <label>Address:</label>
                                                <span class="detail">{{$vendor_info->address}}</span>
                                            </li>
                                            @endif
                                            <li class="store-phone">
                                                <label>Phone:</label>
                                                <a href="#tel:">{{ $vendor_info->phone }}</a>
                                            </li>
                                        </ul>
                                        <a href="{{ route('single_seller',$vendor_info->username) }}"
                                            class="btn btn-dark btn-link btn-underline btn-icon-right">Visit
                                            Store<i class="w-icon-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="product-tab-review">
                                <div class="mb-4 row">
                                    <div class="mb-4 col-xl-4 col-lg-5">
                                        <div class="ratings-wrapper">
                                            <div class="avg-rating-container">
                                                <h4 class="avg-mark font-weight-bolder ls-50">{{ number_format($avareg,1) }}</h4>
                                                <div class="avg-rating">
                                                    <p class="mb-1 text-dark">Average Rating</p>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" 
                                                            @if (number_format($avareg,1) == 5)
                                                            style="width: 100%;"
                                                            @elseif(number_format($avareg,1) >= 4.5)
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
                                                        <a href="#" class="rating-reviews">({{ $avareg_review->count() }} Reviews)</a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="ratings-value d-flex align-items-center text-dark ls-25">
                                                <span class="text-dark font-weight-bold">{{ number_format($avareg ,1 ) }} </span> 
                                                @if( number_format($avareg ,1 ) >= 3.5)
                                                <span class="badge badge-success" style="padding:5px 15px ;background:green;color:#fff !important;border-radius:20px;margin-left:10px;"> Recommended </span>
                                                @else
                                                <span style="padding-left:5px ">Rating</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4 col-xl-8 col-lg-7">
                                        <div class="">
                                            <h3 class="mb-1 title tab-pane-title font-weight-bold">Submit Your
                                                Review</h3>
                                            <p class="mb-3">Your email address will not be published. Required
                                                fields are marked *</p>
                                            @auth
                                            <form action="{{ route('review_submit',$single_product->slug) }}"
                                                method="POST">
                                                @csrf
                                                <div class="">
                                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                                    <input type="hidden" name="product_id" value="{{ $single_product->id }}">
                                                    <label for="rating">Rate This Product :</label>
                                                    <div class="rating">
                                                        <input type="radio" name="rating" value="5" id="5">
                                                        <label for="5">☆</label>
                                                        <input type="radio" name="rating" value="4" id="4">
                                                        <label for="4">☆</label>
                                                        <input type="radio" name="rating" value="3" id="3">
                                                        <label for="3">☆</label>
                                                        <input type="radio" name="rating" value="2" id="2">
                                                        <label for="2">☆</label>
                                                        <input type="radio" name="rating" value="1" id="1">
                                                        <label for="1">☆</label>
                                                    </div>
                                                </div>
                                                <textarea cols="30" rows="6" placeholder="Write Your Review Here..."
                                                    class="form-control" id="review" name="review"></textarea>
                                                <div class="row gutter-md mt-2 mb-2">
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="Your Name"
                                                            id="author" name="user_name"
                                                            value="{{auth()->user()->full_name}}">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="Your Email"
                                                            id="email_1" name="email_user" disabled
                                                            value="{{ auth()->user()->email }}">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-dark"> Send </button>
                                            </form>
                                            @else
                                            <h3 class="mb-1 title tab-pane-title font-weight-bold">Sorry, You need to
                                                Login to send a review</h3>
                                            <p><a href="{{ route('loginForm') }}"> Click Here!!</a> to login</p>
                                            @endauth
                                        </div>
                                    </div>
                                </div>

                                <div class="tab tab-nav-boxed tab-nav-outline tab-nav-center">
                                    
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="show-all">
                                            <ul class="comments list-style-none">
                                                @if(count($user_review) > 0)
                                                @foreach ($user_review as $review )
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <figure class="comment-avatar">
                                                            <img src="{{ \App\Models\User::where('id',$review->user_id)->value('photo') }}"
                                                                alt="Commenter Avatar" width="90" height="90">
                                                        </figure>
                                                        <div class="comment-content">
                                                            <h4 class="comment-author">
                                                                <a href="#">{{ \App\Models\User::where('id',$review->user_id)->value('full_name') }}</a>
                                                                <span class="comment-date">{{ $review->created_at }}</span>
                                                            </h4>
                                                            <div class="ratings-container comment-rating">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" 
                                                                    @if ($review->rate == 5)
                                                                    style="width: 100%;"
                                                                    @elseif($review->rate == 4)
                                                                    style="width: 80%;"
                                                                    @elseif($review->rate == 3)
                                                                    style="width: 60%;"
                                                                    @elseif($review->rate == 2)
                                                                    style="width: 40%;"
                                                                    @else
                                                                    style="width: 20%;"
                                                                    @endif>
                                                                </span>
                                                                </div>
                                                            </div>
                                                            <p>{{$review->review}}.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach
                                                @else
                                                <p><strong> be the first</strong>, there are no reviews to view yet</p>
                                                @endif
                                                {{ $user_review->links('vendor.pagination.custompage') }}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- More Productcs From This Vendor -->
                    @if($vendor_products->count() > 0)
                    <section class="vendor-product-section">
                        <div class="mb-4 title-link-wrapper">
                            <h4 class="text-left title">More Products From This Vendor</h4>
                            <a href="{{ route('single_seller',$vendor_info->username) }}" class="btn btn-dark btn-link btn-slide-right btn-icon-right">More
                                Products<i class="w-icon-long-arrow-right"></i></a>
                        </div>
                        <div class="swiper-container swiper-theme" data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 2,
                            'breakpoints': {
                                '576': {
                                    'slidesPerView': 3
                                },
                                '768': {
                                    'slidesPerView': 4
                                },
                                '992': {
                                    'slidesPerView': 3
                                }
                            }
                        }">
                            <div class="swiper-wrapper row cols-lg-3 cols-md-4 cols-sm-3 cols-2">
                               @foreach ( $vendor_products as $product )
                               <div class="swiper-slide product">
                                   <figure class="product-media">
                                       <a href="{{ route('singleproduct',$product->slug) }}">
                                           <img src="{{ $product->image }}" alt="Product" width="300"
                                               height="338" />
                                       </a>
                                       <div class="product-action-vertical">
                                           <a href="#" data-product-id="{{$single_product->id}}" id="add_to_cart{{$single_product->id}}" data-quantity="1" class="add-to-cart btn-product-icon btn-cart w-icon-cart"
                                               title="Add to cart"></a>
                                           <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                               title="Add to wishlist"></a>
                                          
                                       </div>
                                      
                                   </figure>
                                   <div class="product-details text-center">
                                       <div class="product-cat"><a href="{{ route('shop_special_category',$Category_related_product->slug) }}">{{ $Category_related_product->title }}</a>
                                       </div>
                                       <h4 class="product-name"><a href="{{ route('singleproduct',$product->slug) }}">{{ $product->title }}</a>
                                       </h4>
                                      
                                       <div class="product-pa-wrapper">
                                           <div class="product-price">
                                            @if(empty($product->offer_price) ||
                                            $product->offer_price == null)
                                            {{ $product->price }} AED 
                                            @else <del
                                                style="color:red">{{ $product->price }} AED </del> -
                                            {{ $product->offer_price }} AED @endif
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               @endforeach
                            </div>
                        </div>
                    </section>
                    @endif
                    <!-- Related Products-->
                    @if ($related_product->count() > 0)
                    <section class="related-product-section">
                        <div class="mb-4 title-link-wrapper">
                            <h4 class="title">Related Products</h4>
                            <a href="#" class="btn btn-dark btn-link btn-slide-right btn-icon-right">More
                                Products<i class="w-icon-long-arrow-right"></i></a>
                        </div>
                        <div class="swiper-container swiper-theme" data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 2,
                            'breakpoints': {
                                '576': {
                                    'slidesPerView': 3
                                },
                                '768': {
                                    'slidesPerView': 4
                                },
                                '992': {
                                    'slidesPerView': 3
                                }
                            }
                        }">
                        <div class="swiper-wrapper row cols-lg-3 cols-md-4 cols-sm-3 cols-2">
                            @foreach($related_product as $related_products)
                            <div class="swiper-slide product">
                                <figure class="product-media " style="height: 380px" >
                                    <a href="{{ route('singleproduct',$related_products->slug) }}">
                                        <img src="{{ $related_products->image }}" alt="Product"  />
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                    </div>
                                    
                                </figure>
                                <div class="product-details text-center">
                                    <h4 class="product-name"><a
                                            href="{{ route('singleproduct', $related_products->slug) }}">{{ $related_products ->title}}</a></h4>
                                    <div class="product-pa-wrapper">
                                        <div class="product-price">
                                            @if(empty($related_products->offer_price) || $related_products->offer_price
                                            == null){{ $related_products->price }} AED @else <del
                                                style="color:red">{{ $related_products->price }} AED </del> -
                                            {{ $related_products->offer_price }} AED @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section> 
                        @else
                            
                        @endif
                                    </div>
                <!-- End of Main Content -->
                <aside class="sidebar product-sidebar sidebar-fixed right-sidebar sticky-sidebar-wrapper">
                    <div class="sidebar-overlay"></div>
                    <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
                    <a href="#" class="sidebar-toggle d-flex d-lg-none"><i class="fas fa-chevron-left"></i></a>
                    <div class="sidebar-content scrollable">
                        <div class="sticky-sidebar">
                            <div class="mb-6 widget widget-icon-box">
                                <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon text-dark">
                                        <i class="w-icon-truck"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title">Free Shipping & Returns</h4>
                                        <p>For all orders over $99</p>
                                    </div>
                                </div>
                                <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon text-dark">
                                        <i class="w-icon-bag"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title">Secure Payment</h4>
                                        <p>We ensure secure payment</p>
                                    </div>
                                </div>
                                <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon text-dark">
                                        <i class="w-icon-money"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title">Money Back Guarantee</h4>
                                        <p>Any back within 30 days</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Widget Icon Box -->

                            <div class="widget widget-banner mb-9">
          
                                        @php
                                        $sponser_adsdown = \App\Models\sponserAds::where('image_place' ,'single_product_side_bar')->get();
                                        @endphp
                                         @if($sponser_adsdown->count() > 0)
                                   
                                        <div id="carouselExampleControlsdown2" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            @foreach($sponser_adsdown as $key => $slider)
                                            @if($slider->image_place == 'single_product_side_bar')
                                            <div class="carousel-item {{ $key == 0 ? 'active':'' }}">
                                                <img src="{{url($slider->image_English)}}" class="d-block w-100"  alt="{{ $slider->image_place }}"> 
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsdown2" data-bs-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsdown2" data-bs-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        </button>
                                      </div>
                                      @endif 
                                   
                            </div>
                            <!-- End of Widget Banner -->

                            <div class="widget widget-products">
                                <div class="mb-2 title-link-wrapper">
                                    <h4 class="title title-link font-weight-bold">More Products</h4>
                                </div>

                                <div class="swiper nav-top">
                                    <div class="swiper-container swiper-theme nav-top" data-swiper-options="{
                                        'slidesPerView': 1,
                                        'spaceBetween': 20,
                                        'navigation': {
                                            'prevEl': '.swiper-button-prev',
                                            'nextEl': '.swiper-button-next'
                                        }
                                    }">
                                        <div class="swiper-wrapper">
                                            <div class="widget-col swiper-slide">
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="#">
                                                            <img src="assets/images/shop/13.jpg" alt="Product"
                                                                width="100" height="113" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="#">Smart Watch</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 100%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">$80.00 - $90.00</div>
                                                    </div>
                                                </div>
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="#">
                                                            <img src="assets/images/shop/14.jpg" alt="Product"
                                                                width="100" height="113" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="#">Sky Medical Facility</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 80%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">$58.00</div>
                                                    </div>
                                                </div>
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="#">
                                                            <img src="assets/images/shop/15.jpg" alt="Product"
                                                                width="100" height="113" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="#">Black Stunt Motor</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 60%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">$374.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-col swiper-slide">
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="#">
                                                            <img src="assets/images/shop/16.jpg" alt="Product"
                                                                width="100" height="113" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="#">Skate Pan</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 100%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">$278.00</div>
                                                    </div>
                                                </div>
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="#">
                                                            <img src="assets/images/shop/17.jpg" alt="Product"
                                                                width="100" height="113" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="#">Modern Cooker</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 80%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">$324.00</div>
                                                    </div>
                                                </div>
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="#">
                                                            <img src="assets/images/shop/18.jpg" alt="Product"
                                                                width="100" height="113" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="#">CT Machine</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 100%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">$236.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="swiper-button-next"></button>
                                        <button class="swiper-button-prev"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- End of Sidebar -->
            </div>
        </div>
    </div>
    <!-- End of Page Content -->
</main>
<!-- End of Main -->

@endsection

@section('script')
<script>
    $(document).on('click','.qty',function () {
        var id = $(this).data('id');
        var spinner = $(this),input = spinner.closest("div.quantity").find('input[type="number"]');
        if(input.val()==0){
            return false;
        }
        if(input.val() != 1){
            var newVal = parseFloat(input.val());
            $('#qty-input-'+id).val(newVal);
        }
        var productQuantity = $('#update-cart-'+id).data('product-quantity');
        update_cart(id,productQuantity)
        $('.single-product-add-to-cart').attr('data-quantity', $('#qty-input-'+id).val());

    });
    function update_cart(id,productQuantity){
    var rowId = id;
    var product_qty = $('#qty-input-'+rowId).val();
    var token="{{ csrf_token() }}";
    var path="{{ route('sing_page_update_cart') }}";

    $.ajax({
        type: "POST",
        url: path,
        data:{
            _token:token,
            product_qty : product_qty,
            rowId:rowId,
            productQuantity:productQuantity,
        },
        success: function (data) {
            console.log(data)
            if(data['status']){
            $('body #header-ajax').html(data['header']);
            $('body #cart_lists').html(data['cart_lists']);
            }else{
                alert('Out Of Stock');
            }
        }
    });
    }

</script>
<script>
    function openModal() {
        document.getElementById("myModal").style.display = "block";
    }

    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>
@endsection