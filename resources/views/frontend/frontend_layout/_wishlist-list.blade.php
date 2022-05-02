@if(Config::get('app.locale') == 'en')
<h3 class="wishlist-title">My wishlist</h3>
  <table class="shop-table wishlist-table">

      <thead>
          <tr>
              <th class="product-name"><span>Product</span></th>
              <th></th>
              <th class="product-price"><span>Price</span></th>
              <th class="product-stock-status"><span>Stock Status</span></th>
              <th class="wishlist-action">Actions</th>
          </tr>
      </thead>
      <tbody>
          @if (\Gloudemans\Shoppingcart\Facades\Cart::instance('wishlist')->count() > 0 )
          @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('wishlist')->content() as $item)
          @php
            $other_image = explode(',', $item->model->image);
          @endphp
          <tr>
              <td class="product-thumbnail">
                  <div class="p-relative">
                      <a href="{{route('singleproduct',  $item->model->slug)  }}">
                          <figure class="product-media">
                            @if(count($other_image) > 1)
                            <img src="{{ asset($other_image[0]) }}" alt="Product" style="width: 100% !important;
                            height: 90px !important;object-fit: contain;" />
                             <img src="{{ asset($other_image[1]) }}" alt="Product" style="width: 100% !important;
                             height: 90px !important;object-fit: contain;" />
                             @else
                             <img src="{{ asset($other_image[0]) }}" alt="Product" style="width: 100% !important;
                             height: 90px !important;object-fit: contain;" />
                             @endif                           </figure>
                      </a>
                      <button type="submit" class="btn btn-close delete_wishlist" data-id="{{ $item->rowId }}"><i
                              class="fas fa-times"></i></button>
                  </div>
              </td>
              <td class="product-name">
                  <a href="{{ route('singleproduct',  $item->model->slug) }}">
                      {{ $item->name }}
                  </a>
              </td>
              <td class="product-price">
                  <ins class="new-price">AED {{ $item->price }}</ins>
              </td>
              <td class="product-stock-status">
                  <span class="wishlist-in-stock">In Stock</span>
              </td>
              <td class="wishlist-action">
                  <div class="d-lg-flex">
                      <a href="javascript:void(0)" data-id={{ $item->rowId }}
                          class="moveToCart btn btn-dark btn-rounded btn-sm ml-lg-2 btn-cart">Add to
                          cart</a>
                  </div>
              </td>
          </tr>
          @endforeach
          @else
          <h3 class=" bg-red-700 m-10 p-10 text-white text-center w-100"> There is not items to show in the wish list
          </h3>
          <a href="{{ route('homepage') }}"><button type="button" class="btn btn-outline-danger"> Countinu Shopping
              </button></a>
          @endif

      </tbody>
  </table>
  @else
  <h3 class="wishlist-title">مفضلتي</h3>
  <table class="shop-table wishlist-table">

      <thead>
          <tr>
              <th class="product-name"><span>المنتج</span></th>
              <th></th>
              <th class="product-price"><span>السعر</span></th>
              <th class="product-stock-status"><span>حالة المنتج </span></th>
              <th class="wishlist-action">الفعل</th>
          </tr>
      </thead>
      <tbody>
        @if (\Gloudemans\Shoppingcart\Facades\Cart::instance('wishlist')->count() > 0 )
        @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('wishlist')->content() as $item)
        @php
        $other_image = explode(',', $item->model->image);
        @endphp
        <tr>
            <td class="product-thumbnail">
                <div class="p-relative">
                    <a href="{{route('singleproduct',  $item->model->slug)  }}">
                        <figure class="product-media">
                            @if(count($other_image) > 1)
                            <img src="{{ asset($other_image[0]) }}" alt="Product" style="width: 100% !important;
                            height: 90px !important;object-fit: contain;" />
                             <img src="{{ asset($other_image[1]) }}" alt="Product" style="width: 100% !important;
                             height: 90px !important;object-fit: contain;" />
                             @else
                             <img src="{{ asset($other_image[0]) }}" alt="Product" style="width: 100% !important;
                             height: 90px !important;object-fit: contain;" />
                             @endif 
                        </figure>
                    </a>
                    <button type="submit" class="btn btn-close delete_wishlist" data-id="{{ $item->rowId }}"><i
                            class="fas fa-times"></i></button>
                </div>
            </td>
            <td class="product-name">
                <a href="{{ route('singleproduct',  $item->model->slug) }}">
                    {{ $item->name }}
                </a>
            </td>
            <td class="product-price">
                  <ins class="new-price">{{ $item->price }} د.أ</ins>
              </td>
              <td class="product-stock-status">
                  <span class="wishlist-in-stock">متوفر</span>
              </td>
              <td class="wishlist-action">
                  <div class="d-lg-flex">
                    <a href="javascript:void(0)" data-id={{ $item->rowId }}
                        class="moveToCart btn btn-dark btn-rounded btn-sm ml-lg-2 btn-cart">أضافة للسلة</a>
                  </div>
              </td>
          </tr>
          @endforeach
          @else
          <h3 class=" bg-red-700 m-10 p-10 text-white text-center w-100"> لايوجد منتجات متاحة
          </h3>
          <a href="{{ route('homepage') }}"><button type="button" class="btn btn-outline-danger"> متابعة التسوق </button></a>
          @endif

      </tbody>
  </table>
  @endif