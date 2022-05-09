<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('cr_no')->unique();
            $table->string('date_of_registration');
            $table->string('time_of_registration');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('national_id');
            $table->string('birth_date');
            $table->string('age');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('address_detail');
            $table->string('mobile_no_1');
            $table->string('mobile_no_2')->nullable();
            $table->string('mobile_no_3')->nullable();
            $table->string('whatsapp_number');
            $table->string('email')->nullable();
            $table->string('profession');
            $table->string('professional_designation');
            $table->string('professional_address');
            $table->string('native_language');

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
        Schema::dropIfExists('patients');
    }
}
