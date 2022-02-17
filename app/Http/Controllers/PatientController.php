<?php

namespace App\Http\Controllers;

use App\Department;
use App\Http\Requests\Patient\CreatePatientRequest;
use App\OpdDrug;
use App\Patient;
use App\Patient_current_visit_detail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class PatientController extends Controller
{
    public function index()
    {
        return view('users.patients.list')
            ->with('patients', User::patient()->get())
            ->with('departments',Department::all());
    }

    public function getDmForm(){
        return view('users/doctors/DMHistoryForm');
    }

    public function create()
    {
        return view('users.patients.create')->with('departments',Department::all());
    }
    function addPatient(Request $request ){


        if(\App\Patient::where('national_id', $request->national_id )->exists())
        {
            $request->validate([
                'current_visit'=> 'required',
                'doctor_id'=>'required',
                'patient_no'=>'required',
                'current_visit_date'=> 'required',
                'patient_visit_no'=> 'required',
                'patient_current_visit_category'=> 'required',
                'patient_current_visit'=> 'required',
                'fee_charged'=> 'required',
                'current_visit_note'=> 'required',
            ]);
            $currentVisit=new Patient_current_visit_detail();
            $id=Patient::where('national_id', $request->national_id )->get('id');
            foreach ($id as $item)
            {
            $currentVisit->patient_id=$item->id;
            }
            $currentVisit->current_visit=$request->current_visit;
            $currentVisit->patient_no=$request->patient_no;
            $currentVisit->current_visit_date=$request->current_visit_date;
            $currentVisit->doctor_id=$request->doctor_id;
            $currentVisit->patient_visit_no=$request->patient_visit_no;
            $currentVisit->patient_current_visit_category=$request->patient_current_visit_category;
            $currentVisit->patient_visit_no_with_this_consultant=$request->patient_visit_no;
            $currentVisit->patient_current_visit=$request->patient_current_visit;
            $currentVisit->current_visit_detail=$request->current_visit_detail;
            $currentVisit->fee_charged=$request->fee_charged;
            $currentVisit->appointment_number=$request->appointment_number;
            $currentVisit->current_visit_note=$request->current_visit_note;
            $currentVisit->referred=$request->referred;
            $currentVisit->save();

        }
        else{
            $request->validate([
                'cr_no'=>'required',
                'first_name' => 'required',
//                'last_name' => 'required',
                'national_id' => 'required',
                'birth_date'=> 'required',
//                'date_of_registration'=> 'required',
//                'time_of_registration'=> 'required',
                'age'=> 'required',
                'gender'=> 'required',
                'marital_status'=> 'required',
                'address_country'=> 'required',
                'address_province'=> 'required',
                'address_district'=> 'required',
                'address_tehsil'=> 'required',
                'address_detail'=> 'required',
                'final_address'=> 'required',
                'mobile_no_1'=> 'required',
                'whatsapp_number'=> 'required',
                'profession'=> 'required',
                'professional_designation'=> 'required',
                'professional_address'=> 'required',
                'native_language'=> 'required',
                'current_visit'=> 'required',
                'doctor_id'=>'required',
                'patient_no'=>'required',
                'current_visit_date'=> 'required',
                'patient_visit_no'=> 'required',
                'patient_current_visit'=> 'required',
                'patient_current_visit_category'=> 'required',
                'fee_charged'=> 'required',
                'current_visit_note'=> 'required',
            ]);

            $patient = new Patient();
            $patient->cr_no=$request->cr_no;
//            $patient->date_of_registration=$request->date_of_registration;
//            $patient->time_of_registration=$request->time_of_registration;
            $patient->first_name=$request->first_name;
//            $patient->last_name=$request->last_name;
            $patient->national_id=$request->national_id;
            $patient->email=$request->email;
            $patient->profession=$request->profession;
            $patient->professional_designation=$request->professional_designation;
            $patient->professional_address=$request->professional_address;
            $patient->native_language=$request->native_language;
            $patient->address_country=$request->address_country;
            $patient->address_province=$request->address_province;
            $patient->address_district=$request->address_district;
            $patient->address_tehsil=$request->address_tehsil;
            $patient->address_detail=$request->address_detail;
            $patient->final_address=$request->final_address;
            $patient->birth_date=$request->birth_date;
            $patient->age=$request->age;
            $patient->gender=$request->gender;
            $patient->marital_status=$request->marital_status;
            $patient->mobile_no_1=$request->mobile_no_1;
            $patient->mobile_no_2=$request->mobile_no_2;
            $patient->whatsapp_number=$request->whatsapp_number;
            $patient->mobile_no_3=$request->mobile_no_3;
            $patient->save();
            $currentVisit=new Patient_current_visit_detail();
            $id=Patient::where('cr_no', $request->cr_no )->get('id');
            foreach ($id as $item)
            {

                $currentVisit->patient_id=$item->id;
            }
            $currentVisit->current_visit=$request->current_visit;
            $currentVisit->current_visit_date=$request->current_visit_date;
            $currentVisit->patient_visit_no=$request->patient_visit_no;
            $currentVisit->patient_current_visit_category=$request->patient_current_visit_category;
            $currentVisit->patient_visit_no_with_this_consultant=$request->patient_visit_no;
            $currentVisit->patient_current_visit=$request->patient_current_visit;
            $currentVisit->current_visit_detail=$request->current_visit_detail;
            $currentVisit->fee_charged=$request->fee_charged;
            $currentVisit->doctor_id=$request->doctor_id;
            $currentVisit->appointment_number=$request->appointment_number;
            $currentVisit->current_visit_note=$request->current_visit_note;
            $currentVisit->referred=$request->referred;
            $currentVisit->save();


        }
        session()->flash('success', 'Data Inserted Successfully.');
        return redirect(route('RPatientsList'));
    }


    public function store(CreatePatientRequest $request)
    {
        $pic = $request->picture->store('patients_pictures');

        $patient = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'national_id' => $request->national_id,
            'email' => $request->email,
            'address' => $request->address,
            'password' => Hash::make($request->password),
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'mobile' => $request->mobile,
            'emergency' => $request->emergency,
            'blood_group' => $request->blood_group,
            'picture' => $pic,
            'type' => 'patient'
        ]);

        if ($request->departments){
            $patient->departments()->attach($request->departments);
        }

        // flash message
        session()->flash('success', 'New Patient Added Successfully.');
        // redirect user
        return redirect(route('patients.index'));
    }

    public function show(User $patient)
    {
        return view('users.patients.show')
            ->with('appointments', $patient->appointments)
            ->with('casehistories', $patient->casesHistories)
            ->with('documents', $patient->documents)
            ->with('bedallotments', $patient->bedAllotments)
            ->with('prescriptions', $patient->prescriptions)
            ->with('patient', $patient)
            ->with('departments',Department::all());
    }

    public function edit(User $patient)
    {
        return view('users.patients.create')
            ->with('patient', $patient)->with('departments',Department::all());
    }

    public function update(Request $request, User $patient)
    {
        $data = $request->only('first_name', 'last_name', 'national_id', 'email', 'address', 'birth_date', 'gender', 'phone', 'mobile', 'emergency', 'blood_group');

        if ($request->hasFile('picture')) {
            $pic = $request->picture->store('patients_pictures');
            Storage::delete($patient->picture);
            $data['picture'] = $pic;
        }

        if ($request->departments) {
            $patient->departments()->sync($request->departments);
        }

        $patient->update($data);
        // flash message
        session()->flash('success', ' Patient Updated Successfully.');
        // redirect user
        return redirect(route('patients.index'));
    }

    public function destroy(User $patient)
    {
        $patient->departments()->detach();
        Storage::delete($patient->picture);
        $patient->delete();
        // flash message
        session()->flash('success', ' Patient Deleted Successfully.');
        // redirect user
        return redirect(route('patients.index'));
    }
    public function dmHistoryForm(Request $request){
        $data=[
        $request->risks_factors,
          $request->newly_diagnosed,
          $request->diagnosed_incidntly_or_bsl_checkup,
           $request->diagnosed_due_to_symptoms_of_hyperglycemia,
           $request->diagnosed_as_developed_diabetic_complication,
        $request->diagnosed_due_to_hyperglycemia_crisis,
           $request->past_hx_of_gdm,
         $request->compliance,
          $request->glucometer_model,
          $request->monitoring,
           $request->initial_control,
          $request->current_control,
           $request->has_glucometer_at_home,
          $request->current_drugs,
         $request->generalised_weakness,
           $request->increased_thirst,
          $request->increased_urination,
           $request->weight_loss,
          $request->blurring_of_vision,
       $request->hypoglycemia_level1,
           $request->hypoglycemia_level2,
          $request->hypoglycemia_level3,
          $request->hypo_unawareness,
         $request->hypoglycemia_others,
         $request->decreased_vision,
           $request->spotters,
          $request->blurred_vision,
          $request->amaurosis,
          $request->gets_annual_eye_exam,
          $request->ho_laser_therapy,
           $request->ho_vagf_therapy,
           $request->ho_cataract,
           $request->cataract_details,
           $request->eye_others_sx,
           $request->ho_frothy_urine,
           $request->ho_periorbital_puffiness,
           $request->ho_anasarca,
           $request->kc_ckd,
           $request->ckd_details,
           $request->renal_other_sx,
           $request->numbness_of_hands,
           $request->painful_hands,
           $request->numbness_of_feet,
           $request->painful_feet,
           $request->burning_feet,
           $request->numbness_of_handsfeet,
           $request->burning_handsfeet,
           $request->parathesias,
           $request->sensory_others,
           $request->postural_dizziness,
           $request->resting_tachycardia,
           $request->early_satiety,
           $request->diarrhoea,
           $request->nocturnal_diarrhoea,
           $request->constipation,
           $request->diarrhea_alt_constipation,
           $request->erectile_dysfunction,
           $request->autonomic_others,
           $request->ho_cva_in_past,
           $request->ho_tia_in_past,
           $request->cva_details,
           $request->cva_others_sx,
           $request->ho_chest_discomfort,
           $request->ho_dyspenea,
           $request->kc_heart_disease,
           $request->heart_details,
           $request->ihd_others,
           $request->ho_claudication,
           $request->ho_finger_discoloration,
           $request->ho_toes_discoloration,
           $request->thigh_pain,
           $request->bells_palsy,
           $request->wasting_of_limb,
           $request->wasting_details,
           $request->ho_foot_ulcer_in_past,
           $request->cant_feel_shoes,
           $request->cant_feel_pressure,
           $request->foot_shape_changed,
           $request->checks_feet_daily,
           $request->check_shoes_before_wearing,
           $request->ho_amputation_in_past,
           $request->foot_other_sx,
           $request->recurrent_boils,
           $request->generalised_pruritis,
           $request->vulvoginal_pruritis,
           $request->balanoposthitis,
           $request->current_skin_complication,
           $request->feels_down,
           $request->lost_interest_in_things,
           $request->any_others,];
       return back()->with(['data'=>$data]);
    }
    public function search_patient($cr_no)
    {
        $data=User::find($cr_no);
        return view('update',['data'=>$data]);
    }
}

