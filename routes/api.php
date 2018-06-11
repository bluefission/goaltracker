<?php

use Illuminate\Http\Request;

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

Route::namespace('Api')->group(function () {
	// API Calls
	Route::get('/v1/goals', 'GoalController@index');
	Route::get('/v1/goals/{goal}', 'GoalController@show');
	Route::post('/v1/goals', 'GoalController@store');
	Route::put('/v1/goals/{goal}', 'GoalController@update');
	Route::delete('/v1/goals/{goal}', 'GoalController@delete');

	Route::get('/v1/tasks', 'TaskController@index');
	Route::get('/v1/tasks/{task}', 'TaskController@show');
	Route::post('/v1/tasks', 'TaskController@store');
	Route::put('/v1/tasks/{task}', 'TaskController@update');
	Route::delete('/v1/tasks/{task}', 'TaskController@delete');

	Route::get('/v1/logs', 'LogController@index');
	Route::get('/v1/logs/{log}', 'LogController@show');
	Route::post('/v1/logs', 'LogController@store');
	Route::put('/v1/logs/{log}', 'LogController@update');
	Route::delete('/v1/logs/{log}', 'LogController@delete');

	Route::get('/v1/kpi_types', 'KpiTypeController@index');
	Route::get('/v1/kpi_types/{kpi_type}', 'KpiTypeController@show');
	Route::post('/v1/kpi_types', 'KpiTypeController@store');
	Route::put('/v1/kpi_types/{kpi_type}', 'KpiTypeController@update');
	Route::delete('/v1/kpi_types/{kpi_type}', 'KpiTypeController@delete');
});