<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Patient Record</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>


</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<h3 style="text-align: center;">Patient Record Form</h3>
<hr>
<div class="container">
    @if(session()->has('success'))
        <div class="alert alert-light alert-elevate" role="alert">
            <div class="alert-icon"><i class="flaticon2-check-mark kt-font-success"></i></div>
            <div class="alert-text">
                {{session()->get('success')}}
            </div>
        </div>
    @endif
    <form class="row g-3" method="post" action="{{route('insertPatientRecord')}}" enctype="multipart/form-data">
        @csrf
        <div class="col-md-2">
            <label for="pn" class="form-label">Patient No</label>

            <input type="text" name="patient_no" class="form-control" id="pn" value="{{isset($currentVisit) ? $currentVisit->patient_no: ''}}">
        </div>
        <div class="col-md-2">
            <label for="Cr" class="form-label">CR No</label>

            <input type="text" name="cr_no" class="form-control" id="Cr" value="{{isset($data) ? $data->cr_no: ''}}">
        </div>
{{--        <div class="col-md-2">--}}
{{--            <label for="Cr" class="form-label">Patient No</label>--}}
{{--            <select id="Cr" type="text" class="form-select">--}}
{{--                <option selected>Choose...</option>--}}
{{--                <option>Married</option>--}}
{{--                <option>UnMarried</option>--}}
{{--                <option>Widow</option>--}}
{{--                <option>Other</option>--}}

{{--            </select>--}}
{{--        </div>--}}
        <div class="col-md-2">
            <label for="dor" class="form-label">Visit No</label>
            <input type="number" name="visit_no" class="form-control" value="{{isset($total) ? $total: ''}}" id="dor">
        </div>
        <div class="col-md-2">
            <label for="inputState" class="form-label">Maritial Status</label>
          <input name="martial_status" id="inputState" class="form-control" value="{{isset($data) ? $data->marital_status: ''}}">
        </div>
        <div class="col-md-2">
            <label for="inputCNIC4" class="form-label">Fee</label>
            <input name="fee" id="inputCNIC4" class="form-control" value="{{isset($currentVisit) ? $currentVisit['fee_charged']: ''}}">
        </div>
{{--        <div class="col-md-2">--}}
{{--            <label for="inputPatient" class="form-label">MRN</label>--}}
{{--            <input type="text" class="form-control" id="inputPatient">--}}

{{--        </div>--}}
        <div class="col-md-2">
            <label for="dob" class="form-label">Date of Visit</label>
            <input type="text" name="date_of_visit" class="form-control" value="{{isset($currentVisit) ? $currentVisit['current_visit_date']: ''}}" id="dob">
        </div>

{{--        <div class="col-md-2">--}}
{{--            <label for="TA " class="form-label">Time Arrived--}}
{{--                <input type="text" class="form-control" id="TA"></label>--}}
{{--        </div>--}}

{{--        <div class="col-md-2">--}}
{{--            <label for="AN " class="form-label">A.No--}}
{{--                <input type="text" class="form-control" id="AN"></label>--}}
{{--        </div>--}}

