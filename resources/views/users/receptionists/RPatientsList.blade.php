
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
                    <h3> This is the list of all Patients:</h3>
                </div>
                <!-- end card-header -->

                <div class="card-body">

                    @if(session()->has('error2'))
                        <div class="alert alert-danger">
                            <p>{{session()->get('error2')}}</p>
                        </div>
                    @endif
                    <div class="table-responsive">
                        @if(session()->has('success'))
                            <div class="alert alert-light alert-elevate" role="alert">
                                <div class="alert-icon"><i class="flaticon2-check-mark kt-font-success"></i></div>
                                <div class="alert-text">
                                    {{session()->get('success')}}
                                </div>
                            </div>
                        @endif
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width:100px">Patient CR_NO</th>
                                <th style="width:100px">Patient Name</th>
                                <th style="width:100px">Date/Time of registration</th>
                                <th style="width:100px">CNIC</th>
                                <th style="width:100px">Gender</th>
                                <th style="width:100px">Date Of Birth</th>
                                <th style="width:100px">Age</th>
                                <th style="width:100px">Marital Status</th>
                                <th style="width:100px">Address Country</th>
                                <th style="width:100px">Address Province</th>
                                <th style="width:100px">Address District</th>
                                <th style="width:100px">Address Tehsil</th>
                                <th style="width:100px">Address Detail</th>
                                <th style="width:100px">Address Final</th>
                                <th style="width:90px">Mobile No 1</th>
                                <th style="width:100px">Mobile No 2</th>
                                <th style="width:100px">Mobile No 3</th>
                                <th style="width:100px">Whatsapp No</th>
                                <th style="width:100px">Email</th>
                                <th style="width:100px">Profession</th>
                                <th style="width:100px">Professional Designation</th>
                                <th style="width:100px">Professional Address</th>
                                <th style="width:100px">Native Language</th>
                                <th style="width:100px">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $datum)
                                <tr>

                                    <td>{{$datum['cr_no']}}</td>
                                    <td>{{$datum['first_name']}} {{$datum['last_name']}}</td>
{{--                                    <td>{{$datum->doctor['first_name']}} {{$datum->doctor['last_name']}}</td>--}}
                                    <td>{{$datum['created_at']}} </td>
                                    <td>{{$datum['national_id']}}</td>
                                    <td>{{$datum['gender']}}</td>
                                    <td>{{$datum['birth_date']}}</td>
                                    <td>{{$datum['age']}}</td>
                                    <td>{{$datum['marital_status']}}</td>
                                    <td>{{$datum['address_country']}}</td>
                                    <td>{{$datum['address_province']}}</td>
                                    <td>{{$datum['address_district']}}</td>
                                    <td>{{$datum['address_tehsil']}}</td>
                                    <td>{{$datum['address_detail']}}</td>
                                    <td>{{$datum['final_address']}}</td>
                                    <td>{{$datum['mobile_no_1']}}</td>
                                    <td>{{$datum['mobile_no_2']}}</td>
                                    <td>{{$datum['mobile_no_3']}}</td>
                                    <td>{{$datum['whatsapp_number']}}</td>
                                    <td>{{$datum['email']}}</td>
                                    <td>{{$datum['profession']}}</td>
                                    <td>{{$datum['professional_designation']}}</td>
                                    <td>{{$datum['professional_address']}}</td>
                                    <td>{{$datum['native_language']}}</td>
                                    <td>
                                        <a href="{{"deleteProduct/".$datum['id']}}" style="float:left" class="btn btn-primary btn-sm-sh">Edit</a><br>
                                        <a href="" style="float:right"  class="btn btn-primary btn-sm-sh">Delete</a>
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







