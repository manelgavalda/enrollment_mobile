<?php

namespace Scool\EnrollmentMobile\Transformers;

use League\Fractal\TransformerAbstract;
use Scool\EnrollmentMobile\Models\Cycle;

/**
 * Class CycleTransformer
 * @package namespace Scool\EnrollmentMobile\Transformers;
 */
class CycleTransformer extends TransformerAbstract
{

    /**
     * Transform the \Cycle entity
     * @param \Cycle $model
     *
     * @return array
     */
    public function transform(Cycle $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
