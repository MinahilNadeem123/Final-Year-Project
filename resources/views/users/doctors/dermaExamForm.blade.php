<div class="modal fade" id="modalDermaExam" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Derma Exam Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
    <form  class="row g-3" style="line-break: anywhere;">
        <h3 style="text-align: center;">Derma Form</h3>
        <div class="form-check">
            <label class="form-check-label" for="Hypopigmentations">Hypopigmentations</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="Hypopigmentation Present" id="Hypopigmentations">

        </div>
        <div class="col-6">
            <label for="Hypopigmentationsdetails" class="form-label">Hypopigmentations Details</label>
            <input type="text" class="form-control" id="Hypopigmentationsdetails" placeholder="">
        </div>
        <div class="col-6">
            <label for="HypopigmentationsSop" class="form-label">HypopigmentationsSop</label>
            <input type="text" class="form-control" id="HypopigmentationsSop" placeholder="">
        </div>

        <div class="form-check">
            <label class="form-check-label" for="Hyperpigmentations">
                Hyperpigmentations
            </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="Hyperpigmentation Present" id="Hyperpigmentations">
        </div>
        <div class="col-6">
            <label for="HyperpigmentationDetails" class="form-label">HyperpigmentationDetails</label>
            <input type="text" class="form-control" id="HyperpigmentationDetails" placeholder="">
        </div>
        <div class="col-6">
            <label for="HyperpigmentationDetailsSop" class="form-label">HyperpigmentationDetailsSop
            </label>
            <input type="text" class="form-control" id="HyperpigmentationDetailsSop" placeholder="">
        </div>

        <div class="form-check">
            <label class="form-check-label" for="Bruises">
                Bruises </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="Bruises Present" id="Bruises" placeholder="">
        </div>
        <div class="col-6">
            <label for="BruisesDetails" class="form-label">BruisesDetails</label>
            <input type="text" class="form-control" id="BruisesDetails" placeholder="">
        </div>
        <div class="col-6">
            <label for="BruisesDetailsOpc" class="form-label">BruisesDetailsOpc
            </label>
            <input type="text" class="form-control" id="BruisesDetailsOpc" placeholder="">
        </div>

        <div class="col-6">
            <label for="SkinOthers" class="form-label">SkinOthers
            </label>
            <input type="text" class="form-control" id="SkinOthers" placeholder="">
        </div>
    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="dermaExam1()" data-dismiss="modal">Copy Summary and Close</button>
            </div>

        </div>
    </div>
</div>
