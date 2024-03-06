<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'firstname' => 'string|max:255',
            'lastname' => 'string|max:255',
            'experience' => 'nullable|numeric',
            'education' => 'boolean',
            'salary' => 'nullable|integer',
            'habits' => 'nullable|string',
        ];
    }
}
