<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Laboratorist Dashboard</title>
</head>
<body style="background-color: rgb(255, 255, 255);">

<h1 style="text-align: center; font-size: 48px;padding-bottom: 1%;color:white;margin-top: 2%; background-color: rgb(0, 0, 0);">Laboratorist Dashboard</h1><br>

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <!-- Content goes here...-->

    <h2 style="margin-left: 200px;"> FORMS</h2>
    <hr style="margin-left:15%; ;width: 950px;" >
    <div style="margin-left:200px">
        <a href="{{route('addTest')}}" style="background-color:rgb(231, 236, 236);color:black;height:125px; width:300px;" class="btn   btn-lg btn-font-lg " role="button" aria-pressed="true">
            <h4 style="margin:40px">Add Test</h4></a>
        &nbsp &nbsp &nbsp
        <a href="{{route('testList')}}" style="height:125px; width:300px;background-color:rgb(231, 236, 236);color:black" class="btn  btn-lg btn-font-lg " role="button" aria-pressed="true">
            <h4 style="margin:40px">Test List</h4></a>
        &nbsp &nbsp &nbsp
        <a href="{{route('labPatientList')}}" style="background-color:rgb(231, 236, 236);color:black;height:125px; width:300px;" class="btn   btn-lg btn-font-lg " role="button" aria-pressed="true">
            <h4 style="margin:40px">Labs Patient</h4></a>
        &nbsp &nbsp &nbsp
        <br><br>
        {{--        <a href="{{route('viewAppointment')}}" style="background-color:rgb(231, 236, 236);color:black;height:125px; width:300px;" class="btn  btn-lg btn-font-lg " role="button" aria-pressed="true">--}}
        {{--            <h4 style="margin:40px">Appointment List</h4></a>--}}
        {{--        &nbsp &nbsp &nbsp--}}
        {{--        <a href="{{route('nurseDashboard')}}" style="background-color:rgb(231, 236, 236);color:black;height:125px; width:300px;" class="btn  btn-lg btn-font-lg " role="button" aria-pressed="true">--}}
        {{--            <h4 style="margin:40px">Nursing Parameters</h4></a>--}}
        {{--        &nbsp &nbsp &nbsp--}}
        {{--        <a href="{{route('OrderLabs')}}" style="background-color:rgb(231, 236, 236);color:black;height:125px; width:300px;" class="btn  btn-lg btn-font-lg " role="button" aria-pressed="true">--}}
        {{--            <h4 style="margin:40px">Order Labs Form</h4></a>--}}
        {{--        &nbsp &nbsp &nbsp<br><br>--}}
        {{--        <a href="{{route('LabEntryForm')}}" style="background-color:rgb(231, 236, 236);color:black;height:125px; width:300px;" class="btn  btn-lg btn-font-lg " role="button" aria-pressed="true">--}}
        {{--            <h4 style="margin:40px">Enter Labs Form</h4></a>--}}
        {{--        &nbsp &nbsp &nbsp--}}
        {{--        <a href="{{route('OPDDrugsForm')}}" style="background-color:rgb(231, 236, 236);color:black;height:125px; width:300px;" class="btn  btn-lg btn-font-lg " role="button" aria-pressed="true">--}}
        {{--            <h4 style="margin:40px">Drugs Form OPD</h4></a>--}}
        {{--        &nbsp &nbsp &nbsp--}}
        {{--        <a href="#" style="background-color:rgb(231, 236, 236);color:black;height:125px; width:300px;" class="btn  btn-lg btn-font-lg " role="button" aria-pressed="true">--}}
        {{--            <h4 style="margin:40px">Drugs Form Indoor</h4></a>--}}
        {{--        &nbsp &nbsp &nbsp<br><br>--}}
        {{--        <a href="{{route('treatmentProtocolForm')}}" style="background-color:rgb(231, 236, 236);color:black;height:125px; width:300px;" class="btn  btn-lg btn-font-lg " role="button" aria-pressed="true">--}}
        {{--            <h4 style="margin:40px">Treatment Protocol Form</h4></a>--}}
        {{--        &nbsp &nbsp &nbsp--}}
        {{--        <a href="{{route('nTodayRPT')}}" style="background-color:rgb(231, 236, 236);color:black;height:125px; width:300px;" class="btn  btn-lg btn-font-lg " role="button" aria-pressed="true">--}}
        {{--            <h4 style="margin:40px">N Today Report</h4></a>--}}
        {{--        &nbsp &nbsp &nbsp--}}
        {{--        <a href="{{('FeverHistoryForm')}}" style="background-color:rgb(231, 236, 236);color:black;height:125px; width:300px;" class="btn  btn-lg btn-font-lg " role="button" aria-pressed="true">--}}
        {{--            <h4 style="margin:40px">Fever History Form</h4></a>--}}



    </div>

</div>
</body>
