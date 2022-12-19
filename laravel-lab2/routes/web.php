<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\ResumeController;
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

//Resume
//Route::get('/', function () { return redirect('/resume/all'); });
//Route::get('/resume', [IndexController::class, 'Index']);
Route::get('/resume/all', [IndexController::class, 'Show']);
Route::get('/resume/filtered', [IndexController::class, 'Show']);
Route::get('/resume/{id}', [IndexController::Class, 'ShowById']);


Route::get('/res/add', [ResumeController::class, 'AddResumeForm']);
Route::post('/res/add', [ResumeController::class, 'AddResume']);

Route::get('/resume/update/{id}', [ResumeController::class, 'UpdateResumeForm'])->name('UpdateResumeForm');
Route::put('/resume/{person}', [ResumeController::class, 'UpdateResume'])->name('UpdateResume');

Route::delete('/resume/{person}', [ResumeController::class, 'DeleteResume'])->name('DeleteResume');

//Vacancy
Route::get('/vacancies', function () { return redirect('/vacancy/all'); });
Route::get('/vacancy',function () { return redirect('/vacancy/all'); });
Route::get('/vacancy/all', [VacancyController::class, 'Show']);
Route::get('/vacancy/{id}', [VacancyController::Class, 'ShowById']);

//Staff
Route::get('/staff', function () { return redirect('/staff/all'); });
Route::get('/staff/all', [StaffController::class, 'Show']);
Route::get('/staff/{staffname}', [StaffController::class, 'ShowResumesByStaffName']);

//Queries
Route::get('/query/peoplestage/', [IndexController::class, 'query1']);
Route::get('/query/programmers/', [IndexController::class, 'query2']);
Route::get('/query/count/', [IndexController::class, 'query3']);
Route::get('/query/resumestaff/', [IndexController::class, 'query4']);
