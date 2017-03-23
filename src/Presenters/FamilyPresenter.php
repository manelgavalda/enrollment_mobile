<?php

namespace Scool\EnrollmentMobile\Presenters;

use Scool\EnrollmentMobile\Transformers\FamilyTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class FamilyPresenter
 *
 * @package namespace Scool\EnrollmentMobile\Presenters;
 */
class FamilyPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new FamilyTransformer();
    }
}
