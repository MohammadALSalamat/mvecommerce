@if($banner_category->count() > 0)
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach($banner_category as $slider)
        @php
        $other_image = explode(',', $slider->image_English);
        $other_image_ar = explode(',', $slider->image_Arabic);
        @endphp
        <!-- change to the arabic image -->
        @if(Config::get('app.locale') == 'en')
        @foreach ($other_image as $key => $item)
        <div class="carousel-item {{ $key == 0 ? 'active':'' }}">
            <img src="{{url($item)}}" class="d-block w-100" alt="{{ $slider->image_place }}">
        </div>
        @endforeach
        @else
        @foreach ($other_image_ar as $key => $ar_item)
        <div class="carousel-item {{ $key == 0 ? 'active':'' }}">
            <img src="{{url($item)}}" class="d-block w-100" alt="{{ $slider->image_place }}">
        </div>
        @endforeach
        @endif
        <!-- change to the arabic image -->
        @endif
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