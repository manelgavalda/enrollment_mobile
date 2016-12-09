<?php

Route::group(['middleware' => 'auth'], function () {

    Route::resource('enrollments', 'EnrollmentsController');

});