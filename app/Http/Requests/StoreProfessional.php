<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfessional extends FormRequest
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
            'nome' => 'required',
            'email' => 'required|unique:people',
            'nascimento' => 'required|date_format:d/m/Y',
            'rg' => 'required',
            'cpf' => 'required|cpf',
            'telefone' => 'nullable',
            'celular' => 'nullable',
            'senha' => 'required|confirmed'
        ];
    }
}
