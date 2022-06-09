@extends('frontend.frontend_layout.main_desgin')
@section('mytitle','About Us')


@section('content')

<!-- Start of Page Content -->
<div class="page-content">
    <div class="container">
        <section class="introduce mb-10 pb-10">
            <h2 class="title title-center">
                Who are we ?<br> & What is the Plan?
            </h2>
            <p class=" mx-auto text-center">iTajer, founded in 2022, serves as an international online B2C shopping e-commerce platform. The company focuses on everything can be sold through online. iTajer mainly targets Local and Levant at the age of 18 to 65+.</p>
            <figure class="br-lg">
                <img src="{{ asset('front-style/assets/images/pages/about_us/1.jpg') }}" alt="Banner" 
                    width="1240" height="540" style="background-color: #D0C1AE;" />
            </figure>
        </section>
    </div>

    <section class="boost-section pt-10 pb-10">
        <div class="container mt-10 mb-9">
            <div class="row align-items-center mb-10">
                <div class="col-md-6 mb-8">
                    <figure class="br-lg">
                        <img src="assets/images/pages/about_us/3.jpg" alt="Banner"
                            width="610" height="450" style="background-color: #9E9DA2;" />
                    </figure>
                </div>
                <div class="col-md-6 pl-lg-8 mb-8">
                    <h4 class="title text-left">Our Vision</h4>
                    <p class="mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                        incididunt ut labore et dolore magna aliqua. Venenatis tellus in.
                        metus vulputate eu scelerisque felis. Vel pretium lectus qua .
                        Arpis massa. Nunc id cursus metus ididunt ut labore metus vulputate episcing.</p>
                    <a href="#" class="btn btn-dark btn-rounded">Visit Our Store</a>
                </div>
            </div>

        </div>
    </section>
</div>

@endsection