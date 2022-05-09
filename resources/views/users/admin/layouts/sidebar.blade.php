<!-- begin:: Aside -->


<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside" style="background-color: green;">
    <!-- begin:: Aside -->
    <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
        <div >
                      <h4><a style="color:white" class="font-weight-bold" href="admin">Chap Medicare</a></h4>
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
                    <h4 class="kt-menu__section-text"style="color:white">Patient & Doctors</h4>
                    <i class="kt-menu__section-icon flaticon-more-v2"></i>
                </li>

                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover" ><a href="{{route('departments.index')}}" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text" style="color:white" >Departments</span><i
                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                    class="kt-menu__link"><span style="color:white" class="kt-menu__link-text">Doctors</span></span></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('departments.create')}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text" style="color:white">Add Department</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('departments.index')}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text" style="color:white">Departments List</span></a></li>
                        </ul>
                    </div>
                </li>

                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text" style="color:white">Doctors</span><i
                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                    class="kt-menu__link"><span class="kt-menu__link-text" style="color:white">Doctors</span></span></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('doctors.create')}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text" style="color:white">Add Doctor</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('doctors.index')}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text" style="color:white">Doctors List</span></a></li>
                        </ul>
                    </div>
                </li>

{{--                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"--}}
{{--                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i--}}
{{--                            class="kt-menu__link-icon flaticon-layers"></i><span--}}
{{--                            class="kt-menu__link-text" style="color:white">Patients</span><i--}}
{{--                            class="kt-menu__ver-arrow la la-angle-right"></i></a>--}}
{{--                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>--}}
{{--                        <ul class="kt-menu__subnav">--}}
{{--                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span--}}
{{--                                    class="kt-menu__link"><span class="kt-menu__link-text">Patients</span></span></li>--}}
{{--                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('patients.create')}}" class="kt-menu__link "><i--}}
{{--                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span--}}
{{--                                        class="kt-menu__link-text" style="color:white">Add Patient</span></a></li>--}}
{{--                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('patients.index')}}" class="kt-menu__link "><i--}}
{{--                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span--}}
{{--                                        class="kt-menu__link-text" style="color:white">Patients List</span></a></li>--}}
{{--                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"--}}
{{--                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"--}}
{{--                                                                      class="kt-menu__link kt-menu__toggle"><i--}}
{{--                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span--}}
{{--                                        class="kt-menu__link-text" style="color:white">Documents</span><i--}}
{{--                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>--}}
{{--                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>--}}
{{--                                    <ul class="kt-menu__subnav">--}}
{{--                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('documents.create')}}"--}}
{{--                                                                                           class="kt-menu__link "><i--}}
{{--                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span--}}
{{--                                                    class="kt-menu__link-text" style="color:white">Add Document</span><span--}}
{{--                                                    class="kt-menu__link-badge"><span--}}
{{--                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>--}}
{{--                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('documents.index')}}"--}}
{{--                                                                                           class="kt-menu__link "><i--}}
{{--                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span--}}
{{--                                                    class="kt-menu__link-text" style="color:white">Documents List</span><span--}}
{{--                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"--}}
{{--                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"--}}
{{--                                                                      class="kt-menu__link kt-menu__toggle"><i--}}
{{--                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span--}}
{{--                                        class="kt-menu__link-text" style="color:white">Case Histories</span><i--}}
{{--                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>--}}
{{--                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>--}}
{{--                                    <ul class="kt-menu__subnav">--}}
{{--                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('casehistories.create')}}"--}}
{{--                                                                                           class="kt-menu__link "><i--}}
{{--                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span--}}
{{--                                                    class="kt-menu__link-text" style="color:white">Add Case History</span><span--}}
{{--                                                    class="kt-menu__link-badge"><span--}}
{{--                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>--}}
{{--                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('casehistories.index')}}"--}}
{{--                                                                                           class="kt-menu__link "><i--}}
{{--                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span--}}
{{--                                                    class="kt-menu__link-text" style="color:white">Case Histories List</span><span--}}
{{--                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}

                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text" style="color:white">Human Resources</span><i
                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                      class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text" style="color:white">Nurses</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('nurses.create')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text" style="color:white">Add Nurse</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('nurses.index')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text" style="color:white">Nurses List</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                      class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text" style="color:white">Pharmacists</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('pharmacists.create')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text" style="color:white">Add Pharmacist</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('pharmacists.index')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text" style="color:white">Pharmacists List</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                      class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text" style="color:white">Laboratorists</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('laboratorists.create')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text" style="color:white">Add Laboratorist</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('laboratorists.index')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text" style="color:white">Laboratorists List</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                      class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text" style="color:white">Receptionists</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('receptionists.create')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text" style="color:white">Add Receptionist</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('receptionists.index')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text" style="color:white">Receptionists List</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                      class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text" style="color:white">Accountants</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('accountants.create')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text" style="color:white">Add Accountant</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('accountants.index')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text" style="color:white">Accountants List</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

{{--                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"--}}
{{--                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i--}}
{{--                            class="kt-menu__link-icon flaticon-layers"></i><span--}}
{{--                            class="kt-menu__link-text" style="color:white">Schedules</span><i--}}
{{--                            class="kt-menu__ver-arrow la la-angle-right"></i></a>--}}
{{--                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>--}}
{{--                        <ul class="kt-menu__subnav">--}}
{{--                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"--}}
{{--                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"--}}
{{--                                                                      class="kt-menu__link kt-menu__toggle"><i--}}
{{--                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span--}}
{{--                                        class="kt-menu__link-text" style="color:white">Time Schedules</span><i--}}
{{--                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>--}}
{{--                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>--}}
{{--                                    <ul class="kt-menu__subnav">--}}
{{--                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('timeschedules.create')}}"--}}
{{--                                                                                           class="kt-menu__link "><i--}}
{{--                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span--}}
{{--                                                    class="kt-menu__link-text" style="color:white">Add Time Schedule</span><span--}}
{{--                                                    class="kt-menu__link-badge"><span--}}
{{--                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>--}}
{{--                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('timeschedules.index')}}"--}}
{{--                                                                                           class="kt-menu__link "><i--}}
{{--                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span--}}
{{--                                                    class="kt-menu__link-text" style="color:white">Time Schedules List</span><span--}}
{{--                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"--}}
{{--                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"--}}
{{--                                                                      class="kt-menu__link kt-menu__toggle"><i--}}
{{--                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span--}}
{{--                                        class="kt-menu__link-text" style="color:white">Day Off Schedules</span><i--}}
{{--                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>--}}
{{--                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>--}}
{{--                                    <ul class="kt-menu__subnav">--}}
{{--                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('dayoffschedules.create')}}"--}}
{{--                                                                                           class="kt-menu__link "><i--}}
{{--                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span--}}
{{--                                                    class="kt-menu__link-text" style="color:white">Add Day Off Schedule</span><span--}}
{{--                                                    class="kt-menu__link-badge"><span--}}
{{--                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>--}}
{{--                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('dayoffschedules.index')}}"--}}
{{--                                                                                           class="kt-menu__link "><i--}}
{{--                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span--}}
{{--                                                    class="kt-menu__link-text" style="color:white" style="color:white">Day Off Schedules List</span><span--}}
{{--                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"--}}
{{--                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i--}}
{{--                            class="kt-menu__link-icon flaticon-layers"></i><span--}}
{{--                            class="kt-menu__link-text" style="color:white">Appointments</span><i--}}
{{--                            class="kt-menu__ver-arrow la la-angle-right"></i></a>--}}
{{--                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>--}}
{{--                        <ul class="kt-menu__subnav">--}}
{{--                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span--}}
{{--                                    class="kt-menu__link"><span class="kt-menu__link-text" style="color:white">Appointments</span></span></li>--}}
{{--                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('appointments.create')}}" class="kt-menu__link "><i--}}
{{--                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span--}}
{{--                                        class="kt-menu__link-text" style="color:white">Add Appointment</span></a></li>--}}
{{--                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('appointments.index')}}" class="kt-menu__link "><i--}}
{{--                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span--}}
{{--                                        class="kt-menu__link-text" style="color:white">Appointments List</span></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"--}}
{{--                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i--}}
{{--                            class="kt-menu__link-icon flaticon-layers"></i><span--}}
{{--                            class="kt-menu__link-text" style="color:white">Lap</span><i--}}
{{--                            class="kt-menu__ver-arrow la la-angle-right"></i></a>--}}
{{--                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>--}}
{{--                        <ul class="kt-menu__subnav">--}}

{{--                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('lapreports.create')}}" class="kt-menu__link "><i--}}
{{--                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span--}}
{{--                                        class="kt-menu__link-text" style="color:white">Add Lap Test</span></a></li>--}}
{{--                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('lapreports.index')}}" class="kt-menu__link "><i--}}
{{--                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span--}}
{{--                                        class="kt-menu__link-text" style="color:white">Lap Tests List</span></a></li>--}}
{{--                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"--}}
{{--                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"--}}
{{--                                                                      class="kt-menu__link kt-menu__toggle"><i--}}
{{--                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span--}}
{{--                                        class="kt-menu__link-text" style="color:white">Lap Templates</span><i--}}
{{--                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>--}}
{{--                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>--}}
{{--                                    <ul class="kt-menu__subnav">--}}
{{--                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('laptemplates.create')}}"--}}
{{--                                                                                           class="kt-menu__link "><i--}}
{{--                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span--}}
{{--                                                    class="kt-menu__link-text" style="color:white">Add Template</span><span--}}
{{--                                                    class="kt-menu__link-badge"><span--}}
{{--                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>--}}
{{--                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('laptemplates.index')}}"--}}
{{--                                                                                           class="kt-menu__link "><i--}}
{{--                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span--}}
{{--                                                    class="kt-menu__link-text" style="color:white">Templates List</span><span--}}
{{--                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"--}}
{{--                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i--}}
{{--                            class="kt-menu__link-icon flaticon-layers"></i><span--}}
{{--                            class="kt-menu__link-text" style="color:white">Prescriptions</span><i--}}
{{--                            class="kt-menu__ver-arrow la la-angle-right"></i></a>--}}
{{--                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>--}}
{{--                        <ul class="kt-menu__subnav">--}}
{{--                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span--}}
{{--                                    class="kt-menu__link"><span class="kt-menu__link-text">Prescriptions</span></span></li>--}}
{{--                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('prescriptions.create')}}" class="kt-menu__link "><i--}}
{{--                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span--}}
{{--                                        class="kt-menu__link-text" style="color:white">Add Prescription</span></a></li>--}}
{{--                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('prescriptions.index')}}" class="kt-menu__link "><i--}}
{{--                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span--}}
{{--                                        class="kt-menu__link-text" style="color:white">Prescriptions List</span></a></li>--}}

{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}

                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text" style="color:white">Pharmacy</span><i
                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('medicines.create')}}"
                                                                               class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text" style="color:white">Add Medicine</span><span
                                        class="kt-menu__link-badge"><span
                                            class="kt-badge kt-badge--warning">10</span></span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('medicines.index')}}"
                                                                               class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text" style="color:white">Medicines List</span><span
                                        class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                      class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text" style="color:white">Medicine Categories</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('medicines.categories.create')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text" style="color:white">Add Medicine Category</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('medicines.categories.index')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text" style="color:white">Medicine Categories List</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

{{--                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"--}}
{{--                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i--}}
{{--                            class="kt-menu__link-icon flaticon-layers"></i><span--}}
{{--                            class="kt-menu__link-text" style="color:white">Services</span><i--}}
{{--                            class="kt-menu__ver-arrow la la-angle-right"></i></a>--}}
{{--                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>--}}
{{--                        <ul class="kt-menu__subnav">--}}
{{--                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span--}}
{{--                                    class="kt-menu__link"><span class="kt-menu__link-text">Services</span></span></li>--}}
{{--                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('services.create')}}" class="kt-menu__link "><i--}}
{{--                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span--}}
{{--                                        class="kt-menu__link-text" style="color:white">Add Service</span></a></li>--}}
{{--                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('services.index')}}" class="kt-menu__link "><i--}}
{{--                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span--}}
{{--                                        class="kt-menu__link-text" style="color:white">Services List</span></a></li>--}}
{{--                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"--}}
{{--                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"--}}
{{--                                                                      class="kt-menu__link kt-menu__toggle"><i--}}
{{--                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span--}}
{{--                                        class="kt-menu__link-text" style="color:white">Service Packages</span><i--}}
{{--                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>--}}
{{--                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>--}}
{{--                                    <ul class="kt-menu__subnav">--}}
{{--                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('servicepackages.create')}}"--}}
{{--                                                                                           class="kt-menu__link "><i--}}
{{--                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span--}}
{{--                                                    class="kt-menu__link-text" style="color:white">Add Service Package</span><span--}}
{{--                                                    class="kt-menu__link-badge"><span--}}
{{--                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>--}}
{{--                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('servicepackages.index')}}"--}}
{{--                                                                                           class="kt-menu__link "><i--}}
{{--                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span--}}
{{--                                                    class="kt-menu__link-text" style="color:white">Service Packages List</span><span--}}
{{--                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}

                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text" style="color:white">Beds</span><i
                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                    class="kt-menu__link"><span class="kt-menu__link-text">Beds</span></span></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('bedallotments.create')}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text" style="color:white">Add Bed Allotment</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('bedallotments.index')}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text" style="color:white">bed Allotments  List</span></a></li>
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                      class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text" style="color:white">Beds</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('beds.create')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text" style="color:white">Add Bed</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('beds.index')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text" style="color:white">Beds List</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text" style="color:white">Financial</span><i
                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                      class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text" style="color:white">Payments</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('payments.create')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text" style="color:white">Add Payment</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('payments.index')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text" style="color:white">Payments List</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                      class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text" style="color:white">Payment Items</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('paymentitems.create')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text" style="color:white">Add Item</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('paymentitems.index')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text" style="color:white">Items List</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                      class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text" style="color:white">Expenses</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('expenses.create')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text" style="color:white">Add Expense</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('expenses.index')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text" style="color:white">Expenses List</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>


                        </ul>
                    </div>
                </li>

            </ul>
        </div>
    </div>
    <!-- end:: Aside Menu --></div>
<!-- end:: Aside -->
