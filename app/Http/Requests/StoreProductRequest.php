<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
        #todo : detail should validate json type
        return [
            'title' => ['required', 'string', 'max:255'],
            'en-title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255'],
            'price' => ['required','numeric'],
            'quantity' => ['required','numeric'],
            'brand' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255'],
            'images' => ['required','image'],
            'alt' => ['required', 'string', 'max:255'],
            'detail' => ['required',],
            'review' => ['required', 'string'],
        ];
    }
}
