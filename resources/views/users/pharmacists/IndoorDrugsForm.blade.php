<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>OPD Drug Form</title>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<div class="container">
    @if(session()->has('success'))
        <div class="alert alert-light alert-elevate" role="alert">
            <div class="alert-icon"><i class="flaticon2-check-mark kt-font-success"></i></div>
            <div class="alert-text">
                {{session()->get('success')}}
            </div>
        </div>
    @endif
    <form class="row " method="post" action="{{route('addIndoorDrugs')}}" enctype="multipart/form-data">
        @csrf
        <h3 style="text-align: center;" class="mb-5 mt-5">Indoor Drug Form</h3>
        <div class="row">
            <div class="col-md-6">
                <label class="form-label" for="Fre">Name</label><br>
                <select class="form-select" name="name" id="Fre">
                    <option value="null">Select.....</option>
                    @foreach($drugs as $drug)
                        <option value="{{$drug->short_name}}">{{$drug->short_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="Sname">Short Name<a style="color:red">  *</a></label><br/>
                <input class="form-control" type="text" id="Sname" name="short_name"><br/>
                <span class="text-danger">@error('short_name'){{ $message }}@enderror</span>
            </div>
            <div class="col-md-6">
                <label for="cl">Prescription</label><br/>
                <input class="form-control" type="text" id="cl" name="prescription">
                <span class="text-danger">@error('class'){{ $message }}@enderror</span>
            </div>
            <div class="col-md-6">
                <label for="cl">Company</label><br/>
                <input class="form-control" type="text" id="cl" name="company">
                <span class="text-danger">@error('class'){{ $message }}@enderror</span>
            </div>
            <div class="col-md-6">
                <label for="Generic">Generic</label><br/>
                <input class="form-control" type="text" id="Generic" name="generic">
                <span class="text-danger">@error('generic'){{ $message }}@enderror</span>
            </div>
            <div class="col-md-6">
                <label for="Notes">Notes</label><br>
                <input class="form-control" type="text" id="Notes" name="notes">
            </div>
            <div class="col-md-2">
                <label for="Retailprice">Retail Price</label>
                <input class="form-control w-50" type="text" id="Retailprice" name="retail_price">
                <span class="text-danger">@error('retail_price'){{ $message }}@enderror</span>
            </div>
            <div class="col-md-2">
                 <label for="Uprice">Unit Price</label>
                 <input class="form-control w-50" type="text" id="Uprice" name="unit_price"  >
            </div>

            <div class="col-md-6">
                <label for="detail">Details</label>
                <input class="form-control " type="text" id="detail" name="details"  >
            </div>
            <div class="col-12 mb-5 mx-lg-auto mt-5" style="align-self: center;">
                <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
            </div>
        </div>

    </form>
</div>
</body>
</html>
