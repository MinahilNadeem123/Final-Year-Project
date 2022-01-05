<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDermaExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('derma_exams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->references('id')->on('users')
                ->constrained();
            $table->string('dermatology_exam_summary');
            $table->string('hypopigmentations');
            $table->string('hypopigmentations_details');
            $table->string('hypopigmentations_details_opc');
            $table->string('hyperpigmentation');
            $table->string('hyperpigmentation_details');
            $table->string('hyperpigmentation_details_opc');
            $table->string('bruises');
            $table->string('bruises_details');
            $table->string('bruises_details_opc');
            $table->string('skin_others');
            $table->string('pyoderma_gangrenosum');
            $table->string('erythema_Nodosum');
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
        Schema::dropIfExists('derma_exams');
    }
}
