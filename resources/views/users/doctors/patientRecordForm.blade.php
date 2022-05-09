<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Patient Record</title>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<style>
    @media screen {
        #printSection {
            display: none;
        }
    }

    @media print {
        body * {
            visibility:hidden;
        }
        #printSection, #printSection * {
            visibility:visible;
        }
        #printSection {
            position:absolute;
            left:0;
            top:0;
        }
    }
</style>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Prescription</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="printThis" >
                    <div class="row">
                        <div class="col-md-4" >
                            <h1 style="color:black;text-align: center;">{{$doctor_data->first_name}}</h1>
                            <h4 style="color:black;text-align: center;">{{$doctor_data->medical_degree}},{{$doctor_data->educational_qualification}}</h4>
                            <h6 style="color:black;text-align: center;">{{$doctor_data->biography}}</h6>
                        </div>
                        <div class="col-md-4" style="margin-top:0px">
                            <img src="{{asset('adminpanel/assets/media/logo.png')}}" style="height:100px;text-align: center; display: block;margin-top:0px; margin-left: auto; margin-right: auto;width: 50%;"/>
                            <h2 style="color:black;text-align: center;">{{$doctor_data->mobile}}</h2>
                        </div>
                        <div class="col-md-4">
                            <h1 style="color:black;text-align: center;"> {{Stichoza\GoogleTranslate\GoogleTranslate::trans($doctor_data->first_name,'ur')}}</h1>
                            <h4  style="color:black;text-align: center;">
                                {{Stichoza\GoogleTranslate\GoogleTranslate::trans($doctor_data->medical_degree,'ur')}}
                                {{Stichoza\GoogleTranslate\GoogleTranslate::trans($doctor_data->educational_qualification,'ur')}}
                            </h4>
                            <h6  style="color:black;text-align: center;"> {{Stichoza\GoogleTranslate\GoogleTranslate::trans($doctor_data->biography,'ur')}}</h6>
                        </div>

                    </div>

                    <div class="container-fluid">
                        <form class="row g-3" method="post" action="{{route('insertPatientRecord')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-3" style="color:black;display:flex;justify-content: space-between;">
                                    <label for="pn1" style="color:black;font-weight:bold" class="form-label">Name </label>
                                    <input id="pn1"  style="color:black;font-weight:bold" class="form-control w-50" value="{{isset($patients) ? $patients->first_name : ''}}">

                                </div>
                                <div class="col-md-3" style="color:black;display:flex;justify-content: space-between;">
                                    <label for="age1"  style="color:black;font-weight:bold" class="form-label">Age</label>
                                    <input id="age1" style="color:black;font-weight:bold" class="form-control w-50" value="{{isset($patients) ? $patients->age : ''}}{{isset($patients) ? $patients->gender : ''}}">
                                </div>
                                <div class="col-md-3" style="color:black;display:flex;justify-content: space-between;">
                                    <label for="cr"  style="color:black;font-weight:bold" class="form-label">CR No</label>
                                    <input id="cr" class="form-control w-50"  style="color:black;font-weight:bold" value="{{isset($patients) ? $patients->cr_no : ''}}">

                                </div>
                                <div class="col-md-3" style="color:black;display:flex;justify-content: space-between;">
                                    <label for="dov"  style="color:black;font-weight:bold" class="form-label">Date Of Visit </label>
                                    <input id="dov"  style="color:black;font-weight:bold" class="form-control " value="{{\Carbon\Carbon::today()->format('d-m-y')}}">

                                </div>


                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <u  style="color:black"><h6 style="color:black;font-weight:bold">Case Summary</h6></u>
                                    <div>
                                        <textarea class="form-control" style="color:black;height:300px;border:none" id="history"></textarea>
                                    </div>
                                    <h6 style="color:black;font-weight:bold">Investigations Advised</h6>
                                    <div class="col-md-12" style="color:black;border:none;display:flex;justify-content: space-between;height:300px">

                                             <textarea style="color:black;" name="invest" class="form-control ixd11" id="ixd1">
            </textarea>
                                    </div>
                                </div>

                                <div class="col-md-1" style=" border-left:1px solid black;height: 700px; position: relative;"></div>
                                <div class="col-md-8">
                                    <h3 style="text-align: center;color:black;">RX </h3>

                                    <!--begin: Datatable -->

                                    <table  style="color:black;border: black;width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>name</th>
                                            <th>purpose</th>
                                            <th>frequency</th>
                                            <th>instructions</th>
                                            <th>Unit Price</th>
                                            <th>Duration</th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        <tr>
                                            <td><input style="color:black;" type="text" id="n1" class="form-control" /></td>
                                            <td><input style="color:black;"  type="text" id="p1" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="f1" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="i1" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="u1" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="d1" class="form-control" /></td>

                                        </tr>
                                        <tr>
                                            <td><input style="color:black;" type="text" id="n2" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="p2" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="f2" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="i2" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="u2" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="d2" class="form-control" /></td>

                                        </tr>
                                        <tr>
                                            <td><input style="color:black;" type="text" id="n3" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="p3" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="f3" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="i3" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="u3" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="d3" class="form-control" /></td>

                                        </tr>
                                        <tr>
                                            <td><input style="color:black;" type="text" id="n4" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="p4" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="f4" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="i4" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="u4" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="d4" class="form-control" /></td>

                                        </tr>
                                        <tr>
                                            <td><input style="color:black;" type="text" id="n5" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="p5" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="f5" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="i5" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="u5" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="d5" class="form-control" /></td>

                                        </tr>
                                        <tr>
                                            <td><input style="color:black;" type="text" id="n6" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="p6" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="f6" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="i6" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="u6" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="d6" class="form-control" /></td>

                                        </tr>
                                        <tr>
                                            <td><input style="color:black;" type="text" id="n7" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="p7" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="f7" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="i7" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="u7" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="d7" class="form-control" /></td>

                                        </tr>
                                        <tr>
                                            <td><input style="color:black;" type="text" id="n8" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="p8" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="f8" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="i8" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="u8" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="d8" class="form-control" /></td>

                                        </tr>
                                        <tr>
                                            <td><input style="color:black;" type="text" id="n9" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="p9" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="f9" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="i9" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="u9" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="d9" class="form-control" /></td>

                                        </tr>
                                        <tr>
                                            <td><input style="color:black;" type="text" id="n10" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="p10" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="f10" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="i10" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="u10" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="d10" class="form-control" /></td>

                                        </tr>
                                        <tr>
                                            <td><input style="color:black;" type="text" id="n11" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="p11" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="f11" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="i11" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="u11" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="d11" class="form-control" /></td>

                                        </tr>
                                        <tr>
                                            <td><input style="color:black;" type="text" id="n12" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="p12" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="f12" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="i12" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="u12" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="d12" class="form-control" /></td>

                                        </tr>
                                        <tr>
                                            <td><input style="color:black;" type="text" id="n13" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="p13" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="f13" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="i13" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="u13" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="d13" class="form-control" /></td>

                                        </tr>
                                        <tr>
                                            <td><input style="color:black;" type="text" id="n14" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="p14" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="f14" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="i14" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="u14" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="d14" class="form-control" /></td>

                                        </tr>
                                        <tr>
                                            <td><input style="color:black;" type="text" id="n15" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="p15" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="f15" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="i15" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="u15" class="form-control" /></td>
                                            <td><input style="color:black;" type="text" id="d15" class="form-control" /></td>

                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5" style="top:20px">
                                    <h2 style="color:black;text-align: center;">{{$doctor_data->mobile}}</h2>
                                    <h6 style="color:black;text-align: center;">اوقات کار:روزانہ شام اتوار: صبح ..ناغہ بروز جمعہ</h6>
                                    <h5 style="color:black;text-align: center;">0334-6129280 , 0453-514413</h5>
                                </div>
                                <div class="col-md-7">

                                 <p style="color:black;"> {{Carbon\Carbon::today()->format('l , d-m-y')}} &nbsp&nbsp&nbsp&nbsp  {{Carbon\Carbon::now()->format('h-i-m')}}   </p>
                                    <h3 style="color:black;display:inline-block">رابطہ نمبر براے اپوئنٹمنٹ </h3>
                                    <h6 style="color:black;display:inline-block;position:relative;float:left">(صبح 9 سے 12 بجے کے درمیان کال کریں۔)</h6>
                                    <h6 style="color:black">چیک اپ کے بعد اس واٹس ایپ نمبر پر دو ہفتوں کے اندر رپورٹس کے لیے میسج کریں۔</h6>
                                    <h6 style="color:black">کلینک: چاپ میڈی کیئر، 154-آفسری کالونی،بلمکابل پولیس لائن خانسر روڈ بھکر </h6>
                                </div>
                            </div>








                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="btnPrint" onclick="print()" class="btn btn-primary">Print</button>
                </div>

            </div>
        </div>

    </div>
