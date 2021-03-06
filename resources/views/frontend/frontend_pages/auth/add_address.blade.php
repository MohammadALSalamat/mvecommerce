@extends('frontend.frontend_layout.main_desgin')
 @if(Config::get('app.locale') == 'en')
@section('mytitle','Add Address' )
@else
@section('mytitle','أضافة العنوان ' )
@endif
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
    <div class="col-12 col-md-7 offset-md-2 mr-auto ml-auto mt-6">
        <div class="">
            <h3> Add New Address </h3>
                    <form id="demo-form" class="quform from-prevent-multiple-submits" action="{{ route('add_deliver_address') }}" method="post"
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
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label style="font-weight: 900 !important;margin-bottom:10px !important"> City *</label>
                            <select name="city" id="city-dd" class="form-control">
                            </select>
                        </div>
                            <div class="form-group col-md-12 mb-3">
                                <label style="font-weight: 900 !important;margin-bottom:10px !important" for="inputEmail4">Full Name ( Reciver ) </label>
                                <input type="text" placeholder="e.g Mohammad xxxx" name="full_name" required class="form-control" id="full_name" value="">
                            </div>
                            <label style="font-weight: 900 !important;margin-bottom:10px !important" for="inputEmail4">Phone Number ( Reciver ) </label>
                            <div class="form-row d-flex">
                                <div class="col-2 mb-3" style="margin-right: 5px;">
                                  <strong class="form-control" style="font-weight: 900 !important" ><img src="{{ asset('front-style/assets/images/flags/uae.png')}}" alt="ENG Flag" width="20"
                                    height="10" class="dropdown-image " style="margin-right: 6px;margin-top:0px" /> +971 </strong>  
                                </div>    
                                <div class="form-group col-10 mb-3">
                                    <input type="tel" placeholder="e.g 5014xxxxxx" name="phone" required pattern="[0-9]{9}" class="form-control" id="phone" value="">
                                </div>
                            </div>

                            <div class="form-group col-md-12 mb-3">
                                <label style="font-weight: 900 !important;margin-bottom:10px !important" for="inputEmail4">Street name </label>
                                <input type="text" placeholder="e.g Elctra Street" name="street_name" required class="form-control" id="street_name" value="">
                            </div>
                            <div class="form-group col-md-12 mb-3">
                                <label style="font-weight: 900 !important;margin-bottom:10px !important" for="inputPassword4">Building name/no., floor, Apt. or villa no.</label>
                                <input type="text" placeholder="e.g Royal Rose ,5th floor, Apt 222" required name="full_street_info" class="form-control" id="full_street_info" value="">
                            </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label style="font-weight: 900 !important;margin-bottom:10px !important" for="inputEmail4">Nearest landmark </label>
                                <input type="text" placeholder="e.g oppisate side of ADCB bank" required name="near_landmark" class="form-control" id="near_landmark" value="">
                            </div>
                        </div>
                       
                        <button class="mt-3 mb-6 btn btn-primary">Add New Address</button>
                    </form>
        </div>
    </div>
</div>
</main>

@else
<main class="main">
    <!-- Start of Page Header -->
    <div class="container">
    <div class="page-header" style="background:url('/storage/photos/1/Artboard 1 copy-100.jpg');background-size:cover">
            <h1 class="mb-0 page-title text-white">أضافة عنوان جديد</h1>
        </div>
    <div class="col-12 col-md-7 offset-md-2 mr-auto ml-auto mt-6">
        <div class="">
            <h3> أضف عنوان جديد </h3>
                    <form id="demo-form" class="quform from-prevent-multiple-submits" action="{{ route('add_deliver_address') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <div class="form-group mb-3">
                            <label style="font-weight:900 !important"> البلد *</label>
                            <select  id="country-dd" name="country" class="form-control">
                                <option value="none" selected> <!!-- اختر بلدك--!!></option>
                                @foreach ($countries as $data)
                                <option  value="{{$data->id}}"  @if($data->id != 252)                                   
                                    style="display:none"
                                @endif>
                                    {{$data->country}}
                                </option>
                                @endforeach
                            </select>
                            <small> التوصيل داخل  <b>الأمارات العربية المتحدة</b> فقط</small>
                        </div>
                        <div class="form-group mb-3">
                            <label style="font-weight: 900 !important;margin-bottom:10px !important"> الأمارة *</label>
                            <select name="state" id="state-dd" class="form-control">
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label style="font-weight: 900 !important;margin-bottom:10px !important"> المدينة *</label>
                            <select name="city" id="city-dd" class="form-control">
                            </select>
                        </div>
                            <div class="form-group col-md-12 mb-3">
                                <label style="font-weight: 900 !important;margin-bottom:10px !important" for="inputEmail4">الأسم الكامل ( المستلم ) </label>
                                <input type="text" placeholder="مثال:محمد الأحمد" name="full_name" required class="form-control" id="full_name" value="">
                            </div>
                            <label style="font-weight: 900 !important;margin-bottom:10px !important" for="inputEmail4">رقم الهاتف ( المستلم ) </label>
                            <div class="form-row d-flex">
                                <div class="col-2 mb-3" style="margin-right: 5px;">
                                  <strong class="form-control" style="font-weight: 900 !important" ><img src="{{ asset('front-style/assets/images/flags/uae.png')}}" alt="ENG Flag" width="20"
                                    height="10" class="dropdown-image " style="margin-right: 6px;margin-top:0px" /> +971 </strong>  
                                </div>    
                                <div class="form-group col-10 mb-3">
                                    <input type="tel" placeholder="مثال : 5666xxxx" name="phone" required pattern="[0-9]{9}" class="form-control" id="phone" value="">
                                </div>
                            </div>

                            <div class="form-group col-md-12 mb-3">
                                <label style="font-weight: 900 !important;margin-bottom:10px !important" for="inputEmail4">أسم الشارع </label>
                                <input type="text" placeholder="مثال: شارع الشيخ زايد الاول" name="street_name" required class="form-control" id="street_name" value="">
                            </div>
                            <div class="form-group col-md-12 mb-3">
                                <label style="font-weight: 900 !important;margin-bottom:10px !important" for="inputPassword4">اسم المبنى / رقم.، الطابق، الشقة. او فيلا .</label>
                                <input type="text" placeholder="مثال: فندق الرويال ,الشقة 91 في الطابق 9 " required name="full_street_info" class="form-control" id="full_street_info" value="">
                            </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label style="font-weight: 900 !important;margin-bottom:10px !important" for="inputEmail4">موقع معروف قريب من موقع التسليم </label>
                                <input type="text" placeholder="مثال:مقابل بنك ابوظبي الأسلامي" required name="near_landmark" class="form-control" id="near_landmark" value="">
                            </div>
                        </div>
                       
                        <button class="mt-3 mb-6 btn btn-primary">أضافة العنوان</button>
                    </form>
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