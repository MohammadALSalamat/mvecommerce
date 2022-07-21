@extends('frontend.frontend_layout.main_desgin')
@section('mytitle','Data Security')
 @if(Config::get('app.locale') == 'en')
@section('mytitle','Data Security')

@else
@section('mytitle','أمن البيانات')

@endif


@section('content')
 @if(Config::get('app.locale') == 'en')
<main class="main">
    <!-- Start of Page Header -->
    <div class="container">
    <div class="page-header" style="background:url('/storage/photos/1/Artboard 1 copy-100.jpg');background-size:cover">
            <h1 class="page-title mb-0 text-white">Data Security</h1>
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
                            <h4 class="title text-left">Data Security</h4>
                            <p class="mb-6">
                                Essentially will use its best efforts to protect your privacy. Authorized employees
                                within the company on a need-to-know basis only use any information collected from
                                individual customers. We will not sell, share, or rent your personal information to any
                                third party or use your e-mail address for unsolicited mail. Any emails sent by the
                                Company will only be in connection with the provision of agreed services and products.
                                We will use our best efforts to provide the highest level of support in order to
                                maintain maximum information security. However, as you are aware – we cannot guarantee
                                absolute security for the website and therefore cannot be held liable against it in any
                                manner whatsoever.
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
            <h1 class="page-title mb-0 text-white">أمن البيانات</h1>
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
                            <h4 class="title text-left">أمن البيانات</h4>
                            <p class="mb-6">
                               بشكل أساسي سيبذل قصارى جهده لحماية خصوصيتك. يستخدم الموظفون المعتمدون داخل الشركة على أساس الحاجة إلى المعرفة فقط أي معلومات تم جمعها من العملاء الفرديين. لن نبيع أو نشارك أو نؤجر معلوماتك الشخصية لأي طرف ثالث أو نستخدم عنوان بريدك الإلكتروني للبريد غير المرغوب فيه. ستكون أي رسائل بريد إلكتروني ترسلها الشركة مرتبطة فقط بتقديم الخدمات والمنتجات المتفق عليها. سنبذل قصارى جهدنا لتقديم أعلى مستوى من الدعم من أجل الحفاظ على أقصى قدر من أمن المعلومات. ومع ذلك ، كما تعلمون - لا يمكننا ضمان الأمان المطلق للموقع وبالتالي لا يمكن أن نتحمل المسؤولية تجاهه بأي شكل من الأشكال.
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