<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>

    <title>ChapMediCare</title>
    <meta name="description" content="Page with empty content">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <!--begin::Fonts -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <!--end::Fonts -->

    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="{{url('/adminpanel')}}/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
          type="text/css"/>
    <!--end::Page Vendors Styles -->


    <!--begin:: Global Mandatory Vendors -->
    <link href="{{url('/adminpanel')}}/assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css"
          rel="stylesheet" type="text/css"/>
    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="{{url('/adminpanel')}}/assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css"
          rel="stylesheet"
          type="text/css"/>
    <link
        href="{{url('/adminpanel')}}/assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css"
        rel="stylesheet"
        type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css"
          rel="stylesheet"
          type="text/css"/>
    <link
        href="{{url('/adminpanel')}}/assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css"
        rel="stylesheet"
        type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css"
          rel="stylesheet" type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/quill/dist/quill.snow.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/@yaireo/tagify/dist/tagify.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/animate.css/animate.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/toastr/build/toastr.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/dual-listbox/dist/dual-listbox.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/socicon/css/socicon.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/custom/vendors/line-awesome/css/line-awesome.css"
          rel="stylesheet" type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css"
          rel="stylesheet"
          type="text/css"/>
    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{url('/adminpanel')}}/assets/css/demo12/style.bundle.css" rel="stylesheet"
          type="text/css"/>

    <!--end::Global Theme Styles -->

    <!--begin::Custom Styles -->
@yield('styles')




<!--end::Custom Styles -->

    <link rel="shortcut icon" href="{{url('/adminpanel')}}/assets/media/logos/favicon.ico"/>
</head>
<!-- end::Head -->

<!-- begin::Body -->
<body style="background-color: rgb(255, 255, 255);"
      class ="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid  kt-page--loading" >


<!-- begin:: Page -->


<div  class="kt-grid kt-grid--hor kt-grid--root">
    <div  class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <!-- begin:: Aside -->
    <!-- end:: Aside -->
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
            <!-- begin:: Header -->
            <div style="background-color:#0a0a0a" id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">
                <!-- begin: Header Menu -->

                            <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
                                <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-tab ">
                                    <ul class="kt-menu__nav ">
                                        <li class="kt-menu__item " aria-haspopup="true"><a
                                                href="{{route('receptionDashboard')}}"
                                                class="kt-menu__link "><span
                                                    class="kt-menu__link-text">Dashboard</span></a></li>

                                        <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
                                            data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                            <a href="{{url('appointments/create')}}" class="kt-menu__link kt-menu__toggle"><span
                                                    class="kt-menu__link-text">Appointment Add</span></a>

                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
                                            data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                            <a href="{{route('patientForm')}}" class="kt-menu__link kt-menu__toggle"><span
                                                    class="kt-menu__link-text">Add Patient</span></a>

                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
                                            data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                            <a href="{{route('viewAppointment')}}" class="kt-menu__link kt-menu__toggle"><span
                                                    class="kt-menu__link-text">Appointment List</span></a>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
                                            data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                            <a href="{{route('RPatientsList')}}" class="kt-menu__link kt-menu__toggle"><span
                                                    class="kt-menu__link-text">Patients List</span></a>
                                        </li>

                                        <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
                                            data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                            <a href="logout" class="kt-menu__link kt-menu__toggle"><span
                                                    class="kt-menu__link-text">Logout</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
            <!-- end: Header Menu -->        <!-- begin:: Header Topbar -->
                <div  class="kt-header__topbar">
                </div>
                <!-- end:: Header Topbar -->
            </div>
            <!-- end:: Header -->



