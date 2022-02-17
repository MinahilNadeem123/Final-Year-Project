<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Reception/Add Appointment</title>
</head>
<body style="background-color: rgb(224, 224, 224);">

<div class="container">
    @include('users.receptionists.receptionistHeader')
    <h3 style="text-align: center;">Add Appointment</h3>
    <form class="row g-3 needs-validation container" style="padding:50px" action="{{route('addAppointment')}}" method="post" novalidate>
        @csrf
        <div class="col-md-6">
            <label for="Fre" class="form-label">Patient</label><br>
            <select class="form-select"   name="patient_id" id="Fre">

                @foreach($patients as $patient)
                    <option value="{{$patient->id}}">{{$patient->cr_no}} {{$patient->first_name}}</option>
                @endforeach
            </select>
            <span class="text-danger">@error('patient'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="doc" class="form-label">Doctor</label><br>
            <select class="form-select"   name="doctor_id" id="doc">

                @foreach($doctors as $doctor)
                    <option value="{{$doctor['id']}}">{{$doctor['first_name']}} {{$doctor['last_name']}}</option>
                @endforeach
            </select>
            <span class="text-danger">@error('doctor'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6 input-field">

            <label for="cr_no" class="form-label" >Date</label>
            <input type="date" name="date" class="typeahead form-control" id="cr_no" >
            <span class="text-danger">@error('date'){{ $message }}@enderror</span>
        </div>

        <div class="col-md-6">
            <label for="dor" class="form-label">Time</label>
            <input type="time" name="time" value="" class="form-control" id="dor">
            <span class="text-danger">@error('time'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-12">
            <label for="notes" class="form-label">Notes</label>
            <textarea type="text" name="notes"  class="form-control" id="notes"></textarea>
            <span class="text-danger">@error('Notes'){{ $message }}@enderror</span>
        </div>



        <div class="col-12 mb-5 mx-lg-auto" style="align-self: center;">
            <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
        </div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</div>
</body>
</html>
