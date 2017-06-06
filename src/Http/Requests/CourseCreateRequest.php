<?php

namespace Scool\EnrollmentMobile\Http\Requests;

use Auth;
use Illuminate\Foundation\Http\FormRequest;
use Response;

class CourseCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->can('edit courses');
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

    public function forbiddenResponse()
    {
        return Response::make('Permission denied on creating courses', 403);
    }
}
