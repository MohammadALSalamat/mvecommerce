@extends('frontend.frontend_layout.main_desgin')
@section('mytitle','My Account' )
@section('style')
<style>
.quform .form-control {
    display: block;
    width: 100%;
    min-height: 40px !important;
    padding: 5px !important;
    border: 1px solid #888C8C !important;
    font-size: 1.4rem;
    font-family: Cairo, Tahoma, sans-serif !important;
    line-height: 1.5;
    font-weight: 400;
    vertical-align:middle;
    background-color: transparent;
    border-radius: 7px !important;
    -webkit-box-shadow: 0 1px 2px rgb(15 17 17 / 15%) inset;
    box-shadow: 0 1px 2px rgb(15 17 17 / 15%) inset;
    outline: 0;
}
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #888C8C !important;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #888C8C !important;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: #888C8C !important;
}

input[type=text],  input[type=number], input[type=tel], input[type=password], input[type=date], input[type=email] {
    height: 31px;
    padding: 3px 7px;
    line-height: normal;
    color: #000;
}
</style>
@endsection
@section('content')

<!-- Start of Main -->
@if(Config::get('app.locale') == 'en')
<main class="main">
    <!-- Start of Page Header -->
    <div class="container">
    <div class="page-header" style="background:url('/storage/photos/1/Artboard 1 copy-100.jpg');background-size:cover">
            <h1 class="mb-0 page-title text-white">My Addresses</h1>
        </div>
    </div>
    <div class="col-12 col-md-7 offset-md-2 mr-auto ml-auto mt-6">
        <div class="">
            <h3> Edit The Address </h3>
                    <form id="demo-form" class="quform from-prevent-multiple-submits" action="{{ route('address_update',$current_location->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <div class="form-group mb-3">
                            <label style="font-weight:900 !important"> Country *</label>
                            <select  id="country-dd" name="country" class="form-control">
                                <option value="none" selected> <!!-- Select The Country--!!></option>
                                @foreach ($countries as $data)
                                <option  value="{{$data->id}}"  @if($data->id != 252)                                   
                                    style="display:none"
                                    @else
                                    selected 
                                @endif>
                                    {{$data->country}}
                                </option>
                                @endforeach
                            </select>
                            <small> The deliver is inside the <b>UAE</b> only</small>
                        </div>
                        <div class="form-group mb-3">
                            <label style="font-weight: 900 !important;margin-bottom:10px !important"> State *</label>
                            <select name="state" id="state-dd" class="form-control">
                                <option selected value="{{ $state_name->id}}">{{ $state_name->region}}</option>
                            </select>
                        </div>
                       
                            <div class="form-group col-md-12 mb-3">
                                <label style="font-weight: 900 !important;margin-bottom:10px !important" for="inputEmail4">Full Name ( Reciver ) </label>
                                <input type="text" placeholder="e.g Mohammad xxxx" name="full_name" class="form-control" id="full_name" required value="{{ $current_location-> full_name }}">
                            </div>
                            <label style="font-weight: 900 !important;margin-bottom:10px !important" for="inputEmail4">Phone Number ( Reciver ) </label>
                            <div class="form-row d-flex">
                                <div class="col-2 mb-3" style="margin-right: 5px;">
                                  <strong class="form-control" style="font-weight: 900 !important" ><img src="{{ asset('front-style/assets/images/flags/uae.png')}}" alt="ENG Flag" width="20"
                                    height="10" class="dropdown-image " style="margin-right: 6px;margin-top:0px" /> +971 </strong>  
                                </div>    
                                <div class="form-group col-10 mb-3">
                                    <input type="tel" placeholder="e.g 5014xxxxxx" name="phone"  pattern="[0-9]{9}" required class="form-control" id="phone" value="{{ $current_location->phone }}">
                                    <small>Please Keep the format (5013xxxx)</small>

                                </div>
                            </div>

                            <div class="form-group col-md-12 mb-3">
                                <label style="font-weight: 900 !important;margin-bottom:10px !important" for="inputEmail4">Street name </label>
                                <input type="text" placeholder="e.g Elctra Street" name="street_name" class="form-control" required id="street_name" value="{{ $current_location->address }}">
                            </div>
                            <div class="form-group col-md-12 mb-3">
                                <label style="font-weight: 900 !important;margin-bottom:10px !important" for="inputPassword4">Building name/no., floor, Apt. or villa no.</label>
                                <input type="text" placeholder="e.g Royal Rose ,5th floor, Apt 222" name="full_street_info" required class="form-control" id="full_street_info" value="{{ $current_location->full_street_info }}">
                            </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label style="font-weight: 900 !important;margin-bottom:10px !important" for="inputEmail4">Nearest landmark </label>
                                <input type="text" placeholder="e.g oppisate side of ADCB bank" name="near_landmark" required class="form-control" id="near_landmark" value="{{ $current_location->near_location }}">
                            </div>
                        </div>
                       
                        <button class="mt-3 mb-6 btn btn-primary">Update Address</button>
                    </form>
        </div>
    </div>
