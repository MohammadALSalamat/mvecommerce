  <thead>
      <tr>
          <th class="product-name"><span>Product</span></th>
          <th></th>
          <th class="product-price"><span>Price</span></th>
          <th class="product-quantity"><span>Quantity</span></th>
          <th class="product-subtotal"><span>Subtotal</span></th>
      </tr>
  </thead>
  <tbody>
      @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->content() as $item)
      <tr>
          <td class="product-thumbnail">
              <div class="p-relative">
                  <a href="{{ route('singleproduct',$item->model->slug) }}">
                      <figure>
                          <img src="{{ $item->model->image }}" alt="product" width="300" height="338">
                      </figure>
                  </a>
                  <button type="submit" class="btn btn-close cart_delete" aria-label="button"
                      data-id="{{ $item->rowId }}"><i class="fas fa-times"></i></button>
              </div>
          </td>
          <td class="product-name">
              <a href="{{ route('singleproduct',$item->model->slug) }}">
                  {{ $item->name }}
              </a>
          </td>
          <td class="product-price"><span class="amount">AED {{ $item->price }}</span></td>
          <td class="product-qty">
              <div class="quantity">
                  <input class="qty form-control" type="number" min="1" max="99" name="quantity"
                   data-id="{{ $item->rowId }}" id="qty-input-{{ $item->rowId }}"   value="{{ $item->qty }}">
                 
                  <input type="hidden" name="stockproduct" data-id="{{ $item->rowId }}"
                      data-product-quantity="{{ $item->model->stock }}" id="update-cart-{{ $item->rowId }}">
              </div>
          </td>
          <td class="product-subtotal">
              <span class="amount">AED {{ $item->subtotal() }}</span>
          </td>
      </tr>
      
      @endforeach
  </tbody>
  </table>