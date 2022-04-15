@extends('frontend.frontend_layout.main_desgin')
@section('mytitle','Home Page')
@section('content')
<!-- Start of Main-->
<main class="main">
    <section class="intro-section">
        <div class="swiper-container swiper-theme nav-inner pg-inner swiper-nav-lg animation-slider pg-xxl-hide nav-xxl-show nav-hide"
            data-swiper-options="{
            'slidesPerView': 1,
            'autoplay': {
                'delay': 8000,
                'disableOnInteraction': false
            }
        }">
        <!-- Sliders -->
            <div class="swiper-wrapper">

                @foreach( $banners as $banner)
                <div class="swiper-slide banner banner-fixed intro-slide intro-slide1"
                    style="background-image: url(front-style/assets/images/demos/demo1/sliders/slide-1.jpg); background-color: #ebeef2;">
                    <div class="container">
                        <figure class="slide-image skrollable slide-animate">
                            <img src="{{asset($banner->image)}}" alt="Banner"
                                data-bottom-top="transform: translateY(10vh);"
                                data-top-bottom="transform: translateY(-10vh);" width="474" height="397">
                        </figure>
                        <div class="text-right banner-content y-50">
                            <h5 class="mb-2 banner-subtitle font-weight-normal text-default ls-50 lh-1 slide-animate"
                                data-animation-options="{
                            'name': 'fadeInRightShorter',
                            'duration': '1s',
                            'delay': '.2s'
                        }">
                                Custom <span class="p-relative d-inline-block">{{$banner->title}}</span>
                            </h5>
                            <h3 class="banner-title font-weight-bolder ls-25 lh-1 slide-animate"
                                data-animation-options="{
                            'name': 'fadeInRightShorter',
                            'duration': '1s',
                            'delay': '.4s'
                        }">
                                RUNNING SHOES
                            </h3>
                            <p class="font-weight-normal text-default slide-animate" data-animation-options="{
                            'name': 'fadeInRightShorter',
                            'duration': '1s',
                            'delay': '.6s'
                        }">
                                Sale up to <span class="font-weight-bolder text-secondary">30% OFF</span>
                            </p>

                            <a href="shop-list.html"
                                class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate"
                                data-animation-options="{
                            'name': 'fadeInRightShorter',
                            'duration': '1s',
                            'delay': '.8s'
                        }">SHOP NOW<i class="w-icon-long-arrow-right"></i></a>

                        </div>
                        <!-- End of .banner-content -->
                    </div>
                    <!-- End of .container -->
                </div>
                @endforeach
                <!-- End of .intro-slide1 -->
            </div>
            <div class="swiper-pagination"></div>
            <button class="swiper-button-next"></button>
            <button class="swiper-button-prev"></button>
        </div>
        <!-- End of .swiper-container -->
    </section>
    <!-- End of .intro-section -->

    <div class="container">
        <div class="mt-6 mb-6 swiper-container appear-animate icon-box-wrapper br-sm" data-swiper-options="{
            'slidesPerView': 1,
            'loop': false,
            'breakpoints': {
                '576': {
                    'slidesPerView': 2
                },
                '768': {
                    'slidesPerView': 3
                },
                '1200': {
                    'slidesPerView': 4
                }
            }
        }">
        <!-- second section -->
            <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
                <div class="swiper-slide icon-box icon-box-side icon-box-primary">
                    <span class="icon-box-icon icon-shipping">
                        <i class="w-icon-truck"></i>
                    </span>
                    <div class="icon-box-content">
                        <h4 class="mb-1 icon-box-title font-weight-bold">Free Shipping & Returns</h4>
                        <p class="text-default">For all orders over $99</p>
                    </div>
                </div>
                <div class="swiper-slide icon-box icon-box-side icon-box-primary">
                    <span class="icon-box-icon icon-payment">
                        <i class="w-icon-bag"></i>
                    </span>
                    <div class="icon-box-content">
                        <h4 class="mb-1 icon-box-title font-weight-bold">Secure Payment</h4>
                        <p class="text-default">We ensure secure payment</p>
                    </div>
                </div>
                <div class="swiper-slide icon-box icon-box-side icon-box-primary icon-box-money">
                    <span class="icon-box-icon icon-money">
                        <i class="w-icon-money"></i>
                    </span>
                    <div class="icon-box-content">
                        <h4 class="mb-1 icon-box-title font-weight-bold">Money Back Guarantee</h4>
                        <p class="text-default">Any back within 30 days</p>
                    </div>
                </div>
                <div class="swiper-slide icon-box icon-box-side icon-box-primary icon-box-chat">
                    <span class="icon-box-icon icon-chat">
                        <i class="w-icon-chat"></i>
                    </span>
                    <div class="icon-box-content">
                        <h4 class="mb-1 icon-box-title font-weight-bold">Customer Support</h4>
                        <p class="text-default">Call or email us 24/7</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Iocn Box Wrapper -->
    <!-- third section -->
        <div class="pt-6 pb-8 row category-banner-wrapper appear-animate">
            <div class="mb-4 col-md-6">
                <div class="banner banner-fixed br-xs">
                    <figure>
                        <img src="{{asset('front-style/assets/images/demos/demo1/categories/1-1.jpg')}}" alt="Category Banner"
                            width="610" height="160" style="background-color: #ecedec;" />
                    </figure>
                    <div class="mt-0 banner-content y-50">
                        <h5 class="banner-subtitle font-weight-normal text-dark">Get up to <span
                                class="text-secondary font-weight-bolder text-uppercase ls-25">20% Off</span>
                        </h5>
                        <h3 class="banner-title text-uppercase">Sports Outfits<br><span
                                class="font-weight-normal text-capitalize">Collection</span>
                        </h3>
                        <div class="banner-price-info font-weight-normal">Starting at <span
                                class="text-secondary font-weight-bolder">$170.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-4 col-md-6">
                <div class="banner banner-fixed br-xs">
                    <figure>
                        <img src="{{asset('front-style/assets/images/demos/demo1/categories/1-2.jpg')}}" alt="Category Banner"
                            width="610" height="160" style="background-color: #636363;" />
                    </figure>
                    <div class="mt-0 banner-content y-50">
                        <h5 class="banner-subtitle font-weight-normal text-capitalize">New Arrivals</h5>
                        <h3 class="text-white banner-title text-uppercase">Accessories<br><span
                                class="font-weight-normal text-capitalize">Collection</span></h3>
                        <div class="text-white banner-price-info font-weight-normal text-capitalize">Only From
                            <span class="text-secondary font-weight-bolder">$90.00</span></div>
                    </div>
                </div>
            </div>
        </div>
    <!-- End of Category Banner Wrapper -->
        <div class="mb-8 row deals-wrapper appear-animate">
            <div class="mb-4 col-lg-9">
                <div class="single-product h-100 br-sm">
                    <h4 class="title-sm title-underline font-weight-bolder ls-normal">
                        Deals Hot of The Day
                    </h4>
                    <div class="swiper">
                        <div class="swiper-container swiper-theme nav-top swiper-nav-lg" data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 1
                        }">
                            <div class="swiper-wrapper row cols-1 gutter-no">
                                <div class="swiper-slide">
                                    <div class="product product-single row">
                                        <div class="col-md-6">
                                            <div class="product-gallery product-gallery-sticky product-gallery-vertical">
                                                <div class="swiper-container product-single-swiper swiper-theme nav-inner">
                                                    <div class="swiper-wrapper row cols-1 gutter-no">
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="{{asset('front-style/assets/images/demos/demo1/products/1-1-600x675.jpg')}}"
                                                                    data-zoom-image="{{asset('front-style/assets/images/demos/demo1/products/1-1-800x900.jpg')}}"
                                                                    alt="Product Image" width="800"
                                                                    height="900">
                                                            </figure>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="{{asset('front-style/assets/images/demos/demo1/products/1-2-600x675.jpg')}}"
                                                                    data-zoom-image="{{asset('front-style/assets/images/demos/demo1/products/1-2-800x900.jpg')}}"
                                                                    alt="Product Image" width="800"
                                                                    height="900">
                                                            </figure>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="{{asset('front-style/assets/images/demos/demo1/products/1-3-600x675.jpg')}}"
                                                                    data-zoom-image="{{asset('front-style/assets/images/demos/demo1/products/1-3-800x900.jpg')}}"
                                                                    alt="Product Image" width="800"
                                                                    height="900">
                                                            </figure>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="{{asset('front-style/assets/images/demos/demo1/products/1-4-600x675.jpg')}}"
                                                                    data-zoom-image="{{asset('front-style/assets/images/demos/demo1/products/1-4-800x900.jpg')}}"
                                                                    alt="Product Image" width="800"
                                                                    height="900">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    <button class="swiper-button-next"></button>
                                                    <button class="swiper-button-prev"></button>
                                                    <div class="product-label-group">
                                                        <label class="product-label label-discount">25%
                                                            Off</label>
                                                    </div>
                                                </div>
                                                <div class="product-thumbs-wrap swiper-container"
                                                    data-swiper-options="{
                                                    'direction': 'vertical',
                                                    'breakpoints': {
                                                        '0': {
                                                            'direction': 'horizontal',
                                                            'slidesPerView': 4
                                                        },
                                                        '992': {
                                                            'direction': 'vertical',
                                                            'slidesPerView': 'auto'
                                                        }
                                                    }
                                                }">
                                                    <div class="product-thumbs swiper-wrapper row cols-lg-1 cols-4 gutter-sm">
                                                        <div class="product-thumb swiper-slide">
                                                            <img src="{{ asset('front-style/assets/images/demos/demo1/products/1-1-600x675.jpg') }}"
                                                                alt="Product thumb" width="60" height="68" />
                                                        </div>
                                                        <div class="product-thumb swiper-slide">
                                                            <img src="{{ asset('front-style/assets/images/demos/demo1/products/1-2-600x675.jpg') }}"
                                                                alt="Product thumb" width="60" height="68" />
                                                        </div>
                                                        <div class="product-thumb swiper-slide">
                                                            <img src="{{ asset('front-style/assets/images/demos/demo1/products/1-3-600x675.jpg') }}"
                                                                alt="Product thumb" width="60" height="68" />
                                                        </div>
                                                        <div class="product-thumb swiper-slide">
                                                            <img src="{{ asset('front-style/assets/images/demos/demo1/products/1-4-600x675.jpg') }}"
                                                                alt="Product thumb" width="60" height="68" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="product-details scrollable">
                                                <h2 class="mb-1 product-title"><a
                                                        href="product-default.html">Coat Pool
                                                        Comfort Jacket</a></h2>
                                                <hr class="product-divider">
                                                <div class="product-price"><ins class="new-price ls-50">$150.00
                                                        -
                                                        $180.00</ins></div>
                                                <div class="flex-wrap product-countdown-container">
                                                    <label class="mr-2 text-default">Offer Ends In:</label>
                                                    <div class="product-countdown countdown-compact"
                                                        data-until="2022, 12, 31" data-compact="true">
                                                        629 days, 11: 59: 52</div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="#" class="rating-reviews">(3 Reviews)</a>
                                                </div>
                                                <div class="mb-3 product-form product-variation-form product-size-swatch">
                                                    <label class="mb-1">Size:</label>
                                                    <div class="flex-wrap d-flex align-items-center product-variations">
                                                        <a href="#" class="size">Extra Large</a>
                                                        <a href="#" class="size">Large</a>
                                                        <a href="#" class="size">Medium</a>
                                                        <a href="#" class="size">Small</a>
                                                    </div>
                                                    <a href="#" class="product-variation-clean">Clean All</a>
                                                </div>
                                                <div class="product-variation-price">
                                                    <span></span>
                                                </div>
                                                <div class="pt-4 product-form">
                                                    <div class="mb-2 mr-2 product-qty-form">
                                                        <div class="input-group">
                                                            <input class="quantity form-control" 
                                                            type="number" min="1" max="10000000">
                                                            <button class="quantity-plus w-icon-plus"></button>
                                                            <button class="quantity-minus w-icon-minus"></button>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary btn-cart">
                                                        <i class="w-icon-cart"></i>
                                                        <span>Add to Cart</span>
                                                    </button>
                                                </div>
                                                <div class="mt-1 social-links-wrapper">
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
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"></a>
                                                        <a href="#" class="btn-product-icon btn-compare btn-icon-left w-icon-compare"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product product-single row">
                                        <div class="col-md-6">
                                            <div class="product-gallery product-gallery-sticky product-gallery-vertical">
                                                <div class="swiper-container product-single-swiper swiper-theme nav-inner">
                                                    <div class="swiper-wrapper row cols-1 gutter-no">
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="{{ asset('front-style/assets/images/demos/demo1/products/2-1-600x675.jpg') }}"
                                                                    data-zoom-image="{{ asset('front-style/assets/images/demos/demo1/products/2-1-800x900.jpg') }}"
                                                                    alt="Product Image" width="800" height="900">
                                                            </figure>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="{{asset('front-style/assets/images/demos/demo1/products/2-2-600x675.jpg')}}"
                                                                    data-zoom-image="{{asset('front-style/assets/images/demos/demo1/products/2-2-800x900.jpg')}}"
                                                                    alt="Product Image" width="800"
                                                                    height="900">
                                                            </figure>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="{{asset('front-style/assets/images/demos/demo1/products/2-3-600x675.jpg')}}"
                                                                    data-zoom-image="{{asset('front-style/assets/images/demos/demo1/products/2-3-800x900.jpg')}}"
                                                                    alt="Product Image" width="800"
                                                                    height="900">
                                                            </figure>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="{{asset('front-style/assets/images/demos/demo1/products/2-4-600x675.jpg')}}"
                                                                    data-zoom-image="{{asset('front-style/assets/images/demos/demo1/products/2-4-800x900.jpg')}}"
                                                                    alt="Product Image" width="800"
                                                                    height="900">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    <button class="swiper-button-next"></button>
                                                    <button class="swiper-button-prev"></button>
                                                    <div class="product-label-group">
                                                        <label class="product-label label-discount">25% Off</label>
                                                    </div>
                                                </div>
                                                <div class="product-thumbs-wrap swiper-container"
                                                    data-swiper-options="{
                                                    'breakpoints': {
                                                        '992': {
                                                        'direction': 'vertical',
                                                        'slidesPerView': 'auto'
                                                        }
                                                    }
                                                }">
                                                    <div
                                                        class="product-thumbs swiper-wrapper row cols-lg-1 cols-4 gutter-sm">
                                                        <div class="product-thumb swiper-slide">
                                                            <img src="{{ asset('front-style/assets/images/demos/demo1/products/2-1-600x675.jpg') }}"
                                                            alt="Product thumb" width="60" height="68" />
                                                        </div>
                                                        <div class="product-thumb swiper-slide">
                                                            <img src="{{ asset('front-style/assets/images/demos/demo1/products/2-2-600x675.jpg') }}"
                                                            alt="Product thumb" width="60" height="68" />
                                                        </div>
                                                        <div class="product-thumb swiper-slide">
                                                            <img src="{{ asset('front-style/assets/images/demos/demo1/products/2-3-600x675.jpg') }}"
                                                            alt="Product thumb" width="60" height="68" />
                                                        </div>
                                                        <div class="product-thumb swiper-slide">
                                                            <img src="{{ asset('front-style/assets/images/demos/demo1/products/2-4-600x675.jpg') }}"
                                                            alt="Product thumb" width="60" height="68" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="product-details scrollable">
                                                <h2 class="mb-1 product-title"><a
                                                        href="product-default.html">Coat Pool
                                                        Comfort Jacket</a></h2>
                                                <hr class="product-divider">
                                                <div class="product-price"><ins class="new-price ls-50">$150.00
                                                        -
                                                        $180.00</ins></div>
                                                <div class="flex-wrap product-countdown-container">
                                                    <label class="mr-2 text-default">Offer Ends In:</label>
                                                    <div class="product-countdown countdown-compact"
                                                        data-until="2022, 12, 31" data-compact="true">
                                                        629 days, 11: 59: 52</div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                    <span class="ratings" style="width: 80%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="#" class="rating-reviews">(3 Reviews)</a>
                                                </div>
                                                <div
                                                    class="mb-3 product-form product-variation-form product-size-swatch">
                                                    <label class="mb-1">Size:</label>
                                                    <div
                                                    class="flex-wrap d-flex align-items-center product-variations">
                                                    <a href="#" class="size">Extra Large</a>
                                                    <a href="#" class="size">Large</a>
                                                    <a href="#" class="size">Medium</a>
                                                    <a href="#" class="size">Small</a>
                                                    </div>
                                                    <a href="#" class="product-variation-clean">Clean All</a>
                                                </div>
                                                <div class="product-variation-price">
                                                    <span></span>
                                                </div>
                                                <div class="pt-4 product-form">
                                                    <div class="mb-2 mr-2 product-qty-form">
                                                        <div class="input-group">
                                                            <input class="quantity form-control" type="number"
                                                                min="1" max="10000000">
                                                            <button class="quantity-plus w-icon-plus"></button>
                                                            <button
                                                                class="quantity-minus w-icon-minus"></button>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary btn-cart">
                                                        <i class="w-icon-cart"></i>
                                                        <span>Add to Cart</span>
                                                    </button>
                                                </div>
                                                <div class="mt-1 social-links-wrapper">
                                                    <div class="social-links">
                                                        <div class="social-icons social-no-color border-thin">
                                                            <a href="#"
                                                                class="social-icon social-facebook w-icon-facebook"></a>
                                                            <a href="#"
                                                                class="social-icon social-twitter w-icon-twitter"></a>
                                                            <a href="#"
                                                                class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                                            <a href="#"
                                                                class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                                            <a href="#"
                                                                class="social-icon social-youtube fab fa-linkedin-in"></a>
                                                        </div>
                                                    </div>
                                                    <span class="divider d-xs-show"></span>
                                                    <div class="product-link-wrapper d-flex">
                                                        <a href="#"
                                                            class="btn-product-icon btn-wishlist w-icon-heart"></a>
                                                        <a href="#"
                                                            class="btn-product-icon btn-compare btn-icon-left w-icon-compare"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="swiper-button-prev"></button>
                            <button class="swiper-button-next"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-4 col-lg-3">
                <div class="widget widget-products widget-products-bordered h-100">
                    <div class="widget-body br-sm h-100">
                        <h4 class="mb-2 title-sm title-underline font-weight-bolder ls-normal">Top 20 Best
                            Seller</h4>
                        <div class="swiper">
                            <div class="swiper-container swiper-theme nav-top" data-swiper-options="{
                                'slidesPerView': 1,
                                'spaceBetween': 20,
                                'breakpoints': {
                                    '576': {
                                        'slidesPerView': 2
                                    },
                                    '768': {
                                        'slidesPerView': 3
                                    },
                                    '992': {
                                        'slidesPerView': 1
                                    }
                                }
                            }">
                                <div class="swiper-wrapper row cols-lg-1 cols-md-3">
                                    <div class="swiper-slide product-widget-wrap">
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="{{ asset('front-style/assets/images/demos/demo1/products/2-1.jpg') }}"
                                                        alt="Product" width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">Kitchen Cooker</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$150.60</ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="{{ asset('front-style/assets/images/demos/demo1/products/2-2.jpg') }}"
                                                        alt="Product" width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">Professional Pixel Camera</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$215.68</ins><del
                                                        class="old-price">$230.45</del>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-widget">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="{{ asset('front-style/assets/images/demos/demo1/products/2-3.jpg') }}"
                                                        alt="Product" width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">Sport Women’s Wear</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$220.20</ins><del
                                                        class="old-price">$300.62</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide product-widget-wrap">
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="{{ asset('front-style/assets/images/demos/demo1/products/2-4.jpg') }}"
                                                        alt="Product" width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">Latest Speaker</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$250.68</ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="{{ asset('front-style/assets/images/demos/demo1/products/2-5.jpg') }}"
                                                        alt="Product" width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">Men's Black Wrist Watch</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$135.60</ins><del
                                                        class="old-price">$155.70</del>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-widget">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="{{ asset('front-style/assets/images/demos/demo1/products/2-6.jpg') }}"
                                                        alt="Product" width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">Wash Machine</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                <ins class="new-price">$215.68</ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide product-widget-wrap">
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="{{ asset('front-style/assets/images/demos/demo1/products/2-7.jpg') }}"
                                                        alt="Product" width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">Security Guard</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price"><ins class="new-price">$320.00</ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="{{ asset('front-style/assets/images/demos/demo1/products/2-8.jpg') }}"
                                                    alt="Product" width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">Apple Super Notecom</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$243.30</ins><del
                                                    class="old-price">$253.50</del>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-widget">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="{{ asset('front-style/assets/images/demos/demo1/products/2-9.jpg') }}"
                                                    alt="Product" width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">HD Television</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                    <span class="ratings" style="width: 60%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$450.68</ins><del
                                                    class="old-price">$500.00</del>
                                                </div>
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
        </div>
    <!-- End of Deals Wrapper -->
    </div>
    <section class="pt-10 pb-10 category-section top-category bg-grey appear-animate">
        <div class="container pb-2">
            <h2 class="pt-1 mb-5 title justify-content-center ls-normal">Top Categories Of The Month</h2>
            <div class="swiper">
                <div class="swiper-container swiper-theme pg-show" data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 2,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 3
                        },
                        '768': {
                            'slidesPerView': 5
                        },
                        '992': {
                            'slidesPerView': 6
                        }
                    }
                }">
                    <div class="swiper-wrapper row cols-lg-6 cols-md-5 cols-sm-3 cols-2">
                        @foreach( $categories as $category)
                        <div
                            class="swiper-slide category category-classic category-absolute overlay-zoom br-xs">
                            <a href="{{ route('shop_special_category',$category->slug) }}" class="category-media">
                                <img src="{{asset($category->image)}}" alt="Category"
                                style="width: 100% !important;height: 150px !important;object-fit: contain;">
                            </a>
                            <div class="category-content">
                                <h4 class="category-name">{{$category->title}}</h4>
                                <a href="{{ route('shop_special_category',$category->slug) }}"
                                class="btn btn-primary btn-link btn-underline">Shop Now</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of .category-section top-category -->
    <div class="container">
        <h2 class="pt-1 mt-10 mb-4 title justify-content-center ls-normal appear-animate">Popular Departments
        </h2>
        <div class="tab tab-nav-boxed tab-nav-outline appear-animate">
            <ul class="nav nav-tabs justify-content-center" role="tablist">
                <li class="mb-2 mr-2 nav-item">
                    <a class="nav-link active br-sm font-size-md ls-normal" href="#tab1-1">New arrivals</a>
                </li>
                <li class="mb-2 mr-2 nav-item">
                    <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-2">Best seller</a>
                </li>
                <li class="mb-2 mr-2 nav-item">
                    <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-3">most popular</a>
                </li>
                <li class="mb-2 mr-0 nav-item">
                    <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-4">Featured</a>
                </li>
            </ul>
        </div>
    <!-- End of Tab -->
        <div class="tab-content product-wrapper appear-animate">
            <div class="pt-4 tab-pane active" id="tab1-1">
                <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                    
                    <!-- new products -->
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('front-style/assets/images/demos/demo1/products/3-1-1.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                    <img src="{{asset('front-style/assets/images/demos/demo1/products/3-1-2.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Classic Hat</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$53.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- End of Tab Pane -->
            <div class="pt-4 tab-pane" id="tab1-2">
                <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('front-style/assets/images/demos/demo1/products/3-4-1.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                    <img src="{{asset('front-style/assets/images/demos/demo1/products/3-4-2.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Fashion Blue Towel</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(8 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$26.55 - $29.99</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('front-style/assets/images/demos/demo1/products/3-3.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                                <div class="product-label-group">
                                    <label class="product-label label-discount">7% Off</label>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Multi Funtional Apple
                                        iPhone</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">136.26</ins>
                                    <del class="old-price">$145.90</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('front-style/assets/images/demos/demo1/products/3-8-1.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                    <img src="{{asset('front-style/assets/images/demos/demo1/products/3-8-2.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Comfortable Backpack</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(6 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$45.90</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('front-style/assets/images/demos/demo1/products/3-9.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Data Transformer Tool
                                    </a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <span class="price">$64.47</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('front-style/assets/images/demos/demo1/products/3-5.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                                <div class="product-label-group">
                                    <label class="product-label label-discount">4% Off</label>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Apple Super Notecom</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(4 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$243.30</ins>
                                    <del class="old-price">$253.50</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('front-style/assets/images/demos/demo1/products/3-6-1.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                    <img src="{{asset('front-style/assets/images/demos/demo1/products/3-6-2.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Women’s Comforter</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(10 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$32.00 - $33.26</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('front-style/assets/images/demos/demo1/products/3-7.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Multi-colorful Music</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$260.59 - $297.83</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('front-style/assets/images/demos/demo1/products/3-1-1.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                    <img src="assets/images/demos/demo1/products/3-1-2.jpg" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Classic Hat</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$53.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('front-style/assets/images/demos/demo1/products/3-2.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Women’s White
                                        Handbag</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$26.62</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('front-style/assets/images/demos/demo1/products/3-10.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Women’s hairdye</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <span class="price">$173.84</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Tab Pane -->
            <div class="pt-4 tab-pane" id="tab1-3">
                <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('front-style/assets/images/demos/demo1/products/3-9.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Data Transformer Tool
                                    </a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <span class="price">$64.47</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('front-style/assets/images/demos/demo1/products/3-1-1.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                    <img src="{{asset('front-style/assets/images/demos/demo1/products/3-1-2.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Classic Hat</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$53.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('front-style/assets/images/demos/demo1/products/3-3.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                                <div class="product-label-group">
                                    <label class="product-label label-discount">7% Off</label>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Multi Funtional Apple
                                        iPhone</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">136.26</ins>
                                    <del class="old-price">$145.90</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('front-style/assets/images/demos/demo1/products/3-2.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Women’s White
                                        Handbag</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$26.62</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('front-style/assets/images/demos/demo1/products/3-10.jpg')}}" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Women’s hairdye</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <span class="price">$173.84</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo1/products/3-8-1.jpg" alt="Product"
                                        width="300" height="338" />
                                    <img src="assets/images/demos/demo1/products/3-8-2.jpg" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Comfortable Backpack</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(6 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$45.90</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo1/products/3-5.jpg" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                                <div class="product-label-group">
                                    <label class="product-label label-discount">4% Off</label>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Apple Super Notecom</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(4 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$243.30</ins>
                                    <del class="old-price">$253.50</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo1/products/3-7.jpg" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Multi-colorful Music</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$260.59 - $297.83</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo1/products/3-6-1.jpg" alt="Product"
                                        width="300" height="338" />
                                    <img src="assets/images/demos/demo1/products/3-6-2.jpg" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Women’s Comforter</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(10 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$32.00 - $33.26</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo1/products/3-4-1.jpg" alt="Product"
                                        width="300" height="338" />
                                    <img src="assets/images/demos/demo1/products/3-4-2.jpg" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Fashion Blue Towel</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(8 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$26.55 - $29.99</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Tab Pane -->
            <div class="pt-4 tab-pane" id="tab1-4">
                <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo1/products/3-4-1.jpg" alt="Product"
                                        width="300" height="338" />
                                    <img src="assets/images/demos/demo1/products/3-4-2.jpg" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Fashion Blue Towel</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(8 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$26.55 - $29.99</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo1/products/3-10.jpg" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Women’s hairdye</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <span class="price">$173.84</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo1/products/3-9.jpg" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Data Transformer Tool
                                    </a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <span class="price">$64.47</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo1/products/3-8-1.jpg" alt="Product"
                                        width="300" height="338" />
                                    <img src="assets/images/demos/demo1/products/3-8-2.jpg" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Comfortable Backpack</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(6 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$45.90</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo1/products/3-2.jpg" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Women’s White
                                        Handbag</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$26.62</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo1/products/3-5.jpg" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                                <div class="product-label-group">
                                    <label class="product-label label-discount">4% Off</label>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Apple Super Notecom</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(4 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$243.30</ins>
                                    <del class="old-price">$253.50</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo1/products/3-3.jpg" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                                <div class="product-label-group">
                                    <label class="product-label label-discount">7% Off</label>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Multi Funtional Apple
                                        iPhone</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">136.26</ins>
                                    <del class="old-price">$145.90</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo1/products/3-7.jpg" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Multi-colorful Music</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$260.59 - $297.83</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo1/products/3-6-1.jpg" alt="Product"
                                        width="300" height="338" />
                                    <img src="assets/images/demos/demo1/products/3-6-2.jpg" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Women’s Comforter</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(10 reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$32.00 - $33.26</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo1/products/3-1-1.jpg" alt="Product"
                                        width="300" height="338" />
                                    <img src="assets/images/demos/demo1/products/3-1-2.jpg" alt="Product"
                                        width="300" height="338" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Classic Hat</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$53.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Tab Pane -->
        </div>
    <!-- End of Tab Content -->
        <div class="mb-5 row category-cosmetic-lifestyle appear-animate">
            <div class="mb-4 col-md-6">
                <div class="banner banner-fixed category-banner-1 br-xs">
                    <figure>
                        <img src="assets/images/demos/demo1/categories/3-1.jpg" alt="Category Banner"
                            width="610" height="200" style="background-color: #3B4B48;" />
                    </figure>
                    <div class="pt-1 banner-content y-50">
                        <h5 class="banner-subtitle font-weight-bold text-uppercase">Natural Process</h5>
                        <h3 class="text-white banner-title font-weight-bolder text-capitalize">Cosmetic
                            Makeup<br>Professional</h3>
                        <a href="shop-banner-sidebar.html"
                            class="btn btn-white btn-link btn-underline btn-icon-right">Shop Now<i
                                class="w-icon-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="mb-4 col-md-6">
                <div class="banner banner-fixed category-banner-2 br-xs">
                    <figure>
                        <img src="assets/images/demos/demo1/categories/3-2.jpg" alt="Category Banner"
                            width="610" height="200" style="background-color: #E5E5E5;" />
                    </figure>
                    <div class="pt-1 banner-content y-50">
                        <h5 class="banner-subtitle font-weight-bold text-uppercase">Trending Now</h5>
                        <h3 class="banner-title font-weight-bolder text-capitalize">Women's
                            Lifestyle<br>Collection</h3>
                        <a href="shop-banner-sidebar.html"
                            class="btn btn-dark btn-link btn-underline btn-icon-right">Shop Now<i
                                class="w-icon-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    <!-- End of Category Cosmetic Lifestyle -->
@foreach ($home_3_Categories as $item)
<div class="mb-5 product-wrapper-1 appear-animate">
    <div class="pb-1 mb-4 title-link-wrapper">
        <h2 class="mb-0 title ls-normal">{{ $item->title }}</h2>
        <a href="{{ route('shop_special_category',$item->slug) }}" class="mb-0 font-size-normal font-weight-bold ls-25">More
            Products<i class="w-icon-long-arrow-right"></i></a>
    </div>
    <div class="row">
        <div class="mb-4 col-lg-3 col-sm-4">
            <div class="banner h-100 br-sm" style="background-image: url({{ $item->image }});
                background-color: #ebeced;">
                <div class="banner-content content-top">
                    <h5 class="mb-2 banner-subtitle font-weight-normal">Weekend Sale</h5>
                    <hr class="mb-2 banner-divider bg-dark">
                    <h3 class="banner-title font-weight-bolder ls-25 text-uppercase">
                        New Arrivals<br> <span
                            class="font-weight-normal text-capitalize">Collection</span>
                    </h3>
                    <a href="{{ route('shop_special_category',$item->slug) }}"
                        class="btn btn-dark btn-outline btn-rounded btn-sm">shop Now</a>
                </div>
            </div>
        </div>
        <!-- End of Banner -->
        <div class="col-lg-9 col-sm-8">
            <div class="swiper-container swiper-theme" data-swiper-options="{
                'spaceBetween': 20,
                'slidesPerView': 2,
                'breakpoints': {
                    '992': {
                        'slidesPerView': 3
                    },
                    '1200': {
                        'slidesPerView': 4
                    }
                }
            }">
            <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                    @foreach ($item->one_cat_has_many_products as $products_cat)
                    <div class="swiper-slide product-col">
                        <div class="text-center product-wrap product">
                            <figure class="product-media">
                                <a href="{{ route('singleproduct',$products_cat->slug) }}" >
                                    <img style="height:200px !important; width:100% !important;object-fit:contain" src="{{ $products_cat->image }}" alt="Product" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="javascript:void(0)" data-product-id="{{$products_cat->id}}" id="add_to_cart{{$products_cat->id}}" data-quantity="1" class="add-to-cart btn-product-icon btn-cart w-icon-cart"
                                        title="Add to cart"></a>
                                    <a href="javascript:void(0)" data-id="{{ $products_cat->id }}" id="add_to_wishlist{{ $products_cat->id }}" data-quantity="1" class=" add_to_wishlist btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="{{ route('singleproduct',$products_cat->slug) }}">{{ $products_cat->title }}</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3
                                        reviews)</a>
                                </div>
                                <div class="product-price">
                                    @if (empty($products_cat->offer_price) || $products_cat->offer_price == null)
                                        <ins class="new-price">{{ $products_cat->price }}AED</ins>
                                    @else
                                        <ins class="new-price">{{ $products_cat->offer_price }} AED</ins><del
                                        class="old-price">{{ $products_cat->price }} AED</del>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- The Modal -->
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>
@endforeach
        <div class="banner banner-fashion appear-animate br-sm mb-9" style="background-image: url(front-style/assets/images/demos/demo1/banners/4.jpg);
            background-color: #383839;">
            <div class="banner-content align-items-center">
                <div class="mb-3 content-left d-flex align-items-center">
                    <div class="banner-price-info font-weight-bolder text-secondary text-uppercase lh-1 ls-25">
                        25
                        <sup class="font-weight-bold">%</sup><sub class="font-weight-bold ls-25">Off</sub>
                    </div>
                    <hr class="mt-0 mb-0 mr-8 bg-white banner-divider">
                </div>
                <div class="flex-wrap flex-1 content-right d-flex align-items-center">
                    <div class="pr-4 mr-auto banner-info">
                        <h3 class="text-white banner-title font-weight-bolder text-uppercase ls-25">For Today's
                            Fashion</h3>
                        <p class="mb-0 text-white">Use code
                            <span
                                class="pl-1 pr-1 bg-white text-dark font-weight-bold ls-50 d-inline-block">Black
                                <strong>12345</strong></span> to get best offer.</p>
                    </div>
                    <a href="shop-banner-sidebar.html"
                        class="mb-3 btn btn-white btn-outline btn-rounded btn-icon-right">Shop Now<i
                            class="w-icon-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <!-- End of Banner Fashion -->
        <h2 class="mb-4 title title-underline ls-normal appear-animate">Our Clients</h2>
        <div class="swiper-container swiper-theme brands-wrapper mb-9 appear-animate" data-swiper-options="{
            'spaceBetween': 0,
            'slidesPerView': 2,
            'breakpoints': {
                '576': {
                    'slidesPerView': 3
                },
                '768': {
                    'slidesPerView': 4
                },
                '992': {
                    'slidesPerView': 5
                },
                '1200': {
                    'slidesPerView': 6
                }
            }
        }">
            <div class="swiper-wrapper row gutter-no cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                <div class="swiper-slide brand-col">
                    <figure class="brand-wrapper">
                        <img src="{{ asset('front-style/assets/images/demos/demo1/brands/1.png') }}" alt="Brand" width="410"
                            height="186" />
                    </figure>
                    <figure class="brand-wrapper">
                        <img src="{{ asset('front-style/assets/images/demos/demo1/brands/2.png') }}" alt="Brand" width="410"
                            height="186" />
                    </figure>
                </div>
                <div class="swiper-slide brand-col">
                    <figure class="brand-wrapper">
                        <img src="{{ asset('front-style/assets/images/demos/demo1/brands/3.png') }}" alt="Brand" width="410"
                            height="186" />
                    </figure>
                    <figure class="brand-wrapper">
                        <img src="{{ asset('front-style/assets/images/demos/demo1/brands/4.png') }}" alt="Brand" width="410"
                            height="186" />
                    </figure>
                </div>
                <div class="swiper-slide brand-col">
                    <figure class="brand-wrapper">
                        <img src="{{ asset('front-style/assets/images/demos/demo1/brands/5.png') }}" alt="Brand" width="410"
                            height="186" />
                    </figure>
                    <figure class="brand-wrapper">
                        <img src="{{ asset('front-style/assets/images/demos/demo1/brands/6.png') }}" alt="Brand" width="410"
                            height="186" />
                    </figure>
                </div>
                <div class="swiper-slide brand-col">
                    <figure class="brand-wrapper">
                        <img src="{{ asset('front-style/assets/images/demos/demo1/brands/7.png') }}" alt="Brand" width="410"
                            height="186" />
                    </figure>
                    <figure class="brand-wrapper">
                        <img src="{{ asset('front-style/assets/images/demos/demo1/brands/8.png') }}" alt="Brand" width="410"
                            height="186" />
                    </figure>
                </div>
                <div class="swiper-slide brand-col">
                    <figure class="brand-wrapper">
                        <img src="{{ asset('front-style/assets/images/demos/demo1/brands/9.png') }}" alt="Brand" width="410"
                            height="186" />
                    </figure>
                    <figure class="brand-wrapper">
                        <img src="{{ asset('front-style/assets/images/demos/demo1/brands/10.png') }}" alt="Brand" width="410"
                            height="186" />
                    </figure>
                </div>
                <div class="swiper-slide brand-col">
                    <figure class="brand-wrapper">
                        <img src="{{ asset('front-style/assets/images/demos/demo1/brands/11.png') }}" alt="Brand" width="410"
                            height="186" />
                    </figure>
                    <figure class="brand-wrapper">
                        <img src="{{ asset('front-style/assets/images/demos/demo1/brands/12.png') }}" alt="Brand" width="410"
                            height="186" />
                    </figure>
                </div>
            </div>
        </div>
        <!-- End of Brands Wrapper -->
        <div class="mb-4 post-wrapper appear-animate">
            <div class="pb-1 mb-4 title-link-wrapper">
                <h2 class="mb-0 title ls-normal">From Our Blog</h2>
                <a href="blog-listing.html" class="font-weight-bold font-size-normal">View All Articles</a>
            </div>
            <div class="swiper">
                <div class="swiper-container swiper-theme" data-swiper-options="{
                    'slidesPerView': 1,
                    'spaceBetween': 20,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '768': {
                            'slidesPerView': 3
                        },
                        '992': {
                            'slidesPerView': 4
                        }
                    }
                }">
                    <div class="swiper-wrapper row cols-lg-4 cols-md-3 cols-sm-2 cols-1">
                        <div class="text-center swiper-slide post overlay-zoom">
                            <figure class="post-media br-sm">
                                <a href="post-single.html">
                                    <img src="{{asset('front-style/assets/images/demos/demo1/blogs/1.jpg')}}" alt="Post" width="280"
                                        height="180" style="background-color: #4b6e91;" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    by <a href="#" class="post-author">John Doe</a>
                                    - <a href="#" class="mr-0 post-date">03.05.2021</a>
                                </div>
                                <h4 class="post-title"><a href="post-single.html">Aliquam tincidunt mauris
                                        eurisus</a>
                                </h4>
                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read
                                    More<i class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="text-center swiper-slide post overlay-zoom">
                            <figure class="post-media br-sm">
                                <a href="post-single.html">
                                    <img src="{{asset('front-style/assets/images/demos/demo1/blogs/2.jpg')}}" alt="Post" width="280"
                                        height="180" style="background-color: #cec9cf;" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    by <a href="#" class="post-author">John Doe</a>
                                    - <a href="#" class="mr-0 post-date">03.05.2021</a>
                                </div>
                                <h4 class="post-title"><a href="post-single.html">Cras ornare tristique elit</a>
                                </h4>
                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read
                                    More<i class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="text-center swiper-slide post overlay-zoom">
                            <figure class="post-media br-sm">
                                <a href="post-single.html">
                                    <img src="{{asset('front-style/assets/images/demos/demo1/blogs/3.jpg')}}" alt="Post" width="280"
                                        height="180" style="background-color: #c9c7bb;" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    by <a href="#" class="post-author">John Doe</a>
                                    - <a href="#" class="mr-0 post-date">03.05.2021</a>
                                </div>
                                <h4 class="post-title"><a href="post-single.html">Vivamus vestibulum ntulla nec
                                        ante</a>
                                </h4>
                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read
                                    More<i class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="text-center swiper-slide post overlay-zoom">
                            <figure class="post-media br-sm">
                                <a href="post-single.html">
                                    <img src="{{asset('front-style/assets/images/demos/demo1/blogs/4.jpg')}}" alt="Post" width="280"
                                        height="180" style="background-color: #d8dce0;" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    by <a href="#" class="post-author">John Doe</a>
                                    - <a href="#" class="mr-0 post-date">03.05.2021</a>
                                </div>
                                <h4 class="post-title"><a href="post-single.html">Fusce lacinia arcuet nulla</a>
                                </h4>
                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read
                                    More<i class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <!-- Post Wrapper -->
        <h2 class="mb-4 title title-underline ls-normal appear-animate">Your Recent Views</h2>
        <div class="pb-4 mb-8 swiper-container swiper-theme shadow-swiper appear-animate" data-swiper-options="{
            'spaceBetween': 20,
            'slidesPerView': 2,
            'breakpoints': {
                '576': {
                    'slidesPerView': 3
                },
                '768': {
                    'slidesPerView': 5
                },
                '992': {
                    'slidesPerView': 6
                },
                '1200': {
                    'slidesPerView': 8
                }
            }
        }">
            <div class="swiper-wrapper row cols-xl-8 cols-lg-6 cols-md-4 cols-2">
                <div class="mb-0 swiper-slide product-wrap">
                    <div class="text-center product product-absolute">
                        <figure class="product-media">
                            <a href="product-defaproduct-default.html">
                                <img src="{{asset('front-style/assets/images/demos/demo1/products/7-1.jpg')}}" alt="Category image"
                                    width="130" height="146" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="product-default.html">Women's Fashion Handbag</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="mb-0 swiper-slide product-wrap">
                    <div class="text-center product product-absolute">
                        <figure class="product-media">
                            <a href="product-defaproduct-default.html">
                                <img src="{{asset('front-style/assets/images/demos/demo1/products/7-2.jpg')}}" alt="Category image"
                                    width="130" height="146" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="product-default.html">Electric Frying Pan</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="mb-0 swiper-slide product-wrap">
                    <div class="text-center product product-absolute">
                        <figure class="product-media">
                            <a href="product-defaproduct-default.html">
                                <img src="{{asset('front-style/assets/images/demos/demo1/products/7-3.jpg')}}" alt="Category image"
                                    width="130" height="146" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="product-default.html">Black Winter Skating</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="mb-0 swiper-slide product-wrap">
                    <div class="text-center product product-absolute">
                        <figure class="product-media">
                            <a href="product-defaproduct-default.html">
                                <img src="{{asset('front-style/assets/images/demos/demo1/products/7-4.jpg')}}" alt="Category image"
                                    width="130" height="146" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="product-default.html">HD Television</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="mb-0 swiper-slide product-wrap">
                    <div class="text-center product product-absolute">
                        <figure class="product-media">
                            <a href="product-defaproduct-default.html">
                                <img src="{{asset('front-style/assets/images/demos/demo1/products/7-5.jpg')}}" alt="Category image"
                                    width="130" height="146" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="product-default.html">Home Sofa</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="mb-0 swiper-slide product-wrap">
                    <div class="text-center product product-absolute">
                        <figure class="product-media">
                            <a href="product-defaproduct-default.html">
                                <img src="{{asset('front-style/assets/images/demos/demo1/products/7-6.jpg')}}" alt="Category image"
                                    width="130" height="146" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="product-default.html">USB Receipt</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="mb-0 swiper-slide product-wrap">
                    <div class="text-center product product-absolute">
                        <figure class="product-media">
                            <a href="product-defaproduct-default.html">
                                <img src="{{asset('front-style/assets/images/demos/demo1/products/7-7.jpg')}}" alt="Category image"
                                    width="130" height="146" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="product-default.html">Electric Rice-Cooker</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="mb-0 swiper-slide product-wrap">
                    <div class="text-center product product-absolute">
                        <figure class="product-media">
                            <a href="product-defaproduct-default.html">
                                <img src="{{asset('front-style/assets/images/demos/demo1/products/7-8.jpg')}}" alt="Category image"
                                    width="130" height="146" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="product-default.html">Table Lamp</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <!-- End of Reviewed Producs -->
    </div>
    <!--End of Catainer -->
</main>
<!-- End of Main -->
@endsection

