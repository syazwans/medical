<?php

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


Route::get('/', function () {
    return view('welcome');
});

/* -------------------- LOGIN ------------------------ */

Route::get('/login', function () {
    session(['loginid' => '']);
    session(['loginname' => '']);
    session(['loginbranchcode' => '']);
   return view('auth.login');

});
/* -------------------- tt ------------------------ */

Route::get('/rayuan', function () {
    return view('rayuan');
});

Route::get('/workbasket_tab', function () {
    return view('workbasket_tab');
});
// Route::get('/medical_services', function () {
//     return view('medical_services');
// });
// Route::get('/information', function () {
//     return view('medical_board.medicalService.information');
// });




/* -------------------- LOGOUT ----------------------- */

Route::get('/logout', 'AuthController@logout');

/* ----------------- AUTHENTICATION ------------------ */

Route::post('/login', 'AuthController@login');

/* ------------------- HOME TASK --------------------- */

Route::get('/home', 'WorkbasketController@wblist');

// Medical
/* ================= HOME TASK ========================*/
Route::get('/medical/home', 'MedicalBoard\WorkbasketMedicalController@index');
Route::get('/medical/information/{id}', 'MedicalBoard\InformationMedicalController@index');
Route::post('/information/changeStatus', 'MedicalBoard\WorkbasketMedicalController@changeStatus');


/* ------------------ ADMIN TASK --------------------- */

Route::get('/homeADM', function () {
    return view('homeADM');
});

/* ------------------- ALL NOTICE -------------------- */


//Route::resource('noticeOd', 'CommonController@GetOBDetails');
//Route::post('/accidentdatetime', 'NoticeAccidentController@index');//irina comment out
//Route::post('/remark', 'NoticeAccidentController@postRemark');

//testing
Route::get('/testmc', 'NoticeAccidentController@DisplayMC');
Route::post('/testmc', 'NoticeAccidentController@TestUpdMC');
Route::get('/testuploaddoc', 'UploadclaimController@getdoc');
Route::post('/testuploaddoc', 'UploadclaimController@upload');

/* ------------------------ COMMON ------------------------- */

Route::post('/obform', 'CommonController@postObForm');
Route::post('/bankinformation','CommonController@postBankInfo');
//HANNIS
Route::post('/employerDetails', 'CommonController@postEmployer');
Route::get('/success','CommonController@success');
Route::post('/backhome', 'CommonController@backhome');


/* ---------------- NOTICE TYPE(PK) -------------------- */

Route::post('/idno', 'NoticeTypeController@noticeType');
Route::get('/noticetype', 'NoticeTypeController@index');

/* ---------------- NOTICE ACCIDENT(PK) -------------------- */

Route::get('/noticeaccident','NoticeAccidentController@index');
Route::get('/branch/{statecode}', 'NoticeAccidentController@getbranchname');
Route::get('/reftable/{accdwhen}', 'NoticeAccidentController@getaccwhen');
Route::get('/obform', 'NoticeAccidentController@index');
Route::post('/employerdetails', 'CommonController@postEmployer');
Route::get('/accdatetime', 'NoticeAccidentController@AccidentDate');
Route::post('/accidentdatetime', 'NoticeAccidentController@checkAccidentDate');
Route::post('/wagesdetails', 'NoticeAccidentController@postWages');
//Route::post('/bankinformation','NoticeAccidentController@postBankInfo');
Route::post('/certificateemployee','NoticeAccidentController@postCertificateEmployee');
//irina
Route::post('/noticeaccident', 'NoticeAccidentController@postAccident');
Route::post('/updmc', 'NoticeAccidentController@UpdMC');


//Confirmation & Preview
Route::post('/accsave', 'NoticeAccidentController@postConfirmation');
Route::get('/preview', 'NoticeAccidentController@Preview');
Route::post('/accsubmit', 'NoticeAccidentController@Submit');

/* ---------------- NOTICE OD(PK) -------------------- */

Route::get('/obform_od', 'NoticeOdController@index');
Route::get('/noticeOd', 'NoticeOdController@index');
Route::post('/obform_od', 'CommonController@postObForm');
Route::post('/employerdetails_od', 'CommonController@postEmployer');
Route::post('/odupdmc', 'NoticeOdController@UpdMC');
Route::post('/confirmation_od', 'NoticeOdController@postConfirmation');
Route::post('/bankinformation_od', 'NoticeOdController@postBankInfo');
Route::post('/wagesdetails_od', 'NoticeOdController@postWages');
Route::post('/odinfo', 'NoticeOdController@postOdinfo');
Route::post('/odemphistory', 'NoticeOdController@postOdEmphistory');
Route::get('/branch/{statecode}', 'NoticeOdController@getbranchname');
Route::get('/odpreview', 'NoticeOdController@Preview');

/* ---------------- NOTICE ILAT(PK) -------------------- */

