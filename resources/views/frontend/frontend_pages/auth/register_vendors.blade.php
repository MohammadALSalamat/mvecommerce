@extends('frontend.frontend_layout.main_desgin')
@section('mytitle','Register Seller')
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
@endsection
@section('content')
<div class="app-content content">
    <div class="content-wrapper">

        <div class="content-body">

            <!-- Form wzard with step validation section start -->
            <section id="icon-tabs">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form action="{{ route('vendor_info') }}" method="POST"
                                        enctype="multipart/form-data" class="icons-tab-steps wizard-notification" style="direction: ltr;">
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
                                                        <input type="text" name="name" class="form-control"
                                                            id="firstName2">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="lastName2" style="font-size: 15px">User Name : <b
                                                                style="color: red">*</b></label>
                                                        <input type="text" name="username" class="form-control"
                                                            id="lastName2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="emailAddress3" style="font-size: 15px">Email Address
                                                            : <b style="color: red">*</b></label>
                                                        <input type="email" name="email" class="form-control"
                                                            id="emailAddress3">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="location2" style="font-size: 15px">Your Photo : <b
                                                                style="color: red">*</b></label>
                                                        <input type="file" accept="image/png,image/jpeg,.jpg" name="photo" class="form-control" id="photo">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phoneNumber2" style="font-size: 15px">Phone Number :
                                                            <b style="color: red">*</b></label>
                                                        <input type="tel" name="phone-number" class="form-control"
                                                            id="phoneNumber2">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="date2" style="font-size: 15px">Password : <b
                                                                style="color: red">*</b></label>
                                                        {{-- <input type="date" name="date" class="form-control" id="date2"> --}}
                                                        <input type="password" name="password" id="password"
                                                            class=" form-control">
                                                    </div>
                                                </div>
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
                                                        <select name="type_of_work" class="c-select form-control"
                                                            id="type_of_work">
                                                            <option value="">Select Proposal Title : <b
                                                                    style="color: red">*</b></option>
                                                            <option value="personal">Peronal</option>
                                                            <option value="home">Home</option>
                                                            <option value="shop">Shop</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="license" style="font-size: 15px">License : <b
                                                                style="color: red">*</b></label>
                                                        <input type="file" name="license" accept=".pdf" class="form-control"
                                                            id="license">
                                                            <small class="pt-2 pb-2" style="color: red; font-size:12px">NOTE:: Max Size is up to 2 MB </small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="brand" style="font-size: 15px">Your Brand Logo : </label>
                                                        <input type="file" name="brand_logo" class="form-control"
                                                            id="brand" accept=".png">
                                                            <small class="pt-2 pb-2" style="color: red; font-size:12px">NOTE:: If you dont upload your brand logo we will use ITAJER logo </small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="jobTitle2" style="font-size: 15px">Shop Name : <b
                                                                style="color: red">*</b></label>
                                                        <input type="text" name="shop-name" class="form-control"
                                                            id="jobTitle2">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="shortDescription2" style="font-size: 15px">Short
                                                            Description :</label>
                                                        <textarea name="shop-description" id="shortDescription2"
                                                            rows="4" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- Step 3 -->
                                        <h6><i class="step-icon la la-map-marker" style="font-size: 20px"></i>Seller Location
                                        </h6>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="eventName2" style="font-size: 15px">Address Name :
                                                            <b style="color: red">*</b></label>
                                                        <input type="text" class="form-control" name="address"
                                                            id="eventName2">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="location2" style="font-size: 15px">Country Name : <b
                                                                style="color: red">*</b></label>
                                                        <input type="text" name="country" class="form-control"
                                                            id="country">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="eventLocation2" style="font-size: 15px">City Name :
                                                            <b style="color: red">*</b></label>
                                                        <input type="text" name="city" class="form-control"
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
                                                            class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary mt-3 mb-3 w-25 mx-auto">
                                                    Submit</button>
                                            </div>
                                        </fieldset>
                                        @else

                                        <h6><i class="step-icon la la-user" style="font-size: 20px"></i> معلومات البائع
                                        </h6>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="firstName2" style="font-size: 15px">الاسم الكامل: <b
                                                                style="color: red">*</b></label>
                                                        <input type="text" name="name" class="form-control"
                                                            id="firstName2">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="lastName2" style="font-size: 15px">اسم المستخدم : <b
                                                                style="color: red">*</b></label>
                                                        <input type="text" name="username" class="form-control"
                                                            id="lastName2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="emailAddress3" style="font-size: 15px">البريد اﻷلكتروني
                                                            : <b style="color: red">*</b></label>
                                                        <input type="email" name="email" class="form-control"
                                                            id="emailAddress3">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="location2" style="font-size: 15px">الصورة الشخصية : <b
                                                                style="color: red">*</b></label>
                                                        <input type="file" accept="image/png,image/jpeg,.jpg" name="photo" class="form-control" id="photo">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phoneNumber2" style="font-size: 15px">رقم الهاتف :
                                                            <b style="color: red">*</b></label>
                                                        <input type="tel" name="phone-number" class="form-control"
                                                            id="phoneNumber2">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="date2" style="font-size: 15px">كلمة السر : <b
                                                                style="color: red">*</b></label>
                                                        {{-- <input type="date" name="date" class="form-control" id="date2"> --}}
                                                        <input type="password" name="password" id="password"
                                                            class=" form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- Step 2 -->
                                        <h6><i class="step-icon la la-home" style="font-size: 20px"></i>معلومات الشركة</h6>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-size: 15px" for="type_of_work"> فئة المشروع :</label>
                                                        <select name="type_of_work" class="c-select form-control"
                                                            id="type_of_work">
                                                            <option value="">الرجاء اختيار الفئة : <b
                                                                    style="color: red">*</b></option>
                                                            <option value="personal">الشحصية</option>
                                                            <option value="home">المنزلية</option>
                                                            <option value="shop">الاسواق</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="license" style="font-size: 15px">الشهادة( الرخصة التجارية) : <b
                                                                style="color: red">*</b></label>
                                                        <input type="file" name="license" accept=".pdf" class="form-control"
                                                            id="license">
                                                            <small class="pt-2 pb-2" style="color: red; font-size:12px">ملاحظة:: الحد الافصى للملف هو 2 ميغابايت   </small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="brand" style="font-size: 15px">شعار المتجر : </label>
                                                        <input type="file" name="brand_logo" class="form-control"
                                                            id="brand" accept=".png">
                                                            <small class="pt-2 pb-2" style="color: red; font-size:12px">ملاحظة:: اذا تركت هاذا الحقل فارغ فان شعار متحرنا سوف يظهر على متجرك </small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="jobTitle2" style="font-size: 15px">اسم المتجر : <b
                                                                style="color: red">*</b></label>
                                                        <input type="text" name="shop-name" class="form-control"
                                                            id="jobTitle2">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="shortDescription2" style="font-size: 15px">شرح عن المتجر :</label>
                                                        <textarea name="shop-description" id="shortDescription2"
                                                            rows="4" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- Step 3 -->
                                        <h6><i class="step-icon la la-map-marker" style="font-size: 20px"></i>موقع البائع</h6>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="eventName2" style="font-size: 15px">عنوانك :
                                                            <b style="color: red">*</b></label>
                                                        <input type="text" class="form-control" name="address"
                                                            id="eventName2">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="location2" style="font-size: 15px">اسم البلد : <b
                                                                style="color: red">*</b></label>
                                                        <input type="text" name="country" class="form-control"
                                                            id="country">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="eventLocation2" style="font-size: 15px">المدينة :
                                                            <b style="color: red">*</b></label>
                                                        <input type="text" name="city" class="form-control"
                                                            id="country">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- Step 4 -->
                                        <h6><i class="step-icon la la-file" style="font-size: 20px"></i>خصوصيتنا</h6>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="checkbox" name="agreed_policy"
                                                            class=" form-checkbox form-check-inline" id="meetingName2">
                                                        <label for="meetingName2" style="font-size: 15px">هل توافق على حصوصيتنا ؟ <b
                                                                style="color: red">*</b></label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="seller_note" style="font-size: 15px">ملاحظاتك
                                                            :</label>
                                                        <textarea name="seller_note" id="seller_note" rows="4"
                                                            class="form-control"></textarea>
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
@endsection