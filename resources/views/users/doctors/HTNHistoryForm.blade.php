<div class="modal fade" id="modalhtnhistory" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">HTN History Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
    <form class="row g-3">

        <div class="col-md-4">
            <label for="HTNDuration" class="form-label">HTN Duration</label>
            <input type="text" class="form-control" id="HTNDuration">
        </div>

        <div class="form-check col-md-4">
            <input class="form-check-input" type="checkbox" value="Newly Diagnosed HTN" id="newlydiagnosed">
            <label class="form-check-label" for="newlydiagnosed">
                Newly Diagnosed
            </label>
        </div>

        <div class="form-check col-md-4">
            <input class="form-check-input" type="checkbox" value="+ve Past HX Of Gestational HTN " id="PastHXOfGestationalHTN">
            <label class="form-check-label" for="PastHXOfGestationalHTN">
                Past HX Of Gestational HTN
            </label>
        </div>
        <div class="col-md-12">
            <label for="CurrentDrugs" class="form-label">Current Drugs</label>
            <input type="text" class="form-control" id="CurrentDrugs">
        </div>
        <div id="drugcompliance" class="row">
        <div class="col-md-4">
            <label  class="form-label">DrugCompliance</label>

        </div>

        <div class="form-check col-md-4">
            <input class="form-check-input" type="checkbox" value="good compliance to drugs" id="Good">
            <label class="form-check-label" for="Good">
                Good
            </label>
        </div>

        <div class="form-check col-md-4">
            <input class="form-check-input" type="checkbox" value="poor compliance to drugs" id="Poor">
            <label class="form-check-label" for="Poor">
               Poor
            </label>
        </div>
        </div>
  <div class="row" id="dietcompliance">
        <div class="col-md-4">
            <label  class="form-label">Diet Compliance</label>

        </div>

        <div class="form-check col-md-4">
            <input class="form-check-input" type="checkbox" value="good dietary compliance" id="Good1">
            <label class="form-check-label" for="Good1">
                Good
            </label>
        </div>

        <div class="form-check col-md-4">
            <input class="form-check-input" type="checkbox" value="poor dietary compliance" id="Poor1">
            <label class="form-check-label" for="Poor1">
                Poor
            </label>
        </div>
  </div>
        <div class="row" id="monitoring1">
            <div class="col-md-4">
                <label  class="form-label">Monitoring</label>

            </div>

            <div class="form-check col-md-4">
                <input class="form-check-input" type="checkbox" value="good monitoring" id="Good2">
                <label class="form-check-label" for="Good2">
                    Good
                </label>
            </div>

            <div class="form-check col-md-4">
                <input class="form-check-input" type="checkbox" value="poor monitoring" id="Poor2">
                <label class="form-check-label" for="Poor2">
                    Poor
                </label>
            </div>
        </div>
        <div class="row" id="currentcontrol">
        <div class="col-md-4">
            <label class="form-label">Current Control</label>

        </div>

        <div class="form-check col-md-4">
            <input class="form-check-input" type="checkbox" value="currently well controlled" id="Good3">
            <label class="form-check-label" for="Good3">
                Good
            </label>
        </div>

        <div class="form-check col-md-4">
            <input class="form-check-input" type="checkbox" value="currently poor control" id="Poor3">
            <label class="form-check-label" for="Poor3">
                Poor
            </label>
        </div>
        </div>
    </form>

        <div><div></div></div>



                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="htn1()" data-dismiss="modal">Save and Close</button>
            </div>

        </div>
    </div>

</div>
<script type="text/javascript">
    window.onload = function () {
        var tblFruits = document.getElementById("drugcompliance");
        var chks = tblFruits.getElementsByTagName("INPUT");
        for (var i = 0; i < chks.length; i++) {
            chks[i].onclick = function () {
                for (var i = 0; i < chks.length; i++) {
                    if (chks[i] != this && this.checked) {
                        chks[i].checked = false;
                    }
                }
            };
        }
        var tblFruits1 = document.getElementById("dietcompliance");
        var chks1 = tblFruits1.getElementsByTagName("INPUT");
        for (var j = 0; j < chks1.length; j++) {
            chks1[j].onclick = function () {
                for (var j = 0; j < chks1.length; j++) {
                    if (chks1[j] != this && this.checked) {
                        chks1[j].checked = false;
                    }
                }
            };
        }

        var tblFruits3 = document.getElementById("currentcontrol");
        var chks3 = tblFruits3.getElementsByTagName("INPUT");
        for (var l = 0; l < chks3.length; l++) {
            chks3[l].onclick = function () {
                for (var l = 0; l < chks3.length; l++) {
                    if (chks3[l] != this && this.checked) {
                        chks3[l].checked = false;
                    }
                }
            };
        }
        var tblFruits4 = document.getElementById("monitoring1");
        var chks4 = tblFruits4.getElementsByTagName("INPUT");
        for (var k = 0; k < chks4.length; k++) {
            chks4[k].onclick = function () {
                for (var k = 0; k < chks4.length; k++) {
                    if (chks4[k] != this && this.checked) {
                        chks4[k].checked = false;
                    }
                }
            };
        }

    };
</script>


