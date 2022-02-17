<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>Nurse</title>
</head>
<body style="background-color: rgb(224, 224, 224);">

<div class="container">
    @include('users.nurses.nurseHeader')
    <h1 style="text-align: center; font-size: 48px;padding-bottom: 1%;color:white;margin-top: 2%; background-color: rgb(0, 0, 0);">Nursing Parameters Form</h1>
    @if(session()->has('success'))
        <div class="alert alert-light alert-elevate" role="alert">
            <div class="alert-icon"><i class="flaticon2-check-mark kt-font-success"></i></div>
            <div class="alert-text">
                {{session()->get('success')}}
            </div>
        </div>
    @endif
    <form class="row g-3 needs-validation container" autocomplete="off"  style="padding:50px" action="{{route('addNursingParameters')}}" method="post" novalidate>
        @csrf



        {{--        <div class="col-md-4 input-field">--}}
        {{--            <div class="autocomplete">--}}
        {{--                <label for="myInput" class="form-label " >CRNo</label>--}}
        {{--                <input id="myInput" class="form-control" type="text" name="cr_no">--}}
        {{--                <span class="text-danger">@error('cr_no'){{ $message }}@enderror</span>--}}
        {{--            </div>--}}



        {{--        </div>--}}

        <div class="col-md-6">
            <label for="inputState">CR No</label>
            <select id="inputState" name="cr_no" class="form-select">
                <option value="null" selected>Select...</option>
                @foreach($data as $datum)
                    <option value="{{$datum->patient->cr_no}}">{{$datum->patient->cr_no}}</option>
                @endforeach
            </select>
            <span class="text-danger">@error('cr_no'){{ $message }}@enderror</span>

        </div>
        <div class="col-md-6">
            <label for="pulse_rate" class="form-label">Pulse Rate</label>
            <input type="text" name="pulse_rate" class="form-control" id="pulse_rate">
            <span class="text-danger">@error('pulse_rate'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="systolic_bp_right_arm " class="form-label">Systolic BP Right Arm</label>
            <input type="text" name="systolic_bp_right_arm" class="form-control" id="systolic_bp_right_arm">
            <span class="text-danger">@error('systolic_bp_right_arm'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="diastolic_bp_right_arm " class="form-label">Diastolic BP Right Arm</label>
            <input type="text" name="diastolic_bp_right_arm" class="form-control" id="diastolic_bp_right_arm">
            <span class="text-danger">@error('diastolic_bp_right_arm'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="respiratory_rate" class="form-label">Respiratory Rate</label>
            <input type="text" name="respiratory_rate" class="form-control" id="respiratory_rate">
            <span class="text-danger">@error('respiratory_rate'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="temperature " class="form-label">Temperature</label>
            <input type="text" name="temperature" class="form-control" id="temperature">
            <span class="text-danger">@error('temperature'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="temperature_area" class="form-label">Temperature Area</label>
            <input type="text" id="temperature_area" name="temperature_area" class="form-control">
            <span class="text-danger">@error('temperature_area'){{ $message }}@enderror</span>
        </div>

        <div class="col-6">
            <label for="oxygen_saturation" class="form-label">Oxygen Saturation</label>
            <input type="text" name="oxygen_saturation" class="form-control" id="oxygen_saturation" >
            <span class="text-danger">@error('oxygen_saturation'){{ $message }}@enderror</span>
        </div>
        <div class="col-6">
            <label for="gcs" class="form-label">GCS</label>
            <input type="text" name="gcs" class="form-control" id="gcs" >
            <span class="text-danger">@error('gcs'){{ $message }}@enderror</span>
        </div>
        <div class="col-6">
            <label for="diagnosed_case_of" class="form-label">Diagnosed Case Of</label>
            <input type="text" name="diagnosed_case_of" class="form-control" id="diagnosed_case_of" >
            <span class="text-danger">@error('diagnosed_case_of'){{ $message }}@enderror</span>
        </div>
        <div class="col-6">
            <label for="weight" class="form-label">Weight</label>
            <input type="text" name="weight" class="form-control" id="weight" >
            <span class="text-danger">@error('weight'){{ $message }}@enderror</span>
        </div>
        <div class="col-6">
            <label for="height" class="form-label">Height</label>
            <input type="text" name="height" class="form-control" id="height" >
            <span class="text-danger">@error('height'){{ $message }}@enderror</span>
        </div>


        <hr>
        <h3 style="text-align: center;">Specific Pediatric Parameters</h3>
        <div class="col-md-6">
            <label for="length" class="form-label">Length</label>
            <input type="text" name="length" class="form-control" id="length">
            <span class="text-danger">@error('length'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="head_circumference" class="form-label">Head Circumference</label>
            <input type="text" name="head_circumference" class="form-control" id="head_circumference">
            <span class="text-danger">@error('head_circumference'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="bmi_field" class="form-label">BMI Field</label>
            <input type="text" name="bmi_field" class="form-control" id="bmi_field">
            <span class="text-danger">@error('bmi_field'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="z_score_weight_for_length" class="form-label">Z-Score Weight For Length</label>
            <input type="text" name="z_score_weight_for_length" class="form-control" id="z_score_weight_for_length">
            <span class="text-danger">@error('z_score_weight_for_length'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="who_infant_weight_for_length " class="form-label">WHO Infant Weight For Length</label>
            <input type="text" name="who_infant_weight_for_length" class="form-control" id="who_infant_weight_for_length">
            <span class="text-danger">@error('who_infant_weight_for_length'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="z_score_infant_head_circumference_for_age" class="form-label">Z-Score Infant Head Circumference for Age</label>
            <input type="text" name="z_score_infant_head_circumference_for_age" class="form-control" id="z_score_infant_head_circumference_for_age">
            <span class="text-danger">@error('z_score_infant_head_circumference_for_age'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="who_infant_head_circumference_for_age_percentile" class="form-label">WHO Infant Head Circumference for Age Percentile</label>
            <input type="text" name="who_infant_head_circumference_for_age_percentile"  class="form-control" id="who_infant_head_circumference_for_age_percentile">
            <span class="text-danger">@error('who_infant_head_circumference_for_age_percentile'){{ $message }}@enderror</span>
        </div>

        <div class="col-12 mb-5 mx-lg-auto" style="align-self: center;">
            <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.2.27/jquery.autocomplete.min.js"></script>
    {{--    <script type="text/javascript">--}}
    {{--        $(document).ready(function(){--}}
    {{--           console.log('test');--}}
    {{--           $.ajax({--}}
    {{--               type:'get',--}}
    {{--               url:'{{route('search_patient')}}',--}}
    {{--               success:function (response){--}}
    {{--                   console.log(response);--}}
    {{--                   var patArray=response;--}}
    {{--                   var dataPat={};--}}
    {{--                   for (var i=0; i < patArray.length;i++){--}}
    {{--                       dataPat[patArray[i].cr_no]=null;--}}
    {{--                   }--}}
    {{--                   console.log("dataPat");--}}
    {{--                   console.log(dataPat);--}}
    {{--    $('input#cr_no1').autocomplete({--}}

    {{--    data:patArray,--}}


    {{--    });--}}

    {{--               }--}}
    {{--           })--}}
    {{--        });--}}
    {{--    </script>--}}
    {{--    <script>--}}

    {{--        function autocomplete(inp, arr) {--}}
    {{--            /*the autocomplete function takes two arguments,--}}
    {{--            the text field element and an array of possible autocompleted values:*/--}}
    {{--            var currentFocus;--}}
    {{--            /*execute a function when someone writes in the text field:*/--}}
    {{--            inp.addEventListener("input", function(e) {--}}
    {{--                var a, b, i, val = this.value;--}}
    {{--                /*close any already open lists of autocompleted values*/--}}
    {{--                closeAllLists();--}}
    {{--                if (!val) { return false;}--}}
    {{--                currentFocus = -1;--}}
    {{--                /*create a DIV element that will contain the items (values):*/--}}
    {{--                a = document.createElement("DIV");--}}
    {{--                a.setAttribute("id", this.id + "autocomplete-list");--}}
    {{--                a.setAttribute("class", "autocomplete-items");--}}
    {{--                /*append the DIV element as a child of the autocomplete container:*/--}}
    {{--                this.parentNode.appendChild(a);--}}
    {{--                /*for each item in the array...*/--}}
    {{--                for (i = 0; i < arr.length; i++) {--}}
    {{--                    /*check if the item starts with the same letters as the text field value:*/--}}
    {{--                    if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {--}}
    {{--                        /*create a DIV element for each matching element:*/--}}
    {{--                        b = document.createElement("DIV");--}}
    {{--                        /*make the matching letters bold:*/--}}
    {{--                        b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";--}}
    {{--                        b.innerHTML += arr[i].substr(val.length);--}}
    {{--                        /*insert a input field that will hold the current array item's value:*/--}}
    {{--                        b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";--}}
    {{--                        /*execute a function when someone clicks on the item value (DIV element):*/--}}
    {{--                        b.addEventListener("click", function(e) {--}}
    {{--                            /*insert the value for the autocomplete text field:*/--}}
    {{--                            inp.value = this.getElementsByTagName("input")[0].value;--}}
    {{--                            /*close the list of autocompleted values,--}}
    {{--                            (or any other open lists of autocompleted values:*/--}}
    {{--                            closeAllLists();--}}
    {{--                        });--}}
    {{--                        a.appendChild(b);--}}
    {{--                    }--}}
    {{--                }--}}
    {{--            });--}}
    {{--            /*execute a function presses a key on the keyboard:*/--}}
    {{--            inp.addEventListener("keydown", function(e) {--}}
    {{--                var x = document.getElementById(this.id + "autocomplete-list");--}}
    {{--                if (x) x = x.getElementsByTagName("div");--}}
    {{--                if (e.keyCode == 40) {--}}
    {{--                    /*If the arrow DOWN key is pressed,--}}
    {{--                    increase the currentFocus variable:*/--}}
    {{--                    currentFocus++;--}}
    {{--                    /*and and make the current item more visible:*/--}}
    {{--                    addActive(x);--}}
    {{--                } else if (e.keyCode == 38) { //up--}}
    {{--                    /*If the arrow UP key is pressed,--}}
    {{--                    decrease the currentFocus variable:*/--}}
    {{--                    currentFocus--;--}}
    {{--                    /*and and make the current item more visible:*/--}}
    {{--                    addActive(x);--}}
    {{--                } else if (e.keyCode == 13) {--}}
    {{--                    /*If the ENTER key is pressed, prevent the form from being submitted,*/--}}
    {{--                    e.preventDefault();--}}
    {{--                    if (currentFocus > -1) {--}}
    {{--                        /*and simulate a click on the "active" item:*/--}}
    {{--                        if (x) x[currentFocus].click();--}}
    {{--                    }--}}
    {{--                }--}}
    {{--            });--}}
    {{--            function addActive(x) {--}}
    {{--                /*a function to classify an item as "active":*/--}}
    {{--                if (!x) return false;--}}
    {{--                /*start by removing the "active" class on all items:*/--}}
    {{--                removeActive(x);--}}
    {{--                if (currentFocus >= x.length) currentFocus = 0;--}}
    {{--                if (currentFocus < 0) currentFocus = (x.length - 1);--}}
    {{--                /*add class "autocomplete-active":*/--}}
    {{--                x[currentFocus].classList.add("autocomplete-active");--}}
    {{--            }--}}
    {{--            function removeActive(x) {--}}
    {{--                /*a function to remove the "active" class from all autocomplete items:*/--}}
    {{--                for (var i = 0; i < x.length; i++) {--}}
    {{--                    x[i].classList.remove("autocomplete-active");--}}
    {{--                }--}}
    {{--            }--}}
    {{--            function closeAllLists(elmnt) {--}}
    {{--                /*close all autocomplete lists in the document,--}}
    {{--                except the one passed as an argument:*/--}}
    {{--                var x = document.getElementsByClassName("autocomplete-items");--}}
    {{--                for (var i = 0; i < x.length; i++) {--}}
    {{--                    if (elmnt != x[i] && elmnt != inp) {--}}
    {{--                        x[i].parentNode.removeChild(x[i]);--}}
    {{--                    }--}}
    {{--                }--}}
    {{--            }--}}
    {{--            /*execute a function when someone clicks in the document:*/--}}
    {{--            document.addEventListener("click", function (e) {--}}
    {{--                closeAllLists(e.target);--}}
    {{--            });--}}

    {{--        }--}}
    {{--        $.ajax({--}}
    {{--            type:'get',--}}
    {{--            url:'{{route('search_patient')}}',--}}
    {{--            success:function (response) {--}}
    {{--                console.log(response);--}}
    {{--                var patArray = response;--}}
    {{--                var dataPat = {};--}}
    {{--                for (var i = 0; i < patArray.length; i++) {--}}
    {{--                    dataPat[patArray[i].cr_no] = null;--}}
    {{--                }--}}



    {{--                console.log("dataPat");--}}
    {{--                console.log(dataPat);--}}


    {{--                var propertyNames = Object.keys(dataPat);--}}
    {{--                console.log(propertyNames);--}}
    {{--                /*An array containing all the country names in the world:*/--}}
    {{--                /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/--}}
    {{--                autocomplete(document.getElementById("myInput"), propertyNames);--}}


    {{--            }});--}}
    {{--    </script>--}}
    <script>
        var weight = document.getElementById("weight");
        var height = document.getElementById("height");
        weight.addEventListener("input", calc);
        height.addEventListener("input", calc);

        function calc(){
            var a2 = 0;
            var	a = weight.value;
            if(a > 0)
                a2 = a

            var b2 = 0;
            var	b = height.value;
            if(b > 0){
                b2 = b
            }
            console.log(a, b);
            var h1=b2*b2;
            var unitprice = parseInt(a2) /parseInt(h1);

            document.getElementById("bmi_field").value= unitprice*10000


        }

    </script>
</div>
</body>
</html>
