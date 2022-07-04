@extends('frontend.frontend_layout.main_desgin')

 @if(Config::get('app.locale') == 'en')
@section('mytitle','WishList' )
@else
@section('mytitle','المفضلة ' )
@endif
@section('content')
 <!-- Start of Main -->
        <main class="main wishlist-page">
            <!-- Start of Page Header -->
            <div class="container">
                <div class="page-header" style="background:url('/storage/photos/1/Artboard 1 copy-100.jpg');background-size:cover">
                    <div class="container">
                        @if(Config::get('app.locale') == 'en')
                        <h1 class="page-title mb-0 text-white">Wishlist</h1>
                        @else
                        <h1 class="page-title mb-0 text-white">المفضلة</h1>
    
                        @endif
                    </div>
                </div>
                
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            @include('frontend.frontend_layout._breadcrumb')

            <!-- End of Breadcrumb -->

            <!-- Start of PageContent -->
            <div class="page-content">
                <div class="container" id="wishlist_list">
                    
                      @include('frontend.frontend_layout._wishlist-list')
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