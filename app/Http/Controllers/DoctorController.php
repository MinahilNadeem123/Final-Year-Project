<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Approach;
use App\Department;
use App\Diagnosis;
use App\Doctor;
use App\Doctor_dashboard;
use App\GeneralInstructionPanel;
use App\Http\Requests\Doctor\CreateDoctorRequest;
use App\Http\Requests\Doctor\UpdateDoctorRequest;
use App\Investigation;
use App\Ix_order;
use App\LapReport;
use App\Nursing_parameter;
use App\OpdDrug;
use App\Patient;
use App\Patient_current_visit_detail;
use App\Patient_medicine_record;
use App\Patient_record;
use App\Protocol;
use App\TimeSchedule;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use mysql_xdevapi\Exception;
use Stichoza\GoogleTranslate\GoogleTranslate;

class DoctorController extends Controller
{
    public function doctorDashboard(Request $request)
    {            $data = Doctor_dashboard::with('patient','patient.currentVisit')->where('doctor_id', Auth::id())
                ->whereDate('created_at',Carbon::today()->toDateString())->get();

            if($data->isEmpty()){
                $request->session()->flash('error1','No Patients Left');
                return view('users.doctors.doctorDashboard');

            }
            else
            {
                foreach ($data as $datum){


                foreach ($datum->patient->currentVisit as $dat){
                  $current_visit=$dat->where('doctor_id',Auth::id())
                      ->where('patient_id',$datum->patient->id)->first();

                }}
//                foreach ($data as $dat){
//
//                $currentVisit = Patient_current_visit_detail::where('doctor_id', Auth::id())
//                    ->where('patient_id', $dat->patient_id)->get();
//                }
                return view('users.doctors.doctorDashboard', ['data' => $data,
                    'current_visit' => $current_visit,
//            'count'=>$visitNo
                ]);


            }




//            $current=Patient_current_visit_detail::where('patient_id',$datum->patient_id)
//                ->where('doctor_id',Auth::id())
//                ->where('current_visit_date',today()->format('y-m-d'))->first();
//            $visitNo=Patient_current_visit_detail::where('patient_id',$datum->patient_id)
//                ->where('doctor_id',Auth::id())->count();





    }


    public function patientRecordForm()
    {
        $doctor=User::where('type','doctor')->get();

        $approach=Approach::all();
        $generalInstruction=GeneralInstructionPanel::all();
        $investigations=Investigation::all();
        $protocol=Protocol::all();
        $drugs=OpdDrug::all();
        return view('users/doctors/patientRecordForm',['doctors'=>$doctor,'approaches'=>$approach,
            'generalInstruction'=>$generalInstruction,'investigations'=>$investigations,'drugs'=>$drugs,'protocols'=>$protocol]);
    }
    public function getInvestigation($id){
        $investigation=Investigation::all();
        return redirect()->back()->with(['invests'=>$investigation]);

    }

    public function nTodayRPT(){
        $data=Patient_record::where('doctor_id',Auth::id())->whereDate('created_at',Carbon::today())->get();
        $totalfee=Patient_record::where('doctor_id',Auth::id())->whereDate('created_at',Carbon::today())
            ->get()->SUM('fee_charged');
        return view('users.doctors.nTodayRPT',['data'=>$data,'fee'=>$totalfee]);

    }
    public function fetch_appointment(){
        $appointment=Appointment::where('doctor_id',Auth::id())
            ->whereDate('created_at',Carbon::today())->get();
        return response()->json(['appointments'=>$appointment]);
    }

   public function viewReport($id){
        $data=Ix_order::with('lap_reports')->find($id);


        return view('users.doctors.viewReport',['data'=>$data]);
   }

