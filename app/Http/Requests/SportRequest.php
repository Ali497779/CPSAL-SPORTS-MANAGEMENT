<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SportRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'min_players' => ['required', 'integer', 'max:9999999999'],
            'max_players' => ['required', 'integer', 'max:9999999999'],
        ];
    }
}
