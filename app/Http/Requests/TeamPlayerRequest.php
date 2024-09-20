<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamPlayerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'names.*.name' => 'required',
            'names.*.attributes.*' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'names.*.name' => 'Player name is required',
            'names.*.attributes.*' => 'Player attribute is required',
        ];
    }
}
