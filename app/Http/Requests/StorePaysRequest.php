<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StorePaysRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom' => ['required', 'string', 'max:255'],
            'Iso2' => ['required', 'string', 'max:255'],
            'Iso3' => ['required', 'string', 'max:255'],

        ];
    }


    public function messages(): array
    {
        return [
            'nom.required' => 'Le nom est obligatoire.',
            'nom.string' => 'Le nom doit être une chaîne de caractères.',
            'nom.max' => 'Le nom ne doit pas dépasser 255 caractères.',

            'Iso2.required' => 'L’ISO2 est obligatoire.',
            'Iso2.string' => 'L’ISO2 doit être une chaîne de caractères.',
            'Iso2.max' => 'L’ISO2 ne doit pas dépasser 255 caractères.',

            'Iso3.required' => 'L’ISO3 est obligatoire.',
            'Iso3.string' => 'L’ISO3 doit être une chaîne de caractères.',
            'Iso3.max' => 'L’ISO3 ne doit pas dépasser 255 caractères.',

            
        ];
    }
}