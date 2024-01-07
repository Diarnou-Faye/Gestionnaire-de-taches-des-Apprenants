<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Loginrequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|min: 8',
        ];
    }

    public function messages(){
        return [
            'email.required' => 'Le champ email est requis',
            'email.email' => 'Le champ email doit contenir un email valide',
            'password.required' => 'Le champ mot de passe est requis',
            'password.min' => 'Le champ mot de passe doit contenir au moins 8 caracteres',
    ];
    }
}
