@extends('delivery.backend_layoute.main_desgin')
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

<div class="app-content content">

  <div class="content-wrapper">

    <div class="content-header row">
      <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
        <h3 class="mb-0 content-header-title d-inline-block">Advanced DataTable</h3>
        <div class="row breadcrumbs-top d-inline-block">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item"><a href="#">DataTables</a>
              </li>
              <li class="breadcrumb-item active">Advanced DataTable
              </li>
            </ol>
          </div>
        </div>
      </div>
      <div class="content-header-right col-md-6 col-12">
        <div class=" float-md-right">
          <a href="{{ route('invoice_template',$order->id) }}"><button class="px-2 btn btn-primary round btn-glow"
              type="button"><i class="la la-plus"></i> View Invoice </button></a>
        </div>
      </div>
    </div>
    <div class="content-body">
      <section id="basic-form-layouts">
        <div class="row match-height">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title" id="basic-layout-form">Order Details</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content collapse show">
                <div class="card-body">
                  <form class="form">
                    <div class="form-body">
                      <h4 class="form-section"><i class="la la-paperclip"></i> Details</h4>
                      <div class="row">
                        <div class="col-md-6">
                          <strong>Order Date : </strong>
                        </div>
                        <div class="col-md-6">
                          {{ $order->created_at  }}
                        </div>
                        <hr class="mt-4">
                        <div class="col-md-6">
                          <strong>Order invoice : </strong>
                        </div>
                        <div class="col-md-6">
                          {{ $order->order_number  }}
                        </div>
                        <hr class="mt-4">
                        <div class="col-md-6">
                          <strong>Order Status : </strong>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <select id="projectinput6" name="orderStatus" class="form-control">
                              <option value="pending" selected>pending</option>
                              <option value="inprocess">In Proccess</option>
                              <option value="cancelled">Canceled</option>
                              <option value="shipped">Shipped</option>
                              <option value="completed">Completed</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-actions">
                      <button type="submit" class="btn btn-primary">
                        <i class="la la-check-square-o"></i> Change Status
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title" id="basic-layout-colored-form-control">User Info</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content collapse show">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <strong>
                        User Name
                      </strong>
                    </div>
                    <div class="col-md-6">
                      {{ \App\Models\User::where('id',$order->user_id)->value('full_name') }}
                    </div>

                    <hr class="mt-4">
                    <div class="col-md-6">
                      <strong>
                        Email Address :
                      </strong>
                    </div>
                    <div class="col-md-6">
                      {{ \App\Models\User::where('id',$order->user_id)->value('email') }}
                    </div>
                    <hr class="mt-4">
                    <div class="col-md-6">
                      <strong>
                        Phone Number :
                      </strong>
                    </div>
                    <div class="col-md-6">
                      {{ $order->phone }}
                    </div>
                  </div>
                  <hr class="mt-4">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="basic-form-layouts">
        <div class="row match-height">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title" id="basic-layout-form"> Billing Details </h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content collapse show">
                <div class="card-body">
                  <form class="form">
                    <div class="form-body">
                      <h4 class="form-section"><i class="la la-paperclip"></i> Requirements</h4>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="projectinput5">Interested in</label>
                            <select id="projectinput5" name="interested" class="form-control">
                              <option value="none" selected="" disabled="">Interested in</option>
                              <option value="design">design</option>
                              <option value="development">development</option>
                              <option value="illustration">illustration</option>
                              <option value="branding">branding</option>
                              <option value="video">video</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="projectinput6">Budget</label>
                            <select id="projectinput6" name="budget" class="form-control">
                              <option value="0" selected="" disabled="">Budget</option>
                              <option value="less than 5000$">less than 5000$</option>
                              <option value="5000$ - 10000$">5000$ - 10000$</option>
                              <option value="10000$ - 20000$">10000$ - 20000$</option>
                              <option value="more than 20000$">more than 20000$</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-actions">
                      <button type="submit" class="btn btn-primary">
                        <i class="la la-check-square-o"></i> Change Status
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title" id="basic-layout-colored-form-control"> Shipping Details </h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content collapse show">
                <div class="card-body">

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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
                        <th>Status</th>
                        <th>Invoice#</th>
                        <th>Customer Name</th>
                        <th>Products</th>
                        <th>Categories</th>
                        <th>Shipping</th>
                        <th>Amount</th>

                      </tr>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-truncate">
                          @if ($order->payment_status == 'completed')
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
                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                              data-original-title="{{ $items->title }}" class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                                src="{{ $items->image }}" alt="{{ $items->title }}">
                            </li>
                            @endforeach

                          </ul>
                        </td>
                        <td>
                          @foreach ( $order->product as $items)
                          <button type="button"
                            class="btn btn-sm btn-outline-danger round">{{ \App\Models\category::groupBy('title')->where('id',$items->category_id)->value('title') }}</button>
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
                        <th>ID</th>
                        <th>Product Details</th>
                        <th>Quantity</th>
                        <th>Price</th>
                      </tr>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($order->product as $items)
                      <tr>
                        <td class="text-truncate">{{ $items->id }}</td>

                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img class="box-shadow-2" src="{{  $items->image}}" alt="avatar">
                          </span>
                          <span>{{ $items->title }}</span>
                        </td>
                        <td class="text-truncate p-1">
                          {{ $items->pivot->quantity }}
                        </td>
                        <td class="text-truncate">{{ $items->price }} AED</td>
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