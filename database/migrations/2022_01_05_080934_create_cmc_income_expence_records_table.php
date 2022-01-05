<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmcIncomeExpenceRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cmc_income_expence_records', function (Blueprint $table) {
            $table->id();
            $table->string('date_of_transaction');
            $table->string('type');
            $table->string('type_opc_control');
            $table->string('details');
            $table->string('amount');
            $table->string('amount_method');
            $table->string('total_month')->nullable();
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
        Schema::dropIfExists('cmc_income_expence_records');
    }
}
