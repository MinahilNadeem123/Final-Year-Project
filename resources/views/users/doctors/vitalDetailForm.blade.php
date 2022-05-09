<div class="modal fade" id="modalVitalDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Vital Detail Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
    <form  class="row g-3">
        <h3 style="text-align: center;">Vitals Form</h3>
        <div class="col-6">
            <label for="PlusRate" class="form-label">Plus Rate bpm</label>
            <input type="text" class="form-control" id="PlusRate" placeholder="">
        </div>

        <div class="col-6">
            <label for="PluseRateRhythm" class="form-label">Pluse Rate Rhythm</label>
            <select  class="form-select" id="PluseRateRhythm" >
                <option value=""> Select...</option>
                <option value="Regular"> Regular</option>
                <option value="Regularly Irregular"> Regularly Irregular</option>
                <option value="Irregularly Irregular"> Irregularly Irregular</option>
            </select>
        </div>
        <div class="col-6">
            <label for="Pulse" class="form-label">Pulse</label>
            <input type="text" class="form-control" id="Pulse" placeholder="">
        </div>
        <div class="col-6">
            <label for="PulseCharacter" class="form-label">PulseCharacter</label>
            <input type="text" class="form-control" id="PulseCharacter" placeholder="">
        </div>
        <div class="col-6">
            <label for="RadioRadialDelay" class="form-label">RadioRadialDelay</label>
            <input type="text" class="form-control" id="RadioRadialDelay" placeholder="">
        </div>
        <div class="col-md-6">
            <label for="RightArmSBP" class="form-label">RightArmSBP</label>
            <input type="text" class="form-control" id="RightArmSBP" placeholder="">
        </div>
        <div class="col-6">
            <label for="RightArmDBP" class="form-label">RightArmDBP</label>
            <input type="text" class="form-control" id="RightArmDBP" placeholder="">
        </div>
        <div class="col-6">
            <label for="LeftArmDBP" class="form-label">LeftArmDBP</label>
            <input type="text" class="form-control" id="LeftArmDBP" placeholder="">
        </div>
        <div class="col-6">
            <label for="LeftArmSBP" class="form-label">LeftArmSBP</label>
            <input type="text" class="form-control" id="LeftArmSBP" placeholder="">
        </div>


    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="vitalDetails1()" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

