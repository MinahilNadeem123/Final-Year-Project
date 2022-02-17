<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnoses', function (Blueprint $table) {
            $table->id();
            $table->string('diagnosis_name');
            $table->longText('assessment')->nullable();
            $table->longText('historyexam')->nullable();
            $table->longText('examination')->nullable();
            $table->longText('investigations')->nullable();
            $table->longText('treatment')->nullable();
            $table->longText('notes')->nullable();
            $table->string('url1')->nullable();
            $table->string('url2')->nullable();
            $table->string('url3')->nullable();
            $table->string('url4')->nullable();
            $table->string('url5')->nullable();
            $table->string('url6')->nullable();
            $table->string('url7')->nullable();
            $table->string('url8')->nullable();
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
        Schema::dropIfExists('diagnosis');
    }
}
