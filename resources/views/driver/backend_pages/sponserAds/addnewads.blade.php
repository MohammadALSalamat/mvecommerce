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
                <h3 class="mb-0 content-header-title d-inline-block">Add Banners</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('adsview') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active"><a href="#">Add Sponser Ads</a>
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
                                <h4 class="card-title" id="horz-layout-basic">Add New Ads</h4>
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

                                    <form class="form form-horizontal" action="{{ route('addads') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-clipboard"></i> Requirements</h4>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput6">Sposered Vendor </label>
                                                <div class="col-md-9">
                                                    <select id="projectinput6" name="vendor_shop_name" class="form-control">
                                                        <option value="none" selected="" disabled="">Select the vendor by shop name
                                                        </option>
                                                        @if($vendors->count() > 0)
                                                        @foreach ($vendors as $vendor)
                                                        <option value="{{ $vendor->id }}">{{ $vendor->shop_name }}</option>
                                                        @endforeach
                                                        @else
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <div class="input-group col-md-10 offset-2">
                                                    <span class="input-group-btn">
                                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-light">
                                                            <i class="fa fa-picture-o"></i> Choose English Image
                                                        </a>
                                                    </span>
                                                    <input id="thumbnail" class="form-control" type="text" name="en_image">
                                                </div>
                                                <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="input-group col-md-10 offset-2">
                                                    <span class="input-group-btn">
                                                        <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-light">
                                                            <i class="fa fa-picture-o"></i> Choose Arabic Image
                                                        </a>
                                                    </span>
                                                    <input id="thumbnail1" class="form-control" type="text" name="ar_image">
                                                </div>
                                                <div id="holder1" style="margin-top:15px;max-height:100px;"></div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput6">Image Place</label>
                                                <div class="col-md-9">
                                                    <select id="projectinput6" name="image_place" class="form-control">
                                                        <option value="none" selected="" disabled="">Select The palce to view image
                                                        </option>
                                                       <option value="homepage_banner"> Home Page Slider</option>
                                                       <option value="homepage_under_cat"> Home Page Below the Categories </option>
                                                       <option value="homepage_under_filter"> Home Page Below the filter </option>
                                                       <option value="homepage_under_full_width"> Home Page Full Width</option>
                                                       <option value="single_product_side_bar"> Single Product On Side bar</option>
                                                       <option value="collection_page_main_banner"> Collections Page Main Banner</option>
                                                       <option value="best_deals_page_banner"> best Deals Page Banner</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput1">Enable</label>
                                                <div class="col-md-9">
                                                   <!-- Rounded switch -->
                                                        <label class="switch">
                                                        <input type="checkbox" name="status" vlaue="{{ old('status') == "active" ? 'selected' : ''}}">
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
     $('#lfm,#lfm1').filemanager('image');

</script>
@stop