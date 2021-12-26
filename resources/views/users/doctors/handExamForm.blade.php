<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hands Exam Form</title>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<div class="container">
    <form  class="row g-3"  style="line-break: anywhere;">
        <h3 style="text-align: center;">Hands Exam Form</h3>
        <div class="col-6">
            <label for="Handshake" class="form-label">Handshake</label>
            <input type="text" class="form-control" id="Handshake" placeholder="">
        </div>

        <div class="col-6">
            <label for="TemperatureHands" class="form-label">TemperatureHands</label>
            <input type="text" class="form-control" id="TemperatureHands" placeholder="">
        </div>
        <div class="col-6">
            <label for="Sweating" class="form-label">Sweating</label>
            <input type="text" class="form-control" id="Sweating" placeholder="">
        </div>
        <div class="col-6">
            <label for="SkinTexture" class="form-label">SkinTexture</label>
            <input type="text" class="form-control" id="SkinTexture" placeholder="">
        </div>
        <br>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="Peripheral">
            <label class="form-check-label" for="Peripheral">
                PeripheralCyanosis
            </label>
        </div>
        <br>
        <div class="col-6">
            <label for="Deformity" class="form-label">Deformity</label>
            <input type="text" class="form-control" id="Deformity" placeholder="">
        </div>
        <div class="col-6">
            <label for="ShapeOfHands" class="form-label">ShapeOfHands</label>
            <input type="text" class="form-control" id="ShapeOfHands" placeholder="">
        </div>
        <div class="col-6">
            <label for="PallorOfSkin" class="form-label">PallorOfSkinCreases</label>
            <input type="text" class="form-control" id="PallorOfSkin" placeholder="">
        </div>
        <div class="col-6">
            <label for="PigmentationOf" class="form-label">PigmentationOfSkinCreases</label>
            <input type="text" class="form-control" id="PigmentationOf" placeholder="">
        </div>
        <div class="col-6">
            <label for="Palmar" class="form-label">PalmarErytheme</label>
            <input type="text" class="form-control" id="Palmar" placeholder="">
        </div>
        <div class="col-6">
            <label for="Dorsalg" class="form-label">DorsalGuttering</label>
            <input type="text" class="form-control" id="Dorsalg" placeholder="">
        </div>
        <div class="col-6">
            <label for="WastingOfPalm" class="form-label">WastingOfPalm</label>
            <input type="text" class="form-control" id="WastingOfPalm" placeholder="">
        </div>
        <div class="col-6">
            <label for="Dupuytrens" class="form-label">DupuytrensContracture</label>
            <input type="text" class="form-control" id="Dupuytrens" placeholder="">
        </div>
        <div class="col-6">
            <label for="SkinTightness" class="form-label">SkinTightness</label>
            <input type="text" class="form-control" id="SkinTightness" placeholder="">
        </div>
        <div class="col-6">
            <label for="HandOther" class="form-label">HandOther</label>
            <input type="text" class="form-control" id="HandOther" placeholder="">
        </div>
        <div class="col-6">
            <label for="Tremors" class="form-label">Tremors</label>
            <input type="text" class="form-control" id="Tremors" placeholder="">
        </div>

        <div class="col-6">
            <label for="Arachno" class="form-label">Arachnodactyly</label>
            <input type="text" class="form-control" id="Arachno" placeholder="">
        </div>
        <div class="col-6">
            <label for="Tobacco" class="form-label">TobaccoStainedFingers</label>
            <input type="text" class="form-control" id="Tobacco" placeholder="">
        </div>
        <div class="col-6">
            <label for="CalciumD" class="form-label">CalciumDepositsOnFingers</label>
            <input type="text" class="form-control" id="CalciumD" placeholder="">
        </div>
        <div class="col-6">
            <label for="PIPNodules" class="form-label">PIPNodules</label>
            <input type="text" class="form-control" id="PIPNodules" placeholder="">
        </div>
        <div class="col-6">
            <label for="DIPNOdules" class="form-label">DIPNOdules</label>
            <input type="text" class="form-control" id="DIPNOdules" placeholder="">
        </div>
        <div class="col-6">
            <label for="FingersOther" class="form-label">FingersOther</label>
            <input type="text" class="form-control" id="FingersOther" placeholder="">
        </div>
        <div class="col-6">
            <label for="nailformimage"></label>
            <input type="file" class="form-control" id="nailformimage" placeholder="">
        </div>
        <div class="col-12 mb-5 mx-lg-auto" style="align-self: center;">
            <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
        </div>
    </form>
</div>
</body>
</html>
