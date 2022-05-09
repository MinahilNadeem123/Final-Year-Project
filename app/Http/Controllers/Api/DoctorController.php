<?php

namespace App\Http\Controllers\Api;

use App\Department;
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
    public function getDepartment(){
        $department=Department::all();
        return response()->json(['status' => '1' , 'departments' => $department]);
    }
    public function getDepartmentDoctor(Request $request){

        $department = Department::with('doctors')->where('id',  $request->department_id) ->get();

        foreach ($department as $dept){
            foreach ($dept->doctors as $doc ){
            $doctors[]=['doctor_name'=>

               $doc->first_name];
            }

        }
        return response()->json(['status' => '1' , 'doctors' => $doctors]);
    }
}
