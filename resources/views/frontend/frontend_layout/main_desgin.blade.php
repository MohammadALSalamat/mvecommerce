<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ITajer | @yield('mytitle')</title>
    
    <meta name="author" content="ITAJER SHOP">

    {!! SEOMeta::generate() !!}

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('front-style/assets/images/icons/itajerfavicon.png')}}">
    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: {
                families: ['Poppins:400,500,600,700,800']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = "{{ asset('front-style/assets/js/webfont.js')}}";
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <link rel="preload" href="{{ asset('front-style/assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2')}}"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{ asset('front-style/assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2')}}"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{ asset('front-style/assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2')}}"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{ asset('front-style/assets/fonts/wolmart.woff?png09e" as="font" type="font/woff')}}"
        crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('front-style/assets/vendor/fontawesome-free/css/all.min.css')}}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('front-style/assets/vendor/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-style/assets/vendor/animate/animate.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('front-style/assets/vendor/magnific-popup/magnific-popup.min.css')}}">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="{{ asset('front-style/assets/vendor/swiper/swiper-bundle.min.css')}}">

    <!-- Default CSS -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

    @if(Config::get('app.locale') == 'en')
    <link rel="stylesheet" type="text/css" href="{{ asset('front-style/assets/css/demo1.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-style/assets/css/style.min.css')}}">
    <style>
        #ui-id-1{
        left: 264px !important;
        width: 554.656px !important;
        }
    </style>
    @else
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&family=Noto+Naskh+Arabic:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-style/assets/css/style-rtl.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-style/assets/css/demo-rtl.min.css')}}">
    <style>
        #ui-id-1{
            left: 418px !important;
        width: 554.656px !important;
        }
    </style>
    @endif
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @yield('style')

    <style>
        .category-section img{
            width: 70% !important;
            border: 1px solid red;
            border-radius: 50% 50% 0px 0px;
        }
        @media (min-width:451px) AND (max-width:578px){
            .category-section img{
            width: 50% !important;
        }
        }
        @media (min-width:360px) AND (max-width:450px) {
            .category-section img{
            width: 70% !important;
        }
        }
        @media (max-width:360px) {
            .category-section img{
            width: 80% !important;
        }
        }
        @media (min-width:580px) AND (max-width:1024px) {
            .category-section img{
            width: 90% !important;
        }
        }
    </style>

</head>

