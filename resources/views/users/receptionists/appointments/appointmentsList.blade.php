
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Reception/List Appointment</title>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.receptionists.receptionistHeader')
    <!-- Start content -->
    <div class="content">
            <!-- end row -->
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">

                        <div class="card-header">
                            <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-labelledby="modal_add_user" aria-hidden="true" id="modal_add_user">
                                <div class="modal-dialog">

                                </div>
                            </div>
                            <h3> This is the list of all Appointments:</h3>
                        </div>
                        <br>
                        <!-- end card-header -->

                        <div class="card-body">

                            @if(session()->has('error'))
                                <div class="alert alert-danger">
                                    <p>{{session()->get('error')}}</p>
                                </div>
                            @endif
                                <form method="post" action="{{route('searchAppointment')}}">
                                    @csrf
                                <div class="input-group">

                                    <select id="inputState" name="search" class="form-select">
                                        <option value="null" selected>Select...</option>
                                        <option value="today">Today</option>
                                        <option value="all_appointments">All Appointments</option>

                                    </select>
                                    <span class="input-group-btn">
                                    <div class="col-md-2" style="width: 100px;">
                                        <button id="Generalform" type="submit" class="btn btn-success btn-secondary" type="button">
                                          Search
                                  </button></div>
                                </span>
                                  </div>
                                </form>
                                <br>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width:100px">Patient CR_NO</th>
                                        <th style="width:100px">Patient Name</th>
                                        <th style="width:100px">Doctor Name</th>
                                        <th style="width:100px">Appointment Date</th>
                                        <th style="width:100px">Appointment Time</th>
                                        <th style="width:100px">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $datum)
                                        <tr>

                                            <td>{{$datum->patient['cr_no']}}</td>
                                            <td>{{$datum->patient['first_name']}} {{$datum->patient['last_name']}}</td>
                                            <td>{{$datum->doctor['first_name']}} {{$datum->doctor['last_name']}}</td>
                                            <td>{{$datum['date']}}</td>
                                            <td>{{$datum['time']}}</td>
                                            <td>
                                                <a href="{{"updateAppointment/".$datum['id']}}" class="btn btn-primary btn-sm-sh">Edit</a>
                                                <a href="{{route('deleteAppointment',$datum->id)}}" class="btn btn-primary btn-sm-sh">Delete</a>
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>


                        </div>
                        <!-- end card-body -->

                    </div>
                    <!-- end card -->

                </div>
                <!-- end col -->

            </div>
        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->

</body>
</html>





