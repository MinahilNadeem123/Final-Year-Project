<div class="modal fade" id="modaldmhistory" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">DM History Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
    <form class="row g-3" style="line-break: anywhere;" >
        @csrf
        <div class="row">
        <h3 style="text-align: center;">1. Diabetes Diagnosis</h3>

        <div class="col-12"  >
            <label for="diabetesSince" class="form-lable">Diabetes Since</label>
            <input type="text" id="diabetesSince" value="" class="form-control" >
        </div>
        <div class="col-6">

            <input class="form-check-input" type="checkbox"  value="Newly Diagnosed DM" id="newlydiagnosed">
            <label class="form-check-label" for="newlydiagnosed">
                Newly Diagnosed
            </label>
        </div>
        <div class="col-6">
            <input class="form-check-input" type="checkbox" value="Diagnosed Incidently on BSL Checkup" name="diagnosed_incidently_or_bsl_checkup" id="diagnosedincidentlyorbslcheckup">
            <label class="form-check-label" for="diagnosedincidentlyorbslcheckup">
                Diagnosed Incidently on BSL Checkup
            </label>

        </div>
        <div class="form-check col-6" >
            <input class="form-check-input" type="checkbox" name="diagnosed_due_to_symptoms_of_hyperglycemia" value="Diagnosed Due to Symptoms of Hyperglycemia" id="diagnosedduetosymptomsofhyperglycemia">
            <label class="form-check-label" for="diagnosedduetosymptomsofhyperglycemia">
                Diagnosed Due to Symptoms of Hyperglycemia
            </label>
        </div>
        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" name="diagnosed_as_developed_diabetic_complication" value="Diagnosed As Developed Diabetic Complication" id="diagnosedasdevelopeddiabeticcomplicator">
            <label class="form-check-label" for="diagnosedasdevelopeddiabeticcomplicator">
                Diagnosed As Developed Diabetic Complication
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" name="diagnosed_due_to_hyperglycemia_crisis" value=" Diagnosed Due to Hyperglycemia Crisis" id="diagnosedduetohyperglycemiacrisis">
            <label class="form-check-label" for="diagnosedduetohyperglycemiacrisis">
                Diagnosed Due to Hyperglycemia Crisis
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" name="past_hx_of_gdm" value="+ve Hx of GDM in past" id="pasthxofgdm">
            <label class="form-check-label" for="pasthxofgdm">
                Past HX of GDM
            </label>
        </div>

        <h3 style="text-align: center;">2. Compliance Monitoring Control</h3>
        <div class="col-md-6">
            <label for="compliance" class="form-lable">Compliance</label>
            <select  class="form-select" id="compliance" name="compliance">
                <option value="" selected>Choose...</option>
                <option value="Good Compliance">Good</option>
                <option value="Poor Compliance">Poor</option>
            </select>
        </div>
            <div class="col-md-6">
                <input class="form-check-input" type="checkbox" name="has_glucometer_at_home" value="has glucometer at home" id="hasglucometerathome">
                <label class="form-check-label" for="hasglucometerathome">
                    Has Glucometer At Home
                </label>
            </div>
        <div class="col-md-6">
            <label for="glucometerModel" class="form-lable">Glucometer Model</label>
            <input  class="form-control" id="glucometerModel" name="glucometer_model" placeholder="">
        </div>
        <div class="col-md-6">
            <label  for="monitoring" class="form-lable">Monitoring</label>
            <select  class="form-select" id="monitoring" name="monitoring">
                <option value="" selected>choose...</option>
                <option value="Good monitoring">Good</option>
                <option value="Poor monitoring">Poor</option>
            </select>
        </div>

        <div class="col-md-6">
            <label for="initialControl" class="form-lable">Initial Control</label>
            <select  id="initialControl" class="form-select" name="initial_control">
                <option value="" selected>choose...</option>
                <option value="Initially controlled well with OADs">Good</option>
                <option value="Never Controlled well with OADs">Poor</option>
            </select>
        </div>
        <div class="col-md-6">
            <div  style="width: 100px;">Current Control</div>
            <select  class="form-select" id="current_control">
                <option value="" selected>choose...</option>
                <option value="Currently DM is well controlled">Good</option>
                <option value="Currently DM is poor controlled">Poor</option>
            </select>
        </div>

        <div class="col-md-6">
            <div  style="width: 100px;">Current Drugs</div>
            <input  class="form-control" id="currentDrugs" name="current_drugs" placeholder="">
        </div>

        <h3 style="text-align: center;">3. Current Symptoms</h3>

        <div class=" col-6">
            <input class="form-check-input" type="checkbox" name="genralised_weakness" value="Current c/o generalised weakness" id="generalisedweakness">
            <label class="form-check-label" for="generalisedweakness">
                Genralised Weakness
            </label>
        </div>

        <div class=" col-6">
            <input class="form-check-input" type="checkbox" name="increased_thirst" value="increased thirst" id="increasedthirst">
            <label class="form-check-label" for="increasedthirst">
                Increased Thirst
            </label>
        </div>

        <div class=" col-6">
            <input class="form-check-input" type="checkbox" name="increased_urination" value="increased urination" id="increasedurination">
            <label class="form-check-label" for="increasedurination">
                Increased Urination
            </label>
        </div>

        <div class=" col-6">
            <input class="form-check-input" type="checkbox" name="weight_loss" value="weight loss" id="weightloss">
            <label class="form-check-label" for="weightloss">
                Weight Loss
            </label>
        </div>

        <div class=" col-6">
            <input class="form-check-input" type="checkbox" name="blurring_of_vision" value="recent burning of vision" id="blurringofvision">
            <label class="form-check-label" for="blurringofvision">
                Blurring of Vision
            </label>
        </div>

        <h3 style="text-align: center;">4. Hypoglycemia</h3>

        <div class=" col-6">
            <input class="form-check-input" type="checkbox" name="hypoglycemia_level1" value="Hx of level 1 Hypoglycemia" id="hypoglycemialevel1">
            <label class="form-check-label" for="hypoglycemialevel1">
                Hypoglycemia Level-1
            </label>
        </div>

        <div class="col-6">
            <input class="form-check-input" type="checkbox" name="hypoglycemia_level2" value="Hx of level 2 Hypoglycemia" id="hypoglycemialevel2">
            <label class="form-check-label" for="hypoglycemialevel2">
                Hypoglycemia Level-2
            </label>
        </div>

        <div class="col-6">
            <input class="form-check-input" type="checkbox" name="hypoglycemia_level3" value="Hx of level 3 Hypoglycemia" id="hypoglycemialevel3">
            <label class="form-check-label" for="hypoglycemialevel3">
                Hypoglycemia Level-3
            </label>
        </div>

        <div class="col-6">
            <input class="form-check-input" type="checkbox" name="hypo_unawreness" value="Hypoglycemia unawareness present" id="hypounawareness">
            <label class="form-check-label" for="hypounawareness">
                Hypo Unawareness
            </label>
        </div>

        <div class="col-md-6">
            <label for="hypoglycemiaOthers" class="form-lable">Hypoglycemia Others</label>
            <textarea  class="form-control" name="hypoglycemia_others" id="hypoglycemiaOthers" placeholder=""></textarea>
        </div>

        <h3 style="text-align: center;">5. Eye Complication</h3>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" name="decreased_vision" value="+ve Hx of decreased vision" id="decreasedvision">
            <label class="form-check-label" for="decreasedvision">
                Decreased Vision
            </label>
        </div>


        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" name="spotters" value="spotters in field vision" id="spotters">
            <label class="form-check-label" for="spotters">
                Spotters
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" name="blurred_vision" value="blurring of eyes" id="blurredvision">
            <label class="form-check-label" for="blurredvision">
               Blurred Vision
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" name="amaurosis" value="amaurosis fugax" id="amaurosis">
            <label class="form-check-label" for="amaurosis">
                Amaurosis
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" name="gets_annual_eye_exam" value="gets annual eye examination" id="getsannualeyeexam">
            <label class="form-check-label" for="getsannualeyeexam">
                Gets Annual Eye Exam
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" name="ho_laser_therapy" value="Laser Therapy" id="h/olasertherapy">
            <label class="form-check-label" for="h/olasertherapy">
                H/O Laser Therapy
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" name="ho_vagf_therapy" value="anti VAGF therapy" id="h/ovagftherapy">
            <label class="form-check-label" for="h/ovagftherapy">
                H/O VAGF Therapy
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="ho_cataract" value="+ve Hx of cataract" id="h/ocataract">
            <label class="form-check-label" for="h/ocataract">
                H/O Cataract
            </label>
        </div>
        <div class="col-md-6">
            <div  style="width: 100px;">Cataract Details</div>
            <input  class="form-control" id="cataractDetails" name="cataract_details" placeholder="">
        </div>

        <div class="col-md-6">
            <div  style="width: 100px;">Eye Others SX</div>
            <input  class="form-control" id="eyeOtherSx" name="eye_others_sx" placeholder="">
        </div>
        <h3 style="text-align: center;">6. Nephropathy</h3>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" name="ho_frothy_urine" value="frothy urine" id="h/ofrothyurine">
            <label class="form-check-label" for="h/ofrothyurine">
               H/O Frothy Urine
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" name="ho_periorbital_puffiness" value="periorbital puffiness" id="h/operiorbitalpuffiness">
            <label class="form-check-label" for="h/operiorbitalpuffiness">
                H/O Periorbital Puffiness
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" name="ho_anasarca" value="anasarca" id="h/oanasarca">
            <label class="form-check-label" for="h/oanasarca">
                H/O Anasarca
            </label>
        </div>


        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" name="kc_ckd" value="+ve Hx of CKD" id="k/cckd">
            <label class="form-check-label" for="k/cckd">
               K/C CKD
            </label>
        </div>
        <div class="col-md-6">
            <div  style="width: 100px;">CKD details</div>
            <input  class="form-control" id="ckdDetails" name="ckd_details" placeholder="">
        </div>

        <div class="col-md-6">
            <div  style="width: 100px;">Renal Other SX</div>
            <input  class="form-control" id="renalOtherSx" name="renal_others_sx" placeholder="">
        </div>

        <h3 style="text-align: center;">7. Sensory Neuropathy</h3>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" name="numbness_of_hands" value="+ve Hx of numbness of hands" id="numbnessofhands">
            <label class="form-check-label" for="numbnessofhands">
                Numbness Of Hands
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" name="painful_hands" value="pain in hands" id="painfulhands">
            <label class="form-check-label" for="painfulhands">
                Painful Hands
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" name="numbness_of_feet" value="numbness of feet" id="numbnessoffeet">
            <label class="form-check-label" for="numbnessoffeet">
                Numbness Of Feet
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" name="painful_feets" value="pain in feet" id="painfulfeets">
            <label class="form-check-label" for="painfulfeets">
                Painful Feets
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" name="burning_feet" value="burning sendation in feet" id="burningfeet">
            <label class="form-check-label" for="burningfeet">
                Burning Feet
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" name="numbness_of_handsfeet" value="numbness of hands & feet" id="numbnessofhands+feet">
            <label class="form-check-label" for="numbnessofhands+feet">
                Numbness of Hands + Feet
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" name="painful_handsfeet" value="painful hands & feet" id="painful_hands+feet">
            <label class="form-check-label" for="painful_handsfeet">
                Painful Hands + Feet
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" name="burning_handsfeet" value="burning sensation in hand & feet" id="burninghands+feet">
            <label class="form-check-label" for="burninghands+feet">
                Burning Hands + Feet
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" name="parathesias" value="parasthesias" id="parathesias">
            <label class="form-check-label" for="parathesias">
                Parathesias
            </label>
        </div>
        <div class="col-md-6">
            <div  style="width: 100px;">Sensory Other</div>
            <input  class="form-control" name="sensory_others" id="sensory_others" placeholder="">
        </div>
        <h3 style="text-align: center;">8. Autonomic Neuropathy</h3>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="+ve Hx of postural dizziness" name="postural_dizziness" id="posturaldizziness">
            <label class="form-check-label" for="posturaldizziness">
                Postural Dizziness
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="resting tachycardia" name="resting_tachycardia" id="restingtachycardia">
            <label class="form-check-label" for="restingtachycardia">
                Resting Tachycardia
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="Early satiety" name="early_satiety" id="earlysatiety">
            <label class="form-check-label" for="earlysatiety">
                Early Satiety
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="diarrhoea" name="diarrhoea" id="diarrhoea">
            <label class="form-check-label" for="diarrhoea">
                Diarrhoea
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="nocturnal diarrhoea" name="nocturnal_diarrhoea" id="nocturnaldiarrhoea">
            <label class="form-check-label" for="nocturnaldiarrhoea">
                Nocturnal Diarrhoea
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="constipation" name="constipation" id="constipation">
            <label class="form-check-label" for="constipation">
                Constipation
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="diarrhoea alternating with constipation" name="diarrhea_alt_constipation" id="diarrheaaltconstipation">
            <label class="form-check-label" for="diarrheaaltconstipation">
                Diarrhea alt Constipation
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="erectile dysfunction" name="erectile_dys_function" id="erectiledysfunction">
            <label class="form-check-label" for="erectiledysfunction">
                Erectile Dysfunction
            </label>
        </div>

        <div class="col-md-6">
            <div  style="width: 100px;">Autonomic Others</div>
            <input  class="form-control" name="autonomic_others" id="autonomic_others" placeholder="">
        </div>

        <h3 style="text-align: center;">9. Stroke</h3>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="past h/o stroke" name="h/o_cva_in_past" id="h/ocvainpast">
            <label class="form-check-label" for="h/ocvainpast">
                H/O CVA in Past
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="past h/o tia" name="h/o_tia_in_past" id="h/otiainpast">
            <label class="form-check-label" for="h/otiainpast">
                H/O TIA in Past
            </label>
        </div>

        <div class="col-md-6">
            <div  style="width: 100px;">CVA Details</div>
            <input  class="form-control" id="cva_details" name="cva_details" placeholder="">
        </div>

        <div class="col-md-6">
            <div  style="width: 100px;">CVA Others SX</div>
            <input  class="form-control" id="cva_others_sx" name="cva_others_sx" placeholder="">
        </div>

        <h3 style="text-align: center;">10. Heart Disease</h3>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="h/o exertional chest discomfort" name="h/o_chest_discomfort" id="h/ochestdiscomfort">
            <label class="form-check-label" for="h/ochestdiscomfort">
                H/O Chest Discomfort
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="exertional dyspnoea" name="h/o_dyspenea" id="h/odyspenea">
            <label class="form-check-label" for="h/odyspenea">
                H/O Dyspenea
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="K/C Heart disease" name="k/c_heart_disease" id="k/cheartdisease">
            <label class="form-check-label" for="k/cheartdisease">
                K/C Heart Disease
            </label>
        </div>

        <div class="col-md-6">
            <div  style="width: 100px;">Details</div>
            <input  class="form-control" id="heart_details" name="heart_details" placeholder="">
        </div>


        <div class="col-md-6">
            <div  style="width: 100px;">IHD Others</div>
            <input  class="form-control" id="ihd_others" name="ihd_others" placeholder="">
        </div>

        <h3 style="text-align: center;">11. Peripheral Arterial Disease</h3>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="+ve Hx of claudication" name="h/o_claudication" id="h/oclaudication">
            <label class="form-check-label" for="h/oclaudication">
                H/O Claudication
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="discoloration of fingers" name="h/o_finger_discoloration" id="h/ofingerdiscoloration">
            <label class="form-check-label" for="h/ofingerdiscoloration">
                H/O Finger Discoloration
            </label>
        </div>6
        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="discoloration of toes" name="h/o_toes_discoloration" id="h/otoesdiscoloration">
            <label class="form-check-label" for="h/otoesdiscoloration">
                H/O Toes Discoloration
            </label>
        </div>

        <h3 style="text-align: center;">12. Amyotrphy</h3>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="pain in thighs" name="thigh_pain" id="thighpain">
            <label class="form-check-label" for="thighpain">
                Thigh Pain
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="bells palsy" name="bells_palsy" id="bellspalsy">
            <label class="form-check-label" for="bellspalsy">
                Bells Palsy
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="+ve Hx of wasting of limb" name="wasting_of_limb" id="wastingoflimb">
            <label class="form-check-label" for="wastingoflimb">
                Wasting Of Limb
            </label>
        </div>

        <div class="col-md-6">
            <div  style="width: 100px;">Wasting Details</div>
            <input  class="form-control" id="wastingdetails" name="wasting_details" placeholder="">
        </div>

        <h3 style="text-align: center;">13. Diabetic Foot Disease</h3>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="+ve Hx of foot ulcer in past" name="h/o_foot_ulcer_in_past" id="h/ofootulcerinpast">
            <label class="form-check-label" for="h/ofootulcerinpast">
                H/O Foot Ulcer in Past
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="+ve Hx of loss of sensation of footwear" name="cant_feel_shoes" id="cantfeelshoes">
            <label class="form-check-label" for="cantfeelshoes">
                Can't Feel Shoes
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="+ve Hx of loss of sensation of pressure on feet" name="cant_feel_pressure" id="cantfeelpressure">
            <label class="form-check-label" for="cantfeelpressure">
                Can't Feel Pressure
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="change in shape of feet" name="foot_shape_changed" id="footshapechanged">
            <label class="form-check-label" for="footshapechanged">
                Foot Shape Changed
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="checks feet on daily basis" name="checks_feet_daily" id="checksfeetdaily">
            <label class="form-check-label" for="checksfeetdaily">
                Checks Feet Daily
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="checks shoes before wearing" name="check_shoes_before_wearing" id="checkshoesbeforewearing">
            <label class="form-check-label" for="checkshoesbeforewearing">
                Check Shoes Before Wearing
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="amputation in past" name="h/o_amputation_in_past" id="h/oamputationinpast">
            <label class="form-check-label" for="h/oamputationinpast">
                H/O Amputation in Past
            </label>
        </div>

        <div class="col-md-6">
            <div  style="width: 100px;">Foot Other SX</div>
            <input  class="form-control" id="foot_other_sx" name="foot_other_sx" placeholder="">
        </div>

        <h3 style="text-align: center;">14. Dermatologic Complication</h3>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="+ve Hx of recurrent boils" name="recurrent_boils" id="recurrentboils">
            <label class="form-check-label" for="recurrentboils">
                Recurrent Boils
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="generalised pruritis" name="generalised_pruritis" id="generalisedpruritis">
            <label class="form-check-label" for="generalisedpruritis">
                Genralised Pruritis
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="vulvovaginal pruritis" name="vulvoginal_pruritis" id="vulvoginalpruritis">
            <label class="form-check-label" for="vulvoginalpruritis">
                Vulvoginal Pruritis
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="balanoposthitis" name="balanoposthitis" id="balanoposthitis">
            <label class="form-check-label" for="balanoposthitis">
                Balanoposthitis
            </label>
        </div>

        <div class="form-check col-6">
            <label class="form-check-label" for="currentskincomplication">
                Current Skin Complication
            </label>
            <input class="form-control" type="text" name="current_skin_complication" id="currentskincomplication">

        </div>

        <h3 style="text-align: center;">15. Depression </h3>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="feels down" name="feels_down" id="feelsdown">
            <label class="form-check-label" for="feelsdown">
                Feels Down
            </label>
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="has little interest or feels pleasure in doing thing" name="lost_interest_in_things" id="lostinterestinthings">
            <label class="form-check-label" for="lostinterestinthings">
                Lost Interest in Things
            </label>
        </div>

        <h3 style="text-align: center;">16. Any Others </h3>

        <div class="col-md-6">
            <textarea  class="form-control" id="any_other" name="any_others" placeholder=""></textarea>
        </div>

        </div>

    </form>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="dmExam1()" data-dismiss="modal">Save and Close</button>
            </div>

        </div>
    </div>

</div>


