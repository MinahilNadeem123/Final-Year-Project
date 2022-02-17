<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProtocols extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('protocols', function (Blueprint $table) {

            $table->id();
            $table->string('dx_short');
            $table->string('diagnosist');
            $table->string('ix_protocol')->nullable();
            $table->string('gi_protocol_1')->nullable();
            $table->string('gi_protocol_2')->nullable();
            $table->text('rx1')->nullable();
            $table->text('frequency1')->nullable();
            $table->text('purpose1')->nullable();
            $table->text('instructions1')->nullable();
            $table->text('duration1')->nullable();
            $table->text('unit_price1')->nullable();
            $table->text('notes1')->nullable();
            $table->text('rx2')->nullable();
            $table->text('frequency2')->nullable();
            $table->text('purpose2')->nullable();
            $table->text('instructions2')->nullable();
            $table->text('duration2')->nullable();
            $table->text('unit_price2')->nullable();
            $table->text('notes2')->nullable();
            $table->text('rx3')->nullable();
            $table->text('frequency3')->nullable();
            $table->text('purpose3')->nullable();
            $table->text('instructions3')->nullable();
            $table->text('duration3')->nullable();
            $table->text('unit_price3')->nullable();
            $table->text('notes3')->nullable();
            $table->text('rx4')->nullable();
            $table->text('frequency4')->nullable();
            $table->text('purpose4')->nullable();
            $table->text('instructions4')->nullable();
            $table->text('duration4')->nullable();
            $table->text('unit_price4')->nullable();
            $table->text('notes4')->nullable();
            $table->text('rx5')->nullable();
            $table->text('frequency5')->nullable();
            $table->text('purpose5')->nullable();
            $table->text('instructions5')->nullable();
            $table->text('duration5')->nullable();
            $table->text('unit_price5')->nullable();
            $table->text('notes5')->nullable();
            $table->text('rx6')->nullable();
            $table->text('frequency6')->nullable();
            $table->text('purpose6')->nullable();
            $table->text('instructions6')->nullable();
            $table->text('duration6')->nullable();
            $table->text('unit_price6')->nullable();
            $table->text('notes6')->nullable();
            $table->text('rx7')->nullable();
            $table->text('frequency7')->nullable();
            $table->text('purpose7')->nullable();
            $table->text('instructions7')->nullable();
            $table->text('duration7')->nullable();
            $table->text('unit_price7')->nullable();
            $table->text('notes7')->nullable();
            $table->text('rx8')->nullable();
            $table->text('frequency8')->nullable();
            $table->text('purpose8')->nullable();
            $table->text('instructions8')->nullable();
            $table->text('duration8')->nullable();
            $table->text('unit_price8')->nullable();
            $table->text('notes8')->nullable();
            $table->text('rx9')->nullable();
            $table->text('frequency9')->nullable();
            $table->text('purpose9')->nullable();
            $table->text('instructions9')->nullable();
            $table->text('duration9')->nullable();
            $table->text('unit_price9')->nullable();
            $table->text('notes9')->nullable();
            $table->text('rx10')->nullable();
            $table->text('frequency10')->nullable();
            $table->text('purpose10')->nullable();
            $table->text('instructions10')->nullable();
            $table->text('duration10')->nullable();
            $table->text('unit_price10')->nullable();
            $table->text('notes10')->nullable();
            $table->string('rx11')->nullable();
            $table->string('frequency11')->nullable();
            $table->string('purpose11')->nullable();
            $table->string('instructions11')->nullable();
            $table->string('duration11')->nullable();
            $table->string('unit_price11')->nullable();
            $table->string('notes11')->nullable();
            $table->string('rx12')->nullable();
            $table->string('frequency12')->nullable();
            $table->string('purpose12')->nullable();
            $table->string('instructions12')->nullable();
            $table->string('duration12')->nullable();
            $table->string('unit_price12')->nullable();
            $table->string('notes12')->nullable();
            $table->string('rx13')->nullable();
            $table->string('frequency13')->nullable();
            $table->string('purpose13')->nullable();
            $table->string('instructions13')->nullable();
            $table->string('duration13')->nullable();
            $table->string('unit_price13')->nullable();
            $table->string('notes13')->nullable();
            $table->string('rx14')->nullable();
            $table->string('frequency14')->nullable();
            $table->string('purpose14')->nullable();
            $table->string('instructions14')->nullable();
            $table->string('duration14')->nullable();
            $table->string('unit_price14')->nullable();
            $table->string('notes14')->nullable();
            $table->string('rx15')->nullable();
            $table->string('frequency15')->nullable();
            $table->string('purpose15')->nullable();
            $table->string('instructions15')->nullable();
            $table->string('duration15')->nullable();
            $table->string('unit_price15')->nullable();
            $table->string('notes15')->nullable();
            $table->string('prognosis')->nullable();
            $table->string('dx_notes')->nullable();
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
        Schema::dropIfExists('table_protocols');
    }
}
