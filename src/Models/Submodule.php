<?php

namespace Scool\EnrollmentMobile\Models;

use Acacha\Names\Traits\Nameable;
use Illuminate\Database\Eloquent\Model;

//use Scool\EnrollmentMobile\Traits\HasCourses;
//use Scool\EnrollmentMobile\Traits\HasModules;
//use Scool\EnrollmentMobile\Traits\HasSpecialities;
//use Scool\EnrollmentMobile\Traits\HasClassrooms;
//use Scool\EnrollmentMobile\Traits\HasManyStudies;

/**
 * Class Submodule.
 *
 * @package Scool\EnrollmentMobile\Models
 */
class Submodule extends Model
{
    //    use HasSpecialities, HasModules, HasClassrooms, HasCourses, HasManyStudies,Nameable;
    use Nameable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'order' , 'total_hours', 'week_hours', 'start_date', 'finish_date'];
    /**
     * Get the type os study submodules.
     */
    public function type()
    {
        return $this->belongsTo(SubmoduleType::class);
    }
}
