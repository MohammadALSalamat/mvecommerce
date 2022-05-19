@extends('frontend.frontend_layout.main_desgin')
@section('mytitle','Login Page' )
@section('style')
@if(Config::get('app.locale') == 'en')

<link rel="stylesheet" type="text/css" href="{{ asset('front-style/assets/css/style.min.css') }}">

@else
<link rel="stylesheet" type="text/css" href="{{ asset('front-style/assets/css/style-rtl.min.css') }}">

@endif
@endsection
@section('content')
@if(Config::get('app.locale') == 'en')
<!-- Start of Main -->
<main class="main login-page">
    <!-- Start of Page Header -->
    <div class="page-header">
        <div class="container">
            <h1 class="mb-0 page-title">My Account</h1>
        </div>
    </div>
    <!-- End of Page Header -->

    <!-- Start of Breadcrumb -->
    @include('frontend.frontend_layout._breadcrumb')

    <!-- End of Breadcrumb -->
    <div class="page-content">
        <div class="container">
            <div class="login-popup">
                <div class="tab tab-nav-boxed tab-nav-center tab-nav-underline">
                    <ul class="nav nav-tabs text-uppercase" role="tablist">
                        <li class="nav-item">
                            <a href="#sign-in" class="nav-link active">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a href="#sign-up" class="nav-link">Sign Up</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="sign-in">
                            <form method="POST" action="{{ route('submitlogin') }}">
                                @csrf

                                <div class="form-group">
                                    <label>Username or email address *</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror </div>
                                <div class="mb-0 form-group">
                                    <label>Password *</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror </div>
                                <div class="form-checkbox d-flex align-items-center">
                                    <input class="form-check-input mr-2" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember1">Remember me</label>
                                </div>
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" style="text-align:right;" href="{{ route('password.request') }}">
                                    Lost your password ?
                                </a>
                                @endif
                                <button type="submit" class="btn btn-dangar"
                                    style="background: red;color:#fff;width:50%">Log In </button>
                            </form>
                        </div>
                        <div class="tab-pane" id="sign-up">
                            <form action="{{ route('registerusers') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Full Name *</label>
                                    <input type="text" class="form-control" name="full_name" id="first-name">
                                </div>
                                <div class="mb-5 form-group">
                                    <label>Your email address *</label>
                                    <input type="email" class="form-control" name="email" id="email_1">
                                </div>
                                <div class="mb-5 form-group">
                                    <label>Password *</label>
                                    <input type="password" class="form-control" name="password" id="password_1">
                                </div>
                                {{-- <div class="checkbox-content login-vendor">
                                     <div class="mb-5 form-group">
                                        <label for="seeAnotherField">What is the type of your work </label>
                                        <select class="form-control" id="seeAnotherField" name="type_work">
                                            <option value="personal">Personal</option>
                                            <option value="mall">Mall</option>
                                            <option value="home">Home</option>
                                        </select>
                                    </div>
                                    <div class="mb-5 form-group">
                                        <label>User Name *</label>
                                        <input type="text" class="form-control" name="username" id="first-name">
                                    </div>
                                    <div class="mb-5 form-group">
                                        <label>Shop Name *</label>
                                        <input type="text" class="form-control" name="shop-name" id="shop-name">
                                    </div>

                                    <div class="mb-5 form-group">
                                        <label>Phone Number *</label>
                                        <input type="text" class="form-control" name="phone-number" id="phone-number">
                                    </div>
                                   
                                    <div class="form-group" id="mall_license">
                                        <label for="seeAnotherField">Uploade Your License </label>
                                        <input type="file" accept="application/pdf" name="vendor-mall" class="form-control" id="license" name="mall_license">
                                    </div>
                                     <div class="form-group" id="home_passport">
                                        <label for="seeAnotherField">Uploade Your Passport </label>
                                        <input type="file" accept="application/pdf" name="vendor-home" class="form-control" id="passport" name="home_passport">
                                        <small style="color: red">if you dont have a license upload your passport</small>
                                    </div>
                                </div> --}}
                                <div class="mt-0 form-checkbox user-checkbox">
                                    <input type="radio" class="custom-checkbox checkbox-round active" id="check-customer"
                                        name="check-customer" checked = "true">
                                    <label for="check-customer" class="mb-1 check-customer">I am a customer</label>
                                    <br>
                                    {{-- <input type="radio" class="custom-checkbox checkbox-round" id="check-seller"
                                        name="check-seller">
                                    <label for="check-seller" class="check-seller">I am a vendor</label> --}}
                                </div>
                                <p>Your personal data will be used to support your experience
                                    throughout this website, to manage access to your account,
                                    and for other purposes described in our <a href="#" class="text-primary">privacy
                                        policy</a>.</p>
                                <div class="mb-5 form-checkbox d-flex align-items-center justify-content-between">
                                    <input type="checkbox" class="custom-checkbox" id="remember" name="remember"
                                        required="">
                                    <label for="remember" class="font-size-md">I agree to the <a href="#"
                                            class="text-primary font-size-md">privacy policy</a></label>
                                </div>
                                <button type="submit" class="mx-auto btn btn-dangar"
                                    style="background: red;color:#fff;width:50%"> Register </button>
                            </form>
                        </div>
                    </div>
                    {{-- <p class="text-center">Sign in with social account</p>
                    <div class="social-icons social-icon-border-color d-flex justify-content-center">
                        <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                        <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                        <a href="#" class="social-icon social-google fab fa-google"></a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End of Main -->

@else
<!-- Start of Main -->
<main class="main login-page">
    <!-- Start of Page Header -->
    <div class="page-header">
        <div class="container">
            <h1 class="mb-0 page-title">نسجيل الدخول</h1>
        </div>
    </div>
    <!-- End of Page Header -->

    <!-- Start of Breadcrumb -->
    <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ route('homepage') }}">الرئيسية</a></li>
                <li>حسابي</li>
            </ul>
        </div>
    </nav>
    <!-- End of Breadcrumb -->
    <div class="page-content">
        <div class="container">
            <div class="login-popup">
                <div class="tab tab-nav-boxed tab-nav-center tab-nav-underline">
                    <ul class="nav nav-tabs text-uppercase" role="tablist">
                        <li class="nav-item">
                            <a href="#sign-in" class="nav-link active">تسجيل الدخول</a>
                        </li>
                        <li class="nav-item">
                            <a href="#sign-up" class="nav-link">تسجيل حساب جديد</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="sign-in">
                            <form method="POST" action="{{ route('submitlogin') }}">
                                @csrf

                                <div class="form-group">
                                    <label>أدخل البريد اﻷلكتروني *</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror </div>
                                <div class="mb-0 form-group">
                                    <label>كلمة السر *</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror </div>
                                <div class="form-checkbox d-flex align-items-center">
                                    <input class="form-check-input mr-2" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember1">تذكرني</label>
                                </div>
                                @if (Route::has('password.request'))
                                <a class="btn btn-link " style="text-align:right;" href="{{ route('password.request') }}">
                                    هل نسيت كلمة السر؟
                                </a>
                                @endif

                                <button type="submit" class="btn btn-dangar"
                                    style="background: red;color:#fff;width:50%">تسجيل الدخول  </button>
                            </form>
                        </div>
                        <div class="tab-pane" id="sign-up">
                            <form action="{{ route('registerusers') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>اﻷسم الكامل *</label>
                                    <input type="text" class="form-control" name="full_name" id="first-name">
                                </div>
                                <div class="mb-5 form-group">
                                    <label>البريد اﻷلكتروني *</label>
                                    <input type="email" class="form-control" name="email" id="email_1">
                                </div>
                                <div class="mb-5 form-group">
                                    <label>كلمة السر *</label>
                                    <input type="password" class="form-control" name="password" id="password_1">
                                </div>
                                
                                <div class="mt-0 form-checkbox user-checkbox">
                                    <input type="radio" class="custom-checkbox checkbox-round active" id="check-customer"
                                        name="check-customer" checked>
                                    <label for="check-customer" class="mb-1 check-customer">تسجيل كمستخدم </label>
                                </div>
                                <p>
                                    سيتم استخدام بياناتك الشخصية لدعم تجربتك في جميع أنحاء هذا الموقع ، وإدارة الوصول إلى حسابك ، ولأغراض أخرى موصوفة في موقعنا<a href="#" class="text-primary">خصوصية الشركة</a>.</p>
                                <div class="mb-5 form-checkbox d-flex align-items-center justify-content-between">
                                    <input type="checkbox" class="custom-checkbox" id="remember" name="remember"
                                        required="">
                                    <label for="remember" class="font-size-md">أنا أوافق على <a href="#"
                                            class="text-primary font-size-md">خصوصية الشركة</a></label>
                                </div>
                                <button type="submit" class="mx-auto btn btn-dangar"
                                    style="background: red;color:#fff;width:50%"> تسجيل الدخول </button>
                            </form>
                        </div>
                    </div>
                    {{-- <p class="text-center">Sign in with social account</p>
                    <div class="social-icons social-icon-border-color d-flex justify-content-center">
                        <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                        <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                        <a href="#" class="social-icon social-google fab fa-google"></a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End of Main -->
@endif
@endsection

@section('script')
<script src="{{ asset('front-style/assets/js/main.min.js') }}"></script>
<script>
    $("#seeAnotherField").change(function() {
        if ($(this).val() == "mall") {
            $('#mall_license').show();
            $('#license').attr('required', '');
            $('#license').attr('data-error', 'This field is required.');
            $('#home_passport').hide();
            $('#passport').removeAttr('required');
            $('#passport').removeAttr('data-error');
        } else if ($(this).val() == "home"){
            $('#mall_license').hide();
            $('#license').removeAttr('required');
            $('#license').removeAttr('data-error');
            $('#home_passport').show();
            $('#passport').attr('required', '');
            $('#passport').attr('data-error', 'This field is required.');
        }else{
             $('#mall_license').hide();
            $('#license').removeAttr('required');
            $('#license').removeAttr('data-error');
              $('#home_passport').hide();
            $('#passport').removeAttr('required');
            $('#passport').removeAttr('data-error');
        }
    });
    $("#seeAnotherField").trigger("change");
</script>

@endsection