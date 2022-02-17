@extends('users.admin.layouts.master')
@section('content')
    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <!-- begin:: Content Head -->
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">

                    <h3 class="kt-subheader__title">Admin Dashboard</h3>

                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                    <span class="kt-subheader__desc"></span>
                </div>
                <div class="kt-subheader__toolbar">
                    <div class="kt-subheader__wrapper">

                        <div class="dropdown dropdown-inline" data-toggle-="kt-tooltip" title="Quick actions"
                             data-placement="left">
                            <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">

                            </a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end:: Content Head -->

        <!-- begin:: Content Container-->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
           <!-- Content goes here...-->
            <div >
            <a href="{{route('doctors.index')}}" style="height:125px; width:300px;background-color:rgb(231, 236, 236);color:black" class="btn  btn-lg btn-font-lg " role="button" aria-pressed="true"class="btn btn-info btn-lg btn-font-lg " role="button" aria-pressed="true">
                <i  style="margin-top: 30px"  class="fa fa-user-md  fa-3x "></i><br><br><h4>Doctor</h4></a>
            &nbsp &nbsp &nbsp
{{--            <a href="{{route('patients.index')}}" style="height:125px; width:300px;background-color:rgb(231, 236, 236);color:black" class="btn  btn-lg btn-font-lg " role="button" aria-pressed="true" class="btn  btn-info btn-lg btn-font-lg " role="button" aria-pressed="true">--}}
{{--                <i  style="margin-top: 30px"  class="fa fa-procedures  fa-3x "></i><br><br><h4>Patient</h4></a>--}}
            <a href="{{route('nurses.index')}}" style="height:125px; width:300px;background-color:rgb(231, 236, 236);color:black" class="btn  btn-lg btn-font-lg " role="button" aria-pressed="true" class="btn  btn-info btn-lg btn-font-lg " role="button" aria-pressed="true">
                <i style="margin-top: 30px"  class="fa fa-user-nurse fa-3x  "></i><br><br><h4>Nurse</h4></a>
             &nbsp &nbsp &nbsp
            <a href="{{route('pharmacists.index')}}" style="height:125px; width:300px;background-color:rgb(231, 236, 236);color:black" class="btn  btn-lg btn-font-lg " role="button" aria-pressed="true" class="btn btn-info btn-lg btn-font-lg " role="button" aria-pressed="true">
                <i style="margin-top: 30px"  class="fa fa-prescription-bottle-alt fa-3x  "></i><br><br><h4>Pharmacy</h4></a>
            &nbsp &nbsp &nbsp<br><br>
            <a href="{{route('laboratorists.index')}}" style="height:125px; width:300px;background-color:rgb(231, 236, 236);color:black" class="btn  btn-lg btn-font-lg " role="button" aria-pressed="true" class="btn btn-info btn-lg btn-font-lg " role="button" aria-pressed="true">
                <i style="margin-top: 30px"  class="fa fa-vials fa-3x "></i><br><br><h4>Laboratorist</h4></a>
            &nbsp &nbsp &nbsp
            <a href="{{route('accountants.create')}}" style="height:125px; width:300px;background-color:rgb(231, 236, 236);color:black" class="btn  btn-lg btn-font-lg " role="button" aria-pressed="true" class="btn btn-info btn-lg btn-font-lg " role="button" aria-pressed="true">
                <i style="margin-top: 30px"  class="far fa-money-bill-alt fa-3x "></i><br><br><h4>Accountant</h4></a>
            &nbsp &nbsp &nbsp
            <a href="{{route('appointments.index')}}" style="height:125px; width:300px;background-color:rgb(231, 236, 236);color:black" class="btn  btn-lg btn-font-lg " role="button" aria-pressed="true" class="btn btn-info btn-lg btn-font-lg " role="button" aria-pressed="true">
                <i style="margin-top: 30px"  class="fa fa-calendar-check fa-3x "></i><br><br><h4>Appointments</h4></a>
            &nbsp &nbsp &nbsp<br><br>
            <a href="{{route('payments.index')}}" style="height:125px; width:300px;background-color:rgb(231, 236, 236);color:black" class="btn  btn-lg btn-font-lg " role="button" aria-pressed="true" class="btn btn-info btn-lg btn-font-lg " role="button" aria-pressed="true">
                <i  style="margin-top: 30px" class="fa fa-credit-card fa-3x "></i><br><br><h4>Payment</h4></a>
            &nbsp &nbsp &nbsp
            <a href="{{route('bedallotments.index')}}" style="height:125px; width:300px;background-color:rgb(231, 236, 236);color:black" class="btn  btn-lg btn-font-lg " role="button" aria-pressed="true" class="btn btn-info btn-lg btn-font-lg " role="button" aria-pressed="true">
                <i style="margin-top: 30px"  class="fa fa-bed fa-3x "></i><br><br><h4>Bed Allotment</h4></a>
            &nbsp &nbsp &nbsp
        </div>
        </div>
        <!-- end:: Content Container-->
    </div>
    <!-- begin:: Content -->
@endsection
