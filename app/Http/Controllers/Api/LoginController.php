<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Patient;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;



class LoginController extends Controller
{

    public function login(Request $request)
    {
        $credentials=$request->only('email','password');
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {

            return response()->json(['status' => 0, 'message' => $validator->messages()->first()], 200);

        }

        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {


            if (auth()->user()->type == "admin") {
                $user = Auth::user();
                $token = $user->createToken('token')->accessToken;
                return response()->json(['status' => 1, 'message' => "Login Successfully as Admin",'token'=>$token]);
            }
            else if(auth()->user()->type == "doctor"){
                $user = Auth::user();
                $token = $user->createToken('token')->accessToken;
                return response()->json(['status' => 1, 'message' => "Login Successfully as Doctor",'token'=>$token]);
            }
            else if(auth()->user()->type == "receptionist"){
                $user = Auth::user();
                $token = $user->createToken('token')->accessToken;
                return response()->json(['status' => 1, 'message' => "Login Successfully as Receptionist",'token'=>$token]);
            }
            else if(auth()->user()->type == "nurse"){
                $user = Auth::user();
                $token = $user->createToken('token')->accessToken;
                return response()->json(['status' => 1, 'message' => "Login Successfully as Nurse",'token'=>$token]);
            }
            else if(auth()->user()->type == "patient"){
                $user = Auth::user();
                $token = $user->createToken('token')->accessToken;

                return response()->json(['status' => 1, 'message' => "Login Successfully as Patient",'token'=>$token]);

            }


        }
        else{
            return response()->json(['status' => 0, 'message' => "Invalid Login Credentials"]);
        }
    }

    public function register( Request $request){
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'password_confirmation' => 'required_with:password|same:password',
            'national_id'=>'required',
            'type' => 'required'
        ]);
        if ($validator->fails()) {

            return response()->json(['status' => 0, 'message' => $validator->messages()->first()], 200);

        }

        $user = User::create($request->except('password') + ['password' => bcrypt($request->password)]);

//        config(['auth.guards.api.provider' => 'brand-api']);
//        $success['token'] = $user->createToken('Unfaded-' . rand(0, 9))->accessToken;

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

        }
        $data = [
            'first_name' => $user->first_name,
            'email' => $user->email,
            'password' => $user->password,
            'national_id' => $user->national_id,
            'type' => 'patient',
        ];

        return response()->json(['status' => 1, 'message' => "Registered Successfully",
            'data' => $data], 200);

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');

    }
}
