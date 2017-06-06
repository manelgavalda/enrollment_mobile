<?php

namespace Scool\EnrollmentMobile\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Scool\EnrollmentMobile\Traits\HasSubmodules;

/**
 * Class Course
 * @package Scool\EnrollmentMobile\Models
 */
class Course extends Model implements Transformable
{
    use TransformableTrait, HasSubmodules;
    protected $fillable = [];

    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class, 'enrollment_id');
    }
}
