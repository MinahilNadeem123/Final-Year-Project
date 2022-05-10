<?php

use App\Http\Middleware\AdminWare;
use App\Http\Middleware\CustomAuth;
use Illuminate\Support\Facades\Auth;
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

// auth routes
Route::get('logout','Auth\LoginController@logout')->name('logout');
Route::get('/','Auth\LoginController@loginPage');





//admin routes

        Route::get('admin', function () {
            return view('users.admin.dashboard');
        })->name('admin-dashboard');

        Route::resource('/departments', 'DepartmentController');
        Route::get('/treatmenthistory/{doctor}', 'DoctorController@treatmentHistory')->name('treatment-history');
        Route::resource('/doctors', 'DoctorController');
        Route::resource('/nurses', 'NurseController');
        Route::resource('/accountants', 'AccountantController');
        Route::resource('/pharmacists', 'PharmacistController');
        Route::resource('/receptionists', 'ReceptionistController');
        Route::resource('/laboratorists', 'LaboratoristController');
        Route::get('/timeschedule/{doctor}', 'TimeScheduleController@timeSchedulesForDoctor')->name('doctor-time-schedules');
        Route::get('/timeschedule/{doctor}/create/', 'TimeScheduleController@createtimeScheduleForDoctor')->name('create-time-schedule-for-doctor');
        Route::resource('/timeschedules', 'TimeScheduleController');
        Route::resource('/casehistories', 'CaseHistoryController');
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






//doctor routes
Route::get('printView/{id}','DoctorController@printView')->name('printView');
Route::get('fetch_waiting_patients','DoctorController@fetch_waiting_patients');
Route::get('patientRecord','DoctorController@patientRecordForm')->name('patientRecord');
Route::get('fetch_appointment','DoctorController@fetch_appointment')->name('fetch_appointment');
Route::view('HXform','users/doctors/HXForm')->name('HXform');
Route::view('previousVisits','users/doctors/previousVisits')->name('previousVisits');
Route::get('nTodayRPT','DoctorController@nTodayRPT')->name('nTodayRPT');
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
Route::view('HTNHistoryForm','users/doctors/HTNHistoryForm')->name('HTNHistoryForm');
Route::view('FeverHistoryForm','users/doctors/FeverHistoryForm')->name('FeverHistoryForm');
Route::post('dmHistoryForm','PatientController@dmHistoryForm')->name('dmHistoryForm');
Route::get('DiagnosisForm','DoctorController@DiagnosisForm')->name('DiagnosisForm');
Route::get('treatmentProtocolForm','DoctorController@treatmentProtocolForm')->name('treatmentProtocolForm');
Route::post('insertProtocol','DoctorController@insertProtocol')->name('insertProtocol');
Route::post('insertPatientRecord','DoctorController@insertPatientRecord')->name('insertPatientRecord');
Route::get('DMHistoryForm','PatientController@getDmForm')->name('DMHistoryForm');
Route::get('doctorDashboard','DoctorController@doctorDashboard')->name('doctorDashboard');
Route::get('check/{id}','DoctorController@accessPatient')->name('check');
Route::get('check/viewReport/{id}','DoctorController@viewReport')->name('viewReport');
Route::post('check','DoctorController@insertData')->name('check');
Route::post('/login1','Auth\LoginController@login')->name('login1');
Route::post('addApproach','ApproachesController@addApproach')->name('addApproach');
Route::post('insertDiagnosis','DoctorController@insertDiagnosis')->name('insertDiagnosis');
Route::post('insertLabRecord','DoctorController@insertLabRecord')->name('insertLabRecord');
Route::get('getInvestigation/{id}','DoctorController@getInvestigation')->name('getInvestigation');
Route::get('findInvestigations/{id}','DoctorController@findInvestigation')->name('findInvestigations');
Route::get('findDrugs/{id}','DoctorController@findDrugs')->name('findDrugs');
Route::get('findGeneralInstruction/{id}','DoctorController@findGeneralInstruction')->name('findGeneralInstruction');
Route::get('findProtocols/{id}','DoctorController@findProtocols')->name('findProtocols');
Route::get('findDiagnosis/{id}','DoctorController@findDiagnosis')->name('findDiagnosis');

