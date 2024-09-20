<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddteamRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'session_id' => 'nullable',
            'team.*' => 'nullable',

        ];
    }
}