    /**
     * @throws \ErrorException
     */
    public function accessPatient($id)
    {
        $data=Patient::find($id);
        $nursing_parameters=Nursing_parameter::where('patient_id',$id)->first();
        $currentVisit=Patient_current_visit_detail::where('patient_id',$id)->where('doctor_id',Auth::id())
            ->where('current_visit_date',today()->format('y-m-d'))->first();
        $allVisit=Patient_current_visit_detail::where('patient_id',$id)->where('doctor_id',Auth::id())->where('current_visit_date','!=',today()->format('y-m-d'))->get();
       $totalVisits=Patient_current_visit_detail::where('patient_id',$id)->where('doctor_id',Auth::id())->count();
       $doctor=User::where('type','doctor')->get();
      $doctor_data=User::where('id',Auth::id())->first();
       $doc_name=GoogleTranslate::trans($doctor_data->first_name,'ur');
       if($doctor_data->medical_degree != null){
           $doc_deg=GoogleTranslate::trans($doctor_data->medical_degree,'ur');
       }
       else{
           $doc_deg=null;
       }
        if($doctor_data->educational_qualification != null){
            $doc_edu=GoogleTranslate::trans($doctor_data->educational_qualification,'ur');
        }
        else{
            $doc_edu=null;
        }
        if($doctor_data->biography != null){
            $doc_bio=GoogleTranslate::trans($doctor_data->biography,'ur');
        }
         else{
        $doc_bio=null;
        }



       $approach=Approach::all();
       $protocols=Protocol::all();
       $generalInstruction=GeneralInstructionPanel::all();
       $investigations=Investigation::all();
       $drugs=OpdDrug::all();
        Doctor_dashboard::where('patient_id',$id)->where('doctor_id',Auth::id())->delete();
        return view('users/doctors/patientRecordForm',['data'=>$data,'currentVisit'=>$currentVisit,'nursing'=>$nursing_parameters,
            'total'=>$totalVisits,'doctors'=>$doctor,'approaches'=>$approach,
            'generalInstruction'=>$generalInstruction,'investigations'=>$investigations,'drugs'=>$drugs,'protocols'=>$protocols,
            'previous_visits'=>$allVisit,'doctor_data'=>$doctor_data,'doc_name'=>$doc_name,'doc_deg'=>$doc_deg
        ,'doc_edu'=>$doc_edu,'doc_bio'=>$doc_bio]);

    }

public function fetch_waiting_patients(){
        $waiting_patients=Appointment::with('patient')
            ->where('doctor_id',Auth::id())
            ->where('date',  date('y-m-d'))
            ->get();

        return response()->json([
            'waiting_patients'=>$waiting_patients
        ]);
}
public function insertLabRecord(Request $request){
        $labsRecord=new Ix_order();
        $id=Patient::where('cr_no',$request->cr_no)->first();
        $labsRecord->doctor_id=Auth::id();
    $labsRecord->patient_id=$id->id;
    $labsRecord->cbc=$request->cbc;
    $labsRecord->hb=$request->hb;
    $labsRecord->esr=$request->esr;
    $labsRecord->ptinr=$request->ptinr;
    $labsRecord->aptt=$request->aptt;
    $labsRecord->btct=$request->btct;
    $labsRecord->blood_grouping=$request->blood_grouping;
    $labsRecord->cross_match=$request->cross_match;
    $labsRecord->bsr=$request->bsr;
    $labsRecord->bsf=$request->bsf;
    $labsRecord->rfts=$request->rfts;
    $labsRecord->urea=$request->urea;
    $labsRecord->creatinine=$request->creatinine;
    $labsRecord->uric_acid=$request->uric_acid;
    $labsRecord->lipid_profile=$request->lipid_profile;
    $labsRecord->lfts=$request->lfts;
    $labsRecord->split_bilirubin=$request->split_bilirubin;
    $labsRecord->alt=$request->alt;
    $labsRecord->alk=$request->alt;
    $labsRecord->albumin=$request->albumin;
    $labsRecord->total_protein=$request->total_protien;
    $labsRecord->electrolytes_nak=$request->electrolytes_nak;
    $labsRecord->na=$request->na;
    $labsRecord->k=$request->k;
    $labsRecord->ca=$request->ca;
    $labsRecord->amylase=$request->amylase;
    $labsRecord->hbsag=$request->hbsag;
    $labsRecord->anti_hcv=$request->anti_hcv;
    $labsRecord->anti_hiv=$request->anti_hcv;
    $labsRecord->mpict=$request->mpict;
    $labsRecord->vdrl=$request->vdrl;
    $labsRecord->donor_screening_ict=$request->donor_screening_ict;
    $labsRecord->ra_factor_ql=$request->ra_factor_ql;
    $labsRecord->aso=$request->aso;
    $labsRecord->crp=$request->crp;
    $labsRecord->typhidot_ict=$request->typhidot_ict;
    $labsRecord->widal=$request->widal;
    $labsRecord->trop_t=$request->trop_t;
    $labsRecord->hba1c=$request->hba1c;
    $labsRecord->urine_ce=$request->urine_ce;
    $labsRecord->upt=$request->upt;
    $labsRecord->semen=$request->semen;
    $labsRecord->save();

    return redirect()->back();

}

public function insertPatientRecord(Request $request){
    $patientRecord=new Patient_record();
    $patientRecord->doctor_id=Auth::id();
    $patientRecord->patient_no=$request->patient_no;
    $patientRecord->MRN=$request->cr_no;
    $patientRecord->visit_no=$request->visit_no;
    $patientRecord->marital_status=$request->martial_status;
    $patientRecord->current_date=Carbon::today();
    $patientRecord->date_of_visit=$request->date_of_visit;
    $patientRecord->fee_charged=$request->fee;
    $patientRecord->patient_name=$request->patient_name;
    $patientRecord->mobile_no=$request->number;
    $patientRecord->profession=$request->profession;
    $patientRecord->age=$request->age;
    $patientRecord->sex=$request->sex;
    $patientRecord->pulse=$request->pulse;
    $patientRecord->SBP=$request->sbp;
    $patientRecord->DBP=$request->dbp;
    $patientRecord->weight=$request->weight;
    $patientRecord->height=$request->height;
    $patientRecord->BMI=$request->bmi;
    $patientRecord->temperature=$request->temperature;
    $patientRecord->referred_by=$request->ref;
    $patientRecord->time_in_consultation=$request->tic;
    $patientRecord->DM=$request->dm;
    $patientRecord->HTN=$request->htn;
    $patientRecord->IHD=$request->ihd;
    $patientRecord->current_smoker=$request->cs;
    $patientRecord->ex_smoker=$request->es;
    $patientRecord->chronic_lung_disease=$request->cld;
    $patientRecord->attendant_notes=$request->notes;
    $patientRecord->PC=$request->pc;
    $patientRecord->risk_factors=$request->risks;
    $patientRecord->hx=$request->hx;
    $patientRecord->exam=$request->exam;
    $patientRecord->ix_done=$request->ix;
    $patientRecord->case_summary=$request->case_summary;
    $patientRecord->RiskFactor=$request->rx;
    $patientRecord->dx=$request->dx;
    $patientRecord->ix_advised=$request->ixd;
    $patientRecord->planning=$request->invest;
    $patientRecord->general_instruction=$request->generalins;
    $patientRecord->gi1=$request->gi1;
    $patientRecord->gi2=$request->gi2;
    $patientRecord->save();

    $id=Patient_record::where('MRN',$request->cr_no)->orderBy('id','desc')->first('id');
    $medicine = new Patient_medicine_record();
    $medicine->patient_record_id=$id->id;
    $medicine->RX1=$request->rx1;
    $medicine->F1=$request->f1;
    $medicine->Inst1=$request->inst1;
    $medicine->D1=$request->d1;
    $medicine->P1=$request->p1;
    $medicine->U1=$request->u1;
    $medicine->RX2=$request->rx2;
    $medicine->F2=$request->f2;
    $medicine->Inst2=$request->inst2;
    $medicine->D2=$request->d2;
    $medicine->P2=$request->p2;
    $medicine->U2=$request->u2;
    $medicine->RX3=$request->rx3;
    $medicine->F3=$request->f3;
    $medicine->Inst3=$request->inst3;
    $medicine->D3=$request->d3;
    $medicine->P3=$request->p3;
    $medicine->U3=$request->u3;
    $medicine->RX4=$request->rx4;
    $medicine->F4=$request->f4;
    $medicine->Inst4=$request->inst4;
    $medicine->D4=$request->d4;
    $medicine->P4=$request->p4;
    $medicine->U4=$request->u4;
    $medicine->RX5=$request->rx5;
    $medicine->F5=$request->f5;
    $medicine->Inst5=$request->inst5;
    $medicine->D5=$request->d5;
    $medicine->P5=$request->p5;
    $medicine->U5=$request->u5;
    $medicine->RX6=$request->rx6;
    $medicine->F6=$request->f6;
    $medicine->Inst6=$request->inst6;
    $medicine->D6=$request->d6;
    $medicine->P6=$request->p6;
    $medicine->U6=$request->u6;
    $medicine->RX7=$request->rx7;
    $medicine->F7=$request->f7;
    $medicine->Inst7=$request->inst7;
    $medicine->D7=$request->d7;
    $medicine->P7=$request->p7;
    $medicine->U7=$request->u7;
    $medicine->RX8=$request->rx8;
    $medicine->F8=$request->f8;
    $medicine->Inst8=$request->inst8;
    $medicine->D8=$request->d8;
    $medicine->P8=$request->p8;
    $medicine->U8=$request->u8;
    $medicine->RX9=$request->rx9;
    $medicine->F9=$request->f9;
    $medicine->Inst9=$request->inst9;
    $medicine->D9=$request->d9;
    $medicine->P9=$request->p9;
    $medicine->U9=$request->u9;
    $medicine->RX10=$request->rx10;
    $medicine->F10=$request->f10;
    $medicine->Inst10=$request->inst10;
    $medicine->D10=$request->d10;
    $medicine->P10=$request->p10;
    $medicine->U10=$request->u10;
    $medicine->RX11=$request->rx11;
    $medicine->F11=$request->f11;
    $medicine->Inst11=$request->inst11;
    $medicine->D11=$request->d11;
    $medicine->P11=$request->p11;
    $medicine->U11=$request->u11;
    $medicine->RX12=$request->rx12;
    $medicine->F12=$request->f12;
    $medicine->Inst12=$request->inst12;
    $medicine->D12=$request->d12;
    $medicine->P12=$request->p12;
    $medicine->U12=$request->u12;
    $medicine->RX12=$request->rx12;
    $medicine->F12=$request->f12;
    $medicine->Inst12=$request->inst12;
    $medicine->D12=$request->d12;
    $medicine->P12=$request->p12;
    $medicine->U12=$request->u12;
    $medicine->RX13=$request->rx13;
    $medicine->F13=$request->f13;
    $medicine->Inst13=$request->inst13;
    $medicine->D13=$request->d13;
    $medicine->P13=$request->p13;
    $medicine->U13=$request->u13;
    $medicine->RX14=$request->rx14;
    $medicine->F14=$request->f14;
    $medicine->Inst14=$request->inst14;
    $medicine->D14=$request->d14;
    $medicine->P14=$request->p14;
    $medicine->U14=$request->u14;
    $medicine->RX15=$request->rx15;
    $medicine->F15=$request->f15;
    $medicine->Inst15=$request->inst15;
    $medicine->D15=$request->d15;
    $medicine->P15=$request->p15;
    $medicine->U15=$request->u15;
    $medicine->save();
session()->flash('success', 'Data Inserted Successfully.');
return redirect(route('doctorDashboard'));
}
    public function getTimeScheduleByDoctor(Request $request){

        if(!$request->id){
            $html = '<li class="tm"  value="">No Time Schedule For This Doctor</li>';
        }else{
            $html = '';
            $doctor = User::find($request->id);
            $timeSchedules = $doctor->timeSchedules;
            foreach ($timeSchedules as $timeSchedule) {
                $html .= '<li class="tm list-group-item" value="'.$timeSchedule->id.'"><span class="icon icon-clock-o icon-lg icon-fw">'.$timeSchedule->week_day.'</li>';
            }
        }
        return response()->json(['html' => $html]);
    }

