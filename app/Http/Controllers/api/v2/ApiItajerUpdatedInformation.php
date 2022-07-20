<?php

namespace App\Http\Controllers\api\v2;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ApiItajerUpdatedInformation extends Controller
{
    //++++++++++++++++++++++++++++ Users Info ++++++++++++++++++++++
    public function users_info($id=null)
    {
        if($id == null){
            $users = User::get();
            return response()->json([
                'users'=>$users,
            ]);
        }else{
            $user = User::find($id);
            return response()->json([
                'user'=>$user,
            ]);
        }
    }

    //++++++++++++++++++++++++++++ End Users Info ++++++++++++++++++++++

}

