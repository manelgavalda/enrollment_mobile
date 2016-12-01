<?php

namespace Scool\EnrollmentMobile\Providers;

use Illuminate\Support\ServiceProvider;

    /**
     * Class EnrollmentServiceProvider
     * @package Scool\Enrollment\Providers
     */
    class EnrollmentMobileServiceProvider extends ServiceProvider
    {
        public function register()
        {
            if (!defined('SCOOL_ENROLLMENT_MOBILE_PATH')) {
                define('SCOOL_ENROLLMENT_MOBILE_PATH', realpath(__DIR__. '/../../'));
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

        public function publishFactories()
        {
            $this->publishes(
          [ SCOOL_ENROLLMENT_MOBILE_PATH . '/database/EnrollmentMobile.php' =>
            database_path().'/factories/EnrollmentMobileFactory.php'],
            "scool_enrollment_mobile"
        );
        }

        public function publishTests()
        {
            $this->publishes(
        [
            SCOOL_ENROLLMENT_MOBILE_PATH .
            '/tests/EnrollmentMobileTest.php' => 'tests/EnrollmentMobileTest.php'
        ], "scool_enrollment_mobile"
        );
        }
    }
