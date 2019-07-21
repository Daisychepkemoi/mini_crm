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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/company', 'HomeController@index')->name('home');
Route::post('/createcompany', 'CompanyController@store')->name('createcompany');
Route::get('/createcompany', 'CompanyController@index')->name('createcompanview');
Route::get('/company/{id}', 'CompanyController@show')->name('viewonecompanydetails');
Route::get('/company/{id}/delete', 'CompanyController@destroy')->name('deletecompany');

// Route::get('/company/{id}/edit', 'CompanyController@edit')->name('editonecompanydetails');
Route::post('/company/{id}/edit', 'CompanyController@editcompany')->name('editonecompanydetails');


// Route::get('/company/{id}', 'HomeController@index')->name('home');
// Route::get('/company/{id}', 'HomeController@delete')->name('home');
Route::get('/companies', 'CompanyController@viewcompanies')->name('getcompanies');

// Route::get('/company/employees', 'EmployeeController@index')->name('getEmployees');
Route::get('/companies/employees', 'EmployeeController@index')->name('getEmployees');
// company/{{$company->id}}/employees
Route::get('/company/{id}/employees', 'EmployeeController@onecompanyemployees')->name('getallemployees');
Route::get('/company/employees/create', 'EmployeeController@create')->name('getallemployees');
Route::post('/company/employees/save', 'EmployeeController@store')->name('getallemployees');
Route::get('/company/{id}/employees/{employee}/editview', 'EmployeeController@editview')->name('getoneemployees');
Route::post('/company/{id}/employees/{employee}/edit', 'EmployeeController@saveedit')->name('getoneemployees');
Route::get('/company/employees/{employee}/create', 'EmployeeController@create')->name('createemployee');
Route::post('/company/employees/{employee}/store', 'EmployeeController@store')->name('createemployee');
Route::post('/company/{id}/employees/{employee}', 'EmployeeController@edit')->name('editemployee');
Route::get('/company/{id}/employees/{employee}/delete', 'EmployeeController@destroy')->name('deleteemployee');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/back', 'EmployeeController@backreturn')->name('back');
