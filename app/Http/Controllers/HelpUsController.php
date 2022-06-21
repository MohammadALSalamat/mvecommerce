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
        $totalLikes = likeDislike::get();
        
        dd($current_post);

        $liketotal = array();

       if($data['post_type'] == 'like'){
        $check_user_if_checked_thumbs = likeDislike::where('user_id',$current_user->id)->where('post_id',$current_post->id)->count();
        if($check_user_if_checked_thumbs > 0){
            $likes = likeDislike::where('post_id',$current_post->id)->get();
            foreach($likes as $like){
                array_push($liketotal,$like->like);
            }
            $result = array_sum($liketotal) - 1;
            likeDislike::where('user_id',$current_user->id)->where('post_id',$current_post->id)->update([
                'like' => $result ,
            ]);
        }else{
            $add_newlike = new likeDislike();
            $add_newlike->user_id = $current_user->id;
            $add_newlike->post_id = $current_post->id;
            $add_newlike->like = ;
        }

       }else{
        dd($data);
       }
    }
}
