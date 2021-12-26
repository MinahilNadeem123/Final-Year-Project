<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>GCS Somi Higher Function Exam Form</title>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<div class="container">
    <form  class="row g-3" style="line-break: anywhere;">
        <h3 style="text-align: center;">GCS Somi Higher Function Exam Form</h3>
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
            <label for="Consciousness" class="form-label">Consciousness</label>
            <input type="text" class="form-control" id="Consciousness" placeholder="">
        </div>
        <div class="col-6">
            <label for="GCS" class="form-label">GCS</label>
            <input type="text" class="form-control" id="GCS" placeholder="">
        </div>

        <div class="col-6">
            <label for="Somi" class="form-label">Somi</label>
            <input type="text" class="form-control" id="Somi" placeholder="">
        </div>
        <div class="col-6">
            <label for="NeckRigidity" class="form-label">Neck Rigidity </label>
            <input type="text" class="form-control" id="NeckRigidity" placeholder="">
        </div>

        <div class="col-6">
            <label for="KernigSign" class="form-label">Kernig Sign </label>
            <input type="text" class="form-control" id="KernigSign" placeholder="">
        </div>
        <div class="col-6">
            <label for="BrudzinkiSign" class="form-label">Brudzinki Sign</label>
            <input type="text" class="form-control" id="BrudzinkiSign" placeholder="">
        </div>

        <div class="col-6">
            <label for="SpeechAssessment" class="form-label">Speech Assessment  </label>
            <input type="text" class="form-control" id="SpeechAssessment" placeholder="">
        </div>

        <div class="col-6">
            <label for="FirstLanguage" class="form-label">First Language</label>
            <input type="text" class="form-control" id="FirstLanguage" placeholder="">
        </div>

        <div class="col-6">
            <label for="Handedness" class="form-label">Handedness</label>
            <input type="text" class="form-control" id="Handedness" placeholder="">
        </div>


        <div class="col-6">
            <label for="LiteracyLevels" class="form-label">Literacy Levels</label>
            <input type="text" class="form-control" id="LiteracyLevels" placeholder="">
        </div>

        <div class="col-6">
            <label for="WeaknessOfAnyLimbOfBody" class="form-label">Weakness Of Any Limb Of Body</label>
            <input type="text" class="form-control" id="WeaknessOfAnyLimbOfBody" placeholder="">
        </div>
        <div class="col-6">
            <label for="VisionIntact" class="form-label">Vision Intact</label>
            <input type="text" class="form-control" id="VisionIntact" placeholder="">
        </div>

        <div class="col-6">
            <label for="RateOfSpeech" class="form-label">Rate Of Speech</label>
            <input type="text" class="form-control" id="RateOfSpeech" placeholder="">
        </div>
        <div class="col-6">
            <label for="FluencyOfSpeech" class="form-label">Fluency Of Speech</label>
            <input type="text" class="form-control" id="FluencyOfSpeech" placeholder="">
        </div>

        <div class="col-6">
            <label for="DoesNotMakeSense" class="form-label">Does Not Make Sense</label>
            <input type="text" class="form-control" id="DoesNotMakeSense" placeholder="">
        </div>
        <div class="col-6">
            <label for="Comprehension" class="form-label">Comprehension</label>
            <input type="text" class="form-control" id="Comprehension" placeholder="">
        </div>
        <div class="col-6">
            <label for="YesNoCommandWrong" class="form-label">Yes No Command Wrong</label>
            <input type="text" class="form-control" id="YesNoCommandWrong" placeholder="">
        </div>

        <div class="col-6">
            <label for="SimpleCommandWrong" class="form-label">Simple Command Wrong </label>
            <input type="text" class="form-control" id="SimpleCommandWrong" placeholder="">
        </div>
        <div class="col-6">
            <label for="ComplexCommandWrong" class="form-label">Complex Command Wrong</label>
            <input type="text" class="form-control" id="ComplexCommandWrong" placeholder="">
        </div>

        <div class="col-6">
            <label for="NamingAssessment" class="form-label">Naming Assessment</label>
            <input type="text" class="form-control" id="NamingAssessment" placeholder="">
        </div>
        <div class="col-6">
            <label for="CantNameFamiliarObjects" class="form-label">Cant Name Familiar Objects</label>
            <input type="text" class="form-control" id="CantNameFamiliarObjects" placeholder="">
        </div>

        <div class="col-6">
            <label for="CantName18-22AnimalsIn1Min" class="form-label">Cant Name 18-22 Animals In 1 Min</label>
            <input type="text" class="form-control" id="CantName18-22AnimalsIn1Min" placeholder="">
        </div>
        <div class="col-6">
            <label for="CantNameStartingWithAlphabets" class="form-label">Cant Name Starting With Alphabets</label>
            <input type="text" class="form-control" id="CantNameStartingWithAlphabets" placeholder="">
        </div>

        <div class="col-6">
            <label for="RepetitionImpaired" class="form-label">Repetition Impaired</label>
            <input type="text" class="form-control" id="RepetitionImpaired" placeholder="">
        </div>
        <div class="col-6">
            <label for="ReadingImpaired" class="form-label">Reading Impaired</label>
            <input type="text" class="form-control" id="ReadingImpaired" placeholder="">
        </div>

        <div class="col-6">
            <label for="Writing" class="form-label">Writing</label>
            <input type="text" class="form-control" id="Writing" placeholder="">
        </div>
        <div class="col-6">
            <label for="CalculationAssessment" class="form-label">Calculation Assessment</label>
            <input type="text" class="form-control" id="CalculationAssessment" placeholder="">
        </div>

        <div class="col-6">
            <label for="100-7Task" class="form-label">100-7 Task</label>
            <input type="text" class="form-control" id="100-7Task" placeholder="">
        </div>
        <div class="col-6">
            <label for="3+3Task" class="form-label">3+3Task</label>
            <input type="text" class="form-control" id="3+3Task" placeholder="">
        </div>

        <div class="col-6">
            <label for="ComplexCalculations" class="form-label">Complex Calculations</label>
            <input type="text" class="form-control" id="ComplexCalculations" placeholder="">
        </div>
        <div class="col-6">
            <label for="MemoryAssessment" class="form-label">Memory Assessment</label>
            <input type="text" class="form-control" id="MemoryAssessment" placeholder="">
        </div>

        <div class="col-6">
            <label for="MMSEScore" class="form-label">MMSE Score</label>
            <input type="text" class="form-control" id="MMSEScore" placeholder="">
        </div>



        <div class="col-12 mb-5 mx-lg-auto" style="align-self: center;">
            <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
        </div>
    </form>
</div>
</body>
</html>
