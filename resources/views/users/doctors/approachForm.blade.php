<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Approach From</title>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<div class="container">
    <div class="card-body">
        @if(session()->has('success'))
            <div class="alert alert-light alert-elevate" role="alert">
                <div class="alert-icon"><i class="flaticon2-check-mark kt-font-success"></i></div>
                <div class="alert-text">
                    {{session()->get('success')}}
                </div>
            </div>
        @endif
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
    </div>
</div>
    <form class="row g-3 needs-validation container" style="padding:50px" action="{{route('addApproach')}}" method="post" enctype="multipart/form-data" novalidate>
     @csrf
        <h3 style="text-align: center;">Patient Approach form</h3>
        <div class="col-md-6" style="width: 600px;">
            <label for="Complain" class="form-label">Presenting Complaints or Issues</label>
            <input type="text" name="Complaints_issues" class="form-control" id="complain">
            <span class="text-danger">@error('Complaints_issues'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-12" >
            <label for="apptext" class="form-label">Approach</label>
            <textarea style="width:100%;height:90vh"  name="Approach" class="form-control" id="apptext"></textarea>
        </div>
        <hr>
        <div class="col-md-2" style="width: 600px;">
            <label for="link1" class="form-label">link 1</label>
            <input type="text" name="Link1" class="form-control" id="link1">
        </div>

        <div class="col-md-2"style="width: 600px;">
            <label for="link2" class="form-label">link 2</label>
            <input type="text" name="Link2" class="form-control" id="link2">
        </div>

        <div class="col-md-2" style="width: 600px;">
            <label for="link3" class="form-label">link 3</label>
            <input type="text" name="Link3" class="form-control" id="link3">
        </div>

        <div class="col-md-2" style="width: 600px;">
            <label for="link4" class="form-label">link 4</label>
            <input type="text" name="Link4" class="form-control" id="link4">
        </div>
        <div class="col-md-2" style="width: 600px;">
            <label for="link4" class="form-label">attachment 1</label>
            <input type="file" name="attachment1" class="form-control" id="link4">
        </div>
        <div class="col-md-2" style="width: 600px;">
            <label for="link4" class="form-label">attachment 2</label>
            <input type="file" name="attachment2" class="form-control" id="link4">
        </div>
        <div class="col-md-2" style="width: 600px;">
            <label for="link4" class="form-label">attachment 3</label>
            <input type="file" name="attachment3" class="form-control" id="link4">
        </div>
        <div class="col-md-2" style="width: 600px;">
            <label for="link4" class="form-label">attachment 4</label>
            <input type="file" name="attachment4" class="form-control" id="link4">
        </div>

        <br>
        <div class="col-12 mb-5 mx-lg-auto" style="align-self: center;">
            <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
        </div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>

</body>
</html>

