<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\LapReport;
use App\LapTemplate;
use App\Patient;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LabController extends Controller
{
    public function getLabs(Request $request)
    {

      $lab= LapTemplate::all();
      return response()->json(['status' => '1' , 'message'  => 'Test List','lab'=>$lab]);
        }

    public function getReports(){
        $user=User::where('id',auth('api')->user()->id)->first();
        $patient=Patient::where('national_id',$user->national_id)->first();
        $reports= LapReport::where('patient_id',$patient->id)->get();
        return response()->json(['status' => '1' , 'message'  => 'Test Reports','lab'=>$reports]);
    }
}
