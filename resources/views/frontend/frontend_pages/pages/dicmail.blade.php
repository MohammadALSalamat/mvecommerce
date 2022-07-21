@extends('frontend.frontend_layout.main_desgin')

 @if(Config::get('app.locale') == 'en')
@section('mytitle','DISCLAIMER')

@else
@section('mytitle',' تنصل')

@endif

@section('content')
 @if(Config::get('app.locale') == 'en')
<main class="main">
    <!-- Start of Page Header -->
    <div class="container">
    <div class="page-header" style="background:url('/storage/photos/1/Artboard 1 copy-100.jpg');background-size:cover">
            <h1 class="page-title mb-0 text-white">DISCLAIMER</h1>
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
                            <h4 class="title text-left">DISCLAIMER</h4>
                            <p class="mb-6">
                                This site its content, function, and all information, products, and services contained
                                in or offered through this site are approved on an "as is" and "as available" basis
                                without presentations or warranties of any kind. iTajer expressly disclaims all such
                                representations and warranties either express or implied including without limitation,
                                warranties of title, merchantability fitness for particular purposes or
                                non-infringement, and any implied warranties arising from the course of dealing or
                                course of performance. iTajer does not warrant that this site or its contents will be
                                complete, accurate, timely, uninterrupted, secure, or error-free or that defects will be
                                corrected. All information on this site is subject to change without notice, some
                                jurisdictions do not allow the exclusion of certain warranties so some of the above
                                exclusions may not apply to you.
                                <b>Company:</b> iTajer
                                <b>Customer Care: </b> (info@itajer.ae)
                                <b> number: </b> +971588052313
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
            <h1 class="page-title mb-0 text-white">اخلاء المسؤولية</h1>
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
                            <h4 class="title text-left">اخلاء المسؤولية</h4>
                            <p class="mb-6">
                                هذا الموقع يتم الموافقة على محتواه ووظيفته وجميع المعلومات والمنتجات والخدمات الواردة فيه أو المعروضة من خلاله على أساس "كما هي" و "كما هو متاح" دون عروض تقديمية أو ضمانات من أي نوع. تتنصل iTajer صراحةً من جميع هذه الإقرارات والضمانات سواء كانت صريحة أو ضمنية بما في ذلك على سبيل المثال لا الحصر ، ضمانات الملكية والملاءمة التجارية لأغراض معينة أو عدم الانتهاك وأي ضمانات ضمنية تنشأ عن سير التعامل أو سير الأداء. لا تضمن iTajer أن هذا الموقع أو محتوياته ستكون كاملة أو دقيقة أو في الوقت المناسب أو غير منقطعة أو آمنة أو خالية من الأخطاء أو أنه سيتم تصحيح العيوب. تخضع جميع المعلومات الواردة في هذا الموقع للتغيير دون إشعار ، ولا تسمح بعض السلطات القضائية باستثناء بعض الضمانات ، لذلك قد لا تنطبق عليك بعض الاستثناءات المذكورة أعلاه.
                                <b>الشركة:</b>أي تاجر
                                <b>خدمة عملاء: </b> (info@itajer.ae)
                                <b> الرقم: </b> +971588052313
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