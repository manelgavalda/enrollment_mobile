<?php

namespace Scool\EnrollmentMobile\Presenters;

use Scool\EnrollmentMobile\Transformers\ModuleTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ModulePresenter
 *
 * @package namespace Scool\EnrollmentMobile\Presenters;
 */
class ModulePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ModuleTransformer();
    }
}
