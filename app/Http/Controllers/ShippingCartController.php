<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class ShippingCartController extends Controller
{
    //stor the cart product

    public function add_to_cart(Request $request)
    {
        $data = $request->all();
        
        $product_id = $request->input('product_id');
        $product_qant = $request->input('product_quant');

        // this has a model in the product model
        $product = product::getProductByCart($product_id);

        if(empty($product[0]['offer_price']) || $product[0]['offer_price'] == null){

            $price = $product[0]['offer_price'];
        }else{
            $price = $product[0]['price'];
        }
        //array to save all the products that will be inserted to the cart
        $cart_array=[];
        foreach(Cart::instance('shopping')->content() as $item){
            $cart_array[]= $item->id;

        }
        $result = Cart::instance('shopping')->add($product_id,$product[0]['title'], $product_qant,$price)->associate('App\Models\product');
        if ($result) {
            $response['status'] = true;
            $response['product_id'] = $product_id;
            $response['total'] = Cart::subtotal();
            $response['cart_count'] = Cart::instance('shopping')->count();
        }

        //render the header cart value
        if($request->ajax()){
            $header = view('frontend.frontend_layout.header')->render();
            $response['header'] = $header;
        }
        return json_encode($response); 
    }

    public function cart_delete(Request $request)
    {
        //delete the item from the cart on the header top

        $id = $request->input('cart_id');
         Cart::instance('shopping')->remove($id);
        
            $response['status'] = true;
            $response['total'] = Cart::subtotal();
            $response['cart_count'] = Cart::instance('shopping')->count();
            $response['message'] ="the item has been deleted"; 
        //render the header cart value
        if ($request->ajax()) {
            $header = view('frontend.frontend_layout.header')->render();
            $response['header'] = $header;
        }
        return json_encode($response); 

    }
}
