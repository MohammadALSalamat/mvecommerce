@extends('frontend.frontend_layout.main_desgin')
@if(Config::get('app.locale') == 'en')
@section('mytitle','Vendors List')

@else
@section('mytitle', 'صفحة المستثمرين')

@endif

<style>
    @media (max-width:600px){
        .mobile{
            display: block !important;
        }
        .desktop{
            display: none !important;
        }
    }
    @media (min-width:601px){
        .mobile{
            display: none !important;
        }
        .desktop{
            display: flex !important;
        }
    }
</style>
@section('content')
        <!-- Start of Main -->
        <main class="main mt-5">
            <!-- Start of Breadcrumb -->
           
            <!-- End of Breadcrumb -->

            <!-- Start of Pgae Contetn -->
            <div class="page-content mb-8">
                <div class="container">
                    
                    <!-- Start of Vendor Store -->
                    <div class="row cols-lg-3 cols-sm-2 desktop">
                        @foreach ($sellers as $seller )
                        <div class="store-wrap mb-4">
                            <div class="store store-wcmp br-sm">
                                <figure class="store-banner" style="height: 318px">
                                    @if (empty( $seller->banner_image) || $seller->banner_image == null)
                                    <img src="{{ asset('front-style/assets/images/defualtSellerbanner.png') }}" alt="Vendor" 
                                    width="400" height="318" style="background-color: #454b63;" />
                                    @else
                                    <img src="{{ asset('/storage/seller/'.$seller->banner_image) }}" alt="Vendor" 
                                        width="400px" height="318px" style="background-color: #454b63;" />
                                    @endif
                                </figure>
                                <div class="store-content">
                                    <figure class=" mr-2">
                                        @if (empty( $seller->brand) || $seller->brand == null)
                                        <img src="{{ asset('front-style/assets/images/vendor/brand/1.jpg') }}" alt="Brand" width="80px" height="80px" />
                                        @else
                                        <img src="{{ asset('/storage/seller/'.$seller->brand)  }}" alt="Brand" width="80px" height="80px" style="object-fit: cover" />
                                        @endif
                                    </figure>
                                    <div class="seller-date">
                                        <h4 class="store-title">
                                            <a href="{{ route('single_seller',$seller->username) }}">{{ $seller->full_name}}</a>
                                        </h4>
                                        <ul class="seller-info-list list-style-none">
                                            @if (empty($seller->address) || $seller->address == null)
                                                
                                            @else
                                            <li class="store-address">
                                                <i class="w-icon-map-marker"></i>
                                                <p>{!!$seller->address!!},{{ $seller->country }}</p>
                                            </li>
                                            @endif
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
                    @foreach ($sellers as $seller )
                    <div class="store store-list mt-4 mobile">
                        <div class="store-header">
                            <a href="{{ route('single_seller',$seller->username) }}">
                                <figure class="store-banner" style="height: 318px">
                                    @if (empty( $seller->banner_image) || $seller->banner_image == null)
                                    <img src="{{ asset('front-style/assets/images/defualtSellerbanner.png') }}" alt="Vendor" 
                                    width="400" height="318" style="background-color: #454b63;" />
                                    @else
                                    <img src="{{ asset('/storage/seller/'.$seller->banner_image) }}" alt="Vendor" 
                                        width="400px" height="318px" style="background-color: #454b63;" />
                                    @endif
                                </figure>
                            </a>
                        </div>
                        <!-- End of Store Header -->
                        <div class="store-content">
                            <figure class=" mr-2">
                                @if (empty( $seller->brand) || $seller->brand == null)
                                <img src="{{ asset('front-style/assets/images/vendor/brand/1.jpg') }}" alt="Brand" width="80px" height="80px" />
                                @else
                                <img src="{{ asset('/storage/seller/'.$seller->brand)  }}" alt="Brand" width="80px" height="80px" style="object-fit: cover" />
                                @endif
                            </figure>
                            <div class="seller-date">
                                <h4 class="store-title">
                                    <a href="{{ route('single_seller',$seller->username) }}">{{ $seller->full_name}}</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                </div>
                                <div class="store-address">
                                    <p>{!!$seller->address!!},{{ $seller->country }}</p>
                                </div>
                                <a href="{{ route('single_seller',$seller->username) }}" class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">
                                    Visit Store<i class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- End of Store Content -->
                    </div>
                    @endforeach

                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->
@endsection