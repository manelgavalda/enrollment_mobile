<?php

namespace Scool\EnrollmentMobile\Traits;

use Scool\EnrollmentMobile\Models\Study;

/**
 * Class HasStudy.
 *
 * @package Scool\Curriculum\Traits
 */
trait HasStudy
{
    /**
     * Get the study that owns the module.
     */
    public function study()
    {
        return $this->belongsTo(Study::class)->withTimestamps();
    }
}

