<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class DriverController extends Controller
{
    public function showloginpage_driver()
    {
       return view('driver.auth.login');
    }

    public function login_driver(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::guard('driver')->attempt(['email' => $email, 'password' => $password])) {
           return redirect()->intended(route('driver'))->with('message','welcome Drivers');
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
