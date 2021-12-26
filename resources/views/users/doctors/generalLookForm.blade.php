<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>General Form</title>
</head>
<body style="background-color: rgb(224, 224, 224);">

@include('users.doctors.headerdoc')

<div class="container">
    <form  class="row g-3">
        <h3 style="text-align: center;">General Exam Form</h3>
        <div class="col-6">
            <label for="AgeDescription" class="form-label">Age Description</label>
            <input type="text" class="form-control" id="AgeDescription" placeholder="">
        </div>
        <div class="col-6" style="margin-top: 50px;">
            <input class="form-check-input" type="checkbox" value="" id="Young">
            <label class="form-check-label" for="Young">Young</label>&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="Middle">
            <label class="form-check-label" for="Middle">Middle aged</label>&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="Elderly">
            <label class="form-check-label" for="Elderly">Elderly</label>&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="Adolescent">
            <label class="form-check-label" for="Adolescent">Adolescent</label>&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="Child">
            <label class="form-check-label" for="Child">Child</label>&nbsp&nbsp&nbsp&nbsp
        </div>
        <div class="col-6">
            <label for="Physique" class="form-label">Physique</label>
            <input type="text" class="form-control" id="Physique" placeholder="">
        </div>
        <div class="col-6"style="margin-top: 50px;">
            <input class="form-check-input" type="checkbox" value="" id="With">
            <label class="form-check-label" for="With">With average Built</label>&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="Obese">
            <label class="form-check-label" for="Obese">Obese</label>&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="Morbidly">
            <label class="form-check-label" for="Morbidly">Morbidly</label>&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="Emaciated">
            <label class="form-check-label" for="Emaciated">Emaciated</label>&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="Empty2">
            <label class="form-check-label" for="Empty2">Empty</label>&nbsp&nbsp&nbsp&nbsp
        </div>
        <div class="col-6">
            <label for="Posture" class="form-label">Posture</label>
            <input type="text" class="form-control" id="Posture" placeholder="">
        </div>
        <div class="col-6"style="margin-top: 50px;">
            <input class="form-check-input" type="checkbox" value="" id="Sitting">
            <label class="form-check-label" for="Sitting">Sitting</label>&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="Lyingoncouch">
            <label class="form-check-label" for="Lyingoncouch">Lying on couch</label>&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="Sittingin">
            <label class="form-check-label" for="Sittingin">Sitting in wheelchair</label>&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="lyingno">
            <label class="form-check-label" for="lyingno">lying no Stretcher</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="Empty3">
            <label class="form-check-label" for="Empty3">Empty</label>&nbsp&nbsp&nbsp&nbsp
        </div>
        <div class="col-6">
            <label for="Physique" class="form-label">Comfort</label>
            <input type="text" class="form-control" id="Comfort" placeholder="">
        </div>
        <div class="col-6"style="margin-top: 50px;">
            <input class="form-check-input" type="checkbox" value="" id="Comfortable">
            <label class="form-check-label" for="Comfortable">Comfortable</label>&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="Irritable">
            <label class="form-check-label" for="Irritable">Irritable</label>&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="Confused">
            <label class="form-check-label" for="Confused">Confused</label>&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="Unconscious">
            <label class="form-check-label" for="Unconscious">Unconscious</label>&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="Empty4">
            <label class="form-check-label" for="Empty4">Empty</label>&nbsp&nbsp&nbsp&nbsp
        </div>
        <div class="col-6">
            <label for="Demeanor" class="form-label">Demeanor</label>
            <input type="text" class="form-control" id="Demeanor" placeholder="">
        </div>
        <div class="col-6"style="margin-top: 50px;">
            <input class="form-check-input" type="checkbox" value="" id="1">
            <label class="form-check-label" for="1">1</label>&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="2">
            <label class="form-check-label" for="2">2</label>&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="3">
            <label class="form-check-label" for="3">3</label>&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="4">
            <label class="form-check-label" for="4">4</label>&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="5">
            <label class="form-check-label" for="5">5</label>&nbsp&nbsp&nbsp&nbsp
        </div>
        <div class="col-6">
            <label for="OtherLine" class="form-label">OtherLine</label>
            <input type="text" class="form-control" id="OtherLine" placeholder="">
        </div>
        <div class="col-6"style="margin-top: 50px;">
            <input class="form-check-input" type="checkbox" value="" id="Central">
            <label class="form-check-label" for="Central">Central Venous Catheter</label>&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="Double">
            <label class="form-check-label" for="Double">Double Lumen Catheter</label>&nbsp&nbsp&nbsp&nbsp&nbsp<br>
            <input class="form-check-input" type="checkbox" value="" id="Hemodilysis">
            <label class="form-check-label" for="Hemodilysis">Hemodilysis Catheter</label>&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="4">
            <label class="form-check-label" for="4">4</label>&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="5">
            <label class="form-check-label" for="5">5</label>&nbsp&nbsp&nbsp&nbsp
        </div>
        <div class="col-6">
            <label for="OtherLineSites" class="form-label">OtherLineSites</label>
            <input type="text" class="form-control" id="OtherLineSites" placeholder="">
        </div>
        <div class="col-6"style="margin-top: 50px;">
            <input class="form-check-input" type="checkbox" value="" id="RightInternal">
            <label class="form-check-label" for="RightInternal">Right Internal Jugular</label>&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="LeftInternal">
            <label class="form-check-label" for="LeftInternal">Left Internal Jugular</label>&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="RightSubclavian">
            <label class="form-check-label" for="RightSubclavian">Right Subclavian</label><br>
            <input class="form-check-input" type="checkbox" value="" id="LeftSubclavian">
            <label class="form-check-label" for="LeftSubclavian">Left Subclavian</label>&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="RightFemoral">
            <label class="form-check-label" for="RightFemoral">Right Femoral</label>&nbsp&nbsp&nbsp&nbsp
            <input type="checkbox" class="form-check-input" id="leftFemoral" placeholder="">
            <label for="leftFemoral" class="form-label">left Femoral</label>
        </div>

        <div>
            <div class="col-6" >
                <label for="AVFistula"  class="form-label">AV Fistula Present</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input class="form-check-input" type="checkbox" value="" id="OnRightarm">
            </div>
        </div>
        <div class="col-6">
            <label for="AVFistula" class="form-label">AV Fistula site</label>
            <input type="text" class="form-control" id="AVFistula" placeholder="">
        </div>
        <div class="col-6"style="margin-top: 50px;">
            <input class="form-check-input" type="checkbox" value="" id="OnRightarm">
            <label class="form-check-label" for="OnRightarm">On Right arm</label>&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="OnLeftarm">
            <label class="form-check-label" for="OnLeftarm">On Left arm </label>&nbsp&nbsp&nbsp&nbsp
        </div>
        <div>


            <div class="col-6">
                <label for="NGinPlace" class="form-label">NG in Place</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="checkbox" class="form-check-input" id="NGinPlace" placeholder="">
            </div>
        </div>
        <div class="col-6">
            <label for="NGBagsContents" class="form-label">NG Bags Contents</label>
            <input type="text" class="form-control" id="NGBagsContents" placeholder="">
        </div>
        <div class="col-6"style="margin-top: 50px;">
            <input class="form-check-input" type="checkbox" value="" id="Clear">
            <label class="form-check-label" for="Clear">Clear</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="Yellow">
            <label class="form-check-label" for="Yellow">Yellow </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="Greenish">
            <label class="form-check-label" for="Greenish">Greenish</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="Brown">
            <label class="form-check-label" for="Brown">Brown </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="Coffeeground">
            <label class="form-check-label" for="Coffeeground">Coffee ground </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="BrightRed">
            <label class="form-check-label" for="BrightRed">Bright Red </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        </div>
        <div>
            <div class="col-6">
                <label for="FoleysinPlace" class="form-label">Foleys in Place</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="checkbox" class="form-check-input" id="FoleysinPlace" placeholder="">
            </div>
        </div>

        <div class="col-6">
            <label for="Urinecolor" class="form-label">Urine color</label>
            <input type="text" class="form-control" id="Urinecolor" placeholder="">
        </div>
        <div class="col-6"style="margin-top: 50px;">
            <input class="form-check-input" type="checkbox" value="" id="urinTransparent">
            <label class="form-check-label" for="urinTransparent">Transparent</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="urinYellow">
            <label class="form-check-label" for="urinYellow">Pale Yellow </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="urindark">
            <label class="form-check-label" for="urindark">Dark Yellow</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="urinorange">
            <label class="form-check-label" for="urinorange">Orange</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="urinbrown">
            <label class="form-check-label" for="urinbrown">Brown </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="urinred">
            <label class="form-check-label" for="urinred">Red </label>
            <input class="form-check-input" type="checkbox" value="" id="urinblack">
            <label class="form-check-label" for="urinblack">Black</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="urinblue">
            <label class="form-check-label" for="urinblue">Blue</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="uringreen">
            <label class="form-check-label" for="uringreen">Green</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="urinBrown">
            <label class="form-check-label" for="urinBrown">Purple</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="urinWhite">
            <label class="form-check-label" for="urinWhite">White</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        </div>
        <div>
            <div class="col-6">
                <label for="UrineVolinBag" class="form-label">Urine Vol in Bag</label>
                <input type="text" class="form-control" id="UrineVolinBag" placeholder="">
            </div>
        </div>
        <div class="col-6">
            <label for="SputumDetails" class="form-label">Sputum Details</label>
            <input type="text" class="form-control" id="SputumDetails" placeholder="">
        </div>
        <div class="col-6"style="margin-top: 50px;">
            <input class="form-check-input" type="checkbox" value="" id="Whitish">
            <label class="form-check-label" for="Whitish">Whitish</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="Yellowish">
            <label class="form-check-label" for="Yellowish">Yellowish </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="urindark">
            <label class="form-check-label" for="spGreenish">Greenish</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="Browniah">
            <label class="form-check-label" for="Browniah">Browniah</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="Blackish">
            <label class="form-check-label" for="Blackish">Blackish</label><br>
            <input class="form-check-input" type="checkbox" value="" id="StreaksofBlood">
            <label class="form-check-label" for="StreaksofBlood">Streaks of Blood</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="Frankblood">
            <label class="form-check-label" for="Frankblood">Frank blood</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        </div>
        <div class="col-6" > <textarea style="width: 100%; height: 300px;"></textarea></div>
        <div class="col-12 mb-5 mx-lg-auto" style="align-self: center;">
            <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
        </div>
    </form>
</div>
</body>
</html>
