<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoachStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'avatar' => ['nullable', 'image', 'mimes:png,jpg', 'max:1024'],
            'email' => ['required', 'unique:users', 'email'],
            'username' => ['required', 'unique:users', 'string'],
            'password' => ['required', 'string', 'confirmed'],
            'name' => ['required', 'string', 'max:255'],
            'image' => ['required', 'image', 'mimes:png,jpg', 'max:1024'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric', 'max:99999999999'],
            'fax' => ['required', 'numeric', 'max:99999999999'],
            'principal_name' => ['required', 'string', 'max:255'],
            'principal_phone' => ['required', 'numeric', 'max:99999999999'],
            'principal_email' => ['required', 'unique:schools', 'email'],
            'director_name' => ['required', 'string', 'max:255'],
            'director_phone' => ['required', 'numeric', 'max:99999999999'],
            'director_email' => ['required', 'unique:schools', 'email'],
        ];
    }
}
