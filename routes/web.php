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
})->name('home');

// Route::group(['prefix' => 'employees','as' => 'employees.'], function(){
//     Route::get('/', 'EmployeeController@index')->name('index');
//     Route::get('/{id}/edit','EmployeeController@edit')->name('edit');
//     Route::get('/{id}/delete','EmployeeController@destroy')->name('destroy');
//     Route::get('/create','EmployeeController@create')->name('create');
//     Route::post('/create','EmployeeController@store')->name('store');
//     Route::post('/update','EmployeeController@update')->name('update');
// });

Route::get('/employees', 'EmployeeController@index')->name('employees.index');
Route::get('/employees/{id}/edit','EmployeeController@edit')->name('employees.edit');
Route::get('/employees/{id}/delete','EmployeeController@destroy')->name('employees.destroy');
Route::get('/employees/create','EmployeeController@create')->name('employees.create');
Route::post('/employees/create','EmployeeController@store')->name('employees.store');
Route::post('/employees/update','EmployeeController@update')->name('employees.update');

//Route::resource('employees','EmployeeController');

