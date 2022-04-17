<style>
    .modal {
        position: fixed;
        top: 50px;
        left: 0;
        z-index: 1055;
        display: none;
        width: 100%;
        height: 100%;
        overflow-x: hidden;
        overflow-y: auto;
        outline: 0;
        padding: 30px
    }

    .modal-dialog {
        position: relative;
        width: auto;
        margin: .5rem;
        pointer-events: none
    }

    .modal.fade .modal-dialog {
        transition: transform .3s ease-out;
        transform: translate(0, -50px)
    }

    @media (prefers-reduced-motion:reduce) {
        .modal.fade .modal-dialog {
            transition: none
        }
    }

    .modal.show .modal-dialog {
        transform: none
    }

    .modal.modal-static .modal-dialog {
        transform: scale(1.02)
    }

    .modal-dialog-scrollable {
        height: calc(100% - 1rem)
    }

    .modal-dialog-scrollable .modal-content {
        max-height: 100%;
        overflow: hidden
    }

    .modal-dialog-scrollable .modal-body {
        overflow-y: auto
    }

    .modal-dialog-centered {
        display: flex;
        align-items: center;
        min-height: calc(100% - 1rem)
    }

    .modal-content {
        position: relative;
        display: flex;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: .3rem;
        outline: 0
    }

    .modal-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1050;
        width: 100vw;
        height: 100vh;
        background-color: #000
    }

    .modal-backdrop.fade {
        opacity: 0
    }

    .modal-backdrop.show {
        opacity: .5
    }

    .modal-header {
        display: flex;
        flex-shrink: 0;
        align-items: center;
        justify-content: space-between;
        padding: 1rem 1rem;
        border-bottom: 1px solid #dee2e6;
        border-top-left-radius: calc(.3rem - 1px);
        border-top-right-radius: calc(.3rem - 1px)
    }

    .modal-header .btn-close {
        padding: .5rem .5rem;
        margin: -.5rem -.5rem -.5rem auto
    }

    .modal-title {
        margin-bottom: 0;
        line-height: 1.5
    }

    .modal-body {
        position: relative;
        flex: 1 1 auto;
        padding: 1rem
    }

    .modal-footer {
        display: flex;
        flex-wrap: wrap;
        flex-shrink: 0;
        align-items: center;
        justify-content: flex-end;
        padding: .75rem;
        border-top: 1px solid #dee2e6;
        border-bottom-right-radius: calc(.3rem - 1px);
        border-bottom-left-radius: calc(.3rem - 1px)
    }

    .modal-footer>* {
        margin: .25rem
    }

    @media (min-width:576px) {
        .modal-dialog {
            max-width: 500px;
            margin: 1.75rem auto
        }

        .modal-dialog-scrollable {
            height: calc(100% - 3.5rem)
        }

        .modal-dialog-centered {
            min-height: calc(100% - 3.5rem)
        }

        .modal-sm {
            max-width: 300px
        }
    }

    @media (min-width:992px) {

        .modal-lg,
        .modal-xl {
            max-width: 800px
        }
    }

    @media (min-width:1200px) {
        .modal-xl {
            max-width: 1140px
        }
    }

    .modal-fullscreen {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0
    }

    .modal-fullscreen .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0
    }

    .modal-fullscreen .modal-header {
        border-radius: 0
    }

    .modal-fullscreen .modal-body {
        overflow-y: auto
    }

    .modal-fullscreen .modal-footer {
        border-radius: 0
    }

    @media (max-width:575.98px) {
        .modal-fullscreen-sm-down {
            width: 100vw;
            max-width: none;
            height: 100%;
            margin: 0
        }

        .modal-fullscreen-sm-down .modal-content {
            height: 100%;
            border: 0;
            border-radius: 0
        }

        .modal-fullscreen-sm-down .modal-header {
            border-radius: 0
        }

        .modal-fullscreen-sm-down .modal-body {
            overflow-y: auto
        }

        .modal-fullscreen-sm-down .modal-footer {
            border-radius: 0
        }
    }

    @media (max-width:767.98px) {
        .modal-fullscreen-md-down {
            width: 100vw;
            max-width: none;
            height: 100%;
            margin: 0
        }

        .modal-fullscreen-md-down .modal-content {
            height: 100%;
            border: 0;
            border-radius: 0
        }

        .modal-fullscreen-md-down .modal-header {
            border-radius: 0
        }

        .modal-fullscreen-md-down .modal-body {
            overflow-y: auto
        }

        .modal-fullscreen-md-down .modal-footer {
            border-radius: 0
        }
    }

    @media (max-width:991.98px) {
        .modal-fullscreen-lg-down {
            width: 100vw;
            max-width: none;
            height: 100%;
            margin: 0
        }

        .modal-fullscreen-lg-down .modal-content {
            height: 100%;
            border: 0;
            border-radius: 0
        }

        .modal-fullscreen-lg-down .modal-header {
            border-radius: 0
        }

        .modal-fullscreen-lg-down .modal-body {
            overflow-y: auto
        }

        .modal-fullscreen-lg-down .modal-footer {
            border-radius: 0
        }
    }

    @media (max-width:1199.98px) {
        .modal-fullscreen-xl-down {
            width: 100vw;
            max-width: none;
            height: 100%;
            margin: 0
        }

        .modal-fullscreen-xl-down .modal-content {
            height: 100%;
            border: 0;
            border-radius: 0
        }

        .modal-fullscreen-xl-down .modal-header {
            border-radius: 0
        }

        .modal-fullscreen-xl-down .modal-body {
            overflow-y: auto
        }

        .modal-fullscreen-xl-down .modal-footer {
            border-radius: 0
        }
    }

    @media (max-width:1399.98px) {
        .modal-fullscreen-xxl-down {
            width: 100vw;
            max-width: none;
            height: 100%;
            margin: 0
        }

        .modal-fullscreen-xxl-down .modal-content {
            height: 100%;
            border: 0;
            border-radius: 0
        }

        .modal-fullscreen-xxl-down .modal-header {
            border-radius: 0
        }

        .modal-fullscreen-xxl-down .modal-body {
            overflow-y: auto
        }

        .modal-fullscreen-xxl-down .modal-footer {
            border-radius: 0
        }
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Start of Quick View -->
<div class=" modal fade" tabindex="-1" id="quickview{{ $product->id }}" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="product product-single">
                <div class="row gutter-lg ">
                    <div class="mb-4 col-md-6 mb-md-0">
                        <div class="product-gallery product-gallery-sticky">
                            <div class="swiper-container product-single-swiper swiper-theme nav-inner">
                                <div class="swiper-wrapper row cols-1 gutter-no">
                                    <div class="swiper-slide">
                                        <figure class="product-image">
                                            <img src="{{ asset($product->image) }}"
                                                data-zoom-image="{{asset('front-style/assets/images/products/popup/1-800x900.jpg')}}"
                                                alt="Water Boil Black Utensil" width="800" height="900">
                                        </figure>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    <div class="overflow-hidden col-md-6 p-relative">
                        <div class="pl-0 product-details scrollable">
                            <h2 class="product-title">{{ $product->title}}</h2>
                            <div class="product-bm-wrapper">
                                <figure class="brand">
                                    <img src="{{asset('front-style/assets/images/products/brand/brand-1.jpg')}}"
                                        alt="Brand" width="102" height="48" />
                                </figure>
                                <div class="product-meta">
                                    <div class="product-categories">
                                        Category:
                                        <span class="product-category"><a href="#">{{ $product->this_belong_to_category['title']}}</a></span>
                                    </div>
                                    <div class="product-sku">
                                        SKU: <span>MS46891340</span>
                                    </div>
                                </div>
                            </div>

                            <hr class="product-divider">
                            @if (empty($product->offer_price) || $product->offer_price == null)
                            <div class="product-price">{{ $product->price }} AED</div>
                            @else
                          <div class="product-price">{{ $product->offer_price }} AED - <del>{{ $product->price }} AED </del></div>

                            @endif()

                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 80%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                            </div>

                            <div class="product-short-desc">
                                {!! $product->Summary !!}
                            </div>

                            <hr class="product-divider">

                            <div class="product-variation-price">
                                <span></span>
                            </div>

                            <div class="product-form">
                                <div class="product-qty-form">
                                    <div class="input-group">
                                        <input class="quantity form-control" type="number" min="1" max="10000000">
                                        <button class="quantity-plus w-icon-plus"></button>
                                        <button class="quantity-minus w-icon-minus"></button>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-cart">
                                    <i class="w-icon-cart"></i>
                                    <span>Add to Cart</span>
                                </button>
                            </div>

                            <div class="social-links-wrapper">
                                <div class="social-links">
                                    <div class="social-icons social-no-color border-thin">
                                        <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                        <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                        <a href="#" class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                        <a href="#" class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                        <a href="#" class="social-icon social-youtube fab fa-linkedin-in"></a>
                                    </div>
                                </div>
                                <span class="divider d-xs-show"></span>
                                <div class="product-link-wrapper d-flex">
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"><span></span></a>
                                    <a href="#"
                                        class="btn-product-icon btn-compare btn-icon-left w-icon-compare"><span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function($) {
        $("#quickview{{ $product->id}}").modal();
    });
</script>
<!-- End of Quick view -->