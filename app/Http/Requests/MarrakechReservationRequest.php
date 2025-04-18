<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MarrakechReservationRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "nom_complet"=> "required|max:60|min:3|string",
            "email"=> "required|email|max:200|min:10|string",
            'tel' => 'required|string|max:15',
        ];
    }

    /**
     * Customize the validation messages.
     */
    public function messages()
    {
        return [
            'nom_complet.required' => 'Le champ du nom est requis.',
            'nom_complet.max' => 'Le nombre maximum de caractères pour le champ du nom est de 60.',
            'nom_complet.min' => 'Le nombre minimum de caractères pour le champ du nom est de 3.',
            'nom_complet.string' => 'Le champ du nom doit être une chaîne de caractères.',
            'email.required' => 'Le champ de l\'email est requis.',
            'email.max' => 'Le nombre maximum de caractères pour le champ de l\'email est de 200.',
            'email.min' => 'Le nombre minimum de caractères pour le champ de l\'email est de 10.',
            'email.string' => 'Le champ de l\'email doit être une chaîne de caractères.',
            'email.email' => 'Veuillez entrer une adresse email valide.',
            'tel.required' => 'Le champ "Téléphone" est obligatoire.',
            'tel.string' => 'Le champ "Téléphone" doit être une chaîne de caractères.',
            'tel.max' => 'Le champ "Téléphone" ne doit pas dépasser 15 caractères.',
        ];
    }
}
