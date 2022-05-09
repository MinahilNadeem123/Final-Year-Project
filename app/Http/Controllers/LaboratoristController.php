<?php

namespace App\Http\Controllers;

use App\Department;
use App\Ix_order;
use App\Laboratorist;
use App\LapReport;
use App\LapTemplate;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class LaboratoristController extends Controller
{
    public function index()
    {
        return view('users.laboratorists.list')->with('laboratorists', User::laboratorist()->get())->with('departments',Department::all());

    }
    public function laboratoristDashboard(){
        return view('users.laboratorists.laboratoristDashboard');
    }
    public function addTest(){
        return view('users.laboratorists.addTest');
    }
    public function labPatientList(){
        $data=Ix_order::with('patient','doctor')->get();

               return view('users.laboratorists.labPatientList',['data'=>$data]);
    }
    public function uploadReports($id){
        $data=Ix_order::with('patient','doctor')->find($id);
        return view('users/laboratorists/uploadReportsForm',['data'=>$data]);
    }
    public function patientReports(Request $request)
    {
        $validatedData = $request->validate([
            'insert_reports' => 'required',

        ]);
                 $lap_reports=new LapReport();
        $name = $request->insert_reports;
        $filename=time().'.'.$name->getClientOriginalExtension();
        $request->insert_reports->move('assets',$filename);


         $lap_reports->patient_id=$request->patient_id;
         $lap_reports->doctor_id=$request->doctor_id;
         $lap_reports->ix_orders_id=$request->template_id;
         $lap_reports->date=Carbon::today();
         $lap_reports->time=Carbon::now();
         $lap_reports->report=$filename;
        $lap_reports->save();
        $lap_patient=LapReport::where('ix_orders_id', $request->template_id)->first();

         $ix_orders=Ix_order::find($request->template_id);

        $ix_orders->lap_reports_id=$lap_patient->id;
        $ix_orders->save();

        session()->flash('success', 'Reports Uploaded Successfully.');

        return redirect('labPatientList');

    }


    public function insertTest(Request $request){
        $labTest=new LapTemplate();
        $labTest->name=$request->test_name;
        $labTest->template=$request->test_price;
        $labTest->save();
        session()->flash('success', 'Data Added Successfully.');

        return redirect(route('testList'));
    }
    public function testList(){
        $data=LapTemplate::all();
        return view('users.laboratorists.testList',['data'=>$data]);
    }


    public function create()
    {
        return view('users.laboratorists.create')->with('departments',Department::all());

    }

    public function store(Request $request)
    {
        $laboratorist = User::create([
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
            'type' => 'laboratorist',
        ]);

        if($request->picture){
            $pic = $request->picture->store('laboratorists_pictures');
            $laboratorist->picture = $pic;
            $laboratorist->save();
        }

        if ($request->departments){
            $laboratorist->departments()->attach($request->departments);
        }
        // flash message
        session()->flash('success', 'New Laboratorist Added Successfully.');
        // redirect user
        return redirect(route('laboratorists.index'));
    }

    public function show(User $laboratorist)
    {
        return view('users.laboratorists.show')->with('laboratorist', $laboratorist)->with('departments',Department::all());

    }

    public function edit(User $laboratorist)
    {
        return view('users.laboratorists.create')->with('laboratorist', $laboratorist)->with('departments',Department::all());

    }

    public function update(Request $request, User $laboratorist)
    {
        $data = $request->only('first_name','last_name','national_id', 'email', 'address', 'birth_date', 'gender', 'phone', 'mobile', 'emergency');
        if ($request->hasFile('picture')) {

            $pic = $request->picture->store('laboratorists_pictures');

            Storage::delete($laboratorist->picture);

            $data['picture'] = $pic;
        }

        if ($request->departments) {
            $laboratorist->departments()->sync($request->departments);
        }

        $laboratorist->update($data);
        // flash message
        session()->flash('success', 'Laboratorist Info Updated Successfully.');
        // redirect user
        return redirect(route('laboratorists.index'));
    }

    public function destroy(User $laboratorist)
    {
        $laboratorist->departments()->detach();
        $laboratorist->timeSchedules()->delete();
        Storage::delete($laboratorist->picture);
        $laboratorist->delete();
        // flash message
        session()->flash('success', 'Laboratorist Deleted Successfully.');
        // redirect user
        return redirect(route('laboratorists.index'));
    }

    public function deleteTest($id){
        $data=LapTemplate::find($id);
        $data->delete();
        return redirect(route('testList'));
    }
    public function fetch_labs_awaited(){
        $labs_awaited=Ix_order::with('patient','lap_reports')->where('doctor_id',Auth::id())
            ->get();
        return response()->json([
            'labs_awaited'=>$labs_awaited
        ]);
    }

    public function updateTest(Request $request)
    {

        $lapTest=LapTemplate::find($request->id);
        $lapTest->name=$request->test_name;
        $lapTest->template=$request->test_price;
        $lapTest->save();
        // flash message
        session()->flash('success', 'Test Updated Successfully.');
        // redirect user
        return redirect(route('testList'));
    }
    public function accessTest($id){
        $data=LapTemplate::find($id);
        return view('users/laboratorists/updateTest',['data'=>$data]);

    }

}
