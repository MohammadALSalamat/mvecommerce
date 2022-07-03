<?php

namespace App\Http\Controllers\api\v1;

use App\Models\banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Seller;
use App\Models\User;

class frontPageApiController extends Controller
{
    public function banners()
    {
        $banners = Seller::get();
        return json_decode($banners);

    }
}
