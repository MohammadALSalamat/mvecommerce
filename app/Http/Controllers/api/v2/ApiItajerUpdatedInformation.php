<?php

namespace App\Http\Controllers\api\v2;
use App\Models\City;
use App\Models\User;
use App\Models\Region;
use App\Models\Country;
use App\Models\userLocation;
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
            if($user){
                return response()->json([
                    'user'=>$user,
                ]);
            }else{
                return response()->json(['errors'=>'The User is not found '], 404);
            }
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

    public function add_user_address(Request $request)
    {
    $data = $request->all();
    $current_user = User::find($data['user_id']);
    if ($current_user) {
    $validator = Validator::make($data,[
        'country'=> 'required',
        'state'=>'required',
        'phone'=>'required',
        'street_name'=>'required',
        'full_street_info'=>'required',
        'near_landmark'=>'required'
    ]);
    if ($validator->fails()) {
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
    }
    
    if (empty($data['city']) || $data['city'] == null) {
        $city = null;
    } else {
        $city = $data['city'];
    }
    
        
    if (empty($data['full_name']) || $data['full_name'] == null) {
        $full_name = $current_user->full_name;
    } else {
        $full_name = $data['full_name'];
    }
    
    $check_ifthe_City_is_UAE = Country::find($data['country']);
    $state = Region::find($data['state']);
    $city_name = City::find($city);
    $check_if_user_has_an_address = userLocation::where('user_id', $current_user->id)->count();
    if ($check_if_user_has_an_address == 0) {
        $themain_address = 1;
    } else {
        $themain_address = 0;
    }
    if ($check_ifthe_City_is_UAE->id == 252) {
        $new_address = new userLocation();
        $new_address->user_id = $current_user->id;
        $new_address->themain_address = $themain_address;
        $new_address->address = $data['street_name'];
        $new_address->full_name = $full_name;
        $new_address->full_street_info = $data['full_street_info'];
        $new_address->country = $check_ifthe_City_is_UAE->country;
        $new_address->city = $state->region;
        $new_address->phone = $data['phone'];
        $new_address->near_location = $data['near_landmark'];
        $new_address->save();
        }
        return response()->json(['success'=>'you have add a new address for shipping'],201);
        }else{
            return response()->json(['errors'=>'The User is not found'],404);
        }
    }

    public function update_delivery_address(Type $var = null)
    {
        # code...
    }
}