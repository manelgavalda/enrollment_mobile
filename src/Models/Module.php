<?php
namespace Scool\EnrollmentMobile\Models;
use Acacha\Names\Traits\Nameable;
use Illuminate\Database\Eloquent\Model;
use Scool\EnrollmentMobile\Traits\HasCourses;
use Scool\EnrollmentMobile\Traits\HasStudy;
use Scool\EnrollmentMobile\Traits\HasSubmodules;
/**
 * Class Module.
 *
 * @package Scool\EnrollmentMobile\Models
 */
class Module extends Model
{
    use HasCourses,HasSubmodules, HasStudy, Nameable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'order','study_id'];
}