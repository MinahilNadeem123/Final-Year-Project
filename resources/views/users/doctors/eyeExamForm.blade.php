<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Eye form</title>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<div class="container">
    <form  class="row g-3">
        <h3 style="text-align: center;">Eyes Summary</h3>
        <div class="col-6">
            <label for="eyesummary" class="form-label">Eyes Summary</label>
            <input type="text" class="form-control" id="eyesummary" placeholder="">
        </div>
        <div class="col-6">
            <label for="Pallorln" class="form-label">PallorlnConjuctiva</label>
            <input type="text" class="form-control" id="Pallorln" placeholder="">
        </div>
        <div class="col-6">
            <label for="Jaundice" class="form-label">Jaundice</label>
            <input type="text" class="form-control" id="Jaundice" placeholder="">
        </div>
        <div class="col-6">
            <label for="Arcus" class="form-label">Arcus</label>
            <input type="text" class="form-control" id="Arcus" placeholder="">
        </div>
        <div class="col-6">
            <label for="Calci" class="form-label">Calcification</label>
            <input type="text" class="form-control" id="Calci" placeholder="">
        </div>
        <div class="col-12 mb-5 mx-lg-auto" style="align-self: center;">
            <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
        </div>
    </form>
</div>


</body>
</html>
