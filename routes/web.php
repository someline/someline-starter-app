<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Auth Routes
Auth::routes();

// Locale Routes
Route::group(['prefix' => 'locales'], function () {

    Route::get('/{locale}.js', '\Someline\Support\Controllers\LocaleController@getLocaleJs');

    Route::get('/switch/{locale}', '\Someline\Support\Controllers\LocaleController@getSwitchLocale');

});

// Basic Routes
Route::get('/home', 'HomeController@index');

// Image Routes
Route::get('/image/{name}', 'ImageController@showOriginalImage');
Route::post('/image', 'ImageController@postImage');

// Protected Routes
Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function () {
        return redirect('users');
    });

    Route::get('users', 'UserController@getUserList');

});

// Mobile Routes
Route::group(['prefix' => 'm'], function () {

    // redirect to home
    Route::get('/', function () {
        return redirect('m/home');
    });

    // home
    Route::group(['prefix' => 'home'], function () {

        Route::get('/', function () {
            return view('mobile.home');
        });

    });

    // me
    Route::group(['prefix' => 'me'], function () {

        Route::get('/', function () {
            return view('mobile.me');
        });

    });

});

// Console Routes
Route::group(['prefix' => 'console'], function () {

    // Protected Routes
    Route::group(['middleware' => 'auth'], function () {

        Route::get('/', 'ConsoleController@index');

    });

    Route::get('oauth', function () {
        return view('console.oauth');
    });

    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

});