<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'en_title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255'],
            'price' => ['required','numeric'],
            'quantity' => ['required','numeric'],
            'brand' => ['sometimes', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255'],
            'images' => ['sometimes','image'],
            'alt' => ['required', 'string', 'max:255'],
            'detail' => ['required',],
            'review' => ['required', 'string'],
        ];
    }
}
