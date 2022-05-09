<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">

    <title>Physical Exam</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
</head>
<body  style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<div class="container">

    <form class="row g-3">
        <div class="col-md-2">
            <label for="ID" class="form-label">ID</label>
            <input type="number" class="form-control" id="ID">
        </div>
        <div class="col-md-2">
            <label for="pno" class="form-label">P.No</label>
            <input type="text" class="form-control" id="pno">
        </div>
        <div class="col-md-2">
            <label for="dob" class="form-label">Date of Visit</label>
            <input type="text" class="form-control" id="dob">
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

        <div class="input-group">
            <div class="col-md-2" style="width: 100px;">General Look</div>
            <textarea type="text" id="generalLook" class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
                <div class="col-md-4" style="width: 100px;">
                   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalGeneralLook">
  Open General Look Summary Form
</button></div>
            </span>
            @include('users.doctors.generalLookForm')
        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> Vitals Details</div>
            <textarea type="text" id="vitalDetails" class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-4" style="width: 100px;">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalVitalDetail">
  Open Vital Details Summary Form
</button>
            </div>
          </span>
            @include('users.doctors.vitalDetailForm')
        </div>
        <div class="input-group">
            <div class="col-md-2" style="width: 100px;">  Hands-Fingers Exam</div>

            <textarea type="text" id="handExam" class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-4" style="width: 100px;">
                     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalHandExam">
  Open Hand Exam Summary Form
</button>
            </div>
          </span>
            @include('users.doctors.handExamForm')
        </div>
        <div class="input-group">
            <div class="col-md-2" style="width: 100px;">Nails Exam Summary</div>
            <textarea  class="form-control" id="nailExam" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-4" style="width: 100px;">
                 <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalNailExam">
  Open Nail Exam Summary Form
</button>
            </div>
          </span>
            @include('users.doctors.nailExamForm')
        </div>
        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> Derma Exam Summary</div>
            <textarea class="form-control" id="dermaExam" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-4" style="width: 100px;">
               <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalDermaExam">
  Open Derma Exam Summary Form
</button>
            </div>
                @include('users.doctors.dermaExamForm')
          </span>
        </div>
        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> Head Face Summary</div>
            <textarea type="text" class="form-control" id="headFaceExam"></textarea>
            <span class="input-group-btn">
            <div class="col-md-4" style="width: 100px;">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalHeadFaceExam">
  Open Head Face Exam Summary Form
</button>
            </div>
          </span>
            @include('users.doctors.headFaceExamForm')
        </div>
        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> Eyes Summary</div>
            <textarea type="text" class="form-control" id="eyeExam"></textarea>
            <span class="input-group-btn">
            <div class="col-md-4" style="width: 100px;">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalEyeExam">
  Eye Exam Summary Form
</button></div>
          </span>
            @include('users.doctors.eyeExamForm')
        </div>
        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> Oral Cavity Exam Summary</div>
            <textarea type="text" class="form-control" id="oralExam" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-4" style="width: 100px;">
           <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalOralCavityExam">
  Oral Cavity Exam Summary Form
</button></div>
          </span>
            @include('users.doctors.oralCavityExamForm')
        </div>
        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> Thyroid Summary</div>
            <textarea type="text" class="form-control" id="thyroidExam"></textarea>
            <span class="input-group-btn">
            <div class="col-md-4" style="width: 100px;">
           <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalThyroidExam">
  Thyroid Exam Summary Form
</button></div>
          </span>
            @include('users.doctors.thyroidExamForm')
        </div>
        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> Neck Chest Abdo</div>
            <textarea type="text" class="form-control" id="neckExam"></textarea>
            <span class="input-group-btn">
            <div class="col-md-4" style="width: 100px;">
                   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalNeckExam">
  Neck Chest Abdomen Exam Summary Form
</button>
            </div>
            </span>
            @include('users.doctors.neckChestAbdomenExamForm')
        </div>
        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> Legs feet Summary</div>
            <textarea type="text" class="form-control" id="legFeetExam"></textarea>
            <span class="input-group-btn">
            <div class="col-md-4" style="width: 100px;">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalLegFeetExam">
 Legs Feet Summary Form
</button>
            </div>
          </span>
            @include('users.doctors.legFeetExamForm')
        </div>
        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> Lymph Nodes Summary</div>
            <textarea type="text" class="form-control" id="lymphNodeExam"></textarea>
            <span class="input-group-btn">
            <div class="col-md-4" style="width: 100px;">
           <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalLymphNodeExam">
 Lymph Nodes Exam Summary Form
</button>
            </div>
          </span>
            @include('users.doctors.lymphNodeExamForm')
        </div>

        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> CVS Exam Summary</div>
            <textarea type="text" class="form-control" id="cvsExam"></textarea>
            <span class="input-group-btn">
            <div class="col-md-4" style="width: 100px;">
                 <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalCvsExam">
 CVS Exam Summary Form
</button>
           </div>
          </span>
            @include('users.doctors.CVSExamForm')
        </div>


        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> Resp Exam Summary</div>
            <textarea type="text" class="form-control" id="respExam" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-4" style="width: 100px;">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalRespExam">
 Resp Exam Summary Form
</button>
         </div>
          </span>
            @include('users.doctors.RespExamForm')
        </div>

        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> GIT Exam Summary</div>
            <textarea type="text" class="form-control" id="gitExam"></textarea>
            <span class="input-group-btn">
            <div class="col-md-4" style="width: 100px;">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalGitExam">
 Git Exam Summary Form
</button>
            </div>
          </span>
            @include('users.doctors.GITExamForm')
        </div>

        <div class="input-group">
            <div class="col-md-2" style="width: 100px;"> CNC GCS SOMI Higher Functions</div>
            <textarea type="text" class="form-control" id="somiExam"></textarea>
            <span class="input-group-btn">
            <div class="col-md-2" style="width: 100px;">
                 <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalGcsExam">
GCS Somi Higher Function Summary Form
</button></div>
          </span>
            @include('users.doctors.GCSSomiHigherFunctions')
        </div>

        <div class="input-group">
            <div class="col-md-2" style="width: 100px;">Cranial Nerves Exam</div>
            <textarea type="text" id="carnialExam" class="form-control" placeholder=""></textarea>
            <span class="input-group-btn">
            <div class="col-md-2" style="width: 100px;">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalCarnialExam">
Cranial Peripheral Nerves Summary Form
</button>
            </div>
          </span>
            @include('users.doctors.CranialPeripheralNerves')
        </div>

        <div class="input-group">
            <div class="col-md-2" style="width: 100px;">Motor + Sensory + Cerebelum</div>
            <textarea type="text" class="form-control" id="motorExam"></textarea>
            <span class="input-group-btn">
            <div class="col-md-2" style="width: 100px;">
                 <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalMotorExam">
Motor Sensory Summary Form
</button>
          </div>
          </span>
            @include('users.doctors.MotorSensoryCerebellum')
        </div>
        </div>
        <div class="col-12 mb-5 mx-lg-auto" style="align-self: center;">
            <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
        </div>
    </form>
