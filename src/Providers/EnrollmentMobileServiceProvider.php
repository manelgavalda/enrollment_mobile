<?php

namespace Scool\EnrollmentMobile\Providers;

use Acacha\Names\Providers\NamesServiceProvider;
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
                define('SCOOL_ENROLLMENT_MOBILE_PATH', realpath(__DIR__.'/../../'));
            }

            $this->registerNameServiceProvider();

            $this->app->bind(\Scool\EnrollmentMobile\Repositories\EnrollmentRepository::class, \Scool\EnrollmentMobile\Repositories\EnrollmentRepositoryEloquent::class);

//            $this->app->bind(StatsRepositoryInterface::class,function() {
//                return new CacheableStatsRepository(new StatsRepository());
//            });
        }

        public function boot()
        {
            $this->defineRoutes();
            $this->loadMigrations();
            $this->publishFactories();
            $this->publishConfig();
            $this->publishTests();
        }

        protected function defineRoutes()
        {
            if (!$this->app->routesAreCached()) {
                $router = app('router');
                $router->group(['namespace' => 'Scool\EnrollmentMobile\Http\Controllers'], function () {
                    require __DIR__.'/../Http/routes.php';
                });
            }
        }


        public function loadMigrations()
        {
            $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
            //$this->loadMigrationsFrom(SCOOL_ENROLLMENT_MOBILE_PATH.'/database/migrations');
        }

        public function publishFactories()
        {
            $this->publishes(
          [
              SCOOL_ENROLLMENT_MOBILE_PATH . '/database/factories/EnrollmentMobileFactory.php' =>
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
        private function publishConfig()
        {
            $this->publishes(
                [ SCOOL_ENROLLMENT_MOBILE_PATH . '/config/enrollment.php' =>
                    database_path().'/factories/EnrollmentMobileFactory.php'], "scool_enrollment_mobile"
            );
//            $this->mergeConfigFrom(
//                [
//                SCOOL_ENROLLMENT_MOBILE_PATH . '/config/enrollment_mobile.php'
//            => config_path() . 'enrollment_mobile'
//                ],"scool_enrollment_mobile"
//            );
        }

        protected function registerNameServiceProvider()
        {
            $this->app->register(NamesServiceProvider::class);
        }
    }
