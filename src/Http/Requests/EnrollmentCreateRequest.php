<?php

namespace Scool\EnrollmentMobile\Http\Requests;

use GuzzleHttp\Psr7\Response;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

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
        return Auth::user()->can('create enrollments');
        //return false; //Per defecte

        //De moment true
//if (auth:user()->can('update enrollments')) {
        //}
        //return false;
        //TODO: crear requests de show, delete... crear permissos amb un seed. (create writter(BREAD(Browse,Read...)). Crear rol manage per donar-li tots els anteriors.
    }

    public function forbiddenResponse()
    {

        return Response::make('Permission denied on create enrollment', 403);
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
