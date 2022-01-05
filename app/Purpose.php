<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purpose extends Model
{
//    protected $table = 'purposes';
    public function opd(){
        return $this->belongsTo(OpdDrug::class);
    }
}
