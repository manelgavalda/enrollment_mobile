<?php

namespace Scool\EnrollmentMobile;

/**
 * Class ScoolEnrollmentMobile
 * @package Scool\EnrollmentMobile
 */
class ScoolEnrollmentMobile
{
    /**
     * @return array
     */
    public static function factories()
    {
        return [
            SCOOL_ENROLLMENT_MOBILE_PATH . '/database/factories/EnrollmentFactory.php' =>
                database_path('/factories/EnrollmentFactory.php'),
        ];
    }

    /**
     * @return array
     */
    public static function configs()
    {
        return [
            SCOOL_ENROLLMENT_MOBILE_PATH . '/config/enrollment_mobile.php' =>
                config_path('enrollment_mobile.php'),
        ];
    }
}
