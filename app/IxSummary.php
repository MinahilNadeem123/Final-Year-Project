<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IxSummary extends Model
{
    public function patient(){
        return $this->belongsTo(User::class);
    }
}
