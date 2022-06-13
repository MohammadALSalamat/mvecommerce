@extends('frontend.frontend_layout.main_desgin')
@section('mytitle','My Account' )
@section('style')
@endsection
@section('content')

<!-- Start of Main -->
@if(Config::get('app.locale') == 'en')
<main class="main">
    <!-- Start of Page Header -->
    <div class="page-header">
        <div class="container">
            <h1 class="mb-0 page-title">My Addresses</h1>
        </div>
    </div>
    <div class="col-12">
        <div class="accordion accordion-bg accordion-gutter-md accordion-border ">
          
                    <form id="demo-form" class="quform from-prevent-multiple-submits" action="" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Country *</label>
                            <select  id="country-dd" name="country" class="form-control">
                                <option value="">Select Country</option>
                                @foreach ($countries as $data)
                                <option value="{{$data->id}}">
                                    {{$data->country}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label>State *</label>
                            <select name="state" id="state-dd" class="form-control">
                            </select>
                        </div>
                        <div class="form-group">
                            <label>City *</label>
                            <select name="city" id="city-dd" class="form-control">
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Address </label>
                                <input type="text" name="address" class="form-control" id="address" value="">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Country</label>
                                <input type="text" name="country" class="form-control" id="country" value="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">City </label>
                                <input type="text" name="city" class="form-control" id="city" value="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Post Code </label>
                                <input type="number" name="postcode" class="form-control" id="postcode" value="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">State</label>
                                <input type="text" name="state" class="form-control" id="state" value="">
                            </div>
                        </div>
                        <div class="my-4 form-checkbox d-flex align-items-center">
                        </div>
                        <button class="mt-3 btn btn-primary">Add New Address</button>
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