<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IxOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ix_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained();
            $table->foreignId('doctor_id')->constrained();
            $table->string('cbc')->nullable();
            $table->string('hb')->nullable();
            $table->string('esr')->nullable();
            $table->string('ptinr')->nullable();
            $table->string('aptt')->nullable();
            $table->string('btct')->nullable();
            $table->string('blood_grouping')->nullable();
            $table->string('cross_match')->nullable();
            $table->string('bsr')->nullable();
            $table->string('bsf')->nullable();
            $table->string('rfts')->nullable();
            $table->string('urea')->nullable();
            $table->string('creatinine')->nullable();
            $table->string('uric_acid')->nullable();
            $table->string('lipid_profile')->nullable();
            $table->string('lfts')->nullable();
            $table->string('split_bilirubin')->nullable();
            $table->string('alt')->nullable();
            $table->string('alk')->nullable();
            $table->string('albumin')->nullable();
            $table->string('total_protein')->nullable();
            $table->string('electrolytes_nak')->nullable();
            $table->string('na')->nullable();
            $table->string('k')->nullable();
            $table->string('ca')->nullable();
            $table->string('amylase')->nullable();
            $table->string('hbsag')->nullable();
            $table->string('anti_hcv')->nullable();
            $table->string('anti_hiv')->nullable();
            $table->string('mpict')->nullable();
            $table->string('vdrl')->nullable();
            $table->string('donor_screening_ict')->nullable();
            $table->string('ra_factor_ql')->nullable();
            $table->string('aso')->nullable();
            $table->string('crp')->nullable();
            $table->string('typhidot_ict')->nullable();
            $table->string('widal')->nullable();
            $table->string('trop_t')->nullable();
            $table->string('hba1c')->nullable();
            $table->string('urine_ce')->nullable();
            $table->string('upt')->nullable();
            $table->string('semen')->nullable();
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
