<?php

namespace Scool\EnrollmentMobile\Traits;

use Scool\EnrollmentMobile\Models\Department;

/**
 * Class HasManyDepartments.
 *
 * @package Scool\Curriculum\Traits
 */
trait HasManyDepartments
{
    /**
     * Get the departments associated with the model.
     */
    public function departments()
    {
        return $this->hasMany(Department::class)->withTimestamps();
    }
}

