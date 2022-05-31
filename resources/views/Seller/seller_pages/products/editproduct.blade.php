@extends('Seller.seller_layoute.main_desgin')
@section('style')
<style>
    .multiselect-dropdown{
      display: inline-block;
      padding: 2px 5px 0px 5px;
      border-radius: 4px;
      width: 100% !important;
      border: solid 1px #ced4da;
      background-color: white;
      position: relative;
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
      background-repeat: no-repeat;
      background-position: right .75rem center;
      background-size: 16px 12px;
    }
    .multiselect-dropdown span.optext, .multiselect-dropdown span.placeholder{
      margin-right:0.5em; 
      margin-bottom:2px;
      padding:1px 0; 
      border-radius: 4px; 
      display:inline-block;
    }
    .multiselect-dropdown span.optext{
      background-color:lightgray;
      padding:1px 0.75em; 
    }
    .multiselect-dropdown span.optext .optdel {
      float: right;
      margin: 0 -6px 1px 5px;
      font-size: 0.7em;
      margin-top: 2px;
      cursor: pointer;
      color: #666;
    }
    .multiselect-dropdown span.optext .optdel:hover { color: #c66;}
    .multiselect-dropdown span.placeholder{
      color:#ced4da;
    }
    .multiselect-dropdown-list-wrapper{
      box-shadow: gray 0 3px 8px;
      z-index: 100;
      padding:2px;
      border-radius: 4px;
      border: solid 1px #ced4da;
      display: none;
      margin: -1px;
      position: absolute;
      top:0;
      left: 0;
      right: 0;
      background: white;
    }
    .multiselect-dropdown-list-wrapper .multiselect-dropdown-search{
      margin-bottom:5px;
    }
    .multiselect-dropdown-list{
      padding:2px;
      height: 15rem;
      overflow-y:auto;
      overflow-x: hidden;
    }
    .multiselect-dropdown-list::-webkit-scrollbar {
      width: 6px;
    }
    .multiselect-dropdown-list::-webkit-scrollbar-thumb {
      background-color: #bec4ca;
      border-radius:3px;
    }
    
    .multiselect-dropdown-list div{
      padding: 5px;
    }
    .multiselect-dropdown-list input{
      height: 1.15em;
      width: 1.15em;
      margin-right: 0.35em;  
    }
    .multiselect-dropdown-list div.checked{
    }
    .multiselect-dropdown-list div:hover{
      background-color: #ced4da;
    }
    .multiselect-dropdown span.maxselected {width:100%;}
    .multiselect-dropdown-all-selector {border-bottom:solid 1px #999;}
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

                                    <form class="form form-horizontal" action="{{ route('seller_updateproducts',$current_product->id ) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-clipboard"></i> Requirements</h4>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput5">Title * </label>
                                                <div class="col-md-9">
                                                    <input type="text" id="projectinput5" class="form-control"
                                                        placeholder="add the title" name="title" value="{{ $current_product->title }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput5">Arabic Title</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="projectinput5" class="form-control"
                                                        placeholder="add the title" name="ar_title" value="{{ $current_product->ar_title }}">
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
                                                        @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}" @if($current_product->category_id == $category->id) selected = "selected" @else  @endif > {{ $category->title }} </option>
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
                                                    <textarea id="summernote" rows="5" class="form-control"
                                                    name="summary" placeholder="About Project">{!! $current_product->Summary !!}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput11">Arabic Summary</label>
                                                <div class="col-md-9">
                                                    <textarea id="summernote_ar1" rows="5" class="form-control"
                                                    name="ar_summary" placeholder="About Project">{!! $current_product->ar_Summary !!}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="input-group col-md-10 offset-2">
                                                    <span class="input-group-btn">
                                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-light">
                                                            <i class="fa fa-picture-o"></i> Choose Product Image
                                                        </a>
                                                    </span>
                                                    <input id="thumbnail" class="form-control" type="text" name="filepath" value="{{ $current_product->image }}">
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
                                                    <input id="thumbnail1" class="form-control" type="text" name="size_guid" value="{{ $current_product->size_guid }}">
                                                </div>
                                                <div id="holder1" style="margin-top:15px;max-height:100px;"></div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control"
                                                    for="projectinput9">Description</label>
                                                <div class="col-md-9">
                                                    <textarea id="summernote1" rows="5" class="form-control"
                                                        name="comment" placeholder="About Project">{!! $current_product->description !!}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control"
                                                    for="projectinput9">Arabic Description</label>
                                                <div class="col-md-9">
                                                    <textarea id="summernote_ar" rows="5" class="form-control"
                                                        name="ar_comment" placeholder="About Project">{!! $current_product->ar_description !!}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control"
                                                    for="projectinput9">Additional Info</label>
                                                <div class="col-md-9">
                                                    <textarea id="summernote2" rows="5" class="form-control"
                                                        name="additional_info" placeholder="write somthing new">{!! $current_product->additional_info !!}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control"
                                                    for="projectinput9">Arabic Additional Info</label>
                                                <div class="col-md-9">
                                                    <textarea id="summernote_ar2" rows="5" class="form-control"
                                                        name="ar_additional_info" placeholder="write somthing new">{!! $current_product->ar_additional_info !!}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control"
                                                    for="projectinput9">Return Policy</label>
                                                <div class="col-md-9">
                                                    <textarea id="summernote3" rows="5" class="form-control"
                                                        name="return_policy" placeholder="Write Something ">{!! $current_product->return_policy !!}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control"
                                                    for="projectinput9">Arabic Return Policy</label>
                                                <div class="col-md-9">
                                                    <textarea id="summernote_ar3" rows="5" class="form-control"
                                                        name="ar_return_policy" placeholder="Write Something ">{!! $current_product->ar_return_policy !!}</textarea>
                                                </div>
                                            </div>
                                            {{-- <div class="form-group row">
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
                                            </div> --}}
                                            {{-- <div class="form-group row">
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
                                            </div> --}}
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput30">Stock</label>
                                                <div class="col-md-9">
                                                    <input type="number" id="projectinput30" class="form-control"
                                                        placeholder="add the stock value" name="stock" value="{{ $current_product->stock }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput30">SKU</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="projectinput1000" class="form-control"
                                                        placeholder="add the SKU value" name="sku" value="{{ $current_product->sku }}">
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
                                                <label class="col-md-3 label-control" for="projectinput56">Frequently Bought Together</label>
                                                <div class="col-md-9">
                                                        <select name="field2[]" id="field2" multiple multiselect-search="true" multiselect-select-all="true" multiselect-max-items="3" >						    
                                                        @foreach ($products as $product)
                                                        <option  value="{{ $product->id }}" 
                                                            @if (!empty($current_product->frequantly_boughts_ids) ||
                                                            $current_product->frequantly_boughts_ids != null)
                                                            @if (in_array($product->id,$current_product->frequantly_boughts_ids))
                                                            selected
                                                            @endif
                                                            @endif
                                                            > {{ $product->title }}</option>
                                                        @endforeach
                                                        </select>	
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
     $('#lfm,#lfm1').filemanager('image');

</script>
<script>
    var child_cat_id = {{ $current_product->child_category_id }}
    $('#cat_id').change(function(){
        var cat_id = $(this).val();
        if(cat_id != null){
            
            $.ajax({
                url: "/seller/category/"+cat_id+"/child",
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
                                html_option +="<option value='"+value.id+"'"+(child_cat_id == value.id?'selected':'')+">"+value.title+"</option>"
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
<script>
    // multi select form
function MultiselectDropdown(options){
  var config={
    search:true,
    height:'200px',
    placeholder:'Select Frequently Bought Together ',
    txtSelected:'selected',
    txtAll:'All',
    txtRemove: 'Remove',
    txtSearch:'search',
    optionLabel: function(element) {
        return '<img src="'+$(element).attr('data-img')+'"> '+$(element).text();
    },
    
  };
  function newEl(tag,attrs){
    var e=document.createElement(tag);
    if(attrs!==undefined) Object.keys(attrs).forEach(k=>{
      if(k==='class') { Array.isArray(attrs[k]) ? attrs[k].forEach(o=>o!==''?e.classList.add(o):0) : (attrs[k]!==''?e.classList.add(attrs[k]):0)}
      else if(k==='style'){  
        Object.keys(attrs[k]).forEach(ks=>{
          e.style[ks]=attrs[k][ks];
        });
       }
      else if(k==='text'){attrs[k]===''?e.innerHTML='&nbsp;':e.innerText=attrs[k]}
      else e[k]=attrs[k];
    });
    return e;
  }

  
  document.querySelectorAll("select[multiple]").forEach((el,k)=>{
    
    var div=newEl('div',{class:'multiselect-dropdown',style:{width:config.style?.width??el.clientWidth+'px',padding:config.style?.padding??''}});
    el.style.display='none';
    el.parentNode.insertBefore(div,el.nextSibling);
    var listWrap=newEl('div',{class:'multiselect-dropdown-list-wrapper'});
    var list=newEl('div',{class:'multiselect-dropdown-list',style:{height:config.height}});
    var search=newEl('input',{class:['multiselect-dropdown-search'].concat([config.searchInput?.class??'form-control']),style:{width:'100%',display:el.attributes['multiselect-search']?.value==='true'?'block':'none'},placeholder:config.txtSearch});
    listWrap.appendChild(search);
    div.appendChild(listWrap);
    listWrap.appendChild(list);

    el.loadOptions=()=>{
      list.innerHTML='';
      
      if(el.attributes['multiselect-select-all']?.value=='true'){
        var op=newEl('div',{class:'multiselect-dropdown-all-selector'})
        var ic=newEl('input',{type:'checkbox'});
        op.appendChild(ic);
        op.appendChild(newEl('label',{text:config.txtAll}));
  
        op.addEventListener('click',()=>{
          op.classList.toggle('checked');
          op.querySelector("input").checked=!op.querySelector("input").checked;
          
          var ch=op.querySelector("input").checked;
          list.querySelectorAll(":scope > div:not(.multiselect-dropdown-all-selector)")
            .forEach(i=>{if(i.style.display!=='none'){i.querySelector("input").checked=ch; i.optEl.selected=ch}});
  
          el.dispatchEvent(new Event('change'));
        });
        ic.addEventListener('click',(ev)=>{
          ic.checked=!ic.checked;
        });
  
        list.appendChild(op);
      }

      Array.from(el.options).map(o=>{
        var op=newEl('div',{class:o.selected?'checked':'',optEl:o})
        var ic=newEl('input',{type:'checkbox',checked:o.selected});
        op.appendChild(ic);
        op.appendChild(newEl('label',{text:o.text}));

        op.addEventListener('click',()=>{
          op.classList.toggle('checked');
          op.querySelector("input").checked=!op.querySelector("input").checked;
          op.optEl.selected=!!!op.optEl.selected;
          el.dispatchEvent(new Event('change'));
        });
        ic.addEventListener('click',(ev)=>{
          ic.checked=!ic.checked;
        });
        o.listitemEl=op;
        list.appendChild(op);
      });
      div.listEl=listWrap;

      div.refresh=()=>{
        div.querySelectorAll('span.optext, span.placeholder').forEach(t=>div.removeChild(t));
        var sels=Array.from(el.selectedOptions);
        if(sels.length>(el.attributes['multiselect-max-items']?.value??5)){
          div.appendChild(newEl('span',{class:['optext','maxselected'],text:sels.length+' '+config.txtSelected}));          
        }
        else{
          sels.map(x=>{
            var c=newEl('span',{class:'optext',text:x.text, srcOption: x});
            if((el.attributes['multiselect-hide-x']?.value !== 'true'))
              c.appendChild(newEl('span',{class:'optdel',text:'🗙',title:config.txtRemove, onclick:(ev)=>{c.srcOption.listitemEl.dispatchEvent(new Event('click'));div.refresh();ev.stopPropagation();}}));

            div.appendChild(c);
          });
        }
        if(0==el.selectedOptions.length) div.appendChild(newEl('span',{class:'placeholder',text:el.attributes['placeholder']?.value??config.placeholder}));
      };
      div.refresh();
    }
    el.loadOptions();
    
    search.addEventListener('input',()=>{
      list.querySelectorAll(":scope div:not(.multiselect-dropdown-all-selector)").forEach(d=>{
        var txt=d.querySelector("label").innerText.toUpperCase();
        d.style.display=txt.includes(search.value.toUpperCase())?'block':'none';
      });
    });

    div.addEventListener('click',()=>{
      div.listEl.style.display='block';
      search.focus();
      search.select();
    });
    
    document.addEventListener('click', function(event) {
      if (!div.contains(event.target)) {
        listWrap.style.display='none';
        div.refresh();
      }
    });    
  });
}

window.addEventListener('load',()=>{
  MultiselectDropdown(window.MultiselectDropdownOptions);
});
</script>
@stop
