<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable=['first_name'];
    protected $guarded = ['id'];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function getAuthPassword()
    {
        return $this->password;
    }
    public function currentVisit(){
        return $this->hasMany(Patient_current_visit_detail::class);
    }
    public function nursingParameter(){
        return $this->hasMany(Nursing_parameter::class);
    }
    public function CarnialPeripheralNervesExam(){
        return $this->hasMany(CarnialPeripheralNervesExam::class);
    }
    public function cvsExam(){
        return $this->hasMany(CvsExam::class);
    }
    public function dermaExam(){
        return $this->hasMany(DermaExam::class);
    }
    public function dmHistory(){
        return $this->hasMany(DmHistory::class);
    }
    public function examination(){
        return $this->hasMany(Examination::class);
    }
    public function feverHistory(){
        return $this->hasMany(FeverHistory::class);
    }
    public function gitExam(){
        return $this->hasMany(GitExam::class);
    }
    public function higherMentalFunctions(){
        return $this->hasMany(HigherMentalFunction::class);
    }
    public function history(){
        return $this->hasMany(History::class);
    }
    public function ixSummary(){
        return $this->hasMany(IxSummary::class);
    }
    public function motorSensoryCerebellum(){
        return $this->hasMany(MotorSensoryCerebellum::class);
    }
    public function physicalExam(){
        return $this->hasMany(PhysicalExam::class);
    }
    public function patientRecord(){
        return $this->hasMany(Patient_record::class);
    }
    public function doctor(){
        return $this->belongsToMany(User::class);

    }
    public function appointments(){
        return $this->hasMany(Appointment::class);
    }
    public function ix_orders(){
        return $this->hasMany(Ix_order::class);
    }

}
