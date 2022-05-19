@if(Config::get('app.locale') == 'en')
<div class="widget widget-collapsible widget-contact">
    <h3 class="widget-title"><span>Contact Vendor</span></h3>
    <div class="widget-body">
        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" />
        <input type="text" class="form-control" name="email" id="email_1" placeholder="you@example.com" />
        <textarea name="message" maxlength="1000" cols="25" rows="6" placeholder="Type your messsage..."
            class="form-control" required="required"></textarea>
        <a href="#" class="btn btn-dark btn-rounded">Send Message</a>
    </div>
</div>
<!-- End of Widget -->
<div class="widget widget-collapsible widget-products">
    <h3 class="widget-title"><span>Best Selling</span></h3>
    <div class="widget-body">
        @foreach ($top_selles_vendor as $product_vendor )
        @php
        $vednors_products_top_sellers = \App\Models\product::where('id',
        $product_vendor->product_id)->where('vendor_id',$seller->id)->get();
        @endphp
        @foreach ( $vednors_products_top_sellers as $top_selling)
        @php
        $avareg_review =
        \App\Models\ProductReview::where('product_id',$top_selling->id)->get();
        #review rateing
        $avareg = 0;
        $sum = 0;
        foreach($avareg_review as $avg){
        $sum += $avg->rate;
        $countavg = count($avareg_review);
        $avareg = $sum / $countavg;
        }
        $other_image = explode(',', $top_selling->image);
        @endphp
        <div class="product product-widget">
            <figure class="product-media">
                <a href="{{ route('singleproduct',$top_selling->slug) }}">
                    @if(count($other_image) > 1)
                    <img src="{{ asset($other_image[0]) }}" alt="Product" style="width: 100% !important;
                                                    height: 100px !important;object-fit: contain;" />
                    <img src="{{ asset($other_image[1]) }}" alt="Product" style="width: 100% !important;
                                                     height: 150px !important;object-fit: contain;" />
                    @else
                    <img src="{{ asset($other_image[0]) }}" alt="Product" style="width: 100% !important;
                                                     height: 100px !important;object-fit: contain;" />
                    @endif
                </a>
            </figure>
            <div class="product-details">
                <h4 class="product-name">
                    <a href="{{ route('singleproduct',$top_selling->slug) }}">{{ $top_selling->title }}</a>
                </h4>
                <div class="ratings-container">
                    <div class="ratings-full">
                        <span class="ratings" @if (number_format($avareg,1)==5) style="width: 100%;"
                            @elseif(number_format($avareg,1)>= 4.5)
                            style="width: 90%;"
                            @elseif(number_format($avareg,1) >= 4)
                            style="width: 80%;"
                            @elseif(number_format($avareg,1) >= 3.5)
                            style="width: 70%;"
                            @elseif(number_format($avareg,1) >= 3)
                            style="width: 60%;"
                            @elseif(number_format($avareg,1) >= 2.5)
                            style="width: 50%;"
                            @elseif(number_format($avareg,1) >= 2)
                            style="width: 40%;"
                            @else
                            style="width: 20%;"
                            @endif></span>
                        <span class="tooltiptext tooltip-top"></span>
                    </div>
                    @if(Config::get('app.locale') == 'en')
                    @if (!empty($top_selling->discound) || $top_selling->discound != null)
                    <small
                        style="font-size:10px;background: green;color:#fff;padding:5px 10px;border-radius:20px;margin-left:5px">
                        {{ $top_selling->discound }}% OFF</small>
                    @endif
                    @else

                    @if (!empty($top_selling->discound) || $top_selling->discound != null)
                    <small
                        style="font-size:10px;background: green;color:#fff;padding:5px 10px;border-radius:20px;margin-left:5px">{{ $top_selling->discound }}%
                        خصم</small>
                    @endif
                    @endif
                </div>

                <div class="product-price">
                    @if(Config::get('app.locale') == 'en')
                    @if(empty($top_selling->offer_price) ||
                    $top_selling->offer_price == null)
                    {{ $top_selling->price }} AED
                    @else <del>{{ $top_selling->price }} AED </del> -
                    {{ $top_selling->offer_price }} AED @endif
                    @else
                    @if(empty($top_selling->offer_price) ||
                    $top_selling->offer_price == null)
                    {{ $top_selling->price }} د.أ
                    @else <del>{{ $top_selling->price }} د.أ </del> -
                    {{ $top_selling->offer_price }} د.أ @endif
                    @endif
                </div>
            </div>
        </div>

        @endforeach

        @endforeach

    </div>
