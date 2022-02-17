<?php

namespace App\Http\Controllers;

use App\Approach;
use Illuminate\Http\Request;

class ApproachesController extends Controller
{
    function addApproach(Request $req ){
        $validatedData =  $req->validate([
            'Complaints_issues' => 'required',
        ]);

        $approach = new Approach();
        $approach->Complaints_issues=$req->Complaints_issues;
        $approach->Approach=$req->Approach;
        $approach->Link1=$req->Link1;
        $approach->Link2=$req->Link2;
        $approach->Link3=$req->Link3;
        $approach->Link4=$req->Link4;
        if($req->attachment1){
            $pic = $req->attachment1->store('attachment1');
            $approach->attachment1 = $pic;
        }
        if($req->attachment2){
            $pic = $req->attachment2->store('attachment1');
            $approach->attachment2 = $pic;
        }
        if($req->attachment3){
            $pic = $req->attachment3->store('attachment1');
            $approach->attachment3 = $pic;
        }
        if($req->attachment4){
            $pic = $req->attachment4->store('attachment1');
            $approach->attachment4 = $pic;
        }

        $approach->save();
        session()->flash('success', 'Data Inserted Successfully.');
        return redirect(route('approachForm'));
    }
}
