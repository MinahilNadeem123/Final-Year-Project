<div class="modal fade" id="modalEyeExam" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Eye Exam Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
    <form  class="row g-3">
        <h3 style="text-align: center;">Eyes Summary</h3>
        <div class="col-6">
            <label for="eyesummary" class="form-label">Eyes Summary</label>
            <input type="text" class="form-control" id="eyesummary" placeholder="">
        </div>
        <div class="col-6">
            <label for="Pallorln" class="form-label">PallorlnConjuctiva</label>
            <input type="text" class="form-control" id="Pallorln" placeholder="">
        </div>
        <div class="col-6">
            <label for="Jaundice" class="form-label">Jaundice</label>
            <input type="text" class="form-control" id="Jaundice" placeholder="">
        </div>
        <div class="col-6">
            <label for="Arcus" class="form-label">Arcus</label>
            <input type="text" class="form-control" id="Arcus" placeholder="">
        </div>
        <div class="col-6">
            <label for="Calci" class="form-label">Calcification</label>
            <input type="text" class="form-control" id="Calci" placeholder="">
        </div>
    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="eyeExam1()" data-dismiss="modal">Save and Close</button>
            </div>

        </div>
    </div>
</div>
