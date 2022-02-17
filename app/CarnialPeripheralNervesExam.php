<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarnialPeripheralNervesExam extends Model
{
//    protected $table = 'cranial_peripheral_nerves_exams';
    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
