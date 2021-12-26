<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Vitals Form</title>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<div class="container">
    <form  class="row g-3">
        <h3 style="text-align: center;">Vitals Form</h3>
        <div class="col-6">
            <label for="PlusRate" class="form-label">Plus Rate bpm</label>
            <input type="text" class="form-control" id="PlusRate" placeholder="">
        </div>

        <div class="col-6">
            <label for="PluseRateRhythm" class="form-label">Pluse Rate Rhythm</label>
            <input type="text" class="form-control" id="PluseRateRhythm" placeholder="">
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
        <div class="col-md-3">
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
        <div>

            <div class="col-6" > <textarea style="width: 100%; height: 100px;"></textarea></div>
            <div class="col-12 mb-5 mx-lg-auto" style="align-self: center;">
                <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
