<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestClient extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'company' => 'nullable',
            'cnpj' => 'nullable',
            'responsible' => 'required',
            'cellphone' => 'required',
            'cellphone2' => 'nullable',
            'email' => 'required',
            'cep' => 'nullable',
            'street' => 'required',
            'number' => 'required',
            'complement' => 'nullable',
            'city' => 'required',
            'state' => 'required',
        ];
    }
}

