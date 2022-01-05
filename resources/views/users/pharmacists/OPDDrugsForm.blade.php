<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>OPD Drugs Form</title>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<h3 style="text-align: center;">OPD Drugs Form</h3>
<hr>
<div class="container">
    <form class="row g-3">


        <div class="col-md-2">
            <div  style="width: 100px;">ID</div>
            <input type="text" class="form-control" id="ID">
        </div>

            <select  id="HBsAG" class="form-select col-md-6" aria-label="Default select example">
                <option value="1">Negative By ICT</option>
                <option value="2">Negative By ELISA</option>
                <option value="3">Positive By ICT</option>
                <option value="3">Positive By ELSIA</option>
            </select>

        <div class="col-md-2">
            <label for="Cr" class="form-label">Patient No</label>
            <input type="text" class="form-control" id="Cr">
        </div>
        <div class="col-md-2">
            <label for="dor" class="form-label">Visit No</label>
            <input type="number" class="form-control" id="dor">
        </div>

        <div class="col-md-2">
            <label for="inputPatient" class="form-label">MRN</label>
            <input type="text" class="form-control" id="inputPatient">

        </div>
        <div class="col-md-2">
            <label for="patientname" class="form-label">Patient Name</label>
            <input type="text" class="form-control" id="patientname">
        </div>
        <div class="col-md-2">
            <label for="DateOfVisit" class="form-label">Date Of Visit</label>
            <input type="text" class="form-control" id="DateOfVisit">
        </div>

        <div class="col-md-1">
            <label for="Age" class="form-label">Age</label>
            <input type="text" class="form-control" id="Age">
        </div>
        <div class="col-md-1">
            <label for="Sex" class="form-label">Sex</label>
            <input type="text" class="form-control" id="Sex">
        </div>
        <div class="col-md-1">
            <label for="Weight" class="form-label">Weight</label>
            <input type="text" class="form-control" id="Weight">
        </div>
        <div class="col-md-1">
            <label for="SBP" class="form-label">SBP</label>
            <input type="text" class="form-control" id="SBP">
        </div>
        <div class="col-md-1">
            <label for="Height" class="form-label">Height</label>
            <input type="text" class="form-control" id="Height">
        </div>
        <div class="col-md-1">
            <label for="BMI" class="form-label">BMI</label>
            <input type="text" class="form-control" id="BMI">
        </div>

        <div class="form-check col-md-1">
            <input class="form-check-input" type="checkbox" value="" id="RxHTN">
            <label class="form-check-label" for="RxHTN">
                RxHTN
            </label>
        </div>
        <div class="form-check col-md-1">
            <input class="form-check-input" type="checkbox" value="" id="DM">
            <label class="form-check-label" for="DM">
                DM
            </label>
        </div>
        <div class="form-check col-md-1">
            <input class="form-check-input" type="checkbox" value="" id="HTN">
            <label class="form-check-label" for="HTN">
                HTN
            </label>
        </div>
        <div class="form-check col-md-1">
            <input class="form-check-input" type="checkbox" value="" id="IHD">
            <label class="form-check-label" for="IHD">
                IHD
            </label>
        </div>
        <div class="form-check col-md-1">
            <input class="form-check-input" type="checkbox" value="" id="Smoker">
            <label class="form-check-label" for="Smoker">
                Smoker
            </label>
        </div>
        <div class="form-check col-md-1">
            <input class="form-check-input" type="checkbox" value="" id="ChronicLungDisease">
            <label class="form-check-label" for="ChronicLungDisease">
                Chronic Lung Disease
            </label>
        </div>
        <div class="form-check col-md-1">
            <input class="form-check-input" type="checkbox" value="" id="HIV">
            <label class="form-check-label" for="HIV">
                HIV
            </label>
        </div>


        <h3 style="text-align: center;">Hematology</h3>

        <div class="col-md-3">
            <label for="TLC" class="form-label">TLC</label>
            <input type="text" class="form-control" id="TLC">
        </div>
        <div class="col-md-3">
            <label for="HB" class="form-label">HB</label>
            <input type="text" class="form-control" id="HB">
        </div>
        <div class="col-md-3">
            <label for="Platelets" class="form-label">Platelets</label>
            <input type="text" class="form-control" id="Platelets">
        </div>
        <div class="col-md-3">
            <label for="ESR" class="form-label">ESR</label>
            <input type="text" class="form-control" id="ESR">
        </div>
        <div class="col-md-3">
            <label for="Neutrophils" class="form-label">Neutrophils</label>
            <input type="number" class="form-control" id="Neutrophils">
        </div>

        <div class="col-md-3">
            <label for="MCV" class="form-label">MCV</label>
            <input type="text" class="form-control" id="MCV">

        </div>

        <div class="col-md-3">
            <label for="P.Smear" class="form-label">P.Smear</label>
            <textarea  class="form-control" id="P.Smear"></textarea>

        </div>

        <div class="col-md-3">
            <label for="IronDeficit" class="form-label">Iron Deficit</label>
            <input type="text" class="form-control" id="IronDeficit">

        </div>

        <div class="col-md-3">
            <label for="ALC" class="form-label">ALC</label>
            <input type="text" class="form-control" id="ALC">

        </div>
        <div class="col-md-3">
            <label for="LDH" class="form-label">LDH</label>
            <input type="text" class="form-control" id="LDH">

        </div>

        <div class="col-md-3">
            <label for="CallScore" class="form-label">Call Score</label>
            <input type="text" class="form-control" id="CallScore">

        </div>
        <div class="col-md-3">
            <label for="TargetHB" class="form-label">Target HB</label>
            <input type="text" class="form-control" id="TargetHB">

        </div>

        <div class="col-md-3">
            <label for="Lymphocyte" class="form-label">Lymphocyte</label>
            <input type="text" class="form-control" id="Lymphocyte">

        </div>
        <div class="col-md-3">
            <label for="MCH" class="form-label">MCH</label>
            <input type="text" class="form-control" id="MCH">

        </div>
        <div class="col-md-3">
            <label for="Monocytes" class="form-label">Monocytes</label>
            <input type="text" class="form-control" id="Monocytes">

        </div>

        <div class="col-md-3">
            <label for="MCHC" class="form-label">MCHC</label>
            <input type="text" class="form-control" id="MCHC">

        </div>

        <div class="col-md-4">
            <label for="RBCCount" class="form-label">RBC Count</label>
            <input type="text" class="form-control" id="RBCCount">

        </div>
        <div class="col-md-4">
            <label for="HCT" class="form-label">HCT</label>
            <input type="text" class="form-control" id="HCT">

        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Bilirubin</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="input-group col-md-6">
            <div  style="width: 100px;">HBsAg</div>&nbsp
            <select  id="HBsAG" class="form-select col-md-6" aria-label="Default select example">
                <option value="1">Negative By ICT</option>
                <option value="2">Negative By ELISA</option>
                <option value="3">Positive By ICT</option>
                <option value="3">Positive By ELSIA</option>
            </select>
        </div>


        <div class="input-group col-md-6" >
            <div  style="width: 100px;">ALT</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">AntiHCV</div>&nbsp
            <select  id="AntiHCV" class="form-select col-md-6" aria-label="Default select example">
                <option value="1">Negative By ICT</option>
                <option value="2">Negative By ELISA</option>
                <option value="3">Positive By ICT</option>
                <option value="3">Positive By ELSIA</option>
            </select>
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">AST</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">AntiHIV</div>&nbsp
            <select  id="AntiHCV" class="form-select col-md-6" aria-label="Default select example">
                <option value="1">Negative By ICT</option>
                <option value="2">Negative By ELISA</option>
                <option value="3">Positive By ICT</option>
                <option value="3">Positive By ELSIA</option>
            </select>
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">ALK</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">UACR</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Albumin</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">Proteinuria</div>&nbsp
            <select  id="AntiHCV" class="form-select col-md-6" aria-label="Default select example">
                <option value="1">Nill</option>
                <option value="2">+</option>
                <option value="3">++</option>
                <option value="3">+++</option>
                <option value="3">Trace</option>
            </select>
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Proteins</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Ketonuria</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>


        <div class="input-group col-md-6" >
            <div  style="width: 100px;">BSF</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Pus Cells</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">BSR</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="input-group col-md-6" >
            <div  style="width: 100px;">PRBC</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">HBA1C</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Blood</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Urea</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Hemoglobin Uria</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">CR</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="input-group col-md-6" >
            <div  style="width: 100px;">RA Factor QL</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>


        <div class="input-group col-md-6" >
            <div  style="width: 100px;">eGFR</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="input-group col-md-6" >
            <div  style="width: 100px;">RA Factor QN</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Uric Acid</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Anti CCP</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Cholestrol</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="input-group col-md-6" >
            <div  style="width: 100px;">CRP</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Triglycerides</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="input-group col-md-6" >
            <div  style="width: 100px;">DAS28ESR</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">LDL</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="input-group col-md-6" >
            <div  style="width: 100px;">DAS28CRP</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">HDL</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Tender Joints Count</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">VLDL</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Swollen Joints Count</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">VLDL</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Swollen Joints Count</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Final Risk</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Global Health 0-100</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">TSH</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="input-group col-md-6" >
            <div  style="width: 100px;">10 Years ASCVD Risk</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">FT3</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="input-group col-md-6" >
            <div  style="width: 100px;">DAS28ESR Round</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">FT4</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">ECG</div>&nbsp
            <select  id="AntiHCV" class="form-select col-md-6" aria-label="Default select example">
                <option value="1">WNL</option>
                <option value="2">LAD</option>
                <option value="3">No New Changes</option>
                <option value="3">ST-T Changes</option>
            </select>
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Echo</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Xray</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">USG</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">CT</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-12" >
            <div  style="width: 100px;">Others</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-3" >
            <div  style="width: 100px;">NA</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-3" >
            <div  style="width: 100px;">K</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-3" >
            <div  style="width: 100px;">CL</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-3" >
            <div  style="width: 100px;">CA</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-3" >
            <div  style="width: 100px;">PO4</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-3" >
            <div  style="width: 100px;">MG</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-3" >
            <div  style="width: 100px;">HCO3</div>&nbsp
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="input-group col-md-12">
            <div  style="width: 100px;">Summary</div>
            <textarea style="height:300px" class="form-control" placeholder="" id="Summary"></textarea>
            <span class="input-group-btn">
              <button class="btn btn-success " style="height:300px;width:100px">Copy Summary</button>
            </span>
        </div>

        <div><div></div></div>

    </form>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
</body>
</html>
