<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SportAttributeUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'sport_id' => ['required', 'integer'],
            'name' => ['required', 'string', 'max:255'],
        ];
    }
}
