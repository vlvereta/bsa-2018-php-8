<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatedCurrencyRequest extends FormRequest
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
            'title'         => 'required|max:255',
            'short_name'    => 'required|between:2,255',
            'logo_url'      => 'required|url',
            'price'         => 'required|min:0|numeric'
        ];
    }

    public function messages()
    {
        return [
            'logo_url.url'          => 'The logo url format is invalid.',
            'price.min'             => 'The price must be at least 0.',
            'price.numeric'         => 'The price must be a number.'
        ];
    }
}
