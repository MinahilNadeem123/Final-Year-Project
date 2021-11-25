<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Order Labs</title>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<h3 style="text-align: center;">Investigations Order Form</h3>
<hr>
<div class="container">
    <form class="row g-3">
        <h3 style="text-align: center;">CMC Hematology</h3>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="cbc">
            <label class="form-check-label" for="cbc">
                CBC
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="hb">
            <label class="form-check-label" for="hb">
                HB
            </label>
        </div>
        <div class="form-check col-3" >
            <input class="form-check-input" type="checkbox" value="" id="esr">
            <label class="form-check-label" for="esr">
                ESR
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="ptinr">
            <label class="form-check-label" for="ptinr">
                PTINR
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="aptt">
            <label class="form-check-label" for="aptt">
                APTT
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="btct">
            <label class="form-check-label" for="btct">
                BTCT
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="bloodgrouping">
            <label class="form-check-label" for="bloodgrouping">
                Blood Grouping
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="crossmatch">
            <label class="form-check-label" for="crossmatch">
                Cross Match
            </label>
        </div>
        <h3 style="text-align: center;">CMC Biochemistry</h3>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="lfts">
            <label class="form-check-label" for="lfts">
              LFTs
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="splitbilirubin">
            <label class="form-check-label" for="splitbilirubin">
               Split Bilirubin
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="alt">
            <label class="form-check-label" for="alt">
                ALT
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="ast">
            <label class="form-check-label" for="ast">
                AST
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="alk">
            <label class="form-check-label" for="alk">
                ALK
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="albumin">
            <label class="form-check-label" for="albumin">
                Albumin
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="totalprotein">
            <label class="form-check-label" for="totalprotein">
                Total Protein
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="rfts">
            <label class="form-check-label" for="rfts">
                RFTs
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="urea">
            <label class="form-check-label" for="urea">
                Urea
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="creatinine">
            <label class="form-check-label" for="creatinine">
              Creatinine
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="bsr">
            <label class="form-check-label" for="bsr">
                BSR
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="bsf">
            <label class="form-check-label" for="bsf">
                BSF
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="snask">
            <label class="form-check-label" for="snask">
                S/Na,S/K
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="na">
            <label class="form-check-label" for="na">
                NA
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="k">
            <label class="form-check-label" for="k">
                K
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="ca">
            <label class="form-check-label" for="ca">
                Ca
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="lipidprofile">
            <label class="form-check-label" for="lipidprofile">
                Lipid Profile
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="hba1c">
            <label class="form-check-label" for="hba1c">
                HBA1C
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="amylase">
            <label class="form-check-label" for="amylase">
                Amylase
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="" id="uricacid">
            <label class="form-check-label" for="uricacid">
                Uric Acid
            </label>
        </div>
        <h3 style="text-align: center;">CMC Serology</h3>
        <div class="form-check col-4">
            <input class="form-check-input" type="checkbox" value="" id="hbsag">
            <label class="form-check-label" for="hbsag">
                HBsAG
            </label>
        </div>
        <div class="form-check col-4">
            <input class="form-check-input" type="checkbox" value="" id="antihcv">
            <label class="form-check-label" for="antihcv">
                AntiHCV
            </label>
        </div>
        <div class="form-check col-4">
            <input class="form-check-input" type="checkbox" value="" id="antihiv">
            <label class="form-check-label" for="antihiv">
                Anti HIV
            </label>
        </div>
        <div class="form-check col-4">
            <input class="form-check-input" type="checkbox" value="" id="mpict">
            <label class="form-check-label" for="mpict">
                MP ICT
            </label>
        </div>
        <div class="form-check col-4">
            <input class="form-check-input" type="checkbox" value="" id="vdrl">
            <label class="form-check-label" for="vdrl">
                VDRL
            </label>
        </div>
        <div class="form-check col-4">
            <input class="form-check-input" type="checkbox" value="" id="donorscreening">
            <label class="form-check-label" for="donorscreening">
               Donor Screening
            </label>
        </div>
        <div class="form-check col-4">
            <input class="form-check-input" type="checkbox" value="" id="rafactorql">
            <label class="form-check-label" for="rafactorql">
                RA Factor QL
            </label>
        </div>
        <div class="form-check col-4">
            <input class="form-check-input" type="checkbox" value="" id="aso">
            <label class="form-check-label" for="aso">
                ASO
            </label>
        </div>
        <div class="form-check col-4">
            <input class="form-check-input" type="checkbox" value="" id="crp">
            <label class="form-check-label" for="crp">
                CRP
            </label>
        </div>
        <div class="form-check col-4">
            <input class="form-check-input" type="checkbox" value="" id="typhiodotict">
            <label class="form-check-label" for="typhiodotict">
                Typhiodot ICT
            </label>
        </div>
        <div class="form-check col-4">
            <input class="form-check-input" type="checkbox" value="" id="widal">
            <label class="form-check-label" for="widal">
               Widal
            </label>
        </div>
        <div class="form-check col-4">
            <input class="form-check-input" type="checkbox" value="" id="tropt">
            <label class="form-check-label" for="tropt">
                Trop T
            </label>
        </div>

        <h3 style="text-align: center;">CMC Others</h3>
        <div class="form-check col-4">
            <input class="form-check-input" type="checkbox" value="" id="urinece">
            <label class="form-check-label" for="urinece">
                Urine CE
            </label>
        </div>
        <div class="form-check col-4">
            <input class="form-check-input" type="checkbox" value="" id="upt">
            <label class="form-check-label" for="upt">
                UPT
            </label>
        </div>
        <div class="form-check col-4">
            <input class="form-check-input" type="checkbox" value="" id="semen">
            <label class="form-check-label" for="semen">
                Semen
            </label>
        </div>

        <div class="col-md-4">
            <label for="medi" class="form-label"></label>
            <select  class="form-select" id="medi">
                <option>choose...</option>
            </select>
        </div>

    <div class="col-md-2">
        <textarea  style="margin-left:110%;height:400px;width:400px" class="form-control" placeholder=""></textarea>
        <span class="input-group-btn">
          <button class="btn btn-success " style="width:100px">Copy Lab Orders</button>
        </span>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
</body>
</html>
