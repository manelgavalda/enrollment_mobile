<?php

namespace Scool\EnrollmentMobile\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Scool\EnrollmentMobile\Repositories\SubmoduleRepository;
use Scool\EnrollmentMobile\Models\Submodule;
use Scool\EnrollmentMobile\Validators\SubmoduleValidator;

/**
 * Class SubmoduleRepositoryEloquent
 * @package namespace Scool\EnrollmentMobile\Repositories;
 */
class SubmoduleRepositoryEloquent extends BaseRepository implements SubmoduleRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Submodule::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {
        return SubmoduleValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
