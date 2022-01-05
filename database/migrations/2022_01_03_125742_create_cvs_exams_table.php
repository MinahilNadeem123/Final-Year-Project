<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvsExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs_exams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->references('id')->on('users')
                ->constrained();
            $table->string('shape_of_chest');
            $table->string('visible_apex_beat');
            $table->string('visible_pulsation_in_chest');
            $table->string('visible_pulsation_in_neck');
            $table->string('visible_pulsation_in_sprasternal_area');
            $table->string('visible_pulsation_in_epigastrium');
            $table->string('visible_pulsation_in_rhc');
            $table->string('visible_scars');
            $table->string('visible_veins');
            $table->string('visible_veins_direction');
            $table->string('engorged_neck_vein');
            $table->string('chest_tenderness');
            $table->string('apex_beat_palpable');
            $table->string('apex_beat_ics_position');
            $table->string('apex_beat_character');
            $table->string('palpable_thril');
            $table->string('palpable_p2');
            $table->string('palpable_a2');
            $table->string('palpable_as_thrill_radiating_to_neck');
            $table->string('left_parasternal_heave');
            $table->string('epigastric_heave');
            $table->string('pulsatile_liver');
            $table->string('jvp');
            $table->string('hepato_jugular_reflex');
            $table->string('s1_intensity');
            $table->string('s3_gallop');
            $table->string('s4_gallop');
            $table->string('s2_intensity');
            $table->string('s2_splitting');
            $table->string('mid_diastolic_murmur');
            $table->string('pan_systolic_murmur');
            $table->string('early_diastolic_murmur');
            $table->string('ejection_systolic_murmur');
            $table->string('best_heard_with');
            $table->string('loction');
            $table->string('intensity');
            $table->string('aggravated_by_respiration_method');
            $table->string('aggravated_in_which_position');
            $table->string('sacral_edema');
            $table->string('clubbing');
            $table->string('cyanosis');
            $table->string('splinter_hemorrhages');
            $table->string('quickness_sign');
            $table->string('oslers_nodes');
            $table->string('gangrene');
            $table->string('nicotine_staining');
            $table->string('janeway_lesions');
            $table->string('pallor');
            $table->string('pulse');
            $table->string('collapsing_pulse');
            $table->string('bp');
            $table->string('iv_needle_marks_in_arms');
            $table->string('tendon_xanthomas');
            $table->string('demussets_sign');
            $table->string('jaundice');
            $table->string('xanthelasmas');
            $table->string('central_cyanosis');
            $table->string('pulsating_uvula');
            $table->string('thyroid');
            $table->string('spleen');
            $table->string('shifting_dullness');
            $table->string('kidneys');
            $table->string('tranbes_pistol_shots');
            $table->string('durozier_sign');
            $table->string('pedal_edma');
            $table->string('erythema_marginatum');
            $table->string('roth_spots_on_fundus');
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
        Schema::dropIfExists('cvs_exams');
    }
}
