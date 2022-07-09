@extends('frontend.frontend_layout.main_desgin')
 @if(Config::get('app.locale') == 'en')
@section('mytitle','Register Seller')
@else
@section('mytitle','تسجيل دخول مستثمر')
@endif

@section('style')
<!-- BEGIN Page Level CSS-->
<link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/vendors.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('app-assets/vendors/css/pickers/daterange/daterangepicker.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu-modern.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/wizard.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/pickers/daterange/daterange.css') }}">
<style>
   .danger,
   .text-danger{
    color: red;
    margin-top: 6px;
    font-size: 12px;
}
.text-success{
    margin-top: 6px;
    color:green;
    font-size: 12px;
}
.glyphicon-remove {
  color: red;
  
}
.nextdisable{
    pointer-events: none;

}

.glyphicon-ok {
  color: green;
}
</style>
@endsection
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Form wzard with step validation section start -->
            <section id="validation">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content collapse show">
                                <div class="card-body">
                                        
                                    <form action="{{ route('vendor_info') }}" method="POST"
                                        enctype="multipart/form-data" class="steps-validation wizard-notification"
                                        style="direction: ltr;">
                                        @csrf
                                        <!-- Step 1 -->
                                        @if(Config::get('app.locale') == 'en')
                                        <h6><i class="step-icon la la-user" style="font-size: 20px"></i> Seller Details
                                        </h6>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="firstName2" style="font-size: 15px">Full Name : <b
                                                                style="color: red">*</b></label>
                                                        <input type="text" name="name" class="form-control required"
                                                            id="firstName2" value="{{ old('name') }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="lastName2" style="font-size: 15px">User Name : <b
                                                                style="color: red">*</b></label>
                                                        <input type="text" name="username" class="form-control required"
                                                            id="username" value="{{ old('username') }}" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="emailAddress3" style="font-size: 15px">Email Address
                                                            : <b style="color: red">*</b></label>
                                                        <input type="email" name="email" class="form-control required"
                                                            id="email"  value="{{ old('email') }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="location2" style="font-size: 15px">Your Photo : <b
                                                                style="color: red">*</b></label>
                                                        <input type="file" accept="image/png,image/jpeg,.jpg"
                                                            name="photo" class="form-control required" id="photo" value="{{ old('photo') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phoneNumber2" style="font-size: 15px">Phone Number :
                                                            <b style="color: red">*</b></label>
                                                        <input type="tel" name="phone-number" class="form-control required"
                                                            id="phoneNumber2"  value="{{ old('phone') }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group has-feedback">
                                                        <label for="date2" style="font-size: 15px">Password : <b
                                                                style="color: red">*</b></label>
                                                        <input type="password" name="password" id="NewPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{7,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 7 or more characters"
                                                            class=" form-control required" value="{{ old('password') }}">
                                                            <input type="checkbox" style="margin-top:10px;font-size:13px;color:#000;margin-right:5px" onclick="myFunction()">Click To Show Password
                                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                </div>
                                                    <span style="color: #000;margin-bottom:10px!important"> RULES TO VALDIATE THE PASSWORD  </span>
                                                    <div id="Length" class="glyphicon glyphicon-remove">Must be at least 7 charcters</div>
                                                    <div id="UpperCase" class="glyphicon glyphicon-remove">Must have atleast 1 upper case character</div>
                                                    <div id="LowerCase" class="glyphicon glyphicon-remove">Must have atleast 1 lower case character</div>
                                                    <div id="Numbers" class="glyphicon glyphicon-remove">Must have atleast 1 numeric character</div>
                                                    <div id="Symbols" class="glyphicon glyphicon-remove">Must have atleast 1 special character</div>
                                                </div>
                                                
                                        </fieldset>
                                        <!-- Step 2 -->
                                        <h6><i class="step-icon la la-home" style="font-size: 20px"></i>Company
                                            Details</h6>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-size: 15px" for="type_of_work"> Proposal
                                                            Title :</label>
                                                        <select name="type_of_work" class="c-select form-control required"
                                                            id="type_of_work">
                                                            <option value="">Select Proposal Title : <b
                                                                    style="color: red">*</b></option>
                                                            <option value="home">Home</option>
                                                            <option value="shop">Shop</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="license" style="font-size: 15px">License : <b
                                                                style="color: red">*</b></label>
                                                        <input type="file" name="license" accept=".pdf"
                                                            class="form-control required" id="license">
                                                        <small class="pt-2 pb-2"
                                                            style="color: red; font-size:12px">NOTE:: Max Size is up to
                                                            2 MB </small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="brand" style="font-size: 15px">Your Brand Logo :
                                                        </label>
                                                        <input type="file" name="brand_logo" class="form-control required"
                                                            id="brand" accept=".png">
                                                        <small class="pt-2 pb-2"
                                                            style="color: red; font-size:12px">NOTE:: If you dont upload
                                                            your brand logo we will use ITAJER logo </small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="jobTitle2" style="font-size: 15px">Shop Name : <b
                                                                style="color: red">*</b></label>
                                                        <input type="text" name="shop-name" class="form-control required"
                                                            id="shopname">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="shortDescription2" style="font-size: 15px">Short
                                                            Description :</label>
                                                        <textarea name="shop-description" id="shortDescription2"
                                                            rows="4" class="form-control required"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- Step 3 -->
                                        <h6><i class="step-icon la la-map-marker" style="font-size: 20px"></i>Seller
                                            Location
                                        </h6>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="eventName2" style="font-size: 15px">Address Name :
                                                            <b style="color: red">*</b></label>
                                                        <input type="text" class="form-control required" name="address"
                                                            id="eventName2">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="location2" style="font-size: 15px">Country Name : <b
                                                                style="color: red">*</b></label>
                                                        <input type="text" name="country" class="form-control required"
                                                            id="country">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="eventLocation2" style="font-size: 15px">City Name :
                                                            <b style="color: red">*</b></label>
                                                        <input type="text" name="city" class="form-control required"
                                                            id="country">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- Step 4 -->
                                        <h6><i class="step-icon la la-file" style="font-size: 20px"></i>Our Policy</h6>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="checkbox" name="agreed_policy"
                                                            class=" form-checkbox form-check-inline" id="meetingName2">
                                                        <label for="meetingName2" style="font-size: 15px">Do You agree
                                                            on our policy and privcy ? <b
                                                                style="color: red">*</b></label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="seller_note" style="font-size: 15px">Seller Note
                                                            :</label>
                                                        <textarea name="seller_note" id="seller_note" rows="4"
                                                            class="form-control required"></textarea>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary mt-3 mb-3 w-25 mx-auto">
                                                    Submit</button>
                                            </div>
                                        </fieldset>
                                        @else

                                        <h6><i class="step-icon la la-user" style="font-size: 20px"></i> معلومات البائع
                                        </h6>
                                        <fieldset style="direction: rtl;text-align: right;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="firstName2" style="font-size: 15px">الاسم الكامل: <b
                                                                style="color: red">*</b></label>
                                                        <input type="text" name="name" class="form-control required"
                                                            id="firstName2">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="lastName2" style="font-size: 15px">اسم المستخدم : <b
                                                                style="color: red">*</b></label>
                                                        <input type="text" name="username" class="form-control required"
                                                            id="lastName2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="emailAddress3" style="font-size: 15px">البريد
                                                            اﻷلكتروني
                                                            : <b style="color: red">*</b></label>
                                                        <input type="email" name="email" class="form-control required"
                                                            id="emailAddress3">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="location2" style="font-size: 15px">الصورة الشخصية :
                                                            <b style="color: red">*</b></label>
                                                        <input type="file" accept="image/png,image/jpeg,.jpg"
                                                            name="photo" class="form-control required" id="photo">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phoneNumber2" style="font-size: 15px">رقم الهاتف :
                                                            <b style="color: red">*</b></label>
                                                        <input type="tel" name="phone-number" class="form-control required"
                                                            id="phoneNumber2">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="date2" style="font-size: 15px">كلمة السر : <b
                                                                style="color: red">*</b></label>
                                                        {{-- <input type="date" name="date" class="form-control required" id="date2"> --}}
                                                   <input type="password" class="form-control" name="password" id="NewPassword"
                                        required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{7,}"
                                        title="يجب أن يحتوي على رقم واحد على الأقل وحرف واحد كبير وصغير ، و 7 أحرف على الأقل أو أكثر">
                                                            <input type="checkbox" style="margin-top:10px;font-size:13px;color:#000;margin-right:5px" onclick="myFunction()">أضغط هنا لرؤية كلمة السر
                                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                    <span style="color: #000;margin-bottom:10px!important"> قواعد التحقق من كلمة المرور
                                </span>
                                <div id="Length" class="glyphicon glyphicon-remove">يجب على الاقل ان يكون 7 حروف</div>
                                <div id="UpperCase" class="glyphicon glyphicon-remove">يجب أن يحتوي على حرف واحد كبير على الأقل</div>
                                <div id="LowerCase" class="glyphicon glyphicon-remove">يجب أن يحتوي على حرف واحد صغير على الأقل</div>
                                <div id="Numbers" class="glyphicon glyphicon-remove">يجب أن يحتوي على حرف رقمي واحد على الأقل</div>
                                <div id="Symbols" class="glyphicon glyphicon-remove">يجب أن يحتوي على حرف خاص واحد على الأقل</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- Step 2 -->
                                        <h6><i class="step-icon la la-home" style="font-size: 20px"></i>معلومات الشركة
                                        </h6>
                                        <fieldset style="direction: rtl;text-align: right;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-size: 15px" for="type_of_work"> فئة المشروع
                                                            :</label>
                                                        <select name="type_of_work" class="c-select form-control required"
                                                            id="type_of_work">
                                                            <option value="">الرجاء اختيار الفئة : <b
                                                                    style="color: red">*</b></option>
                                                            <option value="personal">الشحصية</option>
                                                            <option value="home">المنزلية</option>
                                                            <option value="shop">الاسواق</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="license" style="font-size: 15px">الشهادة( الرخصة
                                                            التجارية) : <b style="color: red">*</b></label>
                                                        <input type="file" name="license" accept=".pdf"
                                                            class="form-control required" id="license">
                                                        <small class="pt-2 pb-2"
                                                            style="color: red; font-size:12px">ملاحظة:: الحد الافصى
                                                            للملف هو 2 ميغابايت </small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="brand" style="font-size: 15px">شعار المتجر :
                                                        </label>
                                                        <input type="file" name="brand_logo" class="form-control required"
                                                            id="brand" accept=".png">
                                                        <small class="pt-2 pb-2"
                                                            style="color: red; font-size:12px">ملاحظة:: اذا تركت هاذا
                                                            الحقل فارغ فان شعار متحرنا سوف يظهر على متجرك </small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="jobTitle2" style="font-size: 15px">اسم المتجر : <b
                                                                style="color: red">*</b></label>
                                                        <input type="text" name="shop-name" class="form-control required"
                                                            id="jobTitle2">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="shortDescription2" style="font-size: 15px">شرح عن
                                                            المتجر :</label>
                                                        <textarea name="shop-description" id="shortDescription2"
                                                            rows="4" class="form-control required"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- Step 3 -->
                                        <h6><i class="step-icon la la-map-marker" style="font-size: 20px"></i>موقع
                                            البائع</h6>
                                        <fieldset style="direction: rtl;text-align: right;">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="eventName2" style="font-size: 15px">عنوانك :
                                                            <b style="color: red">*</b></label>
                                                        <input type="text" class="form-control required" name="address"
                                                            id="eventName2">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="location2" style="font-size: 15px">اسم البلد : <b
                                                                style="color: red">*</b></label>
                                                        <input type="text" name="country" class="form-control required"
                                                            id="country">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="eventLocation2" style="font-size: 15px">المدينة :
                                                            <b style="color: red">*</b></label>
                                                        <input type="text" name="city" class="form-control required"
                                                            id="country">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- Step 4 -->
                                        <h6><i class="step-icon la la-file" style="font-size: 20px"></i>خصوصيتنا</h6>
                                        <fieldset style="direction: rtl;text-align: right;">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="checkbox" name="agreed_policy"
                                                            class=" form-checkbox form-check-inline" id="meetingName2">
                                                        <label for="meetingName2" style="font-size: 15px">هل توافق على
                                                            حصوصيتنا ؟ <b style="color: red">*</b></label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="seller_note" style="font-size: 15px">ملاحظاتك
                                                            :</label>
                                                        <textarea name="seller_note" id="seller_note" rows="4"
                                                            class="form-control required"></textarea>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary mt-3 mb-3 w-25 mx-auto">
                                                    تسجيل الدخول</button>
                                            </div>
                                        </fieldset>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Form wzard with step validation section end -->
        </div>
    </div>
