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
//     return view('welcome');
// });

Route::get('/','App\Http\Controllers\AccueilController@accueil')->name('accueil');
Route::get('/payement','App\Http\Controllers\PayementController@payeemnt')->name('payement');
Route::get('/show/{id}','App\Http\Controllers\AccueilController@show')->name('show');
