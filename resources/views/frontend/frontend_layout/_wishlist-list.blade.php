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
                            <tr>
                                <td class="product-thumbnail">
                                    <div class="p-relative">
                                        <a href="{{route('singleproduct',  $item->model->slug)  }}">
                                            <figure>
                                                <img src="{{  $item->model->image }} " alt="product" width="300"
                                                    height="338">
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
                                    <ins class="new-price">AED {{ $item->price }}</ins>
                                </td>
                                <td class="product-stock-status">
                                    <span class="wishlist-in-stock">In Stock</span>
                                </td>
                                <td class="wishlist-action">
                                    <div class="d-lg-flex">
                                        <a href="#"
                                            class="btn btn-quickview btn-outline btn-default btn-rounded btn-sm mb-2 mb-lg-0">Quick
                                            View</a>
                                        <a href="javascript:void(0)" data-id={{ $item->rowId }} class=" moveToCart btn btn-dark btn-rounded btn-sm ml-lg-2 btn-cart">Add to
                                            cart</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <h3 class=" bg-red-700 m-10 p-10 text-white text-center w-100"> There is not items to show in the wish list</h3>
                            <a href="{{ route('homepage') }}"><button type="button" class="btn btn-outline-danger"> Countinu Shopping </button></a>
                            @endif
                         
                        </tbody>