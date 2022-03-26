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
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Edit products</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active"><a href="#">Edit products</a>
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
                                <h4 class="card-title" id="horz-layout-basic">Edit product</h4>
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
                            <div class="card-content collpase show">
                                <div class="card-body">

                                    <form class="form form-horizontal" action="{{ route('updateproducts',$current_product->id ) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-clipboard"></i> Requirements</h4>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput5">Title</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="projectinput5" class="form-control"
                                                        placeholder="add the title" name="title" value="{{ $current_product->title }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput1">Slug</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="projectinput1" class="form-control"
                                                        placeholder="add a uniuqe slug" name="slug" value="{{ $current_product->slug }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput56">Vendors</label>
                                                <div class="col-md-9">
                                                    <select id="projectinput56" name="vendor" class="form-control" disabled>
                                                        <option  selected value="{{ $vendors->id }}" >{{ $vendors->full_name }}
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
                                                        <option value="{{ $brand->id }}" @if($current_product->brand_id == $brand->id) selected @else  @endif > {{ $brand->title }}
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
                                                        <option value="{{ $category->id }}" @if($current_product->category_id == $category->id) selected @else  @endif > {{ $category->title }}
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
                                                    name="summary" placeholder="About Project">{{ $current_product->Summary }}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="input-group col-md-10 offset-2">
                                                    <span class="input-group-btn">
                                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                            <i class="fa fa-picture-o"></i> Choose
                                                        </a>
                                                    </span>
                                                    <input id="thumbnail" class="form-control" type="text" name="filepath" value="{{ $current_product->image }}">
                                                </div>
                                                <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control"
                                                    for="projectinput9">Description</label>
                                                <div class="col-md-9">
                                                    <textarea id="projectinput9" rows="5" class="form-control"
                                                        name="comment" placeholder="About Project">{{ $current_product->description }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput46">Size</label>
                                                <div class="col-md-9">
                                                    <select id="projectinput46" name="size" class="form-control">
                                                        <option value="none" ><-- Product Size -->
                                                        </option>
                                                        <option value="Small" @if ($current_product->size == "Small" || $current_product->size == "S" ) selected @endif >Small </option>
                                                        <option value="Medium"  @if ($current_product->size == "Medium" || $current_product->size == "M") selected @endif >Medium </option>
                                                        <option value="Large"  @if ($current_product->size == "Large" || $current_product->size == "L") selected @endif  >Large </option>
                                                        <option value="XLarge"  @if ($current_product->size == "XLarge" || $current_product->size == "XL") selected @endif  >XLarge </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput96">Condition</label>
                                                <div class="col-md-9">
                                                    <select id="projectinput96" name="condition" class="form-control">
                                                        <option value="none" ><-- Product condition -->
                                                        </option>
                                                        <option value="New" @if ($current_product->conditions == "New") selected @endif >New </option>
                                                        <option value="Popular" @if ($current_product->conditions == "Popular") selected @endif >Popular </option>
                                                        <option value="Old" @if ($current_product->conditions == "Old") selected @endif >Old </option>
                                                        <option value="Second Hand" @if ($current_product->conditions == "Second Hand") selected @endif >Second Hand </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput30">Stock</label>
                                                <div class="col-md-9">
                                                    <input type="number" id="projectinput30" class="form-control"
                                                        placeholder="add the stock value" name="stock" value="{{ $current_product->stock }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput31">Price</label>
                                                <div class="col-md-9">
                                                    <input type="number" id="projectinput31" class="form-control"
                                                        placeholder="Add The Price Value" step="any" name="price" value="{{ $current_product->price }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput31">Offer Price</label>
                                                <div class="col-md-9">
                                                    <input type="number" id="projectinput31" class="form-control"
                                                        placeholder="Add The Offer Price Value" step="any" name="offer_price" value="{{ $current_product->offer_price }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput32">Discound</label>
                                                <div class="col-md-9">
                                                    <input type="number" id="projectinput32" class="form-control"
                                                        placeholder="Add The Discound Value" step="any" name="discound" value="{{ $current_product->discound }}">
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput1">Enable</label>
                                                <div class="col-md-9">
                                                   <!-- Rounded switch -->
                                                        <label class="switch">
                                                        <input type="checkbox" name="status"  @if ($current_product->status == 1) checked @endif>
                                                        <span class="slider round"></span>
                                                        </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="button" class="btn btn-warning mr-1">
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
     $('#lfm').filemanager('image');

</script>
<script>
    var child_cat_id = {{ $current_product->child_category_id }}
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
                                html_option +="<option value='"+value.id+"'"+(child_cat_id ==value.id?'selected':'')+">"+value.title+"</option>"
                        });

                    }else{
                        $('#child_cat_div').addClass('d-none');
                    }

                    $('#child_cat_id').html(html_option);
                }
            });
        }
    });
    $('#cat_id').change();
</script>
@stop
