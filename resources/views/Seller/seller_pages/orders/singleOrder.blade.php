@extends('Seller.seller_layoute.main_desgin')
@section('style')
<!-- BEGIN VENDOR CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
<!-- END VENDOR CSS-->

<!-- BEGIN Page Level CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}">
<!-- END Page Level CSS-->

<!-- END Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/sweetalert.css') }}">

@endsection
@section('content')
 @if (Config::get('app.locale') == 'en')
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
        <h3 class="mb-0 content-header-title d-inline-block">Single Order DataTable</h3>
        <div class="row breadcrumbs-top d-inline-block">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('view_order_seller') }}">Home</a>
              </li>
              
              <li class="breadcrumb-item active">Single Order DataTable
              </li>
            </ol>
          </div>
        </div>
      </div>
      <div class="content-header-right col-md-6 col-12">
        <div class=" float-md-right">
          <a href="{{ route('invoice_template_seller',$order->id) }}"><button class="px-2 btn btn-primary round btn-glow" type="button"><i
                class="la la-plus"></i> View Invoice </button></a>
        </div>
      </div>
    </div>
    <div class="content-body">

      <!-- File export table -->
      <section id="file-export">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">View Order</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="mb-0 list-inline">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content collapse show">
                <div class="card-body card-dashboard table-responsive">
                  <table class="table table-striped table-bordered file-export">
                    <thead>
                      <tr>
                        <tr>
                          <th >Status</th>
                          <th >Invoice#</th>
                          <th >Customer Name</th>
                          <th >Products</th>
                          <th >Categories</th>
                          <th >Shipping</th>
                          <th >Amount</th>
                          
                        </tr>    
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-truncate">
                          @if ($order->payment_status == 'completed')
                          <i class="la la-dot-circle-o success font-medium-1 mr-1"></i>
                          Completed
                          @elseif ($order->payment_status == 'inprocess')
                          <i class="la la-dot-circle-o warning font-medium-1 mr-1"></i>
                          In Proccess
                          @elseif ($order->payment_status == 'shipped')
                          <i class="la la-dot-circle-o warning font-medium-1 mr-1"></i>
                          Shipped
                          @elseif ($order->payment_status == 'pending')
                          <i class="la la-dot-circle-o warning font-medium-1 mr-1"></i>
                          Pending
                          @elseif ($order->payment_status == 'cancelled')
                          <i class="la la-dot-circle-o danger font-medium-1 mr-1"></i>
                          Cancelled
                          @endif
                        </td>
                        <td class="text-truncate"><a href="#">{{ $order->order_number }}</a></td>
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img class="box-shadow-2" src="{{ \App\Models\User::where('id',$order->user_id)->value('photo') }}"
                            alt="avatar">
                          </span>
                          <span>{{ $order->full_name }}</span>
                        </td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            @foreach ( $order->product as $items_seller)
                          @php
                          
                            $other_image = explode(',',$items_seller->image);
                          @endphp
                          @if($items_seller->vendor_id === Auth::guard('seller')->user()->id)
                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                            data-original-title="{{ $items_seller->title }}" class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                                src="{{ $other_image[0] }}" alt="{{ $items_seller->title }}">
                              </li>
                              @endif                     
                              @endforeach
                          </ul>
                        </td>
                      
                        <td>
                          @foreach ($order->product as $items)
                          @if($items->vendor_id === Auth::guard('seller')->user()->id)
                          <button type="button" class="btn btn-sm btn-outline-danger round">{{ \App\Models\category::where('id',$items->category_id)->value('title') }}</button>
                         @endif
                          @endforeach
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 25%"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">
                          @foreach ( $order->product as $items_seller)
                          @if($items_seller->vendor_id === Auth::guard('seller')->user()->id)
                          @php
                              $total_sum = array();
                              if(!empty($items_seller->offer_price)){
                                array_push($total_sum,$items_seller->offer_price);
                              }else {
                                array_push($total_sum,$items_seller->price);
                              }
                          @endphp
                            {{ array_sum($total_sum)}} AED ({{ $order->pivot['quantity'] }})<br> 
                            @endif
                            @endforeach

                        </td>
                        
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </section>
      <section id="file-export">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Single product Details</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="mb-0 list-inline">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content collapse show">
                <div class="card-body card-dashboard table-responsive">
                  <table class="table table-striped table-bordered file-export">
                    <thead>
                      <tr>
                        <tr>
                          <th >ID</th>
                          <th >Product Details</th>
                          <th >Quantity</th>
                          <th >Price</th>
                        </tr>    
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($order->product as $items)
                      <tr>
                        <td class="text-truncate">{{ $items->id }}</td>
                        @php
                          $other_image = explode(',',$items->image);  
                        @endphp
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img class="box-shadow-2" src="{{  $other_image[0]}}"
                            alt="avatar">
                          </span>
                          <span>{{ $items->title }}</span>
                        </td>
                        <td class="text-truncate p-1">
                          {{ $items->pivot->quantity }}
                        </td>
                        <td class="text-truncate">
                        @if(empty($items->offer_price) || $items->offer_price == null )
                          {{ $items->price }} AED
                          @else
                          {{ $items->offer_price }} AED
                          @endif
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- File export table -->
    </div>
  </div>
</div>

