<div class="modal fade" id="modalhxform" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">History Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
    <form class="row g-3">
               <div class="col-md-2">
            <label for="inputPatient" class="form-label">MRN</label>
            <input type="text" class="form-control" id="inputPatient">

        </div>


        <div class="input-group col-md-12">
            <div  class="col-md-2" style="width: 100px;">DM History</div>
            <textarea  id="dmExam" class="form-control" placeholder="" ></textarea>
            <span class="input-group-btn">
                 <div class="col-md-4" style="width: 100px;">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modaldmhistory">
DM History Form
</button></div>
               @include("users.doctors.DMHistoryForm")
            </span>
        </div>
        <div class="input-group col-md-12">
            <div class="col-md-2" style="width: 100px;">HTN History</div>
            <textarea  class="form-control" placeholder="" id="htnhistory"></textarea>
            <span class="input-group-btn">
                 <div class="col-md-4" style="width: 100px;">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalhtnhistory">
HTN History Form
            </button>
                 </div>    @include("users.doctors.HTNHistoryForm") </span>
        </div>
        <div class="input-group col-md-12">
            <div class="col-md-2" style="width: 100px;">FEVER History</div>
            <textarea  class="form-control" id="feverHistory" placeholder=""></textarea>
            <span class="input-group-btn">
                 <div class="col-md-4" style="width: 100px;">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalfeverhistory">
