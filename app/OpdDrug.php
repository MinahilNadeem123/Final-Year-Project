<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpdDrug extends Model
{
 protected $table = 'opd_drugs';
 protected $fillable=['prescription_name','short_name','retail_price','generic','company'];
    public function frequency(){
        return $this->hasMany(Frequency::class);
    }
    public function specialInstruction(){
        return $this->hasMany(Special_instruction::class);
    }
    public function purpose(){
        return $this->hasMany(purpose::class);
    }
}
