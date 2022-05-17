@if(Config::get('app.locale') == 'en')

   <div class="col-lg-8 pr-lg-4 mb-6">
       <table class="shop-table cart-table">
           <thead>
               <tr>
                   <th class="product-name"><span>Product</span></th>
                   <th></th>
                   <th class="product-price"><span>Price</span></th>
                   <th class="product-quantity"><span>Quantity</span></th>
                   <th class="product-subtotal"><span>Subtotal</span></th>
               </tr>
           </thead>
           <tbody>
               @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->content() as $item)
               @php
                            $other_image = explode(',', $item->model->image);
               @endphp
               <tr>
                   <td class="product-thumbnail">
                       <div class="p-relative">
                           <a href="{{ route('singleproduct',$item->model->slug) }}">
                               <figure class="product-media">
                                @if(count($other_image) > 1)
                                <img src="{{ asset($other_image[0]) }}" alt="Product" style="width: 100% !important;
                                height: 90px !important;object-fit: contain;" />
                                 <img src="{{ asset($other_image[1]) }}" alt="Product" style="width: 100% !important;
                                 height: 90px !important;object-fit: contain;" />
                                 @else
                                 <img src="{{ asset($other_image[0]) }}" alt="Product" style="width: 100% !important;
                                 height: 90px !important;object-fit: contain;" />
                                 @endif                                </figure>
                           </a>
                           <button type="submit" class="btn btn-close cart_delete" aria-label="button"
                               data-id="{{ $item->rowId }}"><i class="fas fa-times"></i></button>
                       </div>
                   </td>
                   <td class="product-name">
                       <a href="{{ route('singleproduct',$item->model->slug) }}">
                           {{ $item->name }}
                       </a>
                   </td>
                   <td class="product-price"><span class="amount">AED {{ $item->price }}</span></td>
                   <td class="product-qty">
                       <div class="quantity">
                           <input class="qty form-control" type="number" min="1" max="99" name="quantity"
                            data-id="{{ $item->rowId }}" id="qty-input-{{ $item->rowId }}" value="{{ $item->qty }}">

                           <input type="hidden" name="stockproduct" data-id="{{ $item->rowId }}"
                            data-product-quantity="{{ $item->model->stock }}" id="update-cart-{{ $item->rowId }}">
                       </div>
                   </td>
                   <td class="product-subtotal">
                       <span class="amount">AED {{ $item->subtotal() }}</span>
                   </td>
               </tr>
               @endforeach
           </tbody>
       </table>
       </table>
       <div class="cart-action mb-6">
           <a href="{{ route('homepage') }}" class="btn btn-dark btn-rounded btn-icon-left btn-shopping mr-auto"><i
                   class="w-icon-long-arrow-left"></i>Continue Shopping</a>
         <a href="{{ route('clear_cart') }}"><button type="button" class="btn btn-rounded btn-default btn-clear" name="clear_cart"
               value="Clear Cart">Clear Cart</button></a>  
        
       </div>

       <form class="coupon" action="{{ route('code_coupon')}}" id="form_coupon" method="POST">
           @csrf
           <h5 class="title coupon-title font-weight-bold text-uppercase">Coupon Discount</h5>
           <input type="text" class="form-control mb-4" name="code_coupon" placeholder="Enter coupon code here..."
               required />
           <button class="btn btn-dark btn-outline btn-rounded code_coupon_click">Apply Coupon</button>
       </form>
   </div>
   <div class="col-lg-4 sticky-sidebar-wrapper">
       <div class="sticky-sidebar">
           <div class="cart-summary mb-4">
               <h3 class="cart-title text-uppercase">Cart Totals</h3>
               @if(session()->has('coupon'))
               <div class="cart-subtotal d-flex align-items-center justify-content-between">
                   <label class="ls-25">Subtotal </label>
                   <span>AED {{\Gloudemans\Shoppingcart\Facades\Cart::subtotal() }}</span>
               </div>
               <div class="cart-subtotal d-flex align-items-center justify-content-between">
                   <label class="ls-25">Coupon </label>
                   <span>AED {{\Illuminate\Support\Facades\Session::get('coupon')['value'] }}</span>
               </div>
               @else
               <div class="cart-subtotal d-flex align-items-center justify-content-between">

                   <label class="ls-25">Subtotal</label>
                   <span>AED {{ \Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}</span>
               </div>

               <div class="cart-subtotal d-flex align-items-center justify-content-between">
                   <label class="ls-25">Coupon </label>
                   <span>AED 0</span>
               </div>
               @endif

               <hr class="divider">
               <!-- Add new Shipping section and calculation -->

               {{-- <ul class="shipping-methods mb-2">
                                        <li>
                                            <label
                                                class="shipping-title text-dark font-weight-bold">Shipping</label>
                                        </li>
                                        <li>
                                            <div class="custom-radio">
                                                <input type="radio" id="free-shipping" class="custom-control-input"
                                                    name="shipping">
                                                <label for="free-shipping"
                                                    class="custom-control-label color-dark">Free
                                                    Shipping</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-radio">
                                                <input type="radio" id="local-pickup" class="custom-control-input"
                                                    name="shipping">
                                                <label for="local-pickup"
                                                    class="custom-control-label color-dark">Local
                                                    Pickup</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-radio">
                                                <input type="radio" id="flat-rate" class="custom-control-input"
                                                    name="shipping">
                                                <label for="flat-rate" class="custom-control-label color-dark">Flat
                                                    rate:
                                                    $5.00</label>
                                            </div>
                                        </li>
                                    </ul> --}}
               {{-- <div class="shipping-calculator">
                                        <p class="shipping-destination lh-1">Shipping to <strong>CA</strong>.</p>

                                        <form class="shipping-calculator-form">
                                            <div class="form-group">
                                                <div class="select-box">
                                                    <select name="country" class="form-control form-control-md">
                                                        <option value="default" selected="selected">United States
                                                            (US)
                                                        </option>
                                                        <option value="us">United States</option>
                                                        <option value="uk">United Kingdom</option>
                                                        <option value="fr">France</option>
                                                        <option value="aus">Australia</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="select-box">
                                                    <select name="state" class="form-control form-control-md">
                                                        <option value="default" selected="selected">California
                                                        </option>
                                                        <option value="ohaio">Ohaio</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control form-control-md" type="text"
                                                    name="town-city" placeholder="Town / City">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control form-control-md" type="text"
                                                    name="zipcode" placeholder="ZIP">
                                            </div>
                                            <button type="submit" class="btn btn-dark btn-outline btn-rounded">Update
                                                Totals</button>
                                        </form>
                                    </div> --}}

               <hr class="divider mb-6">
               @if(session()->has('coupon'))
               <div class="order-total d-flex justify-content-between align-items-center">
                   <label>Total</label>
                   <span class="ls-50">AED
                       {{number_format((float) str_replace(',','',\Gloudemans\Shoppingcart\Facades\Cart::subtotal()) - session('coupon')['value'],2) }}</span>
               </div>
               @else
               <div class="order-total d-flex justify-content-between align-items-center">
                   <label>Total</label>
                   <span class="ls-50">AED {{\Gloudemans\Shoppingcart\Facades\Cart::subtotal() }}</span>
               </div>
               @endif
               <a href="{{ route('checkout') }}"
                   class="btn btn-block btn-dark btn-icon-right btn-rounded  btn-checkout">
                   Proceed to checkout<i class="w-icon-long-arrow-right"></i></a>
           </div>
       </div>
   </div>

   @else
<div class="col-lg-8 pr-lg-4 mb-6">
    <table class="shop-table cart-table">
        <thead>
            <tr>
                <th class="product-name"><span>المنتج</span></th>
                <th></th>
                <th class="product-price"><span>السعر</span></th>
                <th class="product-quantity"><span>الكمية</span></th>
                <th class="product-subtotal"><span>المبلغ</span></th>
            </tr>
        </thead>
        <tbody>
            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->content() as $item)
            @php
            $other_image = explode(',', $item->model->image);
