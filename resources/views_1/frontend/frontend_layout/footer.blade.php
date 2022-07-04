 <!-- Start of Footer -->
<style>
    @media (max-width:600px){
        .footer-top  .row>*{
            width: 50% !important;
        }
    }
</style>
 <footer class="footer appear-animate" data-animation-options="{
    'name': 'fadeIn'
}">
@if(Config::get('app.locale') == 'en')
    <div class="footer-newsletter bg-primary">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="text-white icon-box icon-box-side">
                        <div class="icon-box-icon d-inline-flex">
                            <i class="w-icon-headphone"></i>
                        </div>
                        <div class="icon-box-content">
                            <h4 class="text-white icon-box-title text-uppercase font-weight-bold">We're Always Here To Help
                            </h4>
                            <p class="text-white">Reach out to us through any of these support channels
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-4 col-xl-3 col-lg-3 col-md-9 mt-lg-0 ">
                    <div class="text-white icon-box icon-box-side">
                        <div class="icon-box-icon d-inline-flex">
                            <i class=" w-icon-envelop2 " style="font-size: 20px"></i>
                        </div>
                        <div class="icon-box-content">
                            <h4 class="text-white icon-box-title text-uppercase font-weight-bold">Help Center
                            </h4>
                            <p class="text-white">email.help@itajer.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-4 col-xl-3 col-lg-3col-md-9 mt-lg-0 ">
                    <div class="text-white icon-box icon-box-side">
                        <div class="icon-box-icon d-inline-flex">
                            <i class=" w-icon-user" style="font-size: 20px"></i>
                        </div>
                        <div class="icon-box-content">
                            <h4 class="text-white icon-box-title text-uppercase font-weight-bold">Email For Help
                            </h4>
                            <p class="text-white">Email.support@itajer.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="footer-newsletter bg-primary">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="text-white icon-box icon-box-side">
                        <div class="icon-box-icon d-inline-flex">
                            <i class="w-icon-headphone"></i>
                        </div>
                        <div class="icon-box-content">
                            <h4 class="text-white icon-box-title text-uppercase font-weight-bold">متواجدين دائمًا لمساعدتك
                            </h4>
                            <p class="text-white">تواصل معنا من خلال أي من قنوات الدعم التالية:
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-4 col-xl-3 col-lg-3 col-md-9 mt-lg-0 ">
                    <div class="text-white icon-box icon-box-side">
                        <div class="icon-box-icon d-inline-flex">
                            <i class=" w-icon-envelop2 " style="font-size: 20px"></i>
                        </div>
                        <div class="icon-box-content">
                            <h4 class="text-white icon-box-title text-uppercase font-weight-bold">مركز المساعدة
                            </h4>
                            <p class="text-white">email.help@itajer.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-4 col-xl-3 col-lg-3col-md-9 mt-lg-0 ">
                    <div class="text-white icon-box icon-box-side">
                        <div class="icon-box-icon d-inline-flex">
                            <i class=" w-icon-user" style="font-size: 20px"></i>
                        </div>
                        <div class="icon-box-content">
                            <h4 class="text-white icon-box-title text-uppercase font-weight-bold">الدعم عبر الإيميل
                            </h4>
                            <p class="text-white">Email.support@itajer.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
    @if(Config::get('app.locale') == 'en')
    <div class="container">
        <div class="footer-top">
            <div class="row" >
                @php
                $categories = \App\Models\category::where('is_parent',0)->where('status',1)->take(6)->get();
                @endphp
                @foreach($categories as $category )
                @php
                $sub_cat = \App\Models\category::where('parent_id',$category->id)->where('status',1)->take(8)->get();
                @endphp
                @if(count($sub_cat) > 0)
                <div class="col-lg-2 col-sm-6 col-xs-6">
                    <div class="widget">
                        <h3 class="widget-title">{{$category->title}} </h3>
                        <ul class="widget-body">
                            @if(count($sub_cat) > 0 )
                            @foreach ($sub_cat as $single_cat )
                            <li><a href="{{route('shop_child_cat',$single_cat->slug)}}">{{$single_cat->title}}</a></li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        <div class="footer-middle">
            <div class="widget widget-category">
                <div class="category-box w-100">
                    <h6 class="category-name">OTHER PAGES : </h6>
                    <a href="{{ route('aboutus') }}">About Us</a>
                    <a href="{{ route('refund_can') }}"> Refund & cancellation Policy</a>
                    <a href="{{ route('policy') }}">Privacy Policy</a>
                    <a href="{{ route('terms_condations') }}">Terms & Conditions</a>
                    <a href="{{ route('datascurity') }}">Data Security</a>
                    <a href="{{ route('DISCLAIMER') }}">DISCLAIMER</a>
                    <a href="#">Contact us</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-left">
                <p class="copyright">Copyright © 2022 ITAJER Store. All Rights Reserved.</p>
            </div>
            <div class="footer-right">
                <span class="payment-label mr-lg-8">We're using safe payment for</span>
                <figure class="payment">
                    <img src="{{ asset('front-style/assets/images/payment.png') }}" alt="payment" width="159" height="25" />
                </figure>
            </div>
        </div>
    </div>

    @else
    <div class="container">
        <div class="footer-top">
            <div class="row">
                @php
                $categories = \App\Models\category::where('is_parent',0)->where('status',1)->take(6)->get();
                @endphp
                @foreach($categories as $category )
                @php
                $sub_cat = \App\Models\category::where('parent_id',$category->id)->where('status',1)->take(8)->get();
                @endphp
                @if(count($sub_cat) > 0)
                <div class="col-lg-2 col-sm-6 col-xs-6">
                    <div class="widget">
                        <h3 class="widget-title">{{$category->ar_title}} </h3>
                        <ul class="widget-body">
                            @if(count($sub_cat) > 0 )
                            @foreach ($sub_cat as $single_cat )
                            <li><a href="{{route('shop_child_cat',$single_cat->slug)}}">{{$single_cat->ar_title}}</a></li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        <div class="footer-middle">
            <div class="widget widget-category">
                <div class="category-box w-100">
                    <h6 class="category-name">صفحات أخرى : </h6>
                    <a href="{{ route('aboutus') }}">نبذة عنا</a>
                    <a href="{{ route('refund_can') }}">سياسة رد الأموال والإلغاء</a>
                    <a href="{{ route('policy') }}">سياسة الخصوصية</a>
                    <a href="{{ route('terms_condations') }}">البنود والشروط</a>
                    <a href="{{ route('datascurity') }}">أمان البيانات</a>
                    <a href="{{ route('DISCLAIMER') }}">إخلاء المسؤولية</a>
                    <a href="#">اتصل بنا</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-left">
                <p class="copyright">الحقوق © 2022 اي تاجر. جميع الحقوق محفوظة.</p>
            </div>
            <div class="footer-right">
                <span class="payment-label mr-lg-8">جميع طرق الدفع محمية</span>
                <figure class="payment">
                    <img src="{{ asset('front-style/assets/images/payment.png') }}" alt="payment" width="159" height="25" />
                </figure>
            </div>
        </div>
    </div>

    @endif
</footer>
<!-- End of Footer -->