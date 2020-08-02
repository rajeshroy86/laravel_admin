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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', function () {
   return view('dashboard');
});
Route::get('/create-product', function () {
   return view('product.create');
});

Route::post('store-product', 'ProdctController@store')->name('product.store');
/*Route::get('/employees/{id}/edit','EmployeeController@edit')->name('employees.edit');
Route::get('/employees/{id}/delete','EmployeeController@destroy')->name('employees.destroy');
Route::get('/create','EmployeeController@create')->name('employees.create');
Route::post('/create','EmployeeController@store')->name('employees.store');
Route::post('/employee/update','EmployeeController@update')->name('employees.update')*/

