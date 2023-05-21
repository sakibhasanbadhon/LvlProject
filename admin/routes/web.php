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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/', 'demoController@index');

//Route::get('/', [App\Http\Controllers\demoController::class, 'index']);

Route::get('/', [App\Http\Controllers\homeController::class, 'homeindex'])->middleware('loginCheck');

Route::get('/visitor', [App\Http\Controllers\visitorController::class, 'visitorindex'])->middleware('loginCheck');


Route::get('/service', [App\Http\Controllers\serviceController::class, 'serviceIndex'])->middleware('loginCheck');
Route::get('/getService', [App\Http\Controllers\serviceController::class, 'getServiceData'])->middleware('loginCheck');
Route::post('/serviceDelete', [App\Http\Controllers\serviceController::class, 'serviceDelete'])->middleware('loginCheck');
Route::post('/serviceDetails', [App\Http\Controllers\serviceController::class, 'getServiceDetails'])->middleware('loginCheck');
Route::post('/serviceUpdate', [App\Http\Controllers\serviceController::class, 'serviceUpdate'])->middleware('loginCheck');
Route::post('/serviceAdd', [App\Http\Controllers\serviceController::class, 'serviceAdd'])->middleware('loginCheck');

//admin courses  

Route::get('/courses', [App\Http\Controllers\coursesController::class, 'coursesIndex'])->middleware('loginCheck');
Route::get('/getCoursesData', [App\Http\Controllers\coursesController::class, 'getCoursesData'])->middleware('loginCheck');
Route::post('/getCourseDetails', [App\Http\Controllers\coursesController::class, 'getCourseDetails'])->middleware('loginCheck');
Route::post('/courseDelete', [App\Http\Controllers\coursesController::class, 'courseDelete'])->middleware('loginCheck');
Route::post('/coursesUpdate', [App\Http\Controllers\coursesController::class, 'coursesUpdate'])->middleware('loginCheck');
Route::post('/courseAdd', [App\Http\Controllers\coursesController::class, 'courseAdd'])->middleware('loginCheck');


//admin Project 

Route::get('/project', [App\Http\Controllers\projectController::class, 'projectIndex'])->middleware('loginCheck');
Route::get('/getProjectData', [App\Http\Controllers\projectController::class, 'getProjectData'])->middleware('loginCheck');
Route::post('/projectDelete', [App\Http\Controllers\projectController::class, 'projectDelete'])->middleware('loginCheck');
Route::post('/getProjectDetails', [App\Http\Controllers\projectController::class, 'getProjectDetails'])->middleware('loginCheck');
Route::post('/projectUpdate', [App\Http\Controllers\projectController::class, 'projectUpdate'])->middleware('loginCheck');
Route::post('/projectAdd', [App\Http\Controllers\projectController::class, 'projectAdd'])->middleware('loginCheck');



//admin contact 


Route::get('/contact', [App\Http\Controllers\contactController::class, 'contactIndex'])->middleware('loginCheck');
Route::get('/getContactData', [App\Http\Controllers\contactController::class, 'getContactData'])->middleware('loginCheck');
Route::post('/contactDelete', [App\Http\Controllers\contactController::class, 'contactDelete'])->middleware('loginCheck');



// admin review

Route::get('/review', [App\Http\Controllers\reviewController::class, 'reviewIndex'])->middleware('loginCheck');
Route::get('/getReviewData', [App\Http\Controllers\reviewController::class, 'getReviewData'])->middleware('loginCheck');
Route::post('/reviewDelete', [App\Http\Controllers\reviewController::class, 'reviewDelete'])->middleware('loginCheck');
Route::post('/getReviewDetails', [App\Http\Controllers\reviewController::class, 'getReviewDetails'])->middleware('loginCheck');
Route::post('/reviewUpdate', [App\Http\Controllers\reviewController::class, 'reviewUpdate'])->middleware('loginCheck');
Route::post('/reviewAdd', [App\Http\Controllers\reviewController::class, 'reviewAdd'])->middleware('loginCheck');


// For Login

Route::get('/login', [App\Http\Controllers\loginController::class, 'loginPage']);

Route::post('/onLogin', [App\Http\Controllers\loginController::class, 'onLogin']);

Route::get('/logout', [App\Http\Controllers\loginController::class, 'onLogout']);


//admin Gallery

Route::get('/photo', [App\Http\Controllers\photoController::class, 'photoIndex'])->middleware('loginCheck');

Route::post('/photoUpload', [App\Http\Controllers\photoController::class, 'photoUpload'])->middleware('loginCheck');

Route::get('/photoJson', [App\Http\Controllers\photoController::class, 'photoJson'])->middleware('loginCheck');

Route::get('/photoJsonById/{id}', [App\Http\Controllers\photoController::class, 'photoJsonById'])->middleware('loginCheck');

Route::post('/photoDelete', [App\Http\Controllers\photoController::class, 'photoDelete'])->middleware('loginCheck');
