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
    return view('layouts.master');
});
Route::get('/dashboard', 'DashboardController@home')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/equipments/create', 'EquipmentsController@create')->name('equipments/create');

Route::post('/equipments', 'EquipmentsController@store');

Route::get('/equipments/view', 'EquipmentsController@index')->name('equipments/view');

Route::get('/facilities/create', 'FacilitiesController@create')->name('facilities/create');

Route::post('/facilities', 'FacilitiesController@store');

Route::get('/facilities/view', 'FacilitiesController@index')->name('facilities/view');