</div>

@endsection

@section('script')

<script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{ asset('app-assets/vendors/js/extensions/jquery.steps.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js') }}" type="text/javascript">
</script>
<script src="{{ asset('app-assets/vendors/js/pickers/daterange/daterangepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}" type="text/javascript">
</script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{ asset('app-assets/js/core/app-menu.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/js/core/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/js/scripts/customizer.js') }}" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{ asset('app-assets/js/scripts/forms/wizard-steps.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->

<script type="text/javascript">
    $(document).ready(function() {
        var startTimer;
        $('#email').on('keyup', function () {
            clearTimeout(startTimer);
            let email = $(this).val();
            startTimer = setTimeout(checkEmail, 500, email);
        });

        $('#email').on('keydown', function () {
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
                            $('#email').after('<div id="email-error" class="text-danger" <strong>'+data.message[0]+'<strong></div>');
                        } else {
                            $('#email').after('<div id="email-error" class="text-success" <strong>'+data.message+'<strong></div>');
                        }

                    }
                });
            } else {
                $('#email').after('<div id="email-error" class="text-danger" <strong>Email address can not be empty.<strong></div>');
            }
        }
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        var startTimer;
        $('#username').on('keyup', function () {
            clearTimeout(startTimer);
            let username = $(this).val();
            startTimer = setTimeout(checkusername, 500, username);
        });

        $('#username').on('keydown', function () {
            clearTimeout(startTimer);
        });

        function checkusername(username) {
            $('#username-error').remove();
            if (username.length > 1) {
                $.ajax({
                    type: 'post',
                    url: "{{ route('checkusername') }}",
                    data: {
                        username: username,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(data) {
                        if (data.success == false) {
                            $('#username').after('<div id="username-error" class="text-danger" <strong>'+data.message[0]+'<strong></div>');
                        } else {
                            $('#username').after('<div id="username-error" class="text-success" <strong>'+data.message+'<strong></div>');
                        }

                    }
                });
            } else {
                $('#username').after('<div id="username-error" class="text-danger" <strong>username address can not be empty.<strong></div>');
            }
        }
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        var startTimer;
        $('#shopname').on('keyup', function () {
            clearTimeout(startTimer);
            let shopname = $(this).val();
            startTimer = setTimeout(checkshopname, 500, shopname);
        });

        $('#shopname').on('keydown', function () {
            clearTimeout(startTimer);
        });

        function checkshopname(shopname) {
            $('#shopname-error').remove();
            if (shopname.length > 1) {
                $.ajax({
                    type: 'post',
                    url: "{{ route('checkshopname') }}",
                    data: {
                        shopname: shopname,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(data) {
                        if (data.success == false) {
                            $('#shopname').after('<div id="shopname-error" class="text-danger" <strong>'+data.message[0]+'<strong></div>');
                        } else {
                            $('#shopname').after('<div id="shopname-error" class="text-success" <strong>'+data.message+'<strong></div>');
                        }

                    }
                });
            } else {
                $('#shopname').after('<div id="shopname-error" class="text-danger" <strong>shopname address can not be empty.<strong></div>');
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
  $("#Length").removeClass(password.length > 6 ? "nextdisable" : "next");
  $("#Length").addClass(password.length > 6 ? "glyphicon-ok" : "glyphicon-remove");
  $("#Length").addClass(password.length > 6 ? "next" : "nextdisable");
  
  /*Iterate our remaining rules. The logic is the same as for Length*/
  for (var i = 0; i < rules.length; i++) {

    $("#" + rules[i].Target).removeClass(new RegExp(rules[i].Pattern).test(password) ? "glyphicon-remove" : "glyphicon-ok"); 
    $("#" + rules[i].Target).addClass(new RegExp(rules[i].Pattern).test(password) ? "glyphicon-ok" : "glyphicon-remove");
      }
    }

    /*Bind our event to key up for the field. It doesn't matter if it's delete or not*/
    $(document).ready(function() {
      $("#NewPassword").on('keyup', ValidatePassword)
    });
</script>

<script>
    function myFunction() {
      var x = document.getElementById("NewPassword");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>
@endsection