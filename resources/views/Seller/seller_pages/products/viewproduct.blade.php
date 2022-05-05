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
          <a href="{{ route('seller_createproducts') }}"><button class="px-2 btn btn-primary round btn-glow" type="button"><i
                class="la la-plus"></i> Add product </button></a>
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
                <h4 class="card-title">View products</h4>
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
                <div class="card-body card-dashboard">

                  <table class="table table-striped table-bordered file-export">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>title</th>
                        <th>Slug</th>
                        <th>Added By</th>
                        <th>status</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($products as $product)

                      <tr>
                        <td>{{ $product->id }}</td>
                        <td><img src="{{asset($product->image)  }}" width="100%" height="50px"
                            alt="{{ $product->title }}"></th>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->slug }}</td>
                        <td>{{ $product->added_by }}</td>
                        <td> @if($product->status == '1')
                          <div class="badge badge-success">Active</div>
                          @else
                          <div class="badge badge-danger">Inactive</div>
                          @endif
                        </td>
                        <td>
                          <div class="col-lg-2 col-md-3 col-sm-6 mb-3">
                            <div data-toolbar="user-options" data-toolbar-animation="standard" class="btn-toolbar btn-toolbar-primary mx-auto"
                            data-toolbar-style="light"><i class="ft-settings"></i></div>
                          </div>
                          <div id="user-options" class="toolbar-icons hidden">
                            <a  href="javascript:void(0)" data-toggle="modal" data-target="#product{{ $product->id }}">
                              <i class="ft-eye"></i>
                            </a>
                            <a href="{{ route('seller_add_productAttr',$product->id) }}"><i class="ft-plus-circle"></i>
                            </a>
                            <a href="{{ route('seller_editproducts',$product->id) }}"><i class="ft-edit-2 light"></i></a>
                            <form action="{{ route('seller_deletproducts',$product->id) }}" method="post">
                              @csrf
                              <a href="" id="cancel-delete" class="dltbtn"><i class="ft-trash-2 light"></i></a>
                            </form>
                          </div>
                          <span class="dropdown">
                            <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i
                                class="ft-settings"></i></button>
                            <span aria-labelledby="btnSearchDrop2" class="mt-1 dropdown-menu dropdown-menu-right">
                              <a href="{{ route('seller_add_productAttr',$product->id) }}" class="dropdown-item"><i
                                class="ft-plus-circle primary"></i> Add Attributes</a>
                              <a href="javascript:void(0)" data-toggle="modal" data-target="#product{{ $product->id }}"
                                  class="dropdown-item"><i class="ft-eye primary"></i> View More</a>
                              <a href="{{ route('seller_editproducts',$product->id) }}" class="dropdown-item"><i
                                  class="ft-edit-2 success"></i> Edit</a>
                              <form action="{{ route('seller_deletproducts',$product->id) }}" method="post">
                                @csrf
                                <a href="" id="cancel-delete" class="dropdown-item dltbtn"><i class="ft-trash-2 danger"></i>
                                  Delete</a>
                              </form>
                            </span>
                          </span>
                        </td>
                      </tr>
                      <!-- Modal -->
                      <div class="modal fade bd-example-modal-lg" id="product{{ $product->id }}" tabindex="-1"
                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">{{ $product->title }}</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            @php
                            // get user name
                            $user_full_name = \App\Models\User::where('id',$product->vendor_id)->first();
                            $Category_Title = \App\Models\category::where('id',$product->category_id)->first();
                            $Child_Category_Title =
                            \App\Models\category::where('id',$product->child_category_id)->first();
                            $Brand_title = \App\Models\brand::where('id',$product->brand_id)->first();
                            @endphp
                            <div class="modal-body">
                              <div class="row">
                                <!-- left section -->
                                <div class="col-6" style="padding:9px">
                                  <img src="{{ $product->image }}" alt="{{ $product->title }}" width="100%" height="auto">
                                </div>
                                <!-- Right section -->
                                <div class="col-6">
                                  <div class="row">
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                      <b>User : </b>
                                      <p>
                                        @if (empty($user_full_name->full_name) || $user_full_name->full_name == null)
                                        <div class='badge badge-danger'>There is No Vendor</div>
                                        @else
                                        <div class='badge badge-success'> {{ $user_full_name->full_name}}</div>
                                        @endif
                                      </p>
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                      <b>Category : </b>
                                      <p>
                                        @if (empty($Category_Title->title) || $Category_Title->title == null)
                                        <div class='badge badge-danger'>There is No Category</div>
                                        @else
                                        <div class='badge badge-success'> {{ $Category_Title->title}}</div>
                                        @endif

                                      </p>
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                      <b>Brand : </b>
                                      <p>
                                        @if (empty($Brand_title->title) || $Brand_title->title == null)
                                        <div class='badge badge-danger'>There is No Brand</div>
                                        @else
                                        <div class='badge badge-success'> {{ $Brand_title->title}}</div>
                                        @endif
                                      </p>
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                      <b>Child Category : </b>
                                      <p>
                                        @if (empty($Child_Category_Title->title) || $Child_Category_Title->title ==
                                        null)
                                        <div class='badge badge-danger'>There is No Child Category</div>
                                        @else
                                        <div class='badge badge-success'>{{ $Child_Category_Title->title}}</div>
                                        @endif
                                      </p>
                                    </div>
                                  </div>

                                  <!-- Size and conditions section -->
                                  <div class="row">
                                    <div class="col-6">
                                      <b>Size : </b>
                                      <p>
                                        <div class='badge badge-success'>{{ $product->size }}</div>
                                      </p>
                                    </div>
                                    <div class="col-6">
                                      <b>Condation : </b>
                                      <p>
                                        <div class='badge badge-success'>{{ $product->conditions }}</div>
                                      </p>
                                    </div>
                                  </div>
                                  <!-- price and Stock section -->
                                  <div class="row">
                                    <div class="col-6">
                                      <b>Stock : </b>
                                      @if($product->stock > 10)
                                      <p>
                                        <div class='badge badge-success'>{{ $product->stock }}</div>
                                      </p>
                                      @else
                                      <p>
                                        <div class='badge badge-danger'>{{ $product->stock }}</div>
                                      </p>
                                      @endif
                                    </div>
                                    <div class="col-6">
                                      <b>Price : </b>
                                      <p>
                                        <div class='badge badge-success'>{{ $product->price }} $</div>
                                      </p>
                                    </div>
                                  </div>
                                  <!-- discound and Offer Price section -->
                                  <div class="row">
                                    <div class="col-6">
                                      <b>Offer Price : </b>
                                      <p>
                                        <div class='badge badge-success'>{{ $product->offer_price }}</div>
                                      </p>
                                    </div>
                                    <div class="col-6">
                                      <b>Discound : </b>
                                      <p>
                                        <div class='badge badge-success'>{{ $product->discound }}%</div>
                                      </p>
                                    </div>
                                  </div>
                                  <!-- summary section -->
                                  <b>Summary : </b>
                                  <div class="col-12" style="padding-bottom:10px;padding-left: 0;height: 100px;overflow-y:scroll">
                                    <p >{!! $product->Summary !!}</p>
                                  </div>

                                  <!-- Description section -->
                                  <b>Description : </b>
                                  <div class="col-12" style="padding-left: 0;height: 100px;overflow-y:scroll">
                                    <p style="">
                                      
                                      {!! $product->description !!}</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                             <a href="{{ route('seller_add_productAttr',$product->id) }}"><button type="button" class="btn btn-secondary" data-dismiss="modal">Add Attribuate</button></a>
                             <a href="{{ route('seller_editproducts',$product->id) }}"><button  class="btn btn-success">Edit Product</button></a> 
                            </div>
                          </div>
                        </div>
                      </div>
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