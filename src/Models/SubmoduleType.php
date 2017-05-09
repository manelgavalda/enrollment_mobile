<?php

namespace Scool\EnrollmentMobile\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class SubmoduleType
 * @package Scool\EnrollmentMobile\Models
 */
class SubmoduleType extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [];
}
