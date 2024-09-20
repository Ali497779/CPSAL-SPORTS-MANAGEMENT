<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BattleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'session_id' => 'required',
            'by_team_id' => 'required',
            'battle_date' => 'required',
            'battle_time' => 'required',
            'destination' => 'required',
        ];
    
        if ($this->input('for_team_id') !== null) {
            $rules['for_team_id'] = 'required';
        }
    
        return $rules;
    }

    public function messages(): array
    {
        return [
            'session_id.required' => 'The session field is required.',
            'by_team_id.required' => 'The team 1 field is required.',
            'for_team_id.required' => 'The team 2 field is required.',
        ];
    }
}
