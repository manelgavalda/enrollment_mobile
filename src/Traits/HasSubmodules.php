<?php

namespace Scool\EnrollmentMobile\Traits;

use Scool\EnrollmentMobile\Models\Submodule;

/**
 * Class HasSubmodules.
 *
 * @package Scool\Curriculum\Traits
 */
trait HasSubmodules
{
    /**
     * The study submodules that belongs to the model.
     */
    public function submodules()
    {
        return $this->belongsToMany(Submodule::class)->withTimestamps();
    }
}
