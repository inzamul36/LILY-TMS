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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

	Route::resource('dashboards','DashboardController');
	Route::resource('customers','CustomerController');
	Route::resource('orders','OrderController');
	Route::resource('salaries','SalaryController');
	Route::resource('staffs','StaffController');
	Route::resource('measurements','MeasurementController');

	Route::get('/', 'DashboardController@index');

	Route::get('logout', function (){
        Auth::logout();
        return redirect('/');
    });

    Route::get('password', 'OrderController@password');
	Route::post('password', 'OrderController@updatePassword');

});
