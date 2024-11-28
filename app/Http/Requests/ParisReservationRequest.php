<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParisReservationRequest extends FormRequest
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
            'nom' => 'required|string|max:60',
            'prenom' => 'required|string|max:60',
            "email"=> "required|email|max:200|min:10|string",
            'tel' => 'required|string|max:15',
            "billet" => 'required|in:ceremonie-de-cloture,vernissage-expo-histoire-du-piano,afterwork,concert-de-piano,recital-des-laureats'
        ];
    }

    /**
     * Customize the validation messages.
     */
    public function messages()
    {
        return [
            'nom.required' => 'Le champ "Nom" est obligatoire.',
            'nom.string' => 'Le champ "Nom" doit être une chaîne de caractères.',
            'nom.max' => 'Le champ "Nom" ne doit pas dépasser 60 caractères.',
            'prenom.required' => 'Le champ "Prénom" est obligatoire.',
            'prenom.string' => 'Le champ "Prénom" doit être une chaîne de caractères.',
            'prenom.max' => 'Le champ "Prénom" ne doit pas dépasser 60 caractères.',
            'email.required' => 'Le champ de l\'email est requis.',
            'email.max' => 'Le nombre maximum de caractères pour le champ de l\'email est de 200.',
            'email.min' => 'Le nombre minimum de caractères pour le champ de l\'email est de 10.',
            'email.string' => 'Le champ de l\'email doit être une chaîne de caractères.',
            'email.email' => 'Veuillez entrer une adresse email valide.',
            'tel.required' => 'Le champ "Téléphone" est obligatoire.',
            'tel.string' => 'Le champ "Téléphone" doit être une chaîne de caractères.',
            'tel.max' => 'Le champ "Téléphone" ne doit pas dépasser 15 caractères.',
            'billet.required' => 'Le champ "Billet" est obligatoire.',
            'billet.in' => 'Le champ "Billet" est obligatoire.'
        ];
    }
}
