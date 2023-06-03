<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditarContato extends FormRequest
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
            'nome' => ['required'],
            'idade' => ['required', 'max:3', 'min:2'],
            'telefone' => ['max:20'],
            'email' => ['required', 'max:190', 'email'],
            'cidade' => ['required', 'max:190'],
            'estado' => ['required', 'max:2', 'min:2'],
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute deve ser preenchido',

            'idade.max' => 'A idade nao pode ser maior que 3 digitos.',
            'idade.min' => 'A idade nao pode ser menor que 2 digitos.',

            'telefone.max' => 'O telefone nao pode conter mais que 20 digitos.',

            'email.max' => 'O email nao pode conter mais que 190 digitos.',

            'cidade.max' => 'O nome da cidade nao pode conter mais que 190 digitos.',

            'estado.max' => 'No maximo duas letras para o estado',
            'estado.min' => 'No minimo duas letras para o estado',
        ];
    }
}
