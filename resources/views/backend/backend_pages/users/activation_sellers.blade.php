@extends('backend.backend_layoute.main_desgin')
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
          <a href="{{ route('createusers') }}"><button class="px-2 btn btn-primary round btn-glow" type="button" ><i class="la la-plus"></i> Add Brand </button></a>
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
                <h4 class="card-title">View Users</h4>
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
                        <th>Full Name</th>
                        <th>Role</th>
                        <th>status</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($Users as $user)
                      <tr>
                        <td>{{ $user->id }}</td>
                        <td><img src="{{asset('storage/seller/'.$user->photo)}}" width="100%" height="50px"
                            alt="{{ $user->title }}"></th>
                        <td>{{ $user->full_name }}</td>
                        <td>{{ $user->role }}</td>
                        <td> @if($user->status == 'active')
                          <div class="badge badge-success">Active</div>
                          @else
                          <div class="badge badge-danger">Inactive</div>
                          @endif
                        </td>
                        <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop2" class="mt-1 dropdown-menu dropdown-menu-right">
                                  <a href="{{ route('editusers',$user->id) }}" class="dropdown-item"><i class="ft-edit-2"></i> Edit</a>
                                  <form action="{{ route('deletusers',$user->id) }}" method="post">
                              @csrf
                                  <a href="" id="cancel-delete" class="dropdown-item"><i class="ft-trash-2"></i> Delete</a>
                                  </form>
                                  <a href="javascript:void(0)" data-toggle="modal" data-target="#users{{ $user->id }}" class="dropdown-item"><i class="ft-plus-circle primary"></i> View More</a>
                                  
                                </span>
                              </span>
                            </td>
                      </tr>
                                            <!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="users{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">{{ $user->full_name }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <div class="row">
         <!-- left section -->
         <div class="col-6" style="padding:9px">
            <img src="{{asset('storage/seller/'.$user->photo)}}" alt="{{ $user->full_name }}">
         </div>
         <!-- Right section -->
         <div class="col-6">
        <div class="row">
         <div class="col-6 col-sm-6 col-md-6 col-lg-6">
             <b>User Name: </b>
             <p>
                 @if (empty($user->full_name) || $user->full_name == null)
                 <div class='badge badge-danger'>There is No Name</div>
                 @else
                 <div class='badge badge-success'> {{ $user->full_name}}</div>
                 @endif
             </p>
         </div>
         <div class="col-6 col-sm-6 col-md-6 col-lg-6">
             <b>User Nick Name : </b>
             <p>
                 @if (empty($user->username) || $user->username == null)
                 <div class='badge badge-danger'>There is No UserName</div>
                 @else
                 <div class='badge badge-success'> {{ $user->username}}</div>
                 @endif
             </p>
         </div>
         <div class="col-6 col-sm-6 col-md-6 col-lg-6">
             <b>User Email : </b>
             <p>
                 @if (empty($user->email) || $user->email == null)
                 <div class='badge badge-danger'>There is No Email</div>
                 @else
                 <div class='badge badge-success'> {{ $user->email}}</div>
                 @endif
             </p>
         </div>
         <div class="col-6 col-sm-6 col-md-6 col-lg-6">
            <b>User Phone  : </b>
            <p>
                @if (empty($user->phone) || $user->phone == null)
                <div class='badge badge-danger'>There is No Phone Number</div>
                @else
                <div class='badge badge-success'>{{ $user->phone}}</div>
                @endif
            </p>
         </div>
     </div>
     <!-- Size and conditions section -->
     <div class="row">
        <div class="col-12">
            <b>Address : </b>
        <p><div class='badge badge-success'>{{ $user->address }}</div></p>
        </div>
         <div class="col-12">
            <b>Role : </b>
        <p><div class='badge badge-success'>{{ $user->role }}</div></p>
         </div>
        
     </div>
    </div>
</div>
 </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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
  $('.dltbtn').click(function (e) {
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
