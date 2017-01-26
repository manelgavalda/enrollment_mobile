<?php
namespace Scool\EnrollmentMobile\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

/**
 * Class EnrollmentDeleteRequest
 * @package Scool\EnrollmentMobile\Http\Requests
 */
class EnrollmentDeleteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->can('delete enrollments');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

        ];
    }

    public function forbiddenResponse()
    {
        return Response::make('Permission denied on deleting enrollment', 403);
    }

}