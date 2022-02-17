<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Patient Record</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>


</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.doctors.headerdoc')
<h3 style="text-align: center;">ChapMediCare</h3>
<hr>
<div class="container">
    <form class="row g-3" method="post" action="{{route('insertPatientRecord')}}" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6" style="display:flex">
            <label for="cr" class="form-label">CR No  &nbsp &nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp &nbsp</label>
            <input id="cr" class="form-control w-50" value="{{isset($patients) ? $patients->cr_no : ''}}">

        </div>
        <div class="col-md-6" style="display:flex">
            <label for="dov" class="form-label">Date Of Visit  &nbsp &nbsp</label>
            <input id="dov" class="form-control w-50" value="{{\Carbon\Carbon::today()}}">

        </div>
        <div class="col-md-6" style="display:flex">
            <label for="pn" class="form-label">Patient Name &nbsp &nbsp</label>
            <input id="pn" class="form-control w-50" value="{{isset($patients) ? $patients->first_name : ''}}">

        </div>
        <div class="col-md-6" style="display:flex">
            <label for="age" class="form-label">Age &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp &nbsp</label>
            <input id="age" class="form-control w-50" value="{{isset($patients) ? $patients->age : ''}}">

        </div>
        <div class="col-md-6" style="display:flex">
            <label for="sex" class="form-label">Sex &nbsp &nbsp&nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp &nbsp</label>
            <input id="sex" class="form-control w-50" value="{{isset($patients) ? $patients->gender : ''}}">

        </div>
<hr>

        <div class="col-md-8" style="display:flex">
            <label for="ixd" class="form-label">Investigations Advised</label>
            <textarea name="invest" class="form-control ixd11" id="ixd">
{{isset($records) ? $records->ix_advised : ''}}
            </textarea>
        </div>
        <div class="col-md-6" style="display:flex">
            <label for="GeneralInstruction" class="form-label">General Instruction &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
            <textarea  name="gn" class="form-control GI" id="GeneralInstruction">
{{isset($records) ? $records->general_instruction : ''}},{{isset($records) ? $records->gi1 : ''}},{{isset($records) ? $records->gi2 : ''}}
            </textarea>
        </div>
{{--        <div class="col-md-8  " style="display:flex">--}}
{{--            <label for="notes" class="form-label">Notes &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp--}}
{{--                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>--}}
{{--            <textarea name="notes" class="form-control" id="notes"></textarea>--}}
{{--        </div>--}}

        <hr>
        <h3 style="text-align: center;">medicine </h3>

            <!--begin: Datatable -->
            <table  style="border: black">
                <thead>
                <tr>
                    <th>name</th>
                    <th>purpose</th>
                    <th>frequency</th>
                    <th>instructions</th>
                    <th>Unit Price</th>
                    <th>Duration</th>
                </tr>
                </thead>

                <tbody>
                @if(isset($records))
                    @foreach($records->medicine_record as $record)
                <tr>
                    <td>{{$record->RX1}}</td>
                    <td>{{$record->P1}}</td>
                    <td>{{$record->F1}}</td>
                    {{--                        <td><input type="text" class="rxd form-control" /></td>--}}
                    <td>{{$record->Inst1}}</td>
                    <td>{{$record->D1}}</td>
                    <td><input type="text" class="day30 form-control" /></td>
                    <td><input type="text" class="day7 form-control" /></td>
                    <td><input type="text" class="day30 form-control" /></td>
                    <td><input type="text" class="day7 form-control" /></td>
                    <td><input type="text" class="day30 form-control" /></td>
                    <td><input type="text" class="day30 form-control" /></td>
                </tr>
                    @endforeach
                @endif
                </tbody>
            </table>



        <div class="col-12 mb-5 mx-lg-auto" style="align-self: center;">
            <button type="submit" class="btn btn-success btn-lg" style="margin-left: 47%;">Submit</button>
        </div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            console.log("abc")
            $(".ixd11").change(function() {
                console.log("123")
                var air_id =  $(this).val();

                var a = $(this).parent();

                console.log("Its Change !");

                var op = "";

                $.ajax({
                    headers: { 'csrftoken' : '{{ csrf_token() }}' },
                    type: 'get',
                    url: '/findInvestigations/'+air_id,
                    dataType: 'json',      //return data will be json
                    success: function(data) {
                        // console.log("price");

                        console.log('ajax');
                        console.log(data);
                        var ixd= data.i1+','+data.i2+','+data.i3+','+data.i4+','+data.i5+','+data.i6+
                            ','+data.i7+','+data.i8+','+data.i9+','+data.i10+','+data.i11+','+data.i12
                            +','+data.i13+','+data.i14
                            +','+data.i15
                        console.log(ixd)
                        $('.ixadv11').val(ixd)

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
            $(".rx").change(function() {
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

                        $('.dx').val(data.dx_short)
                        $('.ixadv11').val(data.ix_protocol)

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
            $(".GI").change(function() {
                console.log("123")
                var air_id =  $(this).val();

                var a = $(this).parent();

                console.log("Its Change !");

                var op = "";

                $.ajax({
                    headers: { 'csrftoken' : '{{ csrf_token() }}' },
                    type: 'get',
                    url: '/findGeneralInstruction/'+air_id,
                    dataType: 'json',      //return data will be json
                    success: function(data) {
                        // console.log("price");

                        console.log('ajax');
                        console.log(data);
                        console.log(ixd)
                        $('.GI1').val(data.gi1)
                        $('.GI2').val(data.gi2)

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
            $(".drug").change(function() {
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
                        $('.purpose').val(data.purpose_id)
                        $('.frequency').val(data.frequency_id)
                        $('.duration').val(data.duration_id)
                        $('.specialInstructions').val(data.special_instruction_id)
                        $('.up').val(data.unit_price)
                        $('.item').val(data.unit_price)
                        $('.dur').val(data.duration_in_days)
                        $('.dai').val(data.daily_cost)
                        $('.day7').val(data.weekly_cost)
                        $('.day30').val(data.monthly_cost)

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
                        $('.up1').val(data.unit_price)
                        $('.item1').val(data.unit_price)
                        $('.dur1').val(data.duration_in_days)
                        $('.dai1').val(data.daily_cost)
                        $('.day71').val(data.weekly_cost)
                        $('.day301').val(data.monthly_cost)

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
                        $('.up2').val(data.unit_price)
                        $('.item2').val(data.unit_price)
                        $('.dur2').val(data.duration_in_days)
                        $('.dai2').val(data.daily_cost)
                        $('.day72').val(data.weekly_cost)
                        $('.day302').val(data.monthly_cost)

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
                        $('.up3').val(data.unit_price)
                        $('.item3').val(data.unit_price)
                        $('.dur3').val(data.duration_in_days)
                        $('.dai3').val(data.daily_cost)
                        $('.day73').val(data.weekly_cost)
                        $('.day303').val(data.monthly_cost)

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
                        $('.up4').val(data.unit_price)
                        $('.item4').val(data.unit_price)
                        $('.dur4').val(data.duration_in_days)
                        $('.dai4').val(data.daily_cost)
                        $('.day74').val(data.weekly_cost)
                        $('.day304').val(data.monthly_cost)

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
