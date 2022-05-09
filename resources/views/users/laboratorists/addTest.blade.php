<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>Laboratorist</title>
</head>
<body style="background-color: rgb(224, 224, 224);">

<div class="container">
    @include('users.laboratorists.laboratoristsHeader')
    <h1 style="text-align: center; font-size: 48px;padding-bottom: 1%;color:white;margin-top: 2%; background-color: rgb(0, 0, 0);">Insert Lab Test Form</h1>
    @if(session()->has('success'))
        <div class="alert alert-light alert-elevate" role="alert">
            <div class="alert-icon"><i class="flaticon2-check-mark kt-font-success"></i></div>
            <div class="alert-text">
                {{session()->get('success')}}
            </div>
        </div>
    @endif
    @if(session()->has('error'))
        <div class="alert alert-danger">
            <p>{{session()->get('error')}}</p>
        </div>
    @endif
    <form class="row g-3 needs-validation container" autocomplete="off"  style="padding:50px" action="{{route('insertTest')}}" method="post" novalidate>
        @csrf

        <div class="col-md-6">
            <label for="test_name" class="form-label">Test Name</label>
            <input type="text" name="test_name" class="form-control" id="test_name">
            <span class="text-danger">@error('test_name'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="test_price " class="form-label">Test Price</label>
            <input type="text" name="test_price" class="form-control" id="test_price">
            <span class="text-danger">@error('test_price'){{ $message }}@enderror</span>
        </div>

        <div class="col-12 mb-5 mx-lg-auto" style="align-self: center;">
            <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.2.27/jquery.autocomplete.min.js"></script>

</div>
</body>
</html>
