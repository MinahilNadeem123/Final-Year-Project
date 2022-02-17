<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function getDoctor(){
        $data=User::select('id','first_name')->where('type','doctor')->get('first_name');
        return response()->json( ['status' => '1' , 'data'  => $data]);
    }
}
