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
            <th>MRN</th>
            <th>Patient Name</th>
            <th>Attendant Notes</th>
            <th>Fee</th>
        </tr>
        @foreach($data as $datum)
        <tr>

    <td>{{$datum->MRN}}</td>
    <td>{{$datum->patient_name}}</td>
    <td>{{$datum->attendant_notes}}</td>
    <td>{{$datum->fee_charged}}</td>

        </tr>
        @endforeach
        </tbody>
    </table>
    <form class="row g-3">
        <div class="col-md-2 ">
            <label for="0" class="form-label">  Total Income </label>
            <input type="number" class="form-control" value="{{$fee}}" id="0">
        </div>


        <div class="col-2">
            <label for="1" class="form-label">Percentage</label>
            <input type="number" class="form-control" id="1">
        </div>
        <div class="col-2">
            <label for="2" class="form-label">Amount for Hospital</label>
            <input type="number" class="form-control" id="2">
        </div>
        <div class="col-md-2">
            <label for="docin" class="form-label">Doctor Income</label>
            <input type="text" class="form-control" id="docin">
        </div>



    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
<script>
    var Amount = document.getElementById("0");
    var Amethod = document.getElementById("1");

    Amount.addEventListener("input", calc);
    Amethod.addEventListener("input", calc);
    function calc(){
        var a2 = 0;
        var	a = Amount.value;
        if(a > 0)
            a2 = a

        var b2 = 0;
        var	b = Amethod.value;
        if(b > 0)
            b2 = b

        console.log(a, b);
        var unitprice = parseInt(b2) /100;


        var dcost = unitprice * parseInt(a2);

        document.getElementById("2").value = dcost;
        var Rx=a2 - dcost;
        document.getElementById("docin").value = Rx;


    }

</script>
</body>
</html>
