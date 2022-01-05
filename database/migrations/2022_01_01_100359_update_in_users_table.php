<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('date_of_registration')->after('id')->nullable();
            $table->string('s/o,d/o,w/o')->after('first_name')->nullable();
            $table->string('marital_status')->after('gender')->nullable();
            $table->string('address_country')->after('password')->nullable();
            $table->string('address_province')->after('address_country')->nullable();
            $table->string('address_district')->after('address_province')->nullable();
            $table->string('address_tehsil')->after('address_district')->nullable();
            $table->string('address_details')->after('address_tehsil')->nullable();
            $table->string('whatsapp_number')->after('mobile')->nullable();
            $table->string('patient_no')->after('email')->nullable();
            $table->string('profession')->after('patient_no')->nullable();
            $table->string('professional_designation')->after('profession')->nullable();
            $table->string('professional_address')->after('professional_designation')->nullable();
            $table->string('native_language')->after('professional_address')->nullable();
            $table->string('current_visit')->after('native_language')->nullable();
            $table->string('current_visit_date')->after('current_visit')->nullable();
            $table->string('patient_visit_no')->after('current_visit_date')->nullable();
            $table->string('patient_current_visit_category')->after('patient_visit_no')->nullable();
            $table->string('Patient_current_visit')->after('patient_current_visit_category')->nullable();
            $table->string('current_visit_detail')->after('Patient_current_visit')->nullable();
            $table->string('fee_charged')->after('current_visit_detail')->nullable();
            $table->string('appointment_number')->after('fee_charged')->nullable();
            $table->string('appointment_taken_prior')->after('appointment_number')->nullable();
            $table->string('current_visit_note')->after('appointment_taken_prior')->nullable();
            $table->string('referred')->after('current_visit_note')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
