<?php

use Illuminate\Http\Request;
use App\Models\User;

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

Route::post('/users/store', 'UserController@store');
Route::get('/users', 'UserController@apiIndex')->middleware('cors');
Route::post('/vehicles/store', 'VehicleController@apiStore')->name('api.vehicles.store');
Route::get('/vehicles/list/{search?}/{type?}', 'VehicleController@apiIndex')->middleware('cors');
Route::get('/vehicles/mark', 'VehicleController@apiListByMark')->middleware('cors');

Route::group(['prefix' => 'v1'], function () {
    Route::post('vehicles', 'VehiclesApiController@store')->name('api/v1/vehicles');
});
