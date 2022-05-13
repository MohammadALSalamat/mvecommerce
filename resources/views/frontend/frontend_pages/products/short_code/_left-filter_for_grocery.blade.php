<form action="{{ route('grocery_filter') }}" method="POST">
    @csrf
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
                    ({{ count($single_cat->one_cat_has_many_products) }})</label>
            </div>
            @endforeach
        @else
        <li class=" text-red-700"> There is no Categries to Filter</li>
        @endif

    </ul>
</div>
<div class="widget widget-collapsible">
    <h3 class="widget-title"><label>Price</label></h3>
    <div class="widget-body">
        <ul class="filter-items search-ul">
            <li><a href="#">$0.00 - $100.00</a></li>
            <li><a href="#">$100.00 - $200.00</a></li>
            <li><a href="#">$200.00 - $300.00</a></li>
            <li><a href="#">$300.00 - $500.00</a></li>
            <li><a href="#">$500.00+</a></li>
        </ul>
           @if (!empty($_GET['price']))
               @php
                   if(!empty($_GET['price'])){
                       $price=explode('-',$_GET['price']);
                   }
               @endphp
           @endif
           <input type="number" name="min_price" data-min="{{ Helper::minPrice() }}" @if (!empty($_GET['price'])) value="{{ $price[0] }}" @endif class="text-center min_price" placeholder="$min">
           <span class="delimiter" > - </span>
           <input type="number" data-max="{{ Helper::maxPrice() }}" @if (!empty($_GET['price'])) value="{{ $price[1] }}" @endif name="max_price" class="text-center max_price" placeholder="$max">
               <button type="submit" href="#" class="btn btn-dark btn-rounded">Go</button>
               <p><small>Rang of search between {{ Helper::minPrice() }} - {{ Helper::maxPrice() }}</small></p>
    </div>
</div>
</form>