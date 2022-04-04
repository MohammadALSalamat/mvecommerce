@extends('frontend.frontend_layout.main_desgin')
@section('mytitle','Vendors List')
@section('content')
        <!-- Start of Main -->
        <main class="main">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb bb-no">
                        <li><a href="demo1.html">Home</a></li>
                        <li><a href="#">Vendor</a></li>
                        <li><a href="#">WC Marketplace</a></li>
                        <li>Store List</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Pgae Contetn -->
            <div class="page-content mb-8">
                <div class="container">
                    <!-- Start of Vendor Filter -->
                    <div class="vendor-filter mb-4">
                        <div class="vendor-filter-left mr-auto">
                            <div class="select-box mb-2 mr-2">
                                <select name="sortby" class="form-control">
                                    <option value="date" selected="selected">By date</option>
                                    <option value="alphabet">By Alphabetically</option>
                                    <option value="category">By Category</option>
                                    <option value="shipping">By Shipping</option>
                                </select>
                            </div>
                            <a href="#" class="btn btn-rounded mb-2 mr-4">Sort</a>
                        </div>
                        <div class="vendor-filter-right">
                            <label class="d-inline-block font-size-md text-dark mb-2">Viewing all 6 vendors</label>
                        </div>
                    </div>
                    <!-- End of Vendor Filter -->

                    <!-- Start of Vendor Store -->
                    <div class="row cols-lg-3 cols-sm-2">
                        @foreach ($sellers as $seller )
                        <div class="store-wrap mb-4">
                            <div class="store store-wcmp br-sm">
                                <figure class="store-banner">
                                    <img src="{{ asset('front-style/assets/images/vendor/wcmp/1.jpg') }}" alt="Vendor" 
                                        width="400" height="318" style="background-color: #454b63;" />
                                </figure>
                                <div class="store-content">
                                    <figure class="seller-brand">
                                        <img src="{{ asset('front-style/assets/images/vendor/brand/1.jpg') }}" alt="Brand" width="80" height="80" />
                                    </figure>

                                    <div class="seller-date">
                                        <h4 class="store-title">
                                            <a href="{{ route('single_seller',$seller->id) }}">{{ $seller->full_name}}</a>
                                        </h4>
                                        <ul class="seller-info-list list-style-none">
                                            <li class="store-address">
                                                <i class="w-icon-map-marker"></i>
                                                <p>{{$seller->address}},{{ $seller->country }}</p>
                                            </li>
                                            <li class="store-rating">
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Store -->
                        </div>
                        @endforeach
                    </div>
                    <!-- End of Vendor Store -->
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->
@endsection