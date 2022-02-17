<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExaminationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examinations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->references('id')->on('patients')
                ->constrained();
            $table->string('general_look');
            $table->string('vitals_details');
            $table->string('hands_fingers_exam');
            $table->string('checks_feet_daily');
            $table->string('nails_exam_summary');
            $table->string('dermatology_exam_summary');
            $table->string('head_face_summary');
            $table->string('eyes_summary');
            $table->string('oral_cavity_summary');
            $table->string('thyroid_summary');
            $table->string('neck_chest_abdo_summary');
            $table->string('legs_feet_summary');
            $table->string('lymph_nodes_summary');
            $table->string('cvs_exam_summary');
            $table->string('resp_exam_summary');
            $table->string('git_exam_form');
            $table->string('cncgcssomi_higher_functions');
            $table->string('cns_cranial_nerves_exam');
            $table->string('cns_motor_and_sensory_cerebelum_exam');
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
        Schema::dropIfExists('examinations');
    }
}
