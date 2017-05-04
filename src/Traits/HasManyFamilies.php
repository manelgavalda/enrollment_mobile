<?php

namespace Scool\EnrollmentMobile\Traits;

use Scool\EnrollmentMobile\Models\Family;

/**
 * Class HasManyFamilies.
 *
 * @package Scool\Curriculum\Traits
 */
trait HasManyFamilies
{
    /**
     * Get the families associated with the model.
     */
    public function families()
    {
        return $this->hasMany(Family::class)->withTimestamps();
    }
}

