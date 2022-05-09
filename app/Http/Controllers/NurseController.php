<?php

namespace App\Http\Controllers;

use App\Department;
use App\Doctor_dashboard;
use App\Nurse_patient;
use App\Nursing_parameter;
use App\Patient;
use App\Patient_current_visit_detail;
use App\Risk_factor;
use App\User;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class NurseController extends Controller
{
    public function index()
    {
        return view('users.nurses.list')
            ->with('nurses', User::nurse()->get())->with('departments',Department::all());

    }

    public function addRiskFactors(){
        return view('users.nurses.addRiskFactors');
    }

    public function insert_risk_factor(Request $request){
        $request->validate([
            'risk_factor'=>'required',
        ]);

        $riskFactors = new Risk_factor();

        $riskFactors->risk_factors=$request->risk_factor;
        $riskFactors->save();

            session()->flash('success', 'Data Inserted Successfully.');
            return redirect(route('riskFactorsList'));


    }

    public function nurseDashboard(){
        return view('users.nurses.nurseDashboard');
    }

    public function nursingParameters(){

        $data=Nurse_patient::with('patient')->where('created_at', '>=', date('y-m-d').' 00:00:00')->get()->unique('patient_id');


        return view('users.nurses.nursingParameters',['data'=>$data]);
    }

    public function riskFactorsList(){
        $risk_factor=Risk_factor::all();
        return view('users.nurses.riskFactors',['risk_factors'=>$risk_factor]);
    }

    public function create()
    {
        return view('users.nurses.create')->with('departments',Department::all());

    }

    public function store(Request $request)
    {
        $nurse = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'national_id' => $request->national_id,
            'address' => $request->address,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'mobile' => $request->mobile,
            'emergency' => $request->emergency,
            'type' => 'nurse',
        ]);

        if($request->picture){
            $pic = $request->picture->store('nurses_pictures');
            $nurse->picture = $pic;
            $nurse->save();
        }

        if ($request->departments){
            $nurse->departments()->attach($request->departments);
        }
        // flash message
        session()->flash('success', 'New Nurse Added Successfully.');
        // redirect user
        return redirect(route('nurses.index'));
    }

    public function show(User $nurse)
    {
        return view('users.nurses.show')->with('nurse', $nurse)->with('departments',Department::all());

    }

    public function edit(User $nurse)
    {
        return view('users.nurses.create')->with('nurse', $nurse)->with('departments',Department::all());

    }

    public function update(Request $request, User $nurse)
    {
        $data = $request->only('first_name','last_name','national_id', 'email', 'address', 'birth_date', 'gender', 'phone', 'mobile', 'emergency');
        if ($request->hasFile('picture')) {

            $pic = $request->picture->store('nurses_pictures');

            Storage::delete($nurse->picture);

            $data['picture'] = $pic;
        }

        if ($request->departments) {
            $nurse->departments()->sync($request->departments);
        }

        $nurse->update($data);
        // flash message
        session()->flash('success', 'Nurse Info Updated Successfully.');
        // redirect user
        return redirect(route('nurses.index'));
    }
    public function addNursingParameters(Request $request){
        $request->validate([
            'cr_no'=>'required',
            'pulse_rate' => 'required',
            'systolic_bp_right_arm' => 'required',
            'diastolic_bp_right_arm' => 'required',
            'respiratory_rate'=> 'required',
            'temperature'=> 'required',
            'temperature_area'=> 'required',
            'oxygen_saturation'=> 'required',
            'gcs'=> 'required',
            'weight'=> 'required',
            'height'=> 'required',
            'diagnosed_case_of'=> 'required',
            'length'=> 'required',
            'head_circumference'=> 'required',
            'bmi_field'=> 'required',
            'z_score_weight_for_length'=> 'required',
            'z_score_infant_head_circumference_for_age'=> 'required',
            'who_infant_head_circumference_for_age_percentile'=> 'required',

        ]);

        $nursing_parameter = new Nursing_parameter();
        $data=Patient::where('cr_no',$request->cr_no)->first('id');
            $nursing_parameter->patient_id=$data->id;
        $nursing_parameter->pulse_rate=$request->pulse_rate;
        $nursing_parameter->systolic_bp_right_arm=$request->systolic_bp_right_arm;
        $nursing_parameter->diastolic_bp_right_arm=$request->diastolic_bp_right_arm;
        $nursing_parameter->respiratory_rate=$request->respiratory_rate;
        $nursing_parameter->temperature=$request->temperature;
        $nursing_parameter->temp_area=$request->temperature_area;
        $nursing_parameter->oxygen_saturation=$request->oxygen_saturation;
        $nursing_parameter->gcs=$request->gcs;
        $nursing_parameter->diagnosed_case_of=$request->diagnosed_case_of;
        $nursing_parameter->weight=$request->weight;
        $nursing_parameter->height=$request->height;
        $nursing_parameter->length=$request->length;
        $nursing_parameter->head_circumference=$request->head_circumference;
        $nursing_parameter->bmi=$request->bmi_field;
        $nursing_parameter->z_score_weight_for_length=$request->z_score_weight_for_length;
        $nursing_parameter->who_infant_weight_for_length_percentiles=$request->who_infant_weight_for_length;
        $nursing_parameter->z_score_infant_head_circumference_for_age=$request->z_score_infant_head_circumference_for_age;
        $nursing_parameter->who_infant_head_circumference_for_age_percentiles=$request->who_infant_head_circumference_for_age_percentile;
        if($request->vitalsAdd == 'yes'){
           $cvd=Patient_current_visit_detail::where('patient_id',$data->id)->where('current_visit_date',Carbon::today()->format('y-m-d'))->get();
          foreach ($cvd as $cv) {
              $docdash = new Doctor_dashboard();
              $docdash->doctor_id = $cv->doctor_id;
              $docdash->patient_id = $cv->patient_id;
              $nursing_parameter->save();
              $docdash->save();
              Nurse_patient::where('patient_id', $cv->patient_id)->delete();
          }
            session()->flash('success', 'Data Inserted Successfully.');
            return redirect(route('nursingParameters'));
        }
        else{
            session()->flash('error', 'Data Not Inserted.');
            return redirect(route('nursingParameters'));
        }

    }


    public function destroy(User $nurse)
    {
        $nurse->departments()->detach();
        $nurse->timeSchedules()->delete();
        Storage::delete($nurse->picture);
        $nurse->delete();
        // flash message
        session()->flash('success', 'Nurse Deleted Successfully.');
        // redirect user
        return redirect(route('nurses.index'));
    }
}
