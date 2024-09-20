<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SportAttributeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'sport_id' => ['required', 'integer'],
            'names.*' => ['required', 'string', 'max:255'],
        ];
    }
    
    public function messages(): array
    {
        return [
            'sport_id.required' => "The sport field is required.",
            'names.*.required' => "The attribute name field is required.",
        ];
    }
}