<body class="home my-account @if(Config::get('app.locale') == 'ar') ar @endif " @if(Config::get('app.locale') == 'en') @else dir="rtl" @endif>
    <div class="page-wrapper">
        <!-- Start of Header -->
        <header class="header" id="header-ajax">
        @include('frontend.frontend_layout.header')
        </header>
        @yield('content')
        
        @include('frontend.frontend_layout.footer')

    </div>
    <!-- End of Page-wrapper-->
   
    {{-- @include('frontend.frontend_layout.mobile_sections.sticky_footer') --}}

    <!-- Start of Scroll Top -->
    <a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i> <svg
            version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
            <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35"
                r="34" style="stroke-dasharray: 16.4198, 400;"></circle>
        </svg> </a>
    <!-- End of Scroll Top -->

    <!-- Start of Mobile Menu -->
    @include('frontend.frontend_layout.mobile_sections.mobile_menu')
    <!-- End of Mobile Menu -->

    <!-- Start of Newsletter popup -->
    {{-- <div class="newsletter-popup mfp-hide">
        <div class="newsletter-content">
            <h4 class="text-uppercase font-weight-normal ls-25">Get Up to<span class="text-primary">25% Off</span></h4>
            <h2 class="ls-25">Sign up to Wolmart</h2>
            <p class="text-light ls-10">Subscribe to the Wolmart market newsletter to
                receive updates on special offers.</p>
            <form action="#" method="get" class="input-wrapper input-wrapper-inline input-wrapper-round">
                <input type="email" class="form-control email font-size-md" name="email" id="email2"
                    placeholder="Your email address" required="">
                <button class="btn btn-dark" type="submit">SUBMIT</button>
            </form>
            <div class="form-checkbox d-flex align-items-center">
                <input type="checkbox" class="custom-checkbox" id="hide-newsletter-popup" name="hide-newsletter-popup"
                    required="">
                <label for="hide-newsletter-popup" class="font-size-sm text-light">Don't show this popup again.</label>
            </div>
        </div>
    </div> --}}
    <!-- End of Newsletter popup -->

   
    <script>
        @if(Session::has('message'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('message') }}");
        @endif
        @if(Session::has('error'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("{{ session('error') }}");
        @endif
        @if(Session::has('info'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("{{ session('info') }}");
        @endif
        @if(Session::has('warning'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.warning("{{ session('warning') }}");
        @endif
    </script>
    <script src="{{ asset('front-style/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('front-style/assets/vendor/jquery.plugin/jquery.plugin.min.js')}}"></script>
    <script src="{{ asset('front-style/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('front-style/assets/vendor/jquery.countdown/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset('front-style/assets/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('front-style/assets/vendor/skrollr/skrollr.min.js')}}"></script>
    <script src="{{ asset('front-style/assets/vendor/zoom/jquery.zoom.js') }}"></script> 
    <script src="{{ asset('front-style/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Auto Complate search for products -->
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    <script>
        $(document).ready(function () {
            var autosearchPath = "{{ route('autosearch') }}";
            $('#search_text').autocomplete({
            source: function(request,resonse){
            $.ajax({
                url: autosearchPath,
                data:{
                    term:request.term,
                },
                dataType: "JSON",
                success: function (data) {
                    resonse(data);
                },
            });
          },
          minLength:1,
        }); 
        });
    </script>
    <!-- Main JS -->
    <script src="{{ asset('front-style/assets/js/main.min.js')}}"></script>
    @yield('script')
    <!-- add to cart ajax -->
    <script>
        $(document).on('click', '.add-to-cart', function(e) {
            e.preventDefault();
            // get the data from products
            var product_id = $(this).data('product-id');
            var product_quant = $(this).data('quantity');
            // start sending info using ajax
            var token = "{{ csrf_token() }}";
            var path = "{{ route('add_to_cart') }}";
            $.ajax({
                url: path,
                type: "POST",
                dataType: "JSON",
                data: {
                    product_id: product_id,
                    product_quant: product_quant,
                    _token: token,
                },
                success: function(data) {
                    $('body #header-ajax').html(data['header']);
                }
            });
        });
    </script>
    <!-- delete the items from the cart on the header -->
    <script>
        $(document).on('click', '.cart_delete', function(e) {
            e.preventDefault();
            // get the data from products
            var cart_id = $(this).data('id');
            // start sending info using ajax
            var token = "{{ csrf_token() }}";
            var path = "{{ route('cart_delete') }}";
            $.ajax({
                url: path,
                type: "POST",
                dataType: "JSON",
                data: {
                    cart_id: cart_id,
                    _token: token,
                },
                success: function(data) {
                    $('body #header-ajax').html(data['header']);
                    $('body #cart_lists').html(data['cart_lists']);
                }
            });
        });
    </script>

    <!-- add to wishlist -->
    <script>
        $(document).on('click', '.add_to_wishlist', function(e) {
            e.preventDefault();
            // get the data from products
            var product_id = $(this).data('id');
            var product_quant = $(this).data('quantity');
            // start sending info using ajax
            var token = "{{ csrf_token() }}";
            var path = "{{ route('add_to_wishlist') }}";
            $.ajax({
                url: path,
                type: "POST",
                dataType: "JSON",
                data: {
                    product_id: product_id,
                    product_quant: product_quant,
                    _token: token,
                },
                success: function(data) {
                    $('body #header-ajax').html(data['header']);
                    $('body #wishlist_counter').html(data['wishlist_count']);
                }
            });
        });
    </script>
</body>

</html>