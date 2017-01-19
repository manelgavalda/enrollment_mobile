<?php

namespace Scool\EnrollmentMobile\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

/**
 * Class EnrollmentCreateRequest
 * @package Scool\EnrollmentMobile\Http\Requests
 */
class EnrollmentBrowseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->can('list enrollments');
        //return false; //Per defecte

        //De moment true
//if (auth:user()->can('update enrollments')) {
        return true;
        //}
        //return false;
        //TODO: crear requests de show, delete... crear permissos amb un seed. (create writter(BREAD(Browse,Read...)). Crear rol manage per donar-li tots els anteriors.
    }



    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:5|max:30'
        ];
    }
}