//Route::get('/noticeinvalidity','NoticeInvalidityController@index');
Route::get('/noticeinvalidity', function () {
    return view('noticeinvalidity.index');
});
Route::get('/obformilat', 'NoticeInvalidityController@index');
// Route::get('/checkIlatNotice', 'NoticeInvalidityController@checkIlatNotice');
Route::post('/wagesilat', 'NoticeInvalidityController@postWages');
Route::post('/obformilat', 'CommonController@postObForm');
Route::post('/ilatinfo', 'NoticeInvalidityController@postIlat_info');
Route::post('/emphistory', 'NoticeInvalidityController@postEmphistory');
Route::post('/confirmationilat', 'NoticeInvalidityController@postConfirmation');
Route::post('/bankinformationilat', 'NoticeInvalidityController@postBankInfo');

/* ---------------- NOTICE DEATH(PK) -------------------- */

Route::get('/noticedeath','NoticeDeathController@index');

/* ------------------ UPLOAD FILE -------------------- */

Route::get('/fileupload','FileuploadController@index');
Route::get('/searchdocument', function () {
    return view('fileupload.index');
});
//najmi
Route::get('/indexobprofile', 'ObprofileController@index')->name('obprofile.index');
Route::get('/indexclaiminfo', 'ClaimController@index')->name('claim.index');
Route::post('insertlola', 'UploadobprofileController@upload')->name('obprofile.upload');
Route::post('insert', 'UploadclaimController@upload')->name('claim.upload');
Route::get('/viewdoc', 'UploadclaimController@viewstorage');


// Medical Board
/*------------------ TAKWIM --------------------------*/

Route::get('/takwim', 'MedicalBoard\MedTakwimController@index');
// Route::any('/takwim/annualAgenda', 'MedTakwimController@getAnnualAgenda');
Route::get('/takwim/annualAgendaCalendar/{id}', 'MedicalBoard\MedTakwimController@getAnnualAgendaCalendar');
Route::post('/takwim', 'MedicalBoard\MedTakwimController@store');
Route::post('/takwim/update', 'MedicalBoard\MedTakwimController@updateAnnualAgenda');
Route::post('/takwim/destroy', 'MedicalBoard\MedTakwimController@deleteAnnualAgenda');
Route::post('/takwim/duplicate', 'MedicalBoard\MedTakwimController@duplicateAnnualAgenda');
// Route::post('/takwim', 'MedTakwimController@getAnnualAgenda');
Route::get('/takwim/getQuota/{id}/{date?}', 'MedicalBoard\MedTakwimController@getQuota');
Route::post('/takwim/setQuota', 'MedicalBoard\MedTakwimController@setQuota');

Route::get('/takwim/hospital_address/{id}', 'MedicalBoard\MedTakwimController@getHospitalAddress');
Route::get('/takwim/statecode/{id}', 'MedicalBoard\MedTakwimController@getStateCode');
Route::get('/takwim/annualAgenda/{id}/{year?}/{mb_category?}', 'MedicalBoard\MedTakwimController@getAnnualAgenda');
Route::get('/takwim/getSpeciality/{id}', 'MedicalBoard\MedTakwimController@getSpeciality');
// Route::get('/takwim/hospital_address', 'MedTakwimController@getNoneHospitalAddress');
// Route::get('/address/{id}', 'MedTakwimController@getHospitalAddress');
/*----------------------------------------------------*/
Route::get('/rayuan', function () {
    return view('rayuan');
});

Route::get('/workbasket_tab', function () {
    return view('workbasket_tab');
});
/* ---------------- LOCALIZATION -------------------- */

Route::get('locale', function () {                                                                               
    return \App::getLocale();
});
Route::get('locale/{locale}', function ($locale) {
    \Session::put('locale', $locale);
    return redirect()->back();
});

/*------------------ Medical Services --------------------------*/
Route::get('/information', 'medicalServices\AppdetailsController@index');
// Route::get('/information/{id}', 'medicalServices\AppdetailsController@index');
Route::get('/medical_services', 'medicalServices\WbmedicalController@index');
Route::get('/home_mohuk', 'medicalServices\WbmedicalController@index');
Route::get('/home_moei', 'medicalServices\WbmedicalController@index');
Route::get('/home_abppp', 'medicalServices\WbmedicalController@index');
Route::get('/home_acpp', 'medicalServices\WbmedicalController@index');
Route::get('/home_aobppp', 'medicalServices\WbmedicalController@index');
Route::get('/home_aocpp', 'medicalServices\WbmedicalController@index');

Route::get('/noticeAccident', 'medicalServices\AccidentController8@index');
Route::get('/noticeOd', 'medicalServices\OdController@index');
Route::get('/Ilat', 'medicalServices\IlatController@index');


Route::get('/newcase', function () {
    return view('MedicalServices.noticeAccident.newcase');
});
Route::get('/abppp', function () {
    return view('MedicalServices.ABPPP.index');
});
Route::get('/index', function () {  
    return view('MedicalServices.ABPPP.index');
});
Route::get('/acpp', function () {
    return view('MedicalServices.ACPP.index');
});
Route::get('/index', function () {  
    return view('MedicalServices.AOBPPP.index');
});
Route::get('/index', function () {  
    return view('MedicalServices.AOCPP.index');
});




Route::get('/accident', 'medicalServices\AccidentController@index')->name('accident');
Route::get('/invadility', 'medicalServices\IlatController@index')->name('invadility');
Route::get('/od', 'medicalServices\OdController@index')->name('od');