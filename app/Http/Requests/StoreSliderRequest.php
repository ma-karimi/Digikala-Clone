<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSliderRequest extends FormRequest
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
            'location' => ['required', 'string', 'max:255'],
            'category_id' => ['sometimes'],
            'alt' => ['sometimes', 'string', 'max:255'],
            'images' => ['required'],
        ];
    }
}
