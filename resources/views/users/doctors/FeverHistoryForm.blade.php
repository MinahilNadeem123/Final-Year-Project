<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Fever History Form</title>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<h3 style="text-align: center;">Fever History Form</h3>
<hr>
<div class="container">
    <form class="row g-3">


        <div class="col-md-3">
            <label for="ID" class="form-label">ID</label>
            <input type="text" class="form-control" id="ID">
        </div>
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
        <div class="col-md-6">
            <label for="patientname" class="form-label">Patient Name</label>
            <input type="text" class="form-control" id="patientname">
        </div>
        <div class="col-md-6">
            <label for="DateOfVisit" class="form-label">Date Of Visit</label>
            <input type="text" class="form-control" id="DateOfVisit">
        </div><br>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Duration</div>
            <input type="text" class="form-control" placeholder="">
        </div>

        <select class="form-select col-md-6" aria-label="Default select example">
            <option value="1">Days</option>
            <option value="2">Weeks</option>
            <option value="3">Months</option>
            <option value="3">Years</option>
        </select>


        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Documentation</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <select class="form-select col-md-6" aria-label="Default select example">
            <option value="1">Documented</option>
            <option value="2">Undocumented</option>
        </select>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Highest Temp</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <select class="form-select col-md-6" aria-label="Default select example">
            <option value="1">°F</option>
            <option value="2">°C</option>
        </select>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Grade</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <select class="form-select col-md-6" aria-label="Default select example">
            <option value="1">Low 100.5-102.2</option>
            <option value="2">Moderate 102.2-104.0</option>
            <option value="2">High 104.1-106.0</option>
            <option value="2">Hyperpyrexia >106.0</option>
        </select>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Pattern</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <select class="form-select col-md-6" aria-label="Default select example">
            <option value="1">Continuous</option>
            <option value="2">Intermittent</option>
            <option value="2">Remittent</option>
        </select>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Pattern Detail</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <select class="form-select col-md-6" aria-label="Default select example">
            <option value="1">Quotidian</option>
            <option value="2">Tertian</option>
            <option value="2">Quartan</option>
            <option value="2">Pel-Ebstein's</option>
            <option value="2">Relapsing</option>
        </select>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="" id="Rigors">
            <label class="form-check-label" for="Rigors">
                Rigors
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="" id="Chills">
            <label class="form-check-label" for="Chills">
                Chills
            </label>
        </div>

        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="" id="Malaise">
            <label class="form-check-label" for="Malaise">
                Malaise
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="" id="NightSweats">
            <label class="form-check-label" for="NightSweats">
                Night Sweats
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="" id="Myalgias">
            <label class="form-check-label" for="Myalgias">
                Myalgias
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="" id="SignificantWeightLoss">
            <label class="form-check-label" for="SignificantWeightLoss">
                Significant Weight Loss
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="" id="LossOfAppetite">
            <label class="form-check-label" for="LossOfAppetite">
                Loss Of Appetite
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="" id="LossOfTaste">
            <label class="form-check-label" for="LossOfTaste">
                Loss Of Taste
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="" id="LossOfSmell">
            <label class="form-check-label" for="LossOfSmell">
                Loss Of Smell
            </label>
        </div>
        <h3 style="text-align: center;">Respiratory Symptoms</h3>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="" id="RunnyNose">
            <label class="form-check-label" for="RunnyNose">
                Runny Nose
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="" id="CongestedNose">
            <label class="form-check-label" for="CongestedNose">
                Congested Nose
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="" id="Sneezing">
            <label class="form-check-label" for="Sneezing">
                Sneezing
            </label>
        </div>

        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="" id="NasalDischarge">
            <label class="form-check-label" for="NasalDischarge">
                Nasal Discharge
            </label>
        </div>

        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="" id="SoreThroat">
            <label class="form-check-label" for="SoreThroat">
                Sore Throat
            </label>
        </div>

        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="" id="Odynophagia">
            <label class="form-check-label" for="Odynophagia">
                Odynophagia
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="" id="FrontalHeadache">
            <label class="form-check-label" for="FrontalHeadache">
                Frontal Headache
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="" id="DryCough">
            <label class="form-check-label" for="DryCough">
                Dry Cough
            </label>
        </div>
        <div class="form-check col-md-12">
            <input class="form-check-input" type="checkbox" value="" id="ProductiveCough">
            <label class="form-check-label" for="ProductiveCough">
                Productive Cough
            </label>
        </div>
        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Sputum Colour</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>
        <select class="form-select col-md-6" aria-label="Default select example">
            <option value="1">White</option>
            <option value="2">Yellow</option>
            <option value="2">Green</option>
            <option value="2">Brown</option>
            <option value="2">Blood Stain</option>
        </select>

        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="" id="Hemoptysis">
            <label class="form-check-label" for="Hemoptysis">
                Hemoptysis
            </label>
        </div>

        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="" id="ShortnessOfBreath">
            <label class="form-check-label" for="ShortnessOfBreath">
                Shortness Of Breath
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="" id="Wheezing">
            <label class="form-check-label" for="Wheezing">
                Wheezing
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="" id="RespirophasicChestPain">
            <label class="form-check-label" for="RespirophasicChestPain">
                Respirophasic Chest Pain
            </label>
        </div>
        <div class="input-group col-md-6" >
            <div style="width: 100px;">Site</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="" id="HoarsenessOfVoice">
            <label class="form-check-label" for="HoarsenessOfVoice">
                Hoarseness Of Voice
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="" id="Halitosis">
            <label class="form-check-label" for="Halitosis">
                Halitosis
            </label>
        </div>
        <h3 style="text-align: center;">GIT Symptoms</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Nausea">
            <label class="form-check-label" for="Nausea">
                Nausea
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Vomiting">
            <label class="form-check-label" for="Vomiting">
               Vomiting
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Diarrhoea">
            <label class="form-check-label" for="Diarrhoea">
                Diarrhoea
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Constipation">
            <label class="form-check-label" for="Constipation">
                Constipation
            </label>
        </div>

        <div class="form-check col-12">
            <input class="form-check-input" type="checkbox" value="" id="PainAbdomen">
            <label class="form-check-label" for="PainAbdomen">
                PainAbdomen
            </label>
        </div>
        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Detail</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Jaundice">
            <label class="form-check-label" for="Jaundice">
                Jaundice
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="AbdominalDistension">
            <label class="form-check-label" for="AbdominalDistension">
                Abdominal Distension
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="FeelingOfMass">
            <label class="form-check-label" for="FeelingOfMass">
                Feeling Of Mass
            </label>
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Detail</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>



        <h3 style="text-align: center;">Urinary System</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="BurningMicturition">
            <label class="form-check-label" for="BurningMicturition">
                Burning Micturition
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Frequency">
            <label class="form-check-label" for="Frequency">
                Frequency
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="UrinaryUrgency">
            <label class="form-check-label" for="UrinaryUrgency">
                Urinary Urgency
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="BloodInUrine">
            <label class="form-check-label" for="BloodInUrine">
                Blood In Urine
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="PUSInUrine">
            <label class="form-check-label" for="PUSInUrine">
                PUS In Urine
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="UrinaryInContinence">
            <label class="form-check-label" for="UrinaryInContinence">
                Urinary In Continence
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="LoinToGroinPain">
            <label class="form-check-label" for="LoinToGroinPain">
                Loin To Groin Pain
            </label>
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Detail</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="LumbarPain">
            <label class="form-check-label" for="LumbarPain">
                Lumbar Pain
            </label>
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Detail</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="PeriorbitalPuffiness">
            <label class="form-check-label" for="PeriorbitalPuffiness">
                Periorbital Puffiness
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="LowBackache">
            <label class="form-check-label" for="LowBackache">
                Low Backache
            </label>
        </div>

        <h3 style="text-align: center;">Genital System</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="TesticularPain">
            <label class="form-check-label" for="TesticularPain">
                Testicular Pain
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="TestcularSwelling">
            <label class="form-check-label" for="TestcularSwelling">
                Testcular Swelling
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="UretheralDischarge">
            <label class="form-check-label" for="UretheralDischarge">
                Uretheral Discharge
            </label>
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Detail</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="IllicitRelations">
            <label class="form-check-label" for="IllicitRelations">
                Illicit Relations
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="LowerAbdominaPain">
            <label class="form-check-label" for="LowerAbdominaPain">
                Lower Abdomina Pain
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="PainfulCoitus">
            <label class="form-check-label" for="PainfulCoitus">
                Painful Coitus
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="PainLowerAbdomenWhichWorsenOnJarringMovements">
            <label class="form-check-label" for="PainLowerAbdomenWhichWorsenOnJarringMovements">
                Pain Lower Abdomen Which Worsen On Jarring Movements
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="WorsenDuringOrAfterMenses">
            <label class="form-check-label" for="WorsenDuringOrAfterMenses">
                Worsen During Or After Menses
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="AbnormalVaginalDiscarge">
            <label class="form-check-label" for="AbnormalVaginalDiscarge">
                Abnormal Vaginal Discarge
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="PostcoitalBleeding">
            <label class="form-check-label" for="PostcoitalBleeding">
                Postcoital Bleeding
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="IntermensturalBleeding">
            <label class="form-check-label" for="IntermensturalBleeding">
                Intermenstural Bleeding
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Menhorrhagia">
            <label class="form-check-label" for="Menhorrhagia">
                Menhorrhagia
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="BreastPain">
            <label class="form-check-label" for="BreastPain">
                Breast Pain
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="AbnormalNippleDischarge">
            <label class="form-check-label" for="AbnormalNippleDischarge">
                Abnormal Nipple Discharge
            </label>
        </div>

        <h3 style="text-align: center;">Nervous System</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Headache">
            <label class="form-check-label" for="Headache">
                Headache
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="NeckStiffness">
            <label class="form-check-label" for="NeckStiffness">
                Neck Stiffness
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="PainInNeck">
            <label class="form-check-label" for="PainInNeck">
                Pain In Neck
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Syncope">
            <label class="form-check-label" for="Syncope">
                Syncope
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="AlteredSesnorium">
            <label class="form-check-label" for="AlteredSesnorium">
                Altered Sesnorium
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="IrrelevantTalk">
            <label class="form-check-label" for="IrrelevantTalk">
                IrrelevantTalk
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Fits+feet">
            <label class="form-check-label" for="Fits">
                Fits
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="DecMemory">
            <label class="form-check-label" for="DecMemory">
                Dec Memory
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Ataxia">
            <label class="form-check-label" for="Ataxia">
                Ataxia
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="DoubleVision">
            <label class="form-check-label" for="DoubleVision">
                Double Vision
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Ptosis">
            <label class="form-check-label" for="Ptosis">
                Ptosis
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="WeaknessOfAnyPartOfBody">
            <label class="form-check-label" for="WeaknessOfAnyPartOfBody">
                Weakness Of Any Part Of Body
            </label>
        </div>
        <div class="input-group col-md-10">
            <div  style="width: 100px;">Detail</div>
            <input  class="form-control" placeholder="">
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="SensorySymptoms">
            <label class="form-check-label" for="SensorySymptoms">
                Sensory Symptoms
            </label>
        </div>
        <div class="input-group col-md-10">
            <div  style="width: 100px;">Detail</div>
            <input  class="form-control" placeholder="">
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="DecVision">
            <label class="form-check-label" for="DecVision">
                Dec Vision
            </label>
        </div>

        <div class="input-group col-md-10">
            <div  style="width: 100px;">Detail</div>
            <input  class="form-control" placeholder="">
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="FacialDeviationTo">
            <label class="form-check-label" for="FacialDeviationTo">
                Facial Deviation To
            </label>
        </div>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">To Side</div>
            <input  class="form-control" placeholder="">
        </div>
        <h3 style="text-align: center;">Hematology</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="EasyBruisibility">
            <label class="form-check-label" for="EasyBruisibility">
                Easy Bruisibility
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="SpontaneousBleeding">
            <label class="form-check-label" for="SpontaneousBleeding">
                Spontaneous Bleeding
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Epistaxis">
            <label class="form-check-label" for="Epistaxis">
                Epistaxis
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Hemoptysis">
            <label class="form-check-label" for="Hemoptysis">
                Hemoptysis
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Hemetemsis">
            <label class="form-check-label" for="Hemetemsis">
                Hemetemsis
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Melena">
            <label class="form-check-label" for="Melena">
                Melena
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Hematochezia">
            <label class="form-check-label" for="Hematochezia">
                Hematochezia
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Hematuria">
            <label class="form-check-label" for="Hematuria">
                Hematuria
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="AbnormalPVBleeding">
            <label class="form-check-label" for="AbnormalPVBleeding">
                Abnormal PV Bleeding
            </label>
        </div>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">Others Bleeding</div>
            <input  class="form-control" placeholder="">
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="LumpsBumpsInBody">
            <label class="form-check-label" for="LumpsBumpsInBody">
                Lumps Bumps In Body
            </label>
        </div>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">Details</div>
            <input  class="form-control" placeholder="">
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="SymptomsOfAnemia">
            <label class="form-check-label" for="SymptomsOfAnemia">
                Symptoms Of Anemia
            </label>
        </div>
        <h3 style="text-align: center;">Dermatology</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Rash">
            <label class="form-check-label" for="Rash">
                Rash
            </label>
        </div>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">Details</div>
            <input  class="form-control" placeholder="">
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="LocalSwellingOf">
            <label class="form-check-label" for="LocalSwellingOf">
                Local Swelling Of
            </label>
        </div>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">Details</div>
            <input  class="form-control" placeholder="">
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Warm">
            <label class="form-check-label" for="Warm">
                Warm
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Painful">
            <label class="form-check-label" for="Painful">
                Painful
            </label>
        </div>

        <h3 style="text-align: center;">MSK/Auto Immune</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="JointPains">
            <label class="form-check-label" for="JointPains">
                Joint Pains
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="JointSwelling">
            <label class="form-check-label" for="JointSwelling">
                Joint Swelling
            </label>
        </div>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">Details</div>
            <input  class="form-control" placeholder="">
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="MusclePain">
            <label class="form-check-label" for="MusclePain">
                Muscle Pain
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="MuscleSpasm">
            <label class="form-check-label" for="MuscleSpasm">
                Muscle Spasm
            </label>
        </div>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">Details</div>
            <input  class="form-control" placeholder="">
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="" id="BackAche">
            <label class="form-check-label" for="BackAche">
                Backache
            </label>
        </div>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">Details</div>
            <input  class="form-control" placeholder="">
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="OralUlcers">
            <label class="form-check-label" for="OralUlcers">
                Oral Ulcers
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Alopecia">
            <label class="form-check-label" for="Alopecia">
                Alopecia
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="PhotoSesnitvity">
            <label class="form-check-label" for="PhotoSesnitvity">
                Photo Sesnitvity
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="RashOnFace">
            <label class="form-check-label" for="RashOnFace">
                Rash On Face
            </label>
        </div>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">Details</div>
            <input  class="form-control" placeholder="">
        </div>

        <select class="form-select col-md-6" aria-label="Default select example">
            <option value="1">Malar Rash</option>
            <option value="2">Discoid Rash</option>
            <option value="3">Heliotrope Rash</option>
        </select>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="ProximalMyopathy">
            <label class="form-check-label" for="ProximalMyopathy">
                Proximal Myopathy
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="RedOrPurpleSpots">
            <label class="form-check-label" for="RedOrPurpleSpots">
                Red Or Purple Spots
            </label>
        </div>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">Details</div>
            <input  class="form-control" placeholder="">
        </div>

        <h3 style="text-align: center;">CVS</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Syncope">
            <label class="form-check-label" for="Syncope">
                Syncope
            </label>
        </div>

        <div class="input-group col-md-4">
            <div  style="width: 100px;">Details</div>
            <input  class="form-control" placeholder="">
        </div>

        <select class="form-select col-md-4" aria-label="Default select example">
            <option value="1">At Rest</option>
            <option value="2">During Activity</option>
            <option value="3">Heliotrope Rash</option>
        </select>
