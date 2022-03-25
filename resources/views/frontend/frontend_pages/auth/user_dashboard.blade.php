@extends('frontend.frontend_layout.main_desgin')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('front-style/assets/css/style.min.css')}}">
@endsection
@section('content')
<!-- Start of Main -->
<main class="main">
    <!-- Start of Page Header -->
    <div class="page-header">
        <div class="container">
            <h1 class="mb-0 page-title">My Account</h1>
        </div>
    </div>
    <!-- End of Page Header -->

    <!-- Start of Breadcrumb -->
    <nav class="container breadcrumb-nav">
        <ul class="breadcrumb bb-no">
            <li><a href="demo1.html">Home</a></li>
            <li>My account</li>
        </ul>
    </nav>
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
                        <a href="#account-downloads" class="nav-link">Downloads</a>
                    </li>
                    <li class="nav-item">
                        <a href="#account-addresses" class="nav-link">Addresses</a>
                    </li>
                    <li class="nav-item">
                        <a href="#account-details" class="nav-link">Account details</a>
                    </li>
                    <li class="nav-item">
                        <a href="wishlist.html" class="nav-link">Wishlist</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.html" class="nav-link">Logout</a>
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
                                <a href="#account-downloads" class="link-to-tab">
                                    <div class="text-center icon-box">
                                        <span class="icon-box-icon icon-download">
                                            <i class="w-icon-download"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <p class="mb-0 text-uppercase">Downloads</p>
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
                                <a href="wishlist.html" class="link-to-tab">
                                    <div class="text-center icon-box">
                                        <span class="icon-box-icon icon-wishlist">
                                            <i class="w-icon-heart"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <p class="mb-0 text-uppercase">Wishlist</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="mb-4 col-lg-4 col-md-6 col-sm-4 col-xs-6">
                                <a href="#">
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
                                    <th class="order-id">Order</th>
                                    <th class="order-date">Date</th>
                                    <th class="order-status">Status</th>
                                    <th class="order-total">Total</th>
                                    <th class="order-actions">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="order-id">#2321</td>
                                    <td class="order-date">August 20, 2021</td>
                                    <td class="order-status">Processing</td>
                                    <td class="order-total">
                                        <span class="order-price">$121.00</span> for
                                        <span class="order-quantity"> 1</span> item
                                    </td>
                                    <td class="order-action">
                                        <a href="#"
                                            class="btn btn-outline btn-default btn-block btn-sm btn-rounded">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="order-id">#2321</td>
                                    <td class="order-date">August 20, 2021</td>
                                    <td class="order-status">Processing</td>
                                    <td class="order-total">
                                        <span class="order-price">$150.00</span> for
                                        <span class="order-quantity"> 1</span> item
                                    </td>
                                    <td class="order-action">
                                        <a href="#"
                                            class="btn btn-outline btn-default btn-block btn-sm btn-rounded">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="order-id">#2319</td>
                                    <td class="order-date">August 20, 2021</td>
                                    <td class="order-status">Processing</td>
                                    <td class="order-total">
                                        <span class="order-price">$201.00</span> for
                                        <span class="order-quantity"> 1</span> item
                                    </td>
                                    <td class="order-action">
                                        <a href="#"
                                            class="btn btn-outline btn-default btn-block btn-sm btn-rounded">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="order-id">#2318</td>
                                    <td class="order-date">August 20, 2021</td>
                                    <td class="order-status">Processing</td>
                                    <td class="order-total">
                                        <span class="order-price">$321.00</span> for
                                        <span class="order-quantity"> 1</span> item
                                    </td>
                                    <td class="order-action">
                                        <a href="#"
                                            class="btn btn-outline btn-default btn-block btn-sm btn-rounded">View</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <a href="shop-banner-sidebar.html" class="btn btn-dark btn-rounded btn-icon-right">Go
                            Shop<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                    <!-- DownLoads Tab -->
                    <div class="tab-pane" id="account-downloads">
                        <div class="icon-box icon-box-side icon-box-light">
                            <span class="mr-2 icon-box-icon icon-downloads">
                                <i class="w-icon-download"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title ls-normal">Downloads</h4>
                            </div>
                        </div>
                        <p class="mb-4">No downloads available yet.</p>
                        <a href="shop-banner-sidebar.html" class="btn btn-dark btn-rounded btn-icon-right">Go
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
                                <div class="ecommerce-address billing-address pr-lg-8">
                                    <h4 class="title title-underline ls-25 font-weight-bold">Billing Address</h4>
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
                                                    <th>Address:</th>
                                                    <td>{{ $current_user->address }}</td>
                                                </tr>
                                                <tr>
                                                    <th>City:</th>
                                                    <td>{{ $current_user->city }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Country:</th>
                                                    <td>{{ $current_user->country }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Postcode:</th>
                                                    <td>{{ $current_user->postcode }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Phone:</th>
                                                    <td>{{ $current_user->phone }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </address>
                                   
                                </div>
                            </div>
                            <div class="mb-6 col-sm-6">
                                <div class="ecommerce-address shipping-address pr-lg-8">
                                    <h4 class="title title-underline ls-25 font-weight-bold">Shipping Address</h4>
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
                                                    <th>Address:</th>
                                                    <td>{{ $current_user->saddress }}</td>
                                                </tr>
                                                <tr>
                                                    <th>City:</th>
                                                    <td>{{ $current_user->scity }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Country:</th>
                                                    <td>{{ $current_user->scountry }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Postcode:</th>
                                                    <td>{{ $current_user->spostcode }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Phone:</th>
                                                    <td>{{ $current_user->phone }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </address>
                                    
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="accordion accordion-bg accordion-gutter-md accordion-border ">
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#collapse1-1" class="expand">Edit Billing Address</a>
                                        </div>
                                        <div id="collapse1-1" class="card-body collapsed">
                                            <form id="demo-form" class="quform from-prevent-multiple-submits" action="{{ route('billingupdate',$current_user->id) }}"
                                                method="post" enctype="multipart/form-data">
                                                @csrf

                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4">Address </label>
                                                        <input  type="text" name="address" class="form-control"
                                                            id="address" value="{{ $current_user->address }}">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="inputPassword4">Country</label>
                                                        <input type="text" name="country" class="form-control"
                                                            id="country" value="{{ $current_user->country }}">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4">City </label>
                                                        <input  type="text" name="city" class="form-control"
                                                            id="city" value="{{ $current_user->city }}">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4">Post Code </label>
                                                        <input  type="number" name="postcode"
                                                            class="form-control" id="postcode" value="{{ $current_user->postcode }}">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4">State</label>
                                                        <input  type="text" name="state"
                                                            class="form-control" id="state" value="{{ $current_user->state }}">
                                                    </div>
                                                </div>

                                                  
                                                        
                                                <div class="my-4 form-checkbox d-flex align-items-center">
                                    <input class="mr-4  form-check-input" type="checkbox" name="shipping_copy_billing_info" id="shippingcopybillinginfo">
                                    <label for="shippingcopybillinginfo" style="color:red">Do you want to Update the shipping address as above data ?</label>
                                </div>
                                                  
                                                <button class="mt-3 btn btn-primary">Edit Billing Now</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#collapse1-1" class="expand">Edit Shipping Address</a>
                                        </div>
                                        <div id="collapse1-1" class="card-body collapsed">
                                            <form id="demo-form" class="quform from-prevent-multiple-submits" action="{{ route('shippingupdate',$current_user->id) }}"
                                                method="post" enctype="multipart/form-data">
                                                @csrf

                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4">Address </label>
                                                        <input  type="text" name="saddress" class="form-control"
                                                            id="saddress" value="{{ $current_user->saddress }}">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="inputPassword4">Country</label>
                                                        <input type="text" name="scountry" class="form-control"
                                                            id="scountry" value="{{ $current_user->scountry }}">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4">City </label>
                                                        <input  type="text" name="scity" class="form-control"
                                                            id="scity" value="{{ $current_user->scity }}">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4">Post Code </label>
                                                        <input  type="number" name="spostcode"
                                                            class="form-control" id="spostcode" value="{{ $current_user->spostcode }}">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4">State</label>
                                                        <input  type="text" name="sstate"
                                                            class="form-control" id="sstate" value="{{ $current_user->sstate }}">
                                                    </div>
                                                </div>
                                                <button  class="mt-3 btn btn-primary btn-rounded">Edit Shipping Address</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                        <form class="form account-details-form" action="{{ route('updateuseraccount',$current_user->id) }}" method="post">
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
                </div>
            </div>
        </div>
    </div>
    <!-- End of PageContent -->
</main>
<!-- End of Main -->
@endsection