<?php

namespace Scool\EnrollmentMobile\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Scool\EnrollmentMobile\Repositories\ClassroomRepository;
use Scool\EnrollmentMobile\Models\Classroom;
use Scool\EnrollmentMobile\Validators\ClassroomValidator;

/**
 * Class ClassroomRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ClassroomRepositoryEloquent extends BaseRepository implements ClassroomRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Classroom::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return ClassroomValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
