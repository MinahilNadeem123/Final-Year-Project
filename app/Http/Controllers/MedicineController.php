<?php

namespace App\Http\Controllers;

use App\Duration;
use App\Frequency;
use App\IndoorDrug;
use App\Medicine;
use App\MedicineCategory;
use App\OpdDrug;
use App\Purpose;
use App\Special_instruction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class MedicineController extends Controller
{
    public function index()
    {
        return view('medicines.list')->with('medicines', Medicine::all());
    }

    public function create()
    {
        return view('medicines.create')->with('categories', MedicineCategory::all());
    }
    public function OPDDrugsForm(){
        $frequency = Frequency::all();
        $instructions = Special_instruction::all();
        $purpose=Purpose::all();
        $duration=Duration::all();
        $name=OpdDrug::all('prescription_name');
        return view('users/pharmacists/OPDDrugsForm', ['frequencies' => $frequency,
            'instructions' => $instructions, 'purposes' => $purpose ,'durations'=>$duration,'names'=>$name]);
    }
    public function IndoorDrugsForm(){
        $drugs=IndoorDrug::all();
        return view('users/pharmacists/IndoorDrugsForm',['drugs'=>$drugs]);
    }
    public function addIndoorDrugs(Request $request){
$indoor=new IndoorDrug();
$indoor->short_name=$request->short_name;
$indoor->prescription=$request->prescription;
$indoor->company=$request->company;
$indoor->generic=$request->generic;
$indoor->notes=$request->notes;
$indoor->unit_price=$request->unit_price;
$indoor->retail_price=$request->retail_price;
$indoor->details=$request->details;
$indoor->save();
        session()->flash('success', 'Data Inserted Successfully.');
        return redirect(route('IndoorDrugsForm'));

    }

    function addDrugs(Request $request ){
        $request->validate([
        'class' => 'required',
        'short_name' => 'required',
        'generic' => 'required',
        'company' => 'required',
        'retail_price' => 'required'
    ]);

        $drugs=new OpdDrug();
        $drugs->prescription_name = $request->class;
        $drugs->short_name = $request->short_name;
        $drugs->generic = $request->generic;
        $drugs->frequency_id = $request->frequency_id;
        $drugs->special_instruction_id = $request->special_instruction_id;
        $drugs->duration_id = $request->duration_id;
        $drugs->purpose_id = $request->purpose_id;
        $drugs->notes = $request->notes;
        $drugs->details = $request->details;
        $drugs->company = $request->company;
        $drugs->retail_price = $request->retail_price;
        $drugs->packing = $request->packing;
        $drugs->unit_price = $request->unit_price;
        $drugs->unit_items_per_day = $request->unit_items_per_day;
        $drugs->duration_in_days = $request->duration_in_days;
//        $drugs->suggested_duration = $request->suggested_duration;
        $drugs->daily_cost = $request->daily_cost;
        $drugs->weekly_cost = $request->weekly_cost;
        $drugs->monthly_cost = $request->monthly_cost;
        $drugs->instruction1 = $request->instruction1;
        $drugs->instruction2 = $request->instruction2;
        $drugs->instruction3 = $request->instruction3;
        $drugs->instruction4 = $request->instruction4;
        $drugs->instruction5 = $request->instruction5;
        $drugs->save();

        session()->flash('success', 'Data Inserted Successfully.');
    return redirect(route('OPDDrugsForm'));

    }

    public function store(Request $request)
    {

        Medicine::create([
            'name' => $request->name,
            'instruction' => $request->instruction,
            'category_id' => $request->category,
            'purchase_price' => $request->purchase_price,
            'sale_price' => $request->sale_price,
            'quantity' => $request->quantity,
            'company' => $request->company,
            'expire_date' => $request->expire_date,
        ]);

        // flash message
        session()->flash('success', 'New Medicine Added Successfully.');
        // redirect user
        return redirect(route('medicines.index'));
    }

    public function show(Medicine $medicine)
    {
        return view('medicines.show')->with('medicine', $medicine);
    }

    public function edit(Medicine $medicine)
    {
        return view('medicines.create')
            ->with('medicine', $medicine)
            ->with('categories', MedicineCategory::all());
    }

    public function update(Request $request, Medicine $medicine)
    {
        $medicine->update([
            'name' => $request->name,
            'instruction' => $request->instruction,
            'category_id' => $request->category,
            'purchase_price' => $request->purchase_price,
            'sale_price' => $request->sale_price,
            'quantity' => $request->quantity,
            'company' => $request->company,
            'expire_date' => $request->expire_date,
        ]);

        // flash message
        session()->flash('success', 'Medicine Updated Successfully.');
        // redirect user
        return redirect(route('medicines.index'));
    }

    public function destroy(Medicine $medicine)
    {
        $medicine->prescriptions()->detach();
        $medicine->delete();
        // flash message
        session()->flash('success', ' Medicine Deleted Successfully.');
        // redirect user
        return redirect(route('medicines.index'));
    }
}
