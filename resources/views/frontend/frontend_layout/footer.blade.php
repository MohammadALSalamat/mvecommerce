 <!-- Start of Footer -->
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
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-xs-6">
                    <div class="widget widget-about">
                        <a href="demo1.html" class="logo-footer">
                            <img src="{{ asset('front-style/assets/images/itajer_logo.png') }}" alt="logo-footer" width="144"
                                height="45" />
                        </a>
                        <div class="widget-body">
                            <p class="widget-about-title">Got Question? Call us 24/7</p>
                            <a href="tel:18005707777" class="widget-about-call">1-800-570-7777</a>
                            <p class="widget-about-desc">Register now to get updates on pronot get up icons
                                & coupons ster now toon.
                            </p>
                            <div class="social-icons social-icons-colored">
                                <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                                <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <div class="widget">
                        <h3 class="widget-title">Company</h3>
                        <ul class="widget-body">
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="#">Team Member</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li><a href="#">Affilate</a></li>
                            <li><a href="#">Order History</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <div class="widget">
                        <h4 class="widget-title">My Account</h4>
                        <ul class="widget-body">
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="cart.html">View Cart</a></li>
                            <li><a href="login.html">Sign In</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="wishlist.html">My Wishlist</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <div class="widget">
                        <h4 class="widget-title">Customer Service</h4>
                        <ul class="widget-body">
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Money-back guarantee!</a></li>
                            <li><a href="#">Product Returns</a></li>
                            <li><a href="#">Support Center</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Term and Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle">
            <div class="widget widget-category">
                @php
                $categories = \App\Models\category::where('is_parent',0)->where('status',1)->get();
                @endphp
                @foreach($categories as $category )
                @php
                 $sub_cat = \App\Models\category::where('parent_id',$category->id)->where('status',1)->get();
                @endphp
                @if(count($sub_cat) > 0)
                <div class="category-box w-100">
                    <h6 class="category-name">{{$category->title}} : </h6>
                     @if(count($sub_cat) > 0 )
                     @foreach ($sub_cat as $single_cat )
                    <a href="#">{{$single_cat->title}}</a>
                    @endforeach
                     @endif
                </div>
                @endif
                @endforeach
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
                <div class="col-lg-4 col-sm-6 col-xs-6">
                    <div class="widget widget-about">
                        <a href="demo1.html" class="logo-footer">
                            <img src="{{ asset('front-style/assets/images/itajer_logo.png') }}" alt="logo-footer" width="144"
                                height="45" />
                        </a>
                        <div class="widget-body">
                            <p class="widget-about-title">Got Question? Call us 24/7</p>
                            <a href="tel:18005707777" class="widget-about-call">1-800-570-7777</a>
                            <p class="widget-about-desc">Register now to get updates on pronot get up icons
                                & coupons ster now toon.
                            </p>
                            <div class="social-icons social-icons-colored">
                                <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                                <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <div class="widget">
                        <h3 class="widget-title">Company</h3>
                        <ul class="widget-body">
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="#">Team Member</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li><a href="#">Affilate</a></li>
                            <li><a href="#">Order History</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <div class="widget">
                        <h4 class="widget-title">My Account</h4>
                        <ul class="widget-body">
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="cart.html">View Cart</a></li>
                            <li><a href="login.html">Sign In</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="wishlist.html">My Wishlist</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <div class="widget">
                        <h4 class="widget-title">Customer Service</h4>
                        <ul class="widget-body">
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Money-back guarantee!</a></li>
                            <li><a href="#">Product Returns</a></li>
                            <li><a href="#">Support Center</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Term and Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle">
            <div class="widget widget-category">
                @php
                $categories = \App\Models\category::where('is_parent',0)->where('status',1)->get();
                @endphp
                @foreach($categories as $category )
                @php
                 $sub_cat = \App\Models\category::where('parent_id',$category->id)->where('status',1)->get();
                @endphp
                @if(count($sub_cat) > 0)
                <div class="category-box w-100">
                    <h6 class="category-name">{{$category->title}} : </h6>
                     @if(count($sub_cat) > 0 )
                     @foreach ($sub_cat as $single_cat )
                    <a href="#">{{$single_cat->title}}</a>
                    @endforeach
                     @endif
                </div>
                @endif
                @endforeach
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