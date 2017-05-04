<?php

namespace Scool\EnrollmentMobile\Models;

use Acacha\Names\Traits\Nameable;
use Illuminate\Database\Eloquent\Model;
//use Scool\EnrollmentMobile\Traits\HasCourses;
//use Scool\EnrollmentMobile\Traits\HasDepartments;
//use Scool\EnrollmentMobile\Traits\HasLaw;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Scool\EnrollmentMobile\Traits\HasCourses;
use Scool\EnrollmentMobile\Traits\HasDepartments;
use Scool\EnrollmentMobile\Traits\HasLaw;

/**
 * Class Study.
 *
 * @package Scool\EnrollmentMobile\Models
 */
class Study extends Model implements Transformable
{
    use Nameable,TransformableTrait,HasLaw,HasDepartments,HasCourses,Nameable,TransformableTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
}
