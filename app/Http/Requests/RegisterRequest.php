<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

      class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => ['required', 'unique:users', 'email'],
            'username' => ['required', 'unique:users', 'string'],
            'password' => ['required', 'string', 'confirmed'],
            // ',Password::min(8)->mixedCase()->numbers()->symbols()->uncompromised(),
        ];
    }
}
