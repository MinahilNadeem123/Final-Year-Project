<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDmHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dm_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->references('id')->on('users')
                ->constrained();
            $table->text('risk_factors');
            $table->text('newly_diagnosed');
            $table->text('diagnosed_incidently_or_bsl_checkup');
            $table->text('diagnosed_due_to_symptoms_of_hyperglycemia');
            $table->text('diagnosed_as_developed_diabetic_complication');
            $table->text('diagnosed_due_to_hyperglycemia_crisis');
            $table->text('past_hx_of_gdm');
            $table->text('compliance');
            $table->text('glucometer_model');
            $table->text('monitoring');
            $table->text('initial_control');
            $table->text('current_control');
            $table->text('has_glucometer_at_home');
            $table->text('current_drugs');
            $table->text('genralised_weakness');
            $table->text('increased_thirst');
            $table->text('increased_urination');
            $table->text('weight_loss');
            $table->text('blurring_of_vision');
            $table->text('hypoglycemia_level1');
            $table->text('hypoglycemia_level2');
            $table->text('hypoglycemia_level3');
            $table->text('hypo_unawareness');
            $table->text('hypoglycemia_others')->nullable();
            $table->text('decreased_vision');
            $table->text('spotters');
            $table->text('blurred_vision');
            $table->text('amaurosis');
            $table->text('gets_annual_eye_exam');
            $table->text('h/o_laser_therapy');
            $table->text('h/o_vagf_therapy');
            $table->text('h/o_cataract');
            $table->text('cataract_details')->nullable();
            $table->string('eye_others_sx')->nullable();
            $table->string('h/o_frothy_urine');
            $table->string('h/o_periorbital_puffiness');
            $table->string('h/o_anasarca');
            $table->string('k/c_ckd');
            $table->string('ckd_details')->nullable();
            $table->string('renal_other_sx')->nullable();
            $table->string('numbness_of_hands');
            $table->string('painful_hands');
            $table->string('numbness_of_feet');
            $table->string('painful_feet');
            $table->string('burning_feet');
            $table->string('numbness_of_hands+feet');
            $table->string('burning_hands+feet');
            $table->string('parathesias');
            $table->string('sensory_others')->nullable();
            $table->string('postural_dizziness');
            $table->string('resting_tachycardia');
            $table->string('early_satiety');
            $table->string('diarrhoea');
            $table->string('nocturnal_diarrhoea');
            $table->string('constipation');
            $table->string('diarrhea_alt_constipation');
            $table->string('erectile_dysfunction');
            $table->string('autonomic_others')->nullable();
            $table->string('h/o_cva_in_past');
            $table->string('h/o_tia_in_past');
            $table->string('cva_details')->nullable();
            $table->string('cva_others_sx')->nullable();
            $table->string('h/o_chest_discomfort');
            $table->string('h/o_dyspenea');
            $table->string('k/c_heart_disease');
            $table->string('heart_details')->nullable();
            $table->string('ihd_others')->nullable();
            $table->string('h/o_claudication');
            $table->string('h/o_finger_discoloration');
            $table->string('h/o_toes_discoloration');
            $table->string('thigh_pain');
            $table->string('bells_palsy');
            $table->string('wasting_of_limb');
            $table->string('wasting_details')->nullable();
            $table->string('h/o_foot_ulcer_in_past');
            $table->string('cant_feel_shoes');
            $table->string('cant_feel_pressure');
            $table->string('foot_shape_changed');
            $table->string('checks_feet_daily');
            $table->string('check_shoes_before_wearing');
            $table->string('h/o_amputation_in_past');
            $table->string('foot_other_sx')->nullable();
            $table->string('recurrent_boils');
            $table->string('genralised_pruritis');
            $table->string('vulvoginal_pruritis');
            $table->string('balanoposthitis');
            $table->string('current_skin_complication');
            $table->string('feels_down');
            $table->string('lost_interest_in_things');
            $table->string('any_others')->nullable();
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
        Schema::dropIfExists('dm_history');
    }
}