</div>
<script>
    function generalLook1() {
        console.log('working');
        let ad = document.getElementById("AgeDescription").value;
        let phy = document.getElementById("Physique").value;
        let pos = document.getElementById("Posture").value;
        let com = document.getElementById("Comfort").value;
        if (document.getElementById('IVLineInPlace').checked) {
            var ivlip = document.getElementById("IVLineInPlace").value;
        }
        else {
            ivlip="";
        }
        let ivdet=document.getElementById("IVDetails").value;
        if(document.getElementById('AVFistula').checked){
            var avfis = document.getElementById("AVFistula").value;
        }
        else {
            avfis="";
        }

        let avfissi = document.getElementById("AVFistulaSite").value;
        if(document.getElementById('otherLine').checked){
            var otline= document.getElementById("otherLine").value;
        }
       else {
           otline=""
        }
        let othlisi = document.getElementById("otherLineSites").value;
       if(document.getElementById('NGinPlace').checked){
           var nginpl = document.getElementById("NGinPlace").value;
       }
     else {
         nginpl="";
       }
        let ngbagcon = document.getElementById("NGBagsContents").value;
        let folinpl = document.getElementById("FoleyInPlace").value;
        let deme = document.getElementById("Demeanor").value;
        var uricol= document.getElementById("Urinecolor").value;
        let urivol = document.getElementById("UrineVolinBag").value;
        let sptu = document.getElementById("SputumDetails").value;
        if (urivol == "") {
            var  urco=uricol;
        }
       else {
            urco= uricol +'and urine bag has volume of'+''+urivol+''+'ml';
        }
        document.getElementById("generalLook").value = ad+" "+phy+" "+pos+" "+com+" "+ivlip+" "+ivdet+" "+avfis+" "+avfissi+" "+otline+" "+othlisi+" "+
            nginpl+" "+ngbagcon+" "+folinpl+" "+deme+" "+urco+" "+sptu ;

    }
    function vitalDetails1() {
        console.log('working');
        let pr = document.getElementById("PlusRate").value;
        let prr = document.getElementById("PluseRateRhythm").value;
        let pu = document.getElementById("Pulse").value;
        let pc = document.getElementById("PulseCharacter").value;
        let rrd = document.getElementById("RadioRadialDelay").value;
        let rsbp = document.getElementById("RightArmSBP").value;
        let rdbp = document.getElementById("RightArmDBP").value;
        let lsbp = document.getElementById("LeftArmSBP").value;
        let ldbp = document.getElementById("LeftArmDBP").value;
        if (pr == "") {
            var  pr1="";
        }
        else {
            pr1= "Pulse is"+pr;
        }
        document.getElementById("vitalDetails").value = pr1+" "+prr+" "+pu+" "+pc+" "+rrd+" "+rsbp+" "+rdbp+" "+lsbp+" "+ldbp ;

    }
    function handExam1() {
        console.log('working');
        let hs = document.getElementById("Handshake").value;
        let th = document.getElementById("TemperatureHands").value;
        let swe = document.getElementById("Sweating").value;
        let skte = document.getElementById("SkinTexture").value;
        if (document.getElementById("Peripheral").checked) {
            var per = document.getElementById("Peripheral").value;
        }
        else {
            per="";
        }
        let def=document.getElementById("Deformity").value;
        let shoh = document.getElementById("ShapeOfHands").value;
        let palos = document.getElementById("PallorOfSkin").value;
        let pigm = document.getElementById("PigmentationOf").value;
        let pal = document.getElementById("Palmar").value;
        let dorsa = document.getElementById("Dorsalg").value;
        var wop= document.getElementById("WastingOfPalm").value;
        let dupu = document.getElementById("Dupuytrens").value;
        let skti = document.getElementById("SkinTightness").value;
        let hnot = document.getElementById("HandOther").value;
        let tremo = document.getElementById("Tremors").value;
        let arc = document.getElementById("Arachno").value;
        let tob = document.getElementById("Tobacco").value;
        let cal = document.getElementById("CalciumD").value;
        let pipnod = document.getElementById("PIPNodules").value;
        let dipnod = document.getElementById("DIPNOdules").value;
        let fingoth = document.getElementById("FingersOther").value;
        document.getElementById("handExam").value = hs+" "+th+" "+" "+swe+" "+skte+" "+per+" "+def+" "+shoh+" "+palos+" "+pigm+" "+pal+" "+dorsa+" "
            +wop+" "+dupu+" "+skti+" "+hnot+" "+
            tremo+" "+arc+" "+tob+" "+cal+" "+pipnod+" "+dipnod+""+fingoth ;

    }
    function nailsExam1() {
        console.log('working');
        let clu = document.getElementById("Clubbing").value;
        let opc = document.getElementById("OpcClub").value;
        let lin = document.getElementById("Lind").value;
        let mu = document.getElementById("Mueh").value;
        let naifo = document.getElementById("NailFold").value;
        let ony = document.getElementById("Onycholysis").value;
        let onym = document.getElementById("Onychomycosis").value;
        let disc = document.getElementById("Discolor").value;
        let opdiscs = document.getElementById("opcDiscolor").value;
        let naiot = document.getElementById("NailsOther").value;
        if (document.getElementById('Leuconychia').checked) {
            var leu = document.getElementById("Leuconychia").value;
        }
        else {
            leu="";
        }
        if(document.getElementById('Koilonychia').checked){
            var koil = document.getElementById("Koilonychia").value;
        }
        else {
            koil="";
        }

        if(document.getElementById('Splinter').checked){
            var spli= document.getElementById("Splinter").value;
        }
        else {
            spli=""
        }
        if(document.getElementById('BeauSLine').checked){
            var bea = document.getElementById("BeauSLine").value;
        }
        else {
            bea="";
        }
          if(document.getElementById('Quin').checked){
            var quin = document.getElementById("Quin").value;
        }
        else {
            quin="";
        }
          if(document.getElementById('NailPitting').checked){
            var napi = document.getElementById("NailPitting").value;
        }
        else {
            napi="";
        }
          if(document.getElementById('Mees').checked){
            var mees = document.getElementById("Mees").value;
        }
        else {
            mees="";
        }
        document.getElementById("nailExam").value = clu+" "+opc+" "+lin+" "+mu
            +" "+naifo+" "+ony+" "+onym+" "+disc+" "+opdiscs+" "+naiot+" "+
            leu+" "+koil+" "+spli+" "+bea+" "+quin+" "+napi+" "+mees;

    }
    function dermaExam1() {
        console.log('working');
        if (document.getElementById('Hypopigmentations').checked) {
            var hypopig = document.getElementById("Hypopigmentations").value;
        }
        else {
            hypopig="";
        }
        let hypopigd = document.getElementById("Hypopigmentationsdetails").value;
        let hypopigsop = document.getElementById("HypopigmentationsSop").value;
        if(document.getElementById('Hyperpigmentations').checked){
            var hyperpig = document.getElementById("Hyperpigmentations").value;
        }
        else {
            hyperpig="";
        }
        let hyperpigd = document.getElementById("HyperpigmentationDetails").value;
        let hyperpigsop = document.getElementById("HyperpigmentationDetailsSop").value;
        if(document.getElementById('Bruises').checked){
            var bru = document.getElementById("Bruises").value;
        }
        else {
            bru="";
        }
        let brud = document.getElementById("BruisesDetails").value;
        let brusop = document.getElementById("BruisesDetailsOpc").value;
        let skot = document.getElementById("SkinOthers").value;

        document.getElementById("dermaExam").value = hypopig+" "+hypopigd+" "+hypopigsop+" "+hyperpig
            +" "+hyperpigd+" "+hyperpigsop+" "+bru+" "+brud+" "+brusop+" "+skot;

    }
    function headFaceExam1() {
        console.log('working');

        let hefa = document.getElementById("HeadFace").value;
        let scde = document.getElementById("ScalDef").value;
        let hai = document.getElementById("Hairs").value;
        let scaot = document.getElementById("ScalpOther").value;
        let faex = document.getElementById("Facial").value;
        let facom = document.getElementById("FacialComplexion").value;
        let faapp = document.getElementById("FacialAppearance").value;
        let fash = document.getElementById("FaceShape").value;
        let per = document.getElementById("Perior").value;
        let mal = document.getElementById("MalarRash").value;
        let disco = document.getElementById("DiscoidRash").value;
        let lupu = document.getElementById("Lupus").value;
        let ade = document.getElementById("Adenoma").value;
        let ea = document.getElementById("Ears").value;
        let no = document.getElementById("Nose").value;

        document.getElementById("headFaceExam").value = hefa+" "+scde+" "+hai+" "+scaot
            +" "+faex+" "+facom+" "+faapp+" "+fash+" "+per+" "+mal+" "+disco+" "+lupu+" "+ade+" "+ea+" "+no;

    }
    function eyeExam1() {
        console.log('working');

        let eysum = document.getElementById("eyesummary").value;
        let pal = document.getElementById("Pallorln").value;
        let jaun = document.getElementById("Jaundice").value;
        let arc = document.getElementById("Arcus").value;
        let calc = document.getElementById("Calci").value;
        document.getElementById("eyeExam").value = eysum+" "+pal+" "+jaun+" "+arc
            +" "+calc;

    }
    function oralExam1() {
        console.log('working');
        let orcasu = document.getElementById("Oral").value;
        let cen = document.getElementById("Central").value;
        let ang = document.getElementById("Angular").value;
        let li = document.getElementById("Lips").value;
        if(document.getElementById("Oralulcers").checked){
            var orul=document.getElementById("Oralulcers").value;
        }
        else {
            orul="";
        }
        let orulde = document.getElementById("OralUlcersDetails").value;
        let orde = document.getElementById("OralDetail").value;
        let pal = document.getElementById("Palate").value;
        let palde = document.getElementById("PalateDetails").value;
        let paldeopc = document.getElementById("PalateDetailsopc").value;
        let uvu = document.getElementById("Uvula").value;
        let orca = document.getElementById("OralCavity").value;
        let mac = document.getElementById("Macrog").value;
        let glo = document.getElementById("Glos").value;
        let cyno = document.getElementById("CyanosisTongue").value;
        let palo = document.getElementById("Pallor").value;
        let coloft = document.getElementById("Colorof").value;
        let tdev = document.getElementById("TongueDeviation").value;
        let tot = document.getElementById("TongueOthers").value;
        let prog = document.getElementById("Prognathism").value;
        document.getElementById("oralExam").value = orcasu+" "+cen+" "+ang+" "+li+" "+orul+" "+orulde+" "+orde+" "+pal+" "+palde+" "
            +paldeopc+" "+uvu+" "+orca+" "+mac+" "+glo+" "+cyno+" "+palo+" "+coloft+" "+tdev+" "+tot+" "+prog;

    }
    function thyroidExam1() {
        console.log('working');
        let thyde = document.getElementById("Thyroiddetails").value;
        let star = document.getElementById("Starring").value;
        let pr = document.getElementById("Pro").value;
        let exp = document.getElementById("Exop").value;
        let lig = document.getElementById("LigLag").value;
        let li = document.getElementById("Lid").value;
        let lo = document.getElementById("Loss").value;
        let thy = document.getElementById("Thyroid").value;
        if(document.getElementById("thyroidEnlarged").checked){
            var thyen=document.getElementById("thyroidEnlarged").value;
        }
        else {
            thyen="";
        }
        document.getElementById("thyroidExam").value = thyde+" "+star+" "+pr+" "+exp+" "+lig+" "+li+" "+lo+" "+thy+" "+thyen;
    }
    function neckExam1() {
        console.log('working');
        let jvp = document.getElementById("JVP").value;
        let neve = document.getElementById("NeckVein").value;
        let spi = document.getElementById("Spider").value;
        let sac = document.getElementById("Sacral").value;
        let spin = document.getElementById("Spine").value;
        let che = document.getElementById("Chest").value;
        let gy = document.getElementById("Gyne").value;
        let ste = document.getElementById("Sternal").value;
        let nech = document.getElementById("NeckChest").value;
        if(document.getElementById("jvpisRaised").checked){
            var jvr=document.getElementById("jvpisRaised").value;
        }
        else {
            jvr="";
        }
        document.getElementById("neckExam").value = jvp+" "+neve+" "+spi+" "+sac+" "+spin+" "+che+" "+gy+" "+ste+" "+nech+" "+jvr;
    }
    function legFeetExam1() {
        console.log('working');
        let lesu = document.getElementById("legsummary").value;
        let peda = document.getElementById("PedalEdema").value;
        let legswe = document.getElementById("LegSwelling").value;
        document.getElementById("legFeetExam").value = lesu+" "+peda+" "+legswe;
    }
    function lymphNodeExam1() {
        console.log('working');
        let lynosu = document.getElementById("LymphNodesSummary").value;
        let gelyade = document.getElementById("GeneralisedLymphadenopathy").value;
        let cellpal = document.getElementById("CervicalLNPalpable").value;
        let sub = document.getElementById("Submental").value;
        let risb = document.getElementById("RightSubmandibular").value;
        let lesb = document.getElementById("LeftSubmandibular").value;
        let ripr = document.getElementById("RightPreauricular").value;
        let lepr = document.getElementById("LeftPreauricular").value;
        let rito = document.getElementById("RightTonsillar").value;
        let leto = document.getElementById("LeftTonsillar").value;
        let risu = document.getElementById("RightSupraclavicular").value;
        let lesu = document.getElementById("LeftSupraclavicular").value;
        let riance1 = document.getElementById("RightAnteriorCervical").value;
        let leance1 = document.getElementById("LeftAnteriorCervical").value;
        let risc = document.getElementById("RightScaleneNode").value;
        let lesc = document.getElementById("LeftScaleneNode").value;
        let ripoce = document.getElementById("RightPosteriorCervical").value;
        let lepoce = document.getElementById("LeftPosteriorCervical").value;
        let ripoau = document.getElementById("RightPostAuricular").value;
        let lepoau = document.getElementById("LeftPostAuricular").value;
        let occi = document.getElementById("OccipitalLN").value;
        let riaxln = document.getElementById("RightAxillaryLN").value;
         let leaxln = document.getElementById("LeftAxillaryLN").value;
        let riapax = document.getElementById("RightApicalAxillary").value;
        let leapax = document.getElementById("LeftApicalAxillary").value;
        let rimeax = document.getElementById("RightMedialAxillary").value;
        let lemeax = document.getElementById("LeftMedialAxillary").value;
        let rianax = document.getElementById("RightAnteriorAxillary").value;
        let leanax = document.getElementById("LeftAnteriorAxillary").value;
        let ripoax = document.getElementById("RightPosteriorAxillary").value;
        let lepoax = document.getElementById("LeftPosteriorAxillary").value;
        let rilaax = document.getElementById("RightLateralAxillary").value;
        let lelaax = document.getElementById("LeftLateralAxillary").value;
        let ritrln = document.getElementById("RightTrochlearLN").value;
        let letrln = document.getElementById("LeftTrochlearLN").value;
        let riinln = document.getElementById("RightInguinalLN").value;
        let leinln = document.getElementById("LeftInguinalLN").value;
        let lynode = document.getElementById("LymphNodesDetails").value;
        document.getElementById("lymphNodeExam").value = lynosu+" "+gelyade+" "+cellpal+" "+sub+" "+risb+" "+lesb+" "+ripr+" "+lepr+" "+rito+" "+leto+" "
            +risu+" "+lesu+" "+riance1+" "+leance1+" "+risc+" "+lesc+" "+ripoce+" "+lepoce+" "+ripoau+" "+lepoau+" "+occi+" "+riaxln+" "+leaxln+" "+
            riapax+" "+leapax+" "+rimeax+" "+lemeax+" "+rianax+" "+leanax+" "+ripoax+" "+lepoax+" "+rilaax+" "+lelaax+" "+ritrln+" "+letrln+" "+riinln+" "
            +leinln+" "+lynode;
    }
    function cvsExam1() {
        console.log('working');
        let soc = document.getElementById("ShapeOfChest").value;
        let vab = document.getElementById("VisibleApexBeat").value;
        let vpic = document.getElementById("VisiblePulsationInChest").value;
        let vpin = document.getElementById("VisiblePulsationInNeck").value;
        let vpie = document.getElementById("VisiblePulsationInEpigastrium").value;
        let vpisa = document.getElementById("VisiblePulsationInSprasternalArea").value;
        let vpir = document.getElementById("VisiblePulsationInRHC").value;
        let vs = document.getElementById("VisibleScars").value;
        let vv = document.getElementById("VisibleVeins").value;
        let vvd = document.getElementById("VisibleVeinsDirections").value;
        let env = document.getElementById("EngorgedNeckVeins").value;
        let ct = document.getElementById("ChestTenderness").value;
        let abp = document.getElementById("ApexBeatPalpable").value;
        let abip = document.getElementById("ApexBeatICSPosition").value;
        let abc = document.getElementById("ApexBeatCharacter").value;
        let pt = document.getElementById("PalpableThril").value;
        let pp2 = document.getElementById("PalpableP2").value;
        let pa2 = document.getElementById("PalpableA2").value;
        let patrtn = document.getElementById("PalpableASThrillRadiatingToNeck").value;
        let lph = document.getElementById("LeftParasternalHeave").value;
        let eh = document.getElementById("EpigatricHeave").value;
        let pl = document.getElementById("PulsatileLiver1").value;
        let jvp = document.getElementById("JVP1").value;
        let hjr = document.getElementById("HepatoJugularReflux").value;
        let s1i = document.getElementById("S1Intensity").value;
        let s3g = document.getElementById("S3Gallup").value;
        let s4g = document.getElementById("S4Gallup").value;
        let s2i = document.getElementById("S2Intensity").value;
        let s2s = document.getElementById("S2Splitting").value;
        let mdm = document.getElementById("MidDiastolicMurmur").value;
        let pm = document.getElementById("PansystolicMurmur").value;
        let edm = document.getElementById("EarlyDiastolicMurmur").value;
        let esm = document.getElementById("EjectionSystolicMurmur").value;
        let bhw = document.getElementById("BestHeardWith").value;
        let loc = document.getElementById("Loction").value;
        let int = document.getElementById("Intensity").value;
        let agbrm=document.getElementById("AggravatedByRespirationMethod").value;
        let abr = document.getElementById("AggravatedInWhichPosition").value;
        let se = document.getElementById("SacralEdema").value;
        let clu = document.getElementById("Clubbing1").value;
        let cyno = document.getElementById("Cyanosis").value;
        let sph = document.getElementById("SplinterHemorrhages").value;
        let qusi = document.getElementById("QuinckesSign").value;
        let osle = document.getElementById("OslersNodes").value;
        let gan = document.getElementById("Gangrene").value;
        let nic = document.getElementById("NicotineStaining").value;
        let jale = document.getElementById("JanewayLesions").value;
        let pal = document.getElementById("Pallor1").value;
        let pul = document.getElementById("Pulse1").value;
        let cpul = document.getElementById("CollpasingPulse").value;
        let bp = document.getElementById("BP").value;
        let ivnmia = document.getElementById("IVNeedleMarksInArms").value;
        let txan = document.getElementById("TendonXanthomas").value;
        let demu = document.getElementById("DemussetsSign").value;
        let jau = document.getElementById("Jaundice1").value;
        let xan = document.getElementById("Xanthelasmas").value;
        let ccyan = document.getElementById("CentralCyanosis").value;
        let puluv = document.getElementById("PulsatingUvula").value;
        let thy = document.getElementById("Thyroid1").value;
        let spl = document.getElementById("Spleen").value;
        let shdu = document.getElementById("ShiftingDullness").value;
        let kid = document.getElementById("Kidneys1").value;
       let tps = document.getElementById("TranbesPistolShots").value;
        let ds = document.getElementById("DurozierSign").value;
        let pe = document.getElementById("PedalEdema1").value;
        let erma = document.getElementById("ErythemaMarginatum").value;
        let rosf = document.getElementById("RothSpotsonFundus").value;
        document.getElementById("cvsExam").value = soc+" "+vab+" "+vpic+" "+ vpin+" "+vpisa+" "+vpie+" "+" "+vpir+" "+vs+" "+vv+" "+vvd+" "+env+" "
            +ct+" "+abp+" "+abip+" "+abc+" "+pt+" "+pp2+" "+pa2+" "+patrtn+" "+lph+" "+eh+" "+pl+" "+jvp+" "+hjr+" "+
            s1i+" "+s3g+" "+s4g+" "+s2i+" "+s2s+" "+mdm+" "+pm+" "+edm+" "+esm+" "+bhw+" "+loc+" "+int+" "+agbrm+" "+abr+" "
            +se+" "+clu+" "+cyno+" "+sph+" "+qusi+" "+osle+" "+gan+" "+nic+" "+jale+" "+pal+" "+pul+" "+cpul+" "+bp+" "+ivnmia+
            " "+txan+" "+demu+" "+jau+" "+xan+" "+ccyan+" "+puluv+" "+thy+" "+spl+" "+shdu+" "+kid+" "+tps+" "+ds+" "+pe+" "+erma+" "+rosf;

    }
    function respExam1() {
        console.log('working');
        let insu = document.getElementById("InspectionSummary").value;
        let rera = document.getElementById("RespiratoryRate").value;
        let repa = document.getElementById("RespiratoryPattern").value;
        let soc = document.getElementById("ShapeOfChest1").value;
        let suof = document.getElementById("SummetryOfChest").value;
        let mble = document.getElementById("MovingBLEqual").value;
        let vv = document.getElementById("VisibleVeins1").value;
        let sca = document.getElementById("Scars").value;
        let pul = document.getElementById("Pulsation").value;
        let usacmu = document.getElementById("UsingAccessoryMuscles").value;
        let moalna = document.getElementById("MovementOfAlaNasi").value;
        let incore = document.getElementById("InterCostalRecessions").value;
        let sucore = document.getElementById("SubCostalRecession").value;
        let sufo = document.getElementById("SupraclavicularFossae").value;
        let pulibr = document.getElementById("PursedLipsBreathing").value;
        let ephe = document.getElementById("EpigastricHernia").value;
        let palsu = document.getElementById("PalpatationSummary").value;
        let chte = document.getElementById("ChestTenderness1").value;
        let bote = document.getElementById("BoneTenderness").value;
        let trpo = document.getElementById("TracheaPosition").value;
        let abp=document.getElementById("ApexBeatPosition1").value;
        let acm = document.getElementById("ApicalChestMovement").value;
        let cm = document.getElementById("ChestMovement").value;
        let ceicm = document.getElementById("ChestExpansionInCM").value;
        let crpa = document.getElementById("CrepitationsPalpable").value;
        let vofr = document.getElementById("VocalFremitus").value;
        let paot = document.getElementById("PalpationOthers").value;
        let pesu = document.getElementById("PercussionSummary").value;
        let ubof = document.getElementById("UpperBorderOfLiver").value;
        let supe = document.getElementById("SupraclavicularPercussion").value;
        let uzpe = document.getElementById("UpperZonePercussion").value;
        let inpe = document.getElementById("InterscapularPercussion").value;
        let bolpe = document.getElementById("BaseOfLungsPercussion").value;
        let lape = document.getElementById("LateralPercussion").value;
        let peot = document.getElementById("PercussionOther").value;
        let ausu = document.getElementById("AuscultationSummary").value;
        let brsoin = document.getElementById("BreathSoundIntensity").value;
        let brsodu=document.getElementById("BreathSoundDuration").value;
        let brsocr = document.getElementById("BreathSoundCharacter").value;
        let abar = document.getElementById("AbnormalAreas").value;
        let adso = document.getElementById("AddedSounds").value;
        let cronau = document.getElementById("CrepitationsOnAusculation").value;
        let ron = document.getElementById("Ronchi").value;
        let ru = document.getElementById("Rub").value;
        let vore = document.getElementById("VocalResonance").value;
        let whpeli = document.getElementById("WhipseringPectorlique").value;
        let aeg = document.getElementById("Aegophony").value;
        let cosi = document.getElementById("CoinSign").value;
        let trtu = document.getElementById("TrachealTug").value;
        let prmy = document.getElementById("ProximalMyopathy").value;
        let frextis = document.getElementById("ForcedExpiratoryTimeInSeconds").value;
        let hypuos = document.getElementById("HypertrophicPulmonaryOsteoarthropathy").value;
        let hosy = document.getElementById("HornerSyndrome").value;
        let npdnv = document.getElementById("NonpulsatileDistnderNeckVens").value;
        let p2l = document.getElementById("P2Loud").value;
        let as = document.getElementById("Ascites").value;
        let li = document.getElementById("Liver").value;
        let ernd = document.getElementById("ErythemaNdosum").value;
        let fu = document.getElementById("Fundus").value;
        let thy = document.getElementById("Thyroid1").value;
        let bh = document.getElementById("BuffaloHump").value;
        let ctp = document.getElementById("ChestTubePlacement").value;
        document.getElementById("respExam").value = insu+" "+rera+" "+repa+" "+ soc+" "+suof+" "+mble+" "+" "+vv+" "+sca+" "+pul+" "+usacmu+" "+moalna+" "
            +incore+" "+sucore+" "+sufo+" "+pulibr+" "+ephe+" "+palsu+" "+chte+" "+bote+" "+trpo+" "+abp+" "+acm+" "+cm+" "+ceicm+" "+crpa+" "+
            vofr+" "+paot+" "+pesu+" "+ubof+" "+supe+" "+uzpe+" "+inpe+" "+bolpe+" "+lape+" "+peot+" "+ausu+" "+brsoin+" "+brsodu+" "+brsocr+" "
            +abar+" "+adso+" "+cronau+" "+ron+" "+ru+" "+vore+" "+whpeli+" "+aeg+" "+cosi+" "+trtu+" "+prmy+" "+frextis+" "+hypuos+" "+hosy+
            " "+npdnv+" "+p2l+" "+as+" "+li+" "+ernd+" "+fu+" "+thy+" "+bh+" "+ctp;

    }
    function gitExam1() {
        console.log('working');
        let aes = document.getElementById("AbdominalExamSummary").value;
        let soa = document.getElementById("ShapeOfAbdomen").value;
        let soad = document.getElementById("ShapeOfAbdomenDetails").value;
        let abmr = document.getElementById("AbdomenMovingWithResp").value;
        let pob = document.getElementById("PatternOfBreathing").value;
        let dor = document.getElementById("DivaricationOfRect").value;
        let umsu = document.getElementById("UmbilicusSummary").value;
        let umpo = document.getElementById("UmbilicusPosition").value;
        let umma = document.getElementById("UmbilicusMargins").value;
        let umsh = document.getElementById("UmbilicusShape").value;
        let vsd = document.getElementById("VisibleSkinDeformity").value;
        let vv = document.getElementById("VisibleVeins2").value;
        let vvf = document.getElementById("VisibleVeinsFlow").value;
        let sm = document.getElementById("ScarMarks").value;
        let atm = document.getElementById("AsciticTapMarks").value;
        let asa = document.getElementById("AdhesiveStickingApplied").value;
        let phd = document.getElementById("PubicHairDistribution").value;
        let ho = document.getElementById("HernialOrifices").value;
        let hed = document.getElementById("HernialExamDetails").value;
        let iln = document.getElementById("InguinalLymphNodes").value;
        let af=document.getElementById("AbdomenFeel").value;
        let at = document.getElementById("AbdomenTenderness").value;
        let lp = document.getElementById("LiverPalpable").value;
        let lsif = document.getElementById("LiverSpanInFingers").value;
        let llp = document.getElementById("LeftLobePalpable").value;
        let lub = document.getElementById("LiverUpperBorder").value;
        let lpic = document.getElementById("LiverPaninCM").value;
        let le = document.getElementById("LiverEdge").value;
        let ls = document.getElementById("LiverSurface").value;
        let lt = document.getElementById("LiverTenderness").value;
        let sp = document.getElementById("SpleenPalpable").value;
        let spiwp = document.getElementById("SpleenPalpableInWhichPosition").value;
        let spbwm = document.getElementById("SpleenPalpableByWhichMethod").value;
        let spif = document.getElementById("SpleenPalpableInFingers").value;
        let spic = document.getElementById("SpleenPalpableInCM").value;
        let st = document.getElementById("SpleenTenderness").value;
        let kp = document.getElementById("KidneysPalpable").value;
        let plnp=document.getElementById("ParaaorticLymphNodesPalpable").value;
        let ubipad = document.getElementById("UrinaryBladderIsPalpableAndDull").value;
        let ape = document.getElementById("AbdominalPulsationExpansile").value;
        let sd = document.getElementById("ShiftingDullness1").value;
        let ft = document.getElementById("FluidThrill").value;
        let bsa = document.getElementById("BowelSoundsAudible").value;
        let bsd = document.getElementById("BowelSoundsDetails").value;
        let hrp = document.getElementById("HepaticRubPresent").value;
        let srp=document.getElementById("SplenicRubPresent").value;
        let rba = document.getElementById("RenalBruitAudible").value;
        let pred = document.getElementById("PerRectalExamDetail").value;
        let ta = document.getElementById("TesticularAtrophy").value;
        let kfr = document.getElementById("KFRings").value;
        let sle = document.getElementById("SlitLampExam").value;
        document.getElementById("gitExam").value = aes+" "+soa+" "+soad+" "+ abmr+" "+pob+" "+dor+" "+umsu+" "+umpo+" "+umma+" "+umsh+" "+vsd+" "
            +vv+" "+vvf+" "+sm+" "+atm+" "+asa+" "+phd+" "+ho+" "+hed+" "+iln+" "+af+" "+at+" "+lp+" "+lsif+" "+llp+" "+
            lub+" "+lpic+" "+le+" "+ls+" "+lt+" "+sp+" "+spiwp+" "+spbwm+" "+spif+" "+spic+" "+st+" "+kp+" "+plnp+" "+ubipad+" "
            +ape+" "+sd+" "+ft+" "+bsa+" "+bsd+" "+hrp+" "+srp+" "+rba+" "+pred+" "+ta+" "+kfr+" "+sle;
    }
    function gcsSomiExam1() {
        console.log('working');

        let con = document.getElementById("Consciousness").value;
        let gcs = document.getElementById("GCS").value;
        let somi = document.getElementById("Somi").value;
        let neri = document.getElementById("NeckRigidity1").value;
        let kesi = document.getElementById("KernigSign").value;
        let brsi = document.getElementById("BrudzinkiSign").value;
        let spas = document.getElementById("SpeechAssessment").value;
        let fila = document.getElementById("FirstLanguage").value;
        let han = document.getElementById("Handedness").value;
        let lile = document.getElementById("LiteracyLevels").value;
        let woalob = document.getElementById("WeaknessOfAnyLimbOfBody").value;
        let viin = document.getElementById("VisionIntact").value;
        let ros = document.getElementById("RateOfSpeech").value;
        let fos = document.getElementById("FluencyOfSpeech").value;
        let dnms=document.getElementById("DoesNotMakeSense").value;
        let comp = document.getElementById("Comprehension").value;
        let yncw = document.getElementById("YesNoCommandWrong").value;
        let scw = document.getElementById("SimpleCommandWrong").value;
        let ccw = document.getElementById("ComplexCommandWrong").value;
        let na = document.getElementById("NamingAssessment").value;
        let cnfo = document.getElementById("CantNameFamiliarObjects").value;
        let cnaim = document.getElementById("CantName18-22AnimalsIn1Min").value;
        let cnswa=document.getElementById("CantNameStartingWithAlphabets").value;
        let reim = document.getElementById("RepetitionImpaired").value;
        let reaim = document.getElementById("ReadingImpaired").value;
        let wri = document.getElementById("Writing").value;
        let caas = document.getElementById("CalculationAssessment").value;
        let ta10 = document.getElementById("100-7Task").value;
        let ta3 = document.getElementById("3+3Task").value;
        let coca = document.getElementById("ComplexCalculations").value;
        let meas = document.getElementById("MemoryAssessment").value;
        let mms = document.getElementById("MMSEScore").value;
        document.getElementById("somiExam").value = con+" "+gcs+" "+somi+" "+ neri+" "+kesi+" "+brsi+" "+spas+" "+fila+" "+han+" "+lile+" "+woalob+" "+viin+" "
            +ros+" "+fos+" "+dnms+" "+comp+" "+yncw+" "+scw+" "+ccw+" "+na+" "+cnfo+" "+cnaim+" "+cnswa+" "+reim+" "+reaim+" "+wri+" "+caas+" "+
            ta10+" "+ta3+" "+coca+" "+meas+" "+mms;

         }
    function carnialExam1() {
        console.log('working');
        let nsoh = document.getElementById("NormalSmellOnHX").value;
        let atat = document.getElementById("AllergicToAnyThing").value;
        let siiwn = document.getElementById("SmellImpairedInWhichNostril").value;
        let fvaire = document.getElementById("FarVisualAcuityInRightEye").value;
        let fvaile = document.getElementById("FarVisualAcuityInLeftEye").value;
        let nvaire = document.getElementById("NearVisualAcuityInRightEye").value;
        let nvaile = document.getElementById("NearVisualAcuityInLeftEye").value;
        let pvf = document.getElementById("PeripheralVisualField").value;
        let pvfd = document.getElementById("PeripheralVisualFieldDetails").value;
        let cvf = document.getElementById("CentralVisualField").value;
        let cvre = document.getElementById("ColourVisionRightEye").value;
        let cvle = document.getElementById("ColourVisionLeftEye").value;
        let lrre = document.getElementById("LightReflexRightEye").value;
        let lrle = document.getElementById("LightReflexLeftEye").value;
        let rre=document.getElementById("RAPDRightEye").value;
        let rle = document.getElementById("RAPDLeftEye").value;
        let are = document.getElementById("AccomodationRightEye").value;
        let ale = document.getElementById("AccomodationLeftEye").value;
        let oph = document.getElementById("Ophthalmoscopy").value;
        let redm = document.getElementById("RtEyeDiscMargins").value;
        let redc = document.getElementById("RtEyeDiscCup").value;
        let redcl = document.getElementById("RtEyeDiscColour").value;
        let rev=document.getElementById("RtEyeVessels").value;
        let refc = document.getElementById("RtEyeFundusColour").value;
        let ledm = document.getElementById("LtEyeDiscMargins").value;
        let ledc = document.getElementById("LtEyeDiscCup").value;
        let ledcl = document.getElementById("LtEyeDiscColour").value;
        let lev = document.getElementById("LtEyeVessels").value;
        let lefc = document.getElementById("LtEyeFundusColour").value;
        let poh = document.getElementById("PostureOfHead").value;
        let pto = document.getElementById("Ptosis").value;
        let ptose = document.getElementById("PtosisSeverity").value;
        let poeb = document.getElementById("PositionOfEyeBalls").value;
        let pup = document.getElementById("Pupils").value;
        let mov = document.getElementById("Movements").value;
        let lr = document.getElementById("LightReflex").value;
        let ac = document.getElementById("AccomodationReflex").value;
        let cn4 = document.getElementById("CN4Palsy").value;
        let cn6 = document.getElementById("CN6Palsy").value;
        let toph = document.getElementById("TotalOphthalmoplegia").value;
        let dog = document.getElementById("DiplopiaOnGaze").value;
        let mpo = document.getElementById("MotorPartOfCN5").value;
        let jj = document.getElementById("JawJerk").value;
        let siod = document.getElementById("SensationInOphthalmicDiv").value;
        let simd = document.getElementById("SensationInMaxillaryDiv").value;
        let simad = document.getElementById("SensationInMandibularDiv").value;
        let core = document.getElementById("CornealReflex").value;
        let conre = document.getElementById("ConjustivalReflex").value;
        let hycu = document.getElementById("Hyperacusis").value;
        let lowoff = document.getElementById("LossOfWrinklesOnForeheadOnFrowning").value;
        let itcef = document.getElementById("InabilityToCloseEyesForcefully").value;
        let dos = document.getElementById("DribblingOfSaliva").value;
        let lonf = document.getElementById("LossOfNasolabialFolds").value;
        let doaom = document.getElementById("DeviationOfAngleOfMouth").value;
        let buc = document.getElementById("Buccinator").value;
        let cr7 = document.getElementById("CornealReflex7th").value;
        let cor7 = document.getElementById("ConjustivalReflex7th").value;
        let whi = document.getElementById("Whistling").value;
        let toattt = document.getElementById("TasteOnAnteriorTwoThirdOfTongue").value;
        let cmdndh = document.getElementById("CarotidMassageDoesNotDecreasedHD").value;
        let nt = document.getElementById("NasalTwang").value;
        let uvd = document.getElementById("UvulDeviated").value;
        let aate = document.getElementById("AahTest").value;
        let boco = document.getElementById("BovineCough").value;
        let idl = document.getElementById("IDL").value;
        let trbu = document.getElementById("TrepeziusBulk").value;
        let stdobu = document.getElementById("SternocleedomastoidBulk").value;
        let wotr = document.getElementById("WeaknessofTrepezius").value;
        let wos = document.getElementById("WeaknessofSternocleedomastoid").value;
        let tf = document.getElementById("TongueFasiculations").value;
        let tw = document.getElementById("TongueWasting").value;
        let td = document.getElementById("TongueDeviation1").value;
        let twoas = document.getElementById("TongueWeaknessOfAnySide").value;
        document.getElementById("carnialExam").value = nsoh+" "+atat+" "+siiwn+" "+ fvaire+" "+fvaile+" "+nvaire+" "+nvaile+" "+pvf+" "+pvfd+" "+cvf+" "+cvre+
            " "+cvle+" " +lrre+" "+lrle+" "+rre+" "+rle+" "+are+" "+ale+" "+oph+" "+redm+" "+redc+" "+redcl+" "+rev+" "+refc+" "+ledm+" "+ledc+" "+ledcl+" "+
            lev+" "+lefc+" "+poh+" "+pto+" "+ptose+" "+poeb+" "+pup+" "+mov+" "+lr+" "+ac+" "+cn4+" "+cn6+" "+toph+" "+dog+" "+mpo+" "+jj+" "+siod+" "+
            simd+" "+simad+" "+core+" "+conre+" "+hycu+" "+lowoff+" "+itcef+" "+dos+" "+lonf+" "+doaom+" "+buc+" "+cr7+" "+cor7+" "+whi+" "+toattt+" "+nt+" "+
            cmdndh+" "+uvd+" "+aate+" "+boco+" "+idl+" "+trbu+" "+stdobu+" "+wotr+" "+wos+" "+tf+" "+tw+" "+td+" "+twoas;
         }
    function motorExam1() {
        console.log('working');
        let mss = document.getElementById("MotorSystemSummary").value;
        let ima = document.getElementById("InvoluntaryMovementsAreas").value;
        let imt = document.getElementById("InvoluntaryMovementsTypes").value;
        let abpo = document.getElementById("AbnormalPosturing").value;
        let abpoli = document.getElementById("AbnormalPosturingLimbs").value;
        let vfs = document.getElementById("VisibleFasiculationSite").value;
        let rubu = document.getElementById("RULBulk").value;
        let ruto = document.getElementById("RULTone").value;
        let rutoty = document.getElementById("RULToneType").value;
        let rupo = document.getElementById("RULPower").value;
        let rupopr = document.getElementById("RULPowerProximal").value;
        let rupodi = document.getElementById("RULPowerDistal").value;
        let rupofifl = document.getElementById("RULPowerFingerFlexors").value;
        let rupofiex = document.getElementById("RULPowerFingerExtensors").value;
        let rupowrfl=document.getElementById("RULPowerWristFlexors").value;
        let rupowrex = document.getElementById("RULPowerWristExtensors").value;
        let ruelfl = document.getElementById("RULPowerElbowFlexors").value;
        let ruelex = document.getElementById("RULPowerElbowExtensors").value;
        let rushab = document.getElementById("RULShoulderAbduction").value;
        let rushad = document.getElementById("RULShoulderAdduction").value;
        let rushfl = document.getElementById("RULShoulderFlexion").value;
        let rushex = document.getElementById("RULShoulderExtension").value;
        let rubire=document.getElementById("RULBisepsReflex").value;
        let rutrre = document.getElementById("RULTricepsReflex").value;
        let rubrre = document.getElementById("RULBrachioradialisReflex").value;
        let ruhosi = document.getElementById("RULHoffmanSign").value;
        let ruco=document.getElementById("RULCoordination").value;
        let lubu = document.getElementById("LULBulk").value;
        let luto = document.getElementById("LULTone").value;
        let lutoty = document.getElementById("LULToneType").value;
        let lupo = document.getElementById("LULPower").value;
        let lupopr = document.getElementById("LULPowerProximal").value;
        let lupodi = document.getElementById("LULPowerDistal").value;
        let lupofifl = document.getElementById("LULPowerFingerFlexor").value;
        let lupofiex = document.getElementById("LULPowerFingerExtensor").value;
        let lupowrfl = document.getElementById("LULPowerWristFlexors").value;
        let lupowrex = document.getElementById("LULPowerWristExtensor").value;
        let lupoelfl= document.getElementById("LULPowerElbowFlexors").value;
        let lupoelex= document.getElementById("LULPowerElbowExtensors").value;
        let lushab = document.getElementById("LULShoulderAbduction").value;
        let lushad = document.getElementById("LULShoulderAdduction").value;
        let lushfl = document.getElementById("LULShoulderFlexion").value;
        let lushex = document.getElementById("LULShoulderExtension").value;
        let lubire = document.getElementById("LULBicepReflex").value;
        let lutrre = document.getElementById("LULTricepReflex").value;
        let lubrref = document.getElementById("LULBrachioradialisReflex").value;
        let luhosi = document.getElementById("LULHoffmanSign").value;
        let luco = document.getElementById("LULCoordination").value;
        let rlbu = document.getElementById("RLLBulk").value;
        let rlto = document.getElementById("RLLTone").value;
        let rltoty = document.getElementById("RLLToneType").value;
        let rlpo = document.getElementById("RLLPower").value;
        let rlpopr = document.getElementById("RLLPowerProximal").value;
        let rlpodi = document.getElementById("RLLPowerDistal").value;
        let rlpohifl = document.getElementById("RLLPowerHipFlexion").value;
        let rlpohiex = document.getElementById("RLLPowerHipExtension").value;
        let rlpohiab = document.getElementById("RLLPowerHipAbduction").value;
        let rlpohiad = document.getElementById("RLLPowerHipAdduction").value;
        let rlpoknfl = document.getElementById("RLLPowerKneeFlexion").value;
        let rlpoknex = document.getElementById("RLLPowerKneeExtension").value;
        let rlpoanfl = document.getElementById("RLLPowerAnkleFlexion").value;
        let rlpoanex = document.getElementById("RLLPowerAnkleExtension").value;
        let rlknje = document.getElementById("RLLKneeJerk").value;
        let rlanje = document.getElementById("RLLAnkleJerk").value;
        let rlbare = document.getElementById("RLLBabinskiReflex").value;
        let rlancl = document.getElementById("RLLAnkleClonus").value;
        let rlpacl = document.getElementById("RLLPatellarClonus").value;
        let rlco = document.getElementById("RLLCoordination").value;
        let llbu = document.getElementById("LLLBulk").value;
        let llto = document.getElementById("LLLTone").value;
        let lltoty = document.getElementById("LLLToneType").value;
        let llpo = document.getElementById("LLLPower").value;
        let llpopr = document.getElementById("LLLPowerProximal").value;
        let llpodi = document.getElementById("LLLPowerDistal").value;
        let llpohifl = document.getElementById("LLLPowerHipFlexion").value;
        let llpohiex = document.getElementById("LLLPowerHipExtension").value;
        let llpohiab = document.getElementById("LLLPowerHipAbduction").value;
        let llpohiad = document.getElementById("LLLPowerHipAdduction").value;
        let llpoknfl = document.getElementById("LLLPowerKneeFlexion").value;
        let llpoknex = document.getElementById("LLLPowerKneeExtension").value;
        let llpoanfl = document.getElementById("LLLPowerAnkleFlexion").value;
        let llpoanex = document.getElementById("LLLPowerAnkleExtension").value;
        let llknje = document.getElementById("LLLKneeJerk").value;
        let llanje = document.getElementById("LLLAnkleJerk").value;
        let llbare = document.getElementById("LLLBabinskiReflex").value;
        let llancl = document.getElementById("LLLAnkleClonus").value;
        let llpacl = document.getElementById("LLLPatellarClonus").value;
        let llco = document.getElementById("LLLCoordination").value;
        let ga = document.getElementById("Gait").value;
        let gosi = document.getElementById("GowerSign").value;
        let ngip = document.getElementById("NGInPlace").value;
        let fip = document.getElementById("FoleyInPlace").value;
        let sss = document.getElementById("SensorySystemSummary").value;
        let rlt = document.getElementById("RLLLightTouch").value;
        let rsp = document.getElementById("RLLSuperficialPain").value;
        let rt = document.getElementById("RLLTemperature").value;
        let rv = document.getElementById("RLLVibration").value;
        let rjps = document.getElementById("RLLJointPositionSense").value;
        let rlsla = document.getElementById("RLLSensoryLevelAt").value;
        let llt = document.getElementById("LLLLightTouch").value;
        let lsp = document.getElementById("LLLSuperficialPain").value;
        let lt = document.getElementById("LLLTemperature").value;
        let lv = document.getElementById("LLLVibration").value;
        let ljps = document.getElementById("LLLJointPositionSense").value;
        let lsla = document.getElementById("LLLSensoryLevelAt").value;
        let rult = document.getElementById("RULLightTouch").value;
        let rusppa = document.getElementById("RULSuperficialPain").value;
        let rute = document.getElementById("RULTemperature").value;
        let ruvi = document.getElementById("RULVibration").value;
        let rujps = document.getElementById("RULJointPositionSense").value;
        let rusla= document.getElementById("RULSensoryLevelAt").value;
        let rust = document.getElementById("RULStereognosis").value;
        let rugr = document.getElementById("RULGraphaesthesia").value;
        let lult = document.getElementById("LULLightTouch").value;
        let lusp = document.getElementById("LULSuperficialPain").value;
        let lut = document.getElementById("LULTemperature").value;
        let luv = document.getElementById("LULVibration").value;
        let lujps = document.getElementById("LULJointPositionSense").value;
        let lusla = document.getElementById("LULSensoryLevelAt").value;
        let lust = document.getElementById("LULStereognosis").value;
        let lugr = document.getElementById("LULGraphaesthesia").value;
        let siat = document.getElementById("SensoryInAttention").value;
        let css = document.getElementById("CerebellarSystemSummary").value;
        let pos = document.getElementById("Posture1").value;
        let nys = document.getElementById("Nystagmus").value;
        let ss = document.getElementById("ScanningSpeech").value;
        let ulh = document.getElementById("UpperLimbsHypotonia").value;
        let it = document.getElementById("IntentionTremors").value;
        let dpp = document.getElementById("Dysdisdochkinesia").value;
        let rp = document.getElementById("ReboundPhenomenon").value;
        let pkj = document.getElementById("PendularKneeJerk").value;
        let stas = document.getElementById("SwaysTowardsAnySide").value;
        let bbg = document.getElementById("BroadBasedGait").value;
        let tw = document.getElementById("TandemWalking").value;
        let vn = document.getElementById("VIINerve").value;
        let vin = document.getElementById("VIIINerve").value;
        let aoc = document.getElementById("AuscultationOfCerbelli").value;
        let pc = document.getElementById("PesCavus").value;
        let gh = document.getElementById("GingivalHyperplasia").value;
        let gs = document.getElementById("GaitSummary").value;
        let uts = document.getElementById("UnableToStand").value;
        let gb = document.getElementById("GaitBase").value;
        let ctbs = document.getElementById("CantTurnsBackSmoothly").value;
        let taw = document.getElementById("TandeamWalk").value;
        let ca = document.getElementById("CerebelalrAtaxia").value;
        let rot = document.getElementById("RombergTest").value;
        let pw = document.getElementById("ProximalWeakness").value;
        document.getElementById("motorExam").value = mss+" "+ima+" "+imt+" "+ abpo+" "+abpoli+" "+vfs+" "+rubu+" "+ruto+" "+rutoty+" "+rupo+" "+rupopr+
            " "+rupodi+" " +rupofifl+" "+rupofiex+" "+rupowrfl+" "+rupowrex+" "+ruelfl+" "+ruelex+" "+rushab+" "+rushad+" "+rushfl+" "+rushex+" "+rubire+
            " "+rutrre+" "+rubrre+" "+ruhosi+" "+ruco+" "+lubu+" "+ luto+" "+lutoty+" "+lupo+" "+lupopr+" "+lupodi+" "+lupofifl+" "+lupofiex+" "+lupowrfl+" "+
            lupowrex+" "+lupoelfl+" "+lupoelex+" "+lushab+" "+lushad+" "+lushfl+" "+lushex+" "+lubire+" "+lutrre+" "+lubrref+" "+luhosi+" "+luco+" "+rlbu+" "+rlto+" "+rltoty+" "+
            rlpo+" "+rlpopr+" "+rlpodi+" "+rlpohifl+" "+rlpohiex+" "+rlpohiab+" "+rlpohiad+" "+rlpoknfl+" "+rlpoknex+" "+rlpoanfl+" "+rlpoanex+" "+rlknje+" "
            +rlanje+" "+rlbare+" "+rlancl+" "+rlpacl+" "+rlco+" "+llbu+" "+llto+" "+lltoty+" "+llpo+" "+llpopr+" "+llpodi+" "+llpohifl+" "+llpohiex+" "+
            llpohiab+" "+llpohiad+" "+llpoknfl+" "+llpoknex+" "+llpoanfl+" "+llpoanex+" "+llknje+" "+llanje+" "+llbare+" "+llancl+" "+llpacl+" "+llco+" "+
            " "+ga+" "+gosi+" "+ngip+" "+fip+" "+sss+" "+rlt+" "+rsp+" "+rt+" "+rv+" "+rjps+" "+rlsla+" "+llt+" "+lsp+" "+lt+" "+lv+" "+ljps+" "+lsla+" "+
            rult+" "+rusppa+" "+rute+" "+ruvi+" "+rujps+" "+rusla+" "+rust+" "+rugr+" "+lult+" "+lusp+" "+lut+" "+luv+" "+lujps+" "+lusla+" "+lust+" "+
            " "+lugr+" "+siat+" "+css+" "+pos+" "+nys+" "+ss+" "+ulh+" "+it+" "+dpp+" "+rp+" "+pkj+" "+stas+" "+bbg+" "+tw+" "+vn+" "+vin+" "+aoc+" "+pc+
            " "+gh+" "+gs+" "+uts+" "+gb+" "+ctbs+" "+taw+" "+ca+" "+rot+" "+pw;

      }


</script>

</body>
</html>