@endphp
            <tr>
                <td class="product-thumbnail">
                    <div class="p-relative">
                        <a href="{{ route('singleproduct',$item->model->slug) }}">
                            <figure class="product-media">
                                @if(count($other_image) > 1)
                                <img src="{{ asset($other_image[0]) }}" alt="Product" style="width: 100% !important;
                                height: 90px !important;object-fit: contain;" />
                                 <img src="{{ asset($other_image[1]) }}" alt="Product" style="width: 100% !important;
                                 height: 90px !important;object-fit: contain;" />
                                 @else
                                 <img src="{{ asset($other_image[0]) }}" alt="Product" style="width: 100% !important;
                                 height: 90px !important;object-fit: contain;" />
                                 @endif 
                                                            </figure>
                        </a>
                        <button type="submit" class="btn btn-close cart_delete" aria-label="button"
                            data-id="{{ $item->rowId }}"><i class="fas fa-times"></i></button>
                    </div>
                </td>
                <td class="product-name">
                    <a href="{{ route('singleproduct',$item->model->slug) }}">
                        {{ $item->name }}
                    </a>
                </td>
                <td class="product-price"><span class="amount">{{ $item->price }} د.أ</span></td>
                <td class="product-qty">
                    <div class="quantity">
                        <input class="qty form-control" type="number" min="1" max="99" name="quantity"
                         data-id="{{ $item->rowId }}" id="qty-input-{{ $item->rowId }}" value="{{ $item->qty }}">

                        <input type="hidden" name="stockproduct" data-id="{{ $item->rowId }}"
                         data-product-quantity="{{ $item->model->stock }}" id="update-cart-{{ $item->rowId }}">
                    </div>
                </td>
                <td class="product-subtotal">
                    <span class="amount">{{ $item->subtotal() }} د.أ</span>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    </table>
    <div class="cart-action mb-6">
        <a href="{{ route('homepage') }}" class="btn btn-dark btn-rounded btn-icon-left btn-shopping mr-auto"><i
                class="w-icon-long-arrow-left"></i>متابعة التسوق</a>
      <a href="{{ route('clear_cart') }}"><button type="button" class="btn btn-rounded btn-default btn-clear" name="clear_cart"
            value="Clear Cart">حذف كل المنتجات</button></a>  
     
    </div>

    <form class="coupon" action="{{ route('code_coupon')}}" id="form_coupon" method="POST">
        @csrf
        <h5 class="title coupon-title font-weight-bold text-uppercase">قسيمة شراء</h5>
        <input type="text" class="form-control mb-4" name="code_coupon" placeholder="Enter coupon code here..."
            required />
        <button class="btn btn-dark btn-outline btn-rounded code_coupon_click">تفعيل القسيمة</button>
    </form>
