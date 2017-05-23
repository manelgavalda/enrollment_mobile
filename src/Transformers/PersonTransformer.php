<?php

namespace Scool\EnrollmentMobile\Transformers;

use League\Fractal\TransformerAbstract;
use Scool\EnrollmentMobile\Entities\Person;

/**
 * Class PersonTransformer
 * @package namespace Scool\EnrollmentMobile\Transformers;
 */
class PersonTransformer extends TransformerAbstract
{

    /**
     * Transform the \Person entity
     * @param \Person $model
     *
     * @return array
     */
    public function transform(Person $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
