<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neck Form</title>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<h3 style="text-align: center;">Neck Form</h3>
<div class="container">
    <form  class="row g-3">
        <div class="col-6">
            <label for="JVP " class="form-label">JVP Details</label>
            <input type="text" class="form-control" id="JVP" placeholder="">
        </div>
        <div class="col-6">
            <label for="NeckVein" class="form-label">NeckVeinsEngorged</label>
            <input type="text" class="form-control" id="NeckVein" placeholder="">
        </div>
        <div class="col-6">
            <label for="Spider " class="form-label">SpiderAngiomas</label>
            <input type="text" class="form-control" id="Spider" placeholder="">
        </div>
        <div class="col-6">
            <label for="Sacral" class="form-label">SacralEdema</label>
            <input type="text" class="form-control" id="Sacral" placeholder="">
        </div>
        <div class="col-6">
            <label for="Spine " class="form-label">SpineTenderness</label>
            <input type="text" class="form-control" id="Spine" placeholder="">
        </div>
        <div class="col-6">
            <label for="Chest" class="form-label">ChestDeformity</label>
            <input type="text" class="form-control" id="Chest" placeholder="">
        </div>
        <div class="col-6">
            <label for="Gyne " class="form-label">Gynecomastia</label>
            <input type="text" class="form-control" id="Gyne" placeholder="">
        </div>
        <div class="col-6">
            <label for="Sternal" class="form-label">SternalTenderness</label>
            <input type="text" class="form-control" id="Sternal" placeholder="">
        </div>
        <div class="col-6">
            <label for="NeckChest" class="form-label">NeckChestAbdoSummary</label>
            <input type="text" class="form-control" id="NeckChest" placeholder="">
        </div>
        <br>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                JVPRaised
            </label>
        </div>
        <div class="col-12 mb-5 mx-lg-auto" style="align-self: center;">
            <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
        </div>




    </form>
</body>
</html>
