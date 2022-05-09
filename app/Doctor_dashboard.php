<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor_dashboard extends Model
{
    public function doctor(){
        return $this->belongsTo(User::class);
    }
    public function patient(){
        return $this->belongsTo(Patient::class);
    }


}
