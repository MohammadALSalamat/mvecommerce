@extends('frontend.frontend_layout.main_desgin')



@if(Config::get('app.locale') == 'en')
@section('mytitle','Terms & Conditions')

@else
@section('mytitle','البنود و الظروف')
@endif

@section('content')
@if(Config::get('app.locale') == 'en')
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
                            <h4 class="title text-left">Terms & Conditions</h4>
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
@else
<main class="main">
    <!-- Start of Page Header -->
    <div class="container">
    <div class="page-header" style="background:url('/storage/photos/1/Artboard 1 copy-100.jpg');background-size:cover">
            <h1 class="page-title mb-0 text-white">البنود و الظروف</h1>
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
                            <h4 class="title text-left">البنود و الظروف</h4>
                            <p class="mb-6">
                                من خلال الوصول إلى خدمات هذا الموقع واستلامها و / أو استخدامها ، تكون قد وافقت دون قيد أو شرط على شروط وأحكام الاستخدام وتوافق على أن تخضع لهذه الاتفاقية وسياسة الخصوصية وتحكمها وتلتزم بها. <a href="{{ route('policy') }}">(“سياسة”) </a>تقع في <a href="http://www.itajer.ae">اي تاجر</a>
                                (website)
                            </p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</main>
@endif
@endsection