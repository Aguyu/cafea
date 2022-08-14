<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProfileRequest extends FormRequest
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
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'gender' => 'required',
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio',
            'email.required' => 'El correo electronico es obligatorio',
            'email.email' => 'El correo debe ser un correo válido',
            'phone.required' => 'El telefono es obligatorio',
            'address.required' => 'La dirección es obligatoria',
            'gender.required' => 'El genero es obligatorio',
        ];
    }
}