{{--        <div class="col-md-2">--}}
{{--            <label for="AT " class="form-label">Appointment Time</label>--}}
{{--                <input type="text" class="form-control" id="AT">--}}
{{--        </div>--}}

        <div class="col-md-4">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="patient_name" class="form-control" value="{{isset($data) ? $data->first_name: ''}}" id="name" >
        </div>
        <div class="col-md-4">
            <label for="mobile" class="form-label">Mobile No</label>
            <input type="number" name="number" class="form-control" value="{{isset($data) ? $data->mobile_no_1: ''}}" id="mobile" >
        </div>
        <div class="col-md-4">
            <label for="prof" class="form-label">Profession</label>
                <input type="text" name="profession" class="form-control"  value="{{isset($data) ? $data->profession: ''}}" id="profession" >
        </div>
        <div class="col-md-1">
            <label for="age" class="form-label">Age</label>
            <input type="text" name="age" class="form-control"  value="{{isset($data) ? $data->age: ''}}" id="age" >
        </div>
        <div class="col-md-1">
            <label for="sex" class="form-label">Sex</label>
            <input type="text" name="sex" class="form-control"  value="{{isset($data) ? $data->gender: ''}}" id="sex" >
        </div>
        <div class="col-md-1">
            <label for="pulse" class="form-label">Pulse</label>
            <input type="text" name="pulse" class="form-control"  value="{{isset($nursing) ? $nursing->pulse_rate: ''}}" id="pulse">
        </div>
{{--        <div class="col-md-1">--}}
{{--            <label for="spo2" class="form-label">sPO2</label>--}}
{{--            <input type="text" class="form-control" value="{{$nursing->spo2}}"id="spo2">--}}
{{--        </div>--}}
        <div class="col-md-1">
            <label for="sbp" class="form-label">SBP</label>
            <input type="text" name="sbp" class="form-control" value="{{isset($nursing) ? $nursing->systolic_bp_right_arm: ''}}" id="sbp">
        </div>
        <div class="col-md-1">
            <label for="dbp" class="form-label">DBP</label>
            <input type="text" name="dbp" class="form-control" value="{{isset($nursing) ? $nursing->diastolic_bp_right_arm: ''}}" id="dbp">
        </div>
        <div class="col-md-1">
            <label for="Weight" class="form-label">Weight</label>
            <input type="text"  name="weight" class="form-control" value="{{isset($nursing) ? $nursing->weight: ''}}" id="Weight">
        </div>
{{--        <div class="col-md-1">--}}
{{--            <label for="rr" class="form-label">RR</label>--}}
{{--            <input type="text" class="form-control" id="rr">--}}
{{--        </div>--}}

        <div class="col-md-1">
            <label for="height" class="form-label">Height</label>
            <input type="text" name="height" class="form-control" value="{{isset($nursing) ? $nursing->height: ''}}" id="height">
        </div>

        <div class="col-md-1">
            <label for="bmi" class="form-label">BMI</label>
            <input type="text" name="bmi" class="form-control" value="{{isset($nursing) ? $nursing->bmi: ''}}" id="bmi">
        </div>

        <div class="col-md-1">
            <label for="temp" class="form-label">TEMP</label>
            <input type="text" name="temperature" class="form-control" value="{{isset($nursing) ? $nursing->temperature: ''}}" id="temp">
        </div>
        <div class="col-md-2">
            <label for="ref" class="form-label">Ref By</label>
            <select class="form-select" name="ref" id="ref">
                <option>choose..</option>
                @foreach($doctors as $doctor)
                    <option value="{{$doctor->first_name}} {{$doctor->last_name}}">{{$doctor->first_name}}  {{$doctor->last_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label for="tic" class="form-label">TimeInConsultRoom</label>
            <input type="text" name="tic" class="form-control" id="tic">
        </div>
{{--        <div class="col-md-2">--}}
{{--            <label for="approach" class="form-label">Approach</label>--}}
{{--            <select class="form-select" id="approach">--}}
{{--                <option>choose..</option>--}}
{{--                @foreach($approaches as $approach)--}}
{{--                    <option value="{{$approach->Complaints_issues}}">{{$approach->Complaints_issues}} </option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--        </div>--}}
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="dm" value="yes" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                DM
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="htn" value="yes" id="flexCheckDefault1">
            <label class="form-check-label" for="flexCheckDefault1">
                HTN
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="ihd" value="yes" id="flexCheckDefault2">
            <label class="form-check-label" for="flexCheckDefault2">
                IHD
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="cs" value="yes" id="flexCheckDefault3">
            <label class="form-check-label" for="flexCheckDefault3">
                CurrentSmoker
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="es" value="yes" id="flexCheckDefault4">
            <label class="form-check-label" for="flexCheckDefault4">
                ExSmoker
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="cld" value="yes" id="flexCheckDefault5">
            <label class="form-check-label" for="flexCheckDefault5">
                ChronicLungDisease
            </label>
        </div>

        <div class="col-md-8 " >
            <label for="notes" class="form-label">Notes</label>
            <textarea name="notes" class="form-control" id="notes"></textarea>
        </div>




        <hr>
        <h3 style="text-align: center;">Patient Assessment</h3>
{{--        <div>--}}
{{--            <button class="btn btn-success" style="width:100px">Previous Visits</button>&nbsp&nbsp&nbsp--}}
{{--            <button class="btn btn-success " style="width:100px">IX Summary</button><br><br>--}}
{{--        </div>--}}
        <div class="col-md-4">
            <label for="pc" class="form-label" >PC</label>
            <textarea style="height:100px" class="form-control" name="pc" id="pc"></textarea>
        </div>
        <div class="col-md-4">
            <label for="risks" class="form-label" >Risks</label>
            <textarea style="height:100px"  name="risks" class="form-control" id="risks"></textarea>
        </div>
        <div class="col-md-4">
            <label for="hx" class="form-label" >HX</label>
            <textarea style="height:100px" name="hx" class="form-control" id="hx"></textarea>
        </div>
        <div class="col-md-4">
            <label for="exam" class="form-label" >Exam</label>
            <textarea style="height:100px" name="exam" class="form-control" id="exam"></textarea>
        </div>
        <div class="col-md-4">
            <label for="ixdone" class="form-label" >IX Done</label>
            <textarea style="height:100px" name="ix" class="form-control" id="ixdone"></textarea>
        </div>
        <div class="col-md-4">
            <label for="casesummary" class="form-label" >Case Summary to be printed</label>
            <textarea style="height:100px" name="case_summary" class="form-control" id="casesummary"></textarea>
        </div>


        <hr>
        <h3 style="text-align: center;">Plan</h3>

            <div class="col-md-6">
                    <label for="rx" class="form-label">RX Protocol</label>
                    <select  name="rx" class="rx form-select" id="rx">
                        <option>choose...</option>
                        @foreach($protocols as $protocol)
                            <option value="{{$protocol->dx_short}}">{{$protocol->dx_short}}</option>
                        @endforeach
                    </select>

                </div>

                <div class="col-md-6">
                    <label for="dx " class="form-label">DX</label>
                        <input type="text" name="dx" class="dx form-control" id="dx">
                </div>

                <div class="col-md-6">
                    <label for="ixd" class="form-label">Investigations</label>
                    <select name="invest" class="form-select ixd11" id="ixd">
                        <option>choose...</option>
                        @foreach($investigations as $investigation)
                            <option value="{{$investigation->id}}"> {{$investigation->disease}}
                            </option>
                        @endforeach
                    </select>
                </div>
    <div class="col-md-6">
        <label for="ixadv " class="form-label">IX ADV</label>
            <input type="text" name="ixd" class="form-control ixadv11"  id="ixadv" >
    </div>




        <div class="col-md-6">
            <label for="GeneralInstruction" class="form-label">General Instruction</label>
            <select  name="gn" class="form-select GI" id="GeneralInstruction">
                <option>choose...</option>
                @foreach($generalInstruction as $instructions)
                    <option value="{{$instructions->id}}"> {{$instructions->disease}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-6">
            <label for="GI1" class="form-label">GI1</label>
                <input type="text" name="gi1" class="form-control GI1" id="GI1">
        </div>
        <div class="col-md-6">
            <label for="GI2" class="form-label">GI2</label>
                <input type="text" name="gi2" class="form-control GI2" id="GI2">
        </div>
        <hr>
        <h3 style="text-align: center;">medicine </h3>
        <h3 style="text-align: center;">RX 1 </h3>
        <div class="col-md-2">
            <label for="name1" class="form-label">Name</label>
            <select name="rx1" class="drug form-select" id="name1">
                <option>choose...</option>
                @foreach($drugs as $drug)
                    <option value="{{$drug->prescription_name}}"> {{$drug->prescription_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label for="purpose1" class="form-label">Purpose
                <input type="text" name="p1" class="purpose form-control" id="purpose1"></label>
        </div>
        <div class="col-md-2">
            <label for="frequency1" class="form-label">Frequency
                <input type="text" name="f1" class="frequency form-control" id="frequency1"></label>
        </div>
        <div class="col-md-2">
            <label for="SpecialInstructions1" class="form-label">Special Instructions
                <input type="text" name="inst1" class="specialInstructions form-control" id="SpecialInstructions1"></label>
        </div>
        <div class="col-md-2">
            <label for="duration1" class="form-label">duration
                <input type="text" name="d1" class="duration form-control" id="duration1"></label>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <table  class="table dark table-bordered" style="border: black">
                <thead>
                <tr>
                    <th>Unit Price</th>
                    <th>Item/Day</th>
                    <th>Duration</th>
{{--                    <th>Rx Duration Cost</th>--}}
                    <th>Daily</th>
                    <th>7 Days</th>
                    <th>30 Days</th>
                </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><input type="text" name="u1" class="up form-control" /></td>
                        <td><input type="text" class="item form-control" /></td>
                        <td><input type="text" class="dur form-control" /></td>
{{--                        <td><input type="text" class="rxd form-control" /></td>--}}
                        <td><input type="text" class="dai form-control" /></td>
                        <td><input type="text" class="day7 form-control" /></td>
                        <td><input type="text" class="day30 form-control" /></td>
                    </tr>
                </tbody>
            </table>
               </div>

        <hr>
        <h3 style="text-align: center;">Rx 2 </h3>
        <div class="col-md-2">
            <label for="name1" class="form-label">Name</label>
            <select  name="rx2" class="drug1 form-select" id="name1">
                <option>choose...</option>
                @foreach($drugs as $drug)
                    <option value="{{$drug->prescription_name}}"> {{$drug->prescription_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label for="purpose1" class="form-label">Purpose
                <input type="text" name="p2" class="purpose1 form-control" id="purpose1"></label>
        </div>
        <div class="col-md-2">
            <label for="frequency1" class="form-label">Frequency
                <input type="text" name="f2" class="frequency1 form-control" id="frequency1"></label>
        </div>
        <div class="col-md-2">
            <label for="SpecialInstructions1" class="form-label">Special Instructions
                <input type="text" name="inst2" class="specialInstructions1 form-control" id="SpecialInstructions1"></label>
        </div>
        <div class="col-md-2">
            <label for="duration1" class="form-label">duration
                <input type="text" name="d2" class="duration1 form-control" id="duration1"></label>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <table  class="table dark table-bordered" style="border: black">
                <thead>
                <tr>
                    <th>Unit Price</th>
                    <th>Item/Day</th>
                    <th>Duration</th>
                    {{--                    <th>Rx Duration Cost</th>--}}
                    <th>Daily</th>
                    <th>7 Days</th>
                    <th>30 Days</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><input type="text" name="u2" class="up1 form-control" /></td>
                    <td><input type="text" class="item1 form-control" /></td>
                    <td><input type="text" class="dur1 form-control" /></td>
                    {{--                        <td><input type="text" class="rxd form-control" /></td>--}}
                    <td><input type="text" class="dai1 form-control" /></td>
                    <td><input type="text" class="day71 form-control" /></td>
                    <td><input type="text" class="day301 form-control" /></td>
                </tr>
                </tbody>
            </table>
        </div>

        <hr>
        <h3 style="text-align: center;">Rx 3 </h3>
        <div class="col-md-2">
            <label for="name1" class="form-label">Name</label>
            <select name="rx3" class="drug2 form-select" id="name1">
                <option>choose...</option>
                @foreach($drugs as $drug)
                    <option value="{{$drug->prescription_name}}"> {{$drug->prescription_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label for="purpose1" class="form-label">Purpose
                <input type="text" name="p3" class="purpose2 form-control" id="purpose1"></label>
        </div>
        <div class="col-md-2">
            <label for="frequency1" class="form-label">Frequency
                <input type="text" name="f3" class="frequency2 form-control" id="frequency1"></label>
        </div>
        <div class="col-md-2">
            <label for="SpecialInstructions1" class="form-label">Special Instructions
                <input type="text" name="inst3" class="specialInstructions2 form-control" id="SpecialInstructions1"></label>
        </div>
        <div class="col-md-2">
            <label for="duration1" class="form-label">duration
                <input type="text" name="d3" class="duration2 form-control" id="duration1"></label>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <table  class="table dark table-bordered" style="border: black">
                <thead>
                <tr>
                    <th>Unit Price</th>
                    <th>Item/Day</th>
                    <th>Duration</th>
                    {{--                    <th>Rx Duration Cost</th>--}}
                    <th>Daily</th>
                    <th>7 Days</th>
                    <th>30 Days</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><input type="text" name="u3" class="up2 form-control" /></td>
                    <td><input type="text" class="item2 form-control" /></td>
                    <td><input type="text" class="dur2 form-control" /></td>
                    {{--                        <td><input type="text" class="rxd form-control" /></td>--}}
                    <td><input type="text" class="dai2 form-control" /></td>
                    <td><input type="text" class="day72 form-control" /></td>
                    <td><input type="text" class="day302 form-control" /></td>
                </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <h3 style="text-align: center;">Rx 4 </h3>

        <div class="col-md-2">
            <label for="name1" class="form-label">Name</label>
            <select name="rx4" class="drug3 form-select" id="name1">
                <option>choose...</option>
                @foreach($drugs as $drug)
                    <option value="{{$drug->prescription_name}}"> {{$drug->prescription_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label for="purpose1" class="form-label">Purpose
                <input type="text" name="p4" class="purpose3 form-control" id="purpose1"></label>
        </div>
        <div class="col-md-2">
            <label for="frequency1" class="form-label">Frequency
                <input type="text" name="f4" class="frequency3 form-control" id="frequency1"></label>
        </div>
        <div class="col-md-2">
            <label for="SpecialInstructions1" class="form-label">Special Instructions
                <input type="text" name="inst4" class="specialInstructions3 form-control" id="SpecialInstructions1"></label>
        </div>
        <div class="col-md-2">
            <label for="duration1" class="form-label">duration
                <input type="text" name="d4" class="duration3 form-control" id="duration1"></label>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <table  class="table dark table-bordered" style="border: black">
                <thead>
                <tr>
                    <th>Unit Price</th>
                    <th>Item/Day</th>
                    <th>Duration</th>
                    {{--                    <th>Rx Duration Cost</th>--}}
                    <th>Daily</th>
                    <th>7 Days</th>
                    <th>30 Days</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><input type="text" name="u4" class="up3 form-control" /></td>
                    <td><input type="text" class="item3 form-control" /></td>
                    <td><input type="text" class="dur3 form-control" /></td>
                    {{--                        <td><input type="text" class="rxd form-control" /></td>--}}
                    <td><input type="text" class="dai3 form-control" /></td>
                    <td><input type="text" class="day73 form-control" /></td>
                    <td><input type="text" class="day303 form-control" /></td>
                </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <h3 style="text-align: center;">Rx 5 </h3>
        <div class="col-md-2">
            <label for="name1" class="form-label">Name</label>
            <select name="rx5" class="drug4 form-select" id="name1">
                <option>choose...</option>
                @foreach($drugs as $drug)
                    <option value="{{$drug->prescription_name}}"> {{$drug->prescription_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label for="purpose1" class="form-label">Purpose
                <input type="text" name="p5" class="purpose4 form-control" id="purpose1"></label>
        </div>
        <div class="col-md-2">
            <label for="frequency1" class="form-label">Frequency
                <input type="text" name="f5" class="frequency4 form-control" id="frequency1"></label>
        </div>
        <div class="col-md-2">
            <label for="SpecialInstructions1" class="form-label">Special Instructions
                <input type="text" name="inst5" class="specialInstructions4 form-control" id="SpecialInstructions1"></label>
        </div>
        <div class="col-md-2">
            <label for="duration1" class="form-label">duration
                <input type="text" name="d5" class="duration4 form-control" id="duration1"></label>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <table  class="table dark table-bordered" style="border: black">
                <thead>
                <tr>
                    <th>Unit Price</th>
                    <th>Item/Day</th>
                    <th>Duration</th>
                    {{--                    <th>Rx Duration Cost</th>--}}
                    <th>Daily</th>
                    <th>7 Days</th>
                    <th>30 Days</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><input type="text" name="u5" class="up4 form-control" /></td>
                    <td><input type="text" class="item4 form-control" /></td>
                    <td><input type="text" class="dur4 form-control" /></td>
                    {{--                        <td><input type="text" class="rxd form-control" /></td>--}}
                    <td><input type="text" class="dai4 form-control" /></td>
                    <td><input type="text" class="day74 form-control" /></td>
                    <td><input type="text" class="day304 form-control" /></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-6 mb-5 mx-lg-auto" style="align-self: center;">

            <a href="{{"printView/".isset($data) ? $data['cr_no']:''}}">
            <button type="button"  class="btn btn-success btn-lg" style="margin-left: 47%;">View Prescription</button>
            </a>
        </div>
        <div class="col-6 mb-5 mx-lg-auto" style="align-self: center;">
            <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
        </div>

</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            console.log("abc")
            $(".ixd11").change(function() {
                 console.log("123")
                var air_id =  $(this).val();

                var a = $(this).parent();

                console.log("Its Change !");

                var op = "";

                $.ajax({
                    headers: { 'csrftoken' : '{{ csrf_token() }}' },
                    type: 'get',
                    url: '/findInvestigations/'+air_id,
                    dataType: 'json',      //return data will be json
                    success: function(data) {
                        // console.log("price");

                            console.log('ajax');
                            console.log(data);
                            var ixd= data.i1+','+data.i2+','+data.i3+','+data.i4+','+data.i5+','+data.i6+
                        ','+data.i7+','+data.i8+','+data.i9+','+data.i10+','+data.i11+','+data.i12
                                +','+data.i13+','+data.i14
                                +','+data.i15
                        console.log(ixd)
                         $('.ixadv11').val(ixd)

                        //
                        // a.find('.ixadv11').val(data.id);
                        // do you want to display id or registration name?
                    },
                    error:function(){

                    }
                });
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            console.log("abc")
            $(".rx").change(function() {
                console.log("123")
                var air_id =  $(this).val();

                var a = $(this).parent();

                console.log("Its Change !");

                var op = "";

                $.ajax({
                    headers: { 'csrftoken' : '{{ csrf_token() }}' },
                    type: 'get',
                    url: '/findProtocols/'+air_id,
                    dataType: 'json',      //return data will be json
                    success: function(data) {
                        // console.log("price");

                        console.log('ajax');
                        console.log(data);

                        $('.dx').val(data.dx_short)
                        $('.ixadv11').val(data.ix_protocol)

                        //
                        // a.find('.ixadv11').val(data.id);
                        // do you want to display id or registration name?
                    },
                    error:function(){

                    }
                });
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            console.log("abc")
            $(".GI").change(function() {
                console.log("123")
                var air_id =  $(this).val();

                var a = $(this).parent();

                console.log("Its Change !");

                var op = "";

                $.ajax({
                    headers: { 'csrftoken' : '{{ csrf_token() }}' },
                    type: 'get',
                    url: '/findGeneralInstruction/'+air_id,
                    dataType: 'json',      //return data will be json
                    success: function(data) {
                        // console.log("price");

                        console.log('ajax');
                        console.log(data);
                        console.log(ixd)
                        $('.GI1').val(data.gi1)
                        $('.GI2').val(data.gi2)

                        //
                        // a.find('.ixadv11').val(data.id);
                        // do you want to display id or registration name?
                    },
                    error:function(){

                    }
                });
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            console.log("abc")
            $(".drug").change(function() {
                console.log("123")
                var air_id =  $(this).val();

                var a = $(this).parent();

                console.log("Its Change !");

                var op = "";

                $.ajax({
                    headers: { 'csrftoken' : '{{ csrf_token() }}' },
                    type: 'get',
                    url: '/findDrugs/'+air_id,
                    dataType: 'json',      //return data will be json
                    success: function(data) {
                        // console.log("price");

                        console.log('ajax');
                        console.log(data);
                        $('.purpose').val(data.purpose_id)
                        $('.frequency').val(data.frequency_id)
                        $('.duration').val(data.duration_id)
                        $('.specialInstructions').val(data.special_instruction_id)
                        $('.up').val(data.unit_price)
                        $('.item').val(data.unit_price)
                        $('.dur').val(data.duration_in_days)
                        $('.dai').val(data.daily_cost)
                        $('.day7').val(data.weekly_cost)
                        $('.day30').val(data.monthly_cost)

                        //
                        // a.find('.ixadv11').val(data.id);
                        // do you want to display id or registration name?
                    },
                    error:function(){

                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            console.log("abc")
            $(".drug1").change(function() {
                console.log("123")
                var air_id =  $(this).val();

                var a = $(this).parent();

                console.log("Its Change !");

                var op = "";

                $.ajax({
                    headers: { 'csrftoken' : '{{ csrf_token() }}' },
                    type: 'get',
                    url: '/findDrugs/'+air_id,
                    dataType: 'json',      //return data will be json
                    success: function(data) {
                        // console.log("price");

                        console.log('ajax');
                        console.log(data);
                        $('.purpose1').val(data.purpose_id)
                        $('.frequency1').val(data.frequency_id)
                        $('.duration1').val(data.duration_id)
                        $('.specialInstructions1').val(data.special_instruction_id)
                        $('.up1').val(data.unit_price)
                        $('.item1').val(data.unit_price)
                        $('.dur1').val(data.duration_in_days)
                        $('.dai1').val(data.daily_cost)
                        $('.day71').val(data.weekly_cost)
                        $('.day301').val(data.monthly_cost)

                        //
                        // a.find('.ixadv11').val(data.id);
                        // do you want to display id or registration name?
                    },
                    error:function(){

                    }
                });
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            console.log("abc")
            $(".drug2").change(function() {
                console.log("123")
                var air_id =  $(this).val();

                var a = $(this).parent();

                console.log("Its Change !");

                var op = "";

                $.ajax({
                    headers: { 'csrftoken' : '{{ csrf_token() }}' },
                    type: 'get',
                    url: '/findDrugs/'+air_id,
                    dataType: 'json',      //return data will be json
                    success: function(data) {
                        // console.log("price");

                        console.log('ajax');
                        console.log(data);
                        $('.purpose2').val(data.purpose_id)
                        $('.frequency2').val(data.frequency_id)
                        $('.duration2').val(data.duration_id)
                        $('.specialInstructions2').val(data.special_instruction_id)
                        $('.up2').val(data.unit_price)
                        $('.item2').val(data.unit_price)
                        $('.dur2').val(data.duration_in_days)
                        $('.dai2').val(data.daily_cost)
                        $('.day72').val(data.weekly_cost)
                        $('.day302').val(data.monthly_cost)

                        //
                        // a.find('.ixadv11').val(data.id);
                        // do you want to display id or registration name?
                    },
                    error:function(){

                    }
                });
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            console.log("abc")
            $(".drug3").change(function() {
                console.log("123")
                var air_id =  $(this).val();

                var a = $(this).parent();

                console.log("Its Change !");

                var op = "";

                $.ajax({
                    headers: { 'csrftoken' : '{{ csrf_token() }}' },
                    type: 'get',
                    url: '/findDrugs/'+air_id,
                    dataType: 'json',      //return data will be json
                    success: function(data) {
                        // console.log("price");

                        console.log('ajax');
                        console.log(data);
                        $('.purpose3').val(data.purpose_id)
                        $('.frequency3').val(data.frequency_id)
                        $('.duration3').val(data.duration_id)
                        $('.specialInstructions3').val(data.special_instruction_id)
                        $('.up3').val(data.unit_price)
                        $('.item3').val(data.unit_price)
                        $('.dur3').val(data.duration_in_days)
                        $('.dai3').val(data.daily_cost)
                        $('.day73').val(data.weekly_cost)
                        $('.day303').val(data.monthly_cost)

                        //
                        // a.find('.ixadv11').val(data.id);
                        // do you want to display id or registration name?
                    },
                    error:function(){

                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            console.log("abc")
            $(".drug4").change(function() {
                console.log("123")
                var air_id =  $(this).val();

                var a = $(this).parent();

                console.log("Its Change !");

                var op = "";

                $.ajax({
                    headers: { 'csrftoken' : '{{ csrf_token() }}' },
                    type: 'get',
                    url: '/findDrugs/'+air_id,
                    dataType: 'json',      //return data will be json
                    success: function(data) {
                        // console.log("price");

                        console.log('ajax');
                        console.log(data);
                        $('.purpose4').val(data.purpose_id)
                        $('.frequency4').val(data.frequency_id)
                        $('.duration4').val(data.duration_id)
                        $('.specialInstructions4').val(data.special_instruction_id)
                        $('.up4').val(data.unit_price)
                        $('.item4').val(data.unit_price)
                        $('.dur4').val(data.duration_in_days)
                        $('.dai4').val(data.daily_cost)
                        $('.day74').val(data.weekly_cost)
                        $('.day304').val(data.monthly_cost)

                        //
                        // a.find('.ixadv11').val(data.id);
                        // do you want to display id or registration name?
                    },
                    error:function(){

                    }
                });
            });
        });
    </script>


</div>
</body>
</html>
