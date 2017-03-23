<?php

namespace Scool\EnrollmentMobile\Transformers;

use League\Fractal\TransformerAbstract;
use Scool\EnrollmentMobile\Models\Enrollment;

/**
 * Class EnrollmentTransformer
 * @package namespace App\Transformers;
 */
class EnrollmentTransformer extends TransformerAbstract
{

    /**
     * Transform the \Enrollment entity
     * @param \Enrollment $model
     *
     * @return array
     */
    public function transform(Enrollment $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'name'      => $model->id,
            'validated' => (bool)$model->validated,
            'finished' => (bool)$model->finished,
            'study_id' => (int)$model->study_id,
            'course_id' => (int)$model->course_id,
            'classroom_id' => (int)$model->classroom_id,


            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
