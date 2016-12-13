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
            SCOOL_ENROLLMENT_MOBILE_PATH . '/database/factories/EnrollmentMobileFactory.php' =>
                database_path('/factories/EnrollmentMobileFactory.php'),
//            SCOOL_ENROLLMENT_MOBILE_PATH . '/database/factories/CycleFactory.php' =>
//                database_path('/factories/CycleFactory.php'),
//            SCOOL_ENROLLMENT_MOBILE_PATH . '/database/factories/DepartmentFactory.php' =>
//                database_path('/factories/DepartmentFactory.php'),
//            SCOOL_ENROLLMENT_MOBILE_PATH . '/database/factories/LawFactory.php' =>
//                database_path('/factories/LawFactory.php'),
//            SCOOL_ENROLLMENT_MOBILE_PATH . '/database/factories/ModuleFactory.php' =>
//                database_path('/factories/ModuleFactory.php'),
//            SCOOL_ENROLLMENT_MOBILE_PATH . '/database/factories/SpecialityFactory.php' =>
//                database_path('/factories/SpecialityFactory.php'),
//            SCOOL_ENROLLMENT_MOBILE_PATH . '/database/factories/StudyFactory.php' =>
//                database_path('/factories/StudyFactory.php'),
//            SCOOL_ENROLLMENT_MOBILE_PATH . '/database/factories/SubmoduleFactory.php' =>
//                database_path('/factories/SubmoduleFactory.php'),
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
