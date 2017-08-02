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


// Admin Route
Route::get('/doctor', 'AdminController@doctor')->middleware('admin');
Route::get('/admin/doctor/index', 'DoctorController@index')->middleware('admin')->name('index');
Route::post('/admin/doctor/store', 'DoctorController@store')->middleware('admin')->name('store');
Route::get('/patient', 'PatientController@create')->middleware('admin')->name('patient.create');
Route::post('/patient', 'PatientController@store')->middleware('admin')->name('patient.store');
Route::get('/admin/medicine/create', 'MedicineController@create')->middleware('admin')->name('medicine.create');
Route::post('/admin/medicine/store', 'MedicineController@store')->middleware('admin')->name('medicine.store');
Route::get('/admin/medicine/edit/{id}', 'MedicineController@edit')->middleware('admin')->name('medicine.edit');
Route::post('/admin/medicine/update/{id}', 'MedicineController@update')->middleware('admin')->name('medicine.update');




//Visitors Route
Route::group(['middleware' => 'visitors'], function(){

	Route::get('/register', 'RegisterController@register')->name('register');
	Route::post('/register', 'RegisterController@postRegister')->name('user.register');
	Route::get('/login', 'LoginController@login')->name('login');
	Route::post('/login', 'LoginController@postLogin')->name('user.login');

});

Route::post('/logout', 'LoginController@logout')->name('logout');
Route::get('/assistant', 'AssistantController@assistant')->middleware('assistant');
