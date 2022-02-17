<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient_current_visit_detail extends Model
{
    public function patient(){
        return $this->belongsTo(Patient::class);
    }
    public function doctor(){
        return $this->belongsTo(User::class);
    }
}