    public function getDayoffScheduleByDoctor(Request $request){

        if(!$request->id){
            $html = '<li class="tm"  value="">No Day Off Schedule For This Doctor</li>';
        }else{
            $doctor = User::find($request->id);
            $dayoffSchedules = $doctor->dayoffSchedules;
            $TS = collect();
            foreach ($dayoffSchedules as $dayoffSchedule) {
                    $TS->push($dayoffSchedule);
            }
            $json = $TS->toJson();
        }
        return response()->json(['html' => $json]);
    }

    public function treatmentHistory(User $doctor)
    {
        return view('appointments.list')->with('appointments', $doctor->appointments);
    }

    public function index()
    {
        return view('users.doctors.list')->with('doctors', User::doctor()->get())->with('departments',Department::all());
    }


    public function create()
    {
        return view('users.doctors.create')->with('departments',Department::all());
    }

    public function store(CreateDoctorRequest $request)
    {

            $this->validate($request, [
                'password' => 'required',
                'password_confirmation' => 'required_with:password|same:password'
            ]);



            $doctor = User::create([
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
                'medical_degree' => $request->medical_degree,
                'specialist' => $request->specialist,
                'biography' => $request->biography,
                'educational_qualification' => $request->educational_qualification,
                'type' => 'doctor',
            ]);

            if ($request->picture) {
                $pic = $request->picture->store('doctors_pictures');
                $doctor->picture = $pic;
                $doctor->save();
            }

            if ($request->departments) {
                $doctor->departments()->attach($request->departments);
            }
            // flash message
            session()->flash('success', 'New Doctor Added Successfully.');
            // redirect user
            return redirect(route('doctors.index'));
        }



