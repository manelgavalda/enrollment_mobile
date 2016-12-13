<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'web'], function () {
        Route::group(['middleware' => 'auth'], function () {
            Route::resource('enrollments', 'EnrollmentsController');
        });
    });

Route::group([
    'middleware' => 'api',
    'prefix' => 'api',
], function () {
    //Route::group(['prefix' => 'v1','middleware' => 'auth:api'], function () {
    Route::group(['prefix' => 'v1'], function () {
        Route::resource('enrollments', 'EnrollmentsController');
    });
});

//Route::group(['middleware' => 'auth'], function () {
//    Route::resource('enrollments', 'EnrollmentsController');
//});
