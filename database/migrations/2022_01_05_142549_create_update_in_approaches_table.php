<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpdateInApproachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('approaches', function (Blueprint $table) {
            $table->string('attachment1')->nullable();
            $table->string('attachment2')->nullable();
            $table->string('attachment3')->nullable();
            $table->string('attachment4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('update_in_approaches');
    }
}
