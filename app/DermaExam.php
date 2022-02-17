<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DermaExam extends Model
{
//    protected $table = 'derma_exams';
    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
