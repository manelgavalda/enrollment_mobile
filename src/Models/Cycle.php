<?php

namespace Scool\EnrollmentMobile\Models;

use Illuminate\Database\Eloquent\Model;
use Scool\EnrollmentMobile\Traits\HasManyStudies;

//use Scool\EnrollmentMobile\Traits\HasManyStudies;

class Cycle extends Model
{
    use HasManyStudies;
}
