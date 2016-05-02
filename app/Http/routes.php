<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@index');

Route::get('about','PagesController@about');

Route::get('visits', 'VisitsController@index');
Route::get('visits/{visit}', 'VisitsController@show');
Route::post('visits/{visit}/observations', 'ObservationsController@store');

Route::get('observations/{observation}/edit', 'ObservationsController@edit');
Route::patch('observations/{observation}/update', 'ObservationsController@update');