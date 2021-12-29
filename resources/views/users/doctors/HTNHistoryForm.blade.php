<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>HTN History Form</title>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<h3 style="text-align: center;">Hypertension History</h3>
<hr>
<div class="container">
    <form class="row g-3">

        <div class="col-md-4">
            <label for="HTNDuration" class="form-label">HTN Duration</label>
            <input type="text" class="form-control" id="HTNDuration">
        </div>

        <div class="form-check col-md-4">
            <input class="form-check-input" type="checkbox" value="" id="newlydiagnosed">
            <label class="form-check-label" for="newlydiagnosed">
                Newly Diagnosed
            </label>
        </div>

        <div class="form-check col-md-4">
            <input class="form-check-input" type="checkbox" value="" id="newlydiagnosed">
            <label class="form-check-label" for="PastHXOfGestationalHTN">
                Past HX Of Gestational HTN
            </label>
        </div>
        <div class="col-md-12">
            <label for="CurrentDrugs" class="form-label">Current Drugs</label>
            <input type="number" class="form-control" id="CurrentDrugs">
        </div>

        <div class="col-md-4">
            <label for="DrugCompliance" class="form-label">DrugCompliance</label>
            <input type="text" class="form-control" id="DrugCompliance">
        </div>

        <div class="form-check col-md-4">
            <input class="form-check-input" type="checkbox" value="" id="Good">
            <label class="form-check-label" for="Good">
                Good
            </label>
        </div>

        <div class="form-check col-md-4">
            <input class="form-check-input" type="checkbox" value="" id="Poor">
            <label class="form-check-label" for="Poor">
               Poor
            </label>
        </div>


        <div class="col-md-4">
            <label for="DietCompliance" class="form-label">Diet Compliance</label>
            <input type="text" class="form-control" id="DietCompliance">
        </div>

        <div class="form-check col-md-4">
            <input class="form-check-input" type="checkbox" value="" id="Good">
            <label class="form-check-label" for="Good">
                Good
            </label>
        </div>

        <div class="form-check col-md-4">
            <input class="form-check-input" type="checkbox" value="" id="Poor">
            <label class="form-check-label" for="Poor">
                Poor
            </label>
        </div>

        <div class="col-md-4">
            <label for="Monitoring" class="form-label">Monitoring</label>
            <input type="text" class="form-control" id="Monitoring">
        </div>

        <div class="form-check col-md-4">
            <input class="form-check-input" type="checkbox" value="" id="Good">
            <label class="form-check-label" for="Good">
                Good
            </label>
        </div>

        <div class="form-check col-md-4">
            <input class="form-check-input" type="checkbox" value="" id="Poor">
            <label class="form-check-label" for="Poor">
                Poor
            </label>
        </div>

        <div class="col-md-4">
            <label for="CurrentControl" class="form-label">Current Control</label>
            <input type="text" class="form-control" id="CurrentControl">
        </div>

        <div class="form-check col-md-4">
            <input class="form-check-input" type="checkbox" value="" id="Good">
            <label class="form-check-label" for="Good">
                Good
            </label>
        </div>

        <div class="form-check col-md-4">
            <input class="form-check-input" type="checkbox" value="" id="Poor">
            <label class="form-check-label" for="Poor">
                Poor
            </label>
        </div>

        <div class="input-group col-md-12">
            <textarea style="height:300px" class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
              <button class="btn btn-success " style="height:300px;width:100px">Copy Summary</button>
            </span>
        </div>

        <div><div></div></div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
</body>
</html>
