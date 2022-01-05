<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DmHistory extends Model
{
    public function patient(){
        return $this->belongsTo(User::class);
    }
}
