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

Route::group(['prefix' => 'employees','as' => 'employees.'], function(){
    Route::get('/', 'EmployeeController@index')->name('index');
    Route::get('/{id}/edit','EmployeeController@edit')->name('edit');
    Route::get('/{id}/delete','EmployeeController@destroy')->name('destroy');
    Route::get('/create','EmployeeController@create')->name('create');
    Route::post('/create','EmployeeController@store')->name('store');
    Route::post('/update','EmployeeController@update')->name('update');
});


//Route::resource('employees','EmployeeController');

