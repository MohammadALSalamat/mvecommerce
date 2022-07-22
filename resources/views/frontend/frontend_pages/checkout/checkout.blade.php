@extends('frontend.frontend_layout.main_desgin')


@if(Config::get('app.locale') == 'en')
@section('mytitle','CheckOut' )
@else
@section('mytitle',' صفحة الدفع ' )
@endif
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
/**
* The CSS shown here will not be introduced in the Quickstart guide, but shows
* how you can use CSS to style your Element's container.
*/
.StripeElement {
  background-color: white;
  padding: 16px 16px;
  border: 1px solid #ccc;

}

.StripeElement--focus {
  // box-shadow: 0 1px 3px 0 #cfd7df;
}

.StripeElement--invalid {
  border-color: #fa755a;
}

.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;
}

#card-errors {
  color: #fa755a;
}
</style>
<script src="https://js.stripe.com/v3/"></script>

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
                    <form class="form checkout-form" action="{{route('checkout_process')}}" method="POST" id=payment-form>
                        @csrf
                        <div class="row mb-9">
                            <!-- hidden info for checkout -->
                            <input type="hidden" id="user_id" name="user_id" value="{{ $user->id }}">
                            @if(Config::get('app.locale') == 'en')

                            <div class="col-lg-7 pr-lg-4 mb-4">
                                <h3 class="title billing-title text-uppercase ls-10 pt-1 pb-3 mb-0">
                                    Deliver Details ( Reciver)
                                </h3>
                                @if(empty($locations) )
                                   <div class="modal-body">
                                    Delivery options and delivery speeds may vary for different locations <br>
                                    <b class="mt-2 mb-2">The Current user does not have any address stores so Please Click below to add new addresses
                                    </b>
                                    </div>
                                        <a href="{{route('userdashboard').'/#account-addresses'}}" class=""><button type="button"
                                                class="btn btn-primary">Add New Address</button></a>
                                   @else
                                       <div class="modal-body">
                                           @csrf
                                <div class="checkRadioContainer1">
                                            <label style=" padding:10px">
                            <input id="location_id_selected" type="hidden" name="location_id_selected" value="{{ $locations->id }}">
                                <input id="radioGroup" type="radio" name="radioGroup" @if($locations->themain_address == 1) checked  @endif  />
                                                <i class="fa fa-check fa-2x"></i>
                                                <span style="width:80%"> <b> Deliver's Name : </b> {{ $locations->full_name }}@if($locations->themain_address == 1)<b style="color:red;float:right">( Deliver to this location )</b></span> @endif<br>
                                                <span> <b>Deliver To : </b> {{ $locations->address }}, {{ $locations->full_street_info }} ,{{ $locations->city}},{{ $locations->country  }}</span>
                                            </label>
                                        </div>
                                        <strong> Click on the Deliver To (located on the header to change the deliver location)</strong>
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
                                <input type="hidden" id="sub_total" name="sub_total" value="{{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}">
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
                            <input type="hidden" id="total_with_copuon" name="total_with_copuon" value="{{number_format((float) str_replace(',','',\Gloudemans\Shoppingcart\Facades\Cart::subtotal()) - session('coupon')['value'])}}">
                            <input type="hidden" id="total_without_copuon" name="total_without_copuon" value="0">
                                <input type="hidden" id="coupon_value" name="coupon_value" value="{{ \Illuminate\Support\Facades\Session::get('coupon')['value'] }}">             
                                                    </td>
                                                </tr>
                                                @else
                                                 <td class="order-total">
                                                        <b>Total</b>
                                                    </td>
                                                    <td>
                                                        <b> {{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}} AED</b>
                                     <input type="hidden" id="total_without_copuon" name="total_without_copuon" value="{{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}">
                                                        <input type="hidden" id="total_with_copuon" name="total_with_copuon" value="0">
                                                    </td>
                                                
                                                @endif
                                                
                                            </tfoot>
                                        </table>

                                        <div class="payment-methods" id="payment_method">
                                            <h4 class="title font-weight-bold ls-25 pb-0 mb-1">Payment Methods</h4>
                                            <div class="accordion payment-accordion">
                                                <div class="card">
                             <div class="card-header">
        <a href="#cash-on-delivery" class="collapse">Using Stripe</a>
                                                    </div>
            <div id="cash-on-delivery" class="card-body expanded">
                            
                            <p class="mb-0 stripe_class">
                        <label for="card-element">
                          Credit or debit card
                        </label>
                        <div id="card-element">
                          <!-- a Stripe Element will be inserted here. -->
                        </div>

                        <!-- Used to display form errors -->
                        <div id="card-errors" role="alert"></div>
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
                                            <button type="submit" id="complete-order" class="btn btn-dark btn-block btn-rounded">Place Order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="col-lg-7 pr-lg-4 mb-4">
                                <h3 class="title billing-title text-uppercase ls-10 pt-1 pb-3 mb-0">
                                    Deliver Details ( Reciver)
                                </h3>
                                @if(empty($locations) )
                                   <div class="modal-body">
                                    قد تختلف خيارات التسليم وسرعات التسليم باختلاف المواقع<br>
                                    <b class="mt-2 mb-2">ليس لدى المستخدم الحالي أي مخازن عناوين ، لذا يُرجى النقر أدناه لإضافة عناوين جديدة
                                    </b>
                                    </div>
                                        <a href="{{route('userdashboard').'/#account-addresses'}}" class=""><button type="button"
                                                class="btn btn-primary">أضف عنوان جديد</button></a>
                                   @else
                                       <div class="modal-body">
                                           @csrf
                                           <div class="checkRadioContainer1">
                                            <label style=" padding:10px">
                                                <input type="hidden" name="location_id_selected" value="{{ $locations->id }}">
                                                <input type="radio" name="radioGroup" @if($locations->themain_address == 1) checked  @endif  />
                                                <i class="fa fa-check fa-2x"></i>
                                                <span style="width:80%"> <b> اسم المرسل: </b> {{ $locations->full_name }}@if($locations->themain_address == 1)<br><b style="color:red;float:right">(تسليم إلى هذا الموقع)</b></span> @endif<br>
                                                <span> <b>يسلم إلى : </b> {{ $locations->address }}, {{ $locations->full_street_info }} ,{{ $locations->city}},{{ $locations->country  }}</span>
                                            </label>
                                        </div>
                                        <strong> انقر فوق تسليم إلى (الموجود في الرأس لتغيير موقع التسليم)</strong>
                                       </div>
                                   @endif
                            </div>
                            <div class="col-lg-5 mb-4 sticky-sidebar-wrapper">
                                <div class="order-summary-wrapper sticky-sidebar">
                                    <h3 class="title text-uppercase ls-10">طلبك</h3>
                                    <div class="order-summary">
                                        <table class="order-table">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">
                                                        <b>منتجات</b>
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
                                                        <td class="product-total">{{ number_format($item->price) }} أ.د</td>
                                                    </tr>
                                                @endforeach
                                                @if(session()->has('coupon'))
                                                <tr class="cart-subtotal bb-no">
                                                    <td>
                                                        <b>المجموع الفرعي</b>
                                                    </td>
                                                    <td>
                                                        <b> {{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}} أ.د</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                      <td>
                                                        <b>قسيمة الخصم</b>
                                                    </td>
                                                    <td>
                                                        <b> {{\Illuminate\Support\Facades\Session::get('coupon')['value']}} أ.د</b>
                                                    </td>
                                                </tr>
                                                @else
                                                <tr>
                                                    <td>
                                                        <b>المجموع الفرعي</b>
                                                    </td>
                                                    <td>
                                                        <b> {{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}} أ.د</b>
                                                    </td>
                                                    </tr>
                                                <tr>
                                                    <td>
                                                        <b>قسيمة الخصم</b>
                                                    </td>
                                                    <td>
                                                        <b> 0 أ.د</b>
                                                    </td>
                                                </tr>
                                                @endif
                                            </tbody>
                                            <tfoot>
                                                <tr class="shipping-methods">
                                                    <td colspan="2" class="text-left">
                                                        <h4 class="title title-simple bb-no mb-1 pb-0 pt-3">شحن
                                                        </h4>
                                                        <ul id="shipping-method" class="mb-4">
                                                            @foreach ($shipping_adress as $shipping)
                                                                
                                                            <li><div class="custom-radio">
                                                                    <input type="radio" id="free-shipping"
                                                                    value="{{ $shipping->delivery_charge}}" name="shipping_paid">
                                                                    <label for="free-shipping"
                                                                        class="" >{{ $shipping->shipping_address }} : {{ number_format($shipping->delivery_charge,2)}} أ.د - <small style="color: #fff; background:rgb(236, 58, 3);padding:5px 10px;border-radius:20px;text-transform:capitalize;text-weight:bold" class=" badge badge-success">{{ $shipping->delivery_Time}}</small></label>
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
                                                        <b> {{number_format((float) str_replace(',','',\Gloudemans\Shoppingcart\Facades\Cart::subtotal()) - session('coupon')['value'])}} أ.د</b>
                                                        <input type="hidden" name="total_with_copuon" value="{{number_format((float) str_replace(',','',\Gloudemans\Shoppingcart\Facades\Cart::subtotal()) - session('coupon')['value'])}}">
                                                        <input type="hidden" name="total_without_copuon" value="0">
                                                        <input type="hidden" name="coupon_value" value="{{ \Illuminate\Support\Facades\Session::get('coupon')['value'] }}">             
                                                    </td>
                                                </tr>
                                                @else
                                                 <td class="order-total">
                                                        <b>المجموع النهائي</b>
                                                    </td>
                                                    <td>
                                                        <b> {{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}} أ.د</b>
                                                        <input type="hidden" name="total_without_copuon" value="{{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}">
                                                        <input type="hidden" name="total_with_copuon" value="0">
                                                    </td>
                                                
                                                @endif
                                                
                                            </tfoot>
                                        </table>

                                        <div class="payment-methods" id="payment_method">
                                            <h4 class="title font-weight-bold ls-25 pb-0 mb-1">طرق الدفع</h4>
                                            <div class="accordion payment-accordion">
                                            
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="#delivery" class="expand">الدفع عند الاستلام</a>
                                                    </div>
                                                    <div id="delivery" class="card-body collapsed">
                                                        <p class="mb-0">
                                                            <input type="radio" name="cod" id="cod">
                                                             ادفع نقدا عند الاستلام.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group place-order pt-6">
                                            <button type="submit" class="btn btn-dark btn-block btn-rounded">تكملة عملية الشراء</button>
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

 <script src="https://js.braintreegateway.com/web/dropin/1.13.0/js/dropin.min.js"></script>

    <script>
        (function(){
            // Create a Stripe client
            var stripe = Stripe('{{ config('services.stripe.key') }}');
            // Create an instance of Elements
            var elements = stripe.elements();
            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
              base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Roboto", Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                  color: '#aab7c4'
                }
              },
              invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
              }
            };
            // Create an instance of the card Element
            var card = elements.create('card', {
                style: style,
                hidePostalCode: true
            });
            // Add an instance of the card Element into the `card-element` <div>
            card.mount('#card-element');
            // Handle real-time validation errors from the card Element.
            card.addEventListener('change', function(event) {
              var displayError = document.getElementById('card-errors');
              if (event.error) {
                displayError.textContent = event.error.message;
              } else {
                displayError.textContent = '';
              }
            });
            // Handle form submission
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
              event.preventDefault();
              // Disable the submit button to prevent repeated clicks
              document.getElementById('complete-order').disabled = true;
              var options = {
                name: document.getElementById('user_id').value,
                // address_line1: document.getElementById('address').value,
                // address_city: document.getElementById('city').value,
                // address_state: document.getElementById('province').value,
                // address_zip: document.getElementById('postalcode').value
              }
              stripe.createToken(card, options).then(function(result) {
                if (result.error) {
                  // Inform the user if there was an error
                  var errorElement = document.getElementById('card-errors');
                  errorElement.textContent = result.error.message;
                  // Enable the submit button
                  document.getElementById('complete-order').disabled = false;
                } else {
                  // Send the token to your server
                  stripeTokenHandler(result.token);
                }
              });
            });
            function stripeTokenHandler(token) {
              // Insert the token ID into the form so it gets submitted to the server
              var form = document.getElementById('payment-form');
              var hiddenInput = document.createElement('input');
              hiddenInput.setAttribute('type', 'hidden');
              hiddenInput.setAttribute('name', 'stripeToken');
              hiddenInput.setAttribute('value', token.id);
              form.appendChild(hiddenInput);
              // Submit the form
              form.submit();
            }
            // PayPal Stuff
            var form = document.querySelector('#paypal-payment-form');
            var client_token = "#";
            braintree.dropin.create({
              authorization: client_token,
              selector: '#bt-dropin',
              paypal: {
                flow: 'vault'
              }
            }, function (createErr, instance) {
              if (createErr) {
                console.log('Create Error', createErr);
                return;
              }
              // remove credit card option
              var elem = document.querySelector('.braintree-option__card');
              elem.parentNode.removeChild(elem);
              form.addEventListener('submit', function (event) {
                event.preventDefault();
                instance.requestPaymentMethod(function (err, payload) {
                  if (err) {
                    console.log('Request Payment Method Error', err);
                    return;
                  }
                  // Add the nonce to the form and submit
                  document.querySelector('#nonce').value = payload.nonce;
                  form.submit();
                });
              });
            });
        })();
    </script>

@endsection
