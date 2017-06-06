<?php

namespace Scool\EnrollmentMobile\Traits;

use Scool\EnrollmentMobile\Models\Study;

/**
 * Class HasManyStudies.
 *
 * @package Scool\Curriculum\Traits
 */
trait HasManyStudies
{
    /**
     * Get the studies associated with the model.
     */
    public function studies()
    {
        return $this->hasMany(Study::class)->withTimestamps();
    }
}
