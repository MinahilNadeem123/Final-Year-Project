<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">

    <title>Diagnosis Form</title>
</head>
<body  style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<div class="container">

    <form class="row g-3">



        <div class="col-md-12">
            <label for="DiagnosisTopic" class="form-label">Diagnosis Topic</label>
            <select class="form-select col-md-6" aria-label="Default select example" id="DiagnosisTopic">
                <option value="1">Malar Rash</option>
                <option value="2">Discoid Rash</option>
                <option value="3">Heliotrope Rash</option>
            </select>
        </div>


        <div class="input-group col-md-12">
            <div class="col-md-2" style="width: 100px;">Assessment</div>
            <textarea type="text" style="height:200px" class="form-control" placeholder=""></textarea>
           </div>

        <div class="input-group col-md-12">
            <div class="col-md-2" style="width: 100px;">History+Exam</div>
            <textarea type="text" style="height:200px" class="form-control" placeholder=""></textarea>
           </div>


        <div class="input-group col-md-12">
            <div class="col-md-2" style="width: 100px;">Examinaton</div>
            <textarea type="text" style="height:200px" class="form-control" placeholder=""></textarea>
           </div>


        <div class="input-group col-md-12">
            <div class="col-md-2" style="width: 100px;">Investigations</div>
            <textarea type="text" style="height:200px" class="form-control" placeholder=""></textarea>
           </div>


        <div class="input-group col-md-12">
            <div class="col-md-2" style="width: 100px;">Treatment</div>
            <textarea type="text" style="height:200px" class="form-control" placeholder=""></textarea>
           </div>


        <div class="input-group col-md-12">
            <div class="col-md-2" style="width: 100px;">Notes</div>
            <textarea type="text" style="height:200px" class="form-control" placeholder=""></textarea>
           </div>

        <div class="input-group col-md-12">
            <div  style="width: 100px;">URL1</div>
            <input  class="form-control" placeholder="">
        </div>
 <div class="input-group col-md-12">
            <div  style="width: 100px;">URL2</div>
            <input  class="form-control" placeholder="">
        </div>
 <div class="input-group col-md-12">
            <div  style="width: 100px;">URL3</div>
            <input  class="form-control" placeholder="">
        </div>
 <div class="input-group col-md-12">
            <div  style="width: 100px;">URL4</div>
            <input  class="form-control" placeholder="">
        </div>
 <div class="input-group col-md-12">
            <div  style="width: 100px;">URL5</div>
            <input  class="form-control" placeholder="">
        </div>
 <div class="input-group col-md-12">
            <div  style="width: 100px;">URL6</div>
            <input  class="form-control" placeholder="">
        </div>
 <div class="input-group col-md-12">
            <div  style="width: 100px;">URL7</div>
            <input  class="form-control" placeholder="">
        </div>
 <div class="input-group col-md-12">
            <div  style="width: 100px;">URL8</div>
            <input  class="form-control" placeholder="">
        </div>

        <div class="col-md-2" style="width: 300px;">
            <button id="AddNew" class="btn btn-success btn-secondary" type="button">
                Add New
            </button></div>

    </form>
</div>
</body>
</html>
