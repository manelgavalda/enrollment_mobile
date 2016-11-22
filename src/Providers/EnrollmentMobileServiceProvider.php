<?php

namespace Scool\Enrollment\Providers;

    use Illuminate\Support\ServiceProvider;

    /**
     * Class EnrollmentServiceProvider
     * @package Scool\Enrollment\Providers
     */
    class EnrollmentMobileServiceProvider extends ServiceProvider {

    public function register()
    {
         if(!defined('SCOOL_ENROLLMENTMOBILE_PATH')){
             define('SCOOL_ENROLLMENTMOBILE_PATH', realpath(__DIR__. '/../../'));
         }
    }

    public function boot()
    {
        $this->loadMigrations();
        $this->publishFactories();
        $this->publishTests();
    }

    public function loadMigrations()
    {
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
    }

    public function publishFactories(){
        $this->publishes(
          [__DIR__.'/../../database/Enrollment.php' =>
          database_path().'/factories/Enrollment.php'],
            "scool_enrollment"
        );
    }

    public function publishTests()
    {
        $this->publishes([
            'tests/EnrollmentMobileTest.php',
            'tests/EnrollmentMobileTest.php'
        ]);
    }
}