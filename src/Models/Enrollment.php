<?php

namespace Scool\EnrollmentMobile\Models;

use Acacha\Names\Traits\Nameable;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Enrollment
 * @package Scool\EnrollmentMobile\Models
 */
class Enrollment extends Model implements Transformable
{
    use TransformableTrait, Nameable;
    //

    protected $fillable['name'];
}
