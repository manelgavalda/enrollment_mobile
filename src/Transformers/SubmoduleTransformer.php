<?php

namespace Scool\EnrollmentMobile\Transformers;

use League\Fractal\TransformerAbstract;
use Scool\EnrollmentMobile\Models\Submodule;

/**
 * Class SubmoduleTransformer
 * @package namespace Scool\EnrollmentMobile\Transformers;
 */
class SubmoduleTransformer extends TransformerAbstract
{

    /**
     * Transform the \Submodule entity
     * @param \Submodule $model
     *
     * @return array
     */
    public function transform(Submodule $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
