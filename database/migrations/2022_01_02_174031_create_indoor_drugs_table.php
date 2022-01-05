<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndoorDrugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indoor_drugs', function (Blueprint $table) {
            $table->id();
                $table->string('short_name');
                $table->string('prescription');
                $table->string('generic');
                $table->string('unit_price')->nullable();
                $table->string('notes')->nullable();
                $table->string('details')->nullable();
                $table->string('company');
                $table->string('retail_price')->nullable();
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
        Schema::dropIfExists('indoor_drugs');
    }
}
