<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GitExam extends Model
{
    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
