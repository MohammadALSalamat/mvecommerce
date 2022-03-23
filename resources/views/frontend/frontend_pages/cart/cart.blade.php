@extends('frontend.frontend_layout.main_desgin')
@section('content')

  <!-- Start of Main -->
        <main class="main cart">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb shop-breadcrumb bb-no">
                        <li class="active"><a href="{{ route('viewcart') }}">Shopping Cart</a></li>
                        <li><a href="{{ route('checkout') }}">Checkout</a></li>
                        <li><a href="order.html">Order Complete</a></li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of PageContent -->
            <div class="page-content" >
                <div class="container">
                    <div class="row gutter-lg mb-10" id="cart_lists">
                                                     @include('frontend.frontend_layout._cart-lists')

                    </div>
                </div>
            </div>
            <!-- End of PageContent -->
        </main>
        <!-- End of Main -->

@endsection

@section('script')
<script>
    $(document).on('click','.qty',function () {
        var id = $(this).data('id');
        var spinner = $(this),input = spinner.closest("div.quantity").find('input[type="number"]');
        if(input.val()==0){
            return false;
        }
        if(input.val() != 1){
            var newVal = parseFloat(input.val());
            $('#qty-input-'+id).val(newVal);
        }
        var productQuantity = $('#update-cart-'+id).data('product-quantity');
       
        update_cart(id,productQuantity)
    });

    function update_cart(id,productQuantity){
    var rowId = id;
    var product_qty = $('#qty-input-'+rowId).val();
    var token="{{ csrf_token() }}";
    var path="{{ route('update_cart') }}";

    $.ajax({
        type: "POST",
        url: path,
        data:{
            _token:token,
            product_qty : product_qty,
            rowId:rowId,
            productQuantity:productQuantity,
        },
        success: function (data) {
            console.log(data)
            if(data['status']){
            $('body #header-ajax').html(data['header']);
            $('body #cart_lists').html(data['cart_lists']);
            }else{
                alert('Out Of Stock');
            }
        }
    });
    }
</script>

<script>
// the coupon appling
$(document).on('click','.code_coupon_click',function(e){
e.preventDefault();
var valCode = $('input[name=code_coupon]').val();
$('.code_coupon_click').html('<i class="fas fa-spinner fa-spin"></i> Applying....');
$('#form_coupon').submit();
});

</script>
@endsection