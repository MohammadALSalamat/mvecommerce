@extends('frontend.frontend_layout.main_desgin')
@section('content')
  <!-- Start of Main -->
        <main class="main">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb bb-no">
                        <li><a href="{{ route('homepage') }}">Home</a></li>
                        <li>Error 404</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->
            <!-- Start of Page Content -->
            <div class="page-content error-404">
                <div class="container">
                    <div class="banner">
                        <figure>
                            <img src="{{ asset('front-style/assets/images/pages/404.png') }}" alt="Error 404"  
                                width="820" height="460" />
                        </figure>
                        <div class="text-center banner-content">
                            <h2 class="banner-title">
                                <span class="text-secondary">Oops!!!</span> Something Went Wrong Here
                            </h2>
                            <p class="text-light">There may be a misspelling in the URL entered, or the page you are looking for may no longer exist</p>
                            <a href="{{ route('homepage') }}" class="mb-5 btn btn-rounded btn-icon-right" style="background: red;color:#fff;">Go Back Home<i class="w-icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
@endsection