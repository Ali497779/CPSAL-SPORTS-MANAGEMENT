<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class SchoolRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'image' => [request()->isMethod('post') ? 'required' : '', 'image', 'max:2048'],
            'address' => 'required',
            'phone' => ['required', 'numeric'],
            'fax' => ['required', 'numeric'],
            'coach_id' => 'required',
            'principal_name' => 'required',
            'principal_phone' => 'required',
            'principal_email' => 'required',
            'director_name' => 'required',
            'director_phone' => 'required',
            'director_email' => ['required'],
        ];
    }
}
