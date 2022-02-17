<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpdDrugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opd_drugs', function (Blueprint $table) {
            $table->id();
            $table->string('short_name');
            $table->string('prescription_name');
            $table->string('generic');
            $table->string('frequency_id')->nullable();
            $table->string('special_instruction_id')->nullable();
            $table->string('duration_id')->nullable();
            $table->string('purpose_id')->nullable();
            $table->string('notes')->nullable();
            $table->string('details')->nullable();
            $table->string('company');
            $table->string('retail_price');
            $table->string('packing')->nullable();
            $table->string('unit_price')->nullable();
            $table->string('unit_price_calculate')->nullable();
            $table->string('unit_items_per_day')->nullable();
            $table->string('duration_in_days')->nullable();
            $table->string('suggested_duration')->nullable();
            $table->string('daily_cost')->nullable();
            $table->string('weekly_cost')->nullable();
            $table->string('monthly_cost')->nullable();
            $table->string('instruction1')->nullable();
            $table->string('instruction2')->nullable();
            $table->string('instruction3')->nullable();
            $table->string('instruction4')->nullable();
            $table->string('instruction5')->nullable();
            $table->string('instruction6')->nullable();
            $table->string('class')->nullable();
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
        Schema::dropIfExists('opd_drugs');
    }
}
