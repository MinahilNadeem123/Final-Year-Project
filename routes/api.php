<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::namespace('Api')->middleware('json.response')->group(function () {
    Route::post('login', 'LoginController@login')->name('login');
    Route::post('register', 'LoginController@register')->name('register');
     Route::middleware('auth:api')->group(function () {
         Route::get('getLabTest', 'LabController@getLabs')->name('getLabTest');
         Route::post('addAppointment', 'AppointmentController@addAppointment')->name('addAppointment');
         Route::get('getDoctor', 'DoctorController@getDoctor')->name('getDoctor');
         Route::post('getDepartmentDoctor', 'DoctorController@getDepartmentDoctor')->name('getDepartmentDoctor');
         Route::get('getDepartment', 'DoctorController@getDepartment')->name('getDepartment');
         Route::get('getMrn', 'PatientController@getMrn')->name('getMrn');
         Route::get('getReports', 'LabController@getReports')->name('getReports');
     });
});
//
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//
//});
