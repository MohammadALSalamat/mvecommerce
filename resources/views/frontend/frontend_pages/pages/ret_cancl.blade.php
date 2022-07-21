@extends('frontend.frontend_layout.main_desgin')


@if(Config::get('app.locale') == 'en')
@section('mytitle','Refund & cancellation Policy')

@else
@section('mytitle','سياسة الاسترداد والإلغاء')

@endif

@section('content')
@if(Config::get('app.locale') == 'en')
<main class="main">
    <!-- Start of Page Header -->
    <div class="container">
    <div class="page-header" style="background:url('/storage/photos/1/Artboard 1 copy-100.jpg');background-size:cover">
            <h1 class="page-title mb-0 text-white">Refund & cancellation Policy</h1>
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
                            <h4 class="title text-left">Refund & cancellation</h4>
                            <p class="mb-6">
                                We do not accept returns for perishable goods & services. Please get in touch with our
                                Customer Care Team if you have any concerns or questions about a specific item or
                                service.
                                If your order was damaged in transit, or if you've received the wrong order within 3
                                working days from delivery time, please reach out to our customer service team
                                immediately by calling us or sending email +971588052313 (or by info@itajer.ae) and we
                                will send you a replacement item or provide another solution.
                                In case you feel that your account has been charged in error, you must notify us within
                                7 days of purchase.
                                Any questions, complaints, or claims regarding the Application should be directed to:
                                info@itajer.ae
                                These inquiries will be handled on a case-by-case basis. 
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
            <h1 class="page-title mb-0 text-white">سياسة الاسترداد والإلغاء</h1>
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
                            <h4 class="title text-left">سياسة الاسترداد والإلغاء</h4>
                            <p class="mb-6">
                                لا نقبل إرجاع السلع والخدمات القابلة للتلف. يرجى الاتصال بفريق خدمة العملاء لدينا إذا كانت لديك أي مخاوف أو أسئلة حول عنصر أو خدمة معينة.
إذا تعرض طلبك للتلف أثناء النقل ، أو إذا تلقيت طلبًا خاطئًا خلال 3 أيام عمل من وقت التسليم ، فيرجى التواصل مع فريق خدمة العملاء لدينا على الفور عن طريق الاتصال بنا أو إرسال بريد إلكتروني على الرقم 971588052313+ (أو عن طريق info@itajer.ae ) وسنرسل لك عنصرًا بديلاً أو نقدم حلًا آخر.
   في حال شعرت أنه قد تم تحميل حسابك عن طريق الخطأ ، يجب عليك إخطارنا في غضون 7 أيام من الشراء. يجب توجيه أي أسئلة أو شكاوى أو مطالبات تتعلق بالتطبيق إلى:
info@itajer.ae
سيتم التعامل مع هذه الاستفسارات على أساس كل حالة على حدة.
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