<?php

namespace Scool\EnrollmentMobile\Traits;

use Scool\EnrollmentMobile\Models\Department;

/**
 * Class HasDepartments.
 *
 * @package Scool\Curriculum\Traits
 */
trait HasDepartments
{
    /**
     * Get the departments associated with the model.
     */
    public function departments()
    {
        return $this->belongsToMany(Department::class)->withTimestamps();
    }
}

