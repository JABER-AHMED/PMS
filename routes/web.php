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


Route::get('/admin', 'AdminController@index')->middleware('admin')->name('admin');

// Doctor Routes
Route::get('/doctor', 'AdminController@doctor')->middleware('admin')->name('doctor');
Route::get('/admin/doctor/index', 'DoctorController@index')->middleware('admin')->name('index');
Route::post('/admin/doctor/store', 'DoctorController@store')->middleware('admin')->name('store');

//Patients Routes
Route::get('/patient', 'PatientController@create')->middleware('admin')->name('patient.create');
Route::post('/patient', 'PatientController@store')->middleware('admin')->name('patient.store');


//Medicine Routes
Route::get('/admin/medicine/create', 'MedicineController@create')->middleware('admin')->name('medicine.create');
Route::post('/admin/medicine/store', 'MedicineController@store')->middleware('admin')->name('medicine.store');
Route::get('/admin/medicine/edit/{id}', 'MedicineController@edit')->middleware('admin')->name('medicine.edit');
Route::post('/admin/medicine/update/{id}', 'MedicineController@update')->middleware('admin')->name('medicine.update');
Route::get('/admin/medicine/delete/{id}', 'MedicineController@delete')->middleware('admin')->name('medicine.delete');

//Test Routes
Route::get('/admin/test/create', 'TestController@create')->middleware('admin')->name('test.create');
Route::post('/admin/test/store', 'TestController@store')->middleware('admin')->name('test.store');
Route::get('/admin/test/edit/{id}', 'TestController@edit')->middleware('admin')->name('test.edit');
Route::post('/admin/test/update/{id}', 'TestController@update')->middleware('admin')->name('test.update');
Route::get('/admin/test/delete/{id}', 'TestController@delete')->middleware('admin')->name('test.delete');

//symptoms Routes
Route::get('/admin/symptom/create', 'SymptomController@create')->middleware('admin')->name('symptom.create');
Route::post('/admin/symptom/store', 'SymptomController@store')->middleware('admin')->name('symptom.store');
Route::get('/admin/symptom/edit/{id}', 'SymptomController@edit')->middleware('admin')->name('symptom.edit');
Route::post('/admin/symptom/update/{id}', 'SymptomController@update')->middleware('admin')->name('symptom.update');
Route::get('/admin/symptom/delete/{id}', 'SymptomController@delete')->middleware('admin')->name('symptom.delete');

//Advices Routes
Route::get('/admin/advice/create', 'AdviceController@create')->middleware('admin')->name('advice.create');
Route::post('/admin/advice/store', 'AdviceController@store')->middleware('admin')->name('advice.store');
Route::get('/admin/advice/edit/{id}', 'AdviceController@edit')->middleware('admin')->name('advice.edit');
Route::post('/admin/advice/update/{id}', 'AdviceController@update')->middleware('admin')->name('advice.update');
Route::get('/admin/advice/delete/{id}', 'AdviceController@delete')->middleware('admin')->name('advice.delete');




//Visitors Route
Route::group(['middleware' => 'visitors'], function(){

	Route::get('/register', 'RegisterController@register')->name('register');
	Route::post('/register', 'RegisterController@postRegister')->name('user.register');
	Route::get('/login', 'LoginController@login')->name('login');
	Route::post('/login', 'LoginController@postLogin')->name('user.login');

});

Route::post('/logout', 'LoginController@logout')->name('logout');

//Assistants Routes
Route::get('/assistant', 'AssistantController@assistant')->middleware('assistant');
