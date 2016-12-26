<?php

namespace Scool\EnrollmentMobile\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Scool\EnrollmentMobile\Repositories\FamilyRepository;
use Scool\EnrollmentMobile\Models\Family;
use Scool\EnrollmentMobile\Validators\FamilyValidator;

/**
 * Class FamilyRepositoryEloquent
 * @package namespace Scool\EnrollmentMobile\Repositories;
 */
class FamilyRepositoryEloquent extends BaseRepository implements FamilyRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Family::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return FamilyValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
