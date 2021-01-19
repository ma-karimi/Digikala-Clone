<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDiscountRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'value' => ['required', 'numeric'],
            'count' => ['sometimes', 'numeric'],
            'expire_time' => ['sometimes'],
            'max_price' => ['sometimes', 'numeric'],
            #todo: if count or max price not entered, error that they should be number
        ];
    }
}
