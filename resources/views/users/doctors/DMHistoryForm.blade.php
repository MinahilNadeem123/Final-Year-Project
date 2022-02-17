<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>DM History Form</title>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<h3 style="text-align: center;">DIABETES MELLITUS ASSESSMENT</h3>
<hr>
<div class="container">
    <form class="row g-3" method="post" action="{{route('dmHistoryForm')}}">
        @csrf
        <div class="col-md-3">
            <label for="inputPatient" class="form-label">MRN</label>
            <input type="text" class="form-control" id="inputPatient">

        </div>
        <h3 style="text-align: center;">1. Diabetes Diagnosis</h3>

        <div class="input-group col-md-3" >
            <div  style="width: 100px;">Risks Factors</div>
            <input type="text" class="form-control" name="risks_factors" placeholder="">
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox"  name="newly_diagnosed" value="yes" id="newlydiagnosed">
            <label class="form-check-label" for="newlydiagnosed">
                Newly Diagnosed
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="yes" name="diagnosed_incidently_or_bsl_checkup" id="diagnosedincidentlyorbslcheckup">
            <label class="form-check-label" for="diagnosedincidentlyorbslcheckup">
                Diagnosed Incidently or BSL Checkup
            </label>
        </div>
        <div class="form-check col-3" >
            <input class="form-check-input" type="checkbox" name="diagnosed_due_to_symptoms_of_hyperglycemia" value="yes" id="diagnosedduetosymptomsofhyperglycemia">
            <label class="form-check-label" for="diagnosedduetosymptomsofhyperglycemia">
                Diagnosed Due to Symptoms of Hyperglycemia
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="diagnosed_as_developed_diabetic_complication" value="yes" id="diagnosedasdevelopeddiabeticcomplicator">
            <label class="form-check-label" for="diagnosedasdevelopeddiabeticcomplicator">
                Diagnosed As Developed Diabetic Complication
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="diagnosed_due_to_hyperglycemia_crisis" value="yes" id="diagnosedduetohyperglycemiacrisis">
            <label class="form-check-label" for="diagnosedduetohyperglycemiacrisis">
                Diagnosed Due to Hyperglycemia Crisis
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="past_hx_of_gdm" value="yes" id="pasthxofgdm">
            <label class="form-check-label" for="pasthxofgdm">
                Past HX of GDM
            </label>
        </div>

        <h3 style="text-align: center;">2. Compliance Monitoring Control</h3>
        <div class="col-md-4">
            <div  style="width: 100px;">Compliance</div>
            <select  class="form-select" name="compliance">
                <option selected>Choose...</option>
                <option >Good</option>
                <option >Poor</option>
            </select>
        </div>

        <div class="input-group col-md-4">
            <div  style="width: 100px;">Glucometer Model</div>
            <input  class="form-control" name="glucometer_model" placeholder="">
        </div>
        <div class="input-group col-md-4">
            <div  style="width: 100px;">Monitoring</div>
            <select  class="form-select" name="monitoring">
                <option selected>choose...</option>
                <option>Good</option>
                <option>Poor</option>
            </select>
        </div>

        <div class="input-group col-md-4">
            <div  style="width: 100px;">Initial Control</div>
            <select  class="form-select" name="initial_control">
                <option selected>choose...</option>
                <option>Good</option>
                <option>Poor</option>
            </select>
        </div>
        <div class="input-group col-md-4">
            <div  style="width: 100px;">Current Control</div>
            <select  class="form-select" name="current_control">
                <option selected>choose...</option>
                <option>Good</option>
                <option>Poor</option>
            </select>
        </div>
        <div class="form-check col-md-4">
            <input class="form-check-input" type="checkbox" name="has_glucometer_at_home" value="yes" id="hasglucometerathome">
            <label class="form-check-label" for="hasglucometerathome">
                Has Glucometer At Home
            </label>
        </div>
        <div class="input-group col-md-8">
            <div  style="width: 100px;">Current Drugs</div>
            <input  class="form-control" name="current_drugs" placeholder="">
        </div>

        <h3 style="text-align: center;">3. Current Symptoms</h3>

        <div class="form-check col-2">
            <input class="form-check-input" type="checkbox" name="genralised_weakness" value="yes" id="generalisedweakness">
            <label class="form-check-label" for="generalisedweakness">
                Genralised Weakness
            </label>
        </div>

        <div class="form-check col-2">
            <input class="form-check-input" type="checkbox" name="increased_thirst" value="yes" id="increasedthirst">
            <label class="form-check-label" for="increasedthirst">
                Increased Thirst
            </label>
        </div>

        <div class="form-check col-2">
            <input class="form-check-input" type="checkbox" name="increased_urination" value="yes" id="increasedurination">
            <label class="form-check-label" for="increasedurination">
                Increased Urination
            </label>
        </div>

        <div class="form-check col-2">
            <input class="form-check-input" type="checkbox" name="weight_loss" value="yes" id="weightloss">
            <label class="form-check-label" for="weightloss">
                Weight Loss
            </label>
        </div>

        <div class="form-check col-2">
            <input class="form-check-input" type="checkbox" name="blurring_of_vision" value="yes" id="blurringofvision">
            <label class="form-check-label" for="blurringofvision">
                Blurring of Vision
            </label>
        </div>

        <h3 style="text-align: center;">4. Hypoglycemia</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="hypoglycemia_level1" value="yes" id="hypoglycemialevel1">
            <label class="form-check-label" for="hypoglycemialevel1">
                Hypoglycemia Level-1
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="hypoglycemia_level2" value="yes" id="hypoglycemialevel2">
            <label class="form-check-label" for="hypoglycemialevel2">
                Hypoglycemia Level-2
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="hypoglycemia_level3" value="yes" id="hypoglycemialevel3">
            <label class="form-check-label" for="hypoglycemialevel3">
                Hypoglycemia Level-3
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="hypo_unawreness" value="yes" id="hypounawareness">
            <label class="form-check-label" for="hypounawareness">
                Hypo Unawareness
            </label>
        </div>

        <div class="input-group col-md-4">
            <textarea  class="form-control" name="hypoglycemia_others" placeholder=""></textarea>
        </div>

        <h3 style="text-align: center;">5. Eye Complication</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="decreased_vision" value="yes" id="decreasedvision">
            <label class="form-check-label" for="decreasedvision">
                Decreased Vision
            </label>
        </div>


        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="spotters" value="yes" id="spotters">
            <label class="form-check-label" for="spotters">
                Spotters
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="blurred_vision" value="yes" id="blurredvision">
            <label class="form-check-label" for="blurredvision">
               Blurred Vision
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="amaurosis" value="yes" id="amaurosis">
            <label class="form-check-label" for="amaurosis">
                Amaurosis
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="gets_annual_eye_exam" value="yes" id="getsannualeyeexam">
            <label class="form-check-label" for="getsannualeyeexam">
                Gets Annual Eye Exam
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="ho_laser_therapy" value="yes" id="h/olasertherapy">
            <label class="form-check-label" for="h/olasertherapy">
                H/O Laser Therapy
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="ho_vagf_therapy" value="yes" id="h/ovagftherapy">
            <label class="form-check-label" for="h/ovagftherapy">
                H/O VAGF Therapy
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="ho_cataract" value="yes" id="h/ocataract">
            <label class="form-check-label" for="h/ocataract">
                H/O Cataract
            </label>
        </div>
        <div class="input-group col-md-3">
            <div  style="width: 100px;">Cataract Details</div>
            <input  class="form-control" name="cataract_details" placeholder="">
        </div>

        <div class="input-group col-md-3">
            <div  style="width: 100px;">Eye Others SX</div>
            <input  class="form-control" name="eye_others_sx" placeholder="">
        </div>
        <h3 style="text-align: center;">6. Nephropathy</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="ho_frothy_urine" value="yes" id="h/ofrothyurine">
            <label class="form-check-label" for="h/ofrothyurine">
               H/O Frothy Urine
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="ho_periorbital_puffiness" value="yes" id="h/operiorbitalpuffiness">
            <label class="form-check-label" for="h/operiorbitalpuffiness">
                H/O Periorbital Puffiness
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="ho_anasarca" value="yes" id="h/oanasarca">
            <label class="form-check-label" for="h/oanasarca">
                H/O Anasarca
            </label>
        </div>


        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="kc_ckd" value="yes" id="k/cckd">
            <label class="form-check-label" for="k/cckd">
               K/C CKD
            </label>
        </div>
        <div class="input-group col-md-3">
            <div  style="width: 100px;">CKD details</div>
            <input  class="form-control" name="ckd_details" placeholder="">
        </div>

        <div class="input-group col-md-3">
            <div  style="width: 100px;">Renal Other SX</div>
            <input  class="form-control" name="renal_others_sx" placeholder="">
        </div>

        <h3 style="text-align: center;">7. Sensory Neuropathy</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="numbness_of_hands" value="yes" id="numbnessofhands">
            <label class="form-check-label" for="numbnessofhands">
                Numbness Of Hands
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="painful_hands" value="yes" id="painfulhands">
            <label class="form-check-label" for="painfulhands">
                Painful Hands
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="numbness_of_feet" value="yes" id="numbnessoffeet">
            <label class="form-check-label" for="numbnessoffeet">
                Numbness Of Feet
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="painful_feets" value="yes" id="painfulfeets">
            <label class="form-check-label" for="painfulfeets">
                Painful Feets
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="burning_feet" value="yes" id="burningfeet">
            <label class="form-check-label" for="burningfeet">
                Burning Feet
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="numbness_of_handsfeet" value="yes" id="numbnessofhands+feet">
            <label class="form-check-label" for="numbnessofhands+feet">
                Numbness of Hands + Feet
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="burning_handsfeet" value="yes" id="burninghands+feet">
            <label class="form-check-label" for="burninghands+feet">
                Burning Hands + Feet
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="parathesias" value="yes" id="parathesias">
            <label class="form-check-label" for="parathesias">
                Parathesias
            </label>
        </div>
        <div class="input-group col-md-3">
            <div  style="width: 100px;">Sensory Other</div>
            <input  class="form-control" name="sensory_others" placeholder="">
        </div>
        <h3 style="text-align: center;">8. Autonomic Neuropathy</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="postural_dizziness" id="posturaldizziness">
            <label class="form-check-label" for="posturaldizziness">
                Postural Dizziness
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="resting_tachycardia" id="restingtachycardia">
            <label class="form-check-label" for="restingtachycardia">
                Resting Tachycardia
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="early_satiety" id="earlysatiety">
            <label class="form-check-label" for="earlysatiety">
                Early Satiety
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="diarrhoea" id="diarrhoea">
            <label class="form-check-label" for="diarrhoea">
                Diarrhoea
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="nocturnal_diarrhoea" id="nocturnaldiarrhoea">
            <label class="form-check-label" for="nocturnaldiarrhoea">
                Nocturnal Diarrhoea
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="constipation" id="constipation">
            <label class="form-check-label" for="constipation">
                Constipation
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="diarrhea_alt_constipation" id="diarrheaaltconstipation">
            <label class="form-check-label" for="diarrheaaltconstipation">
                Diarrhea alt Constipation
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="erectile_dys_function" id="erectiledysfunction">
            <label class="form-check-label" for="erectiledysfunction">
                Erectile Dysfunction
            </label>
        </div>

        <div class="input-group col-md-3">
            <div  style="width: 100px;">Autonomic Others</div>
            <input  class="form-control" name="autonomic_others" placeholder="">
        </div>

        <h3 style="text-align: center;">9. Stroke</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="h/o_cva_in_past" id="h/ocvainpast">
            <label class="form-check-label" for="h/ocvainpast">
                H/O CVA in Past
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="h/o_tia_in_past" id="h/otiainpast">
            <label class="form-check-label" for="h/otiainpast">
                H/O TIA in Past
            </label>
        </div>

        <div class="input-group col-md-3">
            <div  style="width: 100px;">CVA Details</div>
            <input  class="form-control" name="cva_details" placeholder="">
        </div>

        <div class="input-group col-md-3">
            <div  style="width: 100px;">CVA Others SX</div>
            <input  class="form-control" name="cva_others_sx" placeholder="">
        </div>

        <h3 style="text-align: center;">10. Heart Disease</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="h/o_chest_discomfort" id="h/ochestdiscomfort">
            <label class="form-check-label" for="h/ochestdiscomfort">
                H/O Chest Discomfort
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="h/o_dyspenea" id="h/odyspenea">
            <label class="form-check-label" for="h/odyspenea">
                H/O Dyspenea
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="k/c_heart_disease" id="k/cheartdisease">
            <label class="form-check-label" for="k/cheartdisease">
                K/C Heart Disease
            </label>
        </div>

        <div class="input-group col-md-3">
            <div  style="width: 100px;">Details</div>
            <input  class="form-control" name="heart_details" placeholder="">
        </div>


        <div class="input-group col-md-3">
            <div  style="width: 100px;">IHD Others</div>
            <input  class="form-control" name="ihd_others" placeholder="">
        </div>

        <h3 style="text-align: center;">11. Peripheral Arterial Disease</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="h/o_claudication" id="h/oclaudication">
            <label class="form-check-label" for="h/oclaudication">
                H/O Claudication
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="h/o_finger_discoloration" id="h/ofingerdiscoloration">
            <label class="form-check-label" for="h/ofingerdiscoloration">
                H/O Finger Discoloration
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="h/o_toes_discoloration" id="h/otoesdiscoloration">
            <label class="form-check-label" for="h/otoesdiscoloration">
                H/O Toes Discoloration
            </label>
        </div>

        <h3 style="text-align: center;">12. Amyotrphy</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="thigh_pain" id="thighpain">
            <label class="form-check-label" for="thighpain">
                Thigh Pain
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="bells_palsy" id="bellspalsy">
            <label class="form-check-label" for="bellspalsy">
                Bells Palsy
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="wasting_of_limb" id="wastingoflimb">
            <label class="form-check-label" for="wastingoflimb">
                Wasting Of Limb
            </label>
        </div>

        <div class="input-group col-md-3">
            <div  style="width: 100px;">Wasting Details</div>
            <input  class="form-control" name="wasting_details" placeholder="">
        </div>

        <h3 style="text-align: center;">13. Diabetic Foot Disease</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="h/o_foot_ulcer_in_past" id="h/ofootulcerinpast">
            <label class="form-check-label" for="h/ofootulcerinpast">
                H/O Foot Ulcer in Past
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="cant_feel_shoes" id="cantfeelshoes">
            <label class="form-check-label" for="cantfeelshoes">
                Can't Feel Shoes
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="cant_feel_pressure" id="cantfeelpressure">
            <label class="form-check-label" for="cantfeelpressure">
                Can't Feel Pressure
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="foot_shape_changed" id="footshapechanged">
            <label class="form-check-label" for="footshapechanged">
                Foot Shape Changed
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="checks_feet_daily" id="checksfeetdaily">
            <label class="form-check-label" for="checksfeetdaily">
                Checks Feet Daily
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="check_shoes_before_wearing" id="checkshoesbeforewearing">
            <label class="form-check-label" for="checkshoesbeforewearing">
                Check Shoes Before Wearing
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="h/o_amputation_in_past" id="h/oamputationinpast">
            <label class="form-check-label" for="h/oamputationinpast">
                H/O Amputation in Past
            </label>
        </div>

        <div class="input-group col-md-3">
            <div  style="width: 100px;">Foot Other SX</div>
            <input  class="form-control" name="foot_other_sx" placeholder="">
        </div>

        <h3 style="text-align: center;">14. Dermatologic Complication</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="recurrent_boils" id="recurrentboils">
            <label class="form-check-label" for="recurrentboils">
                Recurrent Boils
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="generalised_pruritis" id="generalisedpruritis">
            <label class="form-check-label" for="generalisedpruritis">
                Genralised Pruritis
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="vulvoginal_pruritis" id="vulvovaginalpruritis">
            <label class="form-check-label" for="vulvoginalpruritis">
                Vulvoginal Pruritis
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="balanoposthitis" id="balanoposthitis">
            <label class="form-check-label" for="balanoposthitis">
                Balanoposthitis
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="current_skin_complication" id="currentskincomplication">
            <label class="form-check-label" for="currentskincomplication">
                Current Skin Complication
            </label>
        </div>

        <h3 style="text-align: center;">15. Depression </h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="feels_down" id="feelsdown">
            <label class="form-check-label" for="feelsdown">
                Feels Down
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="yes" name="lost_interest_in_things" id="lostinterestinthings">
            <label class="form-check-label" for="lostinterestinthings">
                Lost Interest in Things
            </label>
        </div>

        <h3 style="text-align: center;">16. Any Others </h3>

        <div class="input-group col-md-3">
            <textarea  class="form-control" name="any_others" placeholder=""></textarea>
        </div>

{{--        <div class="input-group col-md-12">--}}
{{--            <textarea style="height:300px" class="form-control" placeholder=""></textarea>--}}
{{--            <span class="input-group-btn">--}}
{{--              <button class="btn btn-success " style="height:300px;width:100px">Copy Summary</button>--}}
{{--            </span>--}}
{{--        </div>--}}
        <div class="col-12 mb-5 mx-lg-auto" style="align-self: center;">
            <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
        </div>

        <div><div></div></div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
</body>
</html>
