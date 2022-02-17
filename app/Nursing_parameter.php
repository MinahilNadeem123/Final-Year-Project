<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nursing_parameter extends Model
{
    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
