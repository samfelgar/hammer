<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class StoreService extends FormRequest
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

    protected function prepareForValidation()
    {
        if (empty($this->data)) {
            return;
        }
        $this->merge([
            'data' => Carbon::createFromFormat('d/m/Y', $this->data),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'data' => 'required|date|after_or_equal:today',
            'payment' => 'required',
            'address' => 'required',
            'detalhes' => 'nullable',
        ];
    }
}
