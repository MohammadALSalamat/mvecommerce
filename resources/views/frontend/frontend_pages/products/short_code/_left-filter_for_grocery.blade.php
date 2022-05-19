<form action="{{ route('grocery_filter') }}" method="POST">
    @csrf
@if(Config::get('app.locale') == 'en')
<!-- Start of Collapsible widget -->
<div class="widget widget-collapsible">
     <h3 class="widget-title"><label>All Categories</label></h3>
     <ul class="widget-body filter-items search-ul">
         <!-- get the category name and check the box if exists -->
         @if (!empty($_GET['category']))
         @php
         $filter_cats = explode(',',$_GET['category']);
         @endphp
         @endif
         <!-- get the category name and check the box if exists -->
         @if (count($main_categories) > 0)
             @foreach ($main_categories as $single_cat)
             <div class="d-flex mb-2 items-center" style="align-items: center;">
                 <input type="checkbox" @if (!empty($filter_cats) && in_array($single_cat->slug,$filter_cats))
                 checked
                 @endif name="category[]" value="{{ $single_cat->slug }}" id="{{ $single_cat->slug }}"
                 onchange="this.form.submit();" >
                 <label class="pl-3" for="{{ $single_cat->slug }}"> {{ $single_cat->title }}
                     ({{ count($single_cat->one_child_cat_has_many_products) }})</label>
             </div>
             @endforeach
         @else
         <li class=" text-red-700"> There is no Categries to Filter</li>
         @endif

     </ul>
</div>
<!-- End of Collapsible Widget -->

@else
<!-- Start of Collapsible widget -->
<div class="widget widget-collapsible">
    <h3 class="widget-title"><label>جمبع اﻷقسام</label></h3>
    <ul class="widget-body filter-items search-ul">
        <!-- get the category name and check the box if exists -->
        @if (!empty($_GET['category']))
        @php
        $filter_cats = explode(',',$_GET['category']);
        @endphp
        @endif
        <!-- get the category name and check the box if exists -->
        @if (count($main_categories) > 0)
            @foreach ($main_categories as $single_cat)
            <div class="d-flex mb-2 items-center" style="align-items: center;">
                <input type="checkbox" @if (!empty($filter_cats) && in_array($single_cat->slug,$filter_cats))
                checked
                @endif name="category[]" value="{{ $single_cat->slug }}" id="{{ $single_cat->slug }}"
                onchange="this.form.submit();" >
                <label class="pl-3" for="{{ $single_cat->slug }}"> {{ $single_cat->ar_title }}
                    ({{ count($single_cat->one_child_cat_has_many_products) }})</label>
            </div>
            @endforeach
        @else
        <li class=" text-red-700"> لا يوجد اقسام اﻷن</li>
        @endif

    </ul>
</div>
<!-- End of Collapsible Widget -->

@endif

@if(Config::get('app.locale') == 'en')

<!-- Start of Collapsible Widget -->
<div class="widget widget-collapsible">
     <h3 class="widget-title"><label>Price</label></h3>
     <div class="widget-body row" style="margin-top: 3px;margin-bottom:3px">
            @if (!empty($_GET['price']))
                @php
                    if(!empty($_GET['price'])){
                        $price=explode('-',$_GET['price']);
                    }
                @endphp
            @endif
            <div class="col-12 col-md-4">
                <input type="number" name="min_price"  data-min="{{ Helper::minPrice() }}" @if (!empty($_GET['price'])) value="{{ $price[0] }}" @else value="{{ Helper::minPrice() }}" @endif class="text-center min_price form-control form-control-sm" placeholder="$min" style="padding:3px 5px">
            </div>
            <div class="col-12 col-md-4">
                <input type="number" data-max="{{ Helper::maxPrice() }}"  @if (!empty($_GET['price'])) value="{{ $price[1] }}" @else value="{{ Helper::maxPrice() }}" @endif name="max_price" class="text-center max_price form-control form-control-sm" placeholder="$max" style="padding:3px 5px">
            </div>
            <div class="col-12 col-md-3">

                <button type="submit" class="btn btn-danger btn-rounded">Go</button>
            </div>
                <p><small>Rang of search between {{ Helper::minPrice() }} - {{ Helper::maxPrice() }}</small></p>

     </div>
</div>

@else
<div class="widget widget-collapsible">
     <h3 class="widget-title"><label>السعر</label></h3>
     <div class="widget-body row" style="margin-top: 3px;margin-bottom:3px">
            @if (!empty($_GET['price']))
                @php
                    if(!empty($_GET['price'])){
                        $price=explode('-',$_GET['price']);
                    }
                @endphp
            @endif
            <div class="col-12 col-md-4">
                <input type="number" name="min_price"  data-min="{{ Helper::minPrice() }}" @if (!empty($_GET['price'])) value="{{ $price[0] }}" @else value="{{ Helper::minPrice() }}" @endif class="text-center min_price form-control form-control-sm" placeholder="$min" style="padding:3px 5px">
            </div>
            <div class="col-12 col-md-4">
                <input type="number" data-max="{{ Helper::maxPrice() }}"  @if (!empty($_GET['price'])) value="{{ $price[1] }}" @else value="{{ Helper::maxPrice() }}" @endif name="max_price" class="text-center max_price form-control form-control-sm" placeholder="$max" style="padding:3px 5px">
            </div>
            <div class="col-12 col-md-3">

                <button type="submit" class="btn btn-danger btn-rounded">بحث</button>
            </div>
                <p style="margin:5px 0"><small style="color:red">قيمة البحث بين القيمتين فقط   {{ Helper::minPrice() }} - {{ Helper::maxPrice() }} </small></p>
     </div>
</div>

@endif
</form>