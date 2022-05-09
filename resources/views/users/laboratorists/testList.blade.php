
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
    <title>Laboratorist/List Test</title>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.laboratorists.laboratoristsHeader')
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
                    <h3>Available Tests:</h3>
                </div>
                <!-- end card-header -->

                <div class="card-body">

                    @if(session()->has('error2'))
                        <div class="alert alert-danger">
                            <p>{{session()->get('error2')}}</p>
                        </div>
                    @endif

                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            <p>{{session()->get('error')}}</p>
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
                                <th style="width:100px">Test Name</th>
                                <th style="width:100px">Price</th>
                                <th style="width:100px">Action</th>
                                <th style="width:100px">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $datum)
                                <tr>
                                    <td>{{$datum['name']}}</td>
                                    <td>{{$datum['template']}}</td>
                                    <td align="center">
                                        <a href="{{"updateTest/".$datum['id']}}" class="btn btn-primary btn-sm">Edit</a><br>
                                    </td>
                                    <td align="center">
                                        <a href="{{"deleteTest/".$datum['id']}}"   class="btn btn-primary btn-sm">Delete</a>
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







