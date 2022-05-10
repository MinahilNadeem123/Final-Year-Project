<?php

namespace App\Http\Controllers;

use App\Department;
use App\Patient;
use App\Patient_current_visit_detail;
use App\Receptionist;
use App\Reference;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ReceptionistController extends Controller
{
    public function index()
    {
        return view('users.receptionists.list')->with('receptionists', User::receptionist()->get())->with('departments',Department::all());

    }
    public function addReference(Request $request)
    {
        $request->validate([
            'referer_name'=> 'required',
            'referer_designation'=>'required',
            'referer_number'=> 'required',
        ]);
        $reference=new Reference();
        $reference->referer_name=$request->referer_name;
        $reference->referer_designation=$request->referer_designation;
        $reference->referer_number=$request->referer_number;
        $reference->save();
        session()->flash('success', 'Data Inserted Successfully.');
        return redirect(route('patientForm'));
    }

    public function receptionDashboard(){
        return view('users/receptionists/receptionistDashboard');
    }
//    public function findPatients($id){
//        $p=Patient::where('national_id',$id)->first();
//        return response()->json($p);
//    }
    public function findPatientsByCrno($id){
        $p=Patient::where('cr_no',$id)->first();
        return response()->json($p);
    }

    public function patientForm(){

        $doctor=user::where('type','doctor')->get();
        $reference=Reference::all();
        $patient=Patient::orderBy("cr_no", "desc")->first("cr_no");
        if($patient== null){
            $patient_cr=1;
        }
        else{
            $patient_cr=++$patient->cr_no ;
        }

        return view('users/receptionists/patientForm', ['doctors' => $doctor,'cr'=>$patient_cr,'reference'=>$reference]);
    }

    public function create()
    {
        return view('users.receptionists.create')->with('departments',Department::all());

    }

    public function store(Request $request)
    {
        $receptionist = User::create([
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
            'type' => 'receptionist',
        ]);

        if($request->picture){
            $pic = $request->picture->store('receptionists_pictures');
            $receptionist->picture = $pic;
            $receptionist->save();
        }

        if ($request->departments){
            $receptionist->departments()->attach($request->departments);
        }
        // flash message
        session()->flash('success', 'New Receptionist Added Successfully.');
        // redirect user
        return redirect(route('receptionists.index'));
    }

    public function show(User $receptionist)
    {
        return view('users.receptionists.show')->with('receptionist', $receptionist)->with('departments',Department::all());

    }

    public function edit(User $receptionist)
    {
        return view('users.receptionists.create')->with('receptionist', $receptionist)->with('departments',Department::all());

    }

    public function update(Request $request, User $receptionist)
    {
        $data = $request->only('first_name','last_name','national_id', 'email', 'address', 'birth_date', 'gender', 'phone', 'mobile', 'emergency');
        if ($request->hasFile('picture')) {

            $pic = $request->picture->store('receptionists_pictures');

            Storage::delete($receptionist->picture);

            $data['picture'] = $pic;
        }

        if ($request->departments) {
            $receptionist->departments()->sync($request->departments);
        }

        $receptionist->update($data);
        // flash message
        session()->flash('success', 'Receptionist Info Updated Successfully.');
        // redirect user
        return redirect(route('receptionists.index'));
    }

    public function destroy(User $receptionist)
    {
        $receptionist->departments()->detach();
        $receptionist->timeSchedules()->delete();
        Storage::delete($receptionist->picture);
        $receptionist->delete();
        // flash message
        session()->flash('success', 'Receptionist Deleted Successfully.');
        // redirect user
        return redirect(route('receptionists.index'));
    }
    public function patientsList()
    {
        $data=Patient::get();
        return view('users/receptionists/RPatientsList',['data'=>$data]);
    }
    public function search_patient()
    {

        $patient=Patient::all();
        return response()->json($patient);
    }
    public function search_patient_by_cr()
    {
        $patient=Patient::all();
        return response()->json($patient);
    }
    public function deletePatient($id){
        $data=Patient::find($id);
        $data->delete();
        return redirect(route('RPatientsList'));
    }

    public function updatePatient(Request $request)
    {

        $patient=Patient::find($request->id);
        $patient->national_id=$request->national_id;
        $patient->first_name=$request->first_name;
        $patient->birth_date=$request->birth_date;
        $patient->age=$request->age;
        $patient->gender=$request->gender;
        $patient->marital_status=$request->marital_status;
        $patient->address_detail=$request->address_detail;
        $patient->mobile_no_1=$request->mobile_no_1;
        $patient->mobile_no_2=$request->mobile_no_2;
        $patient->mobile_no_3=$request->mobile_no_3;
        $patient->whatsapp_number=$request->whatsapp_number;
        $patient->email=$request->email;
        $patient->profession = $request->profession;
        $patient->professional_designation = $request->professional_designation;
        $patient->professional_address = $request->professional_address;
        $patient->native_language = $request->native_language;
        $patient->save();
        // flash message
        session()->flash('success', 'Time Schedule Updated Successfully.');
        // redirect user
        return redirect(route('RPatientsList'));
    }
    public function accessPatient($id){
        $data=Patient::find($id);
        $doctor=User::where('type','doctor')->get();
        return view('users/receptionists/updatePatient',['data'=>$data,'doctors'=>$doctor ]);

    }


}
