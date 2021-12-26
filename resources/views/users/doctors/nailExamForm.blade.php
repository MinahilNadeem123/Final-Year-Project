<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Nail Examination Form</title>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<div class="container">
    <form  class="row g-3">
        <h3 style="text-align: center;">Nail Examination Form</h3>
        <div class="col-6">
            <label class="form-check-label" for="Clubbing">Clubbing</label>
            <input  type="text" class="form-control" value="" id="Clubbing">
        </div>
        <div class="col-6">
            <label class="form-check-label" for="OpcClub">OpcClubbingGrades</label>
            <input  type="text" class="form-control" value="" id="OpcClub">
        </div>
        <div class="col-6">
            <label for="Leuconychia" class="form-label">Leuconychia</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="checkbox" class="form-check-input" id="Leuconychia" placeholder="">
        </div>
        <div class="col-6">
            <label for="Koilonychia" class="form-label">Koilonychia</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="checkbox" class="form-check-input" id="Koilonychia" placeholder="">
        </div>

        <div class="col-6">
            <label class="form-check-label" for="Splinter">SplinterHemorrhages</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input  type="checkbox" class="form-check-input" value="" id="Splinter">
        </div>
        <div class="col-6">
            <label for="BeauSLine" class="form-label">BeauSLine</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="checkbox" class="form-check-input" id="BeauSLine" placeholder="">
        </div>
        <div class="col-6">
            <label for="Lind" class="form-label">LindsaysNails
            </label>
            <input type="text" class="form-control" id="Lind" placeholder="">
        </div>

        <div class="col-6">
            <label class="form-label" for="Mueh">
                Muehrckelines </label>
            <input class="form-control" type="text" value="" id="Mueh" placeholder="">
        </div>
        <div class="col-6">
            <label class="form-check-label" for="Clubbing">Clubbing</label>
            <input  type="text" class="form-control" value="" id="Clubbing">
        </div>

        <div class="col-6">
            <label for="Mees" class="form-label">MeesLine</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="checkbox" class="form-check-input" id="Mees" placeholder="">
        </div>
        <div class="col-6">
            <label for="NailFold" class="form-label">NailFoldTelangectasia
            </label>
            <input type="text" class="form-control" id="NailFold" placeholder="">
        </div>

        <div class="col-6">
            <label for="NailPitting" class="form-label">NailPitting
            </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="checkbox" class="form-check-input" id="NailPitting" placeholder="">
        </div>

        <div class="col-6">
            <label for="Onycholysis" class="form-label">Onycholysis
            </label>
            <input type="text" class="form-control" id="Onycholysis" placeholder="">
        </div>
        <div class="col-6">
            <label for="Onychomycosis" class="form-label">Onychomycosis
            </label>
            <input type="text" class="form-control" id="Onychomycosis" placeholder="">
        </div>
        <div class="col-6">
            <label for="Quin" class="form-label">QuinckesSign
            </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="checkbox" class="form-check-input" id="Quin" placeholder="">
        </div>
        <div class="col-6">
            <label for="Discolor" class="form-label">DiscolorationOfNails
            </label>
            <input type="text" class="form-control" id="Discolor" placeholder="">
        </div>
        <div class="col-6">
            <label for="opcDiscolor" class="form-label">opcDiscolorationOfNails
            </label>
            <input type="text" class="form-control" id="opcDiscolor" placeholder="">
        </div>
        <div class="col-6">
            <label for="NailsOther" class="form-label">NailsOther
            </label>
            <input type="text" class="form-control" id="NailsOther" placeholder="">
        </div>
        <div class="col-12 mb-5 mx-lg-auto" style="align-self: center;">
            <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
        </div>
    </form>
</div>
</body>
</html>
