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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//// SUmmary Routes
Route::post('/updateSummary', [App\Http\Controllers\UserController::class,'updateSummary']);
Route::get('/getSummary', [App\Http\Controllers\UserController::class,'getSummary']);



//// Work Experience Routes
Route::post('/addWorkExperience', [App\Http\Controllers\WorkExperienceController::class,'addWorkExperience']);
Route::post('/updateWorkExperience', [App\Http\Controllers\WorkExperienceController::class,'updateWorkExperience']);
Route::get('/getWorkExperience', [App\Http\Controllers\WorkExperienceController::class,'getWorkExperience']);