</div>


<div class="container" id="nonPrintable">
    <h3 style="text-align: center;">Patient Record Form</h3>
    <hr>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#enterLabs">
        Enter Lab Records
    </button>
    @include('users.doctors.orderLabs')
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalhxform">
        HX Form
    </button>
        @include("users.doctors.HXForm")
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

{{--        <div class="col-md-2">--}}
{{--            <label for="pn" class="form-label">Patient No</label>--}}

{{--            <input type="text" name="patient_no" class="form-control" id="pn" value="{{isset($currentVisit) ? $currentVisit->patient_no: ''}}">--}}
{{--        </div>--}}
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
        <div class="col-md-1">
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

        <div class="form-check col-md-2">
            <input class="form-check-input" type="checkbox" name="dm" value="yes" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                DM
            </label>
        </div>
        <div class="form-check col-md-2">
            <input class="form-check-input" type="checkbox" name="htn" value="yes" id="flexCheckDefault1">
            <label class="form-check-label" for="flexCheckDefault1">
                HTN
            </label>
        </div>
        <div class="form-check col-md-2">
            <input class="form-check-input" type="checkbox" name="ihd" value="yes" id="flexCheckDefault2">
            <label class="form-check-label" for="flexCheckDefault2">
                IHD
            </label>
        </div>
        <div class="form-check col-md-2">
            <input class="form-check-input" type="checkbox" name="cs" value="yes" id="flexCheckDefault3">
            <label class="form-check-label" for="flexCheckDefault3">
                CurrentSmoker
            </label>
        </div>

        <div class="form-check col-md-2">
            <input class="form-check-input" type="checkbox" name="es" value="yes" id="flexCheckDefault4">
            <label class="form-check-label" for="flexCheckDefault4">
                ExSmoker
            </label>
        </div>

        <div class="form-check col-md-2">
            <input class="form-check-input" type="checkbox" name="cld" value="yes" id="flexCheckDefault5">
            <label class="form-check-label" for="flexCheckDefault5">
                ChronicLungDisease
            </label>
        </div>

        <div class="col-md-8" >
            <label for="notes" class="form-label">Notes</label>
            <textarea name="notes" class="form-control" id="notes"></textarea>
        </div>

        <hr>
        <h3 class="col-6" style="text-align: center;">Previous Visits</h3>
        <h3 class="col-6" style="text-align: center;">Waiting Patients By Appointment No</h3>
        <hr>





        <div class="col-md-6 kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <!-- Content goes here...-->

            <div class="table-responsive">
                <table class="table table-bordered">

                    <thead>
                    <tr>
                        <th style="width:100px">Visit No</th>
                        <th style="width:100px">Visit Date</th>
                        <th style="width:100px">Fee Charged</th>
                        <th style="width:100px">Visit Notes</th>

                    </tr>
                    </thead>
                    <tbody>
                    @if(isset( $previous_visits))
@foreach($previous_visits as $visit)
                        <tr>
<td>{{$visit->patient_visit_no}}</td>
<td>{{$visit->current_visit_date}}</td>
<td>{{$visit->fee_charged}}</td>
<td>{{$visit->current_visit_note}}</td>

                        </tr>
@endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>


        <div class="col-md-6 kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <!-- Content goes here...-->

            <div class="table-responsive">
                <table class="table table-bordered" >

                    <thead>
                    <tr>
                        <th style="width:100px">Appointment No</th>
                        <th style="width:100px">MRN</th>
                        <th style="width:100px">Patient Name</th>
                        <th style="width:100px">Attendant Notes</th>
                        <th style="width:100px">Appointment Time</th>


                    </tr>
                    </thead>
                    <tbody class="appointmentbody">
{{--                    @foreach($previous_visits as $visit)--}}

