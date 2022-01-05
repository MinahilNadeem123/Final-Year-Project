<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient_medicine_record extends Model
{
//    protected $table = 'patient_medicine_records';

    public function medicine(){
        return $this->belongsTo(Patient_record::class);
    }
}
