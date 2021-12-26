<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>GIT Exam Form</title>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<div class="container">
    <form  class="row g-3" style="line-break: anywhere;">
        <h3 style="text-align: center;">GIT Exam Form</h3>
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
            <label for="AbdominalExamSummary" class="form-label">Abdominal Exam Summary</label>
            <input type="text" class="form-control" id="AbdominalExamSummary" placeholder="">
        </div>
        <div class="col-6">
            <label for="ShapeOfAbdomen" class="form-label">Shape Of Abdomen</label>
            <input type="text" class="form-control" id="ShapeOfAbdomen" placeholder="">
        </div>

        <div class="col-6">
            <label for="ShapeOfAbdomenDetails" class="form-label">Shape Of Abdomen Details</label>
            <input type="text" class="form-control" id="ShapeOfAbdomenDetails" placeholder="">
        </div>
        <div class="col-6">
            <label for="AbdomenMovingWithResp" class="form-label">Abdomen Moving With Resp </label>
            <input type="text" class="form-control" id="AbdomenMovingWithResp" placeholder="">
        </div>

        <div class="col-6">
            <label for="PatternOfBreathing" class="form-label">Pattern Of Breathing </label>
            <input type="text" class="form-control" id="PatternOfBreathing" placeholder="">
        </div>
        <div class="col-6">
            <label for="DivaricationOfRect" class="form-label">Divarication Of Rect</label>
            <input type="text" class="form-control" id="DivaricationOfRect" placeholder="">
        </div>

        <div class="col-6">
            <label for="UmbilicusSummary" class="form-label">Umbilicus Summary
            </label>
            <input type="text" class="form-control" id="UmbilicusSummary" placeholder="">
        </div>

        <div class="col-6">
            <label for="UmbilicusPosition" class="form-label">Umbilicus Position    </label>
            <input type="text" class="form-control" id="UmbilicusPosition" placeholder="">
        </div>

        <div class="col-6">
            <label for="UmbilicusMargins" class="form-label">Umbilicus Margins</label>
            <input type="text" class="form-control" id="UmbilicusMargins" placeholder="">
        </div>


        <div class="col-6">
            <label for="UmbilicusShape" class="form-label">Umbilicus Shape</label>
            <input type="text" class="form-control" id="UmbilicusShape" placeholder="">
        </div>

        <div class="col-6">
            <label for="VisibleSkinDeformity" class="form-label">Visible Skin Deformity</label>
            <input type="text" class="form-control" id="VisibleSkinDeformity" placeholder="">
        </div>
        <div class="col-6">
            <label for="VisibleVeins" class="form-label">Visible Veins</label>
            <input type="text" class="form-control" id="VisibleVeins" placeholder="">
        </div>

        <div class="col-6">
            <label for="VisibleVeinsFlow" class="form-label">Visible Veins Flow</label>
            <input type="text" class="form-control" id="VisibleVeinsFlow" placeholder="">
        </div>
        <div class="col-6">
            <label for="ScarMarks" class="form-label">Scar Marks</label>
            <input type="text" class="form-control" id="ScarMarks" placeholder="">
        </div>

        <div class="col-6">
            <label for="AsciticTapMarks" class="form-label">Ascitic Tap Marks</label>
            <input type="text" class="form-control" id="AsciticTapMarks" placeholder="">
        </div>
        <div class="col-6">
            <label for="AdhesiveStickingApplied" class="form-label">Adhesive Sticking Applied</label>
            <input type="text" class="form-control" id="AdhesiveStickingApplied" placeholder="">
        </div>
        <div class="col-6">
            <label for="PubicHairDistribution" class="form-label">Pubic Hair Distribution </label>
            <input type="text" class="form-control" id="PubicHairDistribution" placeholder="">
        </div>

        <div class="col-6">
            <label for="HernialOrifices" class="form-label">Hernial Orifices </label>
            <input type="text" class="form-control" id="HernialOrifices" placeholder="">
        </div>
        <div class="col-6">
            <label for="HernialExamDetails" class="form-label">Hernial Exam Details</label>
            <input type="text" class="form-control" id="HernialExamDetails" placeholder="">
        </div>

        <div class="col-6">
            <label for="InguinalLymphNodes" class="form-label">Inguinal Lymph Nodes</label>
            <input type="text" class="form-control" id="InguinalLymphNodes" placeholder="">
        </div>
        <div class="col-6">
            <label for="AbdomenFeel" class="form-label">Abdomen Feel</label>
            <input type="text" class="form-control" id="AbdomenFeel" placeholder="">
        </div>

        <div class="col-6">
            <label for="AbdomenTenderness" class="form-label">Abdomen Tenderness</label>
            <input type="text" class="form-control" id="AbdomenTenderness" placeholder="">
        </div>
        <div class="col-6">
            <label for="LiverPalpable" class="form-label">Liver Palpable  </label>
            <input type="text" class="form-control" id="LiverPalpable" placeholder="">
        </div>

        <div class="col-6">
            <label for="LiverSpanInFingers" class="form-label">Liver Span In Fingers</label>
            <input type="text" class="form-control" id="LiverSpanInFingers" placeholder="">
        </div>
        <div class="col-6">
            <label for="LeftLobePalpable" class="form-label">Left Lobe Palpable</label>
            <input type="text" class="form-control" id="LeftLobePalpable" placeholder="">
        </div>

        <div class="col-6">
            <label for="LiverUpperBorder" class="form-label">Liver Upper Border</label>
            <input type="text" class="form-control" id="LiverUpperBorder" placeholder="">
        </div>
        <div class="col-6">
            <label for="LiverPaninCM" class="form-label">Liver Panin CM</label>
            <input type="text" class="form-control" id="LiverPaninCM" placeholder="">
        </div>

        <div class="col-6">
            <label for="LiverEdge" class="form-label">Liver Edge</label>
            <input type="text" class="form-control" id="LiverEdge" placeholder="">
        </div>
        <div class="col-6">
            <label for="LiverSurface" class="form-label">Liver Surface</label>
            <input type="text" class="form-control" id="LiverSurface" placeholder="">
        </div>

        <div class="col-6">
            <label for="LiverTenderness" class="form-label">Liver Tenderness</label>
            <input type="text" class="form-control" id="LiverTenderness" placeholder="">
        </div>
        <div class="col-6">
            <label for="SpleenPalpable" class="form-label">Spleen Palpable</label>
            <input type="text" class="form-control" id="SpleenPalpable" placeholder="">
        </div>

        <div class="col-6">
            <label for="SpleenPalpableInWhichPosition" class="form-label">Spleen Palpable In Which Position</label>
            <input type="text" class="form-control" id="SpleenPalpableInWhichPosition" placeholder="">
        </div>
        <div class="col-6">
            <label for="SpleenPalpableByWhichMethod" class="form-label">Spleen Palpable By Which Method</label>
            <input type="text" class="form-control" id="SpleenPalpableByWhichMethod" placeholder="">
        </div>

        <div class="col-6">
            <label for="SpleenPalpableInFingers" class="form-label">Spleen Palpable In Fingers</label>
            <input type="text" class="form-control" id="SpleenPalpableInFingers" placeholder="">
        </div>

        <div class="col-6">
            <label for="SpleenPalpableInCM" class="form-label">Spleen Palpable In CM</label>
            <input type="text" class="form-control" id="SpleenPalpableInCM" placeholder="">
        </div>

        <div class="col-6">
            <label for="SpleenTenderness" class="form-label">Spleen Tenderness</label>
            <input type="text" class="form-control" id="SpleenTenderness" placeholder="">
        </div>

        <div class="col-6">
            <label for="KidneysPalpable" class="form-label">Kidneys Palpable</label>
            <input type="text" class="form-control" id="KidneysPalpable" placeholder="">
        </div>

        <div class="col-6">
            <label for="ParaaorticLymphNodesPalpable" class="form-label">Paraaortic Lymph Nodes Palpable</label>
            <input type="text" class="form-control" id="ParaaorticLymphNodesPalpable" placeholder="">
        </div>

        <div class="col-6">
            <label for="UrinaryBladderIsPalpableAndDull" class="form-label">Urinary Bladder Is Palpable And Dull</label>
            <input type="text" class="form-control" id="UrinaryBladderIsPalpableAndDull" placeholder="">
        </div>

        <div class="col-6">
            <label for="AbdominalPulsationExpansile" class="form-label">Abdominal Pulsation Expansile</label>
            <input type="text" class="form-control" id="AbdominalPulsationExpansile" placeholder="">
        </div>

        <div class="col-6">
            <label for="ShiftingDullness" class="form-label">Shifting Dullness</label>
            <input type="text" class="form-control" id="ShiftingDullness" placeholder="">
        </div>

        <div class="col-6">
            <label for="FluidThrill" class="form-label">Fluid Thrill</label>
            <input type="text" class="form-control" id="FluidThrill" placeholder="">
        </div>

        <div class="col-6">
            <label for="BowelSoundsAudible" class="form-label">Bowel Sounds Audible</label>
            <input type="text" class="form-control" id="BowelSoundsAudible" placeholder="">
        </div>

        <div class="col-6">
            <label for="BowelSoundsDetails" class="form-label">Bowel Sounds Details</label>
            <input type="text" class="form-control" id="BowelSoundsDetails" placeholder="">
        </div>

        <div class="col-6">
            <label for="HepaticRubPresent" class="form-label">Hepatic Rub Present</label>
            <input type="text" class="form-control" id="HepaticRubPresent" placeholder="">
        </div>

        <div class="col-6">
            <label for="SplenicRubPresent" class="form-label">Splenic Rub Present</label>
            <input type="text" class="form-control" id="SplenicRubPresent" placeholder="">
        </div>

        <div class="col-6">
            <label for="RenalBruitAudible" class="form-label">Renal Bruit Audible</label>
            <input type="text" class="form-control" id="RenalBruitAudible" placeholder="">
        </div>

        <div class="col-6">
            <label for="PerRectalExamDetail" class="form-label">Per Rectal Exam Detail</label>
            <input type="text" class="form-control" id="PerRectalExamDetail" placeholder="">
        </div>

        <div class="col-6">
            <label for="TesticularAtrophy" class="form-label">Testicular Atrophy</label>
            <input type="text" class="form-control" id="TesticularAtrophy" placeholder="">
        </div>

        <div class="col-6">
            <label for="KFRings" class="form-label">KF Rings</label>
            <input type="text" class="form-control" id="KFRings" placeholder="">
        </div>

        <div class="col-6">
            <label for="SlitLampExam" class="form-label">Slit Lamp Exam</label>
            <input type="text" class="form-control" id="SlitLampExam" placeholder="">
        </div>



        <div class="col-12 mb-5 mx-lg-auto" style="align-self: center;">
            <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
        </div>
    </form>
</div>
</body>
</html>
