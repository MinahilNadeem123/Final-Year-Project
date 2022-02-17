<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhysicalExam extends Model
{
    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
