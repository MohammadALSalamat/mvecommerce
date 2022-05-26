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
  <div class="app-content content" style="width:1500px">
    <div class="content-wrapper">
      <div class="content-body">
        <section class="card" style="width:1500px">
          <div id="invoice-template" class="card-body">
            <!-- Invoice Company Details -->
            <div id="invoice-company-details" class="row" style="width:1500px; display: table">
              <div  style="width:200px; display: table-cell">
                <div class="media">
                  <img src="{{ public_path('front-style/assets/images/itajer_logo.png') }}" width="200px"
                    alt="company logo1" />
                </div>
              </div>
              <div class="col-md-6 col-sm-12 text-center text-md-right" style="width:500px;padding-top:0px;margin-top:0px">
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
            <div id="invoice-customer-details" style=" display: table;margin-top:50px">
              <div style=" display: table-cell">
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
              </div>
              <div class="col-md-6 col-sm-12 text-center text-md-right" style=" display: table-cell;width:500px">
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
            <div id="invoice-items-details" style="margin-top:50px" class="pt-2">
              <div class="row">
                <div class="table-responsive col-sm-12">
                  <table class="table"  style="width:600px">
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
                        <th scope="row" style="width: 100px">1</th>
                        <td class="text-truncate" style="width:300px">
                          <span class="avatar avatar-xs">
                            <img class="box-shadow-2" src="{{  public_path($items->image)}}" style="width:20px" alt="avatar">
                          </span>
                          <span style="white-space: pre-wrap;">{{ $items->title }}</span>
                        </td>
                        <td class="text-right" style="width:100px" >{{ \App\Models\User::where('id',$order->user_id)->value('full_name') }}</td>
                        <td class="text-right"  style="width:100px">{{ $items->pivot->quantity }}</td>
                        <td class="text-right"  style="width:100px">
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
                </div>
              </div>
            </div>
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