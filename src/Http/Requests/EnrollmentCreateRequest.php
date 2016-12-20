<?php

namespace Scool\EnrollmentMobile\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class EnrollmentCreateRequest
 * @package Scool\EnrollmentMobile\Http\Requests
 */
class EnrollmentCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
<<<<<<< HEAD
        //return false; //Per defecte
=======
        //De moment true
>>>>>>> 92a55437464d45d8f28bae26a5a84fc695a03898
        return true;
    }



    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
