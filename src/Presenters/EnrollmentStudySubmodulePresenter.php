<?php

namespace Scool\EnrollmentMobile\Presenters;

use Scool\EnrollmentMobile\Transformers\EnrollmentStudySubmoduleTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class EnrollmentStudySubmodulePresenter
 *
 * @package namespace Scool\EnrollmentMobile\Presenters;
 */
class EnrollmentStudySubmodulePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new EnrollmentStudySubmoduleTransformer();
    }
}
