<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

@if($banner_category->count() > 0)
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="margin-top: 20px">
    <div class="carousel-inner">
        @foreach($banner_category as$key => $slider)
        @php
            $vendor_slug = \App\Models\Seller::where('id',$slider->seller_id)->value('username');
        @endphp
        <!-- change to the arabic image -->
        @if(Config::get('app.locale') == 'en')
        <div class="carousel-item {{ $key == 0 ? 'active':'' }}">
            <a href="@if (empty($vendor_slug) || $vendor_slug == null)
                #
            @else
            {{ route('single_seller',$vendor_slug) }}
                
            @endif
            ">
                <img src="{{url($slider->image_English)}}" class="d-block w-100" alt="slider"></a>
        </div>
        @else
        <div class="carousel-item {{ $key == 0 ? 'active':'' }}">
            <a href="{{ route('single_seller',$vendor_slug) }}"> <img src="{{url($slider->image_Arabic)}}" class="d-block w-100" alt="slider"></a>
        </div>
        @endif
        <!-- change to the arabic image -->
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
</div>
@endif