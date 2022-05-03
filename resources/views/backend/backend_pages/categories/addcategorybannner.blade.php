@extends('backend.backend_layoute.main_desgin')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/sweetalert.css') }}">
<style>
    /* The switch - the box around the slider */
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    /* Hide default HTML checkbox */
    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    /* The slider */
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #2196F3;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>
@endsection
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
                <h3 class="mb-0 content-header-title d-inline-block">Add Category Banners</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('viewcategories') }}">View categories</a>
                            </li>
                            <li class="breadcrumb-item active"><a href="#">Add New Category</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- // Images Gallary for the product -->
            <section class="basic-select2">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Category Banners</h4>
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
                                <form class="form form-horizontal" action="{{ route('create_category_banner') }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row" style="padding:20px">
                                        <div class="col-md-12">
                                            <label for="">Place Of Show</label>
                                            <select class="form-control form-control-sm" name="category_id" id="size">
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding:20px">
                                        <div class="input-group col-md-12">
                                            <span class="input-group-btn">
                                                <a id="lfm" data-input="thumbnail" data-preview="holder"
                                                    class="btn btn-light">
                                                    <i class="fa fa-picture-o"></i> Banner Image English
                                                </a>
                                            </span>
                                            <input id="thumbnail" class="form-control" type="text" name="en_image">
                                        </div>
                                        <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                    </div>
                                    <div class="form-group row" style="padding:20px">

                                        <div class="input-group col-md-12">
                                            <span class="input-group-btn">
                                                <a id="lfm1" data-input="thumbnail1" data-preview="holder1"
                                                    class="btn btn-light">
                                                    <i class="fa fa-picture-o"></i> Banner Image Arabic
                                                </a>
                                            </span>
                                            <input id="thumbnail1" class="form-control" type="text" name="ar_image">
                                        </div>
                                        <div id="holder1" style="margin-top:15px;max-height:100px;"></div>
                                    </div>
                                    <div class="form-group row" style="padding:20px">
                                        <div class="col-md-12">
                                            <label for="stock">Seller Url Shop</label>
                                            <select class="form-control form-control-sm" name="seller_id" id="seller">
                                                @foreach ($sellers as $seller)
                                                <option value="{{ $seller->id }}">{{ $seller->shop_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-actions" style="padding: 20px">
                                        <button type="button" class="mr-1 btn btn-warning">
                                            <i class="ft-x"></i> Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> Save
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Table Of Category Banners</h4>
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
                            <table class="table table-striped table-bordered file-export table-responsive"
                                style="min-height:300px;max-height:300px;overflow:scroll">
                                <thead>
                                    <tr>
                                        <th>Ccategory Name</th>
                                        <th>Banners English</th>
                                        <th>Banners Arabic</th>
                                        <th>Seller Name</th>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categorybanners as $attr )
                                    @php
                                        $category_details = \App\Models\category::where('id',$attr->category_place_id)->value('title')
                                        $seller_details = \App\Models\Seller::where('id',$attr->category_place_id)->value('shop_name')
                                    @endphp
                                    <tr>
                                        <td>{{ $category_details }}</td>
                                        <td><img src="{{ asset($attr->image_English) }}" width="100px"></td>
                                        <td><img src="{{ asset($attr->image_Arabic) }}" width="100px"></td>
                                        <td>{{ $seller_details }}</td>
                                        
                                        <td>
                                            <span class="dropdown">
                                                <button id="btnSearchDrop2" type="button" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="true"
                                                    class="btn btn-primary dropdown-toggle dropdown-menu-right"><i
                                                        class="ft-settings"></i></button>
                                                <span aria-labelledby="btnSearchDrop2"
                                                    class="mt-1 dropdown-menu dropdown-menu-right">
                                                    <form
                                                        action="{{ route('admin_gallary_deletproductAttr',$attr->id) }}"
                                                        method="post">
                                                        @csrf
                                                        <a href="" id="cancel-delete" class="dropdown-item dltbtn">
                                                            <i class="ft-trash-2 danger"></i>Delete
                                                        </a>
                                                    </form>
                                                </span>
                                            </span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
        </section>

        <!-- // Basic form layout section end -->
    </div>
</div>
</div>
@endsection
@section('script')

<!--sweet alert -->
<script src="{{ asset('app-assets/js/scripts/extensions/sweet-alerts.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/sweetalert.min.js') }}" type="text/javascript"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm,#lfm1').filemanager('image');
</script>
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