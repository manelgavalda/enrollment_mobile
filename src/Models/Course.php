<?php

namespace Scool\EnrollmentMobile\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Course
 * @package Scool\Enrollment
 */
class Course extends Model implements Transformable
{
    use TransformableTrait;
    //
}
