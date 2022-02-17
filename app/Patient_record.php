<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient_record extends Model
{
//    protected $table = 'patient_records';
    public function medicine_record(){
        return $this->hasMany(Patient_medicine_record::class);
    }
    public function doctor(){
        return $this->belongsTo(User::class);
    }
}
