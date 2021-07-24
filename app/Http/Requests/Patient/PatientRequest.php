<?php

namespace App\Http\Requests\Patient;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class PatientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'curp' => 'required|alpha_num|size:18|unique:\App\Patient,curp,' . $this->id,
            'first_surname' => 'required|string|max:128',
            'second_surname' => 'nullable|max:128',
            'first_name' => 'required|string|max:256',
            'sex_id' => 'required',
            'birth_date' => 'required',
            'file_number' => 'required|regex:/^[\d]{2}-[\d]{4}$/',
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
            'curp.*' => 'Captura obligatoria del campo "CURP", debe estar conformado por 18 letras y números y no debe pertenecer a otro paciente registrado en el sistema.',
            'first_surname.*' => 'Captura obligatoria del campo "Primer Apellido" y debe ser un texto no mayor a 128 caracteres.',
            'second_surname.*' => 'Campo "Segundo Apellido" debe ser un texto no mayor a 128 caracteres.',
            'first_name.*' => 'Captura obligatoria del campo "Nombre" y debe ser un texto no mayor a 256 caracteres.',
            'sex_id.*' => 'Captura obligatoria del campo "Sexo".',
            'birth_date.*' => 'Captura obligatoria del campo "Fecha de Nacimiento".',
            'file_number.*' => 'Captura obligatoria del campo "Número de Expediente", debe cumplir con el formato especificado (p. e. "15-0235") y no debe pertenecer a otro paciente registrado en el sistema.',
        ];
    }
}
