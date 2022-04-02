@extends('frontend.frontend_layout.main_desgin')
@section('mytitle',$single_product->title )
@section('style')
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
</style>
@endsection

@section('content')
<!-- Start of Main -->
<main class="pb-1 mb-10 main">
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
                                        <img src="assets/images/products/brand/brand-1.jpg" alt="Brand" width="102"
                                            height="48" />
                                    </figure>
                                    <!-- Category Detailes -->
                                    <div class="product-meta">
                                        <div class="product-categories">
                                            Category:
                                            <span class="product-category"><a href="#">Electronics</a></span>
                                        </div>
                                        <div class="product-sku">
                                            SKU: <span>MS46891340</span>
                                        </div>
                                    </div>
                                </div>

                                <hr class="product-divider">

                                <div class="product-price"><ins
                                        class="new-price">@if(empty($single_product->offer_price) ||
                                        $single_product->offer_price == null){{ $single_product->price }} AED @else <del
                                            style="color:red">{{ $single_product->price }} AED </del> -
                                        {{ $single_product->offer_price }} AED @endif</ins></div>

                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="#product-tab-review" class="rating-reviews scroll-to">(3
                                        Reviews)</a>
                                </div>

                                <div class="product-short-desc">
                                    <ul class="list-type-check list-style-none">
                                        {!! $single_product->summary !!}
                                    </ul>
                                </div>

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
                                <div class="fix-bottom product-sticky-content sticky-content">
                                    <div class="container product-form">
                                        <div class="product-qty-form">
                                            <div class="input-group">
                                                <input class="quantity form-control" type="number" min="1"
                                                    max="10000000">
                                                <button class="quantity-plus w-icon-plus"></button>
                                                <button class="quantity-minus w-icon-minus"></button>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-cart">
                                            <i class="w-icon-cart"></i>
                                            <span>Add to Cart</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="social-links-wrapper">
                                    <div class="social-links">
                                        <div class="social-icons social-no-color border-thin">
                                            <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                            <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                            <a href="#" class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                            <a href="#" class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                            <a href="#" class="social-icon social-youtube fab fa-linkedin-in"></a>
                                        </div>
                                    </div>
                                    <span class="divider d-xs-show"></span>
                                    <div class="product-link-wrapper d-flex">
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"><span></span></a>
                                        <a href="#"
                                            class="btn-product-icon btn-compare btn-icon-left w-icon-compare"><span></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                {{ $single_product->description }}
                                @else
                                <p class=text-red-600" style="color: red"> There is no Description for this product</p>
                                @endif

                            </div>
                            <div class="tab-pane" id="product-tab-specification">
                                @if($single_product->additional_info != null ||
                                !empty($single_product->additional_info))
                                {{ $single_product->additional_info }}
                                @else
                                <p class=text-red-600" style="color: red"> There is no additional information for this
                                    product</p>
                                @endif
                            </div>
                            <div class="tab-pane" id="product-tab-vendor">
                                <div class="mb-3 row">
                                    <div class="mb-4 col-md-6">
                                        <figure class="vendor-banner br-sm">
                                            <img src="assets/images/products/vendor-banner.jpg" alt="Vendor Banner"
                                                width="610" height="295" style="background-color: #353B55;" />
                                        </figure>
                                    </div>
                                    <div class="pl-2 mb-4 col-md-6 pl-md-6">
                                        <div class="vendor-user">
                                            <figure class="mr-4 vendor-logo">
                                                <a href="#">
                                                    <img src="{{ $vendor_info->photo }}" alt="Vendor Logo" width="80"
                                                        height="80" />
                                                </a>
                                            </figure>
                                            <div>
                                                <div class="vendor-name"><a href="#">{{ $vendor_info->full_name }}</a>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 90%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="#" class="rating-reviews">(32 Reviews)</a>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="vendor-info list-style-none">
                                            <li class="store-name">
                                                <label>Store Name:</label>
                                                <span class="detail">{{ $vendor_info->shope_name }}</span>
                                            </li>
                                            <li class="store-address">
                                                <label>Address:</label>
                                                <span class="detail">{{$vendor_info->address}}</span>
                                            </li>
                                            <li class="store-phone">
                                                <label>Phone:</label>
                                                <a href="#tel:">{{ $vendor_info->phone }}</a>
                                            </li>
                                        </ul>
                                        <a href="vendor-dokan-store.html"
                                            class="btn btn-dark btn-link btn-underline btn-icon-right">Visit
                                            Store<i class="w-icon-long-arrow-right"></i></a>
                                    </div>
                                </div>
                                <p class="mb-5"><strong class="text-dark">L</strong>orem ipsum dolor sit amet,
                                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua.
                                    Venenatis tellus in metus vulputate eu scelerisque felis. Vel pretium
                                    lectus quam id leo in vitae turpis massa. Nunc id cursus metus aliquam.
                                    Libero id faucibus nisl tincidunt eget. Aliquam id diam maecenas ultricies
                                    mi eget mauris. Volutpat ac tincidunt vitae semper quis lectus. Vestibulum
                                    mattis ullamcorper velit sed. A arcu cursus vitae congue mauris.
                                </p>
                                <p class="mb-2"><strong class="text-dark">A</strong> arcu cursus vitae congue
                                    mauris. Sagittis id consectetur purus
                                    ut. Tellus rutrum tellus pellentesque eu tincidunt tortor aliquam nulla.
                                    Diam in
                                    arcu cursus euismod quis. Eget sit amet tellus cras adipiscing enim eu. In
                                    fermentum et sollicitudin ac orci phasellus. A condimentum vitae sapien
                                    pellentesque
                                    habitant morbi tristique senectus et. In dictum non consectetur a erat. Nunc
                                    scelerisque viverra mauris in aliquam sem fringilla.</p>
                            </div>
                            <div class="tab-pane" id="product-tab-review">
                                <div class="mb-4 row">
                                    <div class="mb-4 col-xl-4 col-lg-5">
                                        <div class="ratings-wrapper">
                                            <div class="avg-rating-container">
                                                <h4 class="avg-mark font-weight-bolder ls-50">3.3</h4>
                                                <div class="avg-rating">
                                                    <p class="mb-1 text-dark">Average Rating</p>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 60%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <a href="#" class="rating-reviews">(3 Reviews)</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ratings-value d-flex align-items-center text-dark ls-25">
                                                <span class="text-dark font-weight-bold">66.7%</span>Recommended<span
                                                    class="count">(2 of 3)</span>
                                            </div>
                                            <div class="ratings-list">
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>70%</mark>
                                                    </div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>30%</mark>
                                                    </div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>40%</mark>
                                                    </div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 40%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>0%</mark>
                                                    </div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 20%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>0%</mark>
                                                    </div>
                                                </div>
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
                    <section class="vendor-product-section">
                        <div class="mb-4 title-link-wrapper">
                            <h4 class="text-left title">More Products From This Vendor</h4>
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
                                <div class="swiper-slide product">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/products/default/1-1.jpg" alt="Product" width="300"
                                                height="338" />
                                            <img src="assets/images/products/default/1-2.jpg" alt="Product" width="300"
                                                height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat"><a href="shop-banner-sidebar.html">Accessories</a>
                                        </div>
                                        <h4 class="product-name"><a href="product-default.html">Sticky Pencil</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">$20.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/products/default/2.jpg" alt="Product" width="300"
                                                height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat"><a href="shop-banner-sidebar.html">Electronics</a>
                                        </div>
                                        <h4 class="product-name"><a href="product-default.html">Mini
                                                Multi-Functional Cooker</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$480.00</ins><del class="old-price">$534.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/products/default/3.jpg" alt="Product" width="300"
                                                height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat"><a href="shop-banner-sidebar.html">Sports</a></div>
                                        <h4 class="product-name"><a href="product-default.html">Skate Pan</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$278.00</ins><del class="old-price">$310.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide product">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/products/default/4-1.jpg" alt="Product" width="300"
                                                height="338" />
                                            <img src="assets/images/products/default/4-2.jpg" alt="Product" width="300"
                                                height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat"><a href="shop-banner-sidebar.html">Accessories</a>
                                        </div>
                                        <h4 class="product-name"><a href="product-default.html">Clip Attachment</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">$40.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Related Products-->
                    @if(!empty($single_product->rel_product))
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
                                @foreach($single_product->rel_product as $related_products)
                                <div class="swiper-slide product">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ $related_products->image }}" alt="Product" width="300"
                                                height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a
                                                href="product-default.html">{{ $related_products ->title}}</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                @if(empty($single_product->offer_price) || $single_product->offer_price
                                                == null){{ $single_product->price }} AED @else <del
                                                    style="color:red">{{ $single_product->price }} AED </del> -
                                                {{ $single_product->offer_price }} AED @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
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
                                <div class="banner banner-fixed br-sm">
                                    <figure>
                                        <img src="assets/images/shop/banner3.jpg" alt="Banner" width="266" height="220"
                                            style="background-color: #1D2D44;" />
                                    </figure>
                                    <div class="banner-content">
                                        <div class="text-white banner-price-info font-weight-bolder lh-1 ls-25">
                                            40<sup class="font-weight-bold">%</sup><sub
                                                class="font-weight-bold text-uppercase ls-25">Off</sub>
                                        </div>
                                        <h4 class="mb-0 text-white banner-subtitle font-weight-bolder text-uppercase">
                                            Ultimate Sale</h4>
                                    </div>
                                </div>
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