</div>
<div class="col-lg-4 sticky-sidebar-wrapper">
    <div class="sticky-sidebar">
        <div class="cart-summary mb-4">
            <h3 class="cart-title text-uppercase">المبلغ الأجمالي</h3>
            @if(session()->has('coupon'))
            <div class="cart-subtotal d-flex align-items-center justify-content-between">
                <label class="ls-25">المبلغ </label>
                <span> {{\Gloudemans\Shoppingcart\Facades\Cart::subtotal() }} د.أ</span>
            </div>
            <div class="cart-subtotal d-flex align-items-center justify-content-between">
                <label class="ls-25">القسيمة </label>
                <span> {{\Illuminate\Support\Facades\Session::get('coupon')['value'] }} د.أ</span>
            </div>
            @else
            <div class="cart-subtotal d-flex align-items-center justify-content-between">

                <label class="ls-25">المبلغ</label>
                <span> {{ \Gloudemans\Shoppingcart\Facades\Cart::subtotal()}} د.أ</span>
            </div>

            <div class="cart-subtotal d-flex align-items-center justify-content-between">
                <label class="ls-25">القسيمة </label>
                <span>0 د.أ</span>
            </div>
            @endif

            <hr class="divider">
            <!-- Add new Shipping section and calculation -->

            {{-- <ul class="shipping-methods mb-2">
                                     <li>
                                         <label
                                             class="shipping-title text-dark font-weight-bold">Shipping</label>
                                     </li>
                                     <li>
                                         <div class="custom-radio">
                                             <input type="radio" id="free-shipping" class="custom-control-input"
                                                 name="shipping">
                                             <label for="free-shipping"
                                                 class="custom-control-label color-dark">Free
                                                 Shipping</label>
                                         </div>
                                     </li>
                                     <li>
                                         <div class="custom-radio">
                                             <input type="radio" id="local-pickup" class="custom-control-input"
                                                 name="shipping">
                                             <label for="local-pickup"
                                                 class="custom-control-label color-dark">Local
                                                 Pickup</label>
                                         </div>
                                     </li>
                                     <li>
                                         <div class="custom-radio">
                                             <input type="radio" id="flat-rate" class="custom-control-input"
                                                 name="shipping">
                                             <label for="flat-rate" class="custom-control-label color-dark">Flat
                                                 rate:
                                                 $5.00</label>
                                         </div>
                                     </li>
                                 </ul> --}}
            {{-- <div class="shipping-calculator">
                                     <p class="shipping-destination lh-1">Shipping to <strong>CA</strong>.</p>

                                     <form class="shipping-calculator-form">
                                         <div class="form-group">
                                             <div class="select-box">
                                                 <select name="country" class="form-control form-control-md">
                                                     <option value="default" selected="selected">United States
                                                         (US)
                                                     </option>
                                                     <option value="us">United States</option>
                                                     <option value="uk">United Kingdom</option>
                                                     <option value="fr">France</option>
                                                     <option value="aus">Australia</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <div class="select-box">
                                                 <select name="state" class="form-control form-control-md">
                                                     <option value="default" selected="selected">California
                                                     </option>
                                                     <option value="ohaio">Ohaio</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <input class="form-control form-control-md" type="text"
                                                 name="town-city" placeholder="Town / City">
                                         </div>
                                         <div class="form-group">
                                             <input class="form-control form-control-md" type="text"
                                                 name="zipcode" placeholder="ZIP">
                                         </div>
                                         <button type="submit" class="btn btn-dark btn-outline btn-rounded">Update
                                             Totals</button>
                                     </form>
                                 </div> --}}

            <hr class="divider mb-6">
            @if(session()->has('coupon'))
            <div class="order-total d-flex justify-content-between align-items-center">
                <label>المبلغ الكلي</label>
                <span class="ls-50">
                    {{number_format((float) str_replace(',','',\Gloudemans\Shoppingcart\Facades\Cart::subtotal()) - session('coupon')['value'],2) }} د.أ</span>
            </div>
            @else
            <div class="order-total d-flex justify-content-between align-items-center">
                <label>المبلغ الكلي</label>
                <span class="ls-50"> {{\Gloudemans\Shoppingcart\Facades\Cart::subtotal() }} د.أ</span>
            </div>
            @endif
            <a href="{{ route('checkout') }}"
                class="btn btn-block btn-dark btn-icon-right btn-rounded  btn-checkout">
                تابع عملية الشراء<i class="w-icon-long-arrow-left"></i></a>
        </div>
    </div>
</div>
   @endif