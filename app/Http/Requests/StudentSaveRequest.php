<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentSaveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'direction_id' => 'integer|required|exists:directions,id',
            'category_id' => 'integer|required|exists:categories,id',
            'employment' => 'array|nullable',
            'ajob' => 'boolean|nullable',
            'plans' => 'array|nullable',
            'name' => 'string|required',
            'email' => 'email:rfc,dns',
            'specialty_activity' => 'boolean|nullable',
            'year_graduate' => 'date_format:Y|required',
            'agreement' => 'boolean|nullable',
        ];
    }
}
