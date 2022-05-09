<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorDashboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_dashboards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->references('id')->on('users')
                ->constrained();
            $table->foreignId('patient_id')->references('id')->on('patients')
                ->constrained();
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
        Schema::dropIfExists('doctor_dashboards');
    }
}
