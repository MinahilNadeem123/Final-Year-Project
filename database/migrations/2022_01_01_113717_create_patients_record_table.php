<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_records', function (Blueprint $table) {
            $table->id();
            $table->string('visit_no');
            $table->string('fee_charged');
            $table->string('MRN');
            $table->string('current_date');
            $table->string('date_of_visit');
            $table->string('patient_name');
            $table->string('time_arrived')->nullable();
            $table->string('time_in_consultation');
            $table->string('appointment_time')->nullable();
            $table->string('time_waited_in_clinic')->nullable();
            $table->string('appointment')->nullable();
            $table->string('appointment_no')->nullable();
            $table->string('age');
            $table->string('sex');
            $table->string('marital_status');
            $table->string('education')->nullable();
            $table->string('profession');
            $table->string('mobile_no');
            $table->string('native_language')->nullable();
            $table->string('attendant_notes');
            $table->string('address');
            $table->string('referred_by')->nullable();
            $table->string('pulse');
            $table->string('SBP');
            $table->string('DBP');
            $table->string('temperature');
            $table->string('weight');
            $table->string('height');
            $table->string('BMI');
            $table->string('RiskFactor');
            $table->string('DM');
            $table->string('HTN');
            $table->string('IHD');
            $table->string('past_hx_of_tb');
            $table->string('asthma');
            $table->string('hepatitis');
            $table->string('current_smoker');
            $table->string('ex_smoker');
            $table->string('passive_smoker');
            $table->string('chronic_lung_disease');
            $table->string('PC');
            $table->string('hx_summary_form');
            $table->string('risk_factors');
            $table->string('exam');
            $table->string('hx');
            $table->string('case_summary')->nullable();
            $table->string('ix_done');
            $table->string('dx');
            $table->longText('ix_advised');
            $table->string('general_instruction');
            $table->string('gi1')->nullable();
            $table->string('gi2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients_record');
    }
}