@else
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
        <h3 class="mb-0 content-header-title d-inline-block">بيانات الطلب</h3>
        <div class="row breadcrumbs-top d-inline-block">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('view_order_seller') }}">الرئيسية</a>
              </li>
              
              <li class="breadcrumb-item active">بياناات الطلب 
              </li>
            </ol>
          </div>
        </div>
      </div>
      <div class="content-header-right col-md-6 col-12">
        <div class=" float-md-right">
          <a href="{{ route('invoice_template_seller',$order->id) }}"><button class="px-2 btn btn-primary round btn-glow" type="button"><i
                class="la la-plus"></i> الفاتورة </button></a>
        </div>
      </div>
    </div>
    <div class="content-body">

      <!-- File export table -->
      <section id="file-export">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">رؤية الطلب</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="mb-0 list-inline">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content collapse show">
                <div class="card-body card-dashboard table-responsive">
                  <table class="table table-striped table-bordered file-export">
                    <thead>
                      <tr>
                        <tr>
                          <th >الحالة</th>
                          <th >الفاتورة#</th>
                          <th >اسم المشتري</th>
                          <th >المنتجات</th>
                          <th >الفئات</th>
                          <th >التوصيل</th>
                          <th >السعر</th>
                          
                        </tr>    
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-truncate">
                          @if ($order->payment_status == 'completed')
                          <i class="la la-dot-circle-o success font-medium-1 mr-1"></i>
                          تم الانجاز
                          @elseif ($order->payment_status == 'inprocess')
                          <i class="la la-dot-circle-o warning font-medium-1 mr-1"></i>
                          قيد التنفيذ
                          @elseif ($order->payment_status == 'shipped')
                          <i class="la la-dot-circle-o warning font-medium-1 mr-1"></i>
                          قيد التوصيل
                          @elseif ($order->payment_status == 'pending')
                          <i class="la la-dot-circle-o warning font-medium-1 mr-1"></i>
                          في الانتظار
                          @elseif ($order->payment_status == 'cancelled')
                          <i class="la la-dot-circle-o danger font-medium-1 mr-1"></i>
                          تم الالغاء
                          @endif
                        </td>
                        <td class="text-truncate"><a href="#">{{ $order->order_number }}</a></td>
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img class="box-shadow-2" src="{{ \App\Models\User::where('id',$order->user_id)->value('photo') }}"
                            alt="avatar">
                          </span>
                          <span>{{ $order->full_name }}</span>
                        </td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            @php
                            // get the number of items in each order
                            $quantity = array();
                            foreach ($order->product as $items){
                                array_push($quantity,$items);
                              }
                              if(count($quantity) > 3){
                                $last_items = array_slice($quantity, -3, 3, true);
                              }
                              @endphp
                            
                            @foreach ($order->product as $items)
                            @php
                                $other_image = explode(',',$items->image);  
                            @endphp
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="{{ $items->title }}"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="{{ $other_image[0] }}"
                              alt="{{ $items->ar_title }}">
                            </li>
                            @endforeach
                          </ul>
                        </td>
                      
                        <td>
                          @foreach ($order->product as $items)
                          <button type="button" class="btn btn-sm btn-outline-danger round">{{ \App\Models\category::where('id',$items->category_id)->value('ar_title') }}</button>
                          @endforeach
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 25%"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">{{ $order->total }} AED</td>
                        
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </section>
      <section id="file-export">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">معلومات المنتج الفردية</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="mb-0 list-inline">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content collapse show">
                <div class="card-body card-dashboard table-responsive">
                  <table class="table table-striped table-bordered file-export">
                    <thead>
                      <tr>
                        <tr>
                          <th >الرمز التسلسلي</th>
                          <th >معلومات المنتج</th>
                          <th >الكمية</th>
                          <th >السعر</th>
                        </tr>    
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($order->product as $items)
                      <tr>
                        <td class="text-truncate">{{ $items->id }}</td>
                        @php
                          $other_image = explode(',',$items->image);  
                        @endphp
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img class="box-shadow-2" src="{{  $other_image[0]}}"
                            alt="avatar">
                          </span>
                          <span>{{ $items->title }}</span>
                        </td>
                        <td class="text-truncate p-1">
                          {{ $items->pivot->quantity }}
                        </td>
                        <td class="text-truncate">
                        @if(empty($items->offer_price) || $items->offer_price == null )
                          {{ $items->price }} AED
                          @else
                          {{ $items->offer_price }} AED
                          @endif
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- File export table -->
    </div>
  </div>
</div>
@endif
@endsection
@section('script')

<!-- BEGIN PAGE VENDOR JS-->
<script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js') }}" type="text/javascript">
</script>
<script src="{{ asset('app-assets/vendors/js/tables/buttons.flash.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/tables/jszip.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/tables/pdfmake.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/tables/vfs_fonts.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/tables/buttons.html5.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/tables/buttons.print.min.js') }}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->

<!-- BEGIN PAGE LEVEL JS-->
<script src="{{ asset('app-assets/js/scripts/tables/datatables/datatable-advanced.js') }}" type="text/javascript">
</script>
<!-- END PAGE LEVEL JS-->
<!--sweet alert -->
<script src="{{ asset('app-assets/js/scripts/extensions/sweet-alerts.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/sweetalert.min.js') }}" type="text/javascript"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- delete AJAX CODE -->
<script>
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $('.dltbtn').click(function(e) {
    let form = $(this).closest('form');
    let dataID = $(this).data('id');
    e.preventDefault();
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        form.submit();
        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
      }
    })
  })
</script>

@stop