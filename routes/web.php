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

Route::get('/users', 'UserController@index')->name('users');
Route::get('/users/list', 'UserController@list');
Route::get('/', 'UserController@react')->name('react');
Route::get('/vehicles', 'VehicleController@index')->name('vehicles');
Route::get('/vehicles/mark', 'VehicleController@mark')->name('vehicles.mark');
