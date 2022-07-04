@extends('frontend.frontend_layout.main_desgin')
@section('mytitle','Terms & Conditions')

@section('content')

<main class="main">
    <!-- Start of Page Header -->
    <div class="container">
    <div class="page-header" style="background:url('/storage/photos/1/Artboard 1 copy-100.jpg');background-size:cover">
            <h1 class="page-title mb-0 text-white">Terms & Conditions</h1>
        </div>
    </div>
    <!-- End of Page Header -->

    <!-- Start of Page Content -->
    <div class="page-content">
        <div class="container">
            <section class="boost-section pt-10 pb-10">
                <div class="container mt-10 mb-9">
                    <div class="row align-items-center mb-10">
                        <div class="col-md-12 pl-lg-8 mb-8">
                            <h4 class="title text-left">General Disclaimer</h4>
                            <p class="mb-6">
                                By having access to, receiving, and/or using the Services of this site, you have
                                unconditionally accepted the terms and conditions of use and agree to be governed and
                                bound by, this Agreement, and the Privacy Policy <a href="{{ route('policy') }}">(“Policy”) </a> located at <a href="http://www.itajer.ae">ITAJER</a>
                                (website)
                            </p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</main>
@endsection