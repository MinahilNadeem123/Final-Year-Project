<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHigherMentalFunctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('higher_mental_functions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->references('id')->on('patients')
                ->constrained();
            $table->string('consciousness');
            $table->string('gcs');
            $table->string('somi');
            $table->string('neck_rigidity');
            $table->string('kernig_sign');
            $table->string('brudzinki_sign');
            $table->string('speech_assessment');
            $table->string('first_language');
            $table->string('handedness');
            $table->string('literacy_levels');
            $table->string('weakness_of_any_limb_of_body');
            $table->string('vision_intact');
            $table->string('rate_of_speech');
            $table->string('fluency_of_speed');
            $table->string('does_not_make_sense');
            $table->string('comprehension');
            $table->string('yes_no_command_wrong');
            $table->string('simple_command_wrong');
            $table->string('complex_command_wrong');
            $table->string('naming_assessment');
            $table->string('cant_name_familiar_objects');
            $table->string('cant_name_18-22_animals_in_1_min');
            $table->string('cant_name_starting_with_alphabet');
            $table->string('repitition_impaired');
            $table->string('reading_impaired');
            $table->string('writing');
            $table->string('calculation_assessment');
            $table->string('100-7_task');
            $table->string('3+3_task');
            $table->string('complex_calculation');
            $table->string('memory_assessment');
            $table->string('mmse_score');
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
        Schema::dropIfExists('higher_mental_functions');
    }
}
