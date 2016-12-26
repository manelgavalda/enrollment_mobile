<?php

namespace Scool\EnrollmentMobile\Presenters;

use Scool\EnrollmentMobile\Transformers\SubmoduleTypeTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class SubmoduleTypePresenter
 *
 * @package namespace Scool\EnrollmentMobile\Presenters;
 */
class SubmoduleTypePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new SubmoduleTypeTransformer();
    }
}
