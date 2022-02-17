<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCranialPeripheralNervesExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cranial_peripheral_nerves_exams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->references('id')->on('patients')
                ->constrained();
            $table->string('normal_smell_on_hx');
            $table->string('allergic_to_anything');
            $table->string('smell_impaired_in_which_nostril');
            $table->string('far_visual_acuity_in_right_eye');
            $table->string('far_visual_acuity_in_left_eye');
            $table->string('near_visual_acuity_in_right_eye');
            $table->string('near_visual_acuity_in_left_eye');
            $table->string('peripheral_visual_field');
            $table->string('peripheral_visual_field_details');
            $table->string('central_visual_field');
            $table->string('colour_vision_right_eye');
            $table->string('colour_vision_left_eye');
            $table->string('Light_reflex_right_eye');
            $table->string('Light_reflex_left_eye');
            $table->string('RAPD_right_eye');
            $table->string('RAPD_left_eye');
            $table->string('accomodation_right_eye');
            $table->string('accomodation_left_eye');
            $table->string('Rt_eye_disc_margins');
            $table->string('Rt_eye_disc_cup');
            $table->string('Rt_eye_disc_colour');
            $table->string('Rt_eye_vessels');
            $table->string('Rt_eye_fundus_colour');
            $table->string('lt_eye_disc_margins');
            $table->string('lt_eye_disc_cup');
            $table->string('lt_eye_disc_colour');
            $table->string('lt_eye_vessels');
            $table->string('lt_eye_fundus_colour');
            $table->string('posture_of_head');
            $table->string('ptosis');
            $table->string('ptosis_severity');
            $table->string('position_of_eyeballs');
            $table->string('pupils');
            $table->string('movements');
            $table->string('cn4palsy');
            $table->string('cn6palsy');
            $table->string('total_opthalmoplegia');
            $table->string('diplopia_on_gaze');
            $table->string('motor_part_of_cn5');
            $table->string('jaw_jerk');
            $table->string('sensation_in_ophthalmic_div');
            $table->string('sensation_in_maxillary_div');
            $table->string('sensation_in_mandibular_div');
            $table->string('corneal_reflex');
            $table->string('conjustival_reflex');
            $table->string('hyperacusis');
            $table->string('lost_of_wrinkles_on_forehead_on_frowning');
            $table->string('inability_to_close_eyes_forcefully');
            $table->string('dribbling_of_saliva');
            $table->string('loss_of_nasolabial_folds');
            $table->string('deviation_of_angle_of_mouth');
            $table->string('buccinator');
            $table->string('corneal_reflex_7th');
            $table->string('conjustival_reflex_7th');
            $table->string('whistling');
            $table->string('taste_on_anterior_two_third_of_tongue');
            $table->string('gag_not_intact');
            $table->string('palatal_reflex');
            $table->string('taste_over_posterior_one_third_of_tongue');
            $table->string('carotid_massage_does_not_decreased_hr');
            $table->string('nasal_twang');
            $table->string('uvul_deviated');
            $table->string('aah_test');
            $table->string('bovine_cough');
            $table->string('idl');
            $table->string('trepezius_bulk');
            $table->string('sternocleedomastoid_bulk');
            $table->string('weakness_of_trepezius');
            $table->string('weakness_of_sternocleedomastoid');
            $table->string('tongue_fasiculations');
            $table->string('tongue_wasting');
            $table->string('tongue_deviation');
            $table->string('tongue_weakness_of_any_side');

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
        Schema::dropIfExists('cranial_peripheral_nerves_exams');
    }
}
