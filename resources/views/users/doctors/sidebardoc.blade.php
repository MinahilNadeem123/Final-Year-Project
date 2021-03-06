<!-- begin:: Aside -->


<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
<div class="overflow-auto kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside" style="background-color: green;">
    <!-- begin:: Aside -->
    <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
        <div >
            <h4><a style="color:white" class="font-weight-bold" href="">Chap Medicare</a></h4>
        </div>


        <!-- <div class="kt-aside__brand-tools">
            <button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler"><span></span></button>
        </div> -->
    </div>
    <!-- end:: Aside -->    <!-- begin:: Aside Menu -->
    <div>
        <div id="kt_aside_menu"
             class="kt-aside-menu "
             data-ktmenu-vertical="1"
             data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500" style="background-color:black !important;">

            <ul class="kt-menu__nav ">
                <li class="kt-menu__section kt-menu__section--first">
                    <h4 class="kt-menu__section-text"style="color:white">FORMS</h4>
                    <i class="kt-menu__section-icon flaticon-more-v2"></i>
                </li>
                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="{{route('doctorDashboard')}}" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text"style="color:white">Home Page</span></a>
                </li>

                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="{{route('approachForm')}}" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text" style="color:white">Approach </span></a>
                </li>

{{--                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"--}}
{{--                    data-ktmenu-submenu-toggle="hover"><a href="{{route('OrderLabs')}}" class="kt-menu__link kt-menu__toggle"><i--}}
{{--                            class="kt-menu__link-icon flaticon-layers"></i><span--}}
{{--                            class="kt-menu__link-text" style="color:white">Order Labs</span></a>--}}
{{--                </li>--}}

{{--                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"--}}
{{--                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i--}}
{{--                            class="kt-menu__link-icon flaticon-layers"></i><span--}}
{{--                            class="kt-menu__link-text" style="color:white">Previous Visits</span></i></a>--}}
{{--                </li>--}}

{{--                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"--}}
{{--                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i--}}
{{--                            class="kt-menu__link-icon flaticon-layers"></i><span--}}
{{--                            class="kt-menu__link-text" style="color:white">View Lab Records</span></a>--}}
{{--                </li>--}}

                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="{{route('nTodayRPT')}}" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text" style="color:white">N Today RPT</span></a>
                </li>

                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text" style="color:white">N Today QRY</span></a>
                </li>

                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="{{route('HXform')}}" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text" style="color:white">HX form</span></a>
                </li>

                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="{{route('examinationForm')}}" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text" style="color:white">Exam Form</span></a>
                </li>

                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text" style="color:white">Enter Labs</span></a>
                </li>

                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="{{route('treatmentProtocolForm')}}" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text" style="color:white">Form Protocol</span></a>
                </li>

                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text" style="color:white">IX Summary</span></a>
                </li>
                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="{{route('DiagnosisForm')}}" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text" style="color:white">Form Diagnosis</span></a>
                </li>
 <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="{{route('OrderLabs')}}" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text" style="color:white">Order Labs Form</span></a>
                </li>
                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="{{route('LabEntryForm')}}" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text" style="color:white">Enter Labs Form</span></a>
                </li>
                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="{{route('OPDDrugsForm')}}" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text" style="color:white">Drug Form OPD</span></a>
                </li>
                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="{{route('IndoorDrugsForm')}}" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text" style="color:white">Drug Form Indoor</span></a>
                </li>
                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="{{route('treatmentProtocolForm')}}" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text" style="color:white">Treatment Protocol Form</span></a>
                </li>
                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="{{route('FeverHistoryForm')}}" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text" style="color:white">Fever History Form</span></a>
                </li>




                {{--    </div>--}}
                {{--    <br>--}}
                {{--    <h2 style="margin-left: 200px;"> LIST</h2>  <hr style="margin-left:15%; ;width: 950px;" ></hr>--}}
                {{--    IN PROGRESS--------------}}

            </ul>
        </div>
    </div>
    <!-- end:: Aside Menu --></div>
<!-- end:: Aside -->
