<?php

namespace Scool\EnrollmentMobile\Presenters;

use Scool\EnrollmentMobile\Transformers\ClassroomTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ClassroomPresenter
 *
 * @package namespace App\Presenters;
 */
class ClassroomPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ClassroomTransformer();
    }
}
