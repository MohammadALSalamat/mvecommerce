@extends('backend.backend_layoute.main_desgin')
@section('style')
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

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
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
                <h3 class="mb-0 content-header-title d-inline-block">Edit Shipping</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('view_shipping') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active"><a href="#">Edit Shipping</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="horizontal-form-layouts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="horz-layout-basic">Edit User</h4>
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
                            <div class="card-content collpase show">
                                <div class="card-body">

                                    <form class="form form-horizontal" action="{{ route('update_shipping',$current_shipping->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                       <div class="form-body">
                                            <h4 class="form-section"><i class="ft-clipboard"></i> Requirements</h4>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput5">Shipping Adress</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="projectinput5" class="form-control"
                                                        placeholder="add the code" name="shipping_address" value="{{ $current_shipping->shipping_address }}">
                                                </div>
                                            </div>
                                           <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput6">Deliver Charge</label>
                                                <div class="col-md-9">
                                                    <input type="number" id="deliver_charge" class="form-control"
                                                        placeholder="add the code" name="deliver_charge" value="{{ $current_shipping->delivery_charge }}">
                                               
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput1"> deliver Time</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="deliver_time" class="form-control"
                                                        placeholder="add value" name="deliver_time" value="{{ $current_shipping->delivery_Time }}">
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput1">Enable</label>
                                                <div class="col-md-9">
                                                   <!-- Rounded switch -->
                                                        <label class="switch">
                                                        <input type="checkbox" name="status" @if ($current_shipping->status == 1)
                                                            checked
                                                        @else
                                                            
                                                        @endif>
                                                        <span class="slider round"></span>
                                                        </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
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
                </div>
            </section>
            <!-- // Basic form layout section end -->
        </div>
    </div>
</div>


@endsection
@section('script')

 <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
     $('#lfm').filemanager('image');

</script>
@stop
