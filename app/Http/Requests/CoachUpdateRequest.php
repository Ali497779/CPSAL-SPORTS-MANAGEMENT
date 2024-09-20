<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CoachUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'avatar' => ['nullable', 'max:1024'],
            'email' => ['required', Rule::unique('users')->ignore($this->coach->id), 'email'],
            'username' => ['required', Rule::unique('users')->ignore($this->coach->id), 'string'],
            'password' => ['nullable'],
            'password_confirmation' => ['nullable', 'confirmed'],
            'name' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'max:1024'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric', 'max:99999999999'],
            'fax' => ['required', 'numeric', 'max:99999999999'],
            'principal_name' => ['required', 'string', 'max:255'],
            'principal_phone' => ['required', 'numeric', 'max:99999999999'],
            'principal_email' => ['required', ! auth()->user()->hasRole('admin') ? Rule::unique('schools')->ignore($this->coach->load('school')->school->id) : '', 'email'],
            'director_name' => ['required', 'string', 'max:255'],
            'director_phone' => ['required', 'numeric', 'max:99999999999'],
            'director_email' => ['required', ! auth()->user()->hasRole('admin') ? Rule::unique('schools')->ignore($this->coach->load('school')->school->id) : '', 'email'],
        ];
    }
}
