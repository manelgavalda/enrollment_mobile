<?php

namespace Scool\EnrollmentMobile\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class EnrollmentStudySubmodule extends Model implements Transformable
{
    public $timestamps = false;

    use TransformableTrait;

    protected $fillable = [];

}
