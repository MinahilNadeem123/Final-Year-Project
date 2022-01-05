<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Special_instruction extends Model
{
//    protected $table = 'special_instructions';
    public function opd(){
        return $this->belongsTo(OpdDrug::class);
    }
}
