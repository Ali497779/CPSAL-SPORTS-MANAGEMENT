<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SessionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'sport_id' => ['required', 'numeric'],
            'is_oppenent' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'sport_id.required' => 'Sport field is required',
        ];
    }
}
