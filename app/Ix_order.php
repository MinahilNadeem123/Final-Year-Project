<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ix_order extends Model
{
    public function patient(){
        return $this->belongsTo(Patient::class);
    }
    public function doctor(){
        return $this->belongsTo(User::class);
    }
    public function lap_reports(){
        return $this->belongsTo(LapReport::class);
    }
}
