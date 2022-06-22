<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\helpUs;
use App\Models\likeDislike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HelpUsController extends Controller
{
public function helpus()
{
    $posts = helpUs::get();
    if(Auth::check()){
    $current_user = User::where('id',auth()->user()->id)->first();
        return view('frontend.frontend_pages.pages.helpUs',compact('posts','current_user'));
    }else{
        return redirect()->route('loginForm')->with('error','Login First Please');
    }
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
        $totalLikes = likeDislike::where('help_us_id',$current_post->id)->get();
        

        $liketotal = array();

       if($data['post_type'] == 'like'){
        $check_user_if_checked_thumbs = likeDislike::where('user_id',$current_user->id)->where('help_us_id',$current_post->id)->first();
        $check_user_if_checked_thumbs_counts = likeDislike::where('user_id',$current_user->id)->where('help_us_id',$current_post->id)->count();        
       if($check_user_if_checked_thumbs_counts > 0){
        if ($check_user_if_checked_thumbs->likes == 1) {
            $likes = likeDislike::where('help_us_id', $current_post->id)->get();
            foreach ($likes as $like) {
                array_push($liketotal, $like->likes);
            }
            $result = array_sum($liketotal) - 1;
            if ($result < 0) {
                $result = 0;
            }
            likeDislike::where('user_id', $current_user->id)->where('help_us_id', $current_post->id)->update([
                'likes' => 0 ,
            ]);
            $response['status'] = true;
            $response['liketotal']=$result ;
            return $response;
        }else{
            $likes = likeDislike::where('help_us_id', $current_post->id)->get();
            foreach ($likes as $like) {
                array_push($liketotal, $like->likes);
            }
            $result = array_sum($liketotal) + 1;
            if ($result < 0) {
                $result = 0;
            }
            likeDislike::where('user_id', $current_user->id)->where('help_us_id', $current_post->id)->update([
                'likes' => 1 ,
            ]);
            $response['status'] = true;
            $response['liketotal']=$result ;
            return $response;
        }
        }else{
            $add_newlike = new likeDislike();
            $add_newlike->user_id = $current_user->id;
            $add_newlike->help_us_id = $current_post->id;
            $add_newlike->likes = 1;
            $add_newlike->dislikes = 0;
            $add_newlike->save();

            foreach($totalLikes as $liksresult){
                array_push($liketotal,$liksresult->likes);
            }
            if($add_newlike->save){
                $response['status'] = true;
                $response['liketotal']=array_sum($liketotal) ;
            }
          
           return json_encode($response); 

        }

       }else{
        $check_user_if_checked_thumbs = likeDislike::where('user_id',$current_user->id)->where('help_us_id',$current_post->id)->count();
        if($check_user_if_checked_thumbs > 0){
            $likes = likeDislike::where('help_us_id',$current_post->id)->get();
            foreach($likes as $like){
                array_push($liketotal,$like->dislikes);
            }
            $result = array_sum($liketotal) + 1;
            if($result < 0){
                $result = 0;
            }
            likeDislike::where('user_id',$current_user->id)->where('help_us_id',$current_post->id)->update([
                'dislikes' => $result ,
            ]);
                $response['status'] = true;
                $response['dislikecount']=$result ;
            return json_encode($response); 
            
        }else{
            $add_newlike = new likeDislike();
            $add_newlike->user_id = $current_user->id;
            $add_newlike->help_us_id = $current_post->id;
            $add_newlike->likes = 0;
            $add_newlike->dislikes = 1;
            $add_newlike->save();

            foreach($totalLikes as $liksresult){
                array_push($liketotal,$liksresult->likes);
            }
            if($add_newlike->save){
                $response['status'] = true;
                $response['dislikecount']= array_sum($liketotal) ;
            }
          
           return json_encode($response); 

        }
       }
    }
}
