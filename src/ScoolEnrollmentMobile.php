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
            SCOOL_ENROLLMENT_MOBILE_PATH . '/database/factories/ClassroomFactory.php' =>
                database_path('/factories/ClassroomFactory.php'),
            SCOOL_ENROLLMENT_MOBILE_PATH . '/database/factories/CycleFactory.php' =>
                database_path('/factories/CycleFactory.php'),
            SCOOL_ENROLLMENT_MOBILE_PATH . '/database/factories/DepartmentFactory.php' =>
                database_path('/factories/DepartmentFactory.php'),
            SCOOL_ENROLLMENT_MOBILE_PATH . '/database/factories/LawFactory.php' =>
                database_path('/factories/LawFactory.php'),
            SCOOL_ENROLLMENT_MOBILE_PATH . '/database/factories/ModuleFactory.php' =>
                database_path('/factories/ModuleFactory.php'),
            SCOOL_ENROLLMENT_MOBILE_PATH . '/database/factories/SpecialityFactory.php' =>
                database_path('/factories/SpecialityFactory.php'),
            SCOOL_ENROLLMENT_MOBILE_PATH . '/database/factories/StudyFactory.php' =>
                database_path('/factories/StudyFactory.php'),
            SCOOL_ENROLLMENT_MOBILE_PATH . '/database/factories/SubmoduleFactory.php' =>
                database_path('/factories/SubmoduleFactory.php'),
            SCOOL_ENROLLMENT_MOBILE_PATH . '/database/factories/CourseFactory.php' =>
                database_path('/factories/CourseFactory.php'),
            SCOOL_ENROLLMENT_MOBILE_PATH . '/database/factories/EnrollmentStudySubmoduleFactory.php' =>
                database_path('/factories/EnrollmentStudySubmoduleFactory.php'),
            SCOOL_ENROLLMENT_MOBILE_PATH . '/database/factories/PersonFactory.php' =>
                database_path('/factories/PersonFactory.php'),
        ];
    }

    /**
     * @return array
     */
    public static function configs()
    {
        return [
            SCOOL_ENROLLMENT_MOBILE_PATH . '/config/payment.php' =>
                config_path('payment.php'),
        ];
    }

    /**
     * @return array
     */
    public static function vue()
    {
        return [
            SCOOL_ENROLLMENT_MOBILE_PATH . '/resources/assets/js/components/dashboard/ActivityFeed.vue' =>
                resource_path('/assets/js/components/dashboard/ActivityFeed.vue'),
            SCOOL_ENROLLMENT_MOBILE_PATH . '/resources/assets/js/components/dashboard/IncreaseButton.vue' =>
                resource_path('/assets/js/components/dashboard/IncreaseButton.vue'),
            SCOOL_ENROLLMENT_MOBILE_PATH . '/resources/assets/js/components/dashboard/SmallBox.vue' =>
                resource_path('/assets/js/components/dashboard/SmallBox.vue'),
            SCOOL_ENROLLMENT_MOBILE_PATH . '/resources/assets/js/components/dashboard/Chart.vue' =>
                resource_path('/assets/js/components/dashboard/Chart.vue'),
        ];
    }
}
