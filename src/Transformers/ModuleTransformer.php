<?php

namespace Scool\EnrollmentMobile\Transformers;

use League\Fractal\TransformerAbstract;
use Scool\EnrollmentMobile\Models\Module;

/**
 * Class ModuleTransformer
 * @package namespace Scool\EnrollmentMobile\Transformers;
 */
class ModuleTransformer extends TransformerAbstract
{

    /**
     * Transform the \Module entity
     * @param \Module $model
     *
     * @return array
     */
    public function transform(Module $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
