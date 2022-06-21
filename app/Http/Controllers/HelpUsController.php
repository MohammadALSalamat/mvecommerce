<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\helpUs;
use App\Models\likeDislike;
use Illuminate\Http\Request;

class HelpUsController extends Controller
{
public function helpus()
{
    $posts = helpUs::get();
    $current_user = User::where('id',auth()->user()->id)->first();
    return view('frontend.frontend_pages.pages.helpUs',compact('posts','current_user'));
}
   

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

    public function like_submition(Request $request)
    {
        $data = $request->all();
        $current_user = User::where('id',$data['user_id'])->first();
        $current_post = helpUs::where('id',$data['post_id'])->first();
        dd($current_post);
       if($data['post_type'] == 'like'){
        $check_user_if_checked_thumbs = likeDislike::where('user_id',$current_user->id)->where('post_id',$current_post->id)->count();
        if($check_user_if_checked_thumbs > 0){

        }

       }else{
        dd($data);
       }
    }
}
