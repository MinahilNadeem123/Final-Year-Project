<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Today Report</title>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<h3 style="text-align: center;">Todays Patient Summary </h3>
<hr>
<div class="container">
    <table class="table table-striped- table-bordered table-hover table-checkable kt_table_1">
        <tbody>
        <tr>
            <th>AN</th>
            <th>MRN</th>
            <th>Patient Name</th>
            <th>Attendant Notes</th>
            <th>Fee</th>
        </tr>
        <tr>

        </tr>

        </tbody>
    </table>
    <form class="row g-3">
        <div class="col-md-1 ">
            <label for="0" class="form-label">   </label>
            <input type="number" class="form-control" id="0">
        </div>
        <div class="col-md-1">
            <label for="1000" class="form-label">1000</label>
            <input type="number" class="form-control" id="1000">
        </div>
        <div class="col-md-1">
            <label for="600" class="form-label">600</label>
            <input type="number" class="form-control" id="600">
        </div>

        <div class="col-md-1">
            <label for="500" class="form-label">500</label>
            <input type="number" class="form-control" id="500">

        </div>
        <div class="col-md-1">
            <label for="free" class="form-label">Free</label>
            <input type="number" class="form-control" id="free">
        </div>

        <div class="col-1">
            <label for="1" class="form-label"></label>
            <input type="number" class="form-control" id="1">
        </div>
        <div class="col-1">
            <label for="2" class="form-label"></label>
            <input type="number" class="form-control" id="2">
        </div>



    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
</body>
</html>