</div>
<!-- End of Widget -->
<div class="widget widget-collapsible widget-products">
    <h3 class="widget-title"><span>Top Rated</span></h3>
    <div class="widget-body">
        @foreach ($top_reviewed_vendor_product as $product_vendor )
        @php
        $vednors_products_top_sellers = \App\Models\product::where('id',
        $product_vendor->product_id)->where('vendor_id',$seller->id)->get();
        @endphp
        @foreach ( $vednors_products_top_sellers as $top_selling)
        @php
        $avareg_review =
        \App\Models\ProductReview::where('product_id',$top_selling->id)->get();
        #review rateing
        $avareg = 0;
        $sum = 0;
        foreach($avareg_review as $avg){
        $sum += $avg->rate;
        $countavg = count($avareg_review);
        $avareg = $sum / $countavg;
        }
        $other_image = explode(',', $top_selling->image);
        @endphp
        <div class="product product-widget">
            <figure class="product-media">
                <a href="{{ route('singleproduct',$top_selling->slug) }}">
                    @if(count($other_image) > 1)
                    <img src="{{ asset($other_image[0]) }}" alt="Product" style="width: 100% !important;
                                                    height: 100px !important;object-fit: contain;" />
                    <img src="{{ asset($other_image[1]) }}" alt="Product" style="width: 100% !important;
                                                     height: 150px !important;object-fit: contain;" />
                    @else
                    <img src="{{ asset($other_image[0]) }}" alt="Product" style="width: 100% !important;
                                                     height: 100px !important;object-fit: contain;" />
                    @endif
                </a>
            </figure>
            <div class="product-details">
                <h4 class="product-name">
                    <a href="{{ route('singleproduct',$top_selling->slug) }}">{{ $top_selling->title }}</a>
                </h4>
                <div class="ratings-container">
                    <div class="ratings-full">
                        <span class="ratings" @if (number_format($avareg,1)==5) style="width: 100%;"
                            @elseif(number_format($avareg,1)>= 4.5)
                            style="width: 90%;"
                            @elseif(number_format($avareg,1) >= 4)
                            style="width: 80%;"
                            @elseif(number_format($avareg,1) >= 3.5)
                            style="width: 70%;"
                            @elseif(number_format($avareg,1) >= 3)
                            style="width: 60%;"
                            @elseif(number_format($avareg,1) >= 2.5)
                            style="width: 50%;"
                            @elseif(number_format($avareg,1) >= 2)
                            style="width: 40%;"
                            @else
                            style="width: 20%;"
                            @endif></span>
                        <span class="tooltiptext tooltip-top"></span>
                    </div>
                    @if(Config::get('app.locale') == 'en')
                    @if (!empty($top_selling->discound) || $top_selling->discound != null)
                    <small
                        style="font-size:10px;background: green;color:#fff;padding:5px 10px;border-radius:20px;margin-left:5px">
                        {{ $top_selling->discound }}% OFF</small>
                    @endif
                    @else

                    @if (!empty($top_selling->discound) || $top_selling->discound != null)
                    <small
                        style="font-size:10px;background: green;color:#fff;padding:5px 10px;border-radius:20px;margin-left:5px">{{ $top_selling->discound }}%
                        خصم</small>
                    @endif
                    @endif
                </div>
                <div class="product-price">
                    @if(Config::get('app.locale') == 'en')

                    @if(empty($top_selling->offer_price) ||
                    $top_selling->offer_price == null)
                    {{ $top_selling->price }} AED
                    @else <del>{{ $top_selling->price }} AED </del> -
                    {{ $top_selling->offer_price }} AED @endif
                    @else
                    @if(empty($top_selling->offer_price) ||
                    $top_selling->offer_price == null)
                    {{ $top_selling->price }} د.أ
                    @else <del>{{ $top_selling->price }} د.أ </del> -
                    {{ $top_selling->offer_price }} د.أ @endif
                    @endif
                </div>
            </div>
        </div>
        @endforeach
        @endforeach
    </div>
