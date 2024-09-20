<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'battle_id' => ['required', 'numeric'],
            'by_team_score' => ['required', 'numeric'],
            'for_team_score' => ['required', 'numeric'],
        ];
    }
}
