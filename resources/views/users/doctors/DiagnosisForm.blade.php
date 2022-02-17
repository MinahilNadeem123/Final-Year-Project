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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
</head>
<body  style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<div class="container">

    <form class="row g-3" method="post" enctype="multipart/form-data"
          action="{{route('insertDiagnosis')}}">

@csrf

        <div class="col-md-6">
            <label for="DiagnosisTopic" class="form-label">Diagnosis Topic</label>
            <select class="diagnosisTopic form-select " aria-label="Default select example" id="DiagnosisTopic">
                @foreach($diagnosis as $diagnose)
                <option value="{{$diagnose->diagnosis_name}}">{{$diagnose->diagnosis_name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-6">
            <label for="diagnosis" class="form-label">Diagnosis Name</label>
            <input type="text" name="diagnosis1" id="diagnosis" class="diagnosis form-control">
        </div>


        <div class="input-group col-md-12">
            <div class="col-md-2" style="width: 100px;">Assessment</div>
            <textarea type="text" name="assessment1" style="height:200px" class="assessment form-control" placeholder=""></textarea>
           </div>

        <div class="input-group col-md-12">
            <div class="col-md-2" style="width: 100px;">History+Exam</div>
            <textarea type="text" name="historyexam1" style="height:200px" class="history_exam form-control" placeholder=""></textarea>
           </div>


        <div class="input-group col-md-12">
            <div class="col-md-2" style="width: 100px;">Examination</div>
            <textarea type="text" name="examination1" style="height:200px" class="examination form-control" placeholder=""></textarea>
           </div>


        <div class="input-group col-md-12">
            <div class="col-md-2" style="width: 100px;">Investigations</div>
            <textarea type="text" name="investigation1" style="height:200px" class="investigation form-control" placeholder=""></textarea>
           </div>


        <div class="input-group col-md-12">
            <div class="col-md-2" style="width: 100px;">Treatment</div>
            <textarea type="text" name="treatment1" style="height:200px" class="treatment form-control" placeholder=""></textarea>
           </div>


        <div class="input-group col-md-12">
            <div class="col-md-2" style="width: 100px;">Notes</div>
            <textarea type="text" name="notes1" style="height:200px" class="notes form-control" placeholder=""></textarea>
           </div>

        <div class="input-group col-md-12">
            <div  style="width: 100px;">URL1</div>
            <input  name="url_1" class="url1 form-control" placeholder="">
        </div>
 <div class="input-group col-md-12">
            <div  style="width: 100px;">URL2</div>
            <input  name="url_2" class="url2 form-control" placeholder="">
        </div>
 <div class="input-group col-md-12">
            <div  style="width: 100px;">URL3</div>
            <input  name="url_3" class="url3 form-control" placeholder="">
        </div>
 <div class="input-group col-md-12">
            <div  style="width: 100px;">URL4</div>
            <input name="url_4" class="url4 form-control" placeholder="">
        </div>
 <div class="input-group col-md-12">
            <div  style="width: 100px;">URL5</div>
            <input name="url_5" class="url5 form-control" placeholder="">
        </div>
 <div class="input-group col-md-12">
            <div  style="width: 100px;">URL6</div>
            <input  name="url_6" class="url6 form-control" placeholder="">
        </div>
 <div class="input-group col-md-12">
            <div  style="width: 100px;">URL7</div>
            <input name="url_7" class="url7 form-control" placeholder="">
        </div>
 <div class="input-group col-md-12">
            <div  style="width: 100px;">URL8</div>
            <input name="url_8"  class="url8 form-control" placeholder="">
        </div>

        <div class="col-12 mb-5 mx-lg-auto" style="align-self: center;">
            <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
        </div>

    </form>

    <script type="text/javascript">
        $(document).ready(function() {
            console.log("abc")
            $(".diagnosisTopic").change(function() {
                console.log("123")
                var air_id =  $(this).val();

                var a = $(this).parent();

                console.log("Its Change !");

                var op = "";

                $.ajax({
                    headers: { 'csrftoken' : '{{ csrf_token() }}' },
                    type: 'get',
                    url: '/findDiagnosis/'+air_id,
                    dataType: 'json',      //return data will be json
                    success: function(data) {
                        // console.log("price");

                        console.log('ajax');
                        console.log(data);
                        $('.diagnosis').val(data.diagnosis_name)
                        $('.assessment').val(data.assessment)
                        $('.history_exam').val(data.historyexam)
                        $('.examination').val(data.examination)
                        $('.investigation').val(data.investigations)
                        $('.treatment').val(data.treatment)
                        $('.notes').val(data.notes)
                        $('.url1').val(data.url1)
                        $('.url2').val(data.url2)
                        $('.url3').val(data.url3)
                        $('.url4').val(data.url4)
                        $('.url5').val(data.url5)
                        $('.url6').val(data.url6)
                        $('.url7').val(data.url7)
                        $('.url8').val(data.url8)

                        //
                        // a.find('.ixadv11').val(data.id);
                        // do you want to display id or registration name?
                    },
                    error:function(){

                    }
                });
            });
        });
    </script>
</div>
</body>
</html>
