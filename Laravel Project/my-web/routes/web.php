<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('show', 'App\Http\Controllers\EmployeesController@index');
Route::get('/edit{id}', 'App\Http\Controllers\EmployeesController@editEmployee')->name('edit');
Route::post('/editEmployee{id}', 'App\Http\Controllers\EmployeesController@updateEmployee')->name('update');
Route::get('delete{id}', 'App\Http\Controllers\EmployeesController@deleteEmployee')->name('delete');

Route::controller(EmployeesController::class)->group(function(){

    Route::get('login', 'index2')->name('login');
    Route::get('register', 'register')->name('register');
    Route::get('logout', 'logout')->name('logout');

    Route::post('registerUser', 'registerUser')->name('login.registerUser');
    Route::post('loginUser', 'loginUser')->name('login.loginUser');
});

/*Route::get('show', 'App\Http\Controllers\EmployeesController@get_employee');*/
