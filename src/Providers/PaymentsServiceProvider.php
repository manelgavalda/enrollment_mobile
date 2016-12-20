<?php

namespace Scool\EnrollmentMobile\Providers;

use Acacha\Names\Providers\NamesServiceProvider;
<<<<<<< HEAD:src/Providers/EnrollmentMobileServiceProvider.php
use Acacha\Stateful\Providers\StatefulServiceProvider;
=======
>>>>>>> 92a55437464d45d8f28bae26a5a84fc695a03898:src/Providers/PaymentsServiceProvider.php
use Illuminate\Support\ServiceProvider;
use Scool\EnrollmentMobile\ScoolEnrollmentMobile;

/**
     * Class EnrollmentServiceProvider
     * @package Scool\Enrollment\Providers
     */
    class PaymentsServiceProvider extends ServiceProvider
    {
        public function register()
        {
            if (!defined('SCOOL_ENROLLMENT_MOBILE_PATH')) {
                define('SCOOL_ENROLLMENT_MOBILE_PATH', realpath(__DIR__.'/../../'));
            }

<<<<<<< HEAD:src/Providers/EnrollmentMobileServiceProvider.php
            $this->registerNameServiceProvider();

            $this->registerStatefulEloquentServiceProvider();
=======
            $this->app->register(NamesServiceProvider::class);
>>>>>>> 92a55437464d45d8f28bae26a5a84fc695a03898:src/Providers/PaymentsServiceProvider.php

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
            $this->loadMigrationsFrom(SCOOL_ENROLLMENT_MOBILE_PATH . '/database/migrations');
        }

        public function publishFactories()
        {
            $this->publishes(
                ScoolEnrollmentMobile::factories(), "scool_enrollment_mobile"
        );
        }


        private function publishConfig()
        {
            $this->publishes(
                    ScoolEnrollmentMobile::configs(), "scool_enrollment_mobile"
                );
            $this->mergeConfigFrom(
                SCOOL_ENROLLMENT_MOBILE_PATH . '/config/payment.php', 'scool_enrollment_mobile'
            );
        }

        public function publishTests()
        {
            $this->publishes(
                [
                    SCOOL_ENROLLMENT_MOBILE_PATH .'/tests/EnrollmentMobileTest.php' => 'tests/EnrollmentMobileTest.php'
                ], "scool_enrollment_mobile"
            );
        }

        /*
         * Register acacha/names Service Provider.
         *
         */
        protected function registerNameServiceProvider()
        {
            $this->app->register(NamesServiceProvider::class);
        }

        /*
         * Register acacha/stateful-eloquent Service Provider.
         *
         */
        protected function registerStatefulEloquentServiceProvider()
        {
            $this->app->register(StatefulServiceProvider::class);
        }
    }
