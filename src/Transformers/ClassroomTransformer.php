<?php

namespace Scool\EnrollmentMobile\Transformers;

use League\Fractal\TransformerAbstract;
use Scool\EnrollmentMobile\Models\Classroom;

/**
 * Class ClassroomTransformer
 * @package namespace App\Transformers;
 */
class ClassroomTransformer extends TransformerAbstract
{

    /**
     * Transform the \Classroom entity
     * @param \Classroom $model
     *
     * @return array
     */
    public function transform(Classroom $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
