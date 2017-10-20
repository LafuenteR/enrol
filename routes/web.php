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
	use App\Enrolsubject;



Route::get('/','StudentController@welcome');
Route::post('/login','LoginController@store');
Route::get('/logout','LoginController@destroy');
Route::get('/about','StudentController@about');
Route::post('/subject','StudentController@subjects');
Route::get('/wrong',function(){
	return view('exception');
});