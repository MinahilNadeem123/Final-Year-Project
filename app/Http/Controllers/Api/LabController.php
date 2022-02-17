<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\LapTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LabController extends Controller
{
    public function addLabs(Request $request)
    {
        $customMsgs = [
            'name.required' => 'Please Provide Lab Test Name',
            'price.required' => 'Please Provide Price',
        ];
        $validator = Validator::make($request->all(),
            [
                'name' => 'required|string',
                'price' => 'required|string',

            ], $customMsgs
        );

        if ($validator->fails()) {
            return response()->json(['status' => 0, 'message' => $validator->messages()->first()], 200);
        }

            $lab = LapTemplate::create([

                'name' => $request->name,
                'template' => $request->price,

            ]);





            return response()->json(['status' => '1' , 'message'  => 'Test Added Successfully','lab'=>$lab]);

        }
}
