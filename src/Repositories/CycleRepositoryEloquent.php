<?php

namespace Scool\EnrollmentMobile\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Scool\EnrollmentMobile\Repositories\CycleRepository;
use Scool\EnrollmentMobile\Models\Cycle;
use Scool\EnrollmentMobile\Validators\CycleValidator;

/**
 * Class CycleRepositoryEloquent
 * @package namespace Scool\EnrollmentMobile\Repositories;
 */
class CycleRepositoryEloquent extends BaseRepository implements CycleRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Cycle::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {
        return CycleValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
