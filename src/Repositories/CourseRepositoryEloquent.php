<?php

namespace Scool\EnrollmentMobile\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Scool\EnrollmentMobile\Repositories\CourseRepository;
use Scool\EnrollmentMobile\Models\Course;
use Scool\EnrollmentMobile\Validators\CourseValidator;

/**
 * Class CourseRepositoryEloquent
 * @package namespace Scool\EnrollmentMobile\Repositories;
 */
class CourseRepositoryEloquent extends BaseRepository implements CourseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Course::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {
        return CourseValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
