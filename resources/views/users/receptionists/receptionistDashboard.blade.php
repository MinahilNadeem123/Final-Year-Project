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
<h1 style="text-align: center; font-size: 48px;padding-bottom: 1%;color:white;margin-top: 2%; background-color: rgb(0, 0, 0);">Reception Form</h1><br>

<div class="container">
    <form class="row g-3">
        <div class="col-md-4">
            <label for="Cr" class="form-label">CRNo</label>
            <input type="text" class="form-control" id="Cr">
        </div>
        <div class="col-md-4">
            <label for="dor" class="form-label">Date of registration</label>
            <input type="text" class="form-control" id="dor">
        </div>
        <div class="col-md-4">
            <label for="tor" class="form-label">Time of registration</label>
            <input type="text" class="form-control" id="tor">
        </div>
        <div class="col-md-6">
            <label for="inputCNIC4" class="form-label">CNIC</label>
            <input type="text" class="form-control" id="inputCNIC4">
        </div>
        <div class="col-md-6">
            <label for="inputPatient " class="form-label">Patient Name</label>
            <input type="text" class="form-control" id="inputPatient Name4">
        </div>
        <div class="col-md-6">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="text" class="form-control" id="dob">
        </div>
        <div class="col-md-6">
            <label for="Age " class="form-label">Age</label>
            <input type="text" class="form-control" id="Age">
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">Gender</label>
            <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>Male</option>
                <option>Female</option>

            </select>
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">Martial Status</label>
            <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>Married</option>
                <option>Single</option>

            </select>
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Address Country</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Address Province</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-6">
            <label for="inputAddress3" class="form-label">Address District</label>
            <input type="text" class="form-control" id="inputAddress3" placeholder="Address District">
        </div>
        <div class="col-6">
            <label for="inputAddress4" class="form-label">Address Tehsil</label>
            <input type="text" class="form-control" id="inputAddress4" placeholder="Adress tehsil">
        </div>
        <div class="col-6">
            <label for="inputAddress5" class="form-label">Address Detail</label>
            <input type="text" class="form-control" id="inputAddress5" placeholder="Details">
        </div>
        <div class="col-12">
            <label for="inputAddress6" class="form-label">Final Address</label>
            <input type="text" class="form-control" id="inputAddress6" placeholder="Final Address">
        </div>
        <div class="col-md-6">
            <label for="Mobile Number 1" class="form-label">Mobile Number 1</label>
            <input type="text" class="form-control" id="Mobile Number 1">
        </div>
        <div class="col-md-6">
            <label for="Mobile Number 2" class="form-label">Mobile Number 2</label>
            <input type="text" class="form-control" id="Mobile Number 2">
        </div>
        <div class="col-md-6">
            <label for="Mobile Number 3" class="form-label">Mobile Number 3</label>
            <input type="text" class="form-control" id="Mobile Number 3">
        </div>
        <div class="col-md-6">
            <label for="Whatsapp" class="form-label">Whatsapp Number</label>
            <input type="text" class="form-control" id="Whatsapp">
        </div>
        <div class="col-md-4">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email">
        </div>
        <hr>
        <h3 style="text-align: center;">Current Visit Data</h3>
        <div class="col-md-4">
            <label for="Cr" class="form-label">Patient Number</label>
            <input type="text" class="form-control" id="Cr">
        </div>
        <div class="col-md-4">
            <label for="dor" class="form-label">Profession</label>
            <input type="text" class="form-control" id="dor">
        </div>
        <div class="col-md-4">
            <label for="tor" class="form-label">Profession Designation</label>
            <input type="text" class="form-control" id="tor">
        </div>
        <div class="col-md-6">
            <label for="inputCNIC4" class="form-label">Profession address</label>
            <input type="text" class="form-control" id="inputCNIC4">
        </div>
        <div class="col-md-6">
            <label for="inputPatient " class="form-label">Native Language</label>
            <input type="text" class="form-control" id="inputPatient Name4">
        </div>
        <div class="col-md-6">
            <label for="dob" class="form-label">CURRENT VISIT</label>
            <input type="text" class="form-control" id="dob">
        </div>
        <div class="col-md-6">
            <label for="Age " class="form-label">Current Visit Arrival Date and Time</label>
            <input type="text" class="form-control" id="Age">
        </div>

        <div class="col-md-12">
            <label for="Age " class="form-label">Patient Visit Number with THIS CONSULTANT</label>
            <input type="text" class="form-control" id="Age">
        </div>
        <div class="col-md-6">
            <label for="dob" class="form-label">Patient Current Visit Category</label>
            <input type="text" class="form-control" id="dob">
        </div>
        <div class="col-md-6">
            <label for="dob" class="form-label">Patient Current Visit SubCategory</label>
            <input type="text" class="form-control" id="dob">
        </div>

        <div class="col-6">
            <label for="inputAddress" class="form-label">Fee Charged</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="0">
        </div>
        <div class="col-6">
            <label for="inputAddress2" class="form-label">Appointment Number</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="0">
        </div>
        <div class="col-6">
            <label for="inputAddress4" class="form-label">Patient Current Visit Notes</label>
            <input type="text" class="form-control" id="inputAddress4" placeholder="">
        </div>
        <div class="col-6">
            <label for="inputAddress5" class="form-label">Referred By</label>
            <input type="text" class="form-control" id="inputAddress5" placeholder="Details">
        </div>
        <div class="col-12">
            <label for="inputAddress6" class="form-label">Time Elapsed since patient current visit arrival</label>
            <input type="text" class="form-control" id="inputAddress6" placeholder="">
        </div>

        <div class="col-12 mb-5 mx-lg-auto" style="align-self: center;">
            <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
        </div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
</body>
</html>
