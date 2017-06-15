<?php

namespace Scool\EnrollmentMobile\Models;

use Acacha\Names\Traits\Nameable;

use Acacha\Stateful\Traits\StatefulTrait;
use Manelgavalda\EnrollmentMobileTest\User;
use Scool\EnrollmentMobile\Events\EnrollmentCreated;
use Scool\EnrollmentMobile\Traits\RecordsActivity;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

//use Scool\Foundation\User;

/**
 * Class Enrollment
 * @package App\Entities
 */
class Enrollment extends Model implements Transformable
{
    use TransformableTrait,Nameable, RecordsActivity; // StatefulTrait;


    protected $fillable = ['id','name','validated','finished', 'user_id', 'study_id','course_id','classroom_id'];

    protected $states = [
        'User' => ['initial' => true],
        'Enrollments',
        'Study',
        'Module',
        'Active',
        'Submodule' => ['final' => true]
    ];

    protected $transitions = [
        'create' => [
            'from' => 'User',
            'to' => 'Enrollments'
        ],
        'chose_enrollment' => [
            'from' => 'Enrollments',
            'to' => 'Study'
        ],
        'chose_module' => [
            'from' => 'Study',
            'to' => 'Module'
        ],
        'chose_submodules' => [
            'from' => 'Module',
            'to' => 'Submodule'
        ],
        'enrollment_status' => [
            'from' => 'Submodule',
            'to' => 'Active'
        ]
    ];

    protected $events = [
        'created' => EnrollmentCreated::class
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(Scool\Foundation\User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function classroom()
    {
        return $this->hasOne("Scool\EnrollmentMobile\Models\Classroom");
    }

    public function course()
    {
        return $this->hasOne("Scool\EnrollmentMobile\Models\Course");
    }

    public function study()
    {
        return $this->hasOne("Scool\EnrollmentMobile\Models\Study");
    }


//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasOne
//     */
//    public function enrollment()
//    {
//        return $this->hasOne("Scool\EnrollmentMobile\Classroom");
//    }
}
