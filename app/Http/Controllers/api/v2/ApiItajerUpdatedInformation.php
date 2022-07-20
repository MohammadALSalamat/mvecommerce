<?php

namespace App\Http\Controllers\api\v2;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

      // ++++++++++++++++++++++++++++ USERS INFORMTION ++++++++++++++++++++++++++++++
      public function register_new_user(Request $request)
      {
          $data = $request->all();
          $validator = Validator::make($data,[
              'full_name'=>'required',
              'email'=>'required|email|unique:users',
              'password'=>'required'
          ],[
              'full_name.required'=>'full name file is required',
              'email.required'=>'email is required',
              'email.unique'=>'email is already there',
          ]);
          
          if($validator->fails()){
              return response()->json(
                  $validator->errors(),422);
          }
          
          $addnewcustumer = new User();
          $addnewcustumer->full_name = $data['full_name'];
          $addnewcustumer->email = $data['email'];
          $addnewcustumer->password = Hash::make(($data['password']));
          $addnewcustumer->save();
  
          $token = $addnewcustumer->createToken('ItajerCustomerToken')->accessToken;
          return response()->json(['token'=>$token,'full_name'=>$addnewcustumer->full_name ,'email'=> $addnewcustumer->email],200) ;
  
      }
  
       // login get the info details
      public function login_user(Request $request)
      {
           $data = $request->all();
           $validator = Validator::make($data,[
               'email'=> 'email|required|exists:users,email',
               'password'=>'required|min:4',
           ]);
           if ($validator->fails()) {
               if ($validator->fails()) {
                   return response()->json($validator->errors(), 422);
               }
           }
           $userInfo=[
              'email'=>$data['email'],
              'password'=>$data['password'],
              'status'=>'active'
           ];
           if(auth()->attempt($userInfo)){
               $token = auth()->user()->createToken('ItajerCustomerToken')->accessToken;
               return response()->json(['token'=>$token,'full_name'=>auth()->user()->full_name ,'email'=> auth()->user()->email],200) ;
           }else{
               return response()->json(['errors'=>'Please chech your Passwrod or Email Validation '], 422);
           }
      }
   
    //++++++++++++++++++++++++++++ End Users Info ++++++++++++++++++++++

}

