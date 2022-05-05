<!DOCTYPE html>
<html class="loading" lang="{{ Config::get('app.locale') }}"
@if (Config::get('app.locale') == 'en')
data-textdirection="ltr"
@else
data-textdirection="rtl"
@endif >
@if (Config::get('app.locale') == 'en')
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
        content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    {{--  <meta name="csrf-token" content="{{ csrf_token() }}">  --}}
    <title>ADMAIN PANEL</title>
    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/favicon.ico') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/vendors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/weather-icons/climacons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/jquery.toolbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/meteocons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/chartist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/chartist-plugin-tooltip.css') }}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/app.css') }}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu-modern.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/simple-line-icons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/timeline.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/dashboard-ecommerce.css') }}">
        <!-- include summernote css/js -->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/editors/summernote.css') }}">


    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- END Custom CSS-->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
     alpha/css/bootstrap.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @yield('style')

</head>
@else
<head>
<link rel="apple-touch-icon" href="{{asset('app-assets/images/ico/apple-icon-120.png')}}">
<link rel="shortcut icon" type="image/x-icon" href="{{asset('app-assets/images/ico/favicon.ico')}}">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
rel="stylesheet">
<link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
rel="stylesheet">
<!-- BEGIN VENDOR CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/vendors.css')}}">
<!-- END VENDOR CSS-->
<!-- BEGIN MODERN CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/custom-rtl.css')}}">
<!-- END MODERN CSS-->
<!-- BEGIN Page Level CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/core/colors/palette-gradient.css')}}">
    <!-- include summernote css/js -->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/editors/summernote.css') }}">


<!-- END Page Level CSS-->
<!-- BEGIN Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style-rtl.css')}}">
<!-- END Custom CSS-->
</head>
@endif
<body class="@if (Config::get('app.locale') == 'ar') ar @else en @endif vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu-modern" data-col="2-columns">
    <!-- fixed-top-->
    @php
        $current_user = \App\Models\Seller::where('id',Auth::guard('seller')->user()->id)->first();
    @endphp
    @if ($current_user->is_verify == 0)
    @include('Seller.seller_layoute.unsubscribeSeller')
    @else 
    @include('Seller/seller_layoute.header')
    @include('Seller/seller_layoute.left_sidebar')
    @yield('content')
    @endif



    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
            <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2021 <a
                    class="text-bold-800 grey darken-2"
                    href="https://9yards.ae" target="_blank">9Yards Team
                </a>, All rights reserved. </span>
            <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i
                    class="ft-heart pink"></i></span>
        </p>
    </footer>
     <script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
    toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
    toastr.warning("{{ session('warning') }}");
  @endif
</script>
    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('app-assets/vendors/js/charts/chartist.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/vendors/js/charts/raphael-min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/vendors/js/charts/morris.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/vendors/js/timeline/horizontal-timeline.js') }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/jquery.toolbar.min.js') }}" type="text/javascript"></script>

    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="{{ asset('app-assets/js/core/app-menu.js') }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/js/core/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/js/scripts/customizer.js') }}" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('app-assets/js/scripts/pages/dashboard-ecommerce.js') }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/js/scripts/editors/editor-summernote.js') }}" type="text/javascript">
    </script>  
    <script src="{{ asset('app-assets/vendors/js/editors/summernote/summernote.js') }}" type="text/javascript"></script>
    @yield('script')
    <script>
        $(document).ready(function() {
               $('#summernote').summernote();
               $('#summernote1').summernote();
               $('#summernote2').summernote();
               $('#summernote3').summernote();
               $('#summernote4').summernote();
               $('#summernote_ar').summernote();
               $('#summernote_ar1').summernote();
               $('#summernote_ar2').summernote();
               $('#summernote_ar3').summernote();
               $('#summernote_ar4').summernote();
             });
     </script>






