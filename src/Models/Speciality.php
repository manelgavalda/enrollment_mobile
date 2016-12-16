<?php
namespace Scool\EnrollmentMobile\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Speciality.
 *
 * @package Scool\EnrollmentMobile\Models
 */
class Speciality extends Model
{
    /**
     * The teachers that belongs to the speciality.
     */
    public function teachers()
    {
        return $this->belongsToMany(config('enrollment_mobile.user_class'));
    }
    /**
     * The study submodules that belongs to the speciality.
     */
    public function study_submodules()
    {
        return $this->belongsToMany(Submodule::class);
    }
}