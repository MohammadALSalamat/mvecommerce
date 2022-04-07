<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sellerSittingsController extends Controller
{
    public function view_seller_details()
    {
       return view('Seller.seller_pages.sittings.view_seller_details');
    }
}
