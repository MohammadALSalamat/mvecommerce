@extends('frontend.frontend_layout.main_desgin')
<<<<<<< HEAD
 @if(Config::get('app.locale') == 'en')
=======
@if(Config::get('app.locale') == 'en')
>>>>>>> c42a79ae9da527b74c953d05e3ae4ed76f6534ef
@section('mytitle','My Account' )
@else
@section('mytitle','الحساب الخاص بك' )
@endif

@section('style')
<style>
    ol.progtrckr {
        margin: 0;
        padding: 0;
        list-style-type none;
    }

    ol.progtrckr li {
        display: inline-block;
        text-align: center;
        line-height: 3.5em;
    }

    ol.progtrckr[data-progtrckr-steps="2"] li {
        width: 49%;
    }

    ol.progtrckr[data-progtrckr-steps="3"] li {
        width: 33%;
    }

    ol.progtrckr[data-progtrckr-steps="4"] li {
        width: 24%;
    }

    ol.progtrckr[data-progtrckr-steps="5"] li {
        width: 19%;
    }

    ol.progtrckr[data-progtrckr-steps="6"] li {
        width: 16%;
    }

    ol.progtrckr[data-progtrckr-steps="7"] li {
        width: 14%;
    }

    ol.progtrckr[data-progtrckr-steps="8"] li {
        width: 12%;
    }

    ol.progtrckr[data-progtrckr-steps="9"] li {
        width: 11%;
    }

    ol.progtrckr li.progtrckr-done {
        color: black;
        border-bottom: 4px solid yellowgreen;
    }

    ol.progtrckr li.progtrckr-todo {
        color: silver;
        border-bottom: 4px solid silver;
    }

    ol.progtrckr li:after {
        content: "\00a0\00a0";
    }

    ol.progtrckr li:before {
        position: relative;
        bottom: -2.5em;
        float: left;
        left: 50%;
        line-height: 1em;
    }

    ol.progtrckr li.progtrckr-done:before {
        content: "\2713";
        color: white;
        background-color: yellowgreen;
        height: 2.2em;
        width: 2.2em;
        line-height: 2.2em;
        border: none;
        border-radius: 2.2em;
    }

    ol.progtrckr li.progtrckr-todo:before {
        content: "\039F";
        color: silver;
        background-color: white;
        font-size: 2.2em;
        bottom: -1.2em;
    }
</style>
<<<<<<< HEAD
=======

