<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Patient;
use App\User;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function getMrn(){
        $user=User::where('id',auth('api')->user()->id)->first();
        $patient=Patient::where('national_id',$user->national_id)->pluck('cr_no');
        return response()->json(['status' => '1' , 'message'  => 'Patient MRN','MRN'=>$patient]);
    }
}
