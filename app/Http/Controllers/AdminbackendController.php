<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminbackendController extends Controller
{
    // admin dashboard
    public function dashboard(){
        return view('backend/backend_layoute.main_desgin'); 
    }
}
