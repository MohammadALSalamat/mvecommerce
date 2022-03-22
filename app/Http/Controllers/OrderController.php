<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    //view checkout page

    public function view_checkout()
    {
        return view('frontend.frontend_pages.checkout.checkout');
    }
    public function checkout_process(Request $request)
    {
        dd($request->all());
    }
}
