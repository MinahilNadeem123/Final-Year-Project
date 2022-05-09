<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientCurrentVisitDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_current_visit_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->references('id')->on('patients')
                ->constrained();
            $table->string('current_visit');
            $table->string('current_visit_date');
            $table->string('patient_visit_no');
            $table->string('patient_visit_no_with_this_consultant');
            $table->string('patient_current_visit_category');
            $table->string('Patient_current_visit');
            $table->string('current_visit_detail');
            $table->string('fee_charged');
            $table->string('appointment_number');
            $table->string('appointment_taken_prior');
            $table->string('current_visit_note');
            $table->string('referred')->nullable();
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
        Schema::dropIfExists('patient_current_visit_details');
    }
}
