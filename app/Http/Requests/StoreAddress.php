<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAddress extends FormRequest
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
            'logradouro' => 'required',
            'numero' => 'required|numeric',
            'bairro' => 'required',
            'cidade' => 'required',
            'uf' => 'required',
            'complemento' => 'nullable',
            'cep' => 'required',
        ];
    }
}
