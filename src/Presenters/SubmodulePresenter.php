<?php

namespace Scool\EnrollmentMobile\Presenters;

use Scool\EnrollmentMobile\Transformers\SubmoduleTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class SubmodulePresenter
 *
 * @package namespace Scool\EnrollmentMobile\Presenters;
 */
class SubmodulePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new SubmoduleTransformer();
    }
}
