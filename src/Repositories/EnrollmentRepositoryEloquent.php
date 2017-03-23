<?php

namespace Scool\EnrollmentMobile\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Scool\EnrollmentMobile\Repositories\EnrollmentRepository;
use Scool\EnrollmentMobile\Models\Enrollment;
use Scool\EnrollmentMobile\Validators\EnrollmentValidator;

/**
 * Class EnrollmentRepositoryEloquent
 * @package namespace App\Repositories;
 */
class EnrollmentRepositoryEloquent extends BaseRepository implements EnrollmentRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Enrollment::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {
        return EnrollmentValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
