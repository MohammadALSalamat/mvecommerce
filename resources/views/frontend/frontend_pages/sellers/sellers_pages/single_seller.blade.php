@extends('frontend.frontend_layout.main_desgin')
@section('mytitle', 'single Seller Page')
@section('content')
     <!-- Start of Main -->
     <main class="main">
        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb bb-no">
                    <li><a href="demo1.html">Home</a></li>
                    <li><a href="#">Vendor</a></li>
                    <li><a href="#">Dokan</a></li>
                    <li>Store</li>
                </ul>
            </div>
        </nav>
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
                                <div class="widget widget-collapsible widget-categories">
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
                                </div>
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
                                <div class="widget widget-collapsible widget-time">
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
                                </div>
                                <!-- End of Widget -->
                                <div class="widget widget-collapsible widget-products">
                                    <h3 class="widget-title"><span>Best Selling</span></h3>
                                    <div class="widget-body">
                                        <div class="product product-widget">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="assets/images/shop/1.jpg" alt="Product" width="100"
                                                        height="106" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">3D Television</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">$220.00</div>
                                            </div>
                                        </div>
                                        <div class="product product-widget">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="assets/images/shop/2-1.jpg" alt="Product" width="100"
                                                        height="106" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">Alarm Clock With Lamp</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$30.00</ins><del
                                                        class="old-price">$60.00</del>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-widget">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="assets/images/shop/3.jpg" alt="Product" width="100"
                                                        height="106" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">Apple Laptop</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">$1,000.00</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Widget -->
                                <div class="widget widget-collapsible widget-products">
                                    <h3 class="widget-title"><span>Top Rated</span></h3>
                                    <div class="widget-body">
                                        <div class="product product-widget">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="assets/images/shop/12.jpg" alt="Product" width="100"
                                                        height="106" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">Classic Simple Backpack</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">$85.00</div>
                                            </div>
                                        </div>
                                        <div class="product product-widget">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="assets/images/shop/13.jpg" alt="Product" width="100"
                                                        height="106" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">Smart Watch</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">$90.00</div>
                                            </div>
                                        </div>
                                        <div class="product product-widget">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="assets/images/shop/20.jpg" alt="Product" width="100"
                                                        height="106" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">Pencil Case</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">$54.00</div>
                                            </div>
                                        </div>
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
                                <img src="{{ asset('front-style/assets/images/vendor/dokan/1.jpg') }}" alt="Vendor" width="930" height="446"
                                    style="background-color: #414960;" />
                            </figure>
                            <div class="store-content">
                                <figure class="seller-brand">
                                    <img src="{{ asset('front-style/assets/images/vendor/brand/1.jpg') }}" alt="Brand" width="80"
                                        height="80" />
                                </figure>
                                <h4 class="store-title">{{ $seller->full_name}}</h4>
                                <ul class="seller-info-list list-style-none mb-6">
                                    <li class="store-address">
                                        <i class="w-icon-map-marker"></i>
                                       {{$seller->address}},{{ $seller->country }}
                                    </li>
                                    <li class="store-phone">
                                        <a href="tel:{{ $seller->phone }}">
                                            <i class="w-icon-phone"></i>
                                            {{ $seller->phone }}
                                        </a>
                                    </li>
                                    <li class="store-rating">
                                        <i class="w-icon-star-full"></i>
                                        4.33 rating from 3 reviews
                                    </li>
                                    <li class="store-open">
                                        <i class="w-icon-cart"></i>
                                        Store Open
                                    </li>
                                </ul>
                                <div class="social-icons social-no-color border-thin">
                                    <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                    <a href="#" class="social-icon social-google w-icon-google"></a>
                                    <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                    <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                                    <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                                    <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Store Banner -->

                        <h2 class="title vendor-product-title mb-4"><a href="#">Products</a></h2>

                        <div class="product-wrapper row cols-md-3 cols-sm-2 cols-2">
                            @foreach ($vendor_product as $product)
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
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quick View"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                       
                                            <span >{{ $product->this_belong_to_category['title']}}</span>
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
                                               <ins> {{ $product->price}} AED </ins>
                                                    
                                                @else
                                                    
                                                <ins> {{ $product->offer_price}} AED </ins> - <del>{{ $product->price}} AED</del>
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