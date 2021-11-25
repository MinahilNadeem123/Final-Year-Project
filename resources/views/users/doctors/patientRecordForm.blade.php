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
<h3 style="text-align: center;">Patient Record Form</h3>
<hr>
<div class="container">
    <form class="row g-3">
        <div class="col-md-2">
            <label for="Cr" class="form-label">Patient No</label>
            <input type="text" class="form-control" id="Cr">
        </div>
        <div class="col-md-2">
            <label for="dor" class="form-label">Visit No</label>
            <input type="number" class="form-control" id="dor">
        </div>
        <div class="col-md-2">
            <label for="inputState" class="form-label">Maritial Status</label>
            <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>Married</option>
                <option>UnMarried</option>
                <option>Widow</option>
                <option>Other</option>

            </select>
        </div>
        <div class="col-md-2">
            <label for="inputCNIC4" class="form-label">Fee</label>
            <select type="text" class="form-select" id="inputCNIC4">
                <option>choose...</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="inputPatient" class="form-label">MRN</label>
            <input type="text" class="form-control" id="inputPatient">

        </div>
        <div class="col-md-2">
            <label for="dob" class="form-label">Date of Visit</label>
            <input type="text" class="form-control" id="dob">
        </div>
        <div class="col-md-2">
            <label for="inputState" class="form-label">DX</label>
            <select id="inputState" class="form-select">
                <option selected>Choose...</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="TA " class="form-label">Time Arrived
            <input type="text" class="form-control" id="TA"></label>
        </div>

        <div class="col-md-2">
            <label for="AN " class="form-label">A.No
            <input type="text" class="form-control" id="AN"></label>
        </div>

        <div class="col-md-2">
            <label for="AT " class="form-label">Appointment Time
            <input type="text" class="form-control" id="AT"></label>
        </div>

        <div class="col-md-4">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" >
        </div>
        <div class="col-md-4">
            <label for="mobile" class="form-label">Mobile No</label>
            <input type="number" class="form-control" id="mobile" >
        </div>
        <div class="col-md-4">
            <label for="prof" class="form-label">Profession
            <input type="text" class="form-control" id="profession" ></label>
        </div>
        <div class="col-md-1">
            <label for="age" class="form-label">Age</label>
            <input type="text" class="form-control" id="age" >
        </div>
        <div class="col-md-1">
            <label for="sex" class="form-label">Sex</label>
            <input type="text" class="form-control" id="sex" >
        </div>
        <div class="col-md-1">
            <label for="pulse" class="form-label">Pulse</label>
            <input type="text" class="form-control" id="pulse">
        </div>
        <div class="col-md-1">
            <label for="spo2" class="form-label">sPO2</label>
            <input type="text" class="form-control" id="spo2">
        </div>
        <div class="col-md-1">
            <label for="sbp" class="form-label">SBP</label>
            <input type="text" class="form-control" id="sbp">
        </div>
        <div class="col-md-1">
            <label for="dbp" class="form-label">DBP</label>
            <input type="text" class="form-control" id="dbp">
        </div>
        <div class="col-md-1">
            <label for="Weight" class="form-label">Weight</label>
            <input type="text" class="form-control" id="Weight">
        </div>
        <div class="col-md-1">
            <label for="rr" class="form-label">RR</label>
            <input type="text" class="form-control" id="rr">
        </div>

        <div class="col-md-1">
            <label for="height" class="form-label">Height</label>
            <input type="text" class="form-control" id="height">
        </div>

        <div class="col-md-1">
            <label for="bmi" class="form-label">BMI</label>
            <input type="text" class="form-control" id="bmi">
        </div>

        <div class="col-md-1">
            <label for="temp" class="form-label">TEMP</label>
            <input type="text" class="form-control" id="temp">
        </div>
        <div class="col-md-2">
            <label for="ref" class="form-label">Ref By</label>
            <select class="form-select" id="ref">
                <option>choose..</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="tic" class="form-label">TimeInConsultRoom</label>
            <input type="text" class="form-control" id="tic">
        </div>
        <div class="col-md-2">
            <label for="approach" class="form-label">Approach</label>
            <select class="form-select" id="approach">
                <option>choose..</option>
            </select>
        </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                   DM
                </label>
            </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
            <label class="form-check-label" for="flexCheckDefault1">
                HTN
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
            <label class="form-check-label" for="flexCheckDefault2">
                IHD
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
            <label class="form-check-label" for="flexCheckDefault3">
                CurrentSmoker
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
            <label class="form-check-label" for="flexCheckDefault4">
                ExSmoker
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
            <label class="form-check-label" for="flexCheckDefault5">
                ChronicLungDisease
            </label>
        </div>

        <div class="col-md-8 " >
            <label for="notes" class="form-label">Notes</label>
            <textarea  class="form-control" id="notes"></textarea>
        </div>




        <hr>
        <h3 style="text-align: center;">Patient Assessment</h3>
        <div>
        <button class="btn btn-success" style="width:100px">Previous Visits</button>&nbsp&nbsp&nbsp
        <button class="btn btn-success " style="width:100px">IX Summary</button><br><br>
        </div>
        <div class="col-md-4">
            <label for="pc" class="form-label" >PC</label>
            <textarea style="height:100px" class="form-control" id="pc"></textarea>
        </div>
        <div class="col-md-4">
            <label for="risks" class="form-label" >Risks</label>
            <textarea style="height:100px"  class="form-control" id="risks"></textarea>
        </div>
        <div class="col-md-4">
            <label for="hx" class="form-label" >HX</label>
            <textarea style="height:100px"  class="form-control" id="hx"></textarea>
        </div>
        <div class="col-md-4">
            <label for="exam" class="form-label" >Exam</label>
            <textarea style="height:100px"  class="form-control" id="exam"></textarea>
        </div>
        <div class="col-md-4">
            <label for="ixdone" class="form-label" >IX Done</label>
            <textarea style="height:100px"  class="form-control" id="ixdone"></textarea>
        </div>
        <div class="col-md-4">
            <label for="casesummary" class="form-label" >Case Summary to be printed</label>
            <textarea style="height:100px"  class="form-control" id="casesummary"></textarea>
        </div>


        <hr>
        <h3 style="text-align: center;">Plan</h3>
        <div>
        <div class="col-md-4">
            <label for="medi" class="form-label">RX Protocol</label>
            <select  class="form-select" id="medi">
                <option>choose...</option>
            </select>
        </div>
