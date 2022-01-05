<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIxOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ix_order', function (Blueprint $table) {
            $table->id();
            $table->string('cbc');
            $table->string('hb');
            $table->string('esr');
            $table->string('ptinr');
            $table->string('aptt');
            $table->string('btct');
            $table->string('blood_grouping');
            $table->string('cross_match');
            $table->string('bsr');
            $table->string('bsf');
            $table->string('rfts');
            $table->string('urea');
            $table->string('creatinine');
            $table->string('uric_acid');
            $table->string('lipid_profile');
            $table->string('lfts');
            $table->string('split_bilirubin');
            $table->string('alt');
            $table->string('alk');
            $table->string('albumin');
            $table->string('total_protein');
            $table->string('electrolytes_nak');
            $table->string('na');
            $table->string('k');
            $table->string('ca');
            $table->string('amylase');
            $table->string('hbsag');
            $table->string('anti_hcv');
            $table->string('anti_hiv');
            $table->string('mpict');
            $table->string('vdrl');
            $table->string('donor_screening_ict');
            $table->string('ra_factor_ql');
            $table->string('aso');
            $table->string('crp');
            $table->string('typhidot_ict');
            $table->string('widal');
            $table->string('trop_t');
            $table->string('hba1c');
            $table->string('urine_ce');
            $table->string('upt');
            $table->string('semen');
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
        Schema::dropIfExists('ix_order');
    }
}
