@extends('frontend.frontend_layout.main_desgin')
@section('content')
 <!-- Start of Main -->
        <main class="main checkout">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb shop-breadcrumb bb-no">
                        <li class="passed"><a href="{{ route('viewcart') }}">View Products</a></li>
                        <li class="active"><a href="{{ route('checkout') }}">Checkout</a></li>
                        <li><a href="order.html">Order Complete</a></li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->


            <!-- Start of PageContent -->
            <div class="page-content">
                <div class="container">
                    {{-- <div class="login-toggle">
                        Returning customer? <a href="#"
                            class="show-login font-weight-bold text-uppercase text-dark">Login</a>
                    </div>
                    <form class="login-content">
                        <p>If you have shopped with us before, please enter your details below. 
                            If you are a new customer, please proceed to the Billing section.</p>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>Username or email *</label>
                                    <input type="text" class="form-control form-control-md" name="name"
                                        required>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>Password *</label>
                                    <input type="text" class="form-control form-control-md" name="password"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" class="custom-checkbox" id="remember" name="remember">
                            <label for="remember" class="mb-0 lh-2">Remember me</label>
                            <a href="#" class="ml-3">Last your password?</a>
                        </div>
                        <button class="btn btn-rounded btn-login">Login</button>
                    </form> --}}
                    {{-- <div class="coupon-toggle">
                        Have a coupon? <a href="#"
                            class="show-coupon font-weight-bold text-uppercase text-dark">Enter your
                            code</a>
                    </div>
                    <div class="coupon-content mb-4">
                        <p>If you have a coupon code, please apply it below.</p>
                        <div class="input-wrapper-inline">
                            <input type="text" name="coupon_code" class="form-control form-control-md mr-1 mb-2" placeholder="Coupon code" id="coupon_code">
                            <button type="submit" class="btn button btn-rounded btn-coupon mb-2" name="apply_coupon" value="Apply coupon">Apply Coupon</button>
                        </div>
                    </div> --}}
                    <form class="form checkout-form" action="{{ route('checkout_process') }}" method="post">
                        @csrf
                        <div class="row mb-9">
                            <div class="col-lg-7 pr-lg-4 mb-4">
                                <h3 class="title billing-title text-uppercase ls-10 pt-1 pb-3 mb-0">
                                    Billing Details
                                </h3>
                                <div class="row gutter-sm">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>Full name *</label>
                                            <input type="text" class="form-control form-control-md" id="full_name" name="full_name"
                                                required value="{{ auth()->user()->full_name }}">
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="form-group">
                                        <label>Country *</label>
                                    <input type="text" placeholder="House number and street name"
                                        class="form-control form-control-md mb-2" name="country" id="country" required value="{{ auth()->user()->country }}">
                                    
                                </div>
                                <div class="form-group">
                                    <label>Street address *</label>
                                    <input type="text" placeholder="House number and street name"
                                        class="form-control form-control-md mb-2" name="address" id="address" required value="{{ auth()->user()->address }}">
                                    
                                </div>
                                <div class="row gutter-sm">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Town / City *</label>
                                            <input type="text" id="city" class="form-control form-control-md" name="city" required value="{{ auth()->user()->city }}">
                                        </div>
                                        <div class="form-group">
                                            <label>ZIP *</label>
                                            <input type="text" id="postcode" class="form-control form-control-md" name="postcode" required value="{{ auth()->user()->postcode }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>State *</label>
                                            <div class="select-box">
                                            <input type="text" id="state" class="form-control form-control-md" name="state" required value="{{ auth()->user()->state }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone *</label>
                                            <input type="text" id="phone" class="form-control form-control-md" name="phone" required value="{{ auth()->user()->phone }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-7">
                                    <label>Email address *</label>
                                    <input type="email" class="form-control form-control-md" name="email" required value="{{ auth()->user()->email }}">
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
                                                    required value="{{ auth()->user()->full_name }}">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Country *</label>
                                        <input type="text" id="saddress" placeholder="House number and street name"
                                            class="form-control form-control-md mb-2" name="scountry" required value=" {{ auth()->user()->scountry }}">
                                    
                                    </div>
                                    <div class="form-group">
                                        <label>Street address *</label>
                                        <input type="text" id="saddress" placeholder="House number and street name"
                                            class="form-control form-control-md mb-2" name="saddress" required value=" {{ auth()->user()->saddress }}">
                                    </div>
                                    <div class="row gutter-sm">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Town / City *</label>
                                                <input id="scity" type="text" class="form-control form-control-md" name="scity" required value=" {{ auth()->user()->scity }} ">
                                            </div>
                                            <div class="form-group">
                                                <label>Postcode *</label>
                                                <input id="spostcode" type="text" class="form-control form-control-md" name="spostcode" required value=" {{ auth()->user()->spostcode }} ">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>state</label>
                                                <input id="sstate" type="text" class="form-control form-control-md" name="sstate" required value=" {{ auth()->user()->sstate }} ">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="order-notes">Order notes (optional)</label>
                                    <textarea class="form-control mb-0" id="order-notes" name="order-notes" cols="30"
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
                                                        <b>Product</b>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->content() as $item)                    
                                                    <tr class="bb-no">
                                                        <td class="product-name">{{ $item->name }} <i
                                                                class="fas fa-times"></i> <span
                                                                class="product-quantity">{{ $item->qty }}</span></td>
                                                        <td class="product-total">{{ $item->price }} AED</td>
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
                                                 <td>
                                                        <b>Subtotal</b>
                                                    </td>
                                                    <td>
                                                        <b> {{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}} AED</b>
                                                    </td>
                                                    <td>
                                                        <b>Coupon</b>
                                                    </td>
                                                    <td>
                                                        <b> 0 AED</b>
                                                    </td>
                                                @endif
                                            </tbody>
                                            <tfoot>
                                                <tr class="shipping-methods">
                                                    <td colspan="2" class="text-left">
                                                        <h4 class="title title-simple bb-no mb-1 pb-0 pt-3">Shipping
                                                        </h4>
                                                        <ul id="shipping-method" class="mb-4">
                                                            <li>
                                                                <div class="custom-radio">
                                                                    <input type="radio" id="free-shipping"
                                                                        class="custom-control-input" name="shipping_free">
                                                                    <label for="free-shipping"
                                                                        class="custom-control-label color-dark">Free
                                                                        Shipping</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="custom-radio">
                                                                    <input type="radio" id="local-pickup"
                                                                        class="custom-control-input" name="shipping_local">
                                                                    <label for="local-pickup"
                                                                        class="custom-control-label color-dark">Local
                                                                        Pickup</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="custom-radio">
                                                                    <input type="radio" id="flat-rate"
                                                                        class="custom-control-input" name="shipping_paid">
                                                                    <label for="flat-rate"
                                                                        class="custom-control-label color-dark">Flat
                                                                        rate: $5.00</label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                @if(session()->has('coupon'))
                                                <tr class="order-total">
                                                    <td>
                                                        <b>Total</b>
                                                    </td>
                                                    <td>
                                                        <b> {{\Gloudemans\Shoppingcart\Facades\Cart::subtotal() - session('coupon')['value']}} AED</b>
                                                        <input type="hidden" name="total_with_copuon" value="{{\Gloudemans\Shoppingcart\Facades\Cart::subtotal() - session('coupon')['value']}}">
                                                    </td>
                                                </tr>
                                                @else
                                                 <td class="order-total">
                                                        <b>Total</b>
                                                    </td>
                                                    <td>
                                                        <b> {{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}} AED</b>
                                                        <input type="hidden" name="total_without_copuon" value="{{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}">
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
@endsection