</div>
<!-- End of Widget -->
@else
<div class="widget widget-collapsible widget-contact">
    <h3 class="widget-title"><span>تواصل مع التاجر</span></h3>
    <div class="widget-body">
        <input type="text" class="form-control" name="name" id="name" placeholder="أدخل اﻷسم" />
        <input type="text" class="form-control" name="email" id="email_1" placeholder="you@example.com" />
        <textarea name="message" maxlength="1000" cols="25" rows="6" placeholder="اكتب الرسالة هنا ......"
            class="form-control" required="required"></textarea>
        <a href="#" class="btn btn-dark btn-rounded">أرسال</a>
    </div>
</div>
<!-- End of Widget -->
<div class="widget widget-collapsible widget-products">
    <h3 class="widget-title"><span>اﻷفضل مبيعا</span></h3>
    <div class="widget-body">
        @foreach ($top_selles_vendor as $product_vendor )
        @php
        $vednors_products_top_sellers = \App\Models\product::where('id',
        $product_vendor->product_id)->where('vendor_id',$seller->id)->get();
        @endphp
        @foreach ( $vednors_products_top_sellers as $top_selling)
        @php
        $avareg_review =
        \App\Models\ProductReview::where('product_id',$top_selling->id)->get();
        #review rateing
        $avareg = 0;
        $sum = 0;
        foreach($avareg_review as $avg){
        $sum += $avg->rate;
        $countavg = count($avareg_review);
        $avareg = $sum / $countavg;
        }
        $other_image = explode(',', $top_selling->image);
        @endphp
        <div class="product product-widget">
            <figure class="product-media">
                <a href="{{ route('singleproduct',$top_selling->slug) }}">
                    @if(count($other_image) > 1)
                    <img src="{{ asset($other_image[0]) }}" alt="Product" style="width: 100% !important;
                                                    height: 100px !important;object-fit: contain;" />
                    <img src="{{ asset($other_image[1]) }}" alt="Product" style="width: 100% !important;
                                                     height: 150px !important;object-fit: contain;" />
                    @else
                    <img src="{{ asset($other_image[0]) }}" alt="Product" style="width: 100% !important;
                                                     height: 100px !important;object-fit: contain;" />
                    @endif
                </a>
            </figure>
            <div class="product-details">
                <h4 class="product-name">
                    <a href="{{ route('singleproduct',$top_selling->slug) }}">{{ $top_selling->ar_title }}</a>
                </h4>
                <div class="ratings-container">
                    <div class="ratings-full">
                        <span class="ratings" @if (number_format($avareg,1)==5) style="width: 100%;"
                            @elseif(number_format($avareg,1)>= 4.5)
                            style="width: 90%;"
                            @elseif(number_format($avareg,1) >= 4)
                            style="width: 80%;"
                            @elseif(number_format($avareg,1) >= 3.5)
                            style="width: 70%;"
                            @elseif(number_format($avareg,1) >= 3)
                            style="width: 60%;"
                            @elseif(number_format($avareg,1) >= 2.5)
                            style="width: 50%;"
                            @elseif(number_format($avareg,1) >= 2)
                            style="width: 40%;"
                            @else
                            style="width: 20%;"
                            @endif></span>
                        <span class="tooltiptext tooltip-top"></span>
                    </div>
                    @if(Config::get('app.locale') == 'en')
                    @if (!empty($top_selling->discound) || $top_selling->discound != null)
                    <small
                        style="font-size:10px;background: green;color:#fff;padding:5px 10px;border-radius:20px;margin-left:5px">
                        {{ $top_selling->discound }}% OFF</small>
                    @endif
                    @else

                    @if (!empty($top_selling->discound) || $top_selling->discound != null)
                    <small
                        style="font-size:10px;background: green;color:#fff;padding:5px 10px;border-radius:20px;margin-left:5px">{{ $top_selling->discound }}%
                        خصم</small>
                    @endif
                    @endif
                </div>

                <div class="product-price">
                    @if(Config::get('app.locale') == 'en')

                    @if(empty($top_selling->offer_price) ||
                    $top_selling->offer_price == null)
                    {{ $top_selling->price }} AED
                    @else <del>{{ $top_selling->price }} AED </del> -
                    {{ $top_selling->offer_price }} AED @endif
                    @else
                    @if(empty($top_selling->offer_price) ||
                    $top_selling->offer_price == null)
                    {{ $top_selling->price }} د.أ
                    @else <del>{{ $top_selling->price }} د.أ </del> -
                    {{ $top_selling->offer_price }} د.أ @endif
                    @endif
                </div>
            </div>
        </div>

        @endforeach

        @endforeach

    </div>
