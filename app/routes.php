<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// For accessing the root of the app (not the API provider)
Route::get('/', function ()
{
    $presentTime = explode('-', \Carbon\Carbon::now()->toDateString());

    return Redirect::to('facts'.'/'.strtolower($presentTime[1]).'/'.$presentTime[2]);    
});

// For accessing the RESTful FactController
Route::controller('facts/{month?}/{day?}/{type?}', 'FactController');

// For accessing static content areas
Route::get('about', 'StaticContentController@about');

// For accessing the admin panel of the app
Route::group(array('prefix' => 'admin'), function()
{
    Route::controller('users', 'Admin_UserController');
});

// API provider that provides data through API to any consumer app
Route::group(array('prefix' => 'api/v1', 'before' => 'auth.basic'), function()
{
    Route::resource('fact', 'Api_FactController');   
});