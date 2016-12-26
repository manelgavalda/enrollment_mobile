<?php

namespace Scool\EnrollmentMobile\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Scool\EnrollmentMobile\Repositories\ModuleRepository;
use Scool\EnrollmentMobile\Models\Module;
use Scool\EnrollmentMobile\Validators\ModuleValidator;

/**
 * Class ModuleRepositoryEloquent
 * @package namespace Scool\EnrollmentMobile\Repositories;
 */
class ModuleRepositoryEloquent extends BaseRepository implements ModuleRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Module::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return ModuleValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
