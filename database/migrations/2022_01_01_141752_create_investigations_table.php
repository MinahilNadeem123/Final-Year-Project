<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestigationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investigations', function (Blueprint $table) {
            $table->id();
            $table->string('disease');
            $table->longText('i1')->nullable();
            $table->longText('i2')->nullable();
            $table->longText('i3')->nullable();
            $table->longText('i4')->nullable();
            $table->longText('i5')->nullable();
            $table->longText('i6')->nullable();
            $table->longText('i7')->nullable();
            $table->longText('i8')->nullable();
            $table->longText('i9')->nullable();
            $table->longText('i10')->nullable();
            $table->longText('i11')->nullable();
            $table->longText('i12')->nullable();
            $table->longText('i13')->nullable();
            $table->longText('i14')->nullable();
            $table->longText('i15')->nullable();
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
        Schema::dropIfExists('investigations');
    }
}
