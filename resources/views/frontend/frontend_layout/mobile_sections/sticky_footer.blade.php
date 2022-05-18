 <!-- Start of Sticky Footer -->
 <div class="sticky-footer sticky-content fix-bottom">
    <a href="{{ route('homepage') }}" class="sticky-link active">
        <i class="w-icon-home"></i>
        <p>Home</p>
    </a>
    @auth
                <div class="dropdown">
                    <a href="">My Account</a>
                    <div class="dropdown-box" style="max-width: 400px;min-width:100px">
                        <a href="#USD">hello {{ auth()->user()->full_name }}</a>
                        <a href="{{ route('userdashboard') }}">Dashboard</a>
                        <a class="" href="{{ route('logout_front_user') }}">Log Out </a>

                    </div>
                </div>
                @else
                <a href="{{route('loginForm')}}" class=""><i class="w-icon-account"></i>Sign In</a>
                <span class="delimiter d-lg-show">/</span>
                <a href="{{route('loginForm')}}"
                    class="ml-0 d-lg-show ">Register</a>
                @endauth
    <div class="cart-dropdown dir-up">
        <a href="cart.html" class="sticky-link">
            <i class="w-icon-cart"></i>
            <span class="cart-count"
                                id="cart-counter">{{ \Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->count() }}</span>
                        </i>
                        <span class="cart-label">Cart</span>
        </a>
        <div class="dropdown-box">
            <div class="products">
                <div class="product product-cart">
                    <div class="product-detail">
                        <h3 class="product-name">
                            <a href="product-default.html">Beige knitted elas<br>tic
                                runner shoes</a>
                        </h3>
                        <div class="price-box">
                            <span class="product-quantity">1</span>
                            <span class="product-price">$25.68</span>
                        </div>
                    </div>
                    <figure class="product-media">
                        <a href="product-default.html">
                            <img src="{{asset('front-style/assets/images/cart/product-1.jpg')}}" alt="product"
                                height="84" width="94" />
                        </a>
                    </figure>
                    <button class="btn btn-link btn-close" aria-label="button">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="product product-cart">
                    <div class="product-detail">
                        <h3 class="product-name">
                            <a href="product-default.html">Blue utility pina<br>fore
                                denim dress</a>
                        </h3>
                        <div class="price-box">
                            <span class="product-quantity">1</span>
                            <span class="product-price">$32.99</span>
                        </div>
                    </div>
                    <figure class="product-media">
                        <a href="product-default.html">
                            <img src="{{asset('front-style/assets/images/cart/product-2.jpg')}}" alt="product"
                                width="84" height="94" />
                        </a>
                    </figure>
                    <button class="btn btn-link btn-close" aria-label="button">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>

            <div class="cart-total">
                <label>Subtotal:</label>
                <span class="price">$58.67</span>
            </div>

            <div class="cart-action">
                <a href="cart.html" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                <a href="checkout.html" class="btn btn-primary btn-rounded">Checkout</a>
            </div>
        </div>
        <!-- End of Dropdown Box -->
    </div>

    <div class="header-search hs-toggle dir-up">
        <a href="#" class="search-toggle sticky-link">
            <i class="w-icon-search"></i>
            <p>Search</p>
        </a>
        <form action="#" class="input-wrapper">
            <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                required />
            <button class="btn btn-search" type="submit">
                <i class="w-icon-search"></i>
            </button>
        </form>
    </div>
</div>
<!-- End of Sticky Footer -->