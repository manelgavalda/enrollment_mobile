<?php

namespace Scool\EnrollmentMobile\Transformers;

use League\Fractal\TransformerAbstract;
use Scool\EnrollmentMobile\Models\Family;

/**
 * Class FamilyTransformer
 * @package namespace Scool\EnrollmentMobile\Transformers;
 */
class FamilyTransformer extends TransformerAbstract
{

    /**
     * Transform the \Family entity
     * @param \Family $model
     *
     * @return array
     */
    public function transform(Family $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
