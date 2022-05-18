<div class="mobile-menu-wrapper">
    <div class="mobile-menu-overlay"></div>
    <!-- End of .mobile-menu-overlay -->

    <a href="#" class="mobile-menu-close"><i class="close-icon"></i></a>
    <!-- End of .mobile-menu-close -->

    <div class="mobile-menu-container scrollable">
        <form action="#" method="get" class="input-wrapper">
            <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                required />
            <button class="btn btn-search" type="submit">
                <i class="w-icon-search"></i>
            </button>
        </form>
        <!-- End of Search Form -->
        <div class="tab">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a href="#main-menu" class="nav-link active">Main Menu</a>
                </li>
                <li class="nav-item">
                    <a href="#categories" class="nav-link">Categories</a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane active" id="main-menu">
                <ul class="mobile-menu">
                    <li class="{{ request()->routeIs('homepage') ? 'active' : '' }}">
                        <a href="{{ route('homepage') }}">Home</a>
                    </li>
                    <li class="{{ request()->routeIs('shop_page') ? 'active' : '' }}">
                        <a href="{{ route('shop_page') }}">Collections</a>
                    </li>
                    <li class="{{ request()->routeIs('grocery_shop_only') ? 'active' : '' }}">
                        <a href="{{ route('grocery_shop_only') }}">Grocery</a>
                    </li>
                    <li class="{{ request()->routeIs('become_seller') ? 'active' : '' }}">
                        <a href="{{ route('become_seller') }}">Become A Vendor</a>
                    </li>
                    <li class="{{ request()->routeIs('sellers_list') ? 'active' : '' }}" >
                        <a href="{{ route('sellers_list') }}">Vendors</a>
                    </li>
                </ul>
            </div>
            <div class="tab-pane" id="categories">
                <ul class="mobile-menu">
                    @php
                        $categories = \App\Models\category::where('is_parent',0)->where('status',1)->get();
                    @endphp
                    @foreach($categories as $category )
                    <li> <a href="{{ route('shop_special_category',$category->slug) }}">
                        {{$category->title}}
                    </a>
                    @php
                    $sub_cat = \App\Models\category::where('parent_id',$category->id)->where('status',1)->get();
                    @endphp
                    @if($sub_cat->count()>0)
                        <ul>
                            @foreach ($sub_cat as $single_cat )
                                <li><a href="{{ route('shop_child_cat',$single_cat->slug) }}">{{$single_cat->title}}</a></li>
                            @endforeach
                        </ul>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>