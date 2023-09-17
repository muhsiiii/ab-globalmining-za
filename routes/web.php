<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LegacyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

/*
******************************************************************************
******************************************************************************
****************************Admin-Side****************************************
******************************************************************************
******************************************************************************
*/

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/do-login', [LoginController::class, 'DoLogin'])->name('dologin');


Route::group(['middleware' => 'admin_auth'], function () {
    Route::get('/logout', [LoginController::class, 'logOut'])->name('logout');
    Route::get('/admin-home', [LoginController::class, 'AdminHome'])->name('admin.home');

    Route::get('/video-upload-form', [VideoController::class, 'VideoForm'])->name('video.form');
    Route::post('/video-upload', [VideoController::class, 'VideoUpload'])->name('videoupload');
    Route::get('/video-update-form/{id}', [VideoController::class, 'VideoUpdateForm'])->name('video.update.form');
    Route::post('/video-update', [VideoController::class, 'VideoUpdate'])->name('video.update');

    Route::get('/latestnews', [AdminController::class, 'LatestNews'])->name('latestnews');
    Route::get('/latestnews-form', [AdminController::class, 'LatestNewsForm'])->name('latestnews.form');
    Route::post('/latestnews-save', [AdminController::class, 'LatestNewsSubmit'])->name('latestnews.form.submit');
    Route::get('/latestnews-edit/{id}', [AdminController::class, 'LatestNewsEdit'])->name('latestnews.edit');
    Route::post('/latestnews-update', [AdminController::class, 'LatestNewsUpdate'])->name('latestnews.update');
    Route::get('/latestnews-delete/{id}', [AdminController::class, 'LatestNewsDelete'])->name('latestnews.delete');

    Route::get('/ourteams', [AdminController::class, 'OurTeams'])->name('ourteams');
    Route::get('/ourteams-form', [AdminController::class, 'OurTeamsForm'])->name('ourteams.form');
    Route::post('/ourteams-save', [AdminController::class, 'OurTeamsSave'])->name('ourteams.save');
    Route::get('/ourteams-edit/{id}', [AdminController::class, 'OurTeamsEdit'])->name('ourteams.edit');
    Route::post('/ourteams-update', [AdminController::class, 'OurTeamsUpdate'])->name('ourteams.update');
    Route::get('/ourteams-delete/{id}', [AdminController::class, 'OurTeamsDestroy'])->name('ourteams.destroy');

    Route::get('/jobs', [AdminController::class, 'Jobs'])->name('jobs');
    Route::get('/job-add', [AdminController::class, 'NewJob'])->name('newjob');
    Route::post('/job-save', [AdminController::class, 'NewJobSave'])->name('newjobsave');
    Route::get('/edit-job/{id}', [AdminController::class, 'EditJob'])->name('editjob');
    Route::post('/update-job', [AdminController::class, 'UpdateJob'])->name('updatejob');
    Route::get('/destroy-job/{id}', [AdminController::class, 'DestroyJob'])->name('destroyjob');

    Route::get('/country', [AdminController::class, 'GetCountry'])->name('getcountry');
    Route::get('/country-add', [AdminController::class, 'Country'])->name('country');
    Route::post('/job-country-save', [AdminController::class, 'NewCountry'])->name('newcountry');
    Route::get('/edit-country/{id}', [AdminController::class, 'EditCountry'])->name('editcountry');
    Route::post('/update-country', [AdminController::class, 'UpdateCountry'])->name('updatecountry');
    Route::get('/destroy-country/{id}', [AdminController::class, 'DestroyCountry'])->name('destroycountry');

    Route::post('/delete-country', [AdminController::class, 'DeleteCountry']);
    Route::post('/delete-job', [AdminController::class, 'Deletejob']);

    Route::get('/career-table', [AdminController::class, 'Careertable'])->name('career.table');
    Route::get('/pdf/{id}', [PdfController::class, 'PdfShow'])->name('pdf');

	Route::get('/logo', [AdminController::class, 'Logo'])->name('logotable');
    Route::get('/logos-form', [AdminController::class, 'LogoForm'])->name('logoform');
    Route::post('/logos-save', [AdminController::class, 'LogoSave'])->name('logosave');
    Route::get('/logos-edit/{id}', [AdminController::class, 'LogoEdit'])->name('logoedit');
    Route::post('/logos-update', [AdminController::class, 'LogoUpdate'])->name('logoupdate');
    Route::get('/logos-delete/{id}', [AdminController::class, 'LogoDestroy'])->name('logodestroy');

    Route::get('/contact', [AdminController::class, 'ContactUS'])->name('contact');

    Route::get('/legacy', [LegacyController::class, 'LegacyList'])->name('legacylist');
    Route::post('/legacy-update', [LegacyController::class, 'LegacyUpdate'])->name('legacyupdate');


});


/*
******************************************************************************
******************************************************************************
****************************Client-Side***************************************
******************************************************************************
******************************************************************************
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/career-submit-home', [HomeController::class, 'CareerHomeSubmit'])->name('career.home,submit');
Route::post('/contact-us-home-save', [HomeController::class, 'ContactUsHomeSave'])->name('contactushome.save');

Route::get('/services', [HomeController::class, 'Services'])->name('services');
Route::get('/services-single', [HomeController::class, 'ServicesSingle'])->name('servicessingle');
Route::get('/services-engineering', [HomeController::class, 'EngineeringServices'])->name('engineeringservices');
Route::get('/services-feasibility', [HomeController::class, 'FeasibilityStudies'])->name('feasibilitystudies');
Route::get('/services-geolagical', [HomeController::class, 'GeolagicalServices'])->name('geolagicalservices');
Route::get('/services-mineclosure', [HomeController::class, 'MineClosure'])->name('mineclosure');
Route::get('/services-specialised', [HomeController::class, 'SpecialisedService'])->name('speclisedservice');

Route::get('/ourteamlist', [HomeController::class, 'OurTeamList'])->name('ourteamlist');
Route::get('/project-detail', [HomeController::class, 'ProjectDetail'])->name('projectdetail');

Route::get('/career', [HomeController::class, 'Career'])->name('career');
Route::post('/career-submit', [HomeController::class, 'CareerSubmit'])->name('career.submit');

Route::get('/contact-us', [HomeController::class, 'ContactUs'])->name('contactus');
Route::post('/contact-us/save', [HomeController::class, 'ContactUsSave'])->name('contactus.save');

Route::get('/all-news', [HomeController::class, 'AllNews'])->name('allnews');
Route::get('/gamsberg', [HomeController::class, 'Gamsberg'])->name('gamsberg');
Route::get('/projectsingle', [HomeController::class, 'ProjectSingle'])->name('projectsingle');
Route::get('/preskaproject', [HomeController::class, 'PreskaProject'])->name('preskaproject');

Route::get('/location', [HomeController::class, 'Location'])->name('location');

Route::post('/get-job', [HomeController::class, 'Getjob'])->name('getjob');
Route::post('/get-joblist', [HomeController::class, 'Getjoblist']);
Route::post('/get-alljob', [HomeController::class, 'GetAlljob']);
Route::post('/get-jobs', [HomeController::class, 'Alljob']);
Route::post('/get-map', [HomeController::class, 'Getmap']);