//receptionist routes
Route::post('addPatient','PatientController@addPatient')->name('addPatient');
Route::get('patientForm','ReceptionistController@patientForm')->name('patientForm');
Route::get('receptionistDashboard','ReceptionistController@receptionDashboard')->name('receptionDashboard');
Route::post('addAppointment','AppointmentController@addAppointment')->name('addAppointment');
Route::post('addReference','ReceptionistController@addReference')->name('addReference');
Route::get('deleteAppointment/{id}','AppointmentController@deleteAppointment')->name('deleteAppointment');
Route::get('deletePatient/{id}','ReceptionistController@deletePatient')->name('deletePatient');
Route::get('search_patient','ReceptionistController@search_patient')->name('search_patient');
Route::get('search_patient_by_cr','ReceptionistController@search_patient_by_cr')->name('search_patient_by_cr');
Route::get('viewAppointment','AppointmentController@viewAppointment')->name('viewAppointment');
//Route::post('listAppointment','AppointmentController@listAppointment')->name('listAppointment');
Route::get('findDoctorAppointments/{id}','AppointmentController@findDoctorAppointments')->name('findDoctorAppointments');
Route::resource('/appointments','AppointmentController');
Route::get('updateAppointment/{id}','AppointmentController@accessAppointment')->name('accessAppointment');
Route::post('updateAppointment','AppointmentController@updateAppointment')->name('updateAppointment');
Route::get('updatePatient/{id}','ReceptionistController@accessPatient')->name('accessPatient');
Route::post('updatePatient','ReceptionistController@updatePatient')->name('updatePatient');
Route::get('RPatientsList','ReceptionistController@patientsList')->name('RPatientsList');
Route::get('search_data','ReceptionistController@search_data')->name('search_data');
Route::Post('searchAppointment','AppointmentController@searchAppointment')->name('searchAppointment');
Route::get('findPatients/{id}','ReceptionistController@findPatients')->name('findPatients');
Route::get('findPatientsByCrno/{id}','ReceptionistController@findPatientsByCrno')->name('findPatientsByCrno');
//nurseRoute
Route::get('nursingParameters','NurseController@nursingParameters')->name('nursingParameters');
Route::get('nurseDashboard','NurseController@nurseDashboard')->name('nurseDashboard');
Route::post('addNursingParameters','NurseController@addNursingParameters')->name('addNursingParameters');
Route::post('insert_risk_factor','NurseController@insert_risk_factor')->name('insert_risk_factor');
Route::get('riskFactorsList','NurseController@riskFactorsList')->name('riskFactorsList');
Route::get('addRiskFactors','NurseController@addRiskFactors')->name('addRiskFactors');
//labs routes
Route::view('OrderLabs','users/doctors/orderLabs')->name('OrderLabs');
Route::view('LabEntryForm','users/laboratorists/LabEntryForm')->name('LabEntryForm');

//medicine routes
Route::get('OPDDrugsForm','MedicineController@OPDDrugsForm')->name('OPDDrugsForm');
Route::get('IndoorDrugsForm','MedicineController@IndoorDrugsForm')->name('IndoorDrugsForm');
Route::post('addIndoorDrugs','MedicineController@addIndoorDrugs')->name('addIndoorDrugs');
Route::post('addDrugs','MedicineController@addDrugs')->name('addDrugs');
//laboratorist routes
Route::get('laboratoristDashboard','LaboratoristController@laboratoristDashboard')->name('laboratoristDashboard');
Route::get('addTest','LaboratoristController@addTest')->name('addTest');
Route::get('labPatientList','LaboratoristController@labPatientList')->name('labPatientList');
Route::get('fetch_labs_awaited','LaboratoristController@fetch_labs_awaited');
Route::post('insertTest','LaboratoristController@insertTest')->name('insertTest');
Route::get('testList','LaboratoristController@testList')->name('testList');
Route::get('updateTest/{id}','LaboratoristController@accessTest')->name('accessTest');
Route::get('uploadReports/{id}','LaboratoristController@uploadReports')->name('uploadReports');
Route::post('updateTest','LaboratoristController@updateTest')->name('updateTest');
Route::post('patientReports','LaboratoristController@patientReports')->name('patientReports');
Route::get('deleteTest/{id}','LaboratoristController@deleteTest')->name('deleteTest');
