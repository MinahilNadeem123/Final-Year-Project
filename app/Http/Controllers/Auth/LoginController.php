<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginPage()
    {
        return view('login');

    }

    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            if (auth()->user()->type == "admin") {
                return redirect('admin');
            }
            else if(auth()->user()->type == "doctor"){
                return redirect('doctorDashboard');
            }
            else if(auth()->user()->type == "receptionist"){
                return redirect('receptionistDashboard');
            }
        }
        else{
            return redirect('/');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');

    }
}
