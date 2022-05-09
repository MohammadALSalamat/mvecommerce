@extends('frontend.frontend_layout.main_desgin')
@section('mytitle','Home Page')
@section('content')

<!-- Start of Main-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<main class="main">
    <!-- main slider for ads -->
    <section class="intro-section container">
        @php
        $sponser_banner = \App\Models\sponserAds::where('image_place' ,'homepage_banner')->get();
        @endphp
        @if($sponser_banner->count() > 0)
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($sponser_banner as $key => $slider)
                @if($slider->image_place == 'homepage_banner')
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
            @if(Config::get('app.locale') == 'en')
            <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
                <div class="swiper-slide icon-box icon-box-side icon-box-primary">
                    <span class="icon-box-icon icon-shipping">
                        <i class="w-icon-truck"></i>
                    </span>
                    <div class="icon-box-content">
                        <h4 class="mb-1 icon-box-title font-weight-bold">Free Shipping & Returns</h4>
                        <p class="text-default">For all orders over AED 99</p>
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
            @else
            <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
                <div class="swiper-slide icon-box icon-box-side icon-box-primary">
                    <span class="icon-box-icon icon-shipping">
                        <i class="w-icon-truck"></i>
                    </span>
                    <div class="icon-box-content">
                        <h4 class="mb-1 icon-box-title font-weight-bold">الشحن والإرجاع المجاني</h4>
                        <p class="text-default">لجميع الطلبات التي تزيد عن 99 د.أ</p>
                    </div>
                </div>
                <div class="swiper-slide icon-box icon-box-side icon-box-primary">
                    <span class="icon-box-icon icon-payment">
                        <i class="w-icon-bag"></i>
                    </span>
                    <div class="icon-box-content">
                        <h4 class="mb-1 icon-box-title font-weight-bold">دفع أمن</h4>
                        <p class="text-default">نحن نضمن الدفع الآمن</p>
                    </div>
                </div>
                <div class="swiper-slide icon-box icon-box-side icon-box-primary icon-box-money">
                    <span class="icon-box-icon icon-money">
                        <i class="w-icon-money"></i>
                    </span>
                    <div class="icon-box-content">
                        <h4 class="mb-1 icon-box-title font-weight-bold">ضمان استعادة الاموال</h4>
                        <p class="text-default">أي عودة في غضون 30 يومًا</p>
                    </div>
                </div>
                <div class="swiper-slide icon-box icon-box-side icon-box-primary icon-box-chat">
                    <span class="icon-box-icon icon-chat">
                        <i class="w-icon-chat"></i>
                    </span>
                    <div class="icon-box-content">
                        <h4 class="mb-1 icon-box-title font-weight-bold">دعم العملاء</h4>
                        <p class="text-default">اتصل بنا أو راسلنا على مدار الساعة طوال أيام الأسبوع</p>
                    </div>
                </div>
            </div>
            @endif
        </div>
        <!-- End of Iocn Box Wrapper -->
        <!-- third section -->
        <div class="pt-6 pb-8 row category-banner-wrapper appear-animate">
            @php
            $sponser_cat_section = \App\Models\sponserAds::where('image_place' ,'homepage_under_cat')->get();
            @endphp
            @if($sponser_cat_section->count() > 0)
            @foreach ($sponser_cat_section as $item)
            <div class="mb-4 col-md-6">
                <div class="banner banner-fixed br-xs">
                    <figure>
                        @if(Config::get('app.locale') == 'en')
                        <img src="{{asset($item->image_English)}}" alt="{{ $item->image_place }}" width="610"
                            height="160" style="background-color: #ecedec;object-fit:cover;width:100%" />
                        @else
                        <img src="{{asset($item->image_Arabic)}}" alt="{{ $item->image_place }}" width="610"
                            height="160" style="background-color: #ecedec;object-fit:cover;width:100%" />
                        @endif
                    </figure>
                    {{-- <div class="mt-0 banner-content y-50">
                            <h5 class="banner-subtitle font-weight-normal text-dark">Get up to <span
                                    class="text-secondary font-weight-bolder text-uppercase ls-25">20% Off</span>
                            </h5>
                            <h3 class="banner-title text-uppercase">Sports Outfits<br><span
                                    class="font-weight-normal text-capitalize">Collection</span>
                            </h3>
                            <div class="banner-price-info font-weight-normal">Starting at <span
                                    class="text-secondary font-weight-bolder">$170.00</span>
                            </div>
                        </div> --}}
                </div>
            </div>
            @endforeach
            @endif
        </div>
        <!-- End of Category Banner Wrapper -->
        <div class="mb-8 row deals-wrapper appear-animate">
            <div class="mb-4 col-lg-9">
                <div class="single-product h-100 br-sm">
                    @if(Config::get('app.locale') == 'en')
                    <h4 class="title-sm title-underline font-weight-bolder ls-normal">
                        Deals Hot of The Day
                    </h4>
                    @else
                    <h4 class="title-sm title-underline font-weight-bolder ls-normal">
                        أفضل العروض اليوم
                    </h4>
                    @endif
                    <!-- Slider of the products here -->
                    <div class="swiper">
                        <div class="swiper-container swiper-theme nav-top swiper-nav-lg" data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 1
                        }">
                            <div class="swiper-wrapper row cols-1 gutter-no">
                                <div class="swiper-slide">
                                    <div class="product product-single row">
                                        <div class="col-md-6">
                                            <div
                                                class="product-gallery product-gallery-sticky product-gallery-vertical">
                                                <div
                                                    class="swiper-container product-single-swiper swiper-theme nav-inner">
                                                    <div class="swiper-wrapper row cols-1 gutter-no">
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="{{asset('front-style/assets/images/demos/demo1/products/1-1-600x675.jpg')}}"
                                                                    data-zoom-image="{{asset('front-style/assets/images/demos/demo1/products/1-1-800x900.jpg')}}"
                                                                    alt="Product Image" width="800" height="900">
                                                            </figure>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="{{asset('front-style/assets/images/demos/demo1/products/1-2-600x675.jpg')}}"
                                                                    data-zoom-image="{{asset('front-style/assets/images/demos/demo1/products/1-2-800x900.jpg')}}"
                                                                    alt="Product Image" width="800" height="900">
                                                            </figure>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="{{asset('front-style/assets/images/demos/demo1/products/1-3-600x675.jpg')}}"
                                                                    data-zoom-image="{{asset('front-style/assets/images/demos/demo1/products/1-3-800x900.jpg')}}"
                                                                    alt="Product Image" width="800" height="900">
                                                            </figure>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="{{asset('front-style/assets/images/demos/demo1/products/1-4-600x675.jpg')}}"
                                                                    data-zoom-image="{{asset('front-style/assets/images/demos/demo1/products/1-4-800x900.jpg')}}"
                                                                    alt="Product Image" width="800" height="900">
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
                                                <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
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
                                                    <div
                                                        class="product-thumbs swiper-wrapper row cols-lg-1 cols-4 gutter-sm">
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
                                                <h2 class="mb-1 product-title"><a href="product-default.html">Coat Pool
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
                                <div class="swiper-slide">
                                    <div class="product product-single row">
                                        <div class="col-md-6">
                                            <div
                                                class="product-gallery product-gallery-sticky product-gallery-vertical">
                                                <div
                                                    class="swiper-container product-single-swiper swiper-theme nav-inner">
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
                                                                    alt="Product Image" width="800" height="900">
                                                            </figure>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="{{asset('front-style/assets/images/demos/demo1/products/2-3-600x675.jpg')}}"
                                                                    data-zoom-image="{{asset('front-style/assets/images/demos/demo1/products/2-3-800x900.jpg')}}"
                                                                    alt="Product Image" width="800" height="900">
                                                            </figure>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="{{asset('front-style/assets/images/demos/demo1/products/2-4-600x675.jpg')}}"
                                                                    data-zoom-image="{{asset('front-style/assets/images/demos/demo1/products/2-4-800x900.jpg')}}"
                                                                    alt="Product Image" width="800" height="900">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    <button class="swiper-button-next"></button>
                                                    <button class="swiper-button-prev"></button>
                                                    <div class="product-label-group">
                                                        <label class="product-label label-discount">25% Off</label>
                                                    </div>
                                                </div>
                                                <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
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
                                                <h2 class="mb-1 product-title"><a href="product-default.html">Coat Pool
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
                    <!-- Slider of the products here -->

                </div>
            </div>
            <!-- TOP SELLING RIGHT BAR -->
            <div class="mb-4 col-lg-3">
                <div class="widget widget-products widget-products-bordered h-100">
                    <div class="widget-body br-sm h-100">
                        @if(Config::get('app.locale') == 'en')
                        <h4 class="mb-2 title-sm title-underline font-weight-bolder ls-normal">Top Best
                            Selling Items</h4>
                        @else
                        <h4 class="mb-2 title-sm title-underline font-weight-bolder ls-normal">العناصر الأكثر مبيعًا
                        </h4>
                        @endif
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
                                    @if ($products_bestSelling_top3->count() > 0 )
                                    <div class="swiper-slide product-widget-wrap">
                                        @foreach ($products_bestSelling_top3 as $top_sellings)
                                        @php
                                        $avareg_review =
                                        \App\Models\ProductReview::where('product_id',$top_sellings->id)->get();
                                        #review rateing
                                        $avareg = 0;
                                        $sum = 0;
                                        foreach($avareg_review as $avg){
                                        $sum += $avg->rate;
                                        $countavg = count($avareg_review);
                                        $avareg = $sum / $countavg;
                                        }
                                        $other_image = explode(',',$top_sellings->image);
                                        @endphp
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">
                                                <a href="{{ route('singleproduct',$top_sellings->slug) }}">
                                                    @if(count($other_image) > 1 )
                                                    <img src="{{ $other_image[0]}}" alt="Product" width="300"
                                                        height="338" />
                                                    <img src="{{ $other_image[1] }}" alt="Product" width="330"
                                                        height="338" />
                                                    @else
                                                    <img src="{{ $other_image[0]}}" alt="Product" width="300"
                                                        height="338" />
                                                    @endif
                                                </a>
                                            </figure>

                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="{{ route('singleproduct',$top_sellings->slug) }}">
                                                        @if(Config::get('app.locale') == 'en')
                                                        {{ $top_sellings->title }}
                                                        @else
                                                        {{ $top_sellings->ar_title }}
                                                        @endif
                                                    </a>
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
                                                            @endif
                                                            ></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                @if(Config::get('app.locale') == 'en')
                                                <div class="product-price">
                                                    @if (!empty($top_sellings->offer_price) ||
                                                    $top_sellings->offer_price != null)
                                                    <ins class="new-price">{{ number_format($top_sellings->offer_price) }}
                                                        AED - <del style="color:#ccc">
                                                            {{ number_format($top_sellings->price) }} AED</del></ins>

                                                    @else
                                                    <ins class="new-price">{{ number_format($top_sellings->price) }}
                                                        AED</ins>

                                                    @endif
                                                </div>
                                                @else
                                                <div class="product-price">
                                                    @if (!empty($top_sellings->offer_price) ||
                                                    $top_sellings->offer_price != null)
                                                    <ins class="new-price">{{ number_format($top_sellings->offer_price) }}
                                                        د.أ - <del style="color:#ccc">
                                                            {{ number_format($top_sellings->price) }} د.أ</del></ins>

                                                    @else
                                                    <ins class="new-price">{{ number_format($top_sellings->price) }}
                                                        د.أ</ins>

                                                    @endif
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    @else
                                    @endif
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
            @if(Config::get('app.locale') == 'en')
            <h2 class="pt-1 mb-5 title justify-content-center ls-normal">Top Categories Of The Month</h2>
            @else
            <h2 class="pt-1 mb-5 title justify-content-center ls-normal">الاقسام الاكثر مبيعا هذا الشهر</h2>

            @endif
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
                        @if(Config::get('app.locale') == 'en')
                        <div class="swiper-slide category category-classic category-absolute overlay-zoom br-xs">
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
                        @else
                        <div class="swiper-slide category category-classic category-absolute overlay-zoom br-xs">
                            <a href="{{ route('shop_special_category',$category->slug) }}" class="category-media">
                                <img src="{{asset($category->image)}}" alt="Category"
                                    style="width: 100% !important;height: 150px !important;object-fit: contain;">
                            </a>
                            <div class="category-content">
                                <h4 class="category-name">{{$category->ar_title}}</h4>
                                <a href="{{ route('shop_special_category',$category->slug) }}"
                                    class="btn btn-primary btn-link btn-underline">أطلب اﻷن</a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    <button class="swiper-button-prev"></button>
                            <button class="swiper-button-next"></button>
                </div>
            </div>
        </div>
    </section>
    <!-- End of .category-section top-category -->
    <div class="container">
        @if(Config::get('app.locale') == 'en')
        <h2 class="pt-1 mt-10 mb-4 title justify-content-center ls-normal appear-animate">Popular Departments
        </h2>
        @else
        <h2 class="pt-1 mt-10 mb-4 title justify-content-center ls-normal appear-animate">الاقسام اﻷكثر زيارة
        </h2>
        @endif
        <div class="tab  tab-nav-outline appear-animate">
            <ul class="nav nav-tabs justify-content-center" role="tablist">
                @if(Config::get('app.locale') == 'en')
                <li class="mb-2 mr-2 nav-item">
                    <a class="nav-link active br-sm font-size-md ls-normal" href="#tab1-1">New arrivals</a>
                </li>
                <li class="mb-2 mr-2 nav-item">
                    <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-2">Best seller</a>
                </li>
                @else
                <li class="mb-2 mr-2 nav-item">
                    <a class="nav-link active br-sm font-size-md ls-normal" href="#tab1-1">المنتجات الجديدة</a>
                </li>
                <li class="mb-2 mr-2 nav-item">
                    <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-2">الاكثر مبيعا</a>
                </li>
                @endif
            </ul>
        </div>
        <!-- End of Tab -->
        <div class="tab-content tab-content-fullwidth product-wrapper appear-animate">
            <div class="pt-4 tab-pane active" id="tab1-1">
                <div class="row cols-xl-6 cols-md-4 cols-sm-3 cols-2">
                    @foreach ($new_products as $new_product)
                    @php
                    $avareg_review = \App\Models\ProductReview::where('product_id',$new_product->id)->get();
                    #review rateing
                    $avareg = 0;
                    $sum = 0;
                    foreach($avareg_review as $avg){
                    $sum += $avg->rate;
                    $countavg = count($avareg_review);
                    $avareg = $sum / $countavg;
                    }
                    $start = Carbon\Carbon::parse($new_product->created_at);
                    $now = Carbon\Carbon::now();
                    $days_count = $start->diffInDays($now);
                    $other_image = explode(',',$new_product->image);
                    @endphp
                    <!-- hide the products after 15 days  -->
                    @if($days_count < 30) <div class="product-wrap">
                        <div class="text-center product">
                            <figure class="product-media">
                                <a href="{{ route('singleproduct',$new_product->slug) }}">
                                    @if(count($other_image) > 1 )
                                    <img src="{{ $other_image[0]}}" alt="Product"
                                        style="height:200px !important; width:100% !important;object-fit:contain" />
                                    <img src="{{ $other_image[1] }}" alt="Product"
                                        style="height:200px !important; width:100% !important;object-fit:contain" />
                                    @else
                                    <img src="{{ $other_image[0]}}" alt="Product"
                                        style="height:200px !important; width:100% !important;object-fit:contain" />
                                    @endif

                                </a>
                                <div class="product-action-vertical">
                                    <!--Add to cart funtion -->
                                    <a href="" data-product-id="{{$new_product->id}}"
                                        id="add_to_cart{{$new_product->id}}" data-quantity="1"
                                        class="add-to-cart btn-product-icon w-icon-cart btn-cart"
                                        title="Add to cart"></a>

                                    <!--Add to wishlist funtion -->
                                    <a href="javascript:void(0)" data-id="{{ $new_product->id }}"
                                        id="add_to_wishlist{{ $new_product->id }}" data-quantity="1"
                                        class=" add_to_wishlist btn-product-icon btn-wishlist w-icon-heart"
                                        title="Wishlist"></a>

                                </div>
                                <div class="product-label-group">
                                    @if(Config::get('app.locale') == 'en')
                                    @if (!empty($new_product-> discound) || $new_product-> discound != null)
                                    <label class="product-label label-discount"
                                        style="font-size: 12px">{{$new_product-> discound}}% off</label>

                                    <label class="product-label label-new">New Item</label>
                                    @else
                                    <label class="product-label label-new">New Item</label>
                                    @endif
                                    @else
                                    @if (!empty($new_product-> discound) || $new_product-> discound != null)
                                    <label class="product-label label-discount"
                                        style="font-size: 12px">{{$new_product-> discound}}% خصم</label>
                                    <label class="product-label label-new">منتج جديد</label>
                                    @else
                                    <label class="product-label label-new">منتج جديد</label>
                                    @endif
                                    @endif
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name">
                                    <a href="{{ route('singleproduct',$new_product->slug) }}">
                                        @if(Config::get('app.locale') == 'en')
                                        {{ $new_product->title }}
                                        @else
                                        {{ $new_product->ar_title }}
                                        @endif
                                    </a>
                                </h4>
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
                                </div>
                                @if(Config::get('app.locale') == 'en')
                                <div class="product-price">
                                    @if (empty($new_product->offer_price) || $new_product->offer_price ==
                                    null)
                                    <ins class="new-price">{{ number_format($new_product->price) }}AED</ins>
                                    @else
                                    <ins class="new-price">{{ number_format($new_product->offer_price) }} AED </ins> -
                                    <del class="old-price">{{ number_format($new_product->price )}} AED</del>
                                    @endif
                                </div>
                                @else
                                <div class="product-price">
                                    @if (empty($new_product->offer_price) || $new_product->offer_price ==
                                    null)
                                    <ins class="new-price">{{ number_format($new_product->price) }} د.أ</ins>
                                    @else
                                    <ins class="new-price">{{ number_format($new_product->offer_price) }} د.أ </ins> -
                                    <del class="old-price">{{ number_format($new_product->price )}} د.أ</del>
                                    @endif
                                </div>
                                @endif
                            </div>
                        </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        <!-- End of Tab Pane -->
        @if ($products_bestSelling->count() > 0 )
        <div class="pt-4 tab-pane" id="tab1-2">
            <div class="row cols-xl-6 cols-md-4 cols-sm-3 cols-2">
                @foreach ( $products_bestSelling as $top_selling)
                @php
                $avareg_review = \App\Models\ProductReview::where('product_id',$top_selling->id)->get();
                #review rateing
                $avareg = 0;
                $sum = 0;
                foreach($avareg_review as $avg){
                $sum += $avg->rate;
                $countavg = count($avareg_review);
                $avareg = $sum / $countavg;
                }
                $other_image = explode(',',$top_selling->image);
                @endphp
                <div class="product-wrap">
                    <div class="text-center product">
                        <figure class="product-media">
                            <a href="{{ route('singleproduct',$top_selling->slug) }}">
                                @if(count($other_image) > 1 )
                                <img src="{{ $other_image[0]}}" alt="Product"
                                    style="height:200px !important; width:100% !important;object-fit:contain" />
                                <img src="{{ $other_image[1] }}" alt="Product"
                                    style="height:200px !important; width:100% !important;object-fit:contain" />
                                @else
                                <img src="{{ $other_image[0]}}" alt="Product"
                                    style="height:200px !important; width:100% !important;object-fit:contain" />
                                @endif
                            </a>
                            <div class="product-action-vertical">
                                <a href="" data-product-id="{{$top_selling->id}}" id="add_to_cart{{$top_selling->id}}"
                                    data-quantity="1" class="add-to-cart btn-product-icon w-icon-cart btn-cart"
                                    title="Add to cart"></a>

                                <!--Add to wishlist funtion -->
                                <a href="javascript:void(0)" data-id="{{ $top_selling->id }}"
                                    id="add_to_wishlist{{ $top_selling->id }}" data-quantity="1"
                                    class=" add_to_wishlist btn-product-icon btn-wishlist w-icon-heart"
                                    title="Wishlist"></a>

                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                    data-bs-target="#quickview{{ $top_selling->id }}"
                                    class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>

                            </div>

                            @if (!empty($top_selling-> discound) || $top_selling-> discound != null)
                            <div class="product-label-group">
                                @if(Config::get('app.locale') == 'en')
                                <label class="product-label label-discount"
                                    style="font-size: 12px">{{$top_selling-> discound}}% OFF</label>
                                @else
                                <label class="product-label label-discount"
                                    style="font-size: 12px">{{$top_selling-> discound}}% خصم</label>
                                @endif
                            </div>
                            @endif
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="{{ route('singleproduct',$top_selling->slug) }}">
                                    @if(Config::get('app.locale') == 'en')
                                    {{ $top_sellings->title }}
                                    @else
                                    {{ $top_sellings->ar_title }}
                                    @endif
                                </a>
                            </h4>
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
                            </div>
                            @if(Config::get('app.locale') == 'en')
                            <div class="product-price">
                                @if (empty($top_selling->offer_price) || $top_selling->offer_price ==
                                null)
                                <ins class="new-price">{{ number_format($top_selling->price) }}AED</ins>
                                @else
                                <ins class="new-price">{{ number_format($top_selling->offer_price) }} AED </ins> - <del
                                    class="old-price">{{ number_format($top_selling->price )}} AED</del>
                                @endif
                            </div>
                            @else
                            <div class="product-price">
                                @if (empty($top_selling->offer_price) || $top_selling->offer_price ==
                                null)
                                <ins class="new-price">{{ number_format($top_selling->price) }} د.أ</ins>
                                @else
                                <ins class="new-price">{{ number_format($top_selling->offer_price) }} د.أ </ins> - <del
                                    class="old-price">{{ number_format($top_selling->price )}} د.أ</del>
                                @endif
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        @endif

    </div>
    <!-- End of Tab Content -->
    <div class="mb-5 row category-cosmetic-lifestyle appear-animate">
        @php
        $sponser_cat_section = \App\Models\sponserAds::where('image_place' ,'homepage_under_filter')->get();
        @endphp
        @if($sponser_cat_section->count() > 0)
        @foreach ($sponser_cat_section as $item)
        @php
        $single_seller_name = \App\Models\Seller::where('id' ,$item->seller_id)->value('username');
        @endphp
        <div class="mb-4 col-md-6">
            <div class="banner banner-fixed br-xs">
                <figure>
                    <a href="{{route('single_seller',$single_seller_name)}}"> <img src="{{asset($item->image_English)}}"
                            alt="{{ $item->image_place }}" width="610" height="160"
                            style="background-color: #ecedec;object-fit:cover;width:100%" /></a>
                </figure>
                {{-- <div class="mt-0 banner-content y-50">
                            <h5 class="banner-subtitle font-weight-normal text-dark">Get up to <span
                                    class="text-secondary font-weight-bolder text-uppercase ls-25">20% Off</span>
                            </h5>
                            <h3 class="banner-title text-uppercase">Sports Outfits<br><span
                                    class="font-weight-normal text-capitalize">Collection</span>
                            </h3>
                            <div class="banner-price-info font-weight-normal">Starting at <span
                                    class="text-secondary font-weight-bolder">$170.00</span>
                            </div>
                        </div> --}}
            </div>
        </div>
        @endforeach
        @endif
    </div>
    <!-- End of Category Cosmetic Lifestyle -->

    <!-- Products Collection  -->
    @foreach ($home_3_Categories as $item)
    @if ($item->one_cat_has_many_products-> count() == 0)

    @else
    @php
    $other_image = explode(',',$item->one_cat_has_many_products[0]->image);

    @endphp
    @if(Config::get('app.locale') == 'en')
    <div class="mb-5 product-wrapper-1 appear-animate">
        <div class="pb-1 mb-4 title-link-wrapper">
            <h2 class="mb-0 title ls-normal">{{ $item->title }}</h2>
            <a href="{{ route('shop_special_category',$item->slug) }}"
                class="mb-0 font-size-normal font-weight-bold ls-25">More
                Products<i class="w-icon-long-arrow-right"></i></a>
        </div>
        <div class="row">
            <div class="mb-4 col-lg-3 col-sm-4">
                <div class="banner br-sm"
                    style="background:url('{{ $other_image[0] }}');
                    background-color: #ebeced; background-repeat:no-repeat;background-size:contain;background-position:center center;height:250px">
                    <div class="banner-content content-top">
                        <h5 class="mb-2 banner-subtitle font-weight-normal text-white">Weekend Sale</h5>
                        <hr class="mb-2 banner-divider bg-light">
                        <h3 class="banner-title font-weight-bolder ls-25 text-uppercase text-white">
                            New Arrivals<br> <span
                                class="font-weight-normal text-capitalize text-white">Collection</span>
                        </h3>
                        <a href="{{ route('shop_special_category',$item->slug) }}"
                            class="btn btn-light btn-outline btn-rounded btn-sm text-white">shop Now</a>
                        <div style="position: absolute;
                        background: #000;
                        right: 0;
                        top: 0;
                        bottom: 0;
                        left: 0;
                        opacity: 0.5;
                        z-index:-1">
                        </div>
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
                        @php
                        $other_image = explode(',',$products_cat->image);

                        @endphp
                        <div class="swiper-slide product-col">
                            <div class="text-center product-wrap product">
                                <figure class="product-media">
                                    <a href="{{ route('singleproduct',$products_cat->slug) }}">

                                        @if(count($other_image) > 1 )
                                        <img src="{{ $other_image[0]}}" alt="Product"
                                            style="height:200px !important; width:100% !important;object-fit:contain" />
                                        <img src="{{ $other_image[1] }}" alt="Product"
                                            style="height:200px !important; width:100% !important;object-fit:contain" />
                                        @else
                                        <img src="{{ $other_image[0]}}" alt="Product"
                                            style="height:200px !important; width:100% !important;object-fit:contain" />
                                        @endif
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="javascript:void(0)" data-product-id="{{$products_cat->id}}"
                                            id="add_to_cart{{$products_cat->id}}" data-quantity="1"
                                            class="add-to-cart btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="javascript:void(0)" data-id="{{ $products_cat->id }}"
                                            id="add_to_wishlist{{ $products_cat->id }}" data-quantity="1"
                                            class=" add_to_wishlist btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>

                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a
                                            href="{{ route('singleproduct',$products_cat->slug) }}">{{ $products_cat->title }}</a>
                                    </h4>
                                    @php
                                    $avareg_review =
                                    \App\Models\ProductReview::where('product_id',$products_cat->id)->get();
                                    #review comments
                                    $avareg = 0;
                                    $sum = 0;
                                    foreach($avareg_review as $avg){
                                    $sum += $avg->rate;
                                    $countavg = count($avareg_review);
                                    $avareg = $sum / $countavg;
                                    }
                                    @endphp
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
                                                @endif></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="{{  route('singleproduct',$products_cat->slug)  }}"
                                            class="rating-reviews">({{ $avareg_review->count() }}
                                            reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        @if (empty($products_cat->offer_price) || $products_cat->offer_price ==
                                        null)
                                        <ins class="new-price">{{ number_format($products_cat->price) }}AED</ins>
                                        @else
                                        <ins class="new-price">{{ number_format($products_cat->offer_price) }} AED
                                        </ins><del class="old-price">{{ number_format($products_cat->price )}} AED</del>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="swiper-button-prev"></button>
                        <button class="swiper-button-next"></button>
                        <!-- The Modal -->
                        @endforeach
                    </div>
                    <div class="swiper-pagination">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="mb-5 product-wrapper-1 appear-animate">
        <div class="pb-1 mb-4 title-link-wrapper">
            <h2 class="mb-0 title ls-normal">{{ $item->title }}</h2>
            <a href="{{ route('shop_special_category',$item->slug) }}"
                class="mb-0 font-size-normal font-weight-bold ls-25">المزيد من المنتجات<i
                    class="w-icon-long-arrow-left"></i></a>
        </div>
        <div class="row">
            <div class="mb-4 col-lg-3 col-sm-4">
                <div class="banner br-sm"
                    style="background:url('{{ $other_image[0] }}');
                    background-color: #ebeced; background-repeat:no-repeat;background-size:contain;background-position:center center;height:250px">
                    <div class="banner-content content-top">
                        <h5 class="mb-2 banner-subtitle font-weight-normal text-white">الاكثر مبيعا اسبوعيا</h5>
                        <hr class="mb-2 banner-divider bg-light">
                        <h3 class="banner-title font-weight-bolder ls-25 text-uppercase text-white">
                            قسم<br> <span class="font-weight-normal text-capitalize text-white">وصل حديثا</span>
                        </h3>
                        <a href="{{ route('shop_special_category',$item->slug) }}"
                            class="btn btn-light btn-outline btn-rounded btn-sm text-white">تسوق الان</a>
                        <div style="position: absolute;
                        background: #000;
                        right: 0;
                        top: 0;
                        bottom: 0;
                        left: 0;
                        opacity: 0.5;
                        z-index:-1">
                        </div>
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
                        @php
                        $other_image = explode(',',$products_cat->image);

                        @endphp
                        <div class="swiper-slide product-col">
                            <div class="text-center product-wrap product">
                                <figure class="product-media">
                                    <a href="{{ route('singleproduct',$products_cat->slug) }}">

                                        @if(count($other_image) > 1 )
                                        <img src="{{ $other_image[0]}}" alt="Product"
                                            style="height:200px !important; width:100% !important;object-fit:contain" />
                                        <img src="{{ $other_image[1] }}" alt="Product"
                                            style="height:200px !important; width:100% !important;object-fit:contain" />
                                        @else
                                        <img src="{{ $other_image[0]}}" alt="Product"
                                            style="height:200px !important; width:100% !important;object-fit:contain" />
                                        @endif
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="javascript:void(0)" data-product-id="{{$products_cat->id}}"
                                            id="add_to_cart{{$products_cat->id}}" data-quantity="1"
                                            class="add-to-cart btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="javascript:void(0)" data-id="{{ $products_cat->id }}"
                                            id="add_to_wishlist{{ $products_cat->id }}" data-quantity="1"
                                            class=" add_to_wishlist btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                       

                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a
                                            href="{{ route('singleproduct',$products_cat->slug) }}">{{ $products_cat->ar_title }}</a>
                                    </h4>
                                    @php
                                    $avareg_review =
                                    \App\Models\ProductReview::where('product_id',$products_cat->id)->get();
                                    #review comments
                                    $avareg = 0;
                                    $sum = 0;
                                    foreach($avareg_review as $avg){
                                    $sum += $avg->rate;
                                    $countavg = count($avareg_review);
                                    $avareg = $sum / $countavg;
                                    }
                                    @endphp
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
                                                @endif></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="{{ route('singleproduct',$products_cat->slug) }}"
                                            class="rating-reviews">({{ $avareg_review->count() }}
                                            reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        @if (empty($products_cat->offer_price) || $products_cat->offer_price ==
                                        null)
                                        <ins class="new-price">{{ number_format($products_cat->price) }} د.أ </ins>
                                        @else
                                        <ins class="new-price">{{ number_format($products_cat->offer_price) }} د.أ
                                        </ins> - <del class="old-price">{{ number_format($products_cat->price )}} د.أ
                                        </del>
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
    @endif
    @endif
    @endforeach
    <!-- End Products Collection  -->
    <!-- Slider under view products -->
    @php
    $sponser_adsdown = \App\Models\sponserAds::where('image_place' ,'homepage_under_full_width')->get();
    @endphp
    @if($sponser_adsdown->count() > 0)

    <div id="carouselExampleControlsdown" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($sponser_adsdown as $key => $slider)
            @if($slider->image_place == 'homepage_under_full_width')
            <div class="carousel-item {{ $key == 0 ? 'active':'' }}">
                @if(Config::get('app.locale') == 'en')

                <img src="{{url($slider->image_English)}}" class="d-block w-100" alt="{{ $slider->image_place }}">
                @else
                <img src="{{url($slider->image_Arabic)}}" class="d-block w-100" alt="{{ $slider->image_place }}">
                @endif

            </div>
            @endif
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsdown"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsdown"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
    @endif
    <!-- End of Banner Fashion -->
    <h2 class="mt-4 mb-4 title title-underline ls-normal appear-animate">Our Clients</h2>
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
                    <img src="{{ asset('front-style/assets/images/demos/demo1/brands/10.png') }}" alt="Brand"
                        width="410" height="186" />
                </figure>
            </div>
            <div class="swiper-slide brand-col">
                <figure class="brand-wrapper">
                    <img src="{{ asset('front-style/assets/images/demos/demo1/brands/11.png') }}" alt="Brand"
                        width="410" height="186" />
                </figure>
                <figure class="brand-wrapper">
                    <img src="{{ asset('front-style/assets/images/demos/demo1/brands/12.png') }}" alt="Brand"
                        width="410" height="186" />
                </figure>
            </div>
        </div>
    </div>
    <!-- Post Wrapper -->
    {{-- <h2 class="mb-4 title title-underline ls-normal appear-animate">Your Recent Views</h2>
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
                                <img src="{{asset('front-style/assets/images/demos/demo1/products/7-1.jpg')}}"
    alt="Category image" width="130" height="146" style="background-color: #fff" />
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
    </div> --}}
    <!-- End of Reviewed Producs -->
    </div>
    <!--End of Catainer -->
</main>
<!-- End of Main -->
@endsection