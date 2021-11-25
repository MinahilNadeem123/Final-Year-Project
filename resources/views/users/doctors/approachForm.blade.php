<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Approach From</title>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<div class="container">
    <form class="row g-3" style="line-break: anywhere;">
        <h3 style="text-align: center;">Patient Approach form</h3>
        <div class="col-md-2" style="width: 600px;">
            <label for="Complain" class="form-label">Presenting Complaints or Issues</label>
            <select id="Complain" class="form-select">
                <option selected>Choose...</option>
                <option>Headache</option>
                <option>Stomach Pain</option>
                <option>Fever</option>
                <option>Cough</option>

            </select>
        </div>
        <div class="col-md-2">
            <button id="openreport" class="btn btn-success" style="width:150px;margin-top: 28px;">Open Report</button><br>
        </div>
        <div class="col-md-2">
            <button id="addreport"class="btn btn-success " style="width:150px;margin-top: 28px;">Add Report</button><br><br>
        </div>
        <div class="col-md-12" >
            <label for="apptext" class="form-label">Approach</label>
            <textarea style="width:100%;height:90vh"  class="form-control" id="apptext"></textarea>
        </div>
        <hr>
        <div class="col-md-2" style="width: 600px;">
            <label for="link1" class="form-label">link 1</label>
            <input type="text" class="form-control" id="link1">
        </div>

        <div class="col-md-2"style="width: 600px;">
            <label for="link2" class="form-label">link 2</label>
            <input type="text" class="form-control" id="link2">
        </div>

        <div class="col-md-2" style="width: 600px;">
            <label for="link3" class="form-label">link 3</label>
            <input type="text" class="form-control" id="link3">
        </div>

        <div class="col-md-2" style="width: 600px;">
            <label for="link4" class="form-label">link 4</label>
            <input type="text" class="form-control" id="link4">
        </div>
        <br>
        <div></div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
</body>
</html>