>>>>>>> c42a79ae9da527b74c953d05e3ae4ed76f6534ef
@endsection
@section('content')
<!-- Start of Main -->
@if(Config::get('app.locale') == 'en')
<main class="main">
    <!-- Start of Page Header -->
    <div class="page-header" style="background:url('/storage/photos/1/Artboard 1 copy-100.jpg');background-size:cover">
        <div class="container">
            <h1 class="page-title mb-0 text-white">Dashboard </h1>
        </div>
    </div>
    <!-- End of Page Header -->

    <!-- Start of Breadcrumb -->
    {{-- @include('frontend.frontend_layout._breadcrumb') --}}

    <!-- End of Breadcrumb -->

    <!-- Start of PageContent -->
    <div class="pt-2 page-content">
        <div class="container">
            <div class="tab tab-vertical row gutter-lg">
                <ul class="mb-6 nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a href="#account-dashboard" class="nav-link active">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="#account-orders" class="nav-link">Orders</a>
                    </li>

                    <li class="nav-item">
                        <a href="#account-addresses" class="nav-link">Addresses</a>
                    </li>
                    <li class="nav-item">
                        <a href="#account-details" class="nav-link">Account details</a>
                    </li>
                    <li class="nav-item">
                        <a href="#track-order" class="nav-link">Track Order</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('logout_front_user') }}" class="nav-link">Logout</a>
                    </li>
                </ul>
                <div class="mb-6 tab-content">
                    <div class="tab-pane active in" id="account-dashboard">
                        <p class="greeting">
                            Hello
                            <span class="text-dark font-weight-bold">{{ $current_user->full_name }}</span>
                            (not
                            <span class="text-dark font-weight-bold">{{ $current_user->full_name }}</span>?
                            <a href="{{ route('logout_front_user') }}" class="text-primary">Log out</a>)
                        </p>

                        <p class="mb-4">
                            From your account dashboard you can view your <a href="#account-orders"
                                class="text-primary link-to-tab">recent orders</a>,
                            manage your <a href="#account-addresses" class="text-primary link-to-tab">shipping
                                and billing
                                addresses</a>, and
                            <a href="#account-details" class="text-primary link-to-tab">edit your password and
                                account details.</a>
                        </p>

                        <div class="row">
                            <div class="mb-4 col-lg-4 col-md-6 col-sm-4 col-xs-6">
                                <a href="#account-orders" class="link-to-tab">
                                    <div class="text-center icon-box">
                                        <span class="icon-box-icon icon-orders">
                                            <i class="w-icon-orders"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <p class="mb-0 text-uppercase">Orders</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="mb-4 col-lg-4 col-md-6 col-sm-4 col-xs-6">
                                <a href="#account-addresses" class="link-to-tab">
                                    <div class="text-center icon-box">
                                        <span class="icon-box-icon icon-address">
                                            <i class="w-icon-map-marker"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <p class="mb-0 text-uppercase">Addresses</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="mb-4 col-lg-4 col-md-6 col-sm-4 col-xs-6">
                                <a href="#account-details" class="link-to-tab">
                                    <div class="text-center icon-box">
                                        <span class="icon-box-icon icon-account">
                                            <i class="w-icon-user"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <p class="mb-0 text-uppercase">Account Details</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="mb-4 col-lg-4 col-md-6 col-sm-4 col-xs-6">
                                <a href="#track-order" class="link-to-tab">
                                    <div class="text-center icon-box">
                                        <span class="icon-box-icon icon-account">
                                            <i class="w-icon-shipping"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <p class="mb-0 text-uppercase">Track Order</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="mb-4 col-lg-4 col-md-6 col-sm-4 col-xs-6">
                                <a href="{{ route('logout_front_user') }}">
                                    <div class="text-center icon-box">
                                        <span class="icon-box-icon icon-logout">
                                            <i class="w-icon-logout"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <p class="mb-0 text-uppercase">Logout</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Orders Tab -->
                    <div class="mb-4 tab-pane" id="account-orders">
                        <div class="icon-box icon-box-side icon-box-light">
                            <span class="icon-box-icon icon-orders">
                                <i class="w-icon-orders"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="mb-0 icon-box-title text-capitalize ls-normal">Orders</h4>
                            </div>
                        </div>
                        <table class="mb-6 shop-table account-orders-table">
                            <thead>
                                <tr>
                                    <th class="order-id" style="text-align: left">Order</th>
                                    <th class="order-date" style="text-align: left">Date</th>
                                    <th class="order-status" style="text-align: left">Status</th>
                                    <th class="order-total" style="text-align: left">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user_orders as $order)
                                <tr>
                                    <td class="order-id">#{{ $order->order_number }}</td>
                                    <td class="order-date">{{ date('Y-m-d',strtotime($order->created_at)) }}</td>
                                    <td class="order-status" 
                                    @if ($order->payment_status == 'completed')
                                    style="color:green"
                                    @elseif ($order->payment_status == 'inprocess')
                                    style="color:orange"
                                    @elseif ($order->payment_status == 'shipped')
                                    style="color:green"
                                    @elseif ($order->payment_status == 'pending')
                                    style="color:orange"
                                    @elseif ($order->payment_status == 'cancelled')
                                    style="color:red"
                                    @endif
                                    >
                                    {{ $order->payment_status }}</td>
                                    <td class="order-total">
                                        <span class="order-price">{{ $order->total }} AED </span> for
                                        <span class="order-quantity"> {{ count($order->product) }}</span> item
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <a href="{{ route('shop_page') }}" class="btn btn-dark btn-rounded btn-icon-right">Go
                            Shop<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                    <!-- Address Tab -->
                    <div class="tab-pane" id="account-addresses">
                        <div class="icon-box icon-box-side icon-box-light">
                            <span class="icon-box-icon icon-map-marker">
                                <i class="w-icon-map-marker"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="mb-0 icon-box-title ls-normal">Addresses</h4>
                            </div>
                        </div>
                        <p>The following addresses will be used on the checkout page
                            by default.</p>
                        <div class="row">
                            <div class="mb-6 col-sm-6">
                                <div class="ecommerce-address shipping-address pr-lg-8">
                                    <h4 class="title title-underline ls-25 font-weight-bold">Add New Address</h4>
                                    <a href="{{ route('deliver_address',) }}">
                                        <i class=" fa fa-plus text-center"
                                            style="border:1px dashed #ccc; padding:100px; font-size:40px;color:#ccc;width:100%;height:100%;">
                                            <h4 style="color:#ccc; margin-top:10px">Add Address </h4>
                                        </i>
                                    </a>
                                </div>
                            </div>
                            @foreach ($user_locations as $user_location )
                            <div class="mb-6 col-sm-6">
                                <div class="ecommerce-address billing-address pr-lg-8">
                                    <h4 class="title title-underline ls-25 font-weight-bold">Deliver Address
                                        @if($user_location->themain_address == 1) <b style="color:red"> ( Defualt
                                            Address)</b> @endif</h4>
                                    <address class="mb-4">
                                        <table class="address-table">
                                            <tbody>
                                                <tr>
                                                    <th>Full Name:</th>
                                                    <td>{{ $current_user->full_name }}</td>
                                                </tr>
                                                <tr>
                                                    <th>User Name:</th>
                                                    <td>{{ $current_user->username }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Street :</th>
                                                    <td>{{ $user_location->address }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Full Address:</th>
                                                    <td>{{ $user_location->full_street_info }}</td>
                                                </tr>
                                                <tr>
                                                    <th>City:</th>
                                                    <td>{{ $user_location->city }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Country:</th>
                                                    <td>{{ $user_location->country }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Near Location:</th>
                                                    <td>{{ $user_location->near_location }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Phone:</th>
                                                    <td>{{ $user_location->phone }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </address>
                                    <a href="{{ route('edit_deliverAddress',$user_location->id) }}"> Edit </a> | <a
                                        href="{{ route('delete_deliverAddress',$user_location->id) }}"> Delete </a> | <a
                                        href="{{ route('set_deliverAddress_asDefualt',$user_location->id) }}"> Set As
                                        Defualt</a>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- Acount Details Tab -->
                    <div class="tab-pane" id="account-details">
                        <div class="icon-box icon-box-side icon-box-light">
                            <span class="mr-2 icon-box-icon icon-account">
                                <i class="w-icon-user"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="mb-0 icon-box-title ls-normal">Account Details</h4>
                            </div>
                        </div>
                        <form class="form account-details-form"
                            action="{{ route('updateuseraccount',$current_user->id) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname">Full Nname </label>
                                        <input type="text" id="firstname" name="full_name"
                                            class="form-control form-control-md" @if(!empty($current_user->full_name) ||
                                        $current_user->full_name != null)
                                        value="{{ $current_user->full_name }}"
                                        @endif >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname">UserName </label>
                                        <input type="text" id="username" name="username"
                                            @if(!empty($current_user->username) || $current_user->username != null)
                                        value="{{ $current_user->username }}" @endif
                                        class="form-control form-control-md">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-6 form-group">
                                <label for="email_1">Email address </label>
                                <input type="email" id="email" name="email" class="form-control form-control-md"
                                    @if(!empty($current_user->email) || $current_user->email != null)
                                value="{{ $current_user->email }}" @endif disabled>
                            </div>

                            <div class="mb-6 form-group">
                                <label for="email_1">Phone Number </label>
                                <input type="number" id="phone" name="phone" class="form-control form-control-md"
                                    @if(!empty($current_user->phone) || $current_user->phone != null)
                                value="{{ $current_user->phone }}" @endif>
                            </div>
                            @if($current_user->role == 'seller')
                            <div class="mb-6 form-group">
                                <label for="email_1">Shop Name </label>
                                <input type="text" id="shop-name" name="shop-name" class="form-control form-control-md"
                                    value="{{ $current_user->shop_name }}">
                            </div>
                            @endif
                            <h4 class="title title-password ls-25 font-weight-bold">Password change</h4>
                            <div class="form-group">
                                <label class="text-dark" for="cur-password">Current Password leave blank to leave
                                    unchanged</label>
                                <input type="password" class="form-control form-control-md" id="old-password"
                                    name="old_password">
                            </div>
                            <div class="form-group">
                                <label class="text-dark" for="new-password">New Password leave blank to leave
                                    unchanged</label>
                                <input type="password" class="form-control form-control-md" id="new-password"
                                    name="new_password">
                            </div>
                            <button type="submit" class="mb-4 btn btn-dark btn-rounded btn-sm">Save Changes</button>
                        </form>
                    </div>
<<<<<<< HEAD
                     <div class="tab-pane" id="track-order">
=======
                    <div class="tab-pane" id="track-order">
>>>>>>> c42a79ae9da527b74c953d05e3ae4ed76f6534ef
                        <div class="icon-box icon-box-side icon-box-light">
                            <span class="mr-2 icon-box-icon icon-account">
                                <i class="w-icon-shipping"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="mb-0 icon-box-title ls-normal">Track Order</h4>
                            </div>
                        </div>
                      
                        @foreach ($user_orders as $orders)
                        @if ($orders->payment_status != 'completed')
                        <table class="mb-6 shop-table account-orders-table">
                            <thead>
                                <tr>
                                    <th class="order-id" style="text-align: left">ORDER</th>
                                    <th class="order-status" style="text-align: left">ITEMS</th>
                                    <th class="order-total" style="text-align: left">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="order-id">#{{ $orders->order_number }}</td>
                                    <td class="order-date">
                                        @foreach ($orders->product as $item)
                                        @php
                                        $other_image = explode(',',$item->image);
                                      @endphp
                                    <a href="{{ route('singleproduct',$item->slug) }}" style="display:flex;padding:10px 0px">
                                        <img src="{{ $other_image[0] }}" alt="{{ $item->title }}" style="width: 30px !important;padding-right:10px;"> 
                                        <span class="order-quantity text-primary font-weight-bold"> {{ ($item->title) }}</span>
                                    </a>
                                        @endforeach    
                                    </td>
                                    <td class="order-total">
                                        <span class="order-price">{{ $orders->total }} AED </span> for
                                        <span class="order-quantity"> {{ count($orders->product) }}</span> item
                                    </td>
                                </tr>
                               
                            </tbody>
                        </table>
                        <ol class="progtrckr" data-progtrckr-steps="4" style="padding-bottom:30px">
                            <li class="progtrckr-done">Order Processing</li>
                            <!--
                             -->
                           
                            <li
                                class="@if ($orders->payment_status == 'inprocess' || $orders->payment_status == 'shipped') progtrckr-done @else progtrckr-todo @endif">
                                In Production</li>
                            <!--
                             -->
                            <li
                                class="@if ($orders->payment_status == 'shipped'  || $orders->payment_status == 'completed') progtrckr-done @else progtrckr-todo @endif">
                                Shipped</li>
                            <!--
                             -->
                            <li
                                class="@if ($orders->payment_status == 'completed') progtrckr-done @else progtrckr-todo @endif">
                                Delivered</li>
                        </ol>
                        @else
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of PageContent -->
</main>
@else
<main class="main">
    <!-- Start of Page Header -->
    <div class="page-header" style="background:url('/storage/photos/1/Artboard 1 copy-100.jpg');background-size:cover">
        <div class="container">
            <h1 class="mb-0 page-title text-white">الحساب الشخصي</h1>
        </div>
    </div>
    <!-- End of Page Header -->

    <!-- Start of Breadcrumb -->
    @include('frontend.frontend_layout._breadcrumb')

    <!-- End of Breadcrumb -->

    <!-- Start of PageContent -->
    <div class="pt-2 page-content">
        <div class="container">
            <div class="tab tab-vertical row gutter-lg">
                <ul class="mb-6 nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a href="#account-dashboard" class="nav-link active">لوحة التحكم</a>
                    </li>
                    <li class="nav-item">
                        <a href="#account-orders" class="nav-link">الطلبات</a>
                    </li>

                    <li class="nav-item">
                        <a href="#account-addresses" class="nav-link">المواقع</a>
                    </li>
                    <li class="nav-item">
                        <a href="#account-details" class="nav-link">معلومات الحساب</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('logout_front_user') }}" class="nav-link">تسجيل الخروج</a>
                    </li>
                </ul>

                <div class="mb-6 tab-content">
                    <div class="tab-pane active in" id="account-dashboard">
                        <p class="greeting">
                            مرحبا
                            <span class="text-dark font-weight-bold">{{ $current_user->full_name }}</span>
                            (لست
                            <span class="text-dark font-weight-bold">{{ $current_user->full_name }}</span>؟
                            <a href="{{ route('logout_front_user') }}" class="text-primary">تسجيل خروج</a>)
                        </p>

                        <p class="mb-4">
                            من خلال لوحط التحكم الخاصة بك يمكن الان <a href="#account-orders"
                                class="text-primary link-to-tab">الاطلاع على طلباتك</a>,
                            أو تعديل <a href="#account-addresses" class="text-primary link-to-tab">عناوين الشحن
                                والفواتير</a>, و
                            <a href="#account-details" class="text-primary link-to-tab">تعديل حسابك الشخصي مع كلمة
                                المرور</a>
                        </p>

                        <div class="row">
                            <div class="mb-4 col-lg-4 col-md-6 col-sm-4 col-xs-6">
                                <a href="#account-orders" class="link-to-tab">
                                    <div class="text-center icon-box">
                                        <span class="icon-box-icon icon-orders">
                                            <i class="w-icon-orders"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <p class="mb-0 text-uppercase">الطلبات</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="mb-4 col-lg-4 col-md-6 col-sm-4 col-xs-6">
                                <a href="#account-addresses" class="link-to-tab">
                                    <div class="text-center icon-box">
                                        <span class="icon-box-icon icon-address">
                                            <i class="w-icon-map-marker"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <p class="mb-0 text-uppercase">المواقع</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="mb-4 col-lg-4 col-md-6 col-sm-4 col-xs-6">
                                <a href="#account-details" class="link-to-tab">
                                    <div class="text-center icon-box">
                                        <span class="icon-box-icon icon-account">
                                            <i class="w-icon-user"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <p class="mb-0 text-uppercase">الحساب الشخصي</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="mb-4 col-lg-4 col-md-6 col-sm-4 col-xs-6">
                                <a href="{{ route('logout_front_user') }}">
                                    <div class="text-center icon-box">
                                        <span class="icon-box-icon icon-logout">
                                            <i class="w-icon-logout"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <p class="mb-0 text-uppercase">تسجيل الخروج</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Orders Tab -->
                    <div class="mb-4 tab-pane" id="account-orders">
                        <div class="icon-box icon-box-side icon-box-light">
                            <span class="icon-box-icon icon-orders">
                                <i class="w-icon-orders"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="mb-0 icon-box-title text-capitalize ls-normal">الطلبات</h4>
                            </div>
                        </div>

                        <table class="mb-6 shop-table account-orders-table">
                            <thead>
                                <tr>
                                    <th class="order-id">الطلب</th>
                                    <th class="order-date">تاريخ</th>
                                    <th class="order-status">الحالة</th>
                                    <th class="order-total">مجموع الدفع</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user_orders as $order)
                                <tr>
                                    <td class="order-id">#{{ $order->order_number }}</td>
                                    <td class="order-date">{{ date('Y-m-d',strtotime($order->created_at)) }}</td>
                                    <td class="order-status">قيد التنفيذ</td>
                                    <td class="order-total">
                                        <span class="order-price">{{ $order->total }} د.أ </span> ﻷجل
                                        <span class="order-quantity"> {{ count($order->product) }}</span> منتجات
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>

                        <a href="{{ route('homepage') }}" class="btn btn-dark btn-rounded btn-icon-left">تسوق الان<i
                                class="w-icon-long-arrow-left"></i></a>
                    </div>
<<<<<<< HEAD
                   
                     <!-- Address Tab -->
=======

                    <!-- Address Tab -->
>>>>>>> c42a79ae9da527b74c953d05e3ae4ed76f6534ef
                    <div class="tab-pane" id="account-addresses">
                        <div class="icon-box icon-box-side icon-box-light">
                            <span class="icon-box-icon icon-map-marker">
                                <i class="w-icon-map-marker"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="mb-0 icon-box-title ls-normal">العناوين</h4>
                            </div>
                        </div>
                        <p>سيتم استخدام العناوين التالية في صفحة الخروج بشكل افتراضي.</p>
                        <div class="row">
                            <div class="mb-6 col-sm-6">
                                <div class="ecommerce-address shipping-address pr-lg-8">
                                    <h4 class="title title-underline ls-25 font-weight-bold">أضف عنوان جديد</h4>
<<<<<<< HEAD
                                    <a href="{{ route('deliver_address',) }}"> 
                                        <i class=" fa fa-plus text-center" style="border:1px dashed #ccc; padding:100px; font-size:40px;color:#ccc;width:100%;height:100%;">
                                           <h4 style="color:#ccc; margin-top:10px">أضف عنوان </h4>
                                        </i> 
=======
                                    <a href="{{ route('deliver_address',) }}">
                                        <i class=" fa fa-plus text-center"
                                            style="border:1px dashed #ccc; padding:100px; font-size:40px;color:#ccc;width:100%;height:100%;">
                                            <h4 style="color:#ccc; margin-top:10px">أضف عنوان </h4>
                                        </i>
>>>>>>> c42a79ae9da527b74c953d05e3ae4ed76f6534ef
                                    </a>
                                </div>
                            </div>
                            @foreach ($user_locations as $user_location )
                            <div class="mb-6 col-sm-6">
                                <div class="ecommerce-address billing-address pr-lg-8">
<<<<<<< HEAD
                                    <h4 class="title title-underline ls-25 font-weight-bold">عنوان التسليم @if($user_location->themain_address == 1) <b style="color:red"> ( العنوان الافتراضي)</b> @endif</h4>
=======
                                    <h4 class="title title-underline ls-25 font-weight-bold">عنوان التسليم
                                        @if($user_location->themain_address == 1) <b style="color:red"> ( العنوان
                                            الافتراضي)</b> @endif</h4>
>>>>>>> c42a79ae9da527b74c953d05e3ae4ed76f6534ef
                                    <address class="mb-4">
                                        <table class="address-table">
                                            <tbody>
                                                <tr>
                                                    <th>الأسم الكامل:</th>
                                                    <td>{{ $current_user->full_name }}</td>
                                                </tr>
                                                <tr>
                                                    <th>أسم المستخدم:</th>
                                                    <td>{{ $current_user->username }}</td>
                                                </tr>
                                                <tr>
                                                    <th>الشارع :</th>
                                                    <td>{{ $user_location->address }}</td>
                                                </tr>
                                                <tr>
                                                    <th>العنوان الكامل:</th>
                                                    <td>{{ $user_location->full_street_info }}</td>
                                                </tr>
                                                <tr>
                                                    <th>المدينة:</th>
                                                    <td>{{ $user_location->city }}</td>
                                                </tr>
                                                <tr>
                                                    <th>البلد:</th>
                                                    <td>{{ $user_location->country }}</td>
                                                </tr>
                                                <tr>
                                                    <th>موقع معروف قريب من موقع التسليم:</th>
                                                    <td>{{ $user_location->near_location }}</td>
                                                </tr>
                                                <tr>
                                                    <th>الهاتف:</th>
                                                    <td>{{ $user_location->phone }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </address>
<<<<<<< HEAD
                                    <a href="{{ route('edit_deliverAddress',$user_location->id) }}"> تعديل </a> | <a href="{{ route('delete_deliverAddress',$user_location->id) }}"> حذف </a> | <a href="{{ route('set_deliverAddress_asDefualt',$user_location->id) }}"> عنوان افتراضي</a>
                                </div>
                            </div>
                            @endforeach
                           
=======
                                    <a href="{{ route('edit_deliverAddress',$user_location->id) }}"> تعديل </a> | <a
                                        href="{{ route('delete_deliverAddress',$user_location->id) }}"> حذف </a> | <a
                                        href="{{ route('set_deliverAddress_asDefualt',$user_location->id) }}"> عنوان
                                        افتراضي</a>
                                </div>
                            </div>
                            @endforeach

>>>>>>> c42a79ae9da527b74c953d05e3ae4ed76f6534ef
                        </div>
                    </div>
                    <!-- Acount Details Tab -->
                    <div class="tab-pane" id="account-details">
                        <div class="icon-box icon-box-side icon-box-light">
                            <span class="mr-2 icon-box-icon icon-account">
                                <i class="w-icon-user"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="mb-0 icon-box-title ls-normal">معلومات الحساب</h4>
                            </div>
                        </div>
                        <form class="form account-details-form"
                            action="{{ route('updateuseraccount',$current_user->id) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname">الاسم الكامل </label>
                                        <input type="text" id="firstname" name="full_name"
                                            class="form-control form-control-md" @if(!empty($current_user->full_name) ||
                                        $current_user->full_name != null)
                                        value="{{ $current_user->full_name }}"
                                        @endif >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname">اسم المستخدم </label>
                                        <input type="text" id="username" name="username"
                                            @if(!empty($current_user->username) || $current_user->username != null)
                                        value="{{ $current_user->username }}" @endif
                                        class="form-control form-control-md">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-6 form-group">
                                <label for="email_1">البريد الالكتروني </label>
                                <input type="email" id="email" name="email" class="form-control form-control-md"
                                    @if(!empty($current_user->email) || $current_user->email != null)
                                value="{{ $current_user->email }}" @endif disabled>
                            </div>

                            <div class="mb-6 form-group">
                                <label for="email_1">رقم الهاتف </label>
                                <input type="number" id="phone" name="phone" class="form-control form-control-md"
                                    @if(!empty($current_user->phone) || $current_user->phone != null)
                                value="{{ $current_user->phone }}" @endif>
                            </div>
                            @if($current_user->role == 'seller')
                            <div class="mb-6 form-group">
                                <label for="email_1">اسم المشروع </label>
                                <input type="text" id="shop-name" name="shop-name" class="form-control form-control-md"
                                    value="{{ $current_user->shop_name }}">
                            </div>
                            @endif
                            <h4 class="title title-password ls-25 font-weight-bold">تعديل كلمة السر</h4>
                            <div class="form-group">
                                <label class="text-dark" for="cur-password">اذا لم ترد تغيير كلمة السر فدع الحقل
                                    فارغ</label>
                                <input type="password" class="form-control form-control-md" id="old-password"
                                    name="old_password">
                            </div>
                            <div class="form-group">
                                <label class="text-dark" for="new-password">اذا لم ترد تغيير كلمة السر فدع الحقل
                                    فارغ</label>
                                <input type="password" class="form-control form-control-md" id="new-password"
                                    name="new_password">
                            </div>
                            <button type="submit" class="mb-4 btn btn-dark btn-rounded btn-sm">حفظ التغييرات </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of PageContent -->
</main>

@endif
<!-- End of Main -->
@endsection