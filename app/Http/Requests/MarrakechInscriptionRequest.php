<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MarrakechInscriptionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nom' => 'required|string|max:60',
            'prenom' => 'required|string|max:60',
            'date_naissance' => 'required|date',
            'lieu_naissance' => 'required|string|max:100',
            'nationalite' => 'required|string|max:50',
            'type_document' => 'required|in:Passport,CIN',
            'numero_document' => 'required|string|max:20',
            'adresse' => 'required|string|max:255',
            'code_postal' => 'required|string|max:10',
            'ville' => 'required|string|max:50',
            'tele' => 'required|string|max:15',
            'email' => 'required|email|max:200',
            'langues_parlees' => 'required|string|max:100',
            'nom_professeur' => 'required|string|max:100',
            'etablissement_musical' => 'required|string|max:100',
            'categorie' => 'required|string|max:50',
            'oeuvre' => 'required|string|max:100',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
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

            'date_naissance.required' => 'Le champ "Date de naissance" est obligatoire.',
            'date_naissance.date' => 'Le champ "Date de naissance" doit être une date valide.',

            'lieu_naissance.required' => 'Le champ "Lieu de naissance" est obligatoire.',
            'lieu_naissance.string' => 'Le champ "Lieu de naissance" doit être une chaîne de caractères.',
            'lieu_naissance.max' => 'Le champ "Lieu de naissance" ne doit pas dépasser 100 caractères.',

            'nationalite.required' => 'Le champ "Nationalité" est obligatoire.',
            'nationalite.string' => 'Le champ "Nationalité" doit être une chaîne de caractères.',
            'nationalite.max' => 'Le champ "Nationalité" ne doit pas dépasser 50 caractères.',

            'type_document.required' => 'Le champ "Type de document" est obligatoire.',
            'type_document.in' => 'Le champ "Type de document" doit être "Passport" ou "CIN".',

            'numero_document.required' => 'Le champ "Numéro de document" est obligatoire.',
            'numero_document.string' => 'Le champ "Numéro de document" doit être une chaîne de caractères.',
            'numero_document.max' => 'Le champ "Numéro de document" ne doit pas dépasser 20 caractères.',

            'adresse.required' => 'Le champ "Adresse" est obligatoire.',
            'adresse.string' => 'Le champ "Adresse" doit être une chaîne de caractères.',
            'adresse.max' => 'Le champ "Adresse" ne doit pas dépasser 255 caractères.',

            'code_postal.required' => 'Le champ "Code postal" est obligatoire.',
            'code_postal.string' => 'Le champ "Code postal" doit être une chaîne de caractères.',
            'code_postal.max' => 'Le champ "Code postal" ne doit pas dépasser 10 caractères.',

            'ville.required' => 'Le champ "Ville" est obligatoire.',
            'ville.string' => 'Le champ "Ville" doit être une chaîne de caractères.',
            'ville.max' => 'Le champ "Ville" ne doit pas dépasser 50 caractères.',

            'tele.required' => 'Le champ "Téléphone" est obligatoire.',
            'tele.string' => 'Le champ "Téléphone" doit être une chaîne de caractères.',
            'tele.max' => 'Le champ "Téléphone" ne doit pas dépasser 15 caractères.',

            'email.required' => 'Le champ "Email" est obligatoire.',
            'email.email' => 'Le champ "Email" doit être une adresse e-mail valide.',
            'email.max' => 'Le champ "Email" ne doit pas dépasser 200 caractères.',

            'langues_parlees.required' => 'Le champ "Langues parlées" est obligatoire.',
            'langues_parlees.string' => 'Le champ "Langues parlées" doit être une chaîne de caractères.',
            'langues_parlees.max' => 'Le champ "Langues parlées" ne doit pas dépasser 100 caractères.',

            'nom_professeur.required' => 'Le champ "Nom du professeur" est obligatoire.',
            'nom_professeur.string' => 'Le champ "Nom du professeur" doit être une chaîne de caractères.',
            'nom_professeur.max' => 'Le champ "Nom du professeur" ne doit pas dépasser 100 caractères.',

            'etablissement_musical.required' => 'Le champ "Établissement musical" est obligatoire.',
            'etablissement_musical.string' => 'Le champ "Établissement musical" doit être une chaîne de caractères.',
            'etablissement_musical.max' => 'Le champ "Établissement musical" ne doit pas dépasser 100 caractères.',

            'categorie.required' => 'Le champ "Catégorie" est obligatoire.',
            'categorie.string' => 'Le champ "Catégorie" doit être une chaîne de caractères.',
            'categorie.max' => 'Le champ "Catégorie" ne doit pas dépasser 50 caractères.',

            'oeuvre.required' => 'Le champ "Œuvre" est obligatoire.',
            'oeuvre.string' => 'Le champ "Œuvre" doit être une chaîne de caractères.',
            'oeuvre.max' => 'Le champ "Œuvre" ne doit pas dépasser 100 caractères.',
        ];
    }
}
