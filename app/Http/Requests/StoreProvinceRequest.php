<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreProvinceRequest extends FormRequest
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
            //
            'nom' => 'required|string|max:255',

        ];
    }
    public function messages(): array
    {
        return [
            'nom.required' => 'Le nom de la province est requis.',
            'nom.string' => 'Le nom de la province doit être une chaîne de caractères.',
            'nom.max' => 'Le nom de la province ne doit pas dépasser 255 caractères.',
        ];
    }
}
