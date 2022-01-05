<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frequency extends Model
{
//    protected $table = 'frequencies';
    public function opd(){
    return $this->belongsTo(OpdDrug::class);
}
}
