<?php

namespace Scool\EnrollmentMobile\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Scool\EnrollmentMobile\Repositories\EnrollmentStudySubmoduleRepository;
use Scool\EnrollmentMobile\Models\EnrollmentStudySubmodule;
use Scool\EnrollmentMobile\Validators\EnrollmentStudySubmoduleValidator;

/**
 * Class EnrollmentStudySubmoduleRepositoryEloquent
 * @package namespace Scool\EnrollmentMobile\Repositories;
 */
class EnrollmentStudySubmoduleRepositoryEloquent extends BaseRepository implements EnrollmentStudySubmoduleRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return EnrollmentStudySubmodule::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return EnrollmentStudySubmoduleValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
