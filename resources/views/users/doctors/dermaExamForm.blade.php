<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Derma Form</title>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<div class="container">
    <form  class="row g-3" style="line-break: anywhere;">
        <h3 style="text-align: center;">Derma Form</h3>
        <div class="form-check">
            <label class="form-check-label" for="Hypopigmentations">Hypopigmentations</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="Hypopigmentations">

        </div>
        <div class="col-6">
            <label for="Hypopigmentationsdetails" class="form-label">Hypopigmentations Details</label>
            <input type="text" class="form-control" id="Hypopigmentationsdetails" placeholder="">
        </div>
        <div class="col-6">
            <label for="HypopigmentationsSop" class="form-label">HypopigmentationsSop</label>
            <input type="text" class="form-control" id="HypopigmentationsSop" placeholder="">
        </div>

        <div class="form-check">
            <label class="form-check-label" for="Hyperpigmentations">
                Hyperpigmentations
            </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="Hyperpigmentations">
        </div>
        <div class="col-6">
            <label for="HyperpigmentationDetails" class="form-label">HyperpigmentationDetails</label>
            <input type="text" class="form-control" id="HyperpigmentationDetails" placeholder="">
        </div>
        <div class="col-6">
            <label for="HyperpigmentationDetailsSop" class="form-label">HyperpigmentationDetailsSop
            </label>
            <input type="text" class="form-control" id="HyperpigmentationDetailsSop" placeholder="">
        </div>

        <div class="form-check">
            <label class="form-check-label" for="Bruises">
                Bruises </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="Bruises" placeholder="">
        </div>
        <div class="col-6">
            <label for="BruisesDetails" class="form-label">BruisesDetails</label>
            <input type="text" class="form-control" id="BruisesDetails" placeholder="">
        </div>
        <div class="col-6">
            <label for="BruisesDetailsOpc" class="form-label">BruisesDetailsOpc
            </label>
            <input type="text" class="form-control" id="BruisesDetailsOpc" placeholder="">
        </div>

        <div class="col-6">
            <label for="SkinOthers" class="form-label">SkinOthers
            </label>
            <input type="text" class="form-control" id="SkinOthers" placeholder="">
        </div>
        <div class="col-12 mb-5 mx-lg-auto" style="align-self: center;">
            <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
        </div>
    </form>
</div>
</body>
</html>
