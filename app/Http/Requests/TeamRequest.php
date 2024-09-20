<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'sport_id' => 'required',
            'image' => [request()->isMethod('post') ? 'required' : '','image','mimes:png,jpg','max:2048'],
            'coach_id' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'sport_id' => 'The sport field is required.',
            'coach_id' => 'The coach field is required.',
        ];
    }
}
