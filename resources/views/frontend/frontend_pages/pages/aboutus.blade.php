@extends('frontend.frontend_layout.main_desgin')
 @if(Config::get('app.locale') == 'en')
@section('mytitle','About Us')
@else
@section('mytitle','نبذة عننا ')
@endif

@section('content')
 @if(Config::get('app.locale') == 'en')
<main class="main">
    <!-- Start of Page Header -->
    <div class="container">
<div class="page-header" style="background:url('/storage/photos/1/Artboard 1 copy-100.jpg');background-size:cover">
        <h1 class="page-title mb-0 text-white">About Us</h1>
    </div>
</div>
    <!-- End of Page Header -->

<!-- Start of Page Content -->
<div class="page-content">
    <div class="container">
        <section class="boost-section pt-10 pb-10">
            <div class="container mt-10 mb-9">
                <div class="row align-items-center mb-10">
                    <div class="col-md-6 pl-lg-8 mb-8">
                        <h4 class="title text-left">Who are we?</h4>
                        <p class="mb-6">
                            iTajer, founded in 2022, serves as an international online B2C shopping e-commerce platform. The company focuses on everything can be sold through online. iTajer mainly targets Local and Levant at the age of 18 to 65+.
                    </div>
                    <div class="col-md-6 mb-8">
                        <figure class="br-lg">
                            <img src="{{ asset('front-style/assets/images/whoweare.png') }}" alt="Banner"
                                width="610" height="450" style="background-color: #9E9DA2;" />
                        </figure>
                    </div>
                </div>
    
            </div>
        </section>
        
    </div>

    <section class="boost-section pt-10 pb-10">
        <div class="container mt-10 mb-9">
            <div class="row align-items-center mb-10">
                <div class="col-md-6 mb-8">
                    <figure class="br-lg">
                        <img src="{{ asset('front-style/assets/images/ourvision.png') }}" alt="Banner"
                            width="610" height="450" style="background-color: #9E9DA2;" />
                    </figure>
                </div>
                <div class="col-md-6 pl-lg-8 mb-8">
                    <h4 class="title text-left">Our Vision</h4>
                    <p class="mb-6">
                        We believe online shopping should be accessible, easy and enjoyable. This is the vision iTajer aspires to deliver on the platform, every single day. We give confidence to everyone that he opens an electronic platform and begins to become a great merchant
                </div>
            </div>

        </div>
    </section>
    <section class="boost-section pt-10 pb-10">
        <div class="container mt-10 mb-9">
            <div class="row align-items-center mb-10">
               
                <div class="col-md-6 pl-lg-8 mb-8">
                    <h4 class="title text-left">Our Mission</h4>
                    <p class="mb-6">
                        Our main focus is is on providing a service for online stores by marketing their products & services, and also offer various styles, accessories, shoes, bags, etc. We aim to provide all type of services & products with class-leading professional services. And our products feature forward styles, innovative designs, high quality, and affordable prices.
                    </p>
                   
                </div>
                <div class="col-md-6 mb-8">
                    <figure class="br-lg">
                        <img src="{{ asset('front-style/assets/images/ourmission.png') }}" alt="Banner"
                            width="610" height="450" style="background-color: #9E9DA2;" />
                    </figure>
                </div>
            </div>

        </div>
    </section>
</div>
</main>

@else
<main class="main">
    <!-- Start of Page Header -->
    <div class="container">
<div class="page-header" style="background:url('/storage/photos/1/Artboard 1 copy-100.jpg');background-size:cover">
        <h1 class="page-title mb-0 text-white">نبذة عننا </h1>
    </div>
</div>
    <!-- End of Page Header -->

<!-- Start of Page Content -->
<div class="page-content">
    <div class="container">
        <section class="boost-section pt-10 pb-10">
            <div class="container mt-10 mb-9">
                <div class="row align-items-center mb-10">
                    <div class="col-md-6 pl-lg-8 mb-8">
                        <h4 class="title text-left">من نحن؟</h4>
                        <p class="mb-6">
                           اي تاجر، التي تأسست في عام 2022 ، تعمل كمنصة التجارة الإلكترونية الدولية للتسوق عبر الإنترنت B2C. تركز الشركة على كل ما يمكن بيعه عبر الإنترنت. تستهدف اي تاجربشكل أساسي المواطنين والوافدين من سن 18 إلى 65+.
                    </div>
                    <div class="col-md-6 mb-8">
                        <figure class="br-lg">
<<<<<<< HEAD
                            <img src="{{ asset('front-style/assets/images/whoweare.png') }}" alt="Banner"
=======
                            <img src="{{ asset('front-style/assets/images/pages/about_us/1.jpg') }}" alt="Banner"
>>>>>>> c42a79ae9da527b74c953d05e3ae4ed76f6534ef
                                width="610" height="450" style="background-color: #9E9DA2;" />
                        </figure>
                    </div>
                </div>
    
            </div>
        </section>
        
    </div>

    <section class="boost-section pt-10 pb-10">
        <div class="container mt-10 mb-9">
            <div class="row align-items-center mb-10">
                <div class="col-md-6 mb-8">
                    <figure class="br-lg">
<<<<<<< HEAD
                        <img src="{{ asset('front-style/assets/images/ourvision.png') }}" alt="Banner"
=======
                        <img src="{{ asset('front-style/assets/images/pages/about_us/3.jpg') }}" alt="Banner"
>>>>>>> c42a79ae9da527b74c953d05e3ae4ed76f6534ef
                            width="610" height="450" style="background-color: #9E9DA2;" />
                    </figure>
                </div>
                <div class="col-md-6 pl-lg-8 mb-8">
                    <h4 class="title text-left">رؤيتنا</h4>
                    <p class="mb-6">
                        نعتقد أن التسوق عبر الإنترنت يجب أن يكون متاحًا وسهلاً وممتعًا. هذه هي الرؤية التي تطمح اي تاجرإلى تحقيقها على المنصة ، كل يوم. نمنح الثقة للجميع أنه يفتح منصة إلكترونية ويبدأ في أن يصبح تاجرًا عظيمًا
                </div>
            </div>

        </div>
    </section>
    <section class="boost-section pt-10 pb-10">
        <div class="container mt-10 mb-9">
            <div class="row align-items-center mb-10">
               
                <div class="col-md-6 pl-lg-8 mb-8">
                    <h4 class="title text-left">مهمتنا</h4>
                    <p class="mb-6">
                       ينصب تركيزنا الأساسي على تقديم خدمة للمتاجر عبر الإنترنت من خلال تسويق منتجاتها وخدماتها ، وكذلك تقديم أنماط مختلفة ، وإكسسوارات ، وأحذية ، وحقائب ، وما إلى ذلك. ونحن نهدف إلى تقديم جميع أنواع الخدمات والمنتجات بخدمات احترافية رائدة في فئتها. وتتميز منتجاتنا بأنماط أمامية وتصميمات مبتكرة وجودة عالية وأسعار معقولة.
                    </p>
                   
                </div>
                <div class="col-md-6 mb-8">
                    <figure class="br-lg">
<<<<<<< HEAD
                        <img src="{{ asset('front-style/assets/images/ourmission.png') }}" alt="Banner"
=======
                        <img src="{{ asset('front-style/assets/images/pages/about_us/3.jpg') }}" alt="Banner"
>>>>>>> c42a79ae9da527b74c953d05e3ae4ed76f6534ef
                            width="610" height="450" style="background-color: #9E9DA2;" />
                    </figure>
                </div>
            </div>

        </div>
    </section>
</div>
</main>

@endif

@endsection