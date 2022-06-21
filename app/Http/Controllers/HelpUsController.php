<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\helpUs;
use Illuminate\Http\Request;

class HelpUsController extends Controller
{
    public function helpusform(Request $request)
    {
        $data = $request->all();
        $current_user = User::find($data['user_id']);

        if($current_user){
            $newComment = new helpUs();
            $newComment->user_id = $current_user->id;
            $newComment->content = $data['message'];
            $newComment->save();
            return back()->with('message','Thank you for your Support, Togother we can do it');
        }else{
            return back()->with('error','please login first');
        }
    }
}
