<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNursingParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nursing_parameters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->references('id')->on('patients')
                ->constrained();
            $table->string('arrival_date_at_nursing_station');
            $table->string('pulse_rate');
            $table->string('systolic_bp_right_arm');
            $table->string('diastolic_bp_right_arm');
            $table->string('respiratory_rate');
            $table->string('temperature');
            $table->string('temp_area');
            $table->string('oxygen_saturation');
            $table->string('gcs');
            $table->string('diagnosed_case_of');
            $table->string('weight');
            $table->string('height');
            $table->string('bmi');
            $table->string('length')->nullable();
            $table->string('z_score_weight_for_length')->nullable();
            $table->string('who_infant_weight_for_length_percentiles')->nullable();
            $table->string('head_circumference')->nullable();
            $table->string('z_score_infant_head_circumference_for_age')->nullable();
            $table->string('who_infant_head_circumference_for_age_percentiles')->nullable();
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
        Schema::dropIfExists('nursing_parameters');
    }
}
