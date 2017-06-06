<?php

namespace Scool\EnrollmentMobile\Traits;

use Scool\EnrollmentMobile\Models\Course;

/**
 * Class HasCourses.
 *
 * @package Scool\Curriculum\Traits
 */
trait HasCourses
{
    /**
     * The courses that belongs to the model.
     */
    public function courses()
    {
        return $this->belongsToMany(Course::class)->withTimestamps();
    }
}