&nbsp&nbsp&nbsp&nbsp
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="ChestPain">
            <label class="form-check-label" for="ChestPain">
                Chest Pain
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Dyspnoea">
            <label class="form-check-label" for="Dyspnoea">
                Dyspnoea
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Orthopnea">
            <label class="form-check-label" for="Orthopnea">
                Orthopnea
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="PND">
            <label class="form-check-label" for="PND">
                PND
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Palpitations">
            <label class="form-check-label" for="Palpitations">
                Palpitations
            </label>
        </div>

        <h3 style="text-align: center;">Past History</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="DM">
            <label class="form-check-label" for="DM">
                DM
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="HTN">
            <label class="form-check-label" for="HTN">
                HTN
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="IHD">
            <label class="form-check-label" for="IHD">
                IHD
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="TB">
            <label class="form-check-label" for="TB">
                TB
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Asthma">
            <label class="form-check-label" for="Asthma">
                Asthma
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Hepatitis">
            <label class="form-check-label" for="Hepatitis">
                Hepatitis
            </label>
        </div>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">Others</div>
            <input  class="form-control" placeholder="">
        </div>
        <div class="input-group col-md-8">
            <div  style="width: 100px;">Past Surgical HX</div>
            <input  class="form-control" placeholder="">
        </div>

        <h3 style="text-align: center;">Family History</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Tuberculosis">
            <label class="form-check-label" for="Tuberculosis">
                Tuberculosis
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="AnyFamilyMemberHasSimilarIllness">
            <label class="form-check-label" for="AnyFamilyMemberHasSimilarIllness">
                Any Family Member Has Similar Illness
            </label>
        </div>

        <h3 style="text-align: center;">Personal History</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="ActiveSmoker">
            <label class="form-check-label" for="ActiveSmoker">
                Active Smoker
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="ExSmoker">
            <label class="form-check-label" for="ExSmoker">
                Ex Smoker
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Alcoholic">
            <label class="form-check-label" for="Alcoholic">
                Alcoholic
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="IVDrugAbuser">
            <label class="form-check-label" for="IVDrugAbuser">
                IV Drug Abuser
            </label>
        </div>
        <div class="input-group col-md-6">
            <div  style="width: 100px;">Others</div>
            <input  class="form-control" placeholder="">
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="IllicitRelations">
            <label class="form-check-label" for="IllicitRelations">
                Illicit Relations
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="Promiscuous">
            <label class="form-check-label" for="Promiscuous">
                Promiscuous
            </label>
        </div>

        <h3 style="text-align: center;">Occupation Residence History </h3>

        <div class="input-group col-md-8">
            <div  style="width: 100px;">Job</div>
            <input  class="form-control" placeholder="">
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="AnyColleagueHasSimilarIllness">
            <label class="form-check-label" for="AnyColleagueHasSimilarIllness">
                Any Colleague Has Similar Illness
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="AnyPetsAnimalAtHome">
            <label class="form-check-label" for="AnyPetsAnimalAtHome">
                Any Pets Animal At Home
            </label>
        </div>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">Detail</div>
            <input  class="form-control" placeholder="">
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="AnyHealthConcernAtJob">
            <label class="form-check-label" for="AnyHealthConcernAtJob">
                Any Health Concern At Job
            </label>
        </div>

        <h3 style="text-align: center;">Patient Concern </h3>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">Concerns</div>
            <input  class="form-control" placeholder="">
        </div>
        <div class="input-group col-md-12">
            <div  style="width: 100px;">Summary</div>
                <textarea style="height:300px" class="form-control" placeholder="" id="Summary"></textarea>
            <span class="input-group-btn">
              <button class="btn btn-success " style="height:300px;width:100px">Copy Summary</button>
            </span>
        </div>

        <div><div></div></div>

    </form>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
</body>
</html>
