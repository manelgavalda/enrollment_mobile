<?php

namespace Scool\EnrollmentMobile\Models;

use Illuminate\Database\Eloquent\Model;
use Scool\EnrollmentMobile\Traits\HasDepartments;
use Scool\EnrollmentMobile\Traits\HasManyStudies;

class Family extends Model
{
    use HasManyStudies, HasDepartments;
}
