<?php

namespace Scool\EnrollmentMobile\Transformers;

use League\Fractal\TransformerAbstract;
use Scool\EnrollmentMobile\Models\SubmoduleType;

/**
 * Class SubmoduleTypeTransformer
 * @package namespace Scool\EnrollmentMobile\Transformers;
 */
class SubmoduleTypeTransformer extends TransformerAbstract
{

    /**
     * Transform the \SubmoduleType entity
     * @param \SubmoduleType $model
     *
     * @return array
     */
    public function transform(SubmoduleType $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
