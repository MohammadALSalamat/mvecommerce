@extends('frontend.frontend_layout.main_desgin')
@section('mytitle','CheckOut' )
@section('content')
 <!-- Start of Main -->
 <style>
    div.checkRadioContainer1> label > input {
	visibility: hidden;
}

div.checkRadioContainer1 {
	max-width: 80%;
}
div.checkRadioContainer1> label {
	display: block;
	border: 2px dashed grey;
	margin-bottom: -2px;
	cursor: pointer;
    margin: 10px 0
}

div.checkRadioContainer1> label:hover {
	background-color: AliceBlue;
}

div.checkRadioContainer1> label > span {
	display: inline-block;
	vertical-align: top;
	line-height: 2em;
}

div.checkRadioContainer1> label > input + i {
	visibility: hidden;
	color: green;
	margin-left: 10px;
	margin-right: 0.2em;
}

div.checkRadioContainer1> label > input:checked + i {
	visibility: visible;
}
</style>
        <main class="main checkout">
            <!-- Start of Breadcrumb -->
            @if(Config::get('app.locale') == 'en')
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb shop-breadcrumb bb-no">
                        <li class="passed"><a href="{{ route('viewcart') }}">View Products</a></li>
                        <li class="active"><a href="{{ route('checkout') }}">Checkout</a></li>
                        <li><a href="#">Order Complete</a></li>
                    </ul>
                </div>
            </nav>
            @else
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb shop-breadcrumb bb-no">
                        <li><a href="#">اكتمال الدفع</a></li>
                        <li class="active"><a href="{{ route('checkout') }}">صفحة الدفع</a></li>
                        <li class="passed"><a href="{{ route('viewcart') }}">سلة المشتريات</a></li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->
            @endif
            <!-- Start of PageContent -->
            <div class="page-content">
                <div class="container">
                    <form class="form checkout-form" action="{{ route('checkout_process') }}" method="post">
                        @csrf
                        <div class="row mb-9">
                            <!-- hidden info for checkout -->
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            @if(Config::get('app.locale') == 'en')

                            <div class="col-lg-7 pr-lg-4 mb-4">
                                <h3 class="title billing-title text-uppercase ls-10 pt-1 pb-3 mb-0">
                                    Deliver Details ( Reciver)
                                </h3>
                                @if(empty($user_locations) || count($user_locations) == 0 )
                                   <div class="modal-body">
                                    Delivery options and delivery speeds may vary for different locations <br>
                                    <b class="mt-2 mb-2">The Current user does not have any address stores so Please Click below to add new addresses
                                    </b>
                                    </div>
                                        <a href="{{route('userdashboard').'/#account-addresses'}}" class=""><button type="submit"
                                                class="btn btn-primary">Add New Address</button></a>
                                   @else
                                       <div class="modal-body">
                                           @csrf
                                           <div class="checkRadioContainer1">
                                            @foreach ($user_locations as $location )
                                            <label style=" padding:10px">
                                                <input type="hidden" name="location_id_selected" value="{{ $location->id }}">
                                                <input type="radio" name="radioGroup" @if($location->themain_address == 1) checked  @endif  />
                                                <i class="fa fa-check fa-2x"></i>
                                                <span style="width:80%"> <b> Deliver's Name : </b> {{ $location->full_name }}@if($location->themain_address == 1)<b style="color:red;float:right">( Deliver to this location )</b></span> @endif<br>
                                                <span> <b>Deliver To : </b> {{ $location->address }}, {{ $location->full_street_info }} ,{{ $location->city}},{{ $location->country  }}</span>
                                            </label>
                                            @endforeach
                                        </div>
                                       </div>
                                   @endif
                            </div>
                            <div class="col-lg-5 mb-4 sticky-sidebar-wrapper">
                                <div class="order-summary-wrapper sticky-sidebar">
                                    <h3 class="title text-uppercase ls-10">Your Order</h3>
                                    <div class="order-summary">
                                        <table class="order-table">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">
                                                        <b>Products</b>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->content() as $item)   
                                                <!-- hidden info for checkout -->
                                                <input type="hidden" name="sub_total" value="{{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}">
                                                    <tr class="bb-no">
                                                        <td style="word-wrap:break-word;
                                                        white-space: normal;" class="product-name">{{ $item->name }} <i
                                                                class="fas fa-times"></i> <span
                                                                class="product-quantity">{{ $item->qty }}</span></td>
                                                        <td class="product-total">{{ number_format($item->price) }} AED</td>
                                                    </tr>
                                                @endforeach
                                                @if(session()->has('coupon'))
                                                <tr class="cart-subtotal bb-no">
                                                    <td>
                                                        <b>Subtotal</b>
                                                    </td>
                                                    <td>
                                                        <b> {{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}} AED</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                      <td>
                                                        <b>Coupon</b>
                                                    </td>
                                                    <td>
                                                        <b> {{\Illuminate\Support\Facades\Session::get('coupon')['value']}} AED</b>
                                                    </td>
                                                </tr>
                                                @else
                                                <tr>
                                                    <td>
                                                        <b>Subtotal</b>
                                                    </td>
                                                    <td>
                                                        <b> {{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}} AED</b>
                                                    </td>
                                                    </tr>
                                                <tr>
                                                    <td>
                                                        <b>Coupon</b>
                                                    </td>
                                                    <td>
                                                        <b> 0 AED</b>
                                                    </td>
                                                </tr>
                                                @endif
                                            </tbody>
                                            <tfoot>
                                                <tr class="shipping-methods">
                                                    <td colspan="2" class="text-left">
                                                        <h4 class="title title-simple bb-no mb-1 pb-0 pt-3">Shipping
                                                        </h4>
                                                        <ul id="shipping-method" class="mb-4">
                                                            @foreach ($shipping_adress as $shipping)
                                                                
                                                            <li><div class="custom-radio">
                                                                    <input type="radio" id="free-shipping"
                                                                    value="{{ $shipping->delivery_charge}}" name="shipping_paid">
                                                                    <label for="free-shipping"
                                                                        class="" >{{ $shipping->shipping_address }} : {{ number_format($shipping->delivery_charge,2)}} AED - <small style="color: #fff; background:rgb(236, 58, 3);padding:5px 10px;border-radius:20px;text-transform:capitalize;text-weight:bold" class=" badge badge-success">{{ $shipping->delivery_Time}}</small></label>
                                                                </div>
                                                            </li>
                                                            @endforeach
                                                            {{-- <li>
                                                                <div class="custom-radio">
                                                                    <input type="radio" id="flat-rate"
                                                                        class="" name="shipping_paid" value="5">
                                                                    <label for="flat-rate"
                                                                        class="">Flat
                                                                        rate: $5.00</label>
                                                                </div>
                                                            </li> --}}
                                                        </ul>
                                                    </td>
                                                </tr>
                                                @if(session()->has('coupon'))
                                                <tr class="order-total">
                                                    <td>
                                                        <b>Total</b>
                                                    </td>
                                                    <td>
                                                        <b> {{number_format((float) str_replace(',','',\Gloudemans\Shoppingcart\Facades\Cart::subtotal()) - session('coupon')['value'])}} AED</b>
                                                        <input type="hidden" name="total_with_copuon" value="{{number_format((float) str_replace(',','',\Gloudemans\Shoppingcart\Facades\Cart::subtotal()) - session('coupon')['value'])}}">
                                                        <input type="hidden" name="total_without_copuon" value="0">
                                                        <input type="hidden" name="coupon_value" value="{{ \Illuminate\Support\Facades\Session::get('coupon')['value'] }}">             
                                                    </td>
                                                </tr>
                                                @else
                                                 <td class="order-total">
                                                        <b>Total</b>
                                                    </td>
                                                    <td>
                                                        <b> {{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}} AED</b>
                                                        <input type="hidden" name="total_without_copuon" value="{{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}">
                                                        <input type="hidden" name="total_with_copuon" value="0">
                                                    </td>
                                                
                                                @endif
                                                
                                            </tfoot>
                                        </table>

                                        <div class="payment-methods" id="payment_method">
                                            <h4 class="title font-weight-bold ls-25 pb-0 mb-1">Payment Methods</h4>
                                            <div class="accordion payment-accordion">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="#cash-on-delivery" class="collapse">Direct Bank Transfor</a>
                                                    </div>
                                                    <div id="cash-on-delivery" class="card-body expanded">
                                                        <p class="mb-0">
                                                            Make your payment directly into our bank account. 
                                                            Please use your Order ID as the payment reference. 
                                                            Your order will not be shipped until the funds have cleared in our account.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="#payment" class="expand">Check Payments</a>
                                                    </div>
                                                    <div id="payment" class="card-body collapsed">
                                                        <p class="mb-0">
                                                            Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="#delivery" class="expand">Cash on delivery</a>
                                                    </div>
                                                    <div id="delivery" class="card-body collapsed">
                                                        <p class="mb-0">
                                                            <input type="radio" name="cod" id="cod">
                                                             Pay with cash upon delivery.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card p-relative">
                                                    <div class="card-header">
                                                        <a href="#paypal" class="expand">Paypal</a>
                                                    </div>
                                                    <a href="https://www.paypal.com/us/webapps/mpp/paypal-popup" class="text-primary paypal-que" 
                                                        onclick="javascript:window.open('https://www.paypal.com/us/webapps/mpp/paypal-popup','WIPaypal',
                                                        'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); 
                                                        return false;">What is PayPal?
                                                    </a>
                                                    <div id="paypal" class="card-body collapsed">
                                                        <p class="mb-0">
                                                            Pay via PayPal, you can pay with your credit cart if you
                                                            don't have a PayPal account.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group place-order pt-6">
                                            <button type="submit" class="btn btn-dark btn-block btn-rounded">Place Order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="col-lg-7 pr-lg-4 mb-4">
                                <h3 class="title billing-title text-uppercase ls-10 pt-1 pb-3 mb-0">
                                    معلومات الفاتورة
                                </h3>
                                <div class="row gutter-sm">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>الاسم الكامل *</label>
                                            <input type="text" class="form-control form-control-md" id="full_name" name="full_name"
                                                required value="{{ $user->full_name }}">
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="form-group mb-3">
                                    <select  id="country-dd" class="form-control">
                                        <option value="">Select Country</option>
                                        @foreach ($countries as $data)
                                        <option value="{{$data->id}}">
                                            {{$data->country}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <select id="state-dd" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select id="city-dd" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                        <label>المدينة *</label>
                                    <input type="text" placeholder="House number and street name"
                                        class="form-control form-control-md mb-2" name="country" id="country" required value="{{ $user->country }}">
                                    
                                </div>
                                <div class="form-group">
                                    <label>الشارع *</label>
                                    <input type="text" placeholder="House number and street name"
                                        class="form-control form-control-md mb-2" name="address" id="address" required value="{{ $user->address }}">
                                    
                                </div>
                                <div class="row gutter-sm">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>المدينة *</label>
                                            <input type="text" id="city" class="form-control form-control-md" name="city" required value="{{ $user->city }}">
                                        </div>
                                        <div class="form-group">
                                            <label>ZIP *</label>
                                            <input type="text" id="postcode" class="form-control form-control-md" name="postcode" required value="{{ $user->postcode }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>State *</label>
                                            <div class="select-box">
                                            <input type="text" id="state" class="form-control form-control-md" name="state" required value="{{ $user->stat }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone *</label>
                                            <input type="text" id="phone" class="form-control form-control-md" name="phone" required value="{{ $user->phone }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-7">
                                    <label>Email address *</label>
                                    <input type="email" class="form-control form-control-md" name="email" required value="{{ $user->email }}">
                                </div>
                                <div class="form-group checkbox-toggle pb-2">
                                    <input type="checkbox" class="custom-checkbox" id="shipping-toggle"
                                        name="shipping-toggle">
                                    <label for="shipping-toggle">Ship to a different address?</label>
                                </div>
                                <div class="checkbox-content">
                                    <div class="row gutter-sm">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label>Full name *</label>
                                                <input type="text" id="sfull_name" class="form-control form-control-md" name="sfull_name"
                                                    required value="{{ $user->full_name }}">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Country *</label>
                                        <input type="text" id="saddress" placeholder="House number and street name"
                                            class="form-control form-control-md mb-2" name="scountry" required value=" {{ $user->scountry }}">
                                    
                                    </div>
                                    <div class="form-group">
                                        <label>Street address *</label>
                                        <input type="text" id="saddress" placeholder="House number and street name"
                                            class="form-control form-control-md mb-2" name="saddress" required value=" {{ $user->saddress }}">
                                    </div>
                                    <div class="row gutter-sm">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Town / City *</label>
                                                <input id="scity" type="text" class="form-control form-control-md" name="scity" required value=" {{ $user->scity }} ">
                                            </div>
                                            <div class="form-group">
                                                <label>Postcode *</label>
                                                <input id="spostcode" type="text" class="form-control form-control-md" name="spostcode" required value=" {{ $user->spostcode }} ">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>state</label>
                                                <input id="sstate" type="text" class="form-control form-control-md" name="sstate" required value=" {{ $user->sstat }} ">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="order-notes">Order notes (optional)</label>
                                    <textarea class="form-control mb-0" id="order-notes" name="note" cols="30"
                                        rows="4"
                                        placeholder="Notes about your order, e.g special notes for delivery"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-5 mb-4 sticky-sidebar-wrapper">
                                <div class="order-summary-wrapper sticky-sidebar">
                                    <h3 class="title text-uppercase ls-10">Your Order</h3>
                                    <div class="order-summary">
                                        <table class="order-table">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">
                                                        <b>Products</b>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->content() as $item)   
                                                <!-- hidden info for checkout -->
                                                <input type="hidden" name="sub_total" value="{{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}">
                                                    <tr class="bb-no">
                                                        <td style="word-wrap:break-word;
                                                        white-space: normal;" class="product-name">{{ $item->name }} <i
                                                                class="fas fa-times"></i> <span
                                                                class="product-quantity">{{ $item->qty }}</span></td>
                                                        <td class="product-total">{{ number_format($item->price) }} AED</td>
                                                    </tr>
                                                @endforeach
                                                @if(session()->has('coupon'))
                                                <tr class="cart-subtotal bb-no">
                                                    <td>
                                                        <b>Subtotal</b>
                                                    </td>
                                                    <td>
                                                        <b> {{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}} AED</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                      <td>
                                                        <b>Coupon</b>
                                                    </td>
                                                    <td>
                                                        <b> {{\Illuminate\Support\Facades\Session::get('coupon')['value']}} AED</b>
                                                    </td>
                                                </tr>
                                                @else
                                                <tr>
                                                    <td>
                                                        <b>Subtotal</b>
                                                    </td>
                                                    <td>
                                                        <b> {{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}} AED</b>
                                                    </td>
                                                    </tr>
                                                <tr>
                                                    <td>
                                                        <b>Coupon</b>
                                                    </td>
                                                    <td>
                                                        <b> 0 AED</b>
                                                    </td>
                                                </tr>
                                                @endif
                                            </tbody>
                                            <tfoot>
                                                <tr class="shipping-methods">
                                                    <td colspan="2" class="text-left">
                                                        <h4 class="title title-simple bb-no mb-1 pb-0 pt-3">Shipping
                                                        </h4>
                                                        <ul id="shipping-method" class="mb-4">
                                                            @foreach ($shipping_adress as $shipping)
                                                                
                                                            <li><div class="custom-radio">
                                                                    <input type="radio" id="free-shipping"
                                                                    value="{{ $shipping->delivery_charge}}" name="shipping_paid">
                                                                    <label for="free-shipping"
                                                                        class="" >{{ $shipping->shipping_address }} : {{ number_format($shipping->delivery_charge,2)}} AED - <small style="color: #fff; background:rgb(236, 58, 3);padding:5px 10px;border-radius:20px;text-transform:capitalize;text-weight:bold" class=" badge badge-success">{{ $shipping->delivery_Time}}</small></label>
                                                                </div>
                                                            </li>
                                                            @endforeach
                                                            {{-- <li>
                                                                <div class="custom-radio">
                                                                    <input type="radio" id="flat-rate"
                                                                        class="" name="shipping_paid" value="5">
                                                                    <label for="flat-rate"
                                                                        class="">Flat
                                                                        rate: $5.00</label>
                                                                </div>
                                                            </li> --}}
                                                        </ul>
                                                    </td>
                                                </tr>
                                                @if(session()->has('coupon'))
                                                <tr class="order-total">
                                                    <td>
                                                        <b>Total</b>
                                                    </td>
                                                    <td>
                                                        <b> {{number_format((float) str_replace(',','',\Gloudemans\Shoppingcart\Facades\Cart::subtotal()) - session('coupon')['value'])}} AED</b>
                                                        <input type="hidden" name="total_with_copuon" value="{{number_format((float) str_replace(',','',\Gloudemans\Shoppingcart\Facades\Cart::subtotal()) - session('coupon')['value'])}}">
                                                        <input type="hidden" name="total_without_copuon" value="0">
                                                        <input type="hidden" name="coupon_value" value="{{ \Illuminate\Support\Facades\Session::get('coupon')['value'] }}">             
                                                    </td>
                                                </tr>
                                                @else
                                                 <td class="order-total">
                                                        <b>Total</b>
                                                    </td>
                                                    <td>
                                                        <b> {{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}} AED</b>
                                                        <input type="hidden" name="total_without_copuon" value="{{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}">
                                                        <input type="hidden" name="total_with_copuon" value="0">
                                                    </td>
                                                
                                                @endif
                                                
                                            </tfoot>
                                        </table>

                                        <div class="payment-methods" id="payment_method">
                                            <h4 class="title font-weight-bold ls-25 pb-0 mb-1">Payment Methods</h4>
                                            <div class="accordion payment-accordion">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="#cash-on-delivery" class="collapse">Direct Bank Transfor</a>
                                                    </div>
                                                    <div id="cash-on-delivery" class="card-body expanded">
                                                        <p class="mb-0">
                                                            Make your payment directly into our bank account. 
                                                            Please use your Order ID as the payment reference. 
                                                            Your order will not be shipped until the funds have cleared in our account.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="#payment" class="expand">Check Payments</a>
                                                    </div>
                                                    <div id="payment" class="card-body collapsed">
                                                        <p class="mb-0">
                                                            Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="#delivery" class="expand">Cash on delivery</a>
                                                    </div>
                                                    <div id="delivery" class="card-body collapsed">
                                                        <p class="mb-0">
                                                            <input type="radio" name="cod" id="cod">
                                                             Pay with cash upon delivery.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card p-relative">
                                                    <div class="card-header">
                                                        <a href="#paypal" class="expand">Paypal</a>
                                                    </div>
                                                    <a href="https://www.paypal.com/us/webapps/mpp/paypal-popup" class="text-primary paypal-que" 
                                                        onclick="javascript:window.open('https://www.paypal.com/us/webapps/mpp/paypal-popup','WIPaypal',
                                                        'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); 
                                                        return false;">What is PayPal?
                                                    </a>
                                                    <div id="paypal" class="card-body collapsed">
                                                        <p class="mb-0">
                                                            Pay via PayPal, you can pay with your credit cart if you
                                                            don't have a PayPal account.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group place-order pt-6">
                                            <button type="submit" class="btn btn-dark btn-block btn-rounded">Place Order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
            <!-- End of PageContent -->
        </main>
        <!-- End of Main -->
@endsection

@section('script')

<script>
    if('#shipping-toggle').on('change',function(e){
e.preventDefault();
if(this.checked){
$('#sfull_name').val($('#full_name').val());
$('#scity').val($('#city').val());
$('#saddress').val($('#address').val());
$('#sstate').val($('#state').val());
$('#scountry').val($('#country').val());
$('#sphone').val($('#phone').val());
$('#spostcode').val($('#postcode').val());
}else{
alert('other')
}
    })
</script>
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
@endsection
