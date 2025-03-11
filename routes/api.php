<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\ClientReviewController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\HomePageEtcController;

Route::get('/chartdata',[ChartController::class,'onAllSelect']);
Route::get('/clientreview',[ClientReviewController::class,'onAllSelect']);

//Contact api
Route::post('/contactsend',[ContactController::class,'ContactSend']);

//courses all api
Route::get('/courseshome',[CoursesController::class,'onSelectFour']);
Route::get('/coursesall',[CoursesController::class,'onSelectAll']);
Route::post('/coursedetails',[CoursesController::class,'onSelectDetails']);


//Footer Route
Route::get('/footerdata',[FooterController::class,'onSelectAll']);


//Information Route
Route::get('/information',[InformationController::class,'onSelectAll']);

//Services Route
Route::get('/services',[ServiceController::class,'ServiceView']);


//Project all api
Route::get('/projectshome',[ProjectController::class,'onSelectThree']);
Route::get('/projectsall',[ProjectController::class,'onSelectAll']);
Route::post('/projectdetails',[ProjectController::class,'ProjectsDetails']);

//Home etc all api
Route::get('/home/videos',[HomePageEtcController::class,'SelectVideo']);
Route::get('/totalhome',[HomePageEtcController::class,'SelectTotalHome']);
Route::get('/techhome',[HomePageEtcController::class,'SelectTechHome']);
Route::get('/homepage/title',[HomePageEtcController::class,'SelectHomeTitle']);