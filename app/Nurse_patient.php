<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nurse_patient extends Model
{
    public function currentVisit(){
        return $this->belongsTo(Patient_current_visit_detail::class);
    }
    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
