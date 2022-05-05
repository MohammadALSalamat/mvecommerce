<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function get_card_info(Request $request, $id)
    {
        $data = $request->all();
        dd($data);
    }

}
