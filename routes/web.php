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

Route::get('/', 'PageController@index');

Route::get('/addEmployee', 'EmployeeController@addEmployee');
Route::post('/storeEmployee', 'EmployeeController@store');
Route::get('/editEmployee/{id}', 'EmployeeController@edit');
Route::get('/updateEmployee/{id}', 'EmployeeController@update');
Route::get('/destroyEmployee/{id}', 'EmployeeController@destroy');
Route::get('listEmployee', 'EmployeeController@list');

Route::get('/addDepartment', 'DepartmentController@addDepartment');
Route::post('/storeDepartment', 'DepartmentController@store');
Route::get('/editDepartment/{id}', 'DepartmentController@edit');
Route::get('/updateDepartment/{id}', 'DepartmentController@update');
Route::get('/destroyDepartment/{id}', 'DepartmentController@destroy');
Route::get('listDepartment', 'DepartmentController@list');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
