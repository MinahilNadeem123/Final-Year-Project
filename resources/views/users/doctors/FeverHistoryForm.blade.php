<div class="modal fade" id="modalfeverhistory" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Fever History Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
    <div class="row g-3">

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Duration</div>
            <input type="number" class="form-control" id="duration" placeholder="">
        </div>

        <select class="form-select col-md-6" id="duration1" aria-label="Default select example">
           <option value="">Select...</option>
            <option value="Days">Days</option>
            <option value="Weeks">Weeks</option>
            <option value="Months">Months</option>
            <option value="Years">Years</option>
        </select>


        <div class="col-md-12" >
            <label for="documentation" class="form-label">Documentation</label>
            <select class="form-select" id="documentation" aria-label="Default select example">
                <option value="">Select...</option>
            <option value="Documented">Documented</option>
            <option value="Undocumented">Undocumented</option>
        </select>
        </div>
        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Highest Temp</div>&nbsp
            <input type="text" class="form-control" id="highest_temp" placeholder="">
        </div>

        <select class="form-select col-md-6" id="degree" aria-label="Default select example">
            <option value="">Select...</option>
            <option value="°F">°F</option>
            <option value="°C">°C</option>
        </select>

        <div class="col-md-12" >
           <label for="grade" class="form-label">Grade</label>
        <select class="form-select" id="grade" aria-label="Default select example">
            <option value="">Select...</option>
            <option value="Low Grade">Low 100.5-102.2</option>
            <option value="Moderate Grade">Moderate 102.2-104.0</option>
            <option value="High Grade">High 104.1-106.0</option>
            <option value="Hyperpyrexia">Hyperpyrexia >106.0</option>
        </select>
    </div>

        <div class="col-md-12" >
            <label for="pattern" class="form-label">Pattern</label>
        <select class="form-select" id="pattern" aria-label="Default select example">
            <option value="">Select...</option>
            <option value="Continuous">Continuous</option>
            <option value="Intermitten">Intermittent</option>
            <option value="Remittent">Remittent</option>
        </select>
        </div>
        <div class="col-md-12" >
            <label for="patterndetails" class="form-label">Pattern Detail</label>&nbsp
        <select class="form-select" id="patterndetails" aria-label="Default select example">
            <option value="">Select...</option>
            <option value="Quotidian">Quotidian</option>
            <option value="Tertian">Tertian</option>
            <option value="Quartan">Quartan</option>
            <option value="Pel-Ebestein's">Pel-Ebstein's</option>
            <option value="Relapsing">Relapsing</option>
        </select>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="rigors" id="Rigors">
            <label class="form-check-label" for="Rigors">
                Rigors
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="chills" id="Chills">
            <label class="form-check-label" for="Chills">
                Chills
            </label>
        </div>

        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="malaise" id="Malaise">
            <label class="form-check-label" for="Malaise">
                Malaise
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="night sweats" id="NightSweats">
            <label class="form-check-label" for="NightSweats">
                Night Sweats
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="myalgias" id="Myalgias">
            <label class="form-check-label" for="Myalgias">
                Myalgias
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="weight loss" id="SignificantWeightLoss">
            <label class="form-check-label" for="SignificantWeightLoss">
                Significant Weight Loss
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="anorexia" id="LossOfAppetite">
            <label class="form-check-label" for="LossOfAppetite">
                Loss Of Appetite
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="altered taste" id="LossOfTaste">
            <label class="form-check-label" for="LossOfTaste">
                Loss Of Taste
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="anosmia" id="LossOfSmell">
            <label class="form-check-label" for="LossOfSmell">
                Loss Of Smell
            </label>
        </div>
        <h3 style="text-align: center;">Respiratory Symptoms</h3>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="runny nose" id="RunnyNose">
            <label class="form-check-label" for="RunnyNose">
                Runny Nose
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="congested nose" id="CongestedNose">
            <label class="form-check-label" for="CongestedNose">
                Congested Nose
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="sneezing" id="Sneezing">
            <label class="form-check-label" for="Sneezing">
                Sneezing
            </label>
        </div>

        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="nasal discharge" id="NasalDischarge">
            <label class="form-check-label" for="NasalDischarge">
                Nasal Discharge
            </label>
        </div>

        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="sore throat" id="SoreThroat">
            <label class="form-check-label" for="SoreThroat">
                Sore Throat
            </label>
        </div>

        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="odynophagia" id="Odynophagia">
            <label class="form-check-label" for="Odynophagia">
                Odynophagia
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="frontal headache" id="FrontalHeadache">
            <label class="form-check-label" for="FrontalHeadache">
                Frontal Headache
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="dry cough" id="DryCough">
            <label class="form-check-label" for="DryCough">
                Dry Cough
            </label>
        </div>
        <div class="form-check col-md-12">
            <input class="form-check-input" type="checkbox" value="productive cough" id="ProductiveCough">
            <label class="form-check-label" for="ProductiveCough">
                Productive Cough
            </label>
        </div>
        <div class="input-group col-md-6" >
            <label for="sputumcolour" class="form-label">Sputum Colour</label>&nbsp

        <select id="sputumcolour" class="form-select col-md-6" aria-label="Default select example">
          <option value="">Select...</option>
            <option value="with White coloured sputum">White</option>
            <option value="with Yellow coloured sputum">Yellow</option>
            <option value="with Green coloured sputum">Green</option>
            <option value="with Brown coloured sputum">Brown</option>
            <option value="with Blood stained coloured sputum">Blood Stain</option>
        </select>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="hemoptysis" id="Hemoptysis">
            <label class="form-check-label" for="Hemoptysis">
                Hemoptysis
            </label>
        </div>

        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="shortness of breath" id="ShortnessOfBreath">
            <label class="form-check-label" for="ShortnessOfBreath">
                Shortness Of Breath
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="wheeezing" id="Wheezing">
            <label class="form-check-label" for="Wheezing">
                Wheezing
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="respirophasic chest pain" id="RespirophasicChestPain">
            <label class="form-check-label" for="RespirophasicChestPain">
                Respirophasic Chest Pain
            </label>
        </div>
        <div class="input-group col-md-6" >
            <div style="width: 100px;">Site</div>&nbsp
            <input type="text" id="site" class="form-control" placeholder="">
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="hoarsenss of voice" id="HoarsenessOfVoice">
            <label class="form-check-label" for="HoarsenessOfVoice">
                Hoarseness Of Voice
            </label>
        </div>
        <div class="form-check col-md-3">
            <input class="form-check-input" type="checkbox" value="halitosis" id="Halitosis">
            <label class="form-check-label" for="Halitosis">
                Halitosis
            </label>
        </div>
        <h3 style="text-align: center;">GIT Symptoms</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="Nausea" id="Nausea">
            <label class="form-check-label" for="Nausea">
                Nausea
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="Vomiting" id="Vomiting">
            <label class="form-check-label" for="Vomiting">
               Vomiting
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="Diarrhoea" id="Diarrhoea">
            <label class="form-check-label" for="Diarrhoea">
                Diarrhoea
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="Constipation" id="Constipation">
            <label class="form-check-label" for="Constipation">
                Constipation
            </label>
        </div>

        <div class="form-check col-12">
            <input class="form-check-input" type="checkbox" value="Pain Abdomen" id="PainAbdomen">
            <label class="form-check-label" for="PainAbdomen">
                PainAbdomen
            </label>
        </div>
        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Detail</div>&nbsp
            <input type="text"  id="detail" class="form-control" placeholder="">
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="jaundice" id="Jaundice">
            <label class="form-check-label" for="Jaundice">
                Jaundice
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="abdominal distension" id="AbdominalDistension">
            <label class="form-check-label" for="AbdominalDistension">
                Abdominal Distension
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="feeling of mass" id="FeelingOfMass">
            <label class="form-check-label" for="FeelingOfMass">
                Feeling Of Mass
            </label>
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Detail</div>&nbsp
            <input type="text" class="form-control" id="detail1" placeholder="">
        </div>



        <h3 style="text-align: center;">Urinary System</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="burning micturition" id="BurningMicturition">
            <label class="form-check-label" for="BurningMicturition">
                Burning Micturition
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="frequency" id="Frequency">
            <label class="form-check-label" for="Frequency">
                Frequency
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="urinary urgency" id="UrinaryUrgency">
            <label class="form-check-label" for="UrinaryUrgency">
                Urinary Urgency
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="blood in urine" id="BloodInUrine">
            <label class="form-check-label" for="BloodInUrine">
                Blood In Urine
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="PUS in urine" id="PUSInUrine">
            <label class="form-check-label" for="PUSInUrine">
                PUS In Urine
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="urinary in continence" id="UrinaryInContinence">
            <label class="form-check-label" for="UrinaryInContinence">
                Urinary In Continence
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="loin to groin pain" id="LoinToGroinPain">
            <label class="form-check-label" for="LoinToGroinPain">
                Loin To Groin Pain
            </label>
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Detail</div>&nbsp
            <input type="text" class="form-control" id="detail2" placeholder="">
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="lumbar pain" id="LumbarPain">
            <label class="form-check-label" for="LumbarPain">
                Lumbar Pain
            </label>
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Detail</div>&nbsp
            <input type="text" class="form-control" id="detail3" placeholder="">
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="periorbital puffiness" id="PeriorbitalPuffiness">
            <label class="form-check-label" for="PeriorbitalPuffiness">
                Periorbital Puffiness
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="low backache" id="LowBackache">
            <label class="form-check-label" for="LowBackache">
                Low Backache
            </label>
        </div>

        <h3 style="text-align: center;">Genital System</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="testicular pain" id="TesticularPain">
            <label class="form-check-label" for="TesticularPain">
                Testicular Pain
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="testicular swelling" id="TestcularSwelling">
            <label class="form-check-label" for="TestcularSwelling">
                Testcular Swelling
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="uretheral discharge" id="UretheralDischarge">
            <label class="form-check-label" for="UretheralDischarge">
                Uretheral Discharge
            </label>
        </div>

        <div class="input-group col-md-6" >
            <div  style="width: 100px;">Detail</div>&nbsp
            <input type="text" class="form-control" id="detail4" placeholder="">
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="Illicit relations" id="IllicitRelations">
            <label class="form-check-label" for="IllicitRelations">
                Illicit Relations
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="lower abdomina pain" id="LowerAbdominaPain">
            <label class="form-check-label" for="LowerAbdominaPain">
                Lower Abdomina Pain
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="painful coitus" id="PainfulCoitus">
            <label class="form-check-label" for="PainfulCoitus">
                Painful Coitus
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="Pain Lower Abdomen Which Worsen On Jarring Movements" id="PainLowerAbdomenWhichWorsenOnJarringMovements">
            <label class="form-check-label" for="PainLowerAbdomenWhichWorsenOnJarringMovements">
                Pain Lower Abdomen Which Worsen On Jarring Movements
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="worsen during or after menses" id="WorsenDuringOrAfterMenses">
            <label class="form-check-label" for="WorsenDuringOrAfterMenses">
                Worsen During Or After Menses
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="abnormal vaginal discharge" id="AbnormalVaginalDiscarge">
            <label class="form-check-label" for="AbnormalVaginalDiscarge">
                Abnormal Vaginal Discarge
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="postcoital bleeding" id="PostcoitalBleeding">
            <label class="form-check-label" for="PostcoitalBleeding">
                Postcoital Bleeding
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="intermenstural bleeding" id="IntermensturalBleeding">
            <label class="form-check-label" for="IntermensturalBleeding">
                Intermenstural Bleeding
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="menhorrhagia" id="Menhorrhagia">
            <label class="form-check-label" for="Menhorrhagia">
                Menhorrhagia
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="breast pain" id="BreastPain">
            <label class="form-check-label" for="BreastPain">
                Breast Pain
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="abnormal nipple discharge" id="AbnormalNippleDischarge">
            <label class="form-check-label" for="AbnormalNippleDischarge">
                Abnormal Nipple Discharge
            </label>
        </div>

        <h3 style="text-align: center;">Nervous System</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="headache" id="Headache">
            <label class="form-check-label" for="Headache">
                Headache
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="neck stiffness" id="NeckStiffness">
            <label class="form-check-label" for="NeckStiffness">
                Neck Stiffness
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="pain in neck" id="PainInNeck">
            <label class="form-check-label" for="PainInNeck">
                Pain In Neck
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="syncope" id="Syncope">
            <label class="form-check-label" for="Syncope">
                Syncope
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="altered sesnorium" id="AlteredSesnorium">
            <label class="form-check-label" for="AlteredSesnorium">
                Altered Sesnorium
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="irrelevant talk" id="IrrelevantTalk">
            <label class="form-check-label" for="IrrelevantTalk">
                IrrelevantTalk
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="fits" id="Fits">
            <label class="form-check-label" for="Fits">
                Fits
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="dec memonry" id="DecMemory">
            <label class="form-check-label" for="DecMemory">
                Dec Memory
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="atxia" id="Ataxia">
            <label class="form-check-label" for="Ataxia">
                Ataxia
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="double vision" id="DoubleVision">
            <label class="form-check-label" for="DoubleVision">
                Double Vision
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="ptosis" id="Ptosis">
            <label class="form-check-label" for="Ptosis">
                Ptosis
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="weakness of any part of body" id="WeaknessOfAnyPartOfBody">
            <label class="form-check-label" for="WeaknessOfAnyPartOfBody">
                Weakness Of Any Part Of Body
            </label>
        </div>
        <div class="input-group col-md-10">
            <div  style="width: 100px;">Detail</div>
            <input  class="form-control" id="detail5" placeholder="">
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="sensory symptoms" id="SensorySymptoms">
            <label class="form-check-label" for="SensorySymptoms">
                Sensory Symptoms
            </label>
        </div>
        <div class="input-group col-md-10">
            <div  style="width: 100px;">Detail</div>
            <input  class="form-control" id="detail6" placeholder="">
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="dec vision" id="DecVision">
            <label class="form-check-label" for="DecVision">
                Dec Vision
            </label>
        </div>

        <div class="input-group col-md-10">
            <div  style="width: 100px;">Detail</div>
            <input  class="form-control" id="detail7" placeholder="">
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="Facial deviation to" id="FacialDeviationTo">
            <label class="form-check-label" for="FacialDeviationTo">
                Facial Deviation To
            </label>
        </div>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">To Side</div>
            <input  class="form-control" id="side" placeholder="">
        </div>
        <h3 style="text-align: center;">Hematology</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="easy bruisibility" id="EasyBruisibility">
            <label class="form-check-label" for="EasyBruisibility">
                Easy Bruisibility
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="spontaneous bleeding" id="SpontaneousBleeding">
            <label class="form-check-label" for="SpontaneousBleeding">
                Spontaneous Bleeding
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="epistaxis" id="Epistaxis">
            <label class="form-check-label" for="Epistaxis">
                Epistaxis
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="hemoptysis" id="Hemoptysis">
            <label class="form-check-label" for="Hemoptysis">
                Hemoptysis
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="hemetemsis" id="Hemetemsis">
            <label class="form-check-label" for="Hemetemsis">
                Hemetemsis
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="melena" id="Melena">
            <label class="form-check-label" for="Melena">
                Melena
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="hematochezia" id="Hematochezia">
            <label class="form-check-label" for="Hematochezia">
                Hematochezia
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="hematuria" id="Hematuria">
            <label class="form-check-label" for="Hematuria">
                Hematuria
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="abnormal pv bleeding" id="AbnormalPVBleeding">
            <label class="form-check-label" for="AbnormalPVBleeding">
                Abnormal PV Bleeding
            </label>
        </div>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">Others Bleeding</div>
            <input  class="form-control" id="others bleeding" placeholder="">
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="lumps bumps in body" id="LumpsBumpsInBody">
            <label class="form-check-label" for="LumpsBumpsInBody">
                Lumps Bumps In Body
            </label>
        </div>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">Details</div>
            <input  class="form-control" id="detail8" placeholder="">
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="symptoms of anemia" id="SymptomsOfAnemia">
            <label class="form-check-label"  for="SymptomsOfAnemia">
                Symptoms Of Anemia
            </label>
        </div>
        <h3 style="text-align: center;">Dermatology</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="rash" id="Rash">
            <label class="form-check-label" for="Rash">
                Rash
            </label>
        </div>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">Details</div>
            <input  class="form-control" id="detail9" placeholder="">
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="local swelling of" id="LocalSwellingOf">
            <label class="form-check-label" for="LocalSwellingOf">
                Local Swelling Of
            </label>
        </div>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">Details</div>
            <input  class="form-control" id="detail10" placeholder="">
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="warm" id="Warm">
            <label class="form-check-label" for="Warm">
                Warm
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="painful" id="Painful">
            <label class="form-check-label" for="Painful">
                Painful
            </label>
        </div>

        <h3 style="text-align: center;">MSK/Auto Immune</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="joints pain" id="JointPains">
            <label class="form-check-label" for="JointPains">
                Joint Pains
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="joints swelling" id="JointSwelling">
            <label class="form-check-label" for="JointSwelling">
                Joint Swelling
            </label>
        </div>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">Details</div>
            <input  class="form-control" id="detail11" placeholder="">
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="muscle pain" id="MusclePain">
            <label class="form-check-label" for="MusclePain">
                Muscle Pain
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="muscle spasm" id="MuscleSpasm">
            <label class="form-check-label" for="MuscleSpasm">
                Muscle Spasm
            </label>
        </div>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">Details</div>
            <input  class="form-control" id="detail12" placeholder="">
        </div>

        <div class="form-check col-6">
            <input class="form-check-input" type="checkbox" value="back ache" id="BackAche">
            <label class="form-check-label" for="BackAche">
                Backache
            </label>
        </div>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">Details</div>
            <input  class="form-control" id="detail13" placeholder="">
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="oral ulcers" id="OralUlcers">
            <label class="form-check-label" for="OralUlcers">
                Oral Ulcers
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="alopecia" id="Alopecia">
            <label class="form-check-label" for="Alopecia">
                Alopecia
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="photo sesnitvity" id="PhotoSesnitvity">
            <label class="form-check-label" for="PhotoSesnitvity">
                Photo Sesnitvity
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="rash on face" id="RashOnFace">
            <label class="form-check-label" for="RashOnFace">
                Rash On Face
            </label>
        </div>

        <div class="col-md-6">
            <label for="details" class="form-label">Details</label>


        <select class="form-select" id="details" aria-label="Default select example">
           <option value="">Select...</option>
            <option value="malar rash">Malar Rash</option>
            <option value="discoid rash">Discoid Rash</option>
            <option value="heliotrope rash">Heliotrope Rash</option>
        </select>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="proximal myopathy" id="ProximalMyopathy">
            <label class="form-check-label" for="ProximalMyopathy">
                Proximal Myopathy
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="red or purple spots" id="RedOrPurpleSpots">
            <label class="form-check-label" for="RedOrPurpleSpots">
                Red Or Purple Spots
            </label>
        </div>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">Details</div>
            <input  class="form-control" id="details13" placeholder="">
        </div>

        <h3 style="text-align: center;">CVS</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="syncope" id="Syncope">
            <label class="form-check-label" for="Syncope">
                Syncope
            </label>
        </div>

        <div class="input-group col-md-8">
            <div  style="width: 100px;">Details</div>
            <input  class="form-control" id="details14" placeholder="">
        </div>

        <select class="form-select col-md-4" id="select" aria-label="Default select example">
           <option value="">Select...</option>
            <option value="at rest">At Rest</option>
            <option value="during activity">During Activity</option>
            <option value="heliotrope rash">Heliotrope Rash</option>
        </select>
