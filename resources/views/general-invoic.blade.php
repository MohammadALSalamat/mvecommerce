<!DOCTYPE html>
<html class="loading" lang="en">

<head>
  {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
  <title>INV-{{ $order->order_number }}</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description"
      content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords"
      content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  {{--  <meta name="csrf-token" content="{{ csrf_token() }}">  --}}

  <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/favicon.ico') }}">
  <link rel="stylesheet" type="text/css" href="{{ public_path('app-assets/css/vendors.css') }}">

  <style>
     @page {
        size: a4 landscape; 
        margin:0.9;
        padding:0.9; 
      }
  </style>
</head>

<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-body">
        <section class="card">
          <div id="invoice-template" class="card-body">
            <!-- Invoice Company Details -->
            <div id="invoice-company-details" class="row">
              <div class="col-md-6 col-sm-12 text-center text-md-left">
                <div class="media">
                  <img src="{{ public_path('front-style/assets/images/itajer_logo.png') }}" width="200px"
                    alt="company logo1" />
                </div>
              </div>
              <div class="col-md-6 col-sm-12 text-center text-md-right">
                <h2 style="color:red">INVOICE</h2>
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
                  <span class="text-muted">Invoice Date :</span> 06/05/2017</p>
                <p>
                  <span class="text-muted">Terms :</span> Due on Receipt</p>
                <p>
                  <span class="text-muted">Due Date :</span> 10/05/2017</p>
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
                        <td class="text-truncate"  word-break: break-all !important;>
                          <span class="avatar avatar-xs">
                            <img class="box-shadow-2" src="{{  public_path($items->image)}}" style="width:20px" alt="avatar">
                          </span>
                          <span style=" word-break: break-all !important;">{{ $items->title }}</span>
                        </td>
                        <td class="text-right">{{ \App\Models\User::where('id',$order->user_id)->value('full_name') }}</td>
                        <td class="text-right">{{ $items->pivot->quantity }}</td>
                        <td class="text-right">
                           @if(empty($items->offer_price) || $items->offer_price == null )
                          {{ $items->price }} 
                          @else
                          {{ $items->offer_price }} 
                          @endif
                        </td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-md-7 col-sm-12 text-center text-md-left">

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
                  <div class="text-center">
                    <p>Authorized person</p>
                    <img src="../../../app-assets/images/pages/signature-scan.png" alt="signature" class="height-100" />
                    <h6>Amanda Orton</h6>
                    <p class="text-muted">Managing Director</p>
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
     <!-- BEGIN VENDOR JS-->
  <script src="{{ public_path('app-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="{{ public_path('app-assets/js/core/app-menu.js') }}" type="text/javascript"></script>
  <script src="{{ public_path('app-assets/js/core/app.js') }}" type="text/javascript"></script>
  <script src="{{ public_path('app-assets/js/scripts/customizer.js') }}" type="text/javascript"></script>
</body>

</html>