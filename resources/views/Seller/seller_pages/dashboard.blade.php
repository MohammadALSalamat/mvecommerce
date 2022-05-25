@extends('Seller.seller_layoute.main_desgin')
@section('content')
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
      <!-- eCommerce statistic -->
      <div class="row">
        <div class="col-xl-4 col-lg-6 col-12">
          <div class="card pull-up">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="media-body text-left">
                    @if (Config::get('app.locale') == 'en')
                    <h3 class="success">{{ $countSoldProduct }}</h3>
                    <h6>Products Sold</h6>
                    @else
                    <h3 class="success">{{ $countSoldProduct }}</h3>
                    <h6> البضائع المباعة</h6>
                    @endif
                  </div>
                  <div>
                    <i class="icon-basket-loaded info font-large-2 float-right"></i>
                  </div>
                </div>
                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                  <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-12">
          <div class="card pull-up">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="media-body text-left">
                   
                    @if (Config::get('app.locale') == 'en')
                    <h3 class="success">

                      {{ array_sum($total).' AED ' }}
                    </h3>
                    <h6>Net Profit</h6>
                    @else
                    <h3 class="success">{{ array_sum($total).' AED ' }}</h3>
                    <h6> مجموع الدخل</h6>
                    @endif
                  </div>
                  <div>
                    <i class="icon-pie-chart warning font-large-2 float-right"></i>
                  </div>
                </div>
                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                  <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%"
                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-12">
          <div class="card pull-up">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="media-body text-left">
                    <h3 class="danger">{{ $products }}</h3>
                    <h6>Products</h6>
                  </div>
                  <div>
                    <i class="icon-heart danger font-large-2 float-right"></i>
                  </div>
                </div>
                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                  <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%"
                    aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ eCommerce statistic -->

      <!-- Recent Transactions -->
      <div class="row">
        <div id="recent-transactions" class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Recent Orders</h4>
              <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                  <li><a class="btn btn-sm btn-success box-shadow-2 round btn-min-width pull-right"
                      href="{{ route('view_order') }}">View All</a></li>
                </ul>
              </div>
            </div>
            <div class="card-content">
              <div class="table-responsive">
                <table id="recent-orders" class="table table-hover table-xl mb-0">
                  <thead>
                    @if (Config::get('app.locale') == 'en')
                    <tr>
                      <th class="border-top-0">Status</th>
                      <th class="border-top-0">Invoice#</th>
                      <th class="border-top-0">Customer Name</th>
                      <th class="border-top-0">Products</th>
                      <th class="border-top-0">Categories</th>
                      <th class="border-top-0">Shipping</th>
                      <th class="border-top-0">Amount</th>
                    </tr>
                    @else
                    <tr>
                      <th class="border-top-0">حالة الدفع</th>
                      <th class="border-top-0">الفاتورة#</th>
                      <th class="border-top-0">اسم المشتري</th>
                      <th class="border-top-0">المنتجات</th>
                      <th class="border-top-0">الاصناف</th>
                      <th class="border-top-0">التوصيل</th>
                      <th class="border-top-0">السعر</th>
                    </tr>
                    @endif

                  </thead>
                  <tbody>
                    @foreach ($order_product as $items)
                    @foreach ($items->orders->take(6) as $order )
                    <tr>
                      <td class="text-truncate">
                        @if ($order->payment_status == 1)
                        <i class="la la-dot-circle-o success font-medium-1 mr-1"></i>
                        Paid
                        @else
                        <i class="la la-dot-circle-o warning font-medium-1 mr-1"></i>
                        pending
                        @endif
                      </td>
                      <td class="text-truncate"><a href="#">{{ $order->order_number }}</a></td>
                      <td class="text-truncate">
                        <span class="avatar avatar-xs">
                          <img class="box-shadow-2"
                            src="{{ \App\Models\User::where('id',$order->user_id)->value('photo') }}" alt="avatar">
                        </span>
                        <span>{{ $order->full_name }}</span>
                      </td>
                      <td class="text-truncate p-1">
                        @foreach ( $order->product as $items_seller)
                        @php
                        $other_image = explode(',',$items_seller->image);
                        @endphp
                        <ul class="list-unstyled users-list m-0">
                          <li data-toggle="tooltip" data-popup="tooltip-custom"
                            data-original-title="{{ $items_seller->title }}" class="avatar avatar-sm pull-up">
                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="{{ $other_image[0] }}" alt="{{ $items_seller->title }}">
                        </li>                       
                        </ul>
                        @endforeach
                      </td>
                      <td>
                        @foreach ( $order->product as $items_seller)
                        <button type="button" class="btn btn-sm btn-outline-danger round">{{ \App\Models\category::where('id',$items_seller->category_id)->value('title') }}</button>
                        @endforeach
                      </td>
                      <td>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                          <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 25%"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td class="text-truncate"> 
                       
                      {{ $order->total }} AED 
                     </td>
                    </tr>
                    @endforeach
                    @endforeach
                    <tr>
                      <td colspan="6" style="background: #ccc;text-align:right"> <b style="font-size:20px;text-align:right ">Total : </b></td>
                      <td  style="background: #ccc"> <b >{{ array_sum($total).' AED ' }}</b></td>
                      
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Recent Transactions -->
    </div>
  </div>
</div>
@endsection