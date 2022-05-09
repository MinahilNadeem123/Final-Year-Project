<div class="modal fade" id="modalThyroidExam" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Thyroid Exam Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
    <form  class="row g-3">
        <h3 style="text-align: center;">Thyroid Exam Form</h3>

        <div class="col-6">
            <label for="Thyroiddetails" class="form-label">ThyroidDetails</label>
            <input type="text" class="form-control" id="Thyroiddetails" placeholder="">
        </div>
        <div class="col-6">
            <label for="Starring" class="form-label">Starring Look</label>
            <input type="text" class="form-control" id="Starring" placeholder="">
        </div>
        <div class="col-6">
            <label for="Pro" class="form-label">Protrusion Of Eyes</label>
            <input type="text" class="form-control" id="Pro" placeholder="">
        </div>
        <div class="col-6">
            <label for="Exop" class="form-label">Exophthalmos</label>
            <input type="text" class="form-control" id="Exop" placeholder="">
        </div>
        <div class="col-6">
            <label for="LigLag" class="form-label">LigLag</label>
            <input type="text" class="form-control" id="LigLag" placeholder="">
        </div>
        <div class="col-6">
            <label for="Lid" class="form-label">LidRetraction</label>
            <input type="text" class="form-control" id="Lid" placeholder="">
        </div>
        <div class="col-6">
            <label for="Loss" class="form-label">LossLateral 3rd Of Eyebrows</label>
            <input type="text" class="form-control" id="Loss" placeholder="">
        </div>
        <div class="col-6">
            <label for="Thyroid" class="form-label">ThyroidSummary</label>
            <input type="text" class="form-control" id="Thyroid" placeholder="">
        </div>
        <br>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Thyroid is enlarged" id="thyroidEnlarged">
            <label class="form-check-label" for="thyroidEnlarged">
                ThyroidEnlarged
            </label>
        </div>


        </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="thyroidExam1()" data-dismiss="modal">Save and Close</button>

            </div>

        </div>
    </div>
</div>
