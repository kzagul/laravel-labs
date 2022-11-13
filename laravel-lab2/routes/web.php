<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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
Route::get('/resume', [IndexController::class, 'Index']);
Route::get('/resume/all', [IndexController::class, 'Show']);
Route::get('/resume/filtered', [IndexController::class, 'Show']);
Route::get('/resume/{id}', [IndexController::Class, 'ShowById']);


//Route::get('/my_page', [MyPlaceController::class, 'index']);
//
//Route::get('lab1', [SightController::class, 'writeSights']);

//Route::get('/', function () {
//    return view('welcome');
//});
