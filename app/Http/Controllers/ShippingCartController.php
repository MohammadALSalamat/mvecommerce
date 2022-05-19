<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\product;
use Illuminate\Http\Request;
use Session;
use Gloudemans\Shoppingcart\Facades\Cart;
use Gloudemans\Shoppingcart\Cart as ShoppingcartCart;

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

        if(!empty($product[0]['offer_price']) || $product[0]['offer_price'] != null){
            $price = $product[0]['offer_price'];
        }else{
            $price = $product[0]['price'];
        }
        //array to save all the products that will be inserted to the cart
        $cart_array=[];
        foreach(Cart::instance('shopping')->content() as $item){
            $cart_array[]= $item->id;

        }
        $result = Cart::instance('shopping')->add($product_id,$product[0]['title'],$product[0]['ar_title'], $product_qant,$price)->associate('App\Models\product');
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
            $cart_lists = view('frontend.frontend_layout._cart-lists')->render();
            $response['header'] = $header;
            $response['cart_lists'] = $cart_lists;
        }
        return json_encode($response); 

    }

    public function viewcart()
    {
        
     return view('frontend.frontend_pages.cart.cart');
    }

    public function update_cart( Request $request)
    {
       
        $rowId = $request->input('rowId');
        $current_qty = $request->input('product_qty');
        $product_full_qty = $request->input('productQuantity');

        if($product_full_qty == null || empty($product_full_qty)){
            Cart::instance('shopping')->update($rowId, $current_qty);
            $message = "Quantity was updated";
            $response['status'] = true;
            $response['total'] = Cart::subtotal();
            $response['cart_count'] = Cart::instance('shopping')->count();
            //render the header cart value
            if ($request->ajax()) {
                $header = view('frontend.frontend_layout.header')->render();
                $cart_lists = view('frontend.frontend_layout._cart-lists')->render();
                $response['header'] = $header;
                $response['cart_lists'] = $cart_lists;
                $response['message'] = $message;
            }
            return $response; 

        }elseif($current_qty > $product_full_qty)
        {
            $message = "We Dont have enough items in stock";
            $response['status']=false;
        }
                
        elseif($current_qty < 1)
        {
            $message = "you can not add less than 1 quantity";
            $response['status'] = false;

        }
                
        else{
            Cart::instance('shopping')->update($rowId,$current_qty);
            $message="Quantity was updated";
            $response['status']=true;
            $response['total'] = Cart::subtotal();
            $response['cart_count'] = Cart::instance('shopping')->count();
            //render the header cart value
            if ($request->ajax()) {
                $header = view('frontend.frontend_layout.header')->render();
                $cart_lists = view('frontend.frontend_layout._cart-lists')->render();
                $response['header'] = $header;
                $response['cart_lists'] = $cart_lists;
                $response['message'] = $message;
            }
            return $response; 
            }

    }

    // update single page product
    public function sing_page_update_cart( Request $request)
    {
       
        $rowId = $request->input('rowId');
        $current_qty = $request->input('product_qty');
        $product_full_qty = $request->input('productQuantity');
        
        if($product_full_qty == null || empty($product_full_qty)){
            Cart::instance('shopping')->update($rowId, $current_qty);
            $message = "Quantity was updated";
            $response['status'] = true;
            $response['total'] = Cart::subtotal();
            $response['cart_count'] = Cart::instance('shopping')->count();
            //render the header cart value
            if ($request->ajax()) {
                $header = view('frontend.frontend_layout.header')->render();
                $cart_lists = view('frontend.frontend_layout._cart-lists')->render();
                $response['header'] = $header;
                $response['cart_lists'] = $cart_lists;
                $response['message'] = $message;
            }
            return $response; 

        }elseif($current_qty > $product_full_qty)
        {
            $message = "We Dont have enough items in stock";
            $response['status']=false;
        }
                
        elseif($current_qty < 1)
        {
            $message = "you can not add less than 1 quantity";
            $response['status'] = false;

        }
                
        else{
            Cart::instance('shopping')->update($rowId,$current_qty);
            $message="Quantity was updated";
            $response['status']=true;
            $response['total'] = Cart::subtotal();
            $response['cart_count'] = Cart::instance('shopping')->count();
            //render the header cart value
            if ($request->ajax()) {
                $header = view('frontend.frontend_layout.header')->render();
                $cart_lists = view('frontend.frontend_layout._cart-lists')->render();
                $response['header'] = $header;
                $response['cart_lists'] = $cart_lists;
                $response['message'] = $message;
            }
            return $response; 
            }

    }

    // add Frequntly bought togother 
    public function freq_product_add_to_cart(Request $request)
    {
        if(empty($request->input('ids')) || $request->input('ids') == null){
            return back()->with('error','select one of the products');
        }
        $freq_products = product::whereIn('id',$request->input('ids'))->get(); // get frequantly products
        foreach ($freq_products as $ids) {
            // this has a model in the product model
            $product = product::getProductByCart($ids->id);

        if(!empty($product[0]['offer_price']) || $product[0]['offer_price'] != null){
            $price = $product[0]['offer_price'];
        }else{
            $price = $product[0]['price'];
        }
        //array to save all the products that will be inserted to the cart
        $cart_array=[];
        foreach(Cart::instance('shopping')->content() as $item){
            $cart_array[]= $item->id;

        }
        $result = Cart::instance('shopping')->add($ids->id,$product[0]['title'],1,$price)->associate('App\Models\product');
        if ($result) {
            $response['status'] = true;
            $response['product_id'] = $ids->id;
            $response['total'] = Cart::subtotal();
            $response['cart_count'] = Cart::instance('shopping')->count();
        }

        //render the header cart value
        if($request->ajax()){
            $header = view('frontend.frontend_layout.header')->render();
            $response['header'] = $header;
        }
    }
    return $response; 
    }




    //coupon

    public function code_coupon(Request $request)
    {
        $data = $request->all();

       $coupon = Coupon::where('code',$data['code_coupon'])->first();

       if($coupon){
           //get the total of the cart
          $cart_total= Cart::instance('shopping')->subtotal();

          //add the session for the coupon
         Session::put('coupon',[
            'id'=>$coupon->id,
            'code'=>$coupon->code,
            'value' => $coupon->discount($cart_total),
          ]);
        return back()->with('success','your coupon has been applied');
        // to complate the Math calculation go to model ( coupon )
    }else{
        return back()->with('error','the coupon is not correct');
    }
    }
}
