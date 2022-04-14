@extends('Seller.seller_layoute.main_desgin')

@section('style')
<!-- BEGIN Page Level CSS-->
<link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">

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
    <div class="content-header row">
    </div>
    <div class="content-body">
      <div id="user-profile">
        <div class="row">
          <div class="col-12">
            <div class="card profile-with-cover">
              <div class="card-img-top img-fluid bg-cover height-300"
                style="background: url('/storage/seller/{{ $current_seller->banner_image }}') 50%;"></div>
              <div class="media profil-cover-details w-100">
                <div class="media-left pl-2 pt-2">
                  <a href="#" class="profile-image">
                    <img src="{{ '/storage/seller/'. $current_seller->photo }}"
                      class="rounded-circle img-border" width="100px" height="100px" style="object-fit: cover" alt="Card image">
                  </a>
                </div>
                <div class="media-body pt-3 px-2">
                  <div class="row">
                    <div class="col">
                      <h3 class="card-title">{{ $current_seller->full_name }}</h3>
                    </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="app-content content">
  <div class="content-wrapper">

      <div class="content-body">
        @if($errors->any())
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>
                {!! implode('<br/>', $errors->all('<span>:message</span>')) !!}
            </strong>
        </div>
        @endif
          <!-- Form wzard with step validation section start -->
          <section id="icon-tabs">
              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-content collapse show">
                              <div class="card-body">
                                  <form action="{{ route('seller_edit_info', $current_seller->id) }}" method="POST"
                                      enctype="multipart/form-data" class="icons-tab-steps wizard-notification">
                                      @csrf
                                      <!-- Step 1 -->
                                      <h6><i class="step-icon la la-user" style="font-size: 20px"></i> Seller Details
                                      </h6>
                                      <fieldset>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="firstName2" style="font-size: 15px">Full Name : <b
                                                              style="color: red">*</b></label>
                                                      <input type="text" name="name" class="form-control"
                                                          id="firstName2" value="{{ $current_seller->full_name }}">
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="username" style="font-size: 15px">User Name : <b
                                                              style="color: red">*</b></label>
                                                      <input type="text" name="username" class="form-control"
                                                          id="username" value="{{ $current_seller->username }}">
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="emailAddress3" style="font-size: 15px">Email Address
                                                          : <b style="color: red">*</b></label>
                                                      <input type="email" name="email" class="form-control"
                                                          id="emailAddress3" value="{{  $current_seller->email }}" disabled>
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="location2" style="font-size: 15px">Your Photo : <b
                                                              style="color: red">*</b></label>
                                                      <input type="file" accept="image/png,image/jpeg,.jpg" name="photo" class="form-control" id="photo" value="{{ $current_seller->photo }}">
                                                        <div class="d-flex mt-2">
                                                          <h6 class="pr-2 " style="color: rgb(22 163 74)"> Current Photo :</h6> 
                                                          <img src="{{ '/storage/seller/'. $current_seller->photo }}" width="50px">
                                                        </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="phoneNumber2" style="font-size: 15px">Phone Number :
                                                          <b style="color: red">*</b></label>
                                                      <input type="tel" name="phone-number" class="form-control"
                                                          id="phoneNumber2" value="{{ $current_seller->phone }}">
                                                  </div>
                                              </div>
                                          </div>
                                      </fieldset>
                                      <!-- Step 2 -->
                                      <h6><i class="step-icon la la-home" style="font-size: 20px"></i>Shop Info
                                          </h6>
                                      <fieldset>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="license" style="font-size: 15px">Update License : <b
                                                              style="color: red">*</b></label>
                                                      <input type="file" name="license" accept=".pdf" class="form-control"
                                                          id="license" value="{{ $current_seller->document }}" >
                                                          <small class="pt-2 pb-2" style="color: red; font-size:12px">NOTE:: Max Size is up to 2 MB </small>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="brand" style="font-size: 15px">Your Brand Logo : </label>
                                                      <input type="file" name="brand_logo" class="form-control"
                                                          id="brand" accept=".png" value="{{ $current_seller->brand }}">
                                                          <small class="pt-2 pb-2" style="color: red; font-size:12px">NOTE:: If you dont upload your brand logo we will use ITAJER logo </small>
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="brand" style="font-size: 15px">Your Shop Banner : </label>
                                                    <input type="file" name="shop_banner" class="form-control"
                                                        id="banner" accept=".png,.jpg" value="{{ $current_seller->banner_image }}">
                                                        <small class="pt-2 pb-2" style="color: red; font-size:12px">NOTE:: If you dont upload your banner section we will use ITAJER Defualt banner </small>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="jobTitle2" style="font-size: 15px">Shop Name : <b
                                                              style="color: red">*</b></label>
                                                      <input type="text" name="shop-name" class="form-control"
                                                          id="jobTitle2" value="{{ $current_seller->shop_name }}">
                                                  </div>
                                                  
                                              </div>
                                          </div>
                                      </fieldset>
                                      <!-- Step 3 -->
                                      <h6><i class="step-icon la la-map-marker" style="font-size: 20px"></i>Password Update
                                      </h6>
                                      <fieldset>
                                          <div class="row">
                                              <div class="col-md-12">
                                                  <div class="form-group">
                                                      <label for="date2" style="font-size: 15px">Current Password  <b
                                                              style="color: red">*</b></label>
                                                      {{-- <input type="date" name="date" class="form-control" id="date2"> --}}
                                                      <input type="password" name="old_pass" id="password"
                                                          class=" form-control">
                                                          <small class="pt-2 pb-2" style="color: red; font-size:12px">NOTE:: leave it empty so you will not change the password </small>
                                                  </div>

                                                  <div class="form-group">
                                                      <label for="location2" style="font-size: 15px">New Password : <b
                                                              style="color: red">*</b></label>
                                                      <input type="password" name="new_pass" class="form-control"
                                                          id="country">
                                                  </div>
                                              </div>
                                              <button type="submit" class="btn btn-primary mt-3 mb-3 w-25 mx-auto">
                                                Update Info </button>
                                          </div>
                                      </fieldset>
                                     
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
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{ asset('app-assets/vendors/js/extensions/jquery.steps.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js') }}" type="text/javascript">
</script>
<script src="{{ asset('app-assets/vendors/js/pickers/daterange/daterangepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}" type="text/javascript">
</script>
<!-- END PAGE VENDOR JS-->
<script src="{{ asset('app-assets/js/scripts/forms/wizard-steps.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->
@endsection