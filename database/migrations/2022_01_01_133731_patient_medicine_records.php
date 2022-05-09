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
            $table->text('1')->nullable();
            $table->text('RX1')->nullable();
            $table->text('F1')->nullable();
            $table->text('Inst1')->nullable();
            $table->text('D1')->nullable();
            $table->text('P1')->nullable();
            $table->text('U1')->nullable();
            $table->text('2')->nullable();
            $table->text('RX2')->nullable();
            $table->text('F2')->nullable();
            $table->text('Inst2')->nullable();
            $table->text('D2')->nullable();
            $table->text('P2')->nullable();
            $table->text('U2')->nullable();
            $table->text('3')->nullable();
            $table->text('RX3')->nullable();
            $table->text('F3')->nullable();
            $table->text('Inst3')->nullable();
            $table->text('D3')->nullable();
            $table->text('P3')->nullable();
            $table->text('U3')->nullable();
            $table->text('4')->nullable();
            $table->text('RX4')->nullable();
            $table->text('F4')->nullable();
            $table->text('Inst4')->nullable();
            $table->text('D4')->nullable();
            $table->text('P4')->nullable();
            $table->text('U4')->nullable();
            $table->text('5')->nullable();
            $table->text('RX5')->nullable();
            $table->text('F5')->nullable();
            $table->text('Inst5')->nullable();
            $table->text('D5')->nullable();
            $table->text('P5')->nullable();
            $table->text('U5')->nullable();
            $table->text('6')->nullable();
            $table->text('RX6')->nullable();
            $table->text('F6')->nullable();
            $table->text('Inst6')->nullable();
            $table->text('D6')->nullable();
            $table->text('P6')->nullable();
            $table->text('U6')->nullable();
            $table->text('7')->nullable();
            $table->text('RX7')->nullable();
            $table->text('F7')->nullable();
            $table->text('Inst7')->nullable();
            $table->text('D7')->nullable();
            $table->text('P7')->nullable();
            $table->text('U7')->nullable();
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
