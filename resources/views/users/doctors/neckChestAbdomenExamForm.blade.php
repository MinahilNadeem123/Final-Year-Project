<div class="modal fade" id="modalNeckExam" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Neck Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
<h3 style="text-align: center;">Neck Form</h3>
    <form  class="row g-3">
        <div class="col-6">
            <label for="JVP " class="form-label">JVP Details</label>
            <input type="text" class="form-control" id="JVP" placeholder="">
        </div>
        <div class="col-6">
            <label for="NeckVein" class="form-label">NeckVeinsEngorged</label>
            <input type="text" class="form-control" id="NeckVein" placeholder="">
        </div>
        <div class="col-6">
            <label for="Spider " class="form-label">SpiderAngiomas</label>
            <input type="text" class="form-control" id="Spider" placeholder="">
        </div>
        <div class="col-6">
            <label for="Sacral" class="form-label">SacralEdema</label>
            <input type="text" class="form-control" id="Sacral" placeholder="">
        </div>
        <div class="col-6">
            <label for="Spine " class="form-label">SpineTenderness</label>
            <input type="text" class="form-control" id="Spine" placeholder="">
        </div>
        <div class="col-6">
            <label for="Chest" class="form-label">ChestDeformity</label>
            <input type="text" class="form-control" id="Chest" placeholder="">
        </div>
        <div class="col-6">
            <label for="Gyne " class="form-label">Gynecomastia</label>
            <input type="text" class="form-control" id="Gyne" placeholder="">
        </div>
        <div class="col-6">
            <label for="Sternal" class="form-label">SternalTenderness</label>
            <input type="text" class="form-control" id="Sternal" placeholder="">
        </div>
        <div class="col-6">
            <label for="NeckChest" class="form-label">NeckChestAbdoSummary</label>
            <input type="text" class="form-control" id="NeckChest" placeholder="">
        </div>
        <br>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="JVP is Raised" id="jvpisRaised">
            <label class="form-check-label" for="jvpisRaised">
                JVPRaised
            </label>
        </div>

    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="neckExam1()" data-dismiss="modal">Save and Close</button>
            </div>

        </div>
    </div>
</div>

