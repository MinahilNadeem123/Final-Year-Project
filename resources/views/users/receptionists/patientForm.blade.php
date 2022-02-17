<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>Reception</title>
</head>
<body style="background-color: rgb(224, 224, 224);">

<div class="container">
    @include('users.receptionists.receptionistHeader')
    <h1 style="text-align: center; font-size: 48px;padding-bottom: 1%;color:white;margin-top: 2%; background-color: rgb(0, 0, 0);">Reception Form</h1>
    <form class="row g-3 needs-validation container" id="form" style="padding:50px" action="{{route('addPatient')}}" method="post" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="col-md-4 input-field">
            <div class="autocomplete">
                <label for="myInput1" class="form-label " >CRNo</label>
                <input id="myInput1" class="form-control" type="text" name="cr_no" value="{{$cr}}">
                <span class="text-danger">@error('cr_no'){{ $message }}@enderror</span>
            </div>



        </div>

        <div class="col-md-4">
            <label for="dor" class="form-label">Date of registration</label>
            <input type="text"  name="date_of_registration" value="{{\Carbon\Carbon::today()->format('d-m-y')}}" class="form-control" id="dor">
            <span class="text-danger">@error('date_of_registration'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-4">
            <label for="tor" class="form-label">Time of registration</label>
            <input type="text" name="time_of_registration" value="{{Carbon\Carbon::now()->format('h:i:s')}}" class="form-control" id="tor">
            <span class="text-danger">@error('time_of_registration'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="myInput" class="form-label">CNIC</label>
            <input type="text" name="national_id" class="form-control" id="myInput">
            <span class="text-danger">@error('cnic'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="first_name " class="form-label">Patient Name</label>
            <input type="text" name="first_name" class="form-control" id="first_name">
            <span class="text-danger">@error('first_name'){{ $message }}@enderror</span>
        </div>
{{--        <div class="col-md-6">--}}
{{--            <label for="inputPatient " class="form-label">Patient Last Name</label>--}}
{{--            <input type="text" name="last_name" class="form-control" id="inputPatient Name4">--}}
{{--            <span class="text-danger">@error('last_name'){{ $message }}@enderror</span>--}}
{{--        </div>--}}
        <div class="col-md-6">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" name="birth_date" class="form-control" id="dob">
            <span class="text-danger">@error('dob'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="Age " class="form-label">Age</label>
            <input type="text" name="age" class="form-control" id="Age">
            <span class="text-danger">@error('age'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">Gender</label>
            <select id="inputState" name="gender" class="form-select">

                <option value="male">Male</option>
                <option value="female">Female</option>

            </select>
            <span class="text-danger">@error('gender'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">Martial Status</label>
            <select id="inputState" name="marital_status" class="form-select">

                <option value="married">Married</option>
                <option value="single">Single</option>

            </select>
            <span class="text-danger">@error('martial_status'){{ $message }}@enderror</span>
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Address Country</label>
            <input type="text" name="address_country" class="form-control" id="inputAddress" placeholder="1234 Main St">
            <span class="text-danger">@error('address_country'){{ $message }}@enderror</span>
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Address Province</label>
            <input type="text" name="address_province" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            <span class="text-danger">@error('address_province'){{ $message }}@enderror</span>
        </div>
        <div class="col-6">
            <label for="inputAddress3" class="form-label">Address District</label>
            <input type="text" name="address_district" class="form-control" id="inputAddress3" placeholder="Address District">
            <span class="text-danger">@error('address_district'){{ $message }}@enderror</span>
        </div>
        <div class="col-6">
            <label for="inputAddress4" class="form-label">Address Tehsil</label>
            <input type="text" name="address_tehsil" class="form-control" id="inputAddress4" placeholder="Address tehsil">
            <span class="text-danger">@error('address_tehsil'){{ $message }}@enderror</span>
        </div>
        <div class="col-6">
            <label for="inputAddress5" class="form-label">Address Detail</label>
            <input type="text" name="address_detail" class="form-control" id="inputAddress5" placeholder="Details">
            <span class="text-danger">@error('address_detail'){{ $message }}@enderror</span>
        </div>
        <div class="col-12">
            <label for="inputAddress6" class="form-label">Final Address</label>
            <input type="text" name="final_address" class="form-control" id="inputAddress6" placeholder="Final Address">
            <span class="text-danger">@error('final_address'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="MobileNumber1" class="form-label">Mobile Number 1</label>
            <input type="text" name="mobile_no_1" class="form-control" id="MobileNumber1">
            <span class="text-danger">@error('mobile_no_1'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="MobileNumber2" class="form-label">Mobile Number 2</label>
            <input type="text" name="mobile_no_2" class="form-control" id="MobileNumber2">
        </div>
        <div class="col-md-6">
            <label for="MobileNumber3" class="form-label">Mobile Number 3</label>
            <input type="text" name="mobile_no_3" class="form-control" id="MobileNumber3">
        </div>
        <div class="col-md-6">
            <label for="Whatsapp" class="form-label">Whatsapp Number</label>
            <input type="text" name="whatsapp_number" class="form-control" id="Whatsapp">
            <span class="text-danger">@error('whatsapp_number'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-4">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <hr>
        <h3 style="text-align: center;">Current Visit Data</h3>
        <div class="col-md-4">
            <label for="Cr" class="form-label">Patient Number</label>
            <input type="text" name="patient_no" class="form-control" id="Cr">
            <span class="text-danger">@error('patient_no'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-4">
            <label for="dor" class="form-label">Profession</label>
            <input type="text" name="profession" class="form-control" id="dor">
            <span class="text-danger">@error('profession'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-4">
            <label for="tor" class="form-label">Profession Designation</label>
            <input type="text" name="professional_designation" class="form-control" id="tor">
            <span class="text-danger">@error('professional_designation'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="inputCNIC4" class="form-label">Profession address</label>
            <input type="text" name="professional_address" class="form-control" id="inputCNIC4">
            <span class="text-danger">@error('professional_address'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="inputPatient " class="form-label">Native Language</label>
            <input type="text" name="native_language" class="form-control" id="inputPatient Name4">
            <span class="text-danger">@error('native_language'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="dob" class="form-label">CURRENT VISIT</label>
            <input type="text" name="current_visit" class="form-control" id="dob">
            <span class="text-danger">@error('current_visit'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="current_visit_date " class="form-label">Current Visit Arrival Date and Time</label>
            <input type="text" id="current_visit_date" name="current_visit_date" value="{{\Carbon\Carbon::today()->format('y-m-d')}}" class="form-control" >
            <span class="text-danger">@error('current_visit_date'){{ $message }}@enderror</span>
        </div>

        <div class="col-md-6">
            <label for="Fre" class="form-label">Doctor</label><br>
            <select class="form-select"  name="doctor_id" id="Fre">

                @foreach($doctors as $doctor)
                    <option value="{{$doctor['id']}}">{{$doctor['first_name']}} {{$doctor['last_name']}}</option>
                @endforeach
            </select>
            <span class="text-danger">@error('doctor'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="Age " class="form-label">Patient Visit Number with THIS CONSULTANT</label>
            <input type="text" name="patient_visit_no" class="form-control" id="Age">
            <span class="text-danger">@error('patient_visit_no_with_this_consultant'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="dob" class="form-label">Patient Current Visit Category</label>
            <input type="text" name="patient_current_visit" class="form-control" id="dob">
            <span class="text-danger">@error('patient_current_visit_category'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
            <label for="dob" class="form-label">Patient Current Visit SubCategory</label>
            <input type="text" name="patient_current_visit_category" class="form-control" id="dob">
            <span class="text-danger">@error('patient_current_visit_subcategory'){{ $message }}@enderror</span>
        </div>

        <div class="col-6">
            <label for="inputAddress" class="form-label">Fee Charged</label>
            <input type="text" name="fee_charged" class="form-control" id="inputAddress" placeholder="0">
            <span class="text-danger">@error('fee_charged'){{ $message }}@enderror</span>
        </div>
        <div class="col-6">
            <label for="inputAddress2" class="form-label">Appointment Number</label>
            <input type="text" name="appointment_number" class="form-control" id="inputAddress2" placeholder="0">

        </div>
        <div class="col-6">
            <label for="inputAddress4" class="form-label">Patient Current Visit Notes</label>
            <input type="text" name="current_visit_note" class="form-control" id="inputAddress4" placeholder="">
            <span class="text-danger">@error('current_visit_notes'){{ $message }}@enderror</span>
        </div>
        <div class="col-6">
            <label for="inputAddress4" class="form-label">Patient Current Visit Detail</label>
            <input type="text" name="current_visit_detail" class="form-control" id="inputAddress4" placeholder="">
        </div>
        <div class="col-6">
            <label for="inputAddress5" class="form-label">Referred By</label>
            <input type="text" name="referred" class="form-control" id="inputAddress5" placeholder="Details">
        </div>

        <div class="col-12 mb-5 mx-lg-auto" style="align-self: center;">
            <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.2.27/jquery.autocomplete.min.js"></script>
    <script>

        function autocomplete(inp, arr) {
            /*the autocomplete function takes two arguments,
            the text field element and an array of possible autocompleted values:*/
            var currentFocus;
            /*execute a function when someone writes in the text field:*/
            inp.addEventListener("input", function(e) {
                var a, b, i, val = this.value;
                /*close any already open lists of autocompleted values*/
                closeAllLists();
                if (!val) { return false;}
                currentFocus = -1;
                /*create a DIV element that will contain the items (values):*/
                a = document.createElement("DIV");
                a.setAttribute("id", this.id + "autocomplete-list");
                a.setAttribute("class", "autocomplete-items");
                /*append the DIV element as a child of the autocomplete container:*/
                this.parentNode.appendChild(a);
                /*for each item in the array...*/
                for (i = 0; i < arr.length; i++) {
                    /*check if the item starts with the same letters as the text field value:*/
                    if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                        /*create a DIV element for each matching element:*/
                        b = document.createElement("DIV");
                        /*make the matching letters bold:*/
                        b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                        b.innerHTML += arr[i].substr(val.length);
                        /*insert a input field that will hold the current array item's value:*/
                        b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                        /*execute a function when someone clicks on the item value (DIV element):*/
                        b.addEventListener("click", function(e) {
                            /*insert the value for the autocomplete text field:*/
                            inp.value = this.getElementsByTagName("input")[0].value;
                            /*close the list of autocompleted values,
                            (or any other open lists of autocompleted values:*/
                            closeAllLists();
                        });
                        a.appendChild(b);
                    }
                }
            });
            /*execute a function presses a key on the keyboard:*/
            inp.addEventListener("keydown", function(e) {
                var x = document.getElementById(this.id + "autocomplete-list");
                if (x) x = x.getElementsByTagName("div");
                if (e.keyCode == 40) {
                    /*If the arrow DOWN key is pressed,
                    increase the currentFocus variable:*/
                    currentFocus++;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 38) { //up
                    /*If the arrow UP key is pressed,
                    decrease the currentFocus variable:*/
                    currentFocus--;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 13) {
                    /*If the ENTER key is pressed, prevent the form from being submitted,*/
                    e.preventDefault();
                    if (currentFocus > -1) {
                        /*and simulate a click on the "active" item:*/
                        if (x) x[currentFocus].click();
                    }
                }
            });
            function addActive(x) {
                /*a function to classify an item as "active":*/
                if (!x) return false;
                /*start by removing the "active" class on all items:*/
                removeActive(x);
                if (currentFocus >= x.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = (x.length - 1);
                /*add class "autocomplete-active":*/
                x[currentFocus].classList.add("autocomplete-active");
            }
            function removeActive(x) {
                /*a function to remove the "active" class from all autocomplete items:*/
                for (var i = 0; i < x.length; i++) {
                    x[i].classList.remove("autocomplete-active");
                }
            }
            function closeAllLists(elmnt) {
                /*close all autocomplete lists in the document,
                except the one passed as an argument:*/
                var x = document.getElementsByClassName("autocomplete-items");
                for (var i = 0; i < x.length; i++) {
                    if (elmnt != x[i] && elmnt != inp) {
                        x[i].parentNode.removeChild(x[i]);
                    }
                }
            }
            /*execute a function when someone clicks in the document:*/
            document.addEventListener("click", function (e) {
                closeAllLists(e.target);
            });

        }
        $.ajax({
            type:'get',
            url:'{{route('search_patient')}}',
            success:function (response) {
                console.log(response);
                var patArray = response;
                var dataPat = {};
                for (var i = 0; i < patArray.length; i++) {
                    dataPat[patArray[i].national_id] = null;
                }



                console.log("dataPat");
                console.log(dataPat);


                var propertyNames = Object.keys(dataPat);
                console.log(propertyNames);
                /*An array containing all the country names in the world:*/
                /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
                autocomplete(document.getElementById("myInput"), propertyNames);


            }});
    </script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#form').validate({
                rules: {
                    national_id: {
                        required: true
                    },
                    first_name: {
                        required: true
                    },
                    last_name: {
                        required: true
                    },
                    age: {
                        required: true
                    },
                    birth_date: {
                        required: true
                    },
                    gender: {
                        required: true
                    },
                    marital_status: {
                        required: true
                    },
                    address_country: {
                        required: true
                    },
                    address_province: {
                        required: true
                    },
                    address_district: {
                        required: true
                    },
                    patient_no: {
                        required: true
                    },
                    profession: {
                        required: true
                    },
                    professional_designation: {
                        required: true
                    },
                    professional_address: {
                        required: true
                    },
                    address_tehsil: {
                        required: true
                    },
                    address_detail: {
                        required: true
                    },
                    final_address: {
                        required: true
                    },

                    native_language: {
                        required: true
                    },

                    current_visit: {
                        required: true
                    },

                    current_visit_date: {
                        required: true
                    },

                    mobile_no_1: {
                        required: true,
                        digits: true

                    },
                    whatsapp_number: {
                        required: true,
                        digits: true

                    },
                    patient_visit_no_with_this_consultant: {
                        required: true,

                    },
                    patient_current_visit_category: {
                        required: true,

                    },
                    fee_charged: {
                        required: true,

                    },
                    patient_current_visit_subcategory: {
                        required: true,
                        digits: true

                    },
                    email: {
                        required: true,
                        email: true
                    },
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>

</div>
</body>
</html>
