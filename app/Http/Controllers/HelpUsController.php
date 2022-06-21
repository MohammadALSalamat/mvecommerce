<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HelpUsController extends Controller
{
    public function helpusform(Request $request,$id)
    {
        $data = $request->all();
        $current_user = User::find($id);
        if($current_user){
            $newComment = new helpUs();
        }else{
            return back()->with('error','please login first')
        }
    }
}
