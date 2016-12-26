<?php

Route::group([
    'middleware' => 'web'], function () {
        Route::group(['middleware' => 'auth'], function () {
            Route::resource('enrollments', 'EnrollmentsController');
        });
        Route::group(['middleware' => 'auth'], function () {
            Route::resource('classrooms', 'ClassroomsController');
        });
        Route::group(['middleware' => 'auth'], function () {
            Route::resource('courses', 'CoursesController');
        });
        Route::group(['middleware' => 'auth'], function () {
            Route::resource('enrollmentStudySubmodules', 'EnrollmentStudySubmodulesController');
        });
        Route::group(['middleware' => 'auth'], function () {
            Route::resource('families', 'FamiliesController');
        });
        Route::group(['middleware' => 'auth'], function () {
            Route::resource('module', 'ModulesController');
        });
        Route::group(['middleware' => 'auth'], function () {
            Route::resource('cycles', 'CyclesController');
        });
        Route::group(['middleware' => 'auth'], function () {
            Route::resource('submodules', 'SubmodulesController');
        });
        Route::group(['middleware' => 'auth'], function () {
            Route::resource('submodulesType', 'SubmodulesTypeController');
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
    Route::group(['prefix' => 'v1'], function () {
        Route::resource('classrooms', 'ClassroomsController');
    });
    Route::group(['prefix' => 'v1'], function () {
        Route::resource('courses', 'CoursesController');
    });
    Route::group(['prefix' => 'v1'], function () {
        Route::resource('enrollmentStudySubmodules', 'EnrollmentStudySubmodulesController');
    });
    Route::group(['prefix' => 'v1'], function () {
        Route::resource('families', 'FamiliesController');
    });
    Route::group(['prefix' => 'v1'], function () {
        Route::resource('module', 'ModulesController');
    });
    Route::group(['prefix' => 'v1'], function () {
        Route::resource('cycles', 'CyclesController');
    });
    Route::group(['prefix' => 'v1'], function () {
        Route::resource('submodules', 'SubmodulesController');
    });
    Route::group(['prefix' => 'v1'], function () {
        Route::resource('submodulesType', 'SubmodulesTypeController');
    });
});
