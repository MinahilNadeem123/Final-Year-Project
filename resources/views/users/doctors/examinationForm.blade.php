<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">

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
                <button id="vitals" class="btn btn-success btn-secondary" type="button">
                    <a style="color:white" href="{{route('vitalDetailForm')}}">Open Vitals Details Form</a></button>
            </div>
          </span>
        </div>
        <div class="input-group">
            <div class="col-md-2" style="width: 100px;">  Hands-Fingers Exam</div>

            <textarea type="text" class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-2" style="width: 100px;"> <button id="handsExam"class="btn btn-success btn-secondary" type="button">
                    <a style="color:white" href="{{route('handExamForm')}}">Open Hands Exam Form</a></button></div>
          </span>
        </div>
        <div class="input-group">
            <div class="col-md-2" style="width: 100px;">Nails Exam Summary</div>
            <textarea  class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-2" style="width: 100px;">
                <button id="nailexam"class="btn btn-success btn-secondary"
                                                                  type="button">
                    <a style="color:white" href="{{route('nailExamForm')}}">Open Nails Exam Form</a></button>
            </div>
          </span>
        </div>
        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> Derma Exam Summary</div>
            <textarea class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-2" style="width: 100px;">
                <button id="Dermaexam" class="btn btn-success btn-secondary"
                                                                 type="button">
                    <a style="color:white" href="{{route('dermaExamForm')}}">Open Derma Exam From</a></button></div>
          </span>
        </div>
        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> Head Face Summary</div>
            <textarea type="text" class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-2" style="width: 100px;">  <button id="headface" class="btn btn-success btn-secondary"
                                                                  type="button">
                    <a style="color:white" href="{{route('headFaceExamForm')}}">Open Head Face Exam Form</a></button></div>
          </span>
        </div>
        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> Eyes Summary</div>
            <textarea type="text" class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-2" style="width: 100px;">
            <button id="eyes" class="btn btn-success btn-secondary" type="button">
                <a style="color:white" href="{{route('eyeExamForm')}}">Eyes Exam Form</a></button></div>
          </span>
        </div>
        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> Oral Cavity Exam Summary</div>
            <textarea type="text" class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-2" style="width: 100px;">
            <button id="eyes" class="btn btn-success btn-secondary" type="button">
                <a style="color:white" href="{{route('oralCavityExamForm')}}">Oral Cavity Exam Form</a></button></div>
          </span>
        </div>
        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> Thyroid Summary</div>
            <textarea type="text" class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-2" style="width: 100px;">
            <button id="eyes" class="btn btn-success btn-secondary" type="button">
                <a style="color:white" href="{{route('thyroidExamForm')}}">Thyroid Exam Form</a></button></div>
          </span>
        </div>
        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> Neck Chest Abdo</div>
            <textarea type="text" class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-2" style="width: 100px;">
            <button id="eyes" class="btn btn-success btn-secondary" type="button">
                <a style="color:white" href="{{route('neckChestAbdomenExamForm')}}">Neck Chest Abdomen Exam Form</a></button></div>
          </span>
        </div>
        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> Legs feet Summary</div>
            <textarea type="text" class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-2" style="width: 100px;">
            <button id="eyes" class="btn btn-success btn-secondary" type="button">
                <a style="color:white" href="{{route('legFeetExamForm')}}">Legs Feet Summary Form</a></button></div>
          </span>
        </div>
        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> Lymph Nodes Summary</div>
            <textarea type="text" class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-2" style="width: 100px;">
            <button id="eyes" class="btn btn-success btn-secondary" type="button">
                <a style="color:white" href="{{route('lymphNodeExamForm')}}">Lymph Nodes Exam Summary Form</a></button></div>
          </span>
        </div>

        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> CVS Exam Summary</div>
            <textarea type="text" class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-2" style="width: 100px;">
            <button id="eyes" class="btn btn-success btn-secondary" type="button">
                <a style="color:white" href="{{route('CVSExamForm')}}">CVS Exam Form</a></button></div>
          </span>
        </div>


        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> Resp Exam Summary</div>
            <textarea type="text" class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-2" style="width: 100px;">
            <button id="eyes" class="btn btn-success btn-secondary" type="button">
                <a style="color:white" href="{{route('RespExamForm')}}">Resp Exam Form</a></button></div>
          </span>
        </div>

        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> GIT Exam Summary</div>
            <textarea type="text" class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-2" style="width: 100px;">
            <button id="eyes" class="btn btn-success btn-secondary" type="button">
                <a style="color:white" href="{{route('GITExamForm')}}">GIT Exam Form</a></button></div>
          </span>
        </div>

        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> CNC GCS SOMI Higher Functions</div>
            <textarea type="text" class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-2" style="width: 100px;">
            <button id="eyes" class="btn btn-success btn-secondary" type="button">
                <a style="color:white" href="{{route('GCSSomiHigherFunctions')}}">GCS SOMI Higher functions</a></button></div>
          </span>
        </div>

        <div class="input-group">
            <div class="col-md-2" style="width: 100px;">Cranial Nerves Exam</div>
            <textarea type="text" class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-2" style="width: 100px;">
            <button id="eyes" class="btn btn-success btn-secondary" type="button">
                <a style="color:white" href="{{route('CranialPeripheralNerves')}}">Cranial Nerves Exam Form</a></button></div>
          </span>
        </div>

        <div class="input-group">
            <div class="col-md-2" style="width: 100px;">Motor + Sensory + Cerebelum</div>
            <textarea type="text" class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-2" style="width: 100px;">
            <button id="eyes" class="btn btn-success btn-secondary" type="button">
                <a style="color:white" href="{{route('MotorSensoryCerebellum')}}">Motor+ Sensory+ Cerebelum</button></div>
          </span>
        </div>
    </form>
</div>
</body>
</html>
