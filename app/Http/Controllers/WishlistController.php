<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class WishlistController extends Controller
{
    // view wishlist page

    public function view_wishlist()
    {
       return view('frontend.frontend_pages.cart.wishlist');
    }

    public function add_to_wishlist(Request $request)
    {
        $data = $request->all();

        $product_id = $request->input('product_id');
        $product_qant = $request->input('product_quant');
        
        // this has a model in the product model
        $product = product::getProductByCart($product_id);

        if (empty($product[0]['offer_price']) || $product[0]['offer_price'] == null) {

            $price = $product[0]['offer_price'];
        } else {
            $price = $product[0]['price'];
        }
        //array to save all the products that will be inserted to the cart
        $wishlist_array = [];
        foreach (Cart::instance('wishlist')->content() as $item) {
            $wishlist_array[] = $item->id;
        }
        if(in_array($product_id,$wishlist_array)){
            $response['present'] =true;
            $response['message']= "The item is already in your wishlist";
        }else{
            
            $result = Cart::instance('wishlist')->add($product_id, $product[0]['title'], $product_qant, $price)->associate('App\Models\product');
        }
        if ($result) {
            $response['status'] = true;
            $response['wishlist_count'] = Cart::instance('wishlist')->count();
        }

        //render the header cart value
        if ($request->ajax()) {
            $header = view('frontend.frontend_layout.header')->render();
            $response['header'] = $header;
        }
        return json_encode($response);
    }

    public function wishlist_move_to_cart(Request $request)
    {
        // this has a model in the product model
        $wishlist_item =Cart::instance('wishlist')->get($request->input('rowId'));

        // remove the item before send to the cart
        Cart::instance('wishlist')->remove($request->input('rowId'));

        //add the item to Cart

        $result = Cart::instance('shopping')->add($wishlist_item->id, $wishlist_item->name,1,$wishlist_item->price)->associate('App\Models\product');
        if ($result) {
            $response['status'] = true;
            $response['message'] = "the item has been moved to Cart";
            $response['cart_count'] = Cart::instance('shopping')->count();
        }
        //render the header cart value
        if ($request->ajax()) {
            $header = view('frontend.frontend_layout.header')->render();
            $wishlist_list = view('frontend.frontend_layout._wishlist-list')->render();
            $cart_lists = view('frontend.frontend_layout._cart-lists')->render();
            $response['cart_lists'] = $cart_lists;
            $response['header'] = $header;
            $response['wishlist_list'] = $wishlist_list;
        }
        return json_encode($response);
    }

    // delete the wishlist items
    public function wishlist_delete(Request $request)
    {
        // this has a model in the product model
        $id = $request->input('rowId');

        Cart::instance('wishlist')->remove($id);

        $response['status'] = true;
        $response['message'] = "the item has been deleted";
        $response['cart_count'] = Cart::instance('shopping')->count();


        //render the header cart value
        if ($request->ajax()) {
            $header = view('frontend.frontend_layout.header')->render();
            $wishlist_list = view('frontend.frontend_layout._wishlist-list')->render();
            $cart_lists = view('frontend.frontend_layout._cart-lists')->render();
            $response['cart_lists'] = $cart_lists;
            $response['header'] = $header;
            $response['wishlist_list'] = $wishlist_list;
        }
        return $response;
        //add the item to Cart
    }
}
