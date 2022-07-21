@extends('frontend.frontend_layout.main_desgin')
 @if(Config::get('app.locale') == 'en')
@section('mytitle','Login Form')
@else
@section('mytitle','تسجيل دخول ')
@endif
@section('style')
<style>
    .danger,
    .text-danger {
        color: red;
        margin-top: 6px;
        font-size: 12px;
    }

    .text-success {
        margin-top: 6px;
        font-size: 12px;
        color: green;
    }

    .glyphicon-remove {
        color: red;

    }

    .nextdisable {
        pointer-events: none;

    }

    .glyphicon-ok {
        color: green;
    }
</style>
@if(Config::get('app.locale') == 'en')

<link rel="stylesheet" type="text/css" href="{{ asset('front-style/assets/css/style.min.css') }}">

@else
<link rel="stylesheet" type="text/css" href="{{ asset('front-style/assets/css/style-rtl.min.css') }}">

@endif
@endsection
@section('content')
@if(Config::get('app.locale') == 'en')
<!-- Start of Main -->
<main class="main login-page container">
    <!-- Start of Page Header -->
    <div class="page-header" style="background:url('/storage/photos/1/Artboard 1 copy-100.jpg');background-size:cover">
        <div class="container">
            <h1 class="mb-0 page-title text-white">My Account</h1>
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
                                         <input type="checkbox" style="margin-top:10px;font-size:13px;color:#000;margin-right:5px" onclick="myFunctiontwo()">    Click here to see the Password
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
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
                                {{-- @if (Route::has('password.request'))
                                <a class="btn btn-link" style="text-align:right;"
                                    href="{{ route('password.request') }}">
                                    Lost your password ?
                                </a>
                                @endif --}}
                                <button type="submit" class="btn btn-dangar"
                                    style="background: red;color:#fff;width:50%">Log In </button>
                            </form>
                        </div>
                        <div class="tab-pane" id="sign-up">
                            <form action="{{ route('registerusers') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Full Name *</label>
                                    <input type="text" class="form-control" name="full_name" id="first-name" required>
                                </div>
                                <div class="mb-5 form-group">
                                    <label>Your email address *</label>
                                    <input type="email" class="form-control" name="email" id="email_user" required>
                                </div>
                                <div class="mb-5 form-group">
                                    <label>Password *</label>
                                    <input type="password" class="form-control" name="password" id="password_user"
                                        required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{7,}"
                                        title="Must contain at least one number and one uppercase and lowercase letter, and at least 7 or more characters">
                                        <input type="checkbox" style="margin-top:10px;font-size:13px;color:#000;margin-right:5px" onclick="myFunction()">    Click here to see the Password
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                </div>
                                <span style="color: #000;margin-bottom:10px!important"> RULES TO VALDIATE THE PASSWORD
                                </span>
                                <div id="Length" class="glyphicon glyphicon-remove">Must be at least 7 charcters</div>
                                <div id="UpperCase" class="glyphicon glyphicon-remove">Must have atleast 1 upper case
                                    character</div>
                                <div id="LowerCase" class="glyphicon glyphicon-remove">Must have atleast 1 lower case
                                    character</div>
                                <div id="Numbers" class="glyphicon glyphicon-remove">Must have atleast 1 numeric
                                    character</div>
                                <div id="Symbols" class="glyphicon glyphicon-remove">Must have atleast 1 special
                                    character</div>

                        <div class="mt-0 form-checkbox user-checkbox">
                            <input type="radio" class="custom-checkbox checkbox-round active" id="check-customer"
                                name="check-customer" checked="true">
                            <label for="check-customer" class="mb-1 check-customer">I am a customer</label>
                            <br>
                            {{-- <input type="radio" class="custom-checkbox checkbox-round" id="check-seller"
                                        name="check-seller">
                                    <label for="check-seller" class="check-seller">I am a vendor</label> --}}
                        </div>
                        <p>Your personal data will be used to support your experience
                            throughout this website, to manage access to your account,
                            and for other purposes described in our <a href="{{ route('policy') }}"
                                class="text-primary">privacy
                                policy</a>.</p>
                        <div class="mb-5 form-checkbox d-flex align-items-center justify-content-between">
                            <input type="checkbox" class="custom-checkbox" id="remember" name="remember" required="">
                            <label for="remember" class="font-size-md">I agree to the <a href="{{ route('policy') }}"
                                    class="text-primary font-size-md">privacy policy</a></label>
                        </div>
                        <button type="submit" class="mx-auto btn btn-dangar"
                            style="background: red;color:#fff;width:50%"> Register </button>
                        </form>
                    </div>
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
                                        <input type="checkbox" style="margin-top:10px;font-size:13px;color:#000;margin-right:5px" onclick="myFunctiontwo()">أضغط هنا لرؤية كلمة السر

                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
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
                                

                                <button type="submit" class="btn btn-dangar"
                                    style="background: red;color:#fff;width:50%">تسجيل الدخول </button>
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
                                    <input type="password" class="form-control" name="password" id="password_user"
                                        required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{7,}"
                                        title="يجب أن يحتوي على رقم واحد على الأقل وحرف واحد كبير وصغير ، و 7 أحرف على الأقل أو أكثر">
                                        <input type="checkbox" style="margin-top:10px;font-size:13px;color:#000;margin-right:5px" onclick="myFunction()">أضغط هنا لرؤية كلمة السر

                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                </div>
                                <span style="color: #000;margin-bottom:10px!important"> قواعد التحقق من كلمة المرور
                                </span>
                                <div id="Length" class="glyphicon glyphicon-remove">يجب على الاقل ان يكون 7 حروف</div>
                                <div id="UpperCase" class="glyphicon glyphicon-remove">يجب أن يحتوي على حرف واحد كبير على الأقل</div>
                                <div id="LowerCase" class="glyphicon glyphicon-remove">يجب أن يحتوي على حرف واحد صغير على الأقل</div>
                                <div id="Numbers" class="glyphicon glyphicon-remove">يجب أن يحتوي على حرف رقمي واحد على الأقل</div>
                                <div id="Symbols" class="glyphicon glyphicon-remove">يجب أن يحتوي على حرف خاص واحد على الأقل</div>

                                <div class="mt-0 form-checkbox user-checkbox">
                                    <input type="radio" class="custom-checkbox checkbox-round active"
                                        id="check-customer" name="check-customer" checked>
                                    <label for="check-customer" class="mb-1 check-customer">تسجيل كمستخدم </label>
                                </div>
                                <p>
                                    سيتم استخدام بياناتك الشخصية لدعم تجربتك في جميع أنحاء هذا الموقع ، وإدارة الوصول
                                    إلى حسابك ، ولأغراض أخرى موصوفة في موقعنا<a href="{{ route('policy') }}" class="text-primary">خصوصية
                                        الشركة</a>.</p>
                                <div class="mb-5 form-checkbox d-flex align-items-center justify-content-between">
                                    <input type="checkbox" class="custom-checkbox" id="remember" name="remember"
                                        required="">
                                    <label for="remember" class="font-size-md">أنا أوافق على <a href="{{ route('policy') }}"
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
<script type="text/javascript">
    $(document).ready(function() {
        var startTimer;
        $('#email_user').on('keyup', function() {
            clearTimeout(startTimer);
            let email = $(this).val();
            startTimer = setTimeout(checkEmail, 500, email);
        });
        $('#email_user').on('keydown', function() {
            clearTimeout(startTimer);
        });

        function checkEmail(email) {
            $('#email-error').remove();
            if (email.length > 1) {
                $.ajax({
                    type: 'post',
                    url: "{{ route('checkEmail') }}",
                    data: {
                        email: email,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(data) {
                        if (data.success == false) {
                            $('#email_user').after(
                                '<div id="email-error" class="text-danger" <strong>' + data
                                .message[0] + '<strong></div>');
                        } else {
                            $('#email_user').after(
                                '<div id="email-error" class="text-success" <strong>' + data
                                .message + '<strong></div>');
                        }
                    }
                });
            } else {
                $('#email_user').after(
                    '<div id="email-error" class="text-danger" <strong>Email address can not be empty.<strong></div>'
                );
            }
        }
    });
</script>
<script>
    /*Actual validation function*/
    function ValidatePassword() {
        /*Array of rules and the information target*/
        var rules = [{
                Pattern: "[A-Z]",
                Target: "UpperCase"
            },
            {
                Pattern: "[a-z]",
                Target: "LowerCase"
            },
            {
                Pattern: "[0-9]",
                Target: "Numbers"
            },
            {
                Pattern: "[!@@#$%^&*]",
                Target: "Symbols"
            }
        ];
        //Just grab the password once
        var password = $(this).val();
        /*Length Check, add and remove class could be chained*/
        /*I've left them seperate here so you can see what is going on */
        /*Note the Ternary operators ? : to select the classes*/
        $("#Length").removeClass(password.length > 6 ? "glyphicon-remove" : "glyphicon-ok");
        $("#Length").addClass(password.length > 6 ? "glyphicon-ok" : "glyphicon-remove");
        /*Iterate our remaining rules. The logic is the same as for Length*/
        for (var i = 0; i < rules.length; i++) {
            $("#" + rules[i].Target).removeClass(new RegExp(rules[i].Pattern).test(password) ? "glyphicon-remove" :
                "glyphicon-ok");
            $("#" + rules[i].Target).addClass(new RegExp(rules[i].Pattern).test(password) ? "glyphicon-ok" :
                "glyphicon-remove");
        }
    }
    /*Bind our event to key up for the field. It doesn't matter if it's delete or not*/
    $(document).ready(function() {
        $("#password_user").on('keyup', ValidatePassword)
    });
</script>
<script>
    function myFunction() {
      var x = document.getElementById("password_user");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>
    <script>
    function myFunctiontwo() {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>

@endsection