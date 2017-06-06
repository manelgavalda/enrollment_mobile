<?php

namespace Scool\EnrollmentMobile\Traits;

use Scool\EnrollmentMobile\Models\Study;

/**
 * Class HasStudies.
 *
 * @package Scool\Curriculum\Traits
 */
trait HasStudies
{
    /**
     * Get the studies associated with the model.
     */
    public function studies()
    {
        return $this->belongsToMany(Study::class)->withTimestamps();
    }
}
