<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DatesRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'Nombre' => 'required|regex:/[a-z]/|not_regex:/[0-9\*\/\-\!\@\#\$\%\^\&\*\(\)\_\+\=\<\>\,\.\?]/',
            'Apellido' => 'required|regex:/[a-z]/|not_regex:/[0-9\*\/\-\!\@\#\$\%\^\&\*\(\)\_\+\=\<\>\,\.\?]/',
            'TypeId' => array('regex:/((CC)|(Pasaporte)|(TI)|(Otro))/'),
            'Id' => 'required|regex:/[0-9]/|not_regex:/[a-z\*\/\-\!\@\#\$\%\^\&\*\(\)\_\+\=\<\>\,\.\?]/',
            'email' => 'required|regex:/[a-z, 0-9]+(@)\w+(.)com/'

        ];
    }

    public function messages()
    {
    return [
        'Nombre.required' => 'El nombre es requerido',
        'Nombre.regex' => 'El nombre solo debe llevar letras!',
        'Nombre.not_regex' => 'El nombre no debe llevar numeros ni caracteres especiales!',
        'Apellido.required' => 'El apellido es requerido',
        'Apellido.regex' => 'El apellido solo debe llevar letras!',
        'Apellido.not_regex' => 'El apellido no debe llevar numeros ni caracteres especiales!',
        'TypeId.regex' => 'Error no es un tipo de identificacion',
        'Id.required' => 'El Id es requerido',
        'Id.regex' => 'El Id solo debe llevar Numeros!',
        'Id.not_regex' => 'El Id no debe llevar letras ni caracteres especiales!',
        'email.required' => 'El email es requerido',
        'email.regex' => 'El email debe estar conformado por (una cadena) + @ + (una cadena) + . + com'
    ];
    }
}
