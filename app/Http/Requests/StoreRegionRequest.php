<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRegionRequest extends FormRequest
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
           'nom' => ['required', 'string', 'max:255', 'unique:regions,nom'],
           'chef_lieu' => ['required','string', 'max:255'],
           'superficie' => ['required', 'integer', 'min:1000'],

            ];
   }


   public function messages(): array
   {
       return [
           'nom.required' => 'Le nom est obligatoire.',
           'nom.string' => 'Le nom doit être une chaîne de caractères.',
           'nom.max' => 'Le nom ne doit pas dépasser 255 caractères.',
           'nom.unique' => 'Le nom de la région existe déjà.',

           'chef_lieu.required' => 'Le chef-lieu est obligatoire.',
           'chef_lieu.string' => 'Le chef-lieu doit être une chaîne de caractères.',
           'chef_lieu.max' => 'Le chef-lieu ne doit pas dépasser 255 caractères.',
           

           'superficie.required' => 'La superficie est obligatoire.',
           'superficie.integer' => 'La superficie doit être un nombre entier en km².',
           'superficie.min' => 'La superficie doit être supérieure à 1000 km².'
       ];
   }

}
