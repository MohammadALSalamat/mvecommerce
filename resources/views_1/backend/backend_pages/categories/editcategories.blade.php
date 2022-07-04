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
                <h3 class="mb-0 content-header-title d-inline-block">Edit Banners</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active"><a href="#">Edit Banners</a>
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
                                <h4 class="card-title" id="horz-layout-basic">Edit Banner</h4>
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
 <form class="form form-horizontal" action="{{ route('updatecategories',$current_category->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-clipboard"></i> Updates Category " {{ $current_category->title }} "</h4>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput5">Title</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="projectinput5" class="form-control"
                                                        placeholder="add the title" name="title" value="{{ $current_category->title }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput5">Arabic Title</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="projectinput5" class="form-control"
                                                        placeholder="add the title" name="ar_title" value="{{ $current_category->ar_title }}">
                                                </div>
                                            </div>
                                          
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput1">Is It Parent?</label>
                                                <div class="col-md-9">
                                                   <!-- Rounded switch -->
                                                        <label class="switch">
                                                        <input type="checkbox" name="is_perant" id="is_parent"
                                                        @if ($current_category->is_parent == 0)
                                                            checked
                                                        @else

                                                        @endif
                                                        value="{{ $current_category->is_parent }}">
                                                        <span class="slider round"></span>
                                                        </label>
                                                </div>
                                            </div>
                                            <div class="form-group row" id="parent_cat_div">
                                                <label class="col-md-3 label-control" for="projectinput6">Category Parent</label>
                                                <div class="col-md-9">
                                                    <select id="projectinput6" name="parent_id" class="form-control">
                                                        <option value=""><-- choose category parent -->
                                                        </option>
                                                        @foreach ($parent_categories as $parent_category)
                                                        <option value="{{ $parent_category->id }}" {{ $current_category->parent_id === $parent_category->id ?'selected':'' }}> {{ $parent_category->title }} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="input-group col-md-10 offset-2">
                                                    <span class="input-group-btn">
                                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-light">
                                                            <i class="fa fa-picture-o"></i> Edit English Image
                                                        </a>
                                                    </span>
                                                    <input id="thumbnail" class="form-control" type="text" name="image" value="{{ $current_category->image }}">
                                                </div>
                                                <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="input-group col-md-10 offset-2">
                                                    <span class="input-group-btn">
                                                        <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-light">
                                                            <i class="fa fa-picture-o"></i> Edit Arabic Image
                                                        </a>
                                                    </span>
                                                    <input id="thumbnail1" class="form-control" type="text" name="ar_image" value="{{ $current_category->ar_image }}">
                                                </div>
                                                <div id="holder1" style="margin-top:15px;max-height:100px;"></div>
                                            </div>v
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control"
                                                    for="projectinput9">Description</label>
                                                <div class="col-md-9">
                                                    <textarea id="summernote" rows="5" class="form-control"
                                                        name="description" placeholder="About Project">{!! $current_category->description !!}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control"
                                                    for="projectinput9">Arabic Description</label>
                                                <div class="col-md-9">
                                                    <textarea id="summernote_ar" rows="5" class="form-control"
                                                        name="ar_description" placeholder="About Project">{!! $current_category->ar_description !!}</textarea>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput1">Enable</label>
                                                <div class="col-md-9">
                                                   <!-- Rounded switch -->
                                                        <label class="switch">
                                                        <input type="checkbox" name="status" @if ($current_category->status == 1) checked @else @endif>
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
                                                <i class="la la-check-square-o"></i> Update
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
<!-- hide the form of parent select if the category is a parent -->
<script>
 let is_checked = $('#is_parent').prop('checked');
        if(is_checked){
        $('#parent_cat_div').hide();
        }else{
        $('#parent_cat_div').show();
        }
    $('#is_parent').change(function (e) {
        e.preventDefault();
        let is_checked = $('#is_parent').prop('checked');
        if(is_checked){
        $('#parent_cat_div').hide();
        }else{
        $('#parent_cat_div').show();
        }

    });
</script>
@stop
