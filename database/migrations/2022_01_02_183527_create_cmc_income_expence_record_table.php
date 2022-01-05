<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmcIncomeExpenceRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cmcincomes', function (Blueprint $table) {
            $table->id();
            $table->string('dateOfTransaction');
            $table->string('Type');
            $table->string('TypeOPControl');
            $table->string('Details');
            $table->string('Amount');
            $table->string('AmountMethod');
            $table->string('TotalMonth')->nullable();
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
        Schema::dropIfExists('cmc_income_expence_record');
    }
}
