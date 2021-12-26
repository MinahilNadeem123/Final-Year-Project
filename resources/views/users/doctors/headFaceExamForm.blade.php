<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Head Summary</title>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<div class="container">
    <form  class="row g-3">
        <h3 style="text-align: center;">Head Summary</h3>
        <div class="col-6">
            <label for="HeadFace" class="form-label">HeadFace Summary</label>
            <input type="text" class="form-control" id="HeadFace" placeholder="">
        </div>
        <div class="col-6">
            <label for="ScalDef" class="form-label">ScalDeformity</label>
            <input type="text" class="form-control" id="ScalDef" placeholder="">
        </div>
        <div class="col-6">
            <label for="Hairs" class="form-label">Hairs</label>
            <input type="text" class="form-control" id="Hairs" placeholder="">
        </div>
        <div class="col-6">
            <label for="ScalpOther" class="form-label">ScalpOther</label>
            <input type="text" class="form-control" id="ScalpOther" placeholder="">
        </div>
        <div class="col-6">
            <label for="Facial" class="form-label">FacialExpression</label>
            <input type="text" class="form-control" id="Facial" placeholder="">
        </div>
        <div class="col-6">
            <label for="FacialComplexion" class="form-label">FacialComplexion</label>
            <input type="text" class="form-control" id="FacialComplexion" placeholder="">
        </div>
        <div class="col-6">
            <label for="FacialAppearance" class="form-label">FacialAppearance</label>
            <input type="text" class="form-control" id="FacialAppearance" placeholder="">
        </div>
        <div class="col-6">
            <label for="FaceShape" class="form-label">FaceShape</label>
            <input type="text" class="form-control" id="FaceShape" placeholder="">
        </div>
        <div class="col-6">
            <label for="Perior" class="form-label">PeriorbitalPuffiness</label>
            <input type="text" class="form-control" id="Perior" placeholder="">
        </div>
        <div class="col-6">
            <label for="MalarRash" class="form-label">MalarRash</label>
            <input type="text" class="form-control" id="MalarRash" placeholder="">
        </div>
        <div class="col-6">
            <label for="DiscoidRash" class="form-label">DiscoidRash</label>
            <input type="text" class="form-control" id="DiscoidRash" placeholder="">
        </div>
        <div class="col-6">
            <label for="Lupus" class="form-label">LupusPernio</label>
            <input type="text" class="form-control" id="Lupus" placeholder="">
        </div>
        <div class="col-6">
            <label for="Adenoma" class="form-label">AdenomaSebacium</label>
            <input type="text" class="form-control" id="Adenoma" placeholder="">
        </div>
        <div class="col-6">
            <label for="Ears" class="form-label">Ears</label>
            <input type="text" class="form-control" id="Ears" placeholder="">
        </div>
        <div class="col-6">
            <label for="Nose" class="form-label">Nose</label>
            <input type="text" class="form-control" id="Nose" placeholder="">
        </div>
        <div class="col-12 mb-5 mx-lg-auto" style="align-self: center;">
            <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
        </div>
    </form>
</div>


</body>
</html>
