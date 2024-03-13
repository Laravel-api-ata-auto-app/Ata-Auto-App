<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'Name'=>[
                'required',
                'string'
            ],
            'Logo'=>[
                'nullable',
                'mimes:jpg,jpeg,png'
            ],
            'Made'=>[
                'required',
                'string'
            ],
            'Region'=>[
                'required',
                'string'
            ]
        ];
    }
}
