<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class ReparateurInfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Vous devrez peut-être ajuster cette méthode en fonction de vos besoins d'autorisation
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // Définissez ici vos règles de validation pour les données du formulaire
            'name' => 'required|string|max:255', // Le nom est requis, doit être une chaîne de caractères et ne doit pas dépasser 255 caractères
            'email' => 'required|email|unique:users,email,' . auth()->id(), // L'email est requis, doit être un email valide et unique dans la table users (en excluant l'utilisateur actuel)
            'username' => 'required|string|max:255|unique:users,username,' . auth()->id(), // Le nom d'utilisateur est requis, doit être une chaîne de caractères et unique dans la table users (en excluant l'utilisateur actuel)
            'phone_number' => 'nullable|string|max:20', // Le numéro de téléphone est facultatif, doit être une chaîne de caractères et ne doit pas dépasser 20 caractères
            'address' => 'nullable|string|max:255', // L'adresse est facultative, doit être une chaîne de caractères et ne doit pas dépasser 255 caractères
            'service_type' => 'required|string|in:service1,service2,service3', // Le type de service est requis et doit être l'une des options spécifiées (service1, service2, service3)
            'password' => 'required|string|min:8', // Le mot de passe est requis et doit contenir au moins 8 caractères
            'new_password' => 'required|string|min:8|different:password', // Le nouveau mot de passe est requis, doit contenir au moins 8 caractères et être différent du mot de passe actuel
            'confirm_password' => 'required|string|same:new_password', // La confirmation du mot de passe doit correspondre au nouveau mot de passe
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // L'image est facultative, doit être une image (jpeg, png, jpg, gif) et ne doit pas dépasser 2 Mo
            


            
        ];
    }
}
