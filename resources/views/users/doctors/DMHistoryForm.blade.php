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
    <form class="row g-3">

        <div class="col-md-3">
            <label for="Cr" class="form-label">Patient No</label>
            <input type="text" class="form-control" id="Cr">
        </div>
        <div class="col-md-3">
            <label for="dor" class="form-label">Visit No</label>
            <input type="number" class="form-control" id="dor">
        </div>

        <div class="col-md-3">
            <label for="inputPatient" class="form-label">MRN</label>
            <input type="text" class="form-control" id="inputPatient">

        </div>
        <div class="col-md-3">
            <label for="patientname" class="form-label">Patient Name</label>
            <input type="text" class="form-control" id="patientname">
        </div>
        <h3 style="text-align: center;">1. Diabetes Diagnosis</h3>

        <div class="input-group col-md-3" >
            <div  style="width: 100px;">Risks Factors</div>
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="" id="newlydiagnosed">
            <label class="form-check-label" for="newlydiagnosed">
                Newly Diagnosed
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="" id="diagnosedincidentlyorbslcheckup">
            <label class="form-check-label" for="diagnosedincidentlyorbslcheckup">
                Diagnosed Incidently or BSL Checkup
            </label>
        </div>
        <div class="form-check col-3" >
            <input class="form-check-input" type="checkbox" value="" id="diagnosedduetosymptomsofhyperglycemia">
            <label class="form-check-label" for="diagnosedduetosymptomsofhyperglycemia">
                Diagnosed Due to Symptoms of Hyperglycemia
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="diagnosedasdevelopeddiabeticcomplicator">
            <label class="form-check-label" for="diagnosedasdevelopeddiabeticcomplicator">
                Diagnosed As Developed Diabetic Complication
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="diagnosedduetohyperglycemiacrisis">
            <label class="form-check-label" for="diagnosedduetohyperglycemiacrisis">
                Diagnosed Due to Hyperglycemia Crisis
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="pasthxofgdm">
            <label class="form-check-label" for="pasthxofgdm">
                Past HX of GDM
            </label>
        </div>

        <h3 style="text-align: center;">2. Compliance Monitoring Control</h3>
        <div class="col-md-4">
            <div  style="width: 100px;">Compliance</div>
            <select  class="form-select">
                <option selected>Choose...</option>
                <option >Good</option>
                <option >Poor</option>
            </select>
        </div>

        <div class="input-group col-md-4">
            <div  style="width: 100px;">Glucometer Model</div>
            <input  class="form-control" placeholder="">
        </div>
        <div class="input-group col-md-4">
            <div  style="width: 100px;">Monitoring</div>
            <select  class="form-select">
                <option selected>choose...</option>
                <option>Good</option>
                <option>Poor</option>
            </select>
        </div>

        <div class="input-group col-md-4">
            <div  style="width: 100px;">Initial Control</div>
            <select  class="form-select">
                <option selected>choose...</option>
                <option>Good</option>
                <option>Poor</option>
            </select>
        </div>
        <div class="input-group col-md-4">
            <div  style="width: 100px;">Current Control</div>
            <select  class="form-select">
                <option selected>choose...</option>
                <option>Good</option>
                <option>Poor</option>
            </select>
        </div>
        <div class="form-check col-md-4">
            <input class="form-check-input" type="checkbox" value="" id="hasglucometerathome">
            <label class="form-check-label" for="hasglucometerathome">
                Has Glucometer At Home
            </label>
        </div>
        <div class="input-group col-md-8">
            <div  style="width: 100px;">Current Drugs</div>
            <input  class="form-control" placeholder="">
        </div>

        <h3 style="text-align: center;">3. Current Symptoms</h3>

        <div class="form-check col-2">
            <input class="form-check-input" type="checkbox" value="" id="generalisedweakness">
            <label class="form-check-label" for="generalisedweakness">
                Genralised Weakness
            </label>
        </div>

        <div class="form-check col-2">
            <input class="form-check-input" type="checkbox" value="" id="increasedthirst">
            <label class="form-check-label" for="increasedthirst">
                Increased Thirst
            </label>
        </div>

        <div class="form-check col-2">
            <input class="form-check-input" type="checkbox" value="" id="increasedurination">
            <label class="form-check-label" for="increasedurination">
                Increased Urination
            </label>
        </div>

        <div class="form-check col-2">
            <input class="form-check-input" type="checkbox" value="" id="weightloss">
            <label class="form-check-label" for="weightloss">
                Weight Loss
            </label>
        </div>

        <div class="form-check col-2">
            <input class="form-check-input" type="checkbox" value="" id="blurringofvision">
            <label class="form-check-label" for="blurringofvision">
                Blurring of Vision
            </label>
        </div>

        <h3 style="text-align: center;">4. Hypoglycemia</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="hypoglycemialevel1">
            <label class="form-check-label" for="hypoglycemialevel1">
                Hypoglycemia Level-1
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="hypoglycemialevel2">
            <label class="form-check-label" for="hypoglycemialevel2">
                Hypoglycemia Level-2
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="hypoglycemialevel3">
            <label class="form-check-label" for="hypoglycemialevel3">
                Hypoglycemia Level-3
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="hypounawareness">
            <label class="form-check-label" for="hypounawareness">
                Hypo Unawareness
            </label>
        </div>

        <div class="input-group col-md-4">
            <textarea  class="form-control" placeholder=""></textarea>
        </div>

        <h3 style="text-align: center;">5. Eye Complication</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="decreasedvision">
            <label class="form-check-label" for="decreasedvision">
                Decreased Vision
            </label>
        </div>


        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="spotters">
            <label class="form-check-label" for="spotters">
                Spotters
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="blurredvision">
            <label class="form-check-label" for="blurredvision">
               Blurred Vision
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="amaurosis">
            <label class="form-check-label" for="amaurosis">
                Amaurosis
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="getsannualeyeexam">
            <label class="form-check-label" for="getsannualeyeexam">
                Gets Annual Eye Exam
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="h/olasertherapy">
            <label class="form-check-label" for="h/olasertherapy">
                H/O Laser Therapy
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="h/ovagftherapy">
            <label class="form-check-label" for="h/ovagftherapy">
                H/O VAGF Therapy
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="h/ocataract">
            <label class="form-check-label" for="h/ocataract">
                H/O Cataract
            </label>
        </div>
        <div class="input-group col-md-3">
            <div  style="width: 100px;">Cataract Details</div>
            <input  class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-3">
            <div  style="width: 100px;">Eye Others SX</div>
            <input  class="form-control" placeholder="">
        </div>
        <h3 style="text-align: center;">6. Nephropathy</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="h/ofrothyurine">
            <label class="form-check-label" for="h/ofrothyurine">
               H/O Frothy Urine
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="h/operiorbitalpuffiness">
            <label class="form-check-label" for="h/operiorbitalpuffiness">
                H/O Periorbital Puffiness
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="h/oanasarca">
            <label class="form-check-label" for="h/oanasarca">
                H/O Anasarca
            </label>
        </div>


        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="k/cckd">
            <label class="form-check-label" for="k/cckd">
               K/C CKD
            </label>
        </div>
        <div class="input-group col-md-3">
            <div  style="width: 100px;">CKD details</div>
            <input  class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-3">
            <div  style="width: 100px;">Renal Other SX</div>
            <input  class="form-control" placeholder="">
        </div>

        <h3 style="text-align: center;">7. Sensory Neuropathy</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="numbnessofhands">
            <label class="form-check-label" for="numbnessofhands">
                Numbness Of Hands
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="painfulhands">
            <label class="form-check-label" for="painfulhands">
                Painful Hands
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="numbnessoffeet">
            <label class="form-check-label" for="numbnessoffeet">
                Numbness Of Feet
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="painfulfeets">
            <label class="form-check-label" for="painfulfeets">
                Painful Feets
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="burningfeet">
            <label class="form-check-label" for="burningfeet">
                Burning Feet
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="numbnessofhands+feet">
            <label class="form-check-label" for="numbnessofhands+feet">
                Numbness of Hands + Feet
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="burninghands+feet">
            <label class="form-check-label" for="burninghands+feet">
                Burning Hands + Feet
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="parathesias">
            <label class="form-check-label" for="parathesias">
                Parathesias
            </label>
        </div>
        <div class="input-group col-md-3">
            <div  style="width: 100px;">Sensory Other</div>
            <input  class="form-control" placeholder="">
        </div>
        <h3 style="text-align: center;">8. Autonomic Neuropathy</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="posturaldizziness">
            <label class="form-check-label" for="posturaldizziness">
                Postural Dizziness
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="restingtachycardia">
            <label class="form-check-label" for="restingtachycardia">
                Resting Tachycardia
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="earlysatiety">
            <label class="form-check-label" for="earlysatiety">
                Early Satiety
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="diarrhoea">
            <label class="form-check-label" for="diarrhoea">
                Diarrhoea
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="nocturnaldiarrhoea">
            <label class="form-check-label" for="nocturnaldiarrhoea">
                Nocturnal Diarrhoea
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="constipation">
            <label class="form-check-label" for="constipation">
                Constipation
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="diarrheaaltconstipation">
            <label class="form-check-label" for="diarrheaaltconstipation">
                Diarrhea alt Constipation
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="erectiledysfunction">
            <label class="form-check-label" for="erectiledysfunction">
                Erectile Dysfunction
            </label>
        </div>

        <div class="input-group col-md-3">
            <div  style="width: 100px;">Autonomic Others</div>
            <input  class="form-control" placeholder="">
        </div>

        <h3 style="text-align: center;">9. Stroke</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="h/ocvainpast">
            <label class="form-check-label" for="h/ocvainpast">
                H/O CVA in Past
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="h/otiainpast">
            <label class="form-check-label" for="h/otiainpast">
                H/O TIA in Past
            </label>
        </div>

        <div class="input-group col-md-3">
            <div  style="width: 100px;">CVA Details</div>
            <input  class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-3">
            <div  style="width: 100px;">CVA Others SX</div>
            <input  class="form-control" placeholder="">
        </div>

        <h3 style="text-align: center;">10. Heart Disease</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="h/ochestdiscomfort">
            <label class="form-check-label" for="h/ochestdiscomfort">
                H/O Chest Discomfort
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="h/odyspenea">
            <label class="form-check-label" for="h/odyspenea">
                H/O Dyspenea
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="k/cheartdisease">
            <label class="form-check-label" for="k/cheartdisease">
                K/C Heart Disease
            </label>
        </div>

        <div class="input-group col-md-3">
            <div  style="width: 100px;">Details</div>
            <input  class="form-control" placeholder="">
        </div>


        <div class="input-group col-md-3">
            <div  style="width: 100px;">IHD Others</div>
            <input  class="form-control" placeholder="">
        </div>

        <h3 style="text-align: center;">11. Peripheral Arterial Disease</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="h/oclaudication">
            <label class="form-check-label" for="h/oclaudication">
                H/O Claudication
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="h/ofingerdiscoloration">
            <label class="form-check-label" for="h/ofingerdiscoloration">
                H/O Finger Discoloration
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="h/otoesdiscoloration">
            <label class="form-check-label" for="h/otoesdiscoloration">
                H/O Toes Discoloration
            </label>
        </div>

        <h3 style="text-align: center;">12. Amyotrphy</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="thighpain">
            <label class="form-check-label" for="thighpain">
                Thigh Pain
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="bellspalsy">
            <label class="form-check-label" for="bellspalsy">
                Bells Palsy
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="wastingoflimb">
            <label class="form-check-label" for="wastingoflimb">
                Wasting Of Limb
            </label>
        </div>

        <div class="input-group col-md-3">
            <div  style="width: 100px;">Wasting Details</div>
            <input  class="form-control" placeholder="">
        </div>

        <h3 style="text-align: center;">13. Diabetic Foot Disease</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="h/ofootulcerinpast">
            <label class="form-check-label" for="h/ofootulcerinpast">
                H/O Foot Ulcer in Past
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="cantfeelshoes">
            <label class="form-check-label" for="cantfeelshoes">
                Can't Feel Shoes
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="cantfeelpressure">
            <label class="form-check-label" for="cantfeelpressure">
                Can't Feel Pressure
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="footshapechanged">
            <label class="form-check-label" for="footshapechanged">
                Foot Shape Changed
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="checksfeetdaily">
            <label class="form-check-label" for="checksfeetdaily">
                Checks Feet Daily
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="checkshoesbeforewearing">
            <label class="form-check-label" for="checkshoesbeforewearing">
                Check Shoes Before Wearing
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="h/oamputationinpast">
            <label class="form-check-label" for="h/oamputationinpast">
                H/O Amputation in Past
            </label>
        </div>

        <div class="input-group col-md-3">
            <div  style="width: 100px;">Foot Other SX</div>
            <input  class="form-control" placeholder="">
        </div>

        <h3 style="text-align: center;">14. Dermatologic Complication</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="recurrentboils">
            <label class="form-check-label" for="recurrentboils">
                Recurrent Boils
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="generalisedpruritis">
            <label class="form-check-label" for="generalisedpruritis">
                Genralised Pruritis
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="vulvovaginalpruritis">
            <label class="form-check-label" for="vulvoginalpruritis">
                Vulvoginal Pruritis
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="balanoposthitis">
            <label class="form-check-label" for="balanoposthitis">
                Balanoposthitis
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="currentskincomplication">
            <label class="form-check-label" for="currentskincomplication">
                Current Skin Complication
            </label>
        </div>

        <h3 style="text-align: center;">15. Depression </h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="feelsdown">
            <label class="form-check-label" for="feelsdown">
                Feels Down
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="lostinterestinthings">
            <label class="form-check-label" for="lostinterestinthings">
                Lost Interest in Things
            </label>
        </div>

        <h3 style="text-align: center;">16. Any Others </h3>

        <div class="input-group col-md-3">
            <textarea  class="form-control" placeholder=""></textarea>
        </div>

        <div class="input-group col-md-12">
            <textarea style="height:300px" class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
              <button class="btn btn-success " style="height:300px;width:100px">Copy Summary</button>
            </span>
        </div>

        <div><div></div></div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
</body>
</html>