&nbsp&nbsp&nbsp&nbsp
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="chest pain" id="ChestPain">
            <label class="form-check-label" for="ChestPain">
                Chest Pain
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="dyspnoea" id="Dyspnoea">
            <label class="form-check-label" for="Dyspnoea">
                Dyspnoea
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="orthopnea" id="Orthopnea">
            <label class="form-check-label" for="Orthopnea">
                Orthopnea
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="PND" id="PND">
            <label class="form-check-label" for="PND">
                PND
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="palpitations" id="Palpitations">
            <label class="form-check-label" for="Palpitations">
                Palpitations
            </label>
        </div>

        <h3 style="text-align: center;">Past History</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="DM" id="DM">
            <label class="form-check-label" for="DM">
                DM
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="HTN" id="HTN">
            <label class="form-check-label" for="HTN">
                HTN
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="IHD" id="IHD">
            <label class="form-check-label" for="IHD">
                IHD
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="TB" id="TB">
            <label class="form-check-label" for="TB">
                TB
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="asthma" id="Asthma">
            <label class="form-check-label" for="Asthma">
                Asthma
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="hepatitis" id="Hepatitis">
            <label class="form-check-label" for="Hepatitis">
                Hepatitis
            </label>
        </div>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">Others</div>
            <input  class="form-control" id="others" placeholder="">
        </div>
        <div class="input-group col-md-8">
            <div  style="width: 100px;">Past Surgical HX</div>
            <input  class="form-control" id="past surgical HX" placeholder="">
        </div>

        <h3 style="text-align: center;">Family History</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="tuberculosis" id="Tuberculosis">
            <label class="form-check-label" for="Tuberculosis">
                Tuberculosis
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="any family member has similar illness" id="AnyFamilyMemberHasSimilarIllness">
            <label class="form-check-label" for="AnyFamilyMemberHasSimilarIllness">
                Any Family Member Has Similar Illness
            </label>
        </div>

        <h3 style="text-align: center;">Personal History</h3>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="active smoker" id="ActiveSmoker">
            <label class="form-check-label" for="ActiveSmoker">
                Active Smoker
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="ex smoker" id="ExSmoker">
            <label class="form-check-label" for="ExSmoker">
                Ex Smoker
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="alcoholic" id="Alcoholic">
            <label class="form-check-label" for="Alcoholic">
                Alcoholic
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="IV drug abuser" id="IVDrugAbuser">
            <label class="form-check-label" for="IVDrugAbuser">
                IV Drug Abuser
            </label>
        </div>
        <div class="input-group col-md-6">
            <div  style="width: 100px;">Others</div>
            <input  class="form-control" id="other1" placeholder="">
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="illicit relations" id="IllicitRelations">
            <label class="form-check-label" for="IllicitRelations">
                Illicit Relations
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="promiscuous" id="Promiscuous">
            <label class="form-check-label" for="Promiscuous">
                Promiscuous
            </label>
        </div>

        <h3 style="text-align: center;">Occupation Residence History </h3>

        <div class="input-group col-md-8">
            <div  style="width: 100px;">Job</div>
            <input  class="form-control" id="job" placeholder="">
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="any colleague has similar illness" id="AnyColleagueHasSimilarIllness">
            <label class="form-check-label" for="AnyColleagueHasSimilarIllness">
                Any Colleague Has Similar Illness
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="any pets animals at home" id="AnyPetsAnimalAtHome">
            <label class="form-check-label" for="AnyPetsAnimalAtHome">
                Any Pets Animal At Home
            </label>
        </div>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">Detail</div>
            <input  class="form-control" id="details19" placeholder="">
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" value="any health concern at job" id="AnyHealthConcernAtJob">
            <label class="form-check-label" for="AnyHealthConcernAtJob">
                Any Health Concern At Job
            </label>
        </div>

        <h3 style="text-align: center;">Patient Concern </h3>

        <div class="input-group col-md-6">
            <div  style="width: 100px;">Concerns</div>
            <input  class="form-control" id="concerns" placeholder="">
        </div>


        <div><div></div></div>

    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="feverhistory1()" data-dismiss="modal">Save and Close</button>
            </div>

        </div>
    </div>

</div>
</div>
