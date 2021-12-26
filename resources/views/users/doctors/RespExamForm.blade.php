<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Resp Exam Form</title>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<div class="container">
    <form  class="row g-3" style="line-break: anywhere;">
        <h3 style="text-align: center;">Resp Exam Form</h3>
        <div class="col-3">
            <label for="ID" class="form-label">ID</label>
            <input type="text" class="form-control" id="ID" placeholder="">
        </div>
        <div class="col-3">
            <label for="PatientNo" class="form-label">Patient No</label>
            <input type="text" class="form-control" id="PatientNo" placeholder="">
        </div>

        <div class="col-3">
            <label for="VisitNumber" class="form-label">Visit Number</label>
            <input type="text" class="form-control" id="VisitNumber" placeholder="">
        </div>
        <div class="col-3">
            <label for="MRN" class="form-label">MRN
            </label>
            <input type="text" class="form-control" id="MRN" placeholder="">
        </div>

        <div class="col-6">
            <label for="PatientName" class="form-label">Patient Name</label>
            <input type="text" class="form-control" id="PatientName" placeholder="">
        </div>
        <div class="col-6">
            <label for="DateOfVisit" class="form-label"> Date Of Visit
            </label>
            <input type="text" class="form-control" id="DateOfVisit" placeholder="">
        </div>

        <div class="col-6">
            <label for="InspectionSummary" class="form-label">Inspection Summary </label>
            <input type="text" class="form-control" id="InspectionSummary" placeholder="">
        </div>
        <div class="col-6">
            <label for="RespiratoryRate" class="form-label">Respiratory Rate</label>
            <input type="text" class="form-control" id="RespiratoryRate" placeholder="">
        </div>

        <div class="col-6">
            <label for="RespiratoryPattern" class="form-label">Respiratory Pattern</label>
            <input type="text" class="form-control" id="RespiratoryPattern" placeholder="">
        </div>
        <div class="col-6">
            <label for="ShapeOfChest" class="form-label">Shape Of Chest </label>
            <input type="text" class="form-control" id="ShapeOfChest" placeholder="">
        </div>

        <div class="col-6">
            <label for="SummetryOfChest" class="form-label">Summetry Of Chest             </label>
            <input type="text" class="form-control" id="SummetryOfChest" placeholder="">
        </div>
        <div class="col-6">
            <label for="MovingBLEqual" class="form-label">Moving BL Equal</label>
            <input type="text" class="form-control" id="MovingBLEqual" placeholder="">
        </div>

        <div class="col-6">
            <label for="VisibleVeins" class="form-label">Visible Veins
            </label>
            <input type="text" class="form-control" id="VisibleVeins" placeholder="">
        </div>

        <div class="col-6">
            <label for="Scars" class="form-label">Scars    </label>
            <input type="text" class="form-control" id="Scars" placeholder="">
        </div>

        <div class="col-6">
            <label for="Pulsation" class="form-label">Pulsation</label>
            <input type="text" class="form-control" id="Pulsation" placeholder="">
        </div>


        <div class="col-6">
            <label for="UsingAccessoryMuscles" class="form-label">Using Accessory Muscles</label>
            <input type="text" class="form-control" id="UsingAccessoryMuscles" placeholder="">
        </div>

        <div class="col-6">
            <label for="MovementOfAlaNasi" class="form-label">Movement Of Ala Nasi </label>
            <input type="text" class="form-control" id="MovementOfAlaNasi" placeholder="">
        </div>
        <div class="col-6">
            <label for="InterCostalRecessions" class="form-label">Inter Costal Recessions </label>
            <input type="text" class="form-control" id="InterCostalRecessions" placeholder="">
        </div>

        <div class="col-6">
            <label for="SubCostalRecession" class="form-label">Sub Costal Recession</label>
            <input type="text" class="form-control" id="SubCostalRecession" placeholder="">
        </div>
        <div class="col-6">
            <label for="SupraclavicularFossae" class="form-label">Supraclavicular Fossae </label>
            <input type="text" class="form-control" id="SupraclavicularFossae" placeholder="">
        </div>

        <div class="col-6">
            <label for="PursedLipsBreathing" class="form-label">Pursed Lips Breathing</label>
            <input type="text" class="form-control" id="PursedLipsBreathing" placeholder="">
        </div>
        <div class="col-6">
            <label for="EpigastricHernia" class="form-label">Epigastric Hernia </label>
            <input type="text" class="form-control" id="EpigastricHernia" placeholder="">
        </div>
        <div class="col-6">
            <label for="PalpatationSummary" class="form-label">Palpatation Summary
            </label>
            <input type="text" class="form-control" id="PalpatationSummary" placeholder="">
        </div>

        <div class="col-6">
            <label for="ChestTenderness" class="form-label">Chest Tenderness
            </label>
            <input type="text" class="form-control" id="ChestTenderness" placeholder="">
        </div>
        <div class="col-6">
            <label for="BoneTenderness" class="form-label">Bone Tenderness</label>
            <input type="text" class="form-control" id="BoneTenderness" placeholder="">
        </div>

        <div class="col-6">
            <label for="TracheaPosition" class="form-label">Trachea Position</label>
            <input type="text" class="form-control" id="TracheaPosition" placeholder="">
        </div>
        <div class="col-6">
            <label for="ApexBeatPosition" class="form-label">Apex Beat Position</label>
            <input type="text" class="form-control" id="ApexBeatPosition" placeholder="">
        </div>

        <div class="col-6">
            <label for="ApicalChestMovement" class="form-label">Apical Chest Movement</label>
            <input type="text" class="form-control" id="ApicalChestMovement" placeholder="">
        </div>
        <div class="col-6">
            <label for="ChestMovement" class="form-label">Chest Movement
            </label>
            <input type="text" class="form-control" id="ChestMovement" placeholder="">
        </div>

        <div class="col-6">
            <label for="ChestExpansionInCM" class="form-label">Chest Expansion In CM</label>
            <input type="text" class="form-control" id="ChestExpansionInCM" placeholder="">
        </div>
        <div class="col-6">
            <label for="CrepitationsPalpable" class="form-label">Crepitations Palpable</label>
            <input type="text" class="form-control" id="CrepitationsPalpable" placeholder="">
        </div>

        <div class="col-6">
            <label for="VocalFremitus" class="form-label">Vocal Fremitus </label>
            <input type="text" class="form-control" id="VocalFremitus" placeholder="">
        </div>
        <div class="col-6">
            <label for="PalpationOthers" class="form-label">Palpation Others</label>
            <input type="text" class="form-control" id="PalpationOthers" placeholder="">
        </div>

        <div class="col-6">
            <label for="PercussionSummary" class="form-label">Percussion Summary</label>
            <input type="text" class="form-control" id="PercussionSummary" placeholder="">
        </div>
        <div class="col-6">
            <label for="UpperBorderOfLiver" class="form-label">Upper Border Of Liver</label>
            <input type="text" class="form-control" id="UpperBorderOfLiver" placeholder="">
        </div>

        <div class="col-6">
            <label for="SupraclavicularPercussion" class="form-label">Supraclavicular Percussion</label>
            <input type="text" class="form-control" id="SupraclavicularPercussion" placeholder="">
        </div>
        <div class="col-6">
            <label for="UpperZonePercussion" class="form-label">Upper Zone Percussion   </label>
            <input type="text" class="form-control" id="UpperZonePercussion" placeholder="">
        </div>

        <div class="col-6">
            <label for="InterscapularPercussion" class="form-label">Interscapular Percussion</label>
            <input type="text" class="form-control" id="InterscapularPercussion" placeholder="">
        </div>
        <div class="col-6">
            <label for="BaseOfLungsPercussion" class="form-label">Base Of Lungs Percussion</label>
            <input type="text" class="form-control" id="BaseOfLungsPercussion" placeholder="">
        </div>

        <div class="col-6">
            <label for="LateralPercussion" class="form-label">Lateral Percussion </label>
            <input type="text" class="form-control" id="LateralPercussion" placeholder="">
        </div>

        <div class="col-6">
            <label for="PercussionOther" class="form-label">Percussion Other</label>
            <input type="text" class="form-control" id="PercussionOther" placeholder="">
        </div>

        <div class="col-6">
            <label for="AuscultationSummary" class="form-label">Auscultation Summary</label>
            <input type="text" class="form-control" id="AuscultationSummary" placeholder="">
        </div>

        <div class="col-6">
            <label for="BreathSoundIntensity" class="form-label">Breath Sound Intensity</label>
            <input type="text" class="form-control" id="BreathSoundIntensity" placeholder="">
        </div>

        <div class="col-6">
            <label for="BreathSoundDuration" class="form-label">Breath Sound Duration</label>
            <input type="text" class="form-control" id="BreathSoundDuration" placeholder="">
        </div>

        <div class="col-6">
            <label for="BreathSoundCharacter" class="form-label">Breath Sound Character</label>
            <input type="text" class="form-control" id="BreathSoundCharacter" placeholder="">
        </div>

        <div class="col-6">
            <label for="AbnormalAreas" class="form-label">Abnormal Areas</label>
            <input type="text" class="form-control" id="AbnormalAreas" placeholder="">
        </div>

        <div class="col-6">
            <label for="AddedSounds" class="form-label">Added Sounds</label>
            <input type="text" class="form-control" id="AddedSounds" placeholder="">
        </div>

        <div class="col-6">
            <label for="CrepitationsOnAusculation" class="form-label">Crepitations On Ausculation</label>
            <input type="text" class="form-control" id="CrepitationsOnAusculation" placeholder="">
        </div>

        <div class="col-6">
            <label for="Ronchi" class="form-label">Ronchi</label>
            <input type="text" class="form-control" id="Ronchi" placeholder="">
        </div>

        <div class="col-6">
            <label for="Rub" class="form-label">Rub</label>
            <input type="text" class="form-control" id="Rub" placeholder="">
        </div>

        <div class="col-6">
            <label for="VocalResonance" class="form-label">Vocal Resonance</label>
            <input type="text" class="form-control" id="VocalResonance" placeholder="">
        </div>

        <div class="col-6">
            <label for="WhipseringPectorlique" class="form-label">Whipsering Pectorlique</label>
            <input type="text" class="form-control" id="WhipseringPectorlique" placeholder="">
        </div>

        <div class="col-6">
            <label for="Aegophony" class="form-label">Aegophony</label>
            <input type="text" class="form-control" id="Aegophony" placeholder="">
        </div>

        <div class="col-6">
            <label for="CoinSign" class="form-label">Coin Sign</label>
            <input type="text" class="form-control" id="CoinSign" placeholder="">
        </div>

        <div class="col-6">
            <label for="TrachealTug" class="form-label">Tracheal Tug</label>
            <input type="text" class="form-control" id="TrachealTug" placeholder="">
        </div>

        <div class="col-6">
            <label for="ForcedExpiratoryTimeInSeconds" class="form-label">Forced Expiratory Time In Seconds</label>
            <input type="text" class="form-control" id="ForcedExpiratoryTimeInSeconds" placeholder="">
        </div>

        <div class="col-6">
            <label for="HypertrophicPulmonaryOsteoarthropathy" class="form-label">Hypertrophic Pulmonary Osteoarthropathy</label>
            <input type="text" class="form-control" id="HypertrophicPulmonaryOsteoarthropathy" placeholder="">
        </div>

        <div class="col-6">
            <label for="ProximalMyopathy" class="form-label">Proximal Myopathy</label>
            <input type="text" class="form-control" id="ProximalMyopathy" placeholder="">
        </div>

        <div class="col-6">
            <label for="HornerSyndrome" class="form-label">Horner Syndrome</label>
            <input type="text" class="form-control" id="HornerSyndrome" placeholder="">
        </div>

        <div class="col-6">
            <label for="NonpulsatileDistnderNeckVens" class="form-label">Nonpulsatile Distnder Neck Vens</label>
            <input type="text" class="form-control" id="NonpulsatileDistnderNeckVens" placeholder="">
        </div>

        <div class="col-6">
            <label for="P2Loud" class="form-label">P2 Loud</label>
            <input type="text" class="form-control" id="P2Loud" placeholder="">
        </div>

        <div class="col-6">
            <label for="Ascites" class="form-label">Ascites</label>
            <input type="text" class="form-control" id="Ascites" placeholder="">
        </div>

        <div class="col-6">
            <label for="Liver" class="form-label">Liver</label>
            <input type="text" class="form-control" id="Liver" placeholder="">
        </div>

        <div class="col-6">
            <label for="ErythemaNdosum" class="form-label">Erythema Ndosum</label>
            <input type="text" class="form-control" id="ErythemaNdosum" placeholder="">
        </div>

        <div class="col-6">
            <label for="Fundus" class="form-label">Fundus</label>
            <input type="text" class="form-control" id="Fundus" placeholder="">
        </div>

        <div class="col-6">
            <label for="BuffaloHump" class="form-label">Buffalo Hump</label>
            <input type="text" class="form-control" id="BuffaloHump" placeholder="">
        </div>

        <div class="col-6">
            <label for="ChestTubePlacement" class="form-label">Chest Tube Placement</label>
            <input type="text" class="form-control" id="ChestTubePlacement" placeholder="">
        </div>


        <div class="col-12 mb-5 mx-lg-auto" style="align-self: center;">
            <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
        </div>
    </form>
</div>
</body>
</html>
