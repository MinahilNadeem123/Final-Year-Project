<?php

namespace App\Http\Controllers\Api;

use App\Appointment;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{
    public function addAppointment(Request $request)
    {
        $customMsgs = [
            'doctor_id.required' => 'Please Provide doctor',
            'date'=>'Please Provide date',
            'time'=>'Please Provide time'
        ];
        $validator = Validator::make($request->all(),
            [
                'doctor_id' => 'required',
                'date' => 'required|string',
                'time' => 'required|string',

            ], $customMsgs
        );

        if ($validator->fails()) {
            return response()->json(['status' => 0, 'message' => $validator->messages()->first()], 200);
        }
        $appointment = Appointment::create([

            'doctor_id' => $request->doctor_id,
            'time'=>$request->time,
            'date'=>$request->date,
            'patient_id' => Auth::id(),

        ]);





        return response()->json(['status' => '1' , 'message'  => 'Appointment Added Successfully','data'=>$appointment]);

    }
}
