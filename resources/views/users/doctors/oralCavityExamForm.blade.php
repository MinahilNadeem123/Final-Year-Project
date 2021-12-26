<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Oral Cavity</title>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<div class="container">
    <form  class="row g-3" style="line-break: anywhere;">
        <h3 style="text-align: center;">Oral Cavity Exam Form</h3>
        <div class="col-6">
            <label for="Oral" class="form-label">OralCavitySummary</label>
            <input type="text" class="form-control" id="Oral" placeholder="">
        </div>

        <div class="col-6">
            <label for="Central" class="form-label">CentralCyanosisOnLipsTongue</label>
            <input type="text" class="form-control" id="Central" placeholder="">
        </div>
        <div class="col-6">
            <label for="Angular" class="form-label">AngularStomatitis</label>
            <input type="text" class="form-control" id="Angular" placeholder="">
        </div>
        <div class="col-6">
            <label for="Lips" class="form-label">LipsOther</label>
            <input type="text" class="form-control" id="Lips" placeholder="">
        </div>
        <br>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="Oralulcers">
            <label class="form-check-label" for="Oralulcers">
                Oralulcers
            </label>
        </div>
        <br>
        <div class="col-6">
            <label for="OralUlcers" class="form-label">OralUlcersDetails</label>
            <input type="text" class="form-control" id="OralUlcers" placeholder="">
        </div>
        <div class="col-6">
            <label for="OralDetail" class="form-label">OralUlcersDetailsOPC</label>
            <input type="text" class="form-control" id="OralDetail" placeholder="">
        </div>
        <div class="col-6">
            <label for="Palate" class="form-label">Palate</label>
            <input type="text" class="form-control" id="Palate" placeholder="">
        </div>
        <div class="col-6">
            <label for="PalateDetails" class="form-label">PalateDetails</label>
            <input type="text" class="form-control" id="PalateDetails" placeholder="">
        </div>
        <div class="col-6">
            <label for="PalateDetailsopc" class="form-label">PalateDetailsOPC</label>
            <input type="text" class="form-control" id="PalateDetailsopc" placeholder="">
        </div>
        <div class="col-6">
            <label for="Uvula" class="form-label">Uvula</label>
            <input type="text" class="form-control" id="Uvula" placeholder="">
        </div>
        <div class="col-6">
            <label for="OralCavity" class="form-label">OralCavityOthers</label>
            <input type="text" class="form-control" id="OralCavity" placeholder="">
        </div>
        <div class="col-6">
            <label for="Macrog" class="form-label">Macroglossia</label>
            <input type="text" class="form-control" id="Macrog" placeholder="">
        </div>
        <div class="col-6">
            <label for="Glos" class="form-label">Glossia</label>
            <input type="text" class="form-control" id="Glos" placeholder="">
        </div>
        <div class="col-6">
            <label for="CyanosisTongue" class="form-label">CyanosisTongue</label>
            <input type="text" class="form-control" id="CyanosisTongue" placeholder="">
        </div>
        <div class="col-6">
            <label for="Pallor" class="form-label">PallorVentralSurfaceTongue</label>
            <input type="text" class="form-control" id="Pallor" placeholder="">
        </div>

        <div class="col-6">
            <label for="Colorof" class="form-label">ColorofTongue</label>
            <input type="text" class="form-control" id="Colorof" placeholder="">
        </div>
        <div class="col-6">
            <label for="TongueDeviation" class="form-label">TongueDeviation</label>
            <input type="text" class="form-control" id="TongueDeviation" placeholder="">
        </div>
        <div class="col-6">
            <label for="TongueOthers" class="form-label">TongueOthers</label>
            <input type="text" class="form-control" id="TongueOthers" placeholder="">
        </div>
        <div class="col-6">
            <label for="Prognathism" class="form-label">Prognathism</label>
            <input type="text" class="form-control" id="Prognathism" placeholder="">
        </div>
        <div class="col-12 mb-5 mx-lg-auto" style="align-self: center;">
            <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
        </div>
    </form>
</div>
</body>
</html>
