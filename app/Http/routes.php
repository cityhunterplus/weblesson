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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hosts', 'HostsController@index');
Route::get('hosts/index', 'HostsController@index');
Route::get('hosts/show/{id}', 'HostsController@show');
Route::get('hosts/edit/{id}', 'HostsController@edit');
Route::post('hosts/update/{id}', 'HostsController@update');
Route::delete('hosts/destroy/{id}', 'HostsController@destroy');

Route::get('hardwareinventories/show/{id}', 'HardwareinventoriesController@show');
