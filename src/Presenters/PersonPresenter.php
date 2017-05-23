<?php

namespace Scool\EnrollmentMobile\Presenters;

use Scool\EnrollmentMobile\Transformers\PersonTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PersonPresenter
 *
 * @package namespace Scool\EnrollmentMobile\Presenters;
 */
class PersonPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PersonTransformer();
    }
}
