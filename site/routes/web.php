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

Route::get('/', [App\Http\Controllers\homeController::class, 'homeindex']);
Route::post('/contactSend', [App\Http\Controllers\homeController::class, 'contactSend']);



Route::get('/courses', [App\Http\Controllers\coursesController::class, 'coursesPage']);
Route::get('/projects', [App\Http\Controllers\projectsController::class, 'projectPage']);
Route::get('/contact', [App\Http\Controllers\contactController::class, 'contactPage']);

Route::get('/policy', [App\Http\Controllers\policyController::class, 'policyPage']);
Route::get('/terms', [App\Http\Controllers\termsController::class, 'termsPage']);