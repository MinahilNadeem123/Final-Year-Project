<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGitExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('git_exams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->references('id')->on('users')
                ->constrained();
            $table->string('abdominal_exam_summary');
            $table->string('shape_of_abdomen');
            $table->string('shape_of_abdomen_details')->nullable();
            $table->string('abdomen_moving_with_resp');
            $table->string('pattern_of_breathing');
            $table->string('divarication_of_rect');
            $table->string('umbilicus_summary');
            $table->string('umbilicus_position');
            $table->string('umbilicus_margins');
            $table->string('umbilicus_shape');
            $table->string('visible_skin_deformity');
            $table->string('visible_veins');
            $table->string('visible_veins_flow');
            $table->string('scar_marks');
            $table->string('ascitic_tap_marks');
            $table->string('adhesive_sticking_applied');
            $table->string('pubic_hair_distribution');
            $table->string('hernial_orifices');
            $table->string('hernial_exam_detail')->nullable();
            $table->string('inguinal_lymph_nodes');
            $table->string('abdomen_feel');
            $table->string('abdomen_tenderness');
            $table->string('liver_palpable');
            $table->string('liver_span_in_fingers');
            $table->string('left_lobe_palpable');
            $table->string('liver_upper_border');
            $table->string('liver_pan_in_cm');
            $table->string('liver_edge');
            $table->string('liver_surface');
            $table->string('liver_tenderness');
            $table->string('spleen_palpable');
            $table->string('spleen_palpable_in_which_position');
            $table->string('spleen_palpable_by_which_method');
            $table->string('spleen_span_in_fingers');
            $table->string('spleen_span_in_cm');
            $table->string('spleen_tenderness');
            $table->string('kidneys_palpable');
            $table->string('paraaortic_lymph_nodes_palpable');
            $table->string('urinary_bladder_is_palpable_and_dull');
            $table->string('abdominal_pulsations_expansile');
            $table->string('shifting_dullness');
            $table->string('fluid_thrill');
            $table->string('bowel_sound_audible');
            $table->string('bowel_sound_detail')->nullable();
            $table->string('hepatic_rub_present');
            $table->string('splenic_rub_present');
            $table->string('renal_bruit_audible');
            $table->string('per_rectal_exam_details');
            $table->string('testicular_atrophy');
            $table->string('kf_rings');
            $table->string('slit_lamp_exam');
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
        Schema::dropIfExists('git_exams');
    }
}
