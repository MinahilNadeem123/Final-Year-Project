<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotorSensoryCerebellumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motor_sensory_cerebellums', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->references('id')->on('patients')
                ->constrained();
            $table->string('motor_system_summary');
            $table->string('involuntary_movements_areas');
            $table->string('involuntary_movements_types');
            $table->string('abnormal_posturing');
            $table->string('abnormal_posturing_limb');
            $table->string('visible_fasiculation_site');
            $table->string('rul_bulk');
            $table->string('rul_tone');
            $table->string('rul_tone_type');
            $table->string('rul_power');
            $table->string('rul_power_proximal');
            $table->string('rul_power_distal');
            $table->string('rul_power_finger_flexors');
            $table->string('rul_power_finger_extensors');
            $table->string('rul_power_wrist_flexors');
            $table->string('rul_power_wrist_extensors');
            $table->string('rul_power_elbow_flexors');
            $table->string('rul_power_elbow_extensors');
            $table->string('rul_shoulder_abduction');
            $table->string('rul_shoulder_adduction');
            $table->string('rul_power_shoulder_flexors');
            $table->string('rul_power_shoulder_extensors');
            $table->string('rul_biceps_reflex');
            $table->string('rul_triceps_reflex');
            $table->text('rul_branchioradialis_reflex');
            $table->text('rul_hoffman_sign');
            $table->text('rulcoordination');
            $table->text('lul_bulk');
            $table->text('lul_tone');
            $table->text('lul_tone_type');
            $table->text('lul_power');
            $table->text('lul_power_proximal');
            $table->text('lul_power_distal');
            $table->text('lul_power_finger_flexors');
            $table->text('lul_power_finger_extensors');
            $table->text('lul_power_wrist_flexors');
            $table->text('lul_power_wrist_extensors');
            $table->text('lul_power_elbow_flexors');
            $table->text('lul_power_elbow_extensors');
            $table->text('lul_shoulder_abduction');
            $table->text('lul_shoulder_adduction');
            $table->text('lul_power_shoulder_flexors');
            $table->text('lul_power_shoulder_extensors');
            $table->text('lul_biceps_reflex');
            $table->text('lul_triceps_reflex');
            $table->text('lul_branchioradialis_reflex');
            $table->text('lul_hoffman_sign');
            $table->text('lul_coordination');
            $table->text('rll_bulk');
            $table->text('rll_tone');
            $table->text('rll_tone_type');
            $table->text('rll_power');
            $table->text('rll_power_proximal');
            $table->text('rll_power_distal');
            $table->text('rll_power_hip_flexion');
            $table->string('rll_power_hip_extension');
            $table->string('rll_power_hip_abduction');
            $table->string('rll_power_hip_adduction');
            $table->string('rll_power_knee_flexion');
            $table->string('rll_power_knee_extension');
            $table->string('rll_power_ankle_flexion');
            $table->string('rll_power_ankle_extension');
            $table->string('rll_knee_jerk');
            $table->string('rll_ankle_jerk');
            $table->string('rll_babin_ski_reflex');
            $table->string('rll_ankle_clonus');
            $table->string('rll_patellar_clonus');
            $table->string('rll_coordination');
            $table->string('lll_bulk');
            $table->string('lll_tone');
            $table->string('lll_tone_type');
            $table->string('lll_power');
            $table->string('lll_power_proximal');
            $table->string('lll_power_distal');
            $table->string('lll_power_hip_flexion');
            $table->string('lll_power_hip_extension');
            $table->string('lll_power_hip_abduction');
            $table->string('lll_power_hip_adduction');
            $table->string('lll_power_knee_flexion');
            $table->string('lll_power_knee_extension');
            $table->string('lll_power_ankle_flexion');
            $table->string('lll_power_ankle_extension');
            $table->string('lll_knee_jerk');
            $table->string('lll_ankle_jerk');
            $table->string('lll_babin_ski_reflex');
            $table->string('lll_ankle_clonus');
            $table->string('lll_patellar_clonus');
            $table->string('lll_coordination');
            $table->text('gait');
            $table->text('gower_sign');
            $table->text('ng_in_place');
            $table->text('foley_in_place');
            $table->text('sensory_system_summary');
            $table->text('rll_light_touch');
            $table->text('rll_superficial_pain');
            $table->text('rll_temperature');
            $table->text('rll_vibration');
            $table->text('rll_joint_position_sense');
            $table->text('rll_sensory_level_at');
            $table->text('lll_light_touch');
            $table->text('lll_superficial_pain');
            $table->text('lll_temperature');
            $table->text('lll_vibration');
            $table->text('lll_joint_position_sense');
            $table->text('lll_sensory_level_at');
            $table->text('rul_light_touch');
            $table->text('rul_superficial_pain');
            $table->text('rul_temperature');
            $table->text('rul_vibration');
            $table->text('rul_joint_position_sense');
            $table->text('rul_sensory_level_at');
            $table->text('rul_stereognosis');
            $table->text('rul_graphaesthesia');
            $table->text('lul_light_touch');
            $table->text('lul_superficial_pain');
            $table->text('lul_temperature');
            $table->text('lul_vibration');
            $table->text('lul_joint_position_sense');
            $table->text('lul_sensory_level_at');
            $table->text('lul_stereognosis');
            $table->text('lul_graphaesthesia');
            $table->text('sensory_in_attention');
            $table->text('cerebellar_system_summary');
            $table->text('posture');
            $table->text('nystagmus');
            $table->text('scanning_speech');
            $table->text('upper_limbs_hypotonia');
            $table->text('intention_tremors');
            $table->text('dysmetri_past_pointing');
            $table->text('dysdisdochkinesia');
            $table->text('rebound_phenomenon');
            $table->text('pendular_knee_jerk');
            $table->text('sways_towards_any_side');
            $table->text('broad_based_gait');
            $table->text('tandem_walking');
            $table->text('vii_nerve');
            $table->text('viii_nerve');
            $table->text('auscultation_of_cerbelli');
            $table->text('pes_cavus');
            $table->text('gingival_hyperplasia');
            $table->text('gait_summary');
            $table->text('cant_turns_back_smoothly');
            $table->text('tandeam_walk');
            $table->text('cerebelalr_ataxia');
            $table->text('romberg_test');
            $table->text('proximal_weakness');
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
        Schema::dropIfExists('motor_sensory_cerebellums');
    }
}
