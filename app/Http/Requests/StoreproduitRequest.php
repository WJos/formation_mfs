<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreproduitRequest extends FormRequest
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
           'quantite' => ['required', 'integer', 'min:0'],
           'prix' => ['required','numeric', 'min:0'],   
       ];
   }


   public function messages(): array
   {
       return [
           'nom.required' => 'Le nom est obligatoire.',
           'nom.string' => 'Le nom doit être une chaîne de caractères.',
           'nom.max' => 'Le nom ne doit pas dépasser 255 caractères.',


          'prix.required' => 'Le prix est obligatoire.',
            'prix.numeric' => 'Le prix doit être un nombre.',
            'prix.min' => 'Le prix ne peut pas être négatif.',

            'quantite.required' => 'La quantité est obligatoire.',
            'quantite.integer' => 'La quantité doit être un nombre entier.',
            'quantite.min' => 'La quantité ne peut pas être négative.',
       ];
   }


}