</main>

@else
<main class="main">
    <!-- Start of Page Header -->
    <div class="page-header">
        <div class="container">
            <h1 class="mb-0 page-title">العناوين</h1>
        </div>
    </div>
    <div class="col-12">
        <div class="accordion accordion-bg accordion-gutter-md accordion-border ">
            <div class="card">
                <div class="card-header">
                    <a href="#collapse1-1" class="expand">تعديل على موقع وصول الشحنة</a>
                </div>
                <div id="collapse1-1" class="card-body collapsed">
                    <form id="demo-form" class="quform from-prevent-multiple-submits" action="" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">الموقع </label>
                                <input type="text" name="address" class="form-control" id="address" value="">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">البلد</label>
                                <input type="text" name="country" class="form-control" id="country" value="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">المدينة </label>
                                <input type="text" name="city" class="form-control" id="city" value="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">الرمز البريدي</label>
                                <input type="number" name="postcode" class="form-control" id="postcode" value="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">المقاطعة\ الامارة </label>
                                <input type="text" name="state" class="form-control" id="state" value="">
                            </div>
                        </div>

                        <div class="my-4 form-checkbox d-flex align-items-center">
                            <input class="mr-4  form-check-input" type="checkbox" name="shipping_copy_billing_info"
                                id="shippingcopybillinginfo">
                            <label for="shippingcopybillinginfo" style="color:red">هل تريد نسخ المعلومات في الاعلى
                                لاستخدامهافي توصيل الشحنة</label>
                        </div>

                        <button class="mt-3 btn btn-primary">تعديل الان</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endif
@endsection

@section('script')
<!-- Country and Cities selection  -->
<script>
    $(document).ready(function () {
        $('#country-dd').on('change', function () {
            var idCountry = this.value;
            $("#state-dd").html('');
            $.ajax({
                url: "{{url('api/fetch-states')}}",
                type: "POST",
                data: {
                    country_id: idCountry,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#state-dd').html('<option value="">Select State</option>');
                    $.each(result.states, function (key, value) {
                        $("#state-dd").append('<option value="' + value.id + '">' + value.region + '</option>');
                    });
                    $('#city-dd').html('<option value="">Select City</option>');
                }
            });
        });
        $('#state-dd').on('change', function () {
            var idState = this.value;
            $("#city-dd").html('');
            $.ajax({
                url: "{{url('api/fetch-cities')}}",
                type: "POST",
                data: {
                    state_id: idState,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (res) {
                    $('#city-dd').html('<option value="">Select City</option>');
                    $.each(res.cities, function (key, value) {
                        $("#city-dd").append('<option value="' + value
                            .id + '">' + value.city + '</option>');
                    });
                }
            });
        });
    });
</script>
@stop