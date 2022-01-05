<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PatientMedicineRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_medicine_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_record_id')->constrained();
            $table->string('1')->nullable();
            $table->string('RX1')->nullable();
            $table->string('F1')->nullable();
            $table->string('Inst1')->nullable();
            $table->string('D1')->nullable();
            $table->string('P1')->nullable();
            $table->string('U1')->nullable();
            $table->string('2')->nullable();
            $table->string('RX2')->nullable();
            $table->string('F2')->nullable();
            $table->string('Inst2')->nullable();
            $table->string('D2')->nullable();
            $table->string('P2')->nullable();
            $table->string('U2')->nullable();
            $table->string('3')->nullable();
            $table->string('RX3')->nullable();
            $table->string('F3')->nullable();
            $table->string('Inst3')->nullable();
            $table->string('D3')->nullable();
            $table->string('P3')->nullable();
            $table->string('U3')->nullable();
            $table->string('4')->nullable();
            $table->string('RX4')->nullable();
            $table->string('F4')->nullable();
            $table->string('Inst4')->nullable();
            $table->string('D4')->nullable();
            $table->string('P4')->nullable();
            $table->string('U4')->nullable();
            $table->string('5')->nullable();
            $table->string('RX5')->nullable();
            $table->string('F5')->nullable();
            $table->string('Inst5')->nullable();
            $table->string('D5')->nullable();
            $table->string('P5')->nullable();
            $table->string('U5')->nullable();
            $table->string('6')->nullable();
            $table->string('RX6')->nullable();
            $table->string('F6')->nullable();
            $table->string('Inst6')->nullable();
            $table->string('D6')->nullable();
            $table->string('P6')->nullable();
            $table->string('U6')->nullable();
            $table->string('7')->nullable();
            $table->string('RX7')->nullable();
            $table->string('F7')->nullable();
            $table->string('Inst7')->nullable();
            $table->string('D7')->nullable();
            $table->string('P7')->nullable();
            $table->string('U7')->nullable();
            $table->string('8')->nullable();
            $table->string('RX8')->nullable();
            $table->string('F8')->nullable();
            $table->string('Inst8')->nullable();
            $table->string('D8')->nullable();
            $table->string('P8')->nullable();
            $table->string('U8')->nullable();
            $table->string('9')->nullable();
            $table->string('RX9')->nullable();
            $table->string('F9')->nullable();
            $table->string('Inst9')->nullable();
            $table->string('D9')->nullable();
            $table->string('P9')->nullable();
            $table->string('U9')->nullable();
            $table->string('10')->nullable();
            $table->string('RX10')->nullable();
            $table->string('F10')->nullable();
            $table->string('Inst10')->nullable();
            $table->string('D10')->nullable();
            $table->string('P10')->nullable();
            $table->string('U10')->nullable();

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
        //
    }
}
