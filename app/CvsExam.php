<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CvsExam extends Model
{
//    protected $table = 'cvs_exams';
    public function patient(){
        return $this->belongsTo(User::class);
    }
}
