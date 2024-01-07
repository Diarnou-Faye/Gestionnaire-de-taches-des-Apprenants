<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min: 3',
            'fistName' => 'required|min: 3',
            'tel' => 'required|min: 8|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min: 8',
            'sexe' => 'required',
            'etudes_ou_profession' => 'required',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Le champ Nom est requis',
            'name.min' => 'Le champ Nom doit contenir au moins 3 caracteres',
            'fistName.required' => 'Le champ prenoms est requis',
            'fistName.min' => 'Le champ prenoms doit contenir au moins 3 caracteres',
            'tel.required' => 'Le champ Telephone est requis',
            'tel.min' => 'Le champ telephone doit contenir au moins 8 caracteres',
            'tel.unique' => 'ce numero de telephone est deja lie a un compte',
            'email.required' => 'Le champ email est requis',
            'email.email' => 'Le champ prenoms doit contenir un email valide',
            'email.unique' => 'cette adresse mail est deja lie a un compte',
            'password.required' => 'Le champ mot de passe est requis',
            'password.min' => 'Le champ mot de passe doit contenir au moins 8 caracteres',
            'sexe.required' => 'Le champ sexe est requis',
            'etudes_ou_profession.required' => 'Le champ niveau etudes_ou_profession est requis',
    ];
    }
}