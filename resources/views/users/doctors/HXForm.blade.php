<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>HX Form</title>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<h3 style="text-align: center;">History Form</h3>
<hr>
<div class="container">
    <form class="row g-3">
        <div class="col-md-2 ">
            <label for="id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id">
        </div>
        <div class="col-md-2">
            <label for="Cr" class="form-label">Patient No</label>
            <input type="text" class="form-control" id="Cr">
        </div>
        <div class="col-md-2">
            <label for="dor" class="form-label">Visit No</label>
            <input type="number" class="form-control" id="dor">
        </div>

        <div class="col-md-2">
            <label for="inputPatient" class="form-label">MRN</label>
            <input type="text" class="form-control" id="inputPatient">

        </div>
        <div class="col-md-2">
            <label for="dob" class="form-label">Date of Visit</label>
            <input type="text" class="form-control" id="dob">
        </div>

        <div class="col-12">
            <label for="pc" class="form-label">PC</label>
            <input type="text" class="form-control" id="pc">
        </div>

        <div class="form-check col-2">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                DM
            </label>
        </div>
        <div class="form-check col-2">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
            <label class="form-check-label" for="flexCheckDefault1">
                HTN
            </label>
        </div>
        <div class="form-check col-2" >
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
            <label class="form-check-label" for="flexCheckDefault2">
                IHD
            </label>
        </div>
        <div class="form-check col-2">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
            <label class="form-check-label" for="flexCheckDefault3">
                CurrentSmoker
            </label>
        </div>

        <div class="form-check col-2">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
            <label class="form-check-label" for="flexCheckDefault4">
                ExSmoker
            </label>
        </div>

        <div class="form-check col-2">
            <input class="form-check-input" type="checkbox" value="" id="passmoker">
            <label class="form-check-label" for="passmoker">
                Passive Smoker
            </label>
        </div>


        <div class="col-md-2 " >
            <label for="fhis" class="form-label">Full History
            <input  type="text" class="form-control" id="fhis"></label>
        </div>
        <div class="input-group col-md-12" >
            <div class="col-md-2" style="width: 100px;">Risks Factors</div>
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="input-group col-md-12">
            <div class="col-md-2" style="width: 100px;">DM History</div>
            <textarea  class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
                <button  type="submit" class="btn btn-success " style="width:100px">
                    <a style="color:white" href="{{route('DMHistoryForm')}}">DM History Form</a></button>
            </span>
        </div>
        <div class="input-group col-md-12">
            <div class="col-md-2" style="width: 100px;">HTN History</div>
            <textarea  class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
              <button class="btn btn-success " style="width:100px">
                  <a style="color:white" href="{{route('HTNHistoryForm')}}">HTN History Form</a></button>

            </span>
        </div>
        <div class="input-group col-md-12">
            <div class="col-md-2" style="width: 100px;">FEVER History</div>
            <textarea  class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
              <button class="btn btn-success " style="width:100px">
                  <a style="color:white" href="{{route('FeverHistoryForm')}}">FEVER History Form</a></button>
            </span>
        </div>
        <div class="col-md-2">
            <textarea  style="margin-left:110%;height:400px;width:400px" class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
              <button class="btn btn-success " style="width:100px">Copy Summary</button>
            </span>
        </div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
</body>
</html>
