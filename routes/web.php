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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// API Calls
Route::get('/api/goals', 'Api\GoalController@index');
Route::get('/api/goals/{goal}', 'Api\GoalController@show');
Route::post('/api/goals', 'Api\GoalController@store');
Route::put('/api/goals/{goal}', 'Api\GoalController@update');
Route::delete('/api/goals/{goal}', 'Api\GoalController@delete');

Route::get('/api/tasks', 'Api\TaskController@index');
Route::get('/api/tasks/{task}', 'Api\TaskController@show');
Route::post('/api/tasks', 'Api\TaskController@store');
Route::put('/api/tasks/{task}', 'Api\TaskController@update');
Route::delete('/api/tasks/{task}', 'Api\TaskController@delete');

Route::get('/api/logs', 'Api\LogController@index');
Route::get('/api/logs/{log}', 'Api\LogController@show');
Route::post('/api/logs', 'Api\LogController@store');
Route::put('/api/logs/{log}', 'Api\LogController@update');
Route::delete('/api/logs/{log}', 'Api\LogController@delete');

Route::get('/api/kpi_types', 'Api\KpiTypeController@index');
Route::get('/api/kpi_types/{kpi_type}', 'Api\KpiTypeController@show');
Route::post('/api/kpi_types', 'Api\KpiTypeController@store');
Route::put('/api/kpi_types/{kpi_type}', 'Api\KpiTypeController@update');
Route::delete('/api/kpi_types/{kpi_type}', 'Api\KpiTypeController@delete');