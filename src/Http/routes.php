<?php

use Illuminate\Support\Facades\Auth;
use Scool\EnrollmentMobile\Models\Enrollment;
use Scool\EnrollmentMobile\Models\Person;
use Scool\Foundation\User;

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
            Route::resource('people', 'PeopleController');

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
        Route::resource('modules', 'ModulesController');
        Route::resource('cycles', 'CyclesController');
        Route::resource('submodules', 'SubmodulesController');
        Route::resource('submoduleTypes', 'SubmoduleTypesController');
        Route::resource('dashboard', 'DashboardController');
        Route::resource('people', 'PeopleController');
        Route::get('/enrollments_from_user', function (Request $request) {
            //            return Enrollment::all();
//            $user = Auth::user();
            $enrollment_id = Auth::user()->enrollment_id;
            return Enrollment::find($enrollment_id);
        });
        Route::get('/person_from_user', function (Request $request) {
            //            return Enrollment::all();
//            $user = Auth::user();
            $user_id = Auth::user()->person_id;
            return Person::find($user_id);
        });
        Route::post('/modules_from_course', function (Request $request) {
            //            return Enrollment::all();
//            $user = Auth::user();
            return Person::find($user_id);
        });
    });
});
Route::resource('test/modules', 'ModulesController');

