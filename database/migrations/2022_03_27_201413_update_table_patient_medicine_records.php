<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTablePatientMedicineRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patient_medicine_records', function (Blueprint $table) {
            $table->text('11')->before('created_at')->nullable();
            $table->text('RX11')->before('created_at')->nullable();
            $table->text('F11')->before('created_at')->nullable();
            $table->text('Inst11')->before('created_at')->nullable();
            $table->text('D11')->before('created_at')->nullable();
            $table->text('P11')->before('created_at')->nullable();
            $table->text('U11')->before('created_at')->nullable();
            $table->text('12')->before('created_at')->nullable();
            $table->text('RX12')->before('created_at')->nullable();
            $table->text('F12')->before('created_at')->nullable();
            $table->text('Inst12')->before('created_at')->nullable();
            $table->text('D12')->before('created_at')->nullable();
            $table->text('P12')->before('created_at')->nullable();
            $table->text('U12')->before('created_at')->nullable();
            $table->text('13')->before('created_at')->nullable();
            $table->text('RX13')->before('created_at')->nullable();
            $table->text('F13')->before('created_at')->nullable();
            $table->text('Inst13')->before('created_at')->nullable();
            $table->text('D13')->before('created_at')->nullable();
            $table->text('P13')->before('created_at')->nullable();
            $table->text('U13')->before('created_at')->nullable();
            $table->text('14')->before('created_at')->nullable();
            $table->text('RX14')->before('created_at')->nullable();
            $table->text('F14')->before('created_at')->nullable();
            $table->text('Inst14')->before('created_at')->nullable();
            $table->text('D14')->before('created_at')->nullable();
            $table->text('P14')->before('created_at')->nullable();
            $table->text('U14')->before('created_at')->nullable();
            $table->text('15')->before('created_at')->nullable();
            $table->text('RX15')->before('created_at')->nullable();
            $table->text('F15')->before('created_at')->nullable();
            $table->text('Inst15')->before('created_at')->nullable();
            $table->text('D15')->before('created_at')->nullable();
            $table->text('P15')->before('created_at')->nullable();
            $table->text('U15')->before('created_at')->nullable();

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
