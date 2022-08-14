<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TableRequest extends FormRequest
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
            'status' => 'required',
            'capacity' => 'required|max:30',
            'date'=>'required',
            'time'=> 'required',
        ];
    }

    public function messages()
    {
        return [
            'status.required' => 'El estado es obligatorio',
            'capacity.required' => 'la capacidad es obligatoria',
            'capacity.min' => 'no se puede más de 30 asientos!',
            'date'=>'la fecha es obligatoria',
            'time'=>'la hora es oligatoria'
        ];
    }
}
