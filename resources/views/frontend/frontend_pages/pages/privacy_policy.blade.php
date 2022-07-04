@extends('frontend.frontend_layout.main_desgin')


@if(Config::get('app.locale') == 'en')
@section('mytitle','Privacy Policy')

@else
@section('mytitle','سياسة الخصوصية')

@endif

@section('content')
@if(Config::get('app.locale') == 'en')
<main class="main">
    <!-- Start of Page Header -->
    <div class="container">
    <div class="page-header" style="background:url('/storage/photos/1/Artboard 1 copy-100.jpg');background-size:cover">
            <h1 class="page-title mb-0 text-white">Privacy Policy</h1>
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
                            <h4 class="title text-left">Privacy Policy</h4>
                            <p class="mb-6">
                                Your privacy is of the utmost importance to us. Your information will never be sold to
                                any outside party. We collect aggregate data on what pages consumers’ access or visit,
                                user-specific information from the pages consumers’ access or visit, information
                                volunteered by the consumer, such as survey information and/or site registrations, and
                                name, address, and telephone number.<br>
                                The information we collect is used to improve the content of our web page, customize the
                                content and/or layout of our page, notify consumers about updates to our website, track
                                consumer preferences, and enhance the consumer experience. We may also use this
                                information for marketing and promotional purposes, as well as statistical analysis.
                            </p>
                            <p>
                                We will treat your personal information as strictly private and confidential. The
                                information so provided by you to the Company or captured by the Company may be used for
                                a number of purposes connected with the Company’s business operations which may include
                                the following:
                                Processing orders or applications
                                Provisioning of services, improvement of services, recommending various products or
                                services including those of third parties
                                Dealing with requests, enquiries and complaints and customer related activities
                                Marketing products and services and its analysis
                            </p>
                            <p>
                                Disclose the information for abiding with laws and law enforcement / regulatory requests
                                The Company may provide your information or data to its partners, associates, service
                                providers or other third parties to provide, advertise or market their legitimate
                                products and/or services which may be of your interest. You will have the choice to ‘opt
                                out’ of such marketing or promotional communications at your will.
                                Your consent being part of the terms and conditions through which the Company provide
                                you with a service. Your consent may be implicit or implied or through course of
                                conduct.
                                To enforce our terms and conditions
                            </p>
                            <p>
                                To protect our rights, privacy, safety or property, and/or that of our affiliates, you
                                or others.
                                To safeguard your information, we use third-party software to securely collect payments,
                                maintain our customer contact information, and host our websites. All online
                                transactions are encrypted. For the purpose of authorization and completion of
                                transactions, information you submit when making an online purchase is shared with
                                payment processors and your credit card company. We do not have access to any of your
                                credit card information once you make a purchase.
                                If you would like to: access, correct, amend or delete any personal information we have
                                about you, register a complaint, or simply want more information, contact our Privacy
                                Compliance Officer at <a href="mailto:info@itajer.ae"> info@itajer.ae </a>
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
            <h1 class="page-title mb-0 text-white">سياسة الخصوصية</h1>
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
                            <h4 class="title text-left">سياسة الخصوصية</h4>
                            <p class="mb-6">
                               خصوصيتك في غاية الأهمية بالنسبة لنا. لن يتم بيع معلوماتك إلى أي طرف خارجي. نقوم بجمع بيانات مجمعة حول الصفحات التي يصل إليها المستهلكون أو يزورونها ، والمعلومات الخاصة بالمستخدم من الصفحات التي يصل إليها المستهلكون أو يزورونها ، والمعلومات التي يتطوع بها المستهلك ، مثل معلومات الاستطلاع و / أو تسجيلات الموقع ، والاسم والعنوان ورقم الهاتف .
تُستخدم المعلومات التي نجمعها لتحسين محتوى صفحة الويب الخاصة بنا ، وتخصيص محتوى و / أو تخطيط صفحتنا ، وإخطار المستهلكين بالتحديثات على موقعنا ، وتتبع تفضيلات المستهلك ، وتحسين تجربة المستهلك. قد نستخدم هذه المعلومات أيضًا لأغراض التسويق والترويج ، بالإضافة إلى التحليل الإحصائي.
                            </p>
                            <p>
                               سنتعامل مع معلوماتك الشخصية على أنها خاصة وسرية تمامًا. يمكن استخدام المعلومات التي قدمتها إلى الشركة أو التي تم الحصول عليها من قبل الشركة لعدد من الأغراض المرتبطة بعمليات أعمال الشركة والتي قد تشمل ما يلي: أوامر المعالجة أو التطبيقات تقديم الخدمات ، وتحسين الخدمات ، والتوصية بمنتجات مختلفة أو الخدمات بما في ذلك تلك الخاصة بالأطراف الثالثة التي تتعامل مع الطلبات والاستفسارات والشكاوى والأنشطة المتعلقة بالعملاء تسويق المنتجات والخدمات وتحليلها
                            </p>
                            <p>
                                الإفصاح عن المعلومات الخاصة بالالتزام بالقوانين وطلبات إنفاذ القانون / الطلبات التنظيمية.قد تقدم الشركة معلوماتك أو بياناتك لشركائها أو شركائها أو مزودي الخدمة أو الأطراف الثالثة الأخرى لتقديم أو الإعلان عن أو تسويق منتجاتهم و / أو خدماتهم المشروعة التي قد تكون من اهتمامك. سيكون لديك خيار "الانسحاب" من هذه الاتصالات التسويقية أو الترويجية حسب رغبتك. موافقتك جزء من الشروط والأحكام التي من خلالها تقدم لك الشركة الخدمة. قد تكون موافقتك ضمنية أو ضمنية أو من خلال السلوك. لفرض الشروط والأحكام الخاصة بنا
                            </p>
                            <p>
                                لحماية حقوقنا أو خصوصيتنا أو سلامتنا أو ممتلكاتنا و / أو حقوق الشركات التابعة لنا ، أنت أو غيرك. لحماية معلوماتك ، نستخدم برامج تابعة لجهات خارجية لتحصيل المدفوعات بشكل آمن ، والحفاظ على معلومات الاتصال بالعملاء ، واستضافة مواقعنا الإلكترونية. جميع المعاملات عبر الإنترنت مشفرة. لغرض التفويض وإتمام المعاملات ، تتم مشاركة المعلومات التي ترسلها عند إجراء عملية شراء عبر الإنترنت مع معالجي الدفع وشركة بطاقة الائتمان الخاصة بك. لا يمكننا الوصول إلى أي من معلومات بطاقتك الائتمانية بمجرد إجراء عملية شراء. إذا كنت ترغب في: الوصول إلى أي معلومات شخصية لدينا عنك أو تصحيحها أو تعديلها أو حذفها ، أو تسجيل شكوى ، أو ببساطة تريد مزيدًا من المعلومات ، فاتصل بمسؤول الامتثال للخصوصية على <a href="mailto:info@itajer.ae"> info@itajer.ae </a>
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