<p>to be helped by amd</p>
            <div class="col-md-8">
                <label for="ixadv " class="form-label">IX ADV
                    <textarea type="text" class="form-control" id="ixadv"></textarea></label>
            </div>
       <div class="col-md-4">
            <label for="dx " class="form-label">DX
            <input type="text" class="form-control" id="dx"></label>
        </div>

        <div class="col-md-12">
            <label for="Age " class="form-label">Patient Visit Number with THIS CONSULTANT
            <input type="text" class="form-control" id="Age"></label>
        </div>
        <div class="col-md-6">
            <label for="dob" class="form-label">Patient Current Visit Category</label>
            <input type="text" class="form-control" id="dob">
        </div>
        <div class="col-md-6">
            <label for="dob" class="form-label">Patient Current Visit SubCategory</label>
            <input type="text" class="form-control" id="dob">
        </div>

        <div class="col-6">
            <label for="inputAddress" class="form-label">Fee Charged</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="0">
        </div>
        <div class="col-6">
            <label for="inputAddress2" class="form-label">Appointment Number</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="0">
        </div>
        <div class="col-6">
            <label for="inputAddress4" class="form-label">Patient Current Visit Notes</label>
            <input type="text" class="form-control" id="inputAddress4" placeholder="">
        </div>
        <div class="col-6">
            <label for="inputAddress5" class="form-label">Referred By</label>
            <input type="text" class="form-control" id="inputAddress5" placeholder="Details">
        </div>
        <div class="col-12">
            <label for="inputAddress6" class="form-label">Time Elapsed since patient current visit arrival</label>
            <input type="text" class="form-control" id="inputAddress6" placeholder="">
        </div>

        <div class="col-12 mb-5 mx-lg-auto" style="align-self: center;">
            <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
        </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
</body>
</html>
