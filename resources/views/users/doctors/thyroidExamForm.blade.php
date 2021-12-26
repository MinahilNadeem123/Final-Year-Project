<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Thyroid Exam</title>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<div class="container">
    <form  class="row g-3">
        <h3 style="text-align: center;">Thyroid Exam Form</h3>

        <div class="col-6">
            <label for="Thyroiddetails" class="form-label">ThyroidDetails</label>
            <input type="text" class="form-control" id="Thyroiddetails" placeholder="">
        </div>
        <div class="col-6">
            <label for="Starring" class="form-label">Starring Look</label>
            <input type="text" class="form-control" id="Starring" placeholder="">
        </div>
        <div class="col-6">
            <label for="Pro" class="form-label">Protrusion Of Eyes</label>
            <input type="text" class="form-control" id="Pro" placeholder="">
        </div>
        <div class="col-6">
            <label for="Exop" class="form-label">Exophthalmos</label>
            <input type="text" class="form-control" id="Exop" placeholder="">
        </div>
        <div class="col-6">
            <label for="LigLag" class="form-label">LigLag</label>
            <input type="text" class="form-control" id="LigLag" placeholder="">
        </div>
        <div class="col-6">
            <label for="Lid" class="form-label">LidRetraction</label>
            <input type="text" class="form-control" id="Lid" placeholder="">
        </div>
        <div class="col-6">
            <label for="Loss" class="form-label">LossLateral 3rd Of Eyebrows</label>
            <input type="text" class="form-control" id="Loss" placeholder="">
        </div>
        <div class="col-6">
            <label for="Thyroid" class="form-label">ThyroidSummary</label>
            <input type="text" class="form-control" id="Thyroid" placeholder="">
        </div>
        <br>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                ThyroidEnlarged
            </label>
        </div>
        <div class="col-12 mb-5 mx-lg-auto" style="align-self: center;">
            <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
        </div>

        </form>
</div>
</body>
</html>
