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

Route::get('/task', 'HomeController@task');

Route::post('/create', 'HomeController@create');

Route::delete('/task/delete/{id}', 'HomeController@delete');

Route::get('/task/update/{id}', 'HomeController@update');


Route::get('/history', 'HomeController@history');

Route::delete('/history/clear', 'HomeController@clearHistory');

Route::post('/history/restore/{id}', 'HomeController@restoreHistory');

Route::auth();

//Route::get('/home', 'HomeController@index');
