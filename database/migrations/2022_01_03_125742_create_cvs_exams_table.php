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
            $table->foreignId('patient_id')->references('id')->on('patients')
                ->constrained();
            $table->text('shape_of_chest');
            $table->text('visible_apex_beat');
            $table->text('visible_pulsation_in_chest');
            $table->text('visible_pulsation_in_neck');
            $table->text('visible_pulsation_in_sprasternal_area');
            $table->text('visible_pulsation_in_epigastrium');
            $table->text('visible_pulsation_in_rhc');
            $table->text('visible_scars');
            $table->text('visible_veins');
            $table->text('visible_veins_direction');
            $table->text('engorged_neck_vein');
            $table->text('chest_tenderness');
            $table->text('apex_beat_palpable');
            $table->text('apex_beat_ics_position');
            $table->text('apex_beat_character');
            $table->text('palpable_thril');
            $table->text('palpable_p2');
            $table->text('palpable_a2');
            $table->text('palpable_as_thrill_radiating_to_neck');
            $table->text('left_parasternal_heave');
            $table->text('epigastric_heave');
            $table->text('pulsatile_liver');
            $table->text('jvp');
            $table->text('hepato_jugular_reflex');
            $table->text('s1_intensity');
            $table->text('s3_gallop');
            $table->text('s4_gallop');
            $table->text('s2_intensity');
            $table->text('s2_splitting');
            $table->text('mid_diastolic_murmur');
            $table->text('pan_systolic_murmur');
            $table->text('early_diastolic_murmur');
            $table->text('ejection_systolic_murmur');
            $table->text('best_heard_with');
            $table->text('loction');
            $table->text('intensity');
            $table->text('aggravated_by_respiration_method');
            $table->text('aggravated_in_which_position');
            $table->text('sacral_edema');
            $table->text('clubbing');
            $table->text('cyanosis');
            $table->text('splinter_hemorrhages');
            $table->text('quickness_sign');
            $table->text('oslers_nodes');
            $table->text('gangrene');
            $table->text('nicotine_staining');
            $table->text('janeway_lesions');
            $table->text('pallor');
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