Fever History Form
            </button>
                 </div>    @include("users.doctors.FeverHistoryForm") </span>
        </div>





    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="" data-dismiss="modal">Save and Close</button>
            </div>

        </div>
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    function dmExam1() {

            console.log('working');
            var disi = document.getElementById("diabetesSince").value;
            if (disi == "") {
                var disi1 = "";
            } else {
                disi1 = "DM since" + disi;
            }
            if (document.getElementById("newlydiagnosed").checked) {
                var nd = document.getElementById("newlydiagnosed").value;
            }
            else {
                nd="";
            }
            if (document.getElementById("diagnosedincidentlyorbslcheckup").checked) {
                var diobcu = document.getElementById("diagnosedincidentlyorbslcheckup").value;
            }
            else {
                diobcu="";
            }
            if (document.getElementById("diagnosedduetosymptomsofhyperglycemia").checked) {
                var ddtsoh = document.getElementById("diagnosedduetosymptomsofhyperglycemia").value;
            }
            else {
                ddtsoh="";
            }
            if (document.getElementById("diagnosedasdevelopeddiabeticcomplicator").checked) {
                var daddc = document.getElementById("diagnosedasdevelopeddiabeticcomplicator").value;
            }
            else {
                daddc="";
            }
            if (document.getElementById("diagnosedduetohyperglycemiacrisis").checked) {
                var ddthc = document.getElementById("diagnosedduetohyperglycemiacrisis").value;
            }
            else {
                ddthc="";
            }
            if (document.getElementById("pasthxofgdm").checked) {
                var phog = document.getElementById("pasthxofgdm").value;
            }
            else {
                phog="";
            }

            let comp = document.getElementById("compliance").value;
            if(document.getElementById("hasglucometerathome").checked) {
                var hgmah = document.getElementById("hasglucometerathome").value;
            }
            else {
                hgmah="";
            }
            let gmm = document.getElementById("glucometerModel").value;
            if (gmm == "") {
                var gmm1 = "";
            } else {
                gmm1 = gmm;
            }
            let moni = document.getElementById("monitoring").value;
            let inco = document.getElementById("initialControl").value;
            let cucr = document.getElementById("current_control").value;
            let cud = document.getElementById("currentDrugs").value;
            if (cud == "") {
                var cud1 = "";
            } else {
                cud1 = "Currently On " + cud;
            }

            if(document.getElementById("generalisedweakness").checked){
                var genwe = document.getElementById("generalisedweakness").value;
            }
            else {
            genwe="";
        }
            if(document.getElementById("increasedthirst").checked){
                var inth = document.getElementById("increasedthirst").value;
            }
            else {
            inth="";
        }

            if(document.getElementById("increasedurination").checked){
                var inur = document.getElementById("increasedurination").value;
            }
            else {
            inur="";
        }

            if(document.getElementById("weightloss").checked){
                var welo = document.getElementById("weightloss").value;
            }
            else {
            welo="";
        }

            if(document.getElementById("blurringofvision").checked){
                var blovi = document.getElementById("blurringofvision").value;
            }
            else {
            blovi="";
        }

            if(document.getElementById("hypoglycemialevel1").checked){
                var hygl1 = document.getElementById("hypoglycemialevel1").value;
            }
            else {
            hygl1="";
        }

            if(document.getElementById("hypoglycemialevel2").checked){
                var hygl2 = document.getElementById("hypoglycemialevel2").value;
            }
            else {
            hygl2="";
        }
            if(document.getElementById("hypoglycemialevel3").checked){
                var hygl3 = document.getElementById("hypoglycemialevel3").value;
            }
            else {
            hygl3="";
        }

            if(document.getElementById("hypounawareness").checked){
                var hyun = document.getElementById("hypounawareness").value;
            }
            else {
            hyun="";
        }

        var hyot = document.getElementById("hypoglycemiaOthers").value;


            if(document.getElementById("decreasedvision").checked){
var devi = document.getElementById("decreasedvision").value;
            }
            else {
            devi="";
        }
            if(document.getElementById("spotters").checked){
                var spo = document.getElementById("spotters").value;
            }
               else{
                   spo="";
            }
             if(document.getElementById("blurredvision").checked){
                 var blvi = document.getElementById("blurredvision").value;
             }
             else{
                 blvi= "";
             }
             if(document.getElementById("amaurosis").checked){
                 var amau= document.getElementById("amaurosis").value;
             }
             else{
                 amau="";
             }
             if(document.getElementById("getsannualeyeexam").checked){
                 var ganey=document.getElementById("getsannualeyeexam").value;
             }
             else{
                 ganey="";
             }
             if(document.getElementById("h/olasertherapy").checked){
                 var holath= document.getElementById("h/olasertherapy").value;
             }
             else{
                 holath="";
             }
             if(document.getElementById("h/ovagftherapy").checked){
                 var hovath= document.getElementById("h/ovagftherapy").value;
             }
             else{
                 hovath="";
             }
             if(document.getElementById("h/ocataract").checked){
                 var hoca= document.getElementById("h/ocataract").value;
             }
             else{
                 hoca="";
             }
             var cade=document.getElementById("cataractDetails").value;
             var eyotsx=document.getElementById("eyeOtherSx").value;
             if(document.getElementById("h/ofrothyurine").checked){
                 var hofrur= document.getElementById("h/ofrothyurine").value;
             }
             else{
                 hofrur="";
             }
             if(document.getElementById("h/operiorbitalpuffiness").checked){
                 var hopepu=document.getElementById("h/operiorbitalpuffiness").value;
             }
             else{
                 hopepu="";
             }
             if(document.getElementById("h/oanasarca").checked){
                 var hoan= document.getElementById("h/oanasarca").value;
             }
             else{
                 hoan="";
             }
             if (document.getElementById("k/cckd").checked){
                 var kcck=document.getElementById("k/cckd").value;
             }
             else{
                 kcck="";
             }
             var ckde= document.getElementById("ckdDetails").value;
             var reotsx= document.getElementById("renalOtherSx").value;
             if(document.getElementById("numbnessofhands").checked){
                 var nuofha= document.getElementById("numbnessofhands").value;
             }
             else{
                 nuofha="";
             }
             if(document.getElementById("painfulhands").checked){
                 var paha= document.getElementById("painfulhands").value;
             }
             else{
                 paha="";
             }
             if(document.getElementById("numbnessoffeet").checked){
                 var nuoffe=document.getElementById("numbnessoffeet").value;
             }
             else{
                 nuoffe="";
             }
             if(document.getElementById("painfulfeets").checked){
                 var pafe=document.getElementById("painfulfeets").value;
             }
             else{
                 pafe="";
             }
             if(document.getElementById("burningfeet").checked){
                 var bufe=document.getElementById("burningfeet").value;
             }
             else{
                 bufe="";
             }
             if(document.getElementById("numbnessofhands+feet").checked){
                 var nuofhafe=document.getElementById("numbnessofhands+feet").value;
             }
             else{
                 nuofhafe="";
             }
             if(document.getElementById("painful_hands+feet").checked){
                 var pahafe=document.getElementById("painful_hands+feet").value;
             }
             else{
                 pahafe="";
             }
             if(document.getElementById("burninghands+feet").checked){
                 var buhafe=document.getElementById("burninghands+feet").value;
             }
             else{
                 buhafe="";
             }
             if(document.getElementById("parathesias").checked){
                 var para=document.getElementById("parathesias").value;
             }
             else {
                 para="";
             }
             var seot=document.getElementById("sensory_others").value;
             if(document.getElementById("posturaldizziness").checked){
                 var podi=document.getElementById("posturaldizziness").value;
             }
             else{
                 podi="";
             }
             if(document.getElementById("restingtachycardia").checked){
                 var reta=document.getElementById("restingtachycardia").value;
             }
             else{
                 reta="";
             }
             if(document.getElementById("earlysatiety").checked){
                 var easa=document.getElementById("earlysatiety").value;
             }
             else{
                 easa="";
             }
             if(document.getElementById("diarrhoea").checked){
                 var dia=document.getElementById("diarrhoea").value;
             }
             else{
                 dia="";
             }
             if(document.getElementById("nocturnaldiarrhoea").checked){
                 var nodia=document.getElementById("nocturnaldiarrhoea").value;
             }
             else{
                 nodia="";
             }
             if(document.getElementById("constipation").checked){
                 var cons=document.getElementById("constipation").value;
             }
             else{
                 cons="";
             }
             if(document.getElementById("diarrheaaltconstipation").checked){
                 var dialco=document.getElementById("diarrheaaltconstipation").value;
             }
             else{
                 dialco="";
             }
             if(document.getElementById("erectiledysfunction").checked){
                 var erdyfu=document.getElementById("erectiledysfunction").value;
             }
             else{
                 erdyfu="";
             }
             var auot=document.getElementById("autonomic_others").value;
             if(document.getElementById("h/ocvainpast").checked){
                 var hocvpa=document.getElementById("h/ocvainpast").value;
             }
             else{
                 hocvpa="";
             }
             if(document.getElementById("h/otiainpast").checked){
                 var hotipa=document.getElementById("h/otiainpast").value;
             }
             else{
                 hotipa="";
             }
             var cvde=document.getElementById("cva_details").value;
             var cvotsx=document.getElementById("cva_others_sx").value;
             if(document.getElementById("h/ochestdiscomfort").checked){
                 var hochdi=document.getElementById("h/ochestdiscomfort").value;
             }
             else{
                 hochdi="";
             }
             if(document.getElementById("h/odyspenea").checked){
                 var hody=document.getElementById("h/odyspenea").value;
             }
             else{
                 hody="";
             }
             if(document.getElementById("k/cheartdisease").checked){
                 var kchedi=document.getElementById("k/cheartdisease").value;
             }
             else{
                 kchedi="";
             }
             var det=document.getElementById("heart_details").value;
             var ihot=document.getElementById("ihd_others").value;
             if(document.getElementById("h/oclaudication").checked){
                 var hocl=document.getElementById("h/oclaudication").value;
             }
             else{
                 hocl="";
             }
             if(document.getElementById("h/ofingerdiscoloration").checked){
                 var hofidi=document.getElementById("h/ofingerdiscoloration").value;
             }
             else{
                 hofidi="";
             }
             if(document.getElementById("h/otoesdiscoloration").checked){
                 var hotodi=document.getElementById("h/otoesdiscoloration").value;
             }
             else{
                 hotodi="";
             }
             if(document.getElementById("thighpain").checked){
                 var thpa=document.getElementById("thighpain").value;
             }
             else{
                 thpa="";
             }
             if(document.getElementById("bellspalsy").checked){
                 var bepa=document.getElementById("bellspalsy").value;
             }
             else{
                 bepa="";
             }
             if(document.getElementById("wastingoflimb").checked){
                 var waofli=document.getElementById("wastingoflimb").value;
             }
             else{
                 waofli="";
             }
             var wade=document.getElementById("wastingdetails").value;
             if(document.getElementById("h/ofootulcerinpast").checked){
                 var hofoulpa=document.getElementById("h/ofootulcerinpast").value;
             }
             else{
                 hofoulpa="";
             }
             if(document.getElementById("cantfeelshoes").checked){
                 var cafesh=document.getElementById("cantfeelshoes").value;
             }
             else{
                 cafesh="";
             }
             if(document.getElementById("cantfeelpressure").checked){
                 var cafepr=document.getElementById("cantfeelpressure").value;
             }
             else{
                 cafepr="";
             }
             if(document.getElementById("footshapechanged").checked){
                 var foshch=document.getElementById("footshapechanged").value;
             }
             else{
                 foshch="";
             }
             if(document.getElementById("checksfeetdaily").checked){
                 var chfeda=document.getElementById("checksfeetdaily").value;
             }
             else{
                 chfeda="";
             }
             if(document.getElementById("checkshoesbeforewearing").checked){
                 var chshbewe=document.getElementById("checkshoesbeforewearing").value;
             }
             else{
                 chshbewe="";
             }
             if(document.getElementById("h/oamputationinpast").checked){
                 var hoapinpa=document.getElementById("h/oamputationinpast").value;
             }
             else{
                 hoapinpa="";
             }
             var fosxot=document.getElementById("foot_other_sx").value;
            if(document.getElementById("recurrentboils").checked){
                var rebo=document.getElementById("recurrentboils").value;
            }
            else{
                rebo="";
            }
            if(document.getElementById("generalisedpruritis").checked){
                var gepr=document.getElementById("generalisedpruritis").value;
            }
            else{
                gepr="";
            }
            if(document.getElementById("vulvoginalpruritis").checked){
                var vupr=document.getElementById("vulvoginalpruritis").value;
            }
            else{
                vupr="";
            }
            if(document.getElementById("balanoposthitis").checked){
                var bala=document.getElementById("balanoposthitis").value;
            }
            else{
                bala="";
            }
            var suskco=document.getElementById("currentskincomplication").value;
            if(document.getElementById("feelsdown").checked){
                var fedo=document.getElementById("feelsdown").value;
            }
            else{
                fedo="";
            }
            if(document.getElementById("lostinterestinthings").checked){
                var lointh=document.getElementById("lostinterestinthings").value;
            }
            else{
                lointh="";
            }
            var anot=document.getElementById("any_other").value;
        document.getElementById("dmExam").value = disi1 + " " + nd + " " + diobcu + " " + ddtsoh + " " + daddc + " " + ddthc + " " + phog + " " + comp + " " + hgmah + " " + gmm1 + " " +
            moni + " " + inco + " " + cucr + " " + cud1 + " " + " " + genwe + " " + inth + " " +
            inur + " " + welo + " " + blovi + " " + hygl1 + " " + hygl2 + " " + hygl3 + " " + hyun + " " +
            hyot + " " + devi + " " + spo + " " + blvi + " " + amau + " " + ganey +
            " " + holath + " " + hovath + " " + hoca + " " + cade + " "
            + eyotsx + " " + hofrur +" "+hopepu+" "+hoan + " " + kcck + " " +
            ckde + " " + reotsx + " " + nuofha + " " +paha+" "+nuoffe+" "+pafe+
        " "+bufe+" "+nuofhafe+" "+pahafe+" "+buhafe+" "+para+" "+seot+" "+podi+" "
        +reta+" "+easa+" "+dia+" "+nodia+" "+cons+" "+dialco+" "+erdyfu+" "+auot
            +" "+hocvpa+" "+hotipa+" "+cvde+" "+cvotsx+" "+hochdi+" "+hody+" "+kchedi
            +" "+det+" "+ihot+" "+hocl+" "+hofidi+" "+hotodi+" "+thpa+" "+bepa
            +" "+waofli+" "+wade+" "+hofoulpa+" "+cafesh+" "+cafepr+" "+foshch
         +" "+chfeda+" "+chshbewe+" "+hoapinpa+" "+fosxot+" "+rebo+" "+gepr
            +" "+vupr+" "+bala+" "+suskco+" "+fedo+" "+lointh+" "+anot ;

    }
    function feverhistory1(){

       var dur=document.getElementById("duration").value;
       var durti=document.getElementById("duration1").value;
       if(dur == ""){
       var dur1="";
       }
       else{
           dur1="Fever Since"+" "+dur+" "+durti;
       }
       var doc=document.getElementById("documentation").value;
       var hite=document.getElementById("highest_temp").value;
       var deg=document.getElementById("degree").value;
       if(hite == ""){
           var hite1="";
       }
       else{
           hite1="Upto"+" "+hite+" "+deg;
       }
       var gra=document.getElementById("grade").value;
       var pat=document.getElementById("pattern").value;
       var patdet=document.getElementById("patterndetails").value;
       if(document.getElementById("Rigors").checked){
           var rig=document.getElementById("Rigors").value;
       }
       else{
           rig="";
       }
       if(document.getElementById("Chills").checked){
           var chi=document.getElementById("Chills").value;
       }
       else{
           chi="";
       }
       if(document.getElementById("Malaise").checked){
           var mal=document.getElementById("Malaise").value;
       }
       else{
           mal="";
       }
       if(document.getElementById("NightSweats").checked){
           var nisw=document.getElementById("NightSweats").value;
       }
       else{
           nisw="";
       }
       if(document.getElementById("Myalgias").checked){
           var mya=document.getElementById("Myalgias").value;
       }
       else{
           mya="";
       }
       if(document.getElementById("SignificantWeightLoss").checked){
           var siwelo=document.getElementById("SignificantWeightLoss").value;
       }
       else{
           siwelo="";
       }
       if(document.getElementById("LossOfAppetite").checked){
           var loofap=document.getElementById("LossOfAppetite").value;
       }
       else{
           loofap="";
       }
        if(document.getElementById("LossOfTaste").checked){
            var loofta=document.getElementById("LossOfTaste").value;
        }
        else{
            loofta="";
        }
        if(document.getElementById("LossOfSmell").checked){
            var loofsm=document.getElementById("LossOfSmell").value;
        }
        else{
            loofsm="";
        }
       var ass1=rig+" "+chi+" "+mal+" "+nisw+" "+mya+" "+siwelo+" "+loofap
       loofta+" "+loofsm;
       if(ass1 !== null){
           var ass="associated with"+" "+ass1;
       }
       else{
           ass="";
       }
        if(document.getElementById("RunnyNose").checked){
            var runo=document.getElementById("RunnyNose").value;
        }
        else{
            runo="";
        }
        if(document.getElementById("CongestedNose").checked){
            var cono=document.getElementById("CongestedNose").value;
        }
        else{
            cono="";
        }
        if(document.getElementById("Sneezing").checked){
            var sne=document.getElementById("Sneezing").value;
        }
        else{
            sne="";
        }
        if(document.getElementById("NasalDischarge").checked){
            var nadi=document.getElementById("NasalDischarge").value;
        }
        else{
            nadi="";
        }
        if(document.getElementById("SoreThroat").checked){
            var soth=document.getElementById("SoreThroat").value;
        }
        else{
            soth="";
        }
        if(document.getElementById("Odynophagia").checked){
            var odno=document.getElementById("Odynophagia").value;
        }
        else{
            odno="";
        }
        if(document.getElementById("FrontalHeadache").checked){
            var frhe=document.getElementById("FrontalHeadache").value;
        }
        else{
            frhe="";
        }
        if(document.getElementById("DryCough").checked){
            var drco=document.getElementById("DryCough").value;
        }
        else{
            drco="";
        }
        if(document.getElementById("ProductiveCough").checked){
            var prco=document.getElementById("ProductiveCough").value;
        }
        else{
            prco="";
        }

        if(document.getElementById("Hemoptysis").checked){
            var hemo=document.getElementById("Hemoptysis").value;
        }
        else{
            hemo="";
        }
        if(document.getElementById("ShortnessOfBreath").checked){
            var shofbr=document.getElementById("ShortnessOfBreath").value;
        }
        else{
            shofbr="";
        }
        if(document.getElementById("Wheezing").checked){
            var whe=document.getElementById("Wheezing").value;
        }
        else{
            whe="";
        }
        if(document.getElementById("RespirophasicChestPain").checked){
            var rechpa=document.getElementById("RespirophasicChestPain").value;
        }
        else{
            rechpa="";
        }

        var sit=document.getElementById("site").value;
        var spco=document.getElementById("sputumcolour").value;

        if( sit != "" ){
            var  si1="which is localised over"+" "+sit;
        }
        else{
           si1="";
        }
        if(document.getElementById("HoarsenessOfVoice").checked){
            var hoofvo=document.getElementById("HoarsenessOfVoice").value;
        }
        else{
            hoofvo="";
        }
        if(document.getElementById("Halitosis").checked){
            var hali=document.getElementById("Halitosis").value;
        }
        else{
            hali="";
        }
        if(document.getElementById("Nausea").checked){
            var  nau=document.getElementById("Nausea").value;
        }
        else{
            nau="";
        }
        if(document.getElementById("Vomiting").checked){
            var vomi=document.getElementById("Vomiting").value;
        }
        else{
            vomi="";
        }
        if(document.getElementById("Diarrhoea").checked){
            var diar=document.getElementById("Diarrhoea").value;
        }
        else{
            diar="";
        }
        if(document.getElementById("Constipation").checked){
            var cons=document.getElementById("Constipation").value;
        }
        else{
            cons="";
        }
        if(document.getElementById("PainAbdomen").checked){
            var paab=document.getElementById("PainAbdomen").value;
        }
        else{
            paab="";
        }
        var det=document.getElementById("detail").value;
        if(document.getElementById("Jaundice").checked){
            var jaun=document.getElementById("Jaundice").value;
        }
        else{
            jaun="";
        }
        if(document.getElementById("AbdominalDistension").checked){
            var abdi=document.getElementById("AbdominalDistension").value;
        }
        else{
            abdi="";
        }
        if(document.getElementById("FeelingOfMass").checked){
            var feofma=document.getElementById("FeelingOfMass").value;
        }
        else{
            feofma="";
        }
        var det1=document.getElementById("detail1").value;
        if(document.getElementById("BurningMicturition").checked){
            var bumi=document.getElementById("BurningMicturition").value;
        }
        else{
            bumi="";
        }
        if(document.getElementById("Frequency").checked){
            var fre=document.getElementById("Frequency").value;
        }
        else{
            fre="";
        }
        if(document.getElementById("UrinaryUrgency").checked){
            var urur=document.getElementById("UrinaryUrgency").value;
        }
        else{
            urur="";
        }
        if(document.getElementById("BloodInUrine").checked){
            var blinur=document.getElementById("BloodInUrine").value;
        }
        else{
            blinur="";
        }
        if(document.getElementById("PUSInUrine").checked){
            var puinur=document.getElementById("PUSInUrine").value;
        }
        else{
            puinur="";
        }
        if(document.getElementById("UrinaryInContinence").checked){
            var urinco=document.getElementById("UrinaryInContinence").value;
        }
        else{
            urinco="";
        }
        if(document.getElementById("LoinToGroinPain").checked){
            var lotogrpa=document.getElementById("LoinToGroinPain").value;
        }
        else{
            lotogrpa="";
        }
        var det2=document.getElementById("detail2").value;
        if(document.getElementById("LumbarPain").checked){
            var lupa=document.getElementById("LumbarPain").value;
        }
        else{
            lupa="";
        }
        var det3=document.getElementById("detail3").value;
        if(document.getElementById("PeriorbitalPuffiness").checked){
            var pepu=document.getElementById("PeriorbitalPuffiness").value;
        }
        else{
            pepu="";
        }
        if(document.getElementById("LowBackache").checked){
            var loba=document.getElementById("LowBackache").value;
        }
        else{
            loba="";
        }
        if(document.getElementById("TesticularPain").checked){
            var tepa=document.getElementById("TesticularPain").value;
        }
        else{
            tepa="";
        }
        if(document.getElementById("TestcularSwelling").checked){
            var tesw=document.getElementById("TestcularSwelling").value;
        }
        else{
            tesw="";
        }
        if(document.getElementById("UretheralDischarge").checked){
            var urdi=document.getElementById("UretheralDischarge").value;
        }
        else{
            urdi="";
        }
        var det4=document.getElementById("detail4").value;
        if(document.getElementById("IllicitRelations").checked){
            var ilre=document.getElementById("IllicitRelations").value;
        }
        else{
            ilre="";
        }
        if(document.getElementById("LowerAbdominaPain").checked){
            var loabpa=document.getElementById("LowerAbdominaPain").value;
        }
        else{
            loabpa="";
        }
        if(document.getElementById("PainfulCoitus").checked){
            var paco=document.getElementById("PainfulCoitus").value;
        }
        else{
            paco="";
        }
        if(document.getElementById("PainLowerAbdomenWhichWorsenOnJarringMovements").checked){
            var paloabwh=document.getElementById("PainLowerAbdomenWhichWorsenOnJarringMovements").value;
        }
        else{
            paloabwh="";
        }
        if(document.getElementById("WorsenDuringOrAfterMenses").checked){
            var woduafme=document.getElementById("WorsenDuringOrAfterMenses").value;
        }
        else{
            woduafme="";
        }
        if(document.getElementById("AbnormalVaginalDiscarge").checked){
            var abvadi=document.getElementById("AbnormalVaginalDiscarge").value;
        }
        else{
            abvadi="";
        }
        if(document.getElementById("PostcoitalBleeding").checked){
            var pocobl=document.getElementById("PostcoitalBleeding").value;
        }
        else{
            pocobl="";
        }
        if(document.getElementById("IntermensturalBleeding").checked){
            var inbl=document.getElementById("IntermensturalBleeding").value;
        }
        else{
            inbl="";
        }
        if(document.getElementById("Menhorrhagia").checked){
            var menho=document.getElementById("Menhorrhagia").value;
        }
        else{
            menho="";
        }
        if(document.getElementById("BreastPain").checked){
            var brpa=document.getElementById("BreastPain").value;
        }
        else{
            brpa="";
        }
        if(document.getElementById("AbnormalNippleDischarge").checked){
            var abnpdi=document.getElementById("AbnormalNippleDischarge").value;
        }
        else{
            abnpdi="";
        }
        if(document.getElementById("Headache").checked){
            var head=document.getElementById("Headache").value;
        }
        else{
            head="";
        }
        if(document.getElementById("NeckStiffness").checked){
            var nest=document.getElementById("NeckStiffness").value;
        }
        else{
            nest="";
        }
        if(document.getElementById("PainInNeck").checked){
            var painne=document.getElementById("PainInNeck").value;
        }
        else{
            painne="";
        }
        if(document.getElementById("Syncope").checked){
            var sync=document.getElementById("Syncope").value;
        }
        else{
            sync="";
        }
        if(document.getElementById("AlteredSesnorium").checked){
            var alse=document.getElementById("AlteredSesnorium").value;
        }
        else{
            alse="";
        }
        if(document.getElementById("IrrelevantTalk").checked){
            var irta=document.getElementById("IrrelevantTalk").value;
        }
        else{
            irta="";
        }
        if(document.getElementById("Fits").checked){
            var fits=document.getElementById("Fits").value;
        }
        else{
            fits="";
        }
        if(document.getElementById("DecMemory").checked){
            var deme=document.getElementById("DecMemory").value;
        }
        else{
            deme="";
        }
        if(document.getElementById("Ataxia").checked){
            var atax=document.getElementById("Ataxia").value;
        }
        else{
            atax="";
        }
        if(document.getElementById("DoubleVision").checked){
            var dovi=document.getElementById("DoubleVision").value;
        }
        else{
            dovi="";
        }
        if(document.getElementById("Ptosis").checked){
            var pto=document.getElementById("Ptosis").value;
        }
        else{
            pto="";
        }
        var det5=document.getElementById("detail5").value;
        if(document.getElementById("SensorySymptoms").checked){
            var sesy=document.getElementById("SensorySymptoms").value;
        }
        else{
            sesy="";
        }
        var det6=document.getElementById("detail6").value;
        if(document.getElementById("DecVision").checked){
            var devi=document.getElementById("DecVision").value;
        }
        else{
            devi="";
        }
        var det7=document.getElementById("detail7").value;
        if(document.getElementById("FacialDeviationTo").checked){
            var fadeto=document.getElementById("FacialDeviationTo").value;
        }
        else{
            fadeto="";
        }
        var side=document.getElementById("side").value;
        if(document.getElementById("EasyBruisibility").checked){
            var eabr=document.getElementById("EasyBruisibility").value;
        }
        else{
            eabr="";
        }
        if(document.getElementById("SpontaneousBleeding").checked){
            var spbl=document.getElementById("SpontaneousBleeding").value;
        }
        else{
            spbl="";
        }
        if(document.getElementById("Epistaxis").checked){
            var epis=document.getElementById("Epistaxis").value;
        }
        else{
            epis="";
        }
        if(document.getElementById("Hemoptysis").checked){
            var hemopt=document.getElementById("Hemoptysis").value;
        }
        else{
            hemopt="";
        }
        if(document.getElementById("Hemetemsis").checked){
            var heme=document.getElementById("Hemetemsis").value;
        }
        else{
            heme="";
        }
        if(document.getElementById("Melena").checked){
            var mele=document.getElementById("Melena").value;
        }
        else{
            mele="";
        }
        if(document.getElementById("Hematochezia").checked){
            var hema=document.getElementById("Hematochezia").value;
        }
        else{
            hema="";
        }
        if(document.getElementById("Hematuria").checked){
            var hemat=document.getElementById("Hematuria").value;
        }
        else{
            hemat="";
        }
        if(document.getElementById("AbnormalPVBleeding").checked){
            var abpvbl=document.getElementById("AbnormalPVBleeding").value;
        }
        else{
            abpvbl="";
        }
        var otbl=document.getElementById("others bleeding").value;
        if(document.getElementById("LumpsBumpsInBody").checked){
            var lubuinbo=document.getElementById("LumpsBumpsInBody").value;
        }
        else{
            lubuinbo="";
        }
        var det8=document.getElementById("detail8").value;
        if(document.getElementById("SymptomsOfAnemia").checked){
            var syofan=document.getElementById("SymptomsOfAnemia").value;
        }
        else{
            syofan="";
        }
        if(document.getElementById("Rash").checked){
            var rash=document.getElementById("Rash").value;
        }
        else{
            rash="";
        }
        var det9=document.getElementById("detail9").value;
        if(document.getElementById("LocalSwellingOf").checked){
            var loswof=document.getElementById("LocalSwellingOf").value;
        }
        else{
            loswof="";
        }
        var det10=document.getElementById("detail10").value;
        if(document.getElementById("Warm").checked){
            var warm=document.getElementById("Warm").value;
        }
        else{
            warm="";
        }
        if(document.getElementById("Painful").checked){
            var pain=document.getElementById("Painful").value;
        }
        else{
            pain="";
        }
        if(document.getElementById("JointPains").checked){
            var jopa=document.getElementById("JointPains").value;
        }
        else{
            jopa="";
        }
        if(document.getElementById("JointSwelling").checked){
            var josw=document.getElementById("JointSwelling").value;
        }
        else{
            josw="";
        }
        var det11=document.getElementById("detail11").value;
        if(document.getElementById("MusclePain").checked){
            var mupa=document.getElementById("MusclePain").value;
        }
        else{
            mupa="";
        }
        if(document.getElementById("MuscleSpasm").checked){
            var musp=document.getElementById("MuscleSpasm").value;
        }
        else{
            musp="";
        }
        var det12=document.getElementById("detail12").value;
        if(document.getElementById("BackAche").checked){
            var back=document.getElementById("BackAche").value;
        }
        else{
            back="";
        }
        var det13=document.getElementById("detail13").value;
        if(document.getElementById("OralUlcers").checked){
            var orul=document.getElementById("OralUlcers").value;
        }
        else{
            orul="";
        }
        if(document.getElementById("Alopecia").checked){
            var alo=document.getElementById("Alopecia").value;
        }
        else{
            alo="";
        }
        if(document.getElementById("PhotoSesnitvity").checked){
            var phse=document.getElementById("PhotoSesnitvity").value;
        }
        else{
            phse="";
        }
        if(document.getElementById("RashOnFace").checked){
            var raonfa=document.getElementById("RashOnFace").value;
        }
        else{
            raonfa="";
        }
        var deta=document.getElementById("details").value;
        if(document.getElementById("ProximalMyopathy").checked){
            var prmy=document.getElementById("ProximalMyopathy").value;
        }
        else{
            prmy="";
        }
        if(document.getElementById("RedOrPurpleSpots").checked){
            var reorpu=document.getElementById("RedOrPurpleSpots").value;
        }
        else{
            reorpu="";
        }
        var deta13=document.getElementById("details13").value;
        if(document.getElementById("Syncope").checked){
            var sync=document.getElementById("Syncope").value;
        }
        else{
            sync="";
        }
        var deta14=document.getElementById("details14").value;
        var sel=document.getElementById("select").value;
        if(document.getElementById("ChestPain").checked){
            var chpa=document.getElementById("ChestPain").value;
        }
        else{
            chpa="";
        }
        if(document.getElementById("Dyspnoea").checked){
            var dysp=document.getElementById("Dyspnoea").value;
        }
        else{
            dysp="";
        }
        if(document.getElementById("Orthopnea").checked){
            var orth=document.getElementById("Orthopnea").value;
        }
        else{
            orth="";
        }
        if(document.getElementById("PND").checked){
            var pnd=document.getElementById("PND").value;
        }
        else{
            pnd="";
        }
        if(document.getElementById("Palpitations").checked){
            var pal=document.getElementById("Palpitations").value;
        }
        else{
            pal="";
        }
        if(document.getElementById("DM").checked){
            var dm=document.getElementById("DM").value;
        }
        else{
            dm="";
        }
        if(document.getElementById("HTN").checked){
            var htn=document.getElementById("HTN").value;
        }
        else{
            htn="";
        }
        if(document.getElementById("IHD").checked){
            var ihd=document.getElementById("IHD").value;
        }
        else{
            ihd="";
        }
        if(document.getElementById("TB").checked){
            var tb=document.getElementById("TB").value;
        }
        else{
            tb="";
        }
        if(document.getElementById("Asthma").checked){
            var asth=document.getElementById("DoubleVision").value;
        }
        else{
            asth="";
        }
        if(document.getElementById("Hepatitis").checked){
            var hepa=document.getElementById("Hepatitis").value;
        }
        else{
            hepa="";
        }
        var oth=document.getElementById("others").value;
        var pasuhx=document.getElementById("past surgical HX").value;
        if(document.getElementById("Tuberculosis").checked){
            var Tuberculosis=document.getElementById("Tuberculosis").value;
        }
        else{
            Tuberculosis="";
        }
        if(document.getElementById("AnyFamilyMemberHasSimilarIllness").checked){
            var AnyFamilyMemberHasSimilarIllness=document.getElementById("AnyFamilyMemberHasSimilarIllness").value;
        }
        else{
            AnyFamilyMemberHasSimilarIllness="";
        }
        if(document.getElementById("ActiveSmoker").checked){
            var ActiveSmoker=document.getElementById("ActiveSmoker").value;
        }
        else{
            ActiveSmoker="";
        }
        if(document.getElementById("ExSmoker").checked){
            var exsm=document.getElementById("ExSmoker").value;
        }
        else{
            exsm="";
        }
        if(document.getElementById("Alcoholic").checked){
            var alc=document.getElementById("Alcoholic").value;
        }
        else{
            alc="";
        }
        if(document.getElementById("IVDrugAbuser").checked){
            var ivdrab=document.getElementById("IVDrugAbuser").value;
        }
        else{
            ivdrab="";
        }
        var oth1=document.getElementById("other1").value;
        if(document.getElementById("IllicitRelations").checked){
            var ilre1=document.getElementById("IllicitRelations").value;
        }
        else{
            ilre1="";
        }
        if(document.getElementById("Promiscuous").checked){
            var promi=document.getElementById("Promiscuous").value;
        }
        else{
            promi="";
        }
        var job=document.getElementById("job").value;
        if(document.getElementById("AnyColleagueHasSimilarIllness").checked){
            var ancosiil=document.getElementById("AnyColleagueHasSimilarIllness").value;
        }
        else{
            ancosiil="";
        }
        if(document.getElementById("AnyPetsAnimalAtHome").checked){
            var anpeat=document.getElementById("AnyPetsAnimalAtHome").value;
        }
        else{
            anpeat="";
        }
        var deta19=document.getElementById("details19").value;
        if(document.getElementById("AnyHealthConcernAtJob").checked){
            var anheatjo=document.getElementById("AnyHealthConcernAtJob").value;
        }
        else{
            anheatjo="";
        }
        var con=document.getElementById("concerns").value;

       document.getElementById("feverHistory").value=dur1+" "+doc+" "+hite1
       +" "+gra+" "+pat+" "+patdet+" "+ass+" "+runo+" "+cono+" "+sne+" "
       +nadi+" "+soth+" "+odno+" "+frhe+" "+drco+" "+prco+" "+spco+" "+
       hemo+" "+shofbr+" "+whe+" "+rechpa+" "+si1+" "+hoofvo+" "+hali+" "
       +nau+" "+vomi+" "+diar+" "+cons+" "+paab+" "+det+" "+jaun+" "+abdi+" "
       +feofma+" "+det1+" "+bumi+" "+fre+" "+urur+" "+blinur+" "+puinur+" "+
       urinco+" "+lotogrpa+" "+det2+" "+lupa+" "+det3+" "+pepu+" "+loba
       +" "+tepa+" "+tesw+" "+urdi+" "+det4+" "+ilre+" "+loabpa+" "+paco+
       " "+paloabwh+" "+woduafme+" "+abvadi+" "+pocobl+" "+inbl+" "+menho+" " +
       " "+brpa+" "+abnpdi+" "+head+" "+nest+" "+painne+" "+sync+" "+alse+
       " "+irta+" "+fits+" "+deme+" "+atax+" "+dovi+" "+pto+" "+det5+" "+
       sesy+" "+det6+" "+devi+" "+det7+" "+fadeto+" "+side+" "+eabr+" "+
       spbl+" "+epis+" "+hemopt+" "+heme+" "+mele+" "+hema+" "+hemat+" "+
       abpvbl+" "+otbl+" "+lubuinbo+" "+det8+" "+syofan+" "+rash+" "+det9+
       " "+loswof+" "+warm+" "+pain+" "+jopa+" "+josw+" "+det11+" "+mupa+" "
       +musp+" "+det12+" "+back+" "+det13+" "+orul+" "+alo+" "+phse+" "+
       raonfa+" "+deta+" "+prmy+" "+reorpu+" "+deta13+" "+sync+" "+deta14+
       " "+sel+" "+chpa+" "+dysp+" "+orth+" "+pnd+" "+pal+" "+dm+" "+htn+" "
       +ihd+" "+tb+" "+asth+" "+hepa+" "+oth+" "+pasuhx+" "+Tuberculosis+" "
       +AnyFamilyMemberHasSimilarIllness+" "+ActiveSmoker+" "+exsm+" "+alc+" "
       +ivdrab+" "+oth1+" "+ilre1+" "+promi+" "+job+" "+ancosiil+" "+anpeat+" "+deta19+" "+anheatjo+" "+con;
    }
    function htn1(){
        var htndu=document.getElementById("HTNDuration").value;
        if( htndu != null){
            var htndu1="HTN Since "+htndu;
        }
        else {
            htndu1=null;
        }
        if(document.getElementById("newlydiagnosed").checked){
            var nwdi=document.getElementById("newlydiagnosed").value;
        }
        else{
            nwdi="";
        }
        if(document.getElementById("PastHXOfGestationalHTN").checked){
            var pahxge=document.getElementById("PastHXOfGestationalHTN").value;
        }
        else{
            pahxge="";
        }
        var cudr=document.getElementById("CurrentDrugs").value;
        if( cudr != null){
            var cudr1="Currently taking "+cudr;
        }
        else{
            cudr1=null;
        }
        if(document.getElementById("Good").checked){
            var drco=document.getElementById("Good").value;
        }
        else if(document.getElementById("Poor").checked){
            drco=document.getElementById("Poor").value;
        }
        else{
            drco="";
        }
        if(document.getElementById("Good1").checked){
            var dico=document.getElementById("Good1").value;
        }
        else if(document.getElementById("Poor1").checked){
            dico=document.getElementById("Poor1").value;
        }
        else{
            dico="";
        }
        if(document.getElementById("Good2").checked){
            var mon=document.getElementById("Good2").value;
        }
        else if(document.getElementById("Poor2").checked){
            mon=document.getElementById("Poor2").value;
        }
        else{
            mon="";
        }
        if(document.getElementById("Good3").checked){
            var cuco=document.getElementById("Good3").value;
        }
        else if(document.getElementById("Poor3").checked){
            cuco=document.getElementById("Poor3").value;
        }
        else{
            cuco="";
        }
        document.getElementById("htnhistory").value=htndu1+nwdi+pahxge+
        cudr1+drco+dico+mon+cuco;
    }
</script>

