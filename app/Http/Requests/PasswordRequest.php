<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordRequest extends FormRequest
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
        'oldPass' => 'required',
        'newPass' => 'required|min:4'
    ];
    }
    public function messages()
    {
        return [
            'oldPass.required' => 'la contraseña actual no puede queda vacía',
            'newPass.required' => 'la contraseña actual no puede queda vacía',
            'newPass.min' => 'la nueva contraseña debe contener al menos 4 caracteres'
        ];
    }
}
