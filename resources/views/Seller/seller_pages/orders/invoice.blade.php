@extends('Seller.seller_layoute.main_desgin')

@section('content')
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
        <h3 class="content-header-title mb-0 d-inline-block">Invoice Template</h3>
        <div class="row breadcrumbs-top d-inline-block">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('view_order_seller') }}">Home</a>
              </li>
              <li class="breadcrumb-item"><a href="{{ route('singleOrder_seller',$order->id) }}">Order</a>
              </li>
              <li class="breadcrumb-item active">Invoice Template
              </li>
            </ol>
          </div>
        </div>
      </div>
      <div class="content-header-right col-md-6 col-12">
        <div class="dropdown float-md-right">
          <a href="{{ route('pdfviewer_seller',$order->id) }}">
          <button class="btn btn-danger dropdown-toggle round btn-glow px-2" id="dropdownBreadcrumbButton" type="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Download</button>
          </a>
        </div>
      </div>
    </div>
    <div class="content-body">
      <section class="card">
        <div id="invoice-template" class="card-body">
          <!-- Invoice Company Details -->
          <div id="invoice-company-details" class="row">
            <div class="col-md-6 col-sm-12 text-center text-md-left">
              <div class="media">
                <img src="{{ asset('front-style/assets/images/itajer_logo.png') }}" width="200px" alt="company logo"
                  class="" />
              </div>
            </div>
            <div class="col-md-6 col-sm-12 text-center text-md-right">
              <h2>INVOICE</h2>
              <p class="pb-3"># INV-{{ $order->order_number }}</p>
              <ul class="px-0 list-unstyled">
                <li>Final Total</li>
                <li class="lead text-bold-800">{{ $order->total + $order->delivary_charge + $order->coupon }} AED</li>
              </ul>
            </div>
          </div>
          <!--/ Invoice Company Details -->
          <!-- Invoice Customer Details -->
          <div id="invoice-customer-details" class="row pt-2">
            <div class="col-sm-12 text-center text-md-left">
              <strong class="text-muted">Bill To</strong>
            </div>
            <div class="col-md-6 col-sm-12 text-center text-md-left">
              <ul class="px-0 list-unstyled">
                <li class="text-bold-800">{{ $order->full_name }}</li>
                <li>{{ $order->address }},</li>
                <li>{{ $order->city }},</li>
                <li>{{ $order->country }}.</li>
              </ul>
              <strong class="text-muted">Shipping To</strong>
              <ul class="px-0 list-unstyled">
                <li class="text-bold-800">{{ $order->sfull_name }}</li>
                <li>{{ $order->saddress }},</li>
                <li>{{ $order->scity }},</li>
                <li>{{ $order->scountry }}.</li>
              </ul>
            </div>
            <div class="col-md-6 col-sm-12 text-center text-md-right">
              <p>
                <span class="text-muted">Invoice Date :</span> {{ date('d-m-y',strtotime($order->created_at)) }}</p>
              <p>
                <span class="text-muted">Terms :</span> Due on Receipt</p>
              <p>
                <span class="text-muted">Due Date :</span>{{ date('d-m-y ', strtotime($order->created_at. ' +10 days')) }}</p>
            </div>
          </div>
          <!--/ Invoice Customer Details -->
          <!-- Invoice Items Details -->
          <div id="invoice-items-details" class="pt-2">
            <div class="row">
              <div class="table-responsive col-sm-12">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Order Items</th>
                      <th class="text-right">Customer Name</th>
                      <th class="text-right">Quantity</th>
                      <th class="text-right">Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($order->product as $items)
                    <tr>
                      <th scope="row">1</th>
                      <td class="text-truncate">
                        <span class="avatar avatar-xs">
                          @php
                            $other_image = explode(',',$items->image);  
                          @endphp
                          <img class="box-shadow-2" src="{{  $other_image[0]}}" alt="avatar">
                        
                        </span>
                        <span>{{ $items->title }}</span>
                      </td>
                      <td class="text-right">{{ \App\Models\User::where('id',$order->user_id)->value('full_name') }}</td>
                      <td class="text-right">{{ $items->pivot->quantity }}</td>
                      <td class="text-right"> @if(empty($items->offer_price) || $items->offer_price == null )
                        {{ $items->price }} 
                        @else
                        {{ $items->offer_price }} 
                        @endif</td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-md-7 col-sm-12 text-center text-md-left">
                <p class="lead">Payment Methods:</p>
                <div class="row">
                  <div class="col-md-8">
                    <table class="table table-borderless table-sm">
                      <tbody>
                        <tr>
                          <td>Bank name:</td>
                          <td class="text-right">ABC Bank, USA</td>
                        </tr>
                        <tr>
                          <td>Acc name:</td>
                          <td class="text-right">Amanda Orton</td>
                        </tr>
                        <tr>
                          <td>IBAN:</td>
                          <td class="text-right">FGS165461646546AA</td>
                        </tr>
                        <tr>
                          <td>SWIFT code:</td>
                          <td class="text-right">BTNPP34</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-md-5 col-sm-12">
                <p class="lead">Total due</p>
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>Sub Total</td>
                        <td class="text-right">{{ $order->sub_total }} AED</td>
                      </tr>
                      <tr>
                        <td>Coupon</td>
                        <td class="text-right">{{ $order->coupon }} AED</td>
                      </tr>
                      <tr>
                        <td>Delivary Charge</td>
                        <td class="text-right">{{ $order->delivary_charge }} AED</td>
                      </tr>
                      <tr>
                        <td class="text-bold-800">Total</td>
                        <td class="text-bold-800 text-right"> {{ $order->total + $order->delivary_charge + $order->coupon }} AED</td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Invoice Footer -->
          <div id="invoice-footer">
            <div class="row">
              <div class="col-md-7 col-sm-12">
                <h6>Terms & Condition</h6>
                <p>You know, being a test pilot isn't always the healthiest business
                  in the world. We predict too much for the next year and yet far
                  too little for the next 10.</p>
              </div>
            </div>
          </div>
          <!--/ Invoice Footer -->
        </div>
      </section>
    </div>
  </div>
</div>
@endsection