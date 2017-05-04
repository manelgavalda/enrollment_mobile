<?php

namespace Scool\EnrollmentMobile\Traits;

use Scool\EnrollmentMobile\Models\Cycle;

/**
 * Class HasCycle.
 *
 * @package Scool\Curriculum\Traits
 */
trait HasCycle
{
    /**
     * Get the law associated with the model.
     */
    public function cycle()
    {
        return $this->hasOne(Cycle::class)->withTimestamps();
    }
}

