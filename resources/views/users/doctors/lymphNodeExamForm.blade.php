<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lymph Node Form</title>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<div class="container">
    <form  class="row g-3" style="line-break: anywhere;">
        <h3 style="text-align: center;">Lymph Nodes Form</h3>
        <div class="col-3">
            <label for="LymphNodesSummary" class="form-label">Lymph Nodes Summary</label>
            <input type="text" class="form-control" id="LymphNodesSummary" placeholder="">
        </div>
        <div class="col-3">
            <label for="GeneralisedLymphadenopathy" class="form-label">GeneralisedLymphadenopathy</label>
            <input type="text" class="form-control" id="GeneralisedLymphadenopathy" placeholder="">
        </div>

        <div class="col-3">
            <label for="CervicalLNPalpable" class="form-label">CervicalLNPalpable</label>
            <input type="text" class="form-control" id="CervicalLNPalpable" placeholder="">
        </div>
        <div class="col-3">
            <label for="Submental" class="form-label">Submental
            </label>
            <input type="text" class="form-control" id="Submental" placeholder="">
        </div>

        <div class="col-6">
            <label for="RightSubmandibular" class="form-label">Right Submandibular</label>
            <input type="text" class="form-control" id="RightSubmandibular" placeholder="">
        </div>
        <div class="col-6">
            <label for="LeftSubmandibular" class="form-label">Left Submandibular
            </label>
            <input type="text" class="form-control" id="LeftSubmandibular" placeholder="">
        </div>

        <div class="col-6">
            <label for="RightPreauricular" class="form-label">Right Preauricular
            </label>
            <input type="text" class="form-control" id="RightPreauricular" placeholder="">
        </div>
        <div class="col-6">
            <label for="LeftPreauricular" class="form-label">Left Preauricular
            </label>
            <input type="text" class="form-control" id="LeftPreauricular" placeholder="">
        </div>

        <div class="col-6">
            <label for="RightTonsillar" class="form-label">Right Tonsillar
            </label>
            <input type="text" class="form-control" id="RightTonsillar" placeholder="">
        </div>
        <div class="col-6">
            <label for="LeftTonsillar" class="form-label">Left Tonsillar
            </label>
            <input type="text" class="form-control" id="LeftTonsillar" placeholder="">
        </div>

        <div class="col-6">
            <label for="RightSupraclavicular" class="form-label">Right Supraclavicular
            </label>
            <input type="text" class="form-control" id="RightSupraclavicular" placeholder="">
        </div>
        <div class="col-6">
            <label for="LeftSupraclavicular" class="form-label">Left Supraclavicular
            </label>
            <input type="text" class="form-control" id="LeftSupraclavicular" placeholder="">
        </div>

        <div class="col-6">
            <label for="RightAnteriorCervical" class="form-label">Right Anterior Cervical
            </label>
            <input type="text" class="form-control" id="RightAnteriorCervical" placeholder="">
        </div>
        <div class="col-6">
            <label for="LeftAnteriorCervical" class="form-label">Left AnteriorCervical
            </label>
            <input type="text" class="form-control" id="LeftAnteriorCervical" placeholder="">
        </div>

        <div class="col-6">
            <label for="RightAnteriorCervical" class="form-label">Right Anterior Cervical
            </label>
            <input type="text" class="form-control" id="RightAnteriorCervical" placeholder="">
        </div>
        <div class="col-6">
            <label for="LeftAnteriorCervical" class="form-label">Left AnteriorCervical
            </label>
            <input type="text" class="form-control" id="LeftAnteriorCervical" placeholder="">
        </div>

        <div class="col-6">
            <label for="RightScaleneNode" class="form-label">Right Scalene Node
            </label>
            <input type="text" class="form-control" id="RightScaleneNode" placeholder="">
        </div>
        <div class="col-6">
            <label for="LeftScaleneNode" class="form-label">Left AnteriorCervical
            </label>
            <input type="text" class="form-control" id="LeftScaleneNode" placeholder="">
        </div>

        <div class="col-6">
            <label for="RightPosteriorCervical" class="form-label">Right Posterior Cervical
            </label>
            <input type="text" class="form-control" id="RightPosteriorCervical" placeholder="">
        </div>
        <div class="col-6">
            <label for="LeftPosteriorCervical" class="form-label">Left Posterior Cervical
            </label>
            <input type="text" class="form-control" id="LeftPosteriorCervical" placeholder="">
        </div>

        <div class="col-6">
            <label for="RightPostAuricular" class="form-label">Right Post Auricular
            </label>
            <input type="text" class="form-control" id="RightPostAuricular" placeholder="">
        </div>
        <div class="col-6">
            <label for="LeftPostAuricular" class="form-label">Left Post Auricular
            </label>
            <input type="text" class="form-control" id="LeftPostAuricular" placeholder="">
        </div>
        <div class="col-12">
        <div class="col-6">
            <label for="OccipitalLN" class="form-label">Occipital LN
            </label>
            <input type="text" class="form-control" id="OccipitalLN" placeholder="">
        </div></div>

        <div class="col-6">
            <label for="RightAxillaryLN" class="form-label">Right Axillary LN
            </label>
            <input type="text" class="form-control" id="RightAxillaryLN" placeholder="">
        </div>
        <div class="col-6">
            <label for="LeftAxillaryLN" class="form-label">Left Axillary LN
            </label>
            <input type="text" class="form-control" id="LeftAxillaryLN" placeholder="">
        </div>

        <div class="col-6">
            <label for="RightApicalAxillary" class="form-label">Right Apical Axillary
            </label>
            <input type="text" class="form-control" id="RightApicalAxillary" placeholder="">
        </div>
        <div class="col-6">
            <label for="LeftApicalAxillary" class="form-label">Left Apical Axillary
            </label>
            <input type="text" class="form-control" id="LeftApicalAxillary" placeholder="">
        </div>

        <div class="col-6">
            <label for="RightMedialAxillary" class="form-label">Right Medial Axillary
            </label>
            <input type="text" class="form-control" id="RightMedialAxillary" placeholder="">
        </div>
        <div class="col-6">
            <label for="LeftMedialAxillary" class="form-label">Left Medial Axillary
            </label>
            <input type="text" class="form-control" id="LeftMedialAxillary" placeholder="">
        </div>

        <div class="col-6">
            <label for="RightAnteriorAxillary" class="form-label">Right Anterior Axillary
            </label>
            <input type="text" class="form-control" id="RightAnteriorAxillary" placeholder="">
        </div>
        <div class="col-6">
            <label for="LeftAnteriorAxillary" class="form-label">Left Anterior Axillary
            </label>
            <input type="text" class="form-control" id="LeftAnteriorAxillary" placeholder="">
        </div>

        <div class="col-6">
            <label for="RightPosteriorAxillary" class="form-label">Right Posterior Axillary
            </label>
            <input type="text" class="form-control" id="RightPosteriorAxillary" placeholder="">
        </div>
        <div class="col-6">
            <label for="LeftPosteriorAxillary" class="form-label">Left Posterior Axillary
            </label>
            <input type="text" class="form-control" id="LeftPosteriorAxillary" placeholder="">
        </div>

        <div class="col-6">
            <label for="RightLateralAxillary" class="form-label">Right Lateral Axillary
            </label>
            <input type="text" class="form-control" id="RightLateralAxillary" placeholder="">
        </div>
        <div class="col-6">
            <label for="LeftLateralAxillary" class="form-label">Left Lateral Axillary
            </label>
            <input type="text" class="form-control" id="LeftLateralAxillary" placeholder="">
        </div>

        <div class="col-6">
            <label for="RightTrochlearLN" class="form-label">Right TrochlearLN
            </label>
            <input type="text" class="form-control" id="RightTrochlearLN" placeholder="">
        </div>
        <div class="col-6">
            <label for="LeftTrochlearLN" class="form-label">Left TrochlearLN
            </label>
            <input type="text" class="form-control" id="LeftTrochlearLN" placeholder="">
        </div>

        <div class="col-6">
            <label for="RightInguinalLN" class="form-label">Right InguinalLN
            </label>
            <input type="text" class="form-control" id="RightInguinalLN" placeholder="">
        </div>
        <div class="col-6">
            <label for="LeftInguinalLN" class="form-label">Left InguinalLN
            </label>
            <input type="text" class="form-control" id="LeftInguinalLN" placeholder="">
        </div>

        <div class="col-6">
            <label for="LymphNodesDetails" class="form-label">Lymph Nodes Details
            </label>
            <input type="text" class="form-control" id="LymphNodesDetails" placeholder="">
        </div>

        <div class="col-12 mb-5 mx-lg-auto" style="align-self: center;">
            <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
        </div>
    </form>
</div>
</body>
</html>