</div>
<!-- End of Widget -->
<div class="widget widget-collapsible widget-products">
    <h3 class="widget-title"><span>اﻷعلى تقيما</span></h3>
    <div class="widget-body">
        @foreach ($top_reviewed_vendor_product as $product_vendor )
        @php
        $vednors_products_top_sellers = \App\Models\product::where('id',
        $product_vendor->product_id)->where('vendor_id',$seller->id)->get();
        @endphp
        @foreach ( $vednors_products_top_sellers as $top_selling)
        @php
        $avareg_review =
        \App\Models\ProductReview::where('product_id',$top_selling->id)->get();
        #review rateing
        $avareg = 0;
        $sum = 0;
        foreach($avareg_review as $avg){
        $sum += $avg->rate;
        $countavg = count($avareg_review);
        $avareg = $sum / $countavg;
        }
        $other_image = explode(',', $top_selling->image);
        @endphp
        <div class="product product-widget">
            <figure class="product-media">
                <a href="{{ route('singleproduct',$top_selling->slug) }}">
                    @if(count($other_image) > 1)
                    <img src="{{ asset($other_image[0]) }}" alt="Product" style="width: 100% !important;
                                                    height: 100px !important;object-fit: contain;" />
                    <img src="{{ asset($other_image[1]) }}" alt="Product" style="width: 100% !important;
                                                     height: 150px !important;object-fit: contain;" />
                    @else
                    <img src="{{ asset($other_image[0]) }}" alt="Product" style="width: 100% !important;
                                                     height: 100px !important;object-fit: contain;" />
                    @endif
                </a>
            </figure>
            <div class="product-details">
                <h4 class="product-name">
                    <a href="{{ route('singleproduct',$top_selling->slug) }}">{{ $top_selling->ar_title }}</a>
                </h4>
                <div class="ratings-container">
                    <div class="ratings-full">
                        <span class="ratings" @if (number_format($avareg,1)==5) style="width: 100%;"
                            @elseif(number_format($avareg,1)>= 4.5)
                            style="width: 90%;"
                            @elseif(number_format($avareg,1) >= 4)
                            style="width: 80%;"
                            @elseif(number_format($avareg,1) >= 3.5)
                            style="width: 70%;"
                            @elseif(number_format($avareg,1) >= 3)
                            style="width: 60%;"
                            @elseif(number_format($avareg,1) >= 2.5)
                            style="width: 50%;"
                            @elseif(number_format($avareg,1) >= 2)
                            style="width: 40%;"
                            @else
                            style="width: 20%;"
                            @endif></span>
                        <span class="tooltiptext tooltip-top"></span>
                    </div>
                    @if(Config::get('app.locale') == 'en')
                    @if (!empty($top_selling->discound) || $top_selling->discound != null)
                    <small
                        style="font-size:10px;background: green;color:#fff;padding:5px 10px;border-radius:20px;margin-left:5px">
                        {{ $top_selling->discound }}% OFF</small>
                    @endif
                    @else

                    @if (!empty($top_selling->discound) || $top_selling->discound != null)
                    <small
                        style="font-size:10px;background: green;color:#fff;padding:5px 10px;border-radius:20px;margin-left:5px">{{ $top_selling->discound }}%
                        خصم</small>
                    @endif
                    @endif
                </div>
                <div class="product-price">
                    @if(Config::get('app.locale') == 'en')

                    @if(empty($top_selling->offer_price) ||
                    $top_selling->offer_price == null)
                    {{ $top_selling->price }} AED
                    @else <del>{{ $top_selling->price }} AED </del> -
                    {{ $top_selling->offer_price }} AED @endif
                    @else
                    @if(empty($top_selling->offer_price) ||
                    $top_selling->offer_price == null)
                    {{ $top_selling->price }} د.أ
                    @else <del>{{ $top_selling->price }} د.أ </del> -
                    {{ $top_selling->offer_price }} د.أ @endif
                    @endif
                </div>
            </div>
        </div>
        @endforeach
        @endforeach
    </div>
</div>
<!-- End of Widget -->
@endif