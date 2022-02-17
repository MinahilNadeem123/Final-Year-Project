<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HigherMentalFunction extends Model
{
    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