    public function show(User $doctor)
    {
        return view('users.doctors.show')->with('doctor', $doctor)->with('departments',Department::all());
    }

    public function edit(User $doctor)
    {
        return view('users.doctors.create')->with('doctor', $doctor)->with('departments',Department::all());
    }


    public function update(UpdateDoctorRequest $request,User $doctor)
    {
        $data = $request->only('first_name','last_name','national_id', 'email', 'address', 'birth_date', 'gender', 'phone', 'mobile', 'emergency', 'medical_degree', 'specialist', 'biography', 'educational_qualification');
        if ($request->hasFile('picture')) {

            $pic = $request->picture->store('doctors_pictures');

            Storage::delete($doctor->picture);

            $data['picture'] = $pic;
        }

        if ($request->departments) {
            $doctor->departments()->sync($request->departments);
        }

        $doctor->update($data);
        // flash message
        session()->flash('success', 'Doctor Info Updated Successfully.');
        // redirect user
        return redirect(route('doctors.index'));
    }

    public function destroy(User $doctor)
    {
        $doctor->departments()->detach();
        $doctor->timeSchedules()->delete();
        Storage::delete($doctor->picture);
        $doctor->delete();
        // flash message
        session()->flash('success', 'Doctor Deleted Successfully.');
        // redirect user
        return redirect(route('doctors.index'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');

    }
    public function findInvestigation($id){
        $p=Investigation::where('id',$id)->first();

        return response()->json($p);
    }
    public function findDrugs($id){
        $p=OpdDrug::where('prescription_name',$id)->first();

        return response()->json($p);
    }

    public function findGeneralInstruction($id){
        $p=GeneralInstructionPanel::where('disease',$id)->first();

        return response()->json($p);
    }
    public function findProtocols($id){
        $p=Protocol::where('dx_short',$id)->first();

        return response()->json($p);
    }
    public function findDiagnosis($id){
        $p=Diagnosis::where('diagnosis_name',$id)->first();

        return response()->json($p);
    }

    public function treatmentProtocolForm(){
        $drugs=OpdDrug::all();
        $protocols=Protocol::all();
        return view('users/doctors/treatmentProtocolForm',['drugs'=>$drugs,'protocols'=>$protocols]);
    }

    public function insertDiagnosis(Request $request){
          $diagnosis = new Diagnosis();
          $diagnosis->diagnosis_name= $request->diagnosis1;
          $diagnosis->assessment= $request->assessment1;
          $diagnosis->historyexam= $request->historyexam1;
          $diagnosis->examination= $request->examination1;
          $diagnosis->investigations= $request->investigation1;
          $diagnosis->treatment= $request->treatment1;
          $diagnosis->notes= $request->notes1;
          $diagnosis->url1= $request->url_1;
          $diagnosis->url2= $request->url_2;
          $diagnosis->url3= $request->url_3;
          $diagnosis->url4= $request->url_4;
          $diagnosis->url5= $request->url_5;
          $diagnosis->url6= $request->url_6;
          $diagnosis->url7= $request->url_7;
          $diagnosis->url8= $request->url_8;
          $diagnosis->save();

        session()->flash('success', 'Diagnosis Inserted Successfully.');
        // redirect user
        return redirect(route('DiagnosisForm'));

    }

    public function printView($id){
        dd('1234');
        $patient=Patient::where('cr_no',$id)->first();
        $record=Patient_record::with('medicine_record')->where('MRN',$id)
            ->whereDate('created_at',Carbon::today())->first();

        return view('users/doctors/printView',['patients'=>$patient,'records'=>$record]);
    }

    public function insertProtocol(Request $request)
    {
        $request->validate([
            'dx_short' => 'required',
            'diagnosis' => 'required',
        ]);
        $treatment = new Protocol();
        $treatment->dx_short = $request->dx_short2;
        $treatment->diagnosist = $request->diagnosis2;
        $treatment->gi_protocol_1 = $request->gi_protocol_11;
        $treatment->gi_protocol_2 = $request->gi_protocol_21;
        $treatment->ix_protocol = $request->ix_protocol1;
        $treatment->rx1 = $request->rx11;
        $treatment->purpose1 = $request->purpose11;
        $treatment->instructions1 = $request->instructions11;
        $treatment->duration1 = $request->duration11;
        $treatment->frequency1 = $request->frequency11;
        $treatment->unit_price1 = $request->unit_price11;
        $treatment->notes1 = $request->notes11;
        $treatment->rx2 = $request->rx21;
        $treatment->purpose2 = $request->purpose21;
        $treatment->instructions2 = $request->instructions21;
        $treatment->duration2 = $request->duration21;
        $treatment->frequency2 = $request->frequency21;
        $treatment->unit_price2 = $request->unit_price21;
        $treatment->notes2 = $request->notes21;
        $treatment->rx3 = $request->rx31;
        $treatment->purpose3 = $request->purpose31;
        $treatment->instructions3 = $request->instructions31;
        $treatment->duration3 = $request->duration31;
        $treatment->frequency3 = $request->frequency31;
        $treatment->unit_price3 = $request->unit_price31;
        $treatment->notes3 = $request->notes31;
        $treatment->rx4 = $request->rx41;
        $treatment->purpose4 = $request->purpose41;
        $treatment->instructions4 = $request->instructions41;
        $treatment->duration4 = $request->duration41;
        $treatment->frequency4 = $request->frequency41;
        $treatment->unit_price4 = $request->unit_price41;
        $treatment->notes4 = $request->notes41;
        $treatment->rx5 = $request->rx51;
        $treatment->purpose5 = $request->purpose51;
        $treatment->instructions5 = $request->instructions51;
        $treatment->duration5 = $request->duration51;
        $treatment->frequency5 = $request->frequency51;
        $treatment->unit_price5 = $request->unit_price51;
        $treatment->notes5 = $request->notes51;
        $treatment->save();


        session()->flash('success', 'Data Inserted Successfully.');
        return redirect(route('treatmentProtocolForm'));
    }

    public function DiagnosisForm(){
        $diagnosis=Diagnosis::all();
        return view('users/doctors/DiagnosisForm',['diagnosis'=>$diagnosis]);
    }

}