{{--                    @endforeach--}}
                    </tbody>
                </table>
            </div>
        </div>




        <hr>
        <h3 style="text-align: center;">Labs Awaited</h3>
        <div class="col-md-12 kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <!-- Content goes here...-->

            <div class="table-responsive">
                <table class="table table-bordered" >

                    <thead>
                    <tr>
                        <th style="width:100px">MRN</th>
                        <th style="width:100px">Patient Name</th>
                        <th style="width:100px">View Report</th>
                        <th style="width:100px">Action</th>


                    </tr>
                    </thead>
                    <tbody class="labsAwaitedBody">
                    {{--                    @foreach($previous_visits as $visit)--}}

                    {{--                    @endforeach--}}
                    </tbody>
                </table>
            </div>
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
            <input type="text" name="ixd" class="form-control ixadv11"   id="ixadv" >
    </div>




        <div class="col-md-6">
            <label for="GeneralInstruction" class="form-label">General Instruction</label>
            <select  name="generalins" class="form-select GI" id="GeneralInstruction">
                <option value="">choose...</option>
                @foreach($generalInstruction as $instructions)
                    <option value="{{$instructions->disease}}"> {{$instructions->disease}}</option>
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
                <option value="">choose...</option>
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
                        <td><input type="text" id="upr1" name="u1" class="up form-control" /></td>
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
            <label for="name2" class="form-label">Name</label>
            <select  name="rx2" class="drug1 form-select" id="name2">
                <option value="">choose...</option>
                @foreach($drugs as $drug)
                    <option value="{{$drug->prescription_name}}"> {{$drug->prescription_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label for="purpose2" class="form-label">Purpose
                <input type="text" name="p2" class="purpose1 form-control" id="purpose2"></label>
        </div>
        <div class="col-md-2">
            <label for="frequency2" class="form-label">Frequency
                <input type="text" name="f2" class="frequency1 form-control" id="frequency2"></label>
        </div>
        <div class="col-md-2">
            <label for="SpecialInstructions2" class="form-label">Special Instructions
                <input type="text" name="inst2" class="specialInstructions1 form-control" id="SpecialInstructions2"></label>
        </div>
        <div class="col-md-2">
            <label for="duration2" class="form-label">duration
                <input type="text" name="d2" class="duration1 form-control" id="duration2"></label>
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
                    <td><input type="text" id="upr2" name="u2" class="up1 form-control" /></td>
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
            <label for="name3" class="form-label">Name</label>
            <select name="rx3" class="drug2 form-select" id="name3">
                <option value="">choose...</option>
                @foreach($drugs as $drug)
                    <option value="{{$drug->prescription_name}}"> {{$drug->prescription_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label for="purpose3" class="form-label">Purpose
                <input type="text" name="p3" class="purpose2 form-control" id="purpose3"></label>
        </div>
        <div class="col-md-2">
            <label for="frequency3" class="form-label">Frequency
                <input type="text" name="f3" class="frequency2 form-control" id="frequency3"></label>
        </div>
        <div class="col-md-2">
            <label for="SpecialInstructions3" class="form-label">Special Instructions
                <input type="text" name="inst3" class="specialInstructions2 form-control" id="SpecialInstructions3"></label>
        </div>
        <div class="col-md-2">
            <label for="duration3" class="form-label">duration
                <input type="text" name="d3" class="duration2 form-control" id="duration3"></label>
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
                    <td><input type="text" id="upr3" name="u3" class="up2 form-control" /></td>
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
            <label for="name4" class="form-label">Name</label>
            <select name="rx4" class="drug3 form-select" id="name4">
                <option value="">choose...</option>
                @foreach($drugs as $drug)
                    <option value="{{$drug->prescription_name}}"> {{$drug->prescription_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label for="purpose4" class="form-label">Purpose
                <input type="text" name="p4" class="purpose3 form-control" id="purpose4"></label>
        </div>
        <div class="col-md-2">
            <label for="frequency4" class="form-label">Frequency
                <input type="text" name="f4" class="frequency3 form-control" id="frequency4"></label>
        </div>
        <div class="col-md-2">
            <label for="SpecialInstructions4" class="form-label">Special Instructions
                <input type="text" name="inst4" class="specialInstructions3 form-control" id="SpecialInstructions4"></label>
        </div>
        <div class="col-md-2">
            <label for="duration4" class="form-label">duration
                <input type="text" name="d4" class="duration3 form-control" id="duration4"></label>
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
                    <td><input type="text" id="upr4" name="u4" class="up3 form-control" /></td>
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
            <label for="name5" class="form-label">Name</label>
            <select name="rx5" class="drug4 form-select" id="name5">
                <option value="">choose...</option>
                @foreach($drugs as $drug)
                    <option value="{{$drug->prescription_name}}"> {{$drug->prescription_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label for="purpose5" class="form-label">Purpose
                <input type="text" name="p5" class="purpose4 form-control" id="purpose5"></label>
        </div>
        <div class="col-md-2">
            <label for="frequency5" class="form-label">Frequency
                <input type="text" name="f5" class="frequency4 form-control" id="frequency5"></label>
        </div>
        <div class="col-md-2">
            <label for="SpecialInstructions5" class="form-label">Special Instructions
                <input type="text" name="inst5" class="specialInstructions4 form-control" id="SpecialInstructions5"></label>
        </div>
        <div class="col-md-2">
            <label for="duration5" class="form-label">duration
                <input type="text" name="d5" class="duration4 form-control" id="duration5"></label>
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
                    <td><input type="text" id="upr5" name="u5" class="up4 form-control" /></td>
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
        <hr>
        <h3 style="text-align: center;">Rx 6 </h3>
        <div class="col-md-2">
            <label for="name6" class="form-label">Name</label>
            <select name="rx6" class="drug5 form-select" id="name6">
                <option value="">choose...</option>
                @foreach($drugs as $drug)
                    <option value="{{$drug->prescription_name}}"> {{$drug->prescription_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label for="purpose6" class="form-label">Purpose
                <input type="text" name="p6" class="purpose5 form-control" id="purpose6"></label>
        </div>
        <div class="col-md-2">
            <label for="frequency6" class="form-label">Frequency
                <input type="text" name="f6" class="frequency5 form-control" id="frequency6"></label>
        </div>
        <div class="col-md-2">
            <label for="SpecialInstructions6" class="form-label">Special Instructions
                <input type="text" name="inst6" class="specialInstructions5 form-control" id="SpecialInstructions6"></label>
        </div>
        <div class="col-md-2">
            <label for="duration6" class="form-label">duration
                <input type="text" name="d6" class="duration5 form-control" id="duration6"></label>
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
                    <td><input type="text" id="upr6" name="u6" class="up5 form-control" /></td>
                    <td><input type="text" class="item5 form-control" /></td>
                    <td><input type="text" class="dur5 form-control" /></td>
                    {{--                        <td><input type="text" class="rxd form-control" /></td>--}}
                    <td><input type="text" class="dai5 form-control" /></td>
                    <td><input type="text" class="day75 form-control" /></td>
                    <td><input type="text" class="day305 form-control" /></td>
                </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <h3 style="text-align: center;">Rx 7 </h3>
        <div class="col-md-2">
            <label for="name7" class="form-label">Name</label>
            <select name="rx7" class="drug6 form-select" id="name7">
                <option value="">choose...</option>
                @foreach($drugs as $drug)
                    <option value="{{$drug->prescription_name}}"> {{$drug->prescription_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label for="purpose7" class="form-label">Purpose
                <input type="text" name="p7" class="purpose6 form-control" id="purpose7"></label>
        </div>
        <div class="col-md-2">
            <label for="frequency7" class="form-label">Frequency
                <input type="text" name="f7" class="frequency6 form-control" id="frequency7"></label>
        </div>
        <div class="col-md-2">
            <label for="SpecialInstructions7" class="form-label">Special Instructions
                <input type="text" name="inst7" class="specialInstructions6 form-control" id="SpecialInstructions7"></label>
        </div>
        <div class="col-md-2">
            <label for="duration7" class="form-label">duration
                <input type="text" name="d7" class="duration6 form-control" id="duration7"></label>
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
                    <td><input type="text" id="upr7" name="u7" class="up6 form-control" /></td>
                    <td><input type="text" class="item6 form-control" /></td>
                    <td><input type="text" class="dur6 form-control" /></td>
                    {{--                        <td><input type="text" class="rxd form-control" /></td>--}}
                    <td><input type="text" class="dai6 form-control" /></td>
                    <td><input type="text" class="day76 form-control" /></td>
                    <td><input type="text" class="day306 form-control" /></td>
                </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <h3 style="text-align: center;">Rx 8 </h3>
        <div class="col-md-2">
            <label for="name8" class="form-label">Name</label>
            <select name="rx8" class="drug7 form-select" id="name8">
                <option value="">choose...</option>
                @foreach($drugs as $drug)
                    <option value="{{$drug->prescription_name}}"> {{$drug->prescription_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label for="purpose8" class="form-label">Purpose
                <input type="text" name="p8" class="purpose7 form-control" id="purpose8"></label>
        </div>
        <div class="col-md-2">
            <label for="frequency8" class="form-label">Frequency
                <input type="text" name="f8" class="frequency7 form-control" id="frequency8"></label>
        </div>
        <div class="col-md-2">
            <label for="SpecialInstructions8" class="form-label">Special Instructions
                <input type="text" name="inst8" class="specialInstructions7 form-control" id="SpecialInstructions8"></label>
        </div>
        <div class="col-md-2">
            <label for="duration8" class="form-label">duration
                <input type="text" name="d8" class="duration7 form-control" id="duration8"></label>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <table  class="table dark table-bordered" style="border: black">
                <thead>
                <tr>
                    <th>Unit Price</th>
                    <th>Item/Day</th>
                    <th>Duration</th>
{{--                                        <th>Rx Duration Cost</th>--}}
                    <th>Daily</th>
                    <th>7 Days</th>
                    <th>30 Days</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><input type="text" id="upr8" name="u8" class="up7 form-control" /></td>
                    <td><input type="text" class="item7 form-control" /></td>
                    <td><input type="text" class="dur7 form-control" /></td>
{{--                                            <td><input type="text" class="rxd form-control" /></td>--}}
                    <td><input type="text" class="dai7 form-control" /></td>
                    <td><input type="text" class="day77 form-control" /></td>
                    <td><input type="text" class="day307 form-control" /></td>
                </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <h3 style="text-align: center;">Rx 9 </h3>
        <div class="col-md-2">
            <label for="name9" class="form-label">Name</label>
            <select name="rx9" class="drug8 form-select" id="name9">
                <option value="">choose...</option>
                @foreach($drugs as $drug)
                    <option value="{{$drug->prescription_name}}"> {{$drug->prescription_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label for="purpose9" class="form-label">Purpose
                <input type="text" name="p9" class="purpose8 form-control" id="purpose9"></label>
        </div>
        <div class="col-md-2">
            <label for="frequency9" class="form-label">Frequency
                <input type="text" name="f9" class="frequency8 form-control" id="frequency9"></label>
        </div>
        <div class="col-md-2">
            <label for="SpecialInstructions9" class="form-label">Special Instructions
                <input type="text" name="inst9" class="specialInstructions8 form-control" id="SpecialInstructions9"></label>
        </div>
        <div class="col-md-2">
            <label for="duration9" class="form-label">duration
                <input type="text" name="d9" class="duration8 form-control" id="duration9"></label>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <table  class="table dark table-bordered" style="border: black">
                <thead>
                <tr>
                    <th>Unit Price</th>
                    <th>Item/Day</th>
                    <th>Duration</th>
{{--                                        <th>Rx Duration Cost</th>--}}
                    <th>Daily</th>
                    <th>7 Days</th>
                    <th>30 Days</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><input type="text" id="upr9" name="u9" class="up8 form-control" /></td>
                    <td><input type="text" class="item8 form-control" /></td>
                    <td><input type="text" class="dur8 form-control" /></td>
{{--                                            <td><input type="text" class="rxd form-control" /></td>--}}
                    <td><input type="text" class="dai8 form-control" /></td>
                    <td><input type="text" class="day78 form-control" /></td>
                    <td><input type="text" class="day308 form-control" /></td>
                </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <h3 style="text-align: center;">Rx 10</h3>
        <div class="col-md-2">
            <label for="name10" class="form-label">Name</label>
            <select name="rx10" class="drug9 form-select" id="name10">
                <option value="">choose...</option>
                @foreach($drugs as $drug)
                    <option value="{{$drug->prescription_name}}"> {{$drug->prescription_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label for="purpose10" class="form-label">Purpose
                <input type="text" name="p10" class="purpose9 form-control" id="purpose10"></label>
        </div>
        <div class="col-md-2">
            <label for="frequency10" class="form-label">Frequency
                <input type="text" name="f10" class="frequency9 form-control" id="frequency10"></label>
        </div>
        <div class="col-md-2">
            <label for="SpecialInstructions10" class="form-label">Special Instructions
                <input type="text" name="inst10" class="specialInstructions9 form-control" id="SpecialInstructions10"></label>
        </div>
        <div class="col-md-2">
            <label for="duration10" class="form-label">duration
                <input type="text" name="d10" class="duration9 form-control" id="duration10"></label>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <table  class="table dark table-bordered" style="border: black">
                <thead>
                <tr>
                    <th>Unit Price</th>
                    <th>Item/Day</th>
                    <th>Duration</th>
{{--                                        <th>Rx Duration Cost</th>--}}
                    <th>Daily</th>
                    <th>7 Days</th>
                    <th>30 Days</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><input type="text" id="upr10" name="u10" class="up9 form-control" /></td>
                    <td><input type="text" class="item9 form-control" /></td>
                    <td><input type="text" class="dur9 form-control" /></td>
{{--                                            <td><input type="text" class="rxd form-control" /></td>--}}
                    <td><input type="text" class="dai9 form-control" /></td>
                    <td><input type="text" class="day79 form-control" /></td>
                    <td><input type="text" class="day309 form-control" /></td>
                </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <h3 style="text-align: center;">Rx 11</h3>
        <div class="col-md-2">
            <label for="name11" class="form-label">Name</label>
            <select name="rx11" class="drug10 form-select" id="name11">
                <option value="">choose...</option>
                @foreach($drugs as $drug)
                    <option value="{{$drug->prescription_name}}"> {{$drug->prescription_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label for="purpose11" class="form-label">Purpose
                <input type="text" name="p11" class="purpose10 form-control" id="purpose11"></label>
        </div>
        <div class="col-md-2">
            <label for="frequency11" class="form-label">Frequency
                <input type="text" name="f11" class="frequency10 form-control" id="frequency11"></label>
        </div>
        <div class="col-md-2">
            <label for="SpecialInstructions11" class="form-label">Special Instructions
                <input type="text" name="inst11" class="specialInstructions10 form-control" id="SpecialInstructions11"></label>
        </div>
        <div class="col-md-2">
            <label for="duration11" class="form-label">duration
                <input type="text" name="d11" class="duration10 form-control" id="duration11"></label>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <table  class="table dark table-bordered" style="border: black">
                <thead>
                <tr>
                    <th>Unit Price</th>
                    <th>Item/Day</th>
                    <th>Duration</th>
{{--                                        <th>Rx Duration Cost</th>--}}
                    <th>Daily</th>
                    <th>7 Days</th>
                    <th>30 Days</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><input type="text" id="upr11" name="u11" class="up10 form-control" /></td>
                    <td><input type="text" class="item10 form-control" /></td>
                    <td><input type="text" class="dur10 form-control" /></td>
{{--                                            <td><input type="text" class="rxd form-control" /></td>--}}
                    <td><input type="text" class="dai10 form-control" /></td>
                    <td><input type="text" class="day710 form-control" /></td>
                    <td><input type="text" class="day3010 form-control" /></td>
                </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <h3 style="text-align: center;">Rx 12</h3>
        <div class="col-md-2">
            <label for="name12" class="form-label">Name</label>
            <select name="rx12" class="drug11 form-select" id="name12">
                <option value="">choose...</option>
                @foreach($drugs as $drug)
                    <option value="{{$drug->prescription_name}}"> {{$drug->prescription_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label for="purpose12" class="form-label">Purpose
                <input type="text" name="p12" class="purpose11 form-control" id="purpose12"></label>
        </div>
        <div class="col-md-2">
            <label for="frequency12" class="form-label">Frequency
                <input type="text" name="f12" class="frequency11 form-control" id="frequency12"></label>
        </div>
        <div class="col-md-2">
            <label for="SpecialInstructions12" class="form-label">Special Instructions
                <input type="text" name="inst12" class="specialInstructions11 form-control" id="SpecialInstructions12"></label>
        </div>
        <div class="col-md-2">
            <label for="duration12" class="form-label">duration
                <input type="text" name="d12" class="duration11 form-control" id="duration12"></label>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <table  class="table dark table-bordered" style="border: black">
                <thead>
                <tr>
                    <th>Unit Price</th>
                    <th>Item/Day</th>
                    <th>Duration</th>
{{--                                        <th>Rx Duration Cost</th>--}}
                    <th>Daily</th>
                    <th>7 Days</th>
                    <th>30 Days</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><input type="text" id="upr12" name="u12" class="up11 form-control" /></td>
                    <td><input type="text" class="item11 form-control" /></td>
                    <td><input type="text" class="dur11 form-control" /></td>
{{--                                            <td><input type="text" class="rxd form-control" /></td>--}}
                    <td><input type="text" class="dai11 form-control" /></td>
                    <td><input type="text" class="day711 form-control" /></td>
                    <td><input type="text" class="day3011 form-control" /></td>
                </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <h3 style="text-align: center;">Rx 13</h3>
        <div class="col-md-2">
            <label for="name13" class="form-label">Name</label>
            <select name="rx13" class="drug12 form-select" id="name13">
                <option value="">choose...</option>
                @foreach($drugs as $drug)
                    <option value="{{$drug->prescription_name}}"> {{$drug->prescription_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label for="purpose13" class="form-label">Purpose
                <input type="text" name="p13" class="purpose12 form-control" id="purpose13"></label>
        </div>
        <div class="col-md-2">
            <label for="frequency13" class="form-label">Frequency
                <input type="text" name="f13" class="frequency12 form-control" id="frequency13"></label>
        </div>
        <div class="col-md-2">
            <label for="SpecialInstructions13" class="form-label">Special Instructions
                <input type="text" name="inst13" class="specialInstructions12 form-control" id="SpecialInstructions13"></label>
        </div>
        <div class="col-md-2">
            <label for="duration13" class="form-label">duration
                <input type="text" name="d13" class="duration12 form-control" id="duration13"></label>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <table  class="table dark table-bordered" style="border: black">
                <thead>
                <tr>
                    <th>Unit Price</th>
                    <th>Item/Day</th>
                    <th>Duration</th>
{{--                                        <th>Rx Duration Cost</th>--}}
                    <th>Daily</th>
                    <th>7 Days</th>
                    <th>30 Days</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><input type="text" id="upr13" name="u13" class="up12 form-control" /></td>
                    <td><input type="text" class="item12 form-control" /></td>
                    <td><input type="text" class="dur12 form-control" /></td>
{{--                                            <td><input type="text" class="rxd form-control" /></td>--}}
                    <td><input type="text" class="dai12 form-control" /></td>
                    <td><input type="text" class="day712 form-control" /></td>
                    <td><input type="text" class="day3012 form-control" /></td>
                </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <h3 style="text-align: center;">Rx 14</h3>
        <div class="col-md-2">
            <label for="name14" class="form-label">Name</label>
            <select name="rx14" class="drug13 form-select" id="name14">
                <option value="">choose...</option>
                @foreach($drugs as $drug)
                    <option value="{{$drug->prescription_name}}"> {{$drug->prescription_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label for="purpose14" class="form-label">Purpose
                <input type="text" name="p14" class="purpose13 form-control" id="purpose14"></label>
        </div>
        <div class="col-md-2">
            <label for="frequency14" class="form-label">Frequency
                <input type="text" name="f14" class="frequency13 form-control" id="frequency14"></label>
        </div>
        <div class="col-md-2">
            <label for="SpecialInstructions14" class="form-label">Special Instructions
                <input type="text" name="inst14" class="specialInstructions13 form-control" id="SpecialInstructions14"></label>
        </div>
        <div class="col-md-2">
            <label for="duration14" class="form-label">duration
                <input type="text" name="d14" class="duration13 form-control" id="duration14"></label>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <table  class="table dark table-bordered" style="border: black">
                <thead>
                <tr>
                    <th>Unit Price</th>
                    <th>Item/Day</th>
                    <th>Duration</th>
{{--                                        <th>Rx Duration Cost</th>--}}
                    <th>Daily</th>
                    <th>7 Days</th>
                    <th>30 Days</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><input type="text" id="upr14" name="u14" class="up13 form-control" /></td>
                    <td><input type="text" class="item13 form-control" /></td>
                    <td><input type="text" class="dur13 form-control" /></td>
{{--                                            <td><input type="text" class="rxd form-control" /></td>--}}
                    <td><input type="text" class="dai13 form-control" /></td>
                    <td><input type="text" class="day713 form-control" /></td>
                    <td><input type="text" class="day3013 form-control" /></td>
                </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <h3 style="text-align: center;">Rx 15</h3>
        <div class="col-md-2">
            <label for="name15" class="form-label">Name</label>
            <select name="rx15" class="drug14 form-select" id="name15">
                <option value="">choose...</option>
                @foreach($drugs as $drug)
                    <option value="{{$drug->prescription_name}}"> {{$drug->prescription_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label for="purpose15" class="form-label">Purpose
                <input type="text" name="p15" class="purpose14 form-control" id="purpose15"></label>
        </div>
        <div class="col-md-2">
            <label for="frequency15" class="form-label">Frequency
                <input type="text" name="f15" class="frequency14 form-control" id="frequency15"></label>
        </div>
        <div class="col-md-2">
            <label for="SpecialInstructions15" class="form-label">Special Instructions
                <input type="text" name="inst15" class="specialInstructions14 form-control" id="SpecialInstructions15"></label>
        </div>
        <div class="col-md-2">
            <label for="duration15" class="form-label">duration
                <input type="text" name="d15" class="duration14 form-control" id="duration15"></label>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <table  class="table dark table-bordered" style="border: black">
                <thead>
                <tr>
                    <th>Unit Price</th>
                    <th>Item/Day</th>
                    <th>Duration</th>
{{--                                        <th>Rx Duration Cost</th>--}}
                    <th>Daily</th>
                    <th>7 Days</th>
                    <th>30 Days</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><input type="text" id="upr15" name="u15" class="up14 form-control" /></td>
                    <td><input type="text" class="item14 form-control" /></td>
                    <td><input type="text" class="dur14 form-control" /></td>
{{--                                            <td><input type="text" class="rxd form-control" /></td>--}}
                    <td><input type="text" class="dai14 form-control" /></td>
                    <td><input type="text" class="day714 form-control" /></td>
                    <td><input type="text" class="day3014 form-control" /></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="col-12 mb-5 mx-lg-auto mt-5" style="align-self: center;">
            <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>


        <button type="button" class="btn btn-success btn-lg" onclick="myFunction()" data-toggle="modal" data-target=".bd-example-modal-xl">
            Print
        </button>
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
    <script>
            document.getElementById("btnPrint").onclick = function () {
                printElement(document.getElementById("printThis"));
            }

            function printElement(elem) {
                var domClone = elem.cloneNode(true);

                var $printSection = document.getElementById("printSection");

                if (!$printSection) {
                    var $printSection = document.createElement("div");
                    $printSection.id = "printSection";
                    document.body.appendChild($printSection);
                }

                $printSection.innerHTML = "";
                $printSection.appendChild(domClone);
                window.print();
            }
        </script>
    <script>
    function myFunction() {
        console.log('working');
        let crno = document.getElementById("Cr").value;
        document.getElementById("cr").value = crno;
        let hist = document.getElementById("dmExam").value;
        document.getElementById("history").value = hist;
        let patna = document.getElementById("name").value;
        document.getElementById("pn1").value = patna;
        let ag = document.getElementById("age").value;
        document.getElementById("age1").value = ag;
        let ixd2 = document.getElementById("ixadv").value;
        document.getElementById("ixd1").value = ixd2;
        let gi = document.getElementById("GI1").value;
        let gi1 = document.getElementById("GI2").value;
        document.getElementById("GeneralInstruction1").value = gi+gi1;
        let na1= document.getElementById("name1").value;
        document.getElementById("n1").value=na1;
        let pur1 = document.getElementById("purpose1").value;
        document.getElementById("p1").value = pur1;
        let fre1 = document.getElementById("frequency1").value;
        document.getElementById("f1").value = fre1;
        let specins1 = document.getElementById("SpecialInstructions1").value;
        document.getElementById("i1").value = specins1;
        let unip1 = document.getElementById("upr1").value;
        document.getElementById("u1").value = unip1;
        let dur1 = document.getElementById("duration1").value;
        document.getElementById("d1").value = dur1;
        let na2= document.getElementById("name2").value;
        document.getElementById("n2").value=na2;
        let pur2 = document.getElementById("purpose2").value;
        document.getElementById("p2").value = pur2;
        let fre2 = document.getElementById("frequency2").value;
        document.getElementById("f2").value = fre2;
        let specins2 = document.getElementById("SpecialInstructions2").value;
        document.getElementById("i2").value = specins2;
        let unip2 = document.getElementById("upr2").value;
        document.getElementById("u2").value = unip2;
        let dur2 = document.getElementById("duration2").value;
        document.getElementById("d2").value = dur2;
        let na3= document.getElementById("name3").value;
        document.getElementById("n3").value=na3;
        let pur3 = document.getElementById("purpose3").value;
        document.getElementById("p3").value = pur3;
        let fre3 = document.getElementById("frequency3").value;
        document.getElementById("f3").value = fre3;
        let specins3 = document.getElementById("SpecialInstructions3").value;
        document.getElementById("i3").value = specins3;
        let unip3 = document.getElementById("upr3").value;
        document.getElementById("u3").value = unip3;
        let dur3 = document.getElementById("duration3").value;
        document.getElementById("d3").value = dur3;
        let na4= document.getElementById("name4").value;
        document.getElementById("n4").value=na4;
        let pur4 = document.getElementById("purpose4").value;
        document.getElementById("p4").value = pur4;
        let fre4 = document.getElementById("frequency4").value;
        document.getElementById("f4").value = fre4;
        let specins4 = document.getElementById("SpecialInstructions4").value;
        document.getElementById("i4").value = specins4;
        let unip4 = document.getElementById("upr4").value;
        document.getElementById("u4").value = unip4;
        let dur4 = document.getElementById("duration4").value;
        document.getElementById("d4").value = dur4;

        let na5= document.getElementById("name5").value;
        document.getElementById("n5").value=na5;
        let pur5 = document.getElementById("purpose5").value;
        document.getElementById("p5").value = pur5;
        let fre5 = document.getElementById("frequency5").value;
        document.getElementById("f5").value = fre5;
        let specins5 = document.getElementById("SpecialInstructions5").value;
        document.getElementById("i5").value = specins5;
        let unip5 = document.getElementById("upr5").value;
        document.getElementById("u5").value = unip5;
        let dur5 = document.getElementById("duration5").value;
        document.getElementById("d5").value = dur5;

        let na6= document.getElementById("name6").value;
        document.getElementById("n6").value=na6;
        let pur6 = document.getElementById("purpose6").value;
        document.getElementById("p6").value = pur6;
        let fre6 = document.getElementById("frequency6").value;
        document.getElementById("f6").value = fre6;
        let specins6 = document.getElementById("SpecialInstructions6").value;
        document.getElementById("i6").value = specins6;
        let unip6 = document.getElementById("upr6").value;
        document.getElementById("u6").value = unip6;
        let dur6 = document.getElementById("duration6").value;
        document.getElementById("d6").value = dur6;

        let na7= document.getElementById("name7").value;
        document.getElementById("n7").value=na7;
        let pur7 = document.getElementById("purpose7").value;
        document.getElementById("p7").value = pur7;
        let fre7 = document.getElementById("frequency7").value;
        document.getElementById("f7").value = fre7;
        let specins7 = document.getElementById("SpecialInstructions7").value;
        document.getElementById("i7").value = specins7;
        let unip7 = document.getElementById("upr7").value;
        document.getElementById("u7").value = unip7;
        let dur7 = document.getElementById("duration7").value;
        document.getElementById("d7").value = dur7;

        let na8= document.getElementById("name8").value;
        document.getElementById("n8").value=na8;
        let pur8 = document.getElementById("purpose8").value;
        document.getElementById("p8").value = pur8;
        let fre8 = document.getElementById("frequency8").value;
        document.getElementById("f8").value = fre8;
        let specins8 = document.getElementById("SpecialInstructions8").value;
        document.getElementById("i8").value = specins8;
        let unip8 = document.getElementById("upr8").value;
        document.getElementById("u8").value = unip8;
        let dur8 = document.getElementById("duration8").value;
        document.getElementById("d8").value = dur8;

        let na9= document.getElementById("name9").value;
        document.getElementById("n9").value=na9;
        let pur9 = document.getElementById("purpose9").value;
        document.getElementById("p9").value = pur9;
        let fre9 = document.getElementById("frequency9").value;
        document.getElementById("f9").value = fre9;
        let specins9 = document.getElementById("SpecialInstructions9").value;
        document.getElementById("i9").value = specins9;
        let unip9 = document.getElementById("upr9").value;
        document.getElementById("u9").value = unip9;
        let dur9 = document.getElementById("duration9").value;
        document.getElementById("d9").value = dur9;

        let na10= document.getElementById("name10").value;
        document.getElementById("n10").value=na10;
        let pur10 = document.getElementById("purpose10").value;
        document.getElementById("p10").value = pur10;
        let fre10 = document.getElementById("frequency10").value;
        document.getElementById("f10").value = fre10;
        let specins10 = document.getElementById("SpecialInstructions10").value;
        document.getElementById("i10").value = specins10;
        let unip10 = document.getElementById("upr10").value;
        document.getElementById("u10").value = unip10;
        let dur10 = document.getElementById("duration10").value;
        document.getElementById("d10").value = dur10;

        let na11= document.getElementById("name11").value;
        document.getElementById("n11").value=na11;
        let pur11 = document.getElementById("purpose11").value;
        document.getElementById("p11").value = pur11;
        let fre11 = document.getElementById("frequency11").value;
        document.getElementById("f11").value = fre11;
        let specins11= document.getElementById("SpecialInstructions11").value;
        document.getElementById("i11").value = specins11;
        let unip11 = document.getElementById("upr11").value;
        document.getElementById("u11").value = unip11;
        let dur11 = document.getElementById("duration11").value;
        document.getElementById("d11").value = dur11;

        let na12= document.getElementById("name12").value;
        document.getElementById("n12").value=na12;
        let pur12 = document.getElementById("purpose12").value;
        document.getElementById("p12").value = pur12;
        let fre12 = document.getElementById("frequency12").value;
        document.getElementById("f12").value = fre12;
        let specins12 = document.getElementById("SpecialInstructions12").value;
        document.getElementById("i12").value = specins12;
        let unip12 = document.getElementById("upr12").value;
        document.getElementById("u12").value = unip12;
        let dur12 = document.getElementById("duration12").value;
        document.getElementById("d12").value = dur12;

        let na13= document.getElementById("name13").value;
        document.getElementById("n13").value=na13;
        let pur13 = document.getElementById("purpose13").value;
        document.getElementById("p13").value = pur13;
        let fre13 = document.getElementById("frequency13").value;
        document.getElementById("f13").value = fre13;
        let specins13 = document.getElementById("SpecialInstructions13").value;
        document.getElementById("i13").value = specins13;
        let unip13 = document.getElementById("upr13").value;
        document.getElementById("u13").value = unip13;
        let dur13 = document.getElementById("duration13").value;
        document.getElementById("d13").value = dur13;

        let na14= document.getElementById("name14").value;
        document.getElementById("n14").value=na14;
        let pur14 = document.getElementById("purpose14").value;
        document.getElementById("p14").value = pur14;
        let fre14 = document.getElementById("frequency14").value;
        document.getElementById("f14").value = fre14;
        let specins14 = document.getElementById("SpecialInstructions14").value;
        document.getElementById("i14").value = specins14;
        let unip14 = document.getElementById("upr14").value;
        document.getElementById("u14").value = unip14;
        let dur14 = document.getElementById("duration14").value;
        document.getElementById("d14").value = dur14;

        let na15= document.getElementById("name15").value;
        document.getElementById("n15").value=na15;
        let pur15 = document.getElementById("purpose15").value;
        document.getElementById("p15").value = pur15;
        let fre15 = document.getElementById("frequency15").value;
        document.getElementById("f15").value = fre15;
        let specins15 = document.getElementById("SpecialInstructions15").value;
        document.getElementById("i15").value = specins15;
        let unip15 = document.getElementById("upr15").value;
        document.getElementById("u15").value = unip15;
        let dur15 = document.getElementById("duration15").value;
        document.getElementById("d15").value = dur15;


    }


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
        <script type="text/javascript">
        $(document).ready(function() {
            console.log("abc")
            $(".drug5").change(function() {
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
                        $('.purpose5').val(data.purpose_id)
                        $('.frequency5').val(data.frequency_id)
                        $('.duration5').val(data.duration_id)
                        $('.specialInstructions5').val(data.special_instruction_id)
                        $('.up5').val(data.unit_price)
                        $('.item5').val(data.unit_price)
                        $('.dur5').val(data.duration_in_days)
                        $('.dai5').val(data.daily_cost)
                        $('.day75').val(data.weekly_cost)
                        $('.day305').val(data.monthly_cost)

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
            $(".drug6").change(function() {
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
                        $('.purpose6').val(data.purpose_id)
                        $('.frequency6').val(data.frequency_id)
                        $('.duration6').val(data.duration_id)
                        $('.specialInstructions6').val(data.special_instruction_id)
                        $('.up6').val(data.unit_price)
                        $('.item6').val(data.unit_price)
                        $('.dur6').val(data.duration_in_days)
                        $('.dai6').val(data.daily_cost)
                        $('.day76').val(data.weekly_cost)
                        $('.day306').val(data.monthly_cost)

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
            $(".drug7").change(function() {
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
                        $('.purpose7').val(data.purpose_id)
                        $('.frequency7').val(data.frequency_id)
                        $('.duration7').val(data.duration_id)
                        $('.specialInstructions7').val(data.special_instruction_id)
                        $('.up7').val(data.unit_price)
                        $('.item7').val(data.unit_price)
                        $('.dur7').val(data.duration_in_days)
                        $('.dai7').val(data.daily_cost)
                        $('.day77').val(data.weekly_cost)
                        $('.day307').val(data.monthly_cost)

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
            $(".drug8").change(function() {
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
                        $('.purpose8').val(data.purpose_id)
                        $('.frequency8').val(data.frequency_id)
                        $('.duration8').val(data.duration_id)
                        $('.specialInstructions8').val(data.special_instruction_id)
                        $('.up8').val(data.unit_price)
                        $('.item8').val(data.unit_price)
                        $('.dur8').val(data.duration_in_days)
                        $('.dai8').val(data.daily_cost)
                        $('.day78').val(data.weekly_cost)
                        $('.day308').val(data.monthly_cost)

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
            $(".drug9").change(function() {
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
                        $('.purpose9').val(data.purpose_id)
                        $('.frequency9').val(data.frequency_id)
                        $('.duration9').val(data.duration_id)
                        $('.specialInstructions9').val(data.special_instruction_id)
                        $('.up9').val(data.unit_price)
                        $('.item9').val(data.unit_price)
                        $('.dur9').val(data.duration_in_days)
                        $('.dai9').val(data.daily_cost)
                        $('.day79').val(data.weekly_cost)
                        $('.day309').val(data.monthly_cost)

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
            $(".drug10").change(function() {
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
                        $('.purpose10').val(data.purpose_id)
                        $('.frequency10').val(data.frequency_id)
                        $('.duration10').val(data.duration_id)
                        $('.specialInstructions10').val(data.special_instruction_id)
                        $('.up10').val(data.unit_price)
                        $('.item10').val(data.unit_price)
                        $('.dur10').val(data.duration_in_days)
                        $('.dai10').val(data.daily_cost)
                        $('.day710').val(data.weekly_cost)
                        $('.day3010').val(data.monthly_cost)

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
            $(".drug11").change(function() {
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
                        $('.purpose11').val(data.purpose_id)
                        $('.frequency11').val(data.frequency_id)
                        $('.duration11').val(data.duration_id)
                        $('.specialInstructions11').val(data.special_instruction_id)
                        $('.up11').val(data.unit_price)
                        $('.item11').val(data.unit_price)
                        $('.dur11').val(data.duration_in_days)
                        $('.dai11').val(data.daily_cost)
                        $('.day711').val(data.weekly_cost)
                        $('.day3011').val(data.monthly_cost)

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
            $(".drug12").change(function() {
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
                        $('.purpose12').val(data.purpose_id)
                        $('.frequency12').val(data.frequency_id)
                        $('.duration12').val(data.duration_id)
                        $('.specialInstructions12').val(data.special_instruction_id)
                        $('.up12').val(data.unit_price)
                        $('.item12').val(data.unit_price)
                        $('.dur12').val(data.duration_in_days)
                        $('.dai12').val(data.daily_cost)
                        $('.day712').val(data.weekly_cost)
                        $('.day3012').val(data.monthly_cost)

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
            $(".drug13").change(function() {
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
                        $('.purpose13').val(data.purpose_id)
                        $('.frequency13').val(data.frequency_id)
                        $('.duration13').val(data.duration_id)
                        $('.specialInstructions13').val(data.special_instruction_id)
                        $('.up13').val(data.unit_price)
                        $('.item13').val(data.unit_price)
                        $('.dur13').val(data.duration_in_days)
                        $('.dai13').val(data.daily_cost)
                        $('.day713').val(data.weekly_cost)
                        $('.day3013').val(data.monthly_cost)

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
            $(".drug14").change(function() {
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
                        $('.purpose14').val(data.purpose_id)
                        $('.frequency14').val(data.frequency_id)
                        $('.duration14').val(data.duration_id)
                        $('.specialInstructions14').val(data.special_instruction_id)
                        $('.up14').val(data.unit_price)
                        $('.item14').val(data.unit_price)
                        $('.dur14').val(data.duration_in_days)
                        $('.dai14').val(data.daily_cost)
                        $('.day714').val(data.weekly_cost)
                        $('.day3014').val(data.monthly_cost)

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



        <script id="links">




    $(document).ready(function(){

        setInterval(function() {



        // window.setInterval.listview('refresh', 10000);
        // function fetchPatients(){
          $.ajax({
             type:"GET",
              url:"/fetch_waiting_patients",
              dataType:"json",
              success: function(response){

                                    $('.appointmentbody').empty();
                 $.each(response.waiting_patients,function(key,item){


                    $('.appointmentbody').append(

                        '<tr>\
                        <td>'+item.appointment_no+'</td>\
                        <td>'+item.patient.cr_no+'</td>\
                        <td>'+item.patient.first_name+'</td>\
                        </tr>'

                    );

                 });
              }

          });
      // }
        }, 1000);
    });


        </script>

    <script id="links">




        $(document).ready(function(){

            setInterval(function() {



                // window.setInterval.listview('refresh', 10000);
                // function fetchPatients(){
                $.ajax({
                    type:"GET",
                    url:"/fetch_labs_awaited",
                    dataType:"json",
                    success: function(response){

                        console.log(response.labs_awaited);
                        $('.labsAwaitedBody').empty();
                        $.each(response.labs_awaited,function(key,item){


                            $('.labsAwaitedBody').append(

                                '<tr>\
                        <td>'+item.patient.cr_no+'</td>\
                        <td>'+item.patient.first_name+'</td>\
                        <td><a href="viewReport/'+item.id+'"   class="btn btn-primary btn-sm">View Report</a></td>\
                        <td><a href="{{"deleteTest/"}}"   class="btn btn-primary btn-sm">Delete</a></td>\
                        </tr>'

                            );

                        });
                    },error:function(request, status, error){
                        console.log(request.responseText);}

                });

            }, 1000);
        });


    </script>
    <script>
        function functionPrint() {
            document.getElementById("nonPrintable").className += "noPrint";
            window.print();
        }
    </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</div>
</body>
</html>
