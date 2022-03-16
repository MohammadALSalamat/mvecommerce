<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShippingCartController extends Controller
{
    //stor the cart product

    public function add_to_cart( Request $request)
    {
        $data = $request->all();
        dd($data);
    }
}
