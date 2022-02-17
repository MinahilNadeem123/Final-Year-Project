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
    <form class="row " method="post" action="{{route('addDrugs')}}" enctype="multipart/form-data">
       @csrf
        <h3 style="text-align: center;" class="mb-5 mt-5">OPD Drug Form</h3>
        <div class="row">
            <div class="col-md-6">
                <label for="Sname">Short Name</label><br/>
                <input class="form-control" type="text" id="Sname" name="short_name"><br/>
                <span class="text-danger">@error('short_name'){{ $message }}@enderror</span>
            </div>
            <div class="col-md-6">
                <label for="cl">Class</label><br/>
                <input class="form-control" type="text" id="cl" name="class">
                <span class="text-danger">@error('class'){{ $message }}@enderror</span>
            </div>
            <div class="col-md-6">
                <label class="form-label" for="Bname">Brand Name</label><br/>
                <input type="text" id="Bname" class="form-control"   name="company">
                <span class="text-danger">@error('company'){{ $message }}@enderror</span>
            </div>
            <div class="col-md-6">
                <label for="Notes">Notes</label><br>
                <input class="form-control" type="text" id="Notes" name="notes">
            </div>
            <div class="col-md-6">
                <label for="Generic">Generic</label><br/>
                <input class="form-control" type="text" id="Generic" name="generic">
                <span class="text-danger">@error('generic'){{ $message }}@enderror</span>
            </div>
            <div class="col-md-6">
                <label for="Instruction1">Instruction1</label><br/>
                <input class="form-control" type="text" id="Instruction1" name="instruction1">
            </div>
            <div class="col-md-6">
                <label class="form-label" for="Fre">Frequency</label><br>
                <select class="form-select" name="frequency_id" id="Fre">
                    <option value="null">Select.....</option>
                    @foreach($frequencies as $frequency)
                        <option value="{{$frequency->frequency}}">{{$frequency->frequency}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="Instruction2">Instruction2</label><br/>
                <input class="form-control" type="text" id="Instruction2" name="instruction2">
            </div>
            <div class="col-md-6">
                <label class="form-label" for="Instruction">Instruction</label><br/>
                <select class="form-select" name="special_instruction_id" id="Instruction">
                    <option value="null">Select.....</option>
                    @foreach($instructions as $instruction)
                        <option value="{{$instruction->special_instruction}}">{{$instruction->special_instruction}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="Instruction3">Instruction3</label><br/>
                <input class="form-control" type="text" id="Instruction3" name="instruction3">
            </div>
            <div class="col-md-6">
                <label class="form-label" for="Duration">Duration</label><br/>
                <select class="form-select" name="duration_id" id="Duration">
                    <option value="null">Select.....</option>
                    @foreach($durations as $duration)
                        <option value="{{$duration->duration}}">{{$duration->duration}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="Instruction4">Instruction4</label><br/>
                <input class="form-control" type="text" id="Instruction4" name="instruction4">
            </div>
            <div class="col-md-6">
                <label class="form-label" for="Purspose">Purpose</label><br/>
                <select class="form-select" name="purpose_id" id="Purspose">
                    <option value="null">Select.....</option>
                    @foreach($purposes as $purpose)
                        <option value="{{$purpose->purpose}}">{{$purpose->purpose}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label" for="details">Details</label><br/>
               <input class="form-control" type="text" name="details" id="details">
            </div>

         <div class="row">
             <div class="col-md-6">
                 <div class="row">
                <div class="col-md-6">

                    <label for="Retailprice">Retail Price</label><br/>
                    <input class="form-control w-50" type="text" id="Retailprice" name="retail_price">
                    <span class="text-danger">@error('retail_price'){{ $message }}@enderror</span>
                    <br/>

                    <label for="Packing ">Packing</label><br/>
                    <input class="form-control w-50" type="text" id="Packing" name="packing">
                    <br/>
                    <label for="Uprice">Unit Price</label><br/>
                    <input class="form-control w-50" type="text" id="Uprice" name="unit_price"  readonly>


                    <br/>  <label for="dcost">Daily Cost</label><br/>
                    <input class="form-control w-50" type="text" id="dcost" name="daily_cost" readonly>
                    <br/>  <label for="mcost w-50">Weekly Cost</label><br/>
                    <input class="form-control w-50" type="text" id="wcost" name="weekly_cost" readonly>
                    <br/>  <label for="mcost">Monthly Cost</label><br/>
                    <input class="form-control w-50" type="text" id="mcost" name="monthly_cost" readonly>

                </div>

                <div class="col-md-6">
                    <label for="Uppd">Unit item per day</label><br/>
                    <input class="form-control w-50" type="text" id="Uppd" name="unit_items_per_day">
                    <br/>
                    <label for="did">Duration in days</label><br/>
                    <input class="form-control w-50" type="text" id="did" name="duration_in_days">
                    <br/>  <label for="Rx">RX duration cost</label><br/>
                    <input class="form-control w-50" type="text" id="Rx" name="duration_in_days" readonly>
                </div>
                 </div>
             </div>
         </div>
        <div class="col-12 mb-5 mx-lg-auto mt-5" style="align-self: center;">
            <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
        </div>
        </div>
    </form>



<script>
    var Amount = document.getElementById("Retailprice");
    var Amethod = document.getElementById("Packing");
    var unititem= document.getElementById("Uppd")
    var Did= document.getElementById("did")
    Amount.addEventListener("input", calc);
    Amethod.addEventListener("input", calc);
    unititem.addEventListener("input", calc);
    Did.addEventListener("input",calc);
    function calc(){
        var a2 = 0;
        var	a = Amount.value;
        if(a > 0)
            a2 = a

        var b2 = 0;
        var	b = Amethod.value;
        if(b > 0)
            b2 = b


        var c2 = 0;
        var	c = unititem.value;
        if(c > 0)
            c2 = c

        var d2=0;
        var d= Did.value;
        if(d > 0){
            d2=d
        }
        console.log(a, b);
        var unitprice = parseInt(a2) /parseInt(b2);

        document.getElementById("Uprice").value= unitprice

        var dcost = unitprice * parseInt(c2);

        document.getElementById("dcost").value = dcost;
        var Rx=d2 * dcost;
        document.getElementById("wcost").value = dcost*7;
        document.getElementById("mcost").value = dcost*30;
        document.getElementById("Rx").value = Rx;

    }

</script>
</body>
</html>
