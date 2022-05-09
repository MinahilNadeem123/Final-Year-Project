<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Doctor</title>
</head>
<body style="background-color: rgb(255, 255, 255);">
@include('users.doctors.headerdoc')
<h1 style="text-align: center; font-size: 48px;padding-bottom: 1%;color:white;margin-top: 2%; background-color: rgb(0, 0, 0);">Doctor Dashboard</h1><br>
<div class="card-body">

@if(session()->has('error'))
    <div class="alert alert-danger" style="background-color:red">
        <p>{{session()->get('error')}}</p>
    </div>
@endif

@if(session()->has('success'))
    <div class="alert alert-light alert-elevate" role="alert">
        <div class="alert-icon"><i class="flaticon2-check-mark kt-font-success"></i></div>
        <div class="alert-text">
            {{session()->get('success')}}
        </div>
    </div>
@endif
</div>
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <!-- Content goes here...-->

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th style="width:100px">Patient CR_NO</th>
                <th style="width:100px">Patient Name</th>
                <th style="width:100px">Time Of Arrival</th>
                <th style="width:100px">Action</th>
            </tr>
            </thead>
            <tbody>


            @if(isset($data))
@foreach($data as $datum)
                <tr>

                    <td>{{$datum->patient->cr_no}}</td>
                    <td>{{$datum->patient->first_name}} </td>
                        <td>{{$current_visit->created_at}}</td>
                    <td>
                        <a href="{{"check/".$datum->patient->id}}" class="btn btn-primary btn-sm-sh">Check</a>
                    </td>

                </tr>
@endforeach
            @elseif(session()->has('error1'))

                <tr class="table-info">
                    <td class="table-info">No Patients To Check</td>
                    <td class="table-info"></td>
                    <td class="table-info"></td>
                    <td class="table-info"></td>
                </tr>
            @endif

            </tbody>
        </table>
    </div>

</div>

</body>
