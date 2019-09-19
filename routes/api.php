<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['auth:api', 'cors']], function(){
    Route::get('company', 'CompanyController@index');
    Route::get('company/{company}', 'CompanyController@show');
    Route::post('company','CompanyController@store');
    Route::put('company/{company}', 'CompanyController@update');
    Route::delete('company/{company}', 'CompanyController@delete');

    Route::get('employee', 'EmployeeController@index');
    Route::get('employee/{employee}', 'EmployeeController@show');
    Route::post('employee','EmployeeController@store');
    Route::put('employee/{employee}', 'EmployeeController@update');
    Route::delete('employee/{employee}', 'EmployeeController@delete');
});

Route::post('register',array('middleware'=> 'cors', 'uses' => 'Auth\RegisterController@register'));
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');
