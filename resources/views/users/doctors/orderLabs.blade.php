<div class="modal fade" id="enterLabs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Investigations Order Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

<div class="container-fluid">
    <form class="row g-3" method="post" action="{{route('insertLabRecord')}}" enctype="multipart/form-data">
        @csrf
        <h3 style="text-align: center;">CMC Hematology</h3>
        <input type="text" name="cr_no" class="form-control" id="Cr" value="{{isset($data) ? $data->cr_no: ''}}" hidden>
        <div class="form-check col-3">
            <input class="form-check-input" name="cbc" type="checkbox" value="CBC" id="cbc">
            <label class="form-check-label" for="cbc">
                CBC
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" name="hb" type="checkbox" value="HB" id="hb">
            <label class="form-check-label" for="hb">
                HB
            </label>
        </div>
        <div class="form-check col-3" >
            <input class="form-check-input" name="esr" type="checkbox" value="ESR" id="esr">
            <label class="form-check-label" for="esr">
                ESR
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" name="ptinr" type="checkbox" value="PTINR" id="ptinr">
            <label class="form-check-label" for="ptinr">
                PTINR
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" name="aptt" type="checkbox" value="APTT" id="aptt">
            <label class="form-check-label" for="aptt">
                APTT
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" name="btct" type="checkbox" value="BTCT" id="btct">
            <label class="form-check-label" for="btct">
                BTCT
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" name="blood_grouping" type="checkbox" value="Blood Grouping" id="bloodgrouping">
            <label class="form-check-label" for="bloodgrouping">
                Blood Grouping
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" name="cross_match" type="checkbox" value="Cross Match" id="crossmatch">
            <label class="form-check-label" for="crossmatch">
                Cross Match
            </label>
        </div>
        <h3 style="text-align: center;">CMC Biochemistry</h3>
        <div class="form-check col-3">
            <input class="form-check-input" type="checkbox" name="lfts" value="LFTs" id="lfts">
            <label class="form-check-label" for="lfts">
              LFTs
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" name="split_bilirubin" type="checkbox" value="Split Bilirubin" id="splitbilirubin">
            <label class="form-check-label" for="splitbilirubin">
               Split Bilirubin
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" name="alt" type="checkbox" value="ALT" id="alt">
            <label class="form-check-label" for="alt">
                ALT
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" name="ast" type="checkbox" value="AST" id="ast">
            <label class="form-check-label" for="ast">
                AST
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" name="alk" type="checkbox" value="ALK" id="alk">
            <label class="form-check-label" for="alk">
                ALK
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" name="albumin" type="checkbox" value="Albumin" id="albumin">
            <label class="form-check-label" for="albumin">
                Albumin
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" name="total_protien" type="checkbox" value="Total Protein" id="totalprotein">
            <label class="form-check-label" for="totalprotein">
                Total Protein
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" name="rfts" type="checkbox" value="RFTs" id="rfts">
            <label class="form-check-label" for="rfts">
                RFTs
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" name="urea" type="checkbox" value="Urea" id="urea">
            <label class="form-check-label" for="urea">
                Urea
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" name="creatinine" type="checkbox" value="Creatinine" id="creatinine">
            <label class="form-check-label" for="creatinine">
              Creatinine
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" name="bsr" type="checkbox" value="BSR" id="bsr">
            <label class="form-check-label" for="bsr">
                BSR
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" name="bsf" type="checkbox" value="BSF" id="bsf">
            <label class="form-check-label" for="bsf">
                BSF
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" name="electrolytes_nak" type="checkbox" value="S/Na,S/K" id="snask">
            <label class="form-check-label" for="snask">
                S/Na,S/K
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" name="na" type="checkbox" value="NA" id="na">
            <label class="form-check-label" for="na">
                NA
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" name="k" type="checkbox" value="K" id="k">
            <label class="form-check-label" for="k">
                K
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" name="ca" type="checkbox" value="Ca" id="ca">
            <label class="form-check-label" for="ca">
                Ca
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" name="lipid_profile" type="checkbox" value="Lipid Profile" id="lipidprofile">
            <label class="form-check-label" for="lipidprofile">
                Lipid Profile
            </label>
        </div>

        <div class="form-check col-3">
            <input class="form-check-input" name="hba1c" type="checkbox" value="HBA1C" id="hba1c">
            <label class="form-check-label" for="hba1c">
                HBA1C
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" name="amylase" type="checkbox" value="Amylase" id="amylase">
            <label class="form-check-label" for="amylase">
                Amylase
            </label>
        </div>
        <div class="form-check col-3">
            <input class="form-check-input" name="uric_acid" type="checkbox" value="Uric Acid" id="uricacid">
            <label class="form-check-label" for="uricacid">
                Uric Acid
            </label>
        </div>
        <h3 style="text-align: center;">CMC Serology</h3>
        <div class="form-check col-4">
            <input class="form-check-input" name="hbsag" type="checkbox" value="HBsAG" id="hbsag">
            <label class="form-check-label" for="hbsag">
                HBsAG
            </label>
        </div>
        <div class="form-check col-4">
            <input class="form-check-input" name="anti_hcv" type="checkbox" value="AntiHCV" id="antihcv">
            <label class="form-check-label" for="antihcv">
                AntiHCV
            </label>
        </div>
        <div class="form-check col-4">
            <input class="form-check-input" name="anti_hiv" type="checkbox" value="AntiHIV" id="antihiv">
            <label class="form-check-label" for="antihiv">
                Anti HIV
            </label>
        </div>
        <div class="form-check col-4">
            <input class="form-check-input" name="mpict" type="checkbox" value="MP ICT" id="mpict">
            <label class="form-check-label" for="mpict">
                MP ICT
            </label>
        </div>
        <div class="form-check col-4">
            <input class="form-check-input" name="vdrl" type="checkbox" value="VDRL" id="vdrl">
            <label class="form-check-label" for="vdrl">
                VDRL
            </label>
        </div>
        <div class="form-check col-4">
            <input class="form-check-input" name="donor_screening_ict" type="checkbox" value="Donor Screening" id="donorscreening">
            <label class="form-check-label" for="donorscreening">
               Donor Screening
            </label>
        </div>
        <div class="form-check col-4">
            <input class="form-check-input" name="ra_factor_ql" type="checkbox" value="RA Factor QL" id="rafactorql">
            <label class="form-check-label" for="rafactorql">
                RA Factor QL
            </label>
        </div>
        <div class="form-check col-4">
            <input class="form-check-input" name="aso" type="checkbox" value="ASO" id="aso">
            <label class="form-check-label" for="aso">
                ASO
            </label>
        </div>
        <div class="form-check col-4">
            <input class="form-check-input" name="crp" type="checkbox" value="CRP" id="crp">
            <label class="form-check-label" for="crp">
                CRP
            </label>
        </div>
        <div class="form-check col-4">
            <input class="form-check-input" name="typhidot_ict" type="checkbox" value="Typhiod ICT" id="typhiodotict">
            <label class="form-check-label" for="typhiodotict">
                Typhiodot ICT
            </label>
        </div>
        <div class="form-check col-4">
            <input class="form-check-input" name="widal" type="checkbox" value="Widal" id="widal">
            <label class="form-check-label" for="widal">
               Widal
            </label>
        </div>
        <div class="form-check col-4">
            <input class="form-check-input" name="trop_t" type="checkbox" value="Trop T" id="tropt">
            <label class="form-check-label" for="tropt">
                Trop T
            </label>
        </div>

        <h3 style="text-align: center;">CMC Others</h3>
        <div class="form-check col-4">
            <input class="form-check-input" name="urine_ce" type="checkbox" value="Urine CE" id="urinece">
            <label class="form-check-label" for="urinece">
                Urine CE
            </label>
        </div>
        <div class="form-check col-4">
            <input class="form-check-input" name="upt" type="checkbox" value="UPT" id="upt">
            <label class="form-check-label" for="upt">
                UPT
            </label>
        </div>
        <div class="form-check col-4">
            <input class="form-check-input" name="semen" type="checkbox" value="Semen" id="semen">
            <label class="form-check-label" for="semen">
                Semen
            </label>
        </div>




            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
</div>
            </div>
        </div>
    </div>
</div>
