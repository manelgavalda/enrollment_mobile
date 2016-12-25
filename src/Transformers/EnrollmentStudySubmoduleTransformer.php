<?php

namespace Scool\EnrollmentMobile\Transformers;

use League\Fractal\TransformerAbstract;
use Scool\EnrollmentMobile\Models\EnrollmentStudySubmodule;

/**
 * Class EnrollmentStudySubmoduleTransformer
 * @package namespace Scool\EnrollmentMobile\Transformers;
 */
class EnrollmentStudySubmoduleTransformer extends TransformerAbstract
{

    /**
     * Transform the \EnrollmentStudySubmodule entity
     * @param \EnrollmentStudySubmodule $model
     *
     * @return array
     */
    public function transform(EnrollmentStudySubmodule $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
