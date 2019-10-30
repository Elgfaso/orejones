<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\MessageBag;
use Illuminate\Validation\Validator;

class ValidarRegistro extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //esto lo cambiamos a true para poder que nos dé permiso para acceder al request
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
            //
            'nickname' => 'required|alpha_num|min:1|max:16',
            'correo' => 'required|email',
            'password' =>'required|min:6|max:16',
            'password_confirme' =>'required|same:password'
        ];
    }

    public function messages(){
        return [
            //MENSAJES PARA EL NICKNAME
        'nickname.required'   => 'El :attribute es obligatorio.',
        'nickname.min'        => 'El :attribute debe contener al menos un caracter.',
        'nickname.max'        => 'El :attribute debe contener max 16 caracteres.',

        'correo.required'   => 'El :attribute es obligatorio.',
        'correo.email'        => 'El :attribute debe ser un correo valido.',
       

        'password.required'   => 'La :attribute es obligatoria.',
        'password.min'        => 'La :attribute debe contener al menos 6 caracteres.',
        'password.max'        => 'La :attribute debe contener max 16 caracteres.',

        'password_confirme.required'   => 'Confirme la :attribute',
        'password_confirme.same'        => 'La :attribute debe coincidir',



        ];
    }

    public function attributes(){
        return [
            'nickname' => 'Nickname',
            'correo' => 'Email',
            'password' => 'Contraseña',
            'password_confirme' => 'Contraseña',

        ];
    }
}
