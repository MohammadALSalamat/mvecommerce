<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminviewController extends Controller
{
    //adminn show page

    public function showloginpage()
    {
       return view('backend.auth.login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password])) {
           return redirect()->intended(route('admin'))->with('message','welcome admin');
        }else{
            return back()->with('error','you dont have permission');
        }
    }

    public function switchLang($lang)
    {
       
       if(array_key_exists($lang,Config::get('languages'))){
        Session::put('applocale',$lang);
       }
       return Redirect::back();
    }
}
