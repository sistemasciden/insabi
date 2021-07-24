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

/*Route::get('/', function () {
    return view('auth.login');
});*/

Auth::routes(['verify' => true]);

Route::get('/', 'Patient\PatientController@index')->middleware('verified');
Route::resource('patients', 'Patient\PatientController')->except(['destroy'])->except(['destroy'])->middleware('verified');
Route::get('patientsdatatable', 'Patient\PatientController@dataTable')->name('patients.patientsdatatable')->middleware('verified');
Route::resource('uninsuredevidencesubmissions', 'Patient\UninsuredEvidenceSubmissionController')->only(['store'])->middleware('verified');
Route::get('getlastuninsuredevidencesubmission/{patient}', 'Patient\UninsuredEvidenceSubmissionController@getLastUninsuredEvidenceSubmission')->name('uninsuredevidencesubmissions.getlastuninsuredevidencesubmission')->middleware('verified');
Route::resource('consultationsessions', 'Patient\ConsultationSessionController')->only(['store'])->middleware('verified');
Route::get('getlastconsultationsessions/{patient}/{quantity}', 'Patient\ConsultationSessionController@getLastConsultationSessions' )->name('consultationsessions.getlastconsultationsessions');


//Route::get('/home', 'HomeController@index')->name('home');
