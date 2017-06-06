<?php

namespace Scool\EnrollmentMobile\Traits;

use Scool\EnrollmentMobile\Models\Speciality;

trait HasSpecialities
{
    /**
     * The especialities that belongs to the model.
     */
    public function specialities()
    {
        return $this->belongsToMany(Speciality::class)->withTimestamps();
    }
}
