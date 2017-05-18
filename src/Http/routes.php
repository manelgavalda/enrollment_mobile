<?php

Route::group([
    'middleware' => 'web'], function () {
        Route::group(['middleware' => 'auth'], function () {
            Route::resource('enrollments', 'EnrollmentsController');
            Route::resource('classrooms', 'ClassroomsController');
            Route::resource('courses', 'CoursesController');
            Route::resource('enrollmentStudySubmodules', 'EnrollmentStudySubmodulesController');
            Route::resource('families', 'FamiliesController');
            Route::resource('modules', 'ModulesController');
            Route::resource('cycles', 'CyclesController');
            Route::resource('submodules', 'SubmodulesController');
            Route::resource('submoduleTypes', 'SubmoduleTypesController');
            Route::resource('dashboard', 'DashboardController');

            //Dashboard
            Route::get('activity-feed', 'DashboardController@fetchActivityFeed');
            Route::get('dashboard/{model}/number', 'DashboardController@Number')->name('model-number');
            Route::get('create/random/{model}', 'DashboardController@createRandom')->name('createRandom');
        });
    });


Route::group([
    'middleware' => 'auth:api',
    'prefix' => 'api',
], function () {
    //Route::group(['prefix' => 'v1','middleware' => 'auth:api'], function () {
    Route::group(['prefix' => 'v1'], function () {
        Route::resource('enrollments', 'EnrollmentsController');
        Route::resource('classrooms', 'ClassroomsController');
        Route::resource('courses', 'CoursesController');
        Route::resource('enrollmentStudySubmodules', 'EnrollmentStudySubmodulesController');
        Route::resource('module', 'ModulesController');
        Route::resource('cycles', 'CyclesController');
        Route::resource('submodules', 'SubmodulesController');
        Route::resource('submoduleTypes', 'SubmoduleTypesController');
        Route::resource('dashboard', 'DashboardController');
    });
});
