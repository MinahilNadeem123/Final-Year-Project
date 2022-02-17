<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->references('id')->on('patients')
                ->constrained();
            $table->string('full_history');
            $table->string('pc');
            $table->string('dm');
            $table->string('htn');
            $table->string('ihd');
            $table->string('current_smoker');
            $table->string('ex_smoker');
            $table->string('passive_smoker');
            $table->string('risk_factors');
            $table->string('dm_history');
            $table->string('htn_history');
            $table->string('fever_history');
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
        Schema::dropIfExists('histories');
    }
}
