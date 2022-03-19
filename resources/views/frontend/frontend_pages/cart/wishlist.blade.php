@extends('frontend.frontend_layout.main_desgin')

@section('content')
 <!-- Start of Main -->
        <main class="main wishlist-page">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">Wishlist</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-10">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="demo1.html">Home</a></li>
                        <li>Wishlist</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of PageContent -->
            <div class="page-content">
                <div class="container">
                    <h3 class="wishlist-title">My wishlist</h3>
                    <table class="shop-table wishlist-table" id="wishlist_list">
                      @include('frontend.frontend_layout._wishlist-list')
                    </table>
                    <div class="social-links">
                        <label>Share On:</label>
                        <div class="social-icons social-no-color border-thin">
                            <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                            <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                            <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                            <a href="#" class="social-icon social-email far fa-envelope"></a>
                            <a href="#" class="social-icon social-whatsapp fab fa-whatsapp"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of PageContent -->
        </main>
        <!-- End of Main -->
@endsection

@section('script')
<script>
// move the item from wishlist to cart
$('.moveToCart').on('click',function(e){
e.preventDefault();
var rowId = $(this).data('id');
var token = "{{ csrf_token() }}";
var path = "{{ route('wishlist_move_to_cart') }}";
$.ajax({
    url: path,
    type:"POST",
    data:{
        _token:token,
        rowId:rowId,
    },
    beforeSend:function(){
        $(this).html('<i class="fas fa-spinner fa-spin"></i> Moving To Cart ....');
    },
    success: function (data) {
        $('body #header-ajax').html(data['header']);
        $('body #wishlist_counter').html(data['wishlist_count']);
        $('body #wishlist_list').html(data['wishlist_list']);
    }
});

})

</script>

<script>
// Delete the current wishlist item
$('.delete_wishlist').on('click',function(e){
e.preventDefault();
var rowId = $(this).data('id');
var token = "{{ csrf_token() }}";
var path = "{{ route('wishlist_delete') }}";
$.ajax({
    url: path,
    type:"POST",
    data:{
        _token:token,
        rowId:rowId,
    },
    success: function (data) {
        $('body #header-ajax').html(data['header']);
        $('body #wishlist_counter').html(data['wishlist_count']);
        $('body #wishlist_list').html(data['wishlist_list']);
    }
});

})

</script>
@endsection