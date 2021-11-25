<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Patient Record</title>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<h3 style="text-align: center;">Treatment Protocols</h3>
<hr>
<div class="container">
    <form class="row g-3">
        <div class="row g-3">
        <div class="col-md-6">
            <label for="inputState" class="form-label"></label>
            <select id="inputState" class="form-select">
                <option selected>Choose...</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="of" class="form-label"></label>
            <input type="text" class="form-control" id="of"><span class="input-group-btn">
                <button class="btn btn-success" style="width:100px">Open Form</button></span>
            </div>
        </div>
        <div class="col-md-6">
            <label for="dxdhort" class="form-label">DX Short</label>
            <input type="number" class="form-control" id="dxshort">
        </div>

        <div class="col-md-6">
            <label for="tblprotocoldiagnosis" class="form-label">tbl Protocol Diagnosis</label>
            <input type="text" class="form-control" id="tblprotocoldiagnosis">

        </div>
        <div class="col-md-6 ">
            <label for="gi1" class="form-label">GI 1</label>
            <input type="text" class="form-control" id="gi1">
        </div>

        <div class="col-md-6 ">
            <label for="gi2" class="form-label">GI 2</label>
            <input type="text" class="form-control" id="gi2">
        </div>

        <div class="col-md-6 " >
            <label for="investigationsadvised" class="form-label">Investigations Advised</label>
            <textarea  class="form-control" id="investigationsadvised" style="height:300px"></textarea>
        </div>

        <div class="col-md-6 " >
            <label for="dxnotes" class="form-label">DX notes</label>
            <textarea  class="form-control" id="dxnotes" style="height:300px"></textarea>
        </div>

        <div class="col-md-2">
            <label for="inputState" class="form-label"></label>
            <select id="inputState" class="form-select">
                <option selected>Choose...</option>
            </select>
        </div>
        <div class="col-md-10" >
            <table class="table table-striped- table-bordered table-hover table-checkable kt_table_1">
                <tbody>
                    <tr>
                        <td colspan="1">

                        </td>
                        <td colspan="4"></td>
                        <td colspan="4"></td>
                        <td>
                        <table style="margin-top:0;margin-bottom:0" class="table table-striped- table-bordered table-hover table-checkable kt_table_1">
                            <tr>
                                <td colspan="3"></td>
                                <td colspan="3"></td>
                                <td colspan="3"></td>
                            </tr>
                            <tr>
                                <td colspan="9"></td>
                            </tr>
                        </table>
                        </td>
                        <td colspan="2"></td>

                    </tr>

                </tbody>
            </table>
        </div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
</body>
</html>
