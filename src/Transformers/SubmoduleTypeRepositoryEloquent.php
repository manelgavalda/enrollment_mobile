<?php

namespace Scool\EnrollmentMobile\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Scool\EnrollmentMobile\Repositories\SubmoduleTypeRepository;
use Scool\EnrollmentMobile\Models\SubmoduleType;
use Scool\EnrollmentMobile\Validators\SubmoduleTypeValidator;

/**
 * Class SubmoduleTypeRepositoryEloquent
 * @package namespace Scool\EnrollmentMobile\Repositories;
 */
class SubmoduleTypeRepositoryEloquent extends BaseRepository implements SubmoduleTypeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return SubmoduleType::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return SubmoduleTypeValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
