<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Physical Exam</title>
</head>
<body  style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<div class="container">

    <form class="row g-3">
        <div class="col-md-2">
            <label for="ID" class="form-label">ID</label>
            <input type="number" class="form-control" id="ID">
        </div>
        <div class="col-md-2">
            <label for="pno" class="form-label">P.No</label>
            <input type="text" class="form-control" id="pno">
        </div>
        <div class="col-md-2">
            <label for="dob" class="form-label">Date of Visit</label>
            <input type="text" class="form-control" id="dob">
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
            <label for="patientname" class="form-label">Patient Name</label>
            <input type="text" class="form-control" id="patientname">
        </div>
        <div class="col-md-2" style="width: 300px;">
            <button id="Generalform" class="btn btn-success btn-secondary" type="button">
                Get Data From Record Table
            </button></div>
        <div class="input-group">
            <div class="col-md-2" style="width: 100px;">General Look</div>
            <textarea type="text" class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
                <div class="col-md-2" style="width: 100px;"><button id="Generalform" class="btn btn-success btn-secondary" type="button">
                        <a style="color:white" href="{{route('generalLookForm')}}">Open General Look Form</a>
              </button></div>
            </span>
        </div>
        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> Vitals Details</div>
            <textarea type="text" class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-2" style="width: 100px;">
                <button id="vitals" class="btn btn-success btn-secondary"
                                                                type="button">Open Vitals Details Form</button>
            </div>
          </span>
        </div>
        <div class="input-group">
            <div class="col-md-2" style="width: 100px;">  Hands-Fingers Exam</div>

            <textarea type="text" class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-2" style="width: 100px;"> <button id="handsExam"class="btn btn-success btn-secondary"
                                                                 type="button">Open Hands Exam Form</button></div>
          </span>
        </div>
        <div class="input-group">
            <div class="col-md-2" style="width: 100px;">Nails Exam Summary</div>
            <textarea  class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-2" style="width: 100px;">
                <button id="nailexam"class="btn btn-success btn-secondary"
                                                                  type="button">Open Nails Exam Form</button>
            </div>
          </span>

        </div>
        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> Derma Exam Summary</div>
            <textarea class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-2" style="width: 100px;"> <button id="Dermaexam" class="btn btn-success btn-secondary"
                                                                 type="button">OPen Derma Exam From</button></div>
          </span>
        </div>
        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> Head Face Summary</div>
            <textarea type="text" class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-2" style="width: 100px;">  <button id="headface" class="btn btn-success btn-secondary"
                                                                  type="button">Open Head Face Summary</button></div>
          </span>
        </div>
        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> Eyes Summary</div>
            <textarea type="text" class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-2" style="width: 100px;">
            <button id="eyes" class="btn btn-success btn-secondary" type="button">Open Eyes Exam Form</button></div>
          </span>
        </div>
</div>
</body>
</html>
