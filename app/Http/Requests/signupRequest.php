<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
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
            'name' => 'required',
            'email' => 'required|email|unique:employees',
            'phone' => 'required|unique:employees',
            'password' => 'required|min:4',
            'address' => 'required',
            'gender' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio',
            'email.unique' => 'el correo ya existe',
            'email.required' => 'el correo electronico es obligatorio',
            'email.email' => 'el correo debe ser un correo válido',
            'phone.unique' => 'el telefono ya existe',
            'phone.required' => 'El telefono debe es obligatorio',
            'password.required' => 'La contraseña es obligatoria',
            'password.min' => 'La contraseña debe contener al menos 4 caracteres',
            'address.required' => 'La dirección es obligatoria',
            'gender.required' => 'el genero es obligatorio',
        ];
    }
}
