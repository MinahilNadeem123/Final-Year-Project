<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Treatment Record</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<h3 style="text-align: center;">Treatment Protocols</h3>
<hr>
<div class="container">
    <form class="row g-3" action="{{route('insertProtocol')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">
        <div class="col-md-6">
            <label for="inputState" class="form-label"></label>
            <select id="inputState" class="dx_short1 form-select">
                <option selected>Choose...</option>
                @foreach($protocols as $protocol)
                    <option value="{{$protocol->dx_short}}">{{$protocol->dx_short}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="of" class="form-label"></label>
            <input type="text" class="diagnosis1 form-control" id="of">

        </div>
        <div class="col-md-6">
            <label for="dxdhort" class="form-label">DX Short</label>
            <input type="text" class="dx_short2 form-control" name="dx_short2" id="dxshort">
        </div>

        <div class="col-md-6">
            <label for="tblprotocoldiagnosis" class="form-label">tbl Protocol Diagnosis</label>
            <input type="text" class="diagnosis2 form-control" name="diagnosis2" id="tblprotocoldiagnosis">

        </div>
        <div class="col-md-6 ">
            <label for="gi1" class="form-label">GI 1</label>
            <input type="text" class="gi1 form-control" name="gi_protocol_11" id="gi1">
        </div>

        <div class="col-md-6 ">
            <label for="gi2" class="form-label">GI 2</label>
            <input type="text" class="gi2 form-control" name="gi_protocol_21" id="gi2">
        </div>

        <div class="col-md-6 " >
            <label for="investigationsadvised" class="form-label">Investigations Advised</label>
            <textarea  class="ixd form-control" name="ix_protocol1" id="investigationsadvised" style="height:300px"></textarea>
        </div>

{{--        <div class="col-md-6 " >--}}
{{--            <label for="dxnotes" class="form-label">DX notes</label>--}}
{{--            <textarea  class="form-control" id="dxnotes" style="height:300px"></textarea>--}}
{{--        </div>--}}

        <hr>
        <h3 style="text-align: center;">Rx 1</h3>
        <div class="col-md-2">
            <label for="rx1" class="form-label">Name</label>
            <select  class="drug1 form-select" name="rx11" id="rx1">
                <option>choose...</option>
                @foreach($drugs as $drug)
                    <option value="{{$drug->prescription_name}}"> {{$drug->prescription_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label for="purpose1" class="form-label">Purpose
                <input type="text"  class="purpose1  form-control" name="purpose11" id="purpose1"></label>
        </div>
        <div class="col-md-2">
            <label for="frequency1" class="form-label">Frequency
                <input type="text" name="frequency11" class="frequency1 form-control" id="frequency1"></label>
        </div>
        <div class="col-md-2">
            <label for="SpecialInstructions1" class="form-label">Special Instructions
                <input type="text" name="instructions11" class="specialInstructions1 form-control" id="SpecialInstructions1"></label>
        </div>
        <div class="col-md-2">
            <label for="duration1" class="form-label">duration
                <input type="text" name="duration11" class="duration1 form-control" id="duration1"></label>
        </div>
        <div class="col-md-2">
            <label for="notes" class="form-label">notes
                <input type="text" name="notes11" class="notes1 form-control" id="notes"></label>
        </div>
        <div class="col-md-2">
            <label for="unitPrice" class="form-label">Unit Price
                <input type="text" name="unit_price11" class="unitPrice1 form-control" id="unitPrice"></label>
        </div>

        <hr>
        <h3 style="text-align: center;">Rx 2</h3>
        <div class="col-md-2">
            <label for="name1" class="form-label">Name</label>
            <select  class="drug2 form-select" name="rx21" id="name1">
                <option>choose...</option>
                @foreach($drugs as $drug)
                    <option value="{{$drug->prescription_name}}"> {{$drug->prescription_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label for="purpose1" class="form-label">Purpose
                <input type="text" name="purpose21" class="purpose2 form-control" id="purpose1"></label>
        </div>
        <div class="col-md-2">
            <label for="frequency1" class="form-label">Frequency
                <input type="text" name="frequency21" class="frequency2 form-control" id="frequency1"></label>
        </div>
        <div class="col-md-2">
            <label for="SpecialInstructions1" class="form-label">Special Instructions
                <input type="text" name="instructions21" class="specialInstructions2 form-control" id="SpecialInstructions1"></label>
        </div>
        <div class="col-md-2">
            <label for="duration1" class="form-label">duration
                <input type="text" name="duration21" class="duration2 form-control" id="duration1"></label>
        </div>
        <div class="col-md-2">
            <label for="notes" class="form-label">notes
                <input type="text" name="notes21" class="notes2 form-control" id="notes"></label>
        </div>
        <div class="col-md-2">
            <label for="unitPrice" class="form-label">Unit Price
                <input type="text" name="unit_price21" class="unitPrice2 form-control" id="unitPrice"></label>
        </div>

        <hr>
        <h3 style="text-align: center;">Rx 3</h3>
        <div class="col-md-2">
            <label for="name1" class="form-label">Name</label>
            <select  name="rx31"  class="drug3 form-select" id="name1">
                <option>choose...</option>
                @foreach($drugs as $drug)
                    <option value="{{$drug->prescription_name}}"> {{$drug->prescription_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label for="purpose1" class="form-label">Purpose
                <input type="text" name="purpose31" class="purpose3 form-control" id="purpose1"></label>
        </div>
        <div class="col-md-2">
            <label for="frequency1" class="form-label">Frequency
                <input type="text" name="frequency31" class="frequency3 form-control" id="frequency1"></label>
        </div>
        <div class="col-md-2">
            <label for="SpecialInstructions1" class="form-label">Special Instructions
                <input type="text" name="instructions31" class="specialInstructions3 form-control" id="SpecialInstructions1"></label>
        </div>
        <div class="col-md-2">
            <label for="duration1" class="form-label">duration
                <input type="text" name="duration31" class="duration3 form-control" id="duration1"></label>
        </div>
        <div class="col-md-2">
            <label for="notes" class="form-label">notes
                <input type="text" name="notes31" class="notes3 form-control" id="notes"></label>
        </div>
        <div class="col-md-2">
            <label for="unitPrice" class="form-label">Unit Price
                <input type="text" name="unit_price31" class="unitPrice3 form-control" id="unitPrice"></label>
        </div>

        <hr>
        <h3 style="text-align: center;">Rx 4</h3>
        <div class="col-md-2">
            <label for="name1" class="form-label">Name</label>
            <select name="rx41" class="drug4 form-select" id="name1">
                <option>choose...</option>
                @foreach($drugs as $drug)
                    <option value="{{$drug->prescription_name}}"> {{$drug->prescription_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label for="purpose1" class="form-label">Purpose
                <input type="text" name="purpose41" class="purpose4 form-control" id="purpose1"></label>
        </div>
        <div class="col-md-2">
            <label for="frequency1" class="form-label">Frequency
                <input type="text" name="frequency41" class="frequency4 form-control" id="frequency1"></label>
        </div>
        <div class="col-md-2">
            <label for="SpecialInstructions1" class="form-label">Special Instructions
                <input type="text" name="instructions41" class="specialInstructions4 form-control" id="SpecialInstructions1"></label>
        </div>
        <div class="col-md-2">
            <label for="duration1" class="form-label">duration
                <input type="text" name="duration41" class="duration4 form-control" id="duration1"></label>
        </div>
        <div class="col-md-2">
            <label for="notes" class="form-label">notes
                <input type="text" name="notes41" class="notes4 form-control" id="notes"></label>
        </div>
        <div class="col-md-2">
            <label for="unitPrice" class="form-label">Unit Price
                <input type="text" name="unit_price41" class="unitPrice4 form-control" id="unitPrice"></label>
        </div>

        <hr>
        <h3 style="text-align: center;">Rx 5</h3>
        <div class="col-md-2">
            <label for="name1" class="form-label">Name</label>
            <select  name="rx51" class="drug5 form-select" id="name1">
                <option>choose...</option>
                @foreach($drugs as $drug)
                    <option value="{{$drug->prescription_name}}"> {{$drug->prescription_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label for="purpose1" class="form-label">Purpose
                <input type="text" name="purpose51" class="purpose5 form-control" id="purpose1"></label>
        </div>
        <div class="col-md-2">
            <label for="frequency1" class="form-label">Frequency
                <input type="text" name="frequency51" class="frequency5 form-control" id="frequency1"></label>
        </div>
        <div class="col-md-2">
            <label for="SpecialInstructions1" class="form-label">Special Instructions
                <input type="text" name="instructions51" class="specialInstructions5 form-control" id="SpecialInstructions1"></label>
        </div>
        <div class="col-md-2">
            <label for="duration1" class="form-label">duration
                <input type="text" name="duration51" class="duration5 form-control" id="duration1"></label>
        </div>
        <div class="col-md-2">
            <label for="notes" class="form-label">notes
                <input type="text" name="notes51" class="notes5 form-control" id="notes"></label>
        </div>
        <div class="col-md-2">
            <label for="unitPrice" class="form-label">Unit Price
                <input type="text" name="unit_price51" class="unitPrice5 form-control" id="unitPrice"></label>
        </div>

        <div class="col-12 mb-5 mx-lg-auto" style="align-self: center;">
            <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
        </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            console.log("abc")
            $(".drug1").change(function() {
                console.log("123")
                var air_id =  $(this).val();

                var a = $(this).parent();

                console.log("Its Change !");

                var op = "";

                $.ajax({
                    headers: { 'csrftoken' : '{{ csrf_token() }}' },
                    type: 'get',
                    url: '/findDrugs/'+air_id,
                    dataType: 'json',      //return data will be json
                    success: function(data) {
                        // console.log("price");

                        console.log('ajax');
                        console.log(data);
                        $('.purpose1').val(data.purpose_id)
                        $('.frequency1').val(data.frequency_id)
                        $('.duration1').val(data.duration_id)
                        $('.specialInstructions1').val(data.special_instruction_id)
                        $('.unitPrice1').val(data.unit_price)
                        $('.notes1').val(data.notes)


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
    <script type="text/javascript">
        $(document).ready(function() {
            console.log("abc")
            $(".drug2").change(function() {
                console.log("123")
                var air_id =  $(this).val();

                var a = $(this).parent();

                console.log("Its Change !");

                var op = "";

                $.ajax({
                    headers: { 'csrftoken' : '{{ csrf_token() }}' },
                    type: 'get',
                    url: '/findDrugs/'+air_id,
                    dataType: 'json',      //return data will be json
                    success: function(data) {
                        // console.log("price");

                        console.log('ajax');
                        console.log(data);
                        $('.purpose2').val(data.purpose_id)
                        $('.frequency2').val(data.frequency_id)
                        $('.duration2').val(data.duration_id)
                        $('.specialInstructions2').val(data.special_instruction_id)
                        $('.unitPrice2').val(data.unit_price)
                        $('.notes2').val(data.notes)


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
    <script type="text/javascript">
        $(document).ready(function() {
            console.log("abc")
            $(".drug3").change(function() {
                console.log("123")
                var air_id =  $(this).val();

                var a = $(this).parent();

                console.log("Its Change !");

                var op = "";

                $.ajax({
                    headers: { 'csrftoken' : '{{ csrf_token() }}' },
                    type: 'get',
                    url: '/findDrugs/'+air_id,
                    dataType: 'json',      //return data will be json
                    success: function(data) {
                        // console.log("price");

                        console.log('ajax');
                        console.log(data);
                        $('.purpose3').val(data.purpose_id)
                        $('.frequency3').val(data.frequency_id)
                        $('.duration3').val(data.duration_id)
                        $('.specialInstructions3').val(data.special_instruction_id)
                        $('.unitPrice3').val(data.unit_price)
                        $('.notes3').val(data.notes)


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

    <script type="text/javascript">
        $(document).ready(function() {
            console.log("abc")
            $(".drug4").change(function() {
                console.log("123")
                var air_id =  $(this).val();

                var a = $(this).parent();

                console.log("Its Change !");

                var op = "";

                $.ajax({
                    headers: { 'csrftoken' : '{{ csrf_token() }}' },
                    type: 'get',
                    url: '/findDrugs/'+air_id,
                    dataType: 'json',      //return data will be json
                    success: function(data) {
                        // console.log("price");

                        console.log('ajax');
                        console.log(data);
                        $('.purpose4').val(data.purpose_id)
                        $('.frequency4').val(data.frequency_id)
                        $('.duration4').val(data.duration_id)
                        $('.specialInstructions4').val(data.special_instruction_id)
                        $('.unitPrice4').val(data.unit_price)
                        $('.notes4').val(data.notes)


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

    <script type="text/javascript">
        $(document).ready(function() {
            console.log("abc")
            $(".drug5").change(function() {
                console.log("123")
                var air_id =  $(this).val();

                var a = $(this).parent();

                console.log("Its Change !");

                var op = "";

                $.ajax({
                    headers: { 'csrftoken' : '{{ csrf_token() }}' },
                    type: 'get',
                    url: '/findDrugs/'+air_id,
                    dataType: 'json',      //return data will be json
                    success: function(data) {
                        // console.log("price");

                        console.log('ajax');
                        console.log(data);
                        $('.purpose5').val(data.purpose_id)
                        $('.frequency5').val(data.frequency_id)
                        $('.duration5').val(data.duration_id)
                        $('.specialInstructions5').val(data.special_instruction_id)
                        $('.unitPrice5').val(data.unit_price)
                        $('.notes5').val(data.notes)


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

    <script type="text/javascript">
        $(document).ready(function() {
            console.log("abc")
            $(".dx_short1").change(function() {
                console.log("123")
                var air_id =  $(this).val();

                var a = $(this).parent();

                console.log("Its Change !");

                var op = "";

                $.ajax({
                    headers: { 'csrftoken' : '{{ csrf_token() }}' },
                    type: 'get',
                    url: '/findProtocols/'+air_id,
                    dataType: 'json',      //return data will be json
                    success: function(data) {
                        // console.log("price");

                        console.log('ajax');
                        console.log(data);
                        $('.diagnosis1').val(data.diagnosist)
                        $('.dx_short2').val(data.dx_short)
                        $('.diagnosis2').val(data.diagnosist)
                        $('.unitPrice5').val(data.unit_price)
                        $('.gi1').val(data.gi_protocol_1)
                        $('.gi2').val(data.gi_protocol_2)
                        $('.ixd').val(data.ix_protocol)
                        $('.drug1').val(data.rx1)
                        $('.purpose1').val(data.purpose1)
                        $('.frequency1').val(data.frequency1)
                        $('.duration1').val(data.duration1)
                        $('.specialInstructions1').val(data.instructions1)
                        $('.unitPrice1').val(data.unit_price1)
                        $('.notes1').val(data.notes1)
                        $('.drug2').val(data.rx2)
                        $('.purpose2').val(data.purpose2)
                        $('.frequency2').val(data.frequency2)
                        $('.duration2').val(data.duration2)
                        $('.specialInstructions2').val(data.instructions2)
                        $('.unitPrice2').val(data.unit_price2)
                        $('.notes2').val(data.notes2)

                        $('.drug3').val(data.rx3)
                        $('.purpose3').val(data.purpose3)
                        $('.frequency3').val(data.frequency3)
                        $('.duration3').val(data.duration3)
                        $('.specialInstructions3').val(data.instructions3)
                        $('.unitPrice3').val(data.unit_price3)
                        $('.notes3').val(data.notes3)

                        $('.drug4').val(data.rx4)
                        $('.purpose4').val(data.purpose4)
                        $('.frequency4').val(data.frequency4)
                        $('.duration4').val(data.duration4)
                        $('.specialInstructions4').val(data.instructions4)
                        $('.unitPrice4').val(data.unit_price4)
                        $('.notes4').val(data.notes4)

                        $('.drug5').val(data.rx5)
                        $('.purpose5').val(data.purpose5)
                        $('.frequency5').val(data.frequency5)
                        $('.duration5').val(data.duration5)
                        $('.specialInstructions5').val(data.instructions5)
                        $('.unitPrice5').val(data.unit_price5)
                        $('.notes5').val(data.notes5)


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
