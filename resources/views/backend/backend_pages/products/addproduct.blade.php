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
                <h3 class="mb-0 content-header-title d-inline-block">Add Products</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('viewproducts') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active"><a href="#">Add Products</a>
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
                                <h4 class="card-title" id="horz-layout-basic">Add New Products</h4>
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

                                    <form class="form form-horizontal" action="{{ route('addproducts') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-clipboard"></i> Requirements</h4>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput5">Title</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="projectinput5" class="form-control"
                                                        placeholder="add the title" name="title" value="{{ old('title') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput1">Slug</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="projectinput1" class="form-control"
                                                        placeholder="add a uniuqe slug" name="slug">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput56">Vendor</label>
                                                <div class="col-md-9">
                                                    <select id="projectinput56" name="vendor" class="form-control" disabled>
                                                        <option  selected value="{{ $vendors->id }}"> {{ $vendors->full_name }}
                                                        </option>
                                                        {{-- @foreach ($vendors as $vendor)
                                                        <option value="{{ $vendor->id }}" > {{ $vendor->full_name }}
                                                        </option>
                                                        @endforeach --}}
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput76">Brands</label>
                                                <div class="col-md-9">
                                                    <select id="projectinput76" name="brand" class="form-control">
                                                        <option value="none" ><-- Brands -->
                                                        </option>
                                                        @foreach ($brands as $brand)
                                                        <option value="{{ $brand->id }}" > {{ $brand->title }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="cat_id">Main Category</label>
                                                <div class="col-md-9">
                                                    <select id="cat_id" name="category" class="form-control">
                                                        <option value="none" ><-- Category -->
                                                        </option>
                                                        @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}" > {{ $category->title }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row d-none" id="child_cat_div">
                                                <label class="col-md-3 label-control" for="child_cat_id">Child Category</label>
                                                <div class="col-md-9">
                                                    <select id="child_cat_id" name="child_category" class="form-control">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput11">Summary</label>
                                                <div class="col-md-9">
                                                    <textarea id="projectinput11" rows="5" class="form-control"
                                                    name="summary" placeholder="About Project">{{ old('summary') }}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="input-group col-md-10 offset-2">
                                                    <span class="input-group-btn">
                                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-light">
                                                            <i class="fa fa-picture-o"></i> Choose Product Image
                                                        </a>
                                                    </span>
                                                    <input id="thumbnail" class="form-control" type="text" name="filepath">
                                                </div>
                                                <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="input-group col-md-10 offset-2">
                                                    <span class="input-group-btn">
                                                        <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-light">
                                                            <i class="fa fa-picture-o"></i> Choose Size Guid
                                                        </a>
                                                    </span>
                                                    <input id="thumbnail1" class="form-control" type="text" name="size_guid">
                                                </div>
                                                <div id="holder1" style="margin-top:15px;max-height:100px;"></div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control"
                                                    for="projectinput9">Description</label>
                                                <div class="col-md-9">
                                                    <textarea id="projectinput9" rows="5" class="form-control"
                                                        name="comment" placeholder="About Project">{{ old('description') }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control"
                                                    for="projectinput9">Additional Info</label>
                                                <div class="col-md-9">
                                                    <textarea id="projectinput100" rows="5" class="form-control"
                                                        name="additional_info" placeholder="write somthing new">{{ old('additional_info') }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control"
                                                    for="projectinput9">Return Policy</label>
                                                <div class="col-md-9">
                                                    <textarea id="projectinput1001" rows="5" class="form-control"
                                                        name="return_policy" placeholder="Write Something ">{{ old('return_policy') }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput46">Size</label>
                                                <div class="col-md-9">
                                                    <select id="projectinput46" name="size" class="form-control">
                                                        <option value="none" ><-- Product Size -->
                                                        </option>
                                                        <option value="Small" >Small </option>
                                                        <option value="Medium" >Medium </option>
                                                        <option value="Large" >Large </option>
                                                        <option value="XLarge" >XLarge </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput96">Condition</label>
                                                <div class="col-md-9">
                                                    <select id="projectinput96" name="condition" class="form-control">
                                                        <option value="none" ><-- Product condition -->
                                                        </option>
                                                        <option value="New" >New </option>
                                                        <option value="Popular" >Popular </option>
                                                        <option value="Old" >Old </option>
                                                        <option value="Second Hand" >Second Hand </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput30">Stock</label>
                                                <div class="col-md-9">
                                                    <input type="number" id="projectinput30" class="form-control"
                                                        placeholder="add the stock value" name="stock" value="{{ old('stock') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput31">Price</label>
                                                <div class="col-md-9">
                                                    <input type="number" id="projectinput31" class="form-control"
                                                        placeholder="Add The Price Value" step="any" name="price" value="{{ old('price') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput31">Offer Price</label>
                                                <div class="col-md-9">
                                                    <input type="number" id="projectinput31" class="form-control"
                                                        placeholder="Add The Offer Price Value" step="any" name="offer_price" value="{{ old('price') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput32">Discound</label>
                                                <div class="col-md-9">
                                                    <input type="number" id="projectinput32" class="form-control"
                                                        placeholder="Add The Discound Value" step="any" name="discound" value="{{ old('discound') }}">
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
<script>
    $('#cat_id').change(function(){
        var cat_id = $(this).val();
        if(cat_id != null){
            $.ajax({
                url: "/admin/category/"+cat_id+"/child",
                type: "POST",
                data:{
                    _token:"{{csrf_token()}}",
                    cat_id:cat_id,
                },
                success:function(response){
                    var html_option = "<option value='' ><-- Child Category --></option>"
                    if(response.status){
                        $('#child_cat_div').removeClass('d-none');
                        $.each(response.data,function(index,value)
                        {
                                html_option +="<option value='"+value.id+"'>"+value.title+"</option>"
                        });

                    }else{
                        $('#child_cat_div').addClass('d-none');
                    }

                    $('#child_cat_id').html(html_option);
                }
            });
        }
    });
</script>
@stop
