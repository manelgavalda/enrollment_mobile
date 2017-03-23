<?php

namespace Scool\EnrollmentMobile\Presenters;

use Scool\EnrollmentMobile\Transformers\CycleTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class CyclePresenter
 *
 * @package namespace Scool\EnrollmentMobile\Presenters;
 */
class CyclePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CycleTransformer();
    }
}
