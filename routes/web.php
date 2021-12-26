<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('login');
//})->name('admin-dashboard');

Route::get('admin', function () {
    return view('users.admin.dashboard');
})->name('admin-dashboard');
Route::get('logout','Auth\LoginController@logout');
Route::get('/','Auth\LoginController@loginPage');
Route::view('patientRecord','users/doctors/patientRecordForm')->name('patientRecord');
Route::view('HXform','users/doctors/HXForm')->name('HXform');
Route::view('previousVisits','users/doctors/previousVisits')->name('previousVisits');
Route::view('nTodayRPT','users/doctors/nTodayRPT')->name('nTodayRPT');
Route::view('approachForm','users/doctors/approachForm')->name('approachForm');
Route::view('examinationForm','users/doctors/examinationForm')->name('examinationForm');
Route::view('generalLookForm','users/doctors/generalLookForm')->name('generalLookForm');
Route::view('vitalDetailForm','users/doctors/vitalDetailForm')->name('vitalDetailForm');
Route::view('handExamForm','users/doctors/handExamForm')->name('handExamForm');
Route::view('nailExamForm','users/doctors/nailExamForm')->name('nailExamForm');
Route::view('dermaExamForm','users/doctors/dermaExamForm')->name('dermaExamForm');
Route::view('headFaceExamForm','users/doctors/headFaceExamForm')->name('headFaceExamForm');
Route::view('eyeExamForm','users/doctors/eyeExamForm')->name('eyeExamForm');
Route::view('oralCavityExamForm','users/doctors/oralCavityExamForm')->name('oralCavityExamForm');
Route::view('thyroidExamForm','users/doctors/thyroidExamForm')->name('thyroidExamForm');
Route::view('neckChestAbdomenExamForm','users/doctors/neckChestAbdomenExamForm')->name('neckChestAbdomenExamForm');
Route::view('legFeetExamForm','users/doctors/legFeetExamForm')->name('legFeetExamForm');
Route::view('lymphNodeExamForm','users/doctors/lymphNodeExamForm')->name('lymphNodeExamForm');
Route::view('CVSExamForm','users/doctors/CVSExamForm')->name('CVSExamForm');
Route::view('RespExamForm','users/doctors/RespExamForm')->name('RespExamForm');
Route::view('GITExamForm','users/doctors/GITExamForm')->name('GITExamForm');
Route::view('GCSSomiHigherFunctions','users/doctors/GCSSomiHigherFunctions')->name('GCSSomiHigherFunctions');
Route::view('CranialPeripheralNerves','users/doctors/CranialPeripheralNerves')->name('CranialPeripheralNerves');
Route::view('MotorSensoryCerebellum','users/doctors/MotorSensoryCerebellum')->name('MotorSensoryCerebellum');
Route::view('treatmentProtocolForm','users/doctors/treatmentProtocolForm')->name('treatmentProtocolForm');
Route::view('OrderLabs','users/doctors/orderLabs')->name('OrderLabs');
Route::view('DMHistoryForm','users/doctors/DMHistoryForm')->name('DMHistoryForm');
Route::view('doctorDashboard','users/doctors/doctorDashboard')->name('doctorDashboard');
Route::view('receptionistDashboard','users/receptionists/receptionistDashboard');
Route::post('/login1','Auth\LoginController@login');
Route::resource('/departments', 'DepartmentController');
Route::get('/treatmenthistory/{doctor}', 'DoctorController@treatmentHistory')->name('treatment-history');
Route::resource('/doctors', 'DoctorController');
Route::resource('/patients', 'PatientController');
Route::resource('/nurses', 'NurseController');
Route::resource('/accountants', 'AccountantController');
Route::resource('/pharmacists', 'PharmacistController');
Route::resource('/receptionists', 'ReceptionistController');
Route::resource('/laboratorists', 'LaboratoristController');
Route::get('/timeschedule/{doctor}', 'TimeScheduleController@timeSchedulesForDoctor')->name('doctor-time-schedules');
Route::get('/timeschedule/{doctor}/create/', 'TimeScheduleController@createtimeScheduleForDoctor')->name('create-time-schedule-for-doctor');
Route::resource('/timeschedules', 'TimeScheduleController');
Route::resource('/casehistories', 'CaseHistoryController');
Route::resource('/appointments', 'AppointmentController');
Route::resource('/documents', 'DocumentController');
Route::resource('/prescriptions', 'PrescriptionController');
Route::resource('/medicines/categories', 'MedicineCategoryController', ['as' => 'medicines']);
Route::resource('/medicines', 'MedicineController');
Route::resource('/services', 'ServiceController');
Route::resource('/beds', 'BedController');
Route::resource('/lapreports', 'LapReportController');
Route::resource('/laptemplates', 'LapTemplateController');
Route::resource('/bedallotments', 'BedAllotmentController');
Route::resource('/servicepackages', 'ServicePackageController');
Route::resource('/dayoffschedules', 'DayoffScheduleController');
Route::resource('/payments', 'PaymentController');
Route::resource('/paymentitems', 'PaymentItemController');
Route::resource('/expenses', 'ExpenseController');


Route::get('/getdoctorsbydepartment/', 'AppointmentController@getDoctorsByDepartment')->name('get-doctors-by-department');
Route::get('/gettimeschedulebydoctor/', 'DoctorController@getTimeScheduleByDoctor')->name('get-time-schedule-by-doctor');
Route::get('/getdayoffschedulebydoctor/', 'DoctorController@getDayoffScheduleByDoctor')->name('get-dayoff-schedule-by-doctor');
Route::get('/gettimebytimeschedule/', 'TimeScheduleController@getTimeByTimeSchedule')->name('get-time-by-time-schedule');
Route::get('/getappointmentsbydate/', 'AppointmentController@getAppointmentsByDate')->name('get-appointments-by-date');
Route::get('/getbedallotmentsbydate/', 'BedAllotmentController@getBedAllotmentsByDate')->name('get-bedallotments-by-date');
Route::get('/gettemplatebyid/', 'LapReportController@getTemplateById')->name('get-template-by-id');
Route::get('/getpaymentitembyitemid/', 'PaymentItemController@getPaymentItemByItemId')->name('get-payment-item-by-item-id');
Route::get('/getpaymentitembydoctorid/', 'PaymentItemController@getPaymentItemByDoctorId')->name('get-payment-item-by-doctor_id');
Route::get('/getuserbyusertype/', 'PublicController@getUserByUserType')->name('get-user-by-user-type');
