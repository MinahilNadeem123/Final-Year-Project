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
            $table->text('normal_smell_on_hx');
            $table->text('allergic_to_anything');
            $table->text('smell_impaired_in_which_nostril');
            $table->text('far_visual_acuity_in_right_eye');
            $table->text('far_visual_acuity_in_left_eye');
            $table->text('near_visual_acuity_in_right_eye');
            $table->text('near_visual_acuity_in_left_eye');
            $table->text('peripheral_visual_field');
            $table->text('peripheral_visual_field_details');
            $table->text('central_visual_field');
            $table->text('colour_vision_right_eye');
            $table->text('colour_vision_left_eye');
            $table->text('Light_reflex_right_eye');
            $table->text('Light_reflex_left_eye');
            $table->text('RAPD_right_eye');
            $table->text('RAPD_left_eye');
            $table->text('accomodation_right_eye');
            $table->text('accomodation_left_eye');
            $table->text('Rt_eye_disc_margins');
            $table->text('Rt_eye_disc_cup');
            $table->text('Rt_eye_disc_colour');
            $table->text('Rt_eye_vessels');
            $table->text('Rt_eye_fundus_colour');
            $table->text('lt_eye_disc_margins');
            $table->text('lt_eye_disc_cup');
            $table->text('lt_eye_disc_colour');
            $table->text('lt_eye_vessels');
            $table->text('lt_eye_fundus_colour');
            $table->text('posture_of_head');
            $table->text('ptosis');
            $table->text('ptosis_severity');
            $table->text('position_of_eyeballs');
            $table->text('pupils');
            $table->text('movements');
            $table->text('cn4palsy');
            $table->text('cn6palsy');
            $table->text('total_opthalmoplegia');
            $table->text('diplopia_on_gaze');
            $table->text('motor_part_of_cn5');
            $table->text('jaw_jerk');
            $table->text('sensation_in_ophthalmic_div');
            $table->text('sensation_in_maxillary_div');
            $table->text('sensation_in_mandibular_div');
            $table->text('corneal_reflex');
            $table->text('conjustival_reflex');
            $table->text('hyperacusis');
            $table->text('lost_of_wrinkles_on_forehead_on_frowning');
            $table->text('inability_to_close_eyes_forcefully');
            $table->text('dribbling_of_saliva');
            $table->text('loss_of_nasolabial_folds');
            $table->text('deviation_of_angle_of_mouth');
            $table->text('buccinator');
            $table->text('corneal_reflex_7th');
            $table->text('conjustival_reflex_7th');
            $table->text('whistling');
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
