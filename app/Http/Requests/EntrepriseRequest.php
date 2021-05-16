<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntrepriseRequest extends FormRequest
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
            'NOM'=>'required|string',
            'TEL'=>'required|integer',
            'ADRESSE'=>'required|string',
            'NINEA  '=>'required|string',
            'REGIT_COMMERCE'=>'required|string',
            'NOM_FICHIER_DEMANDE'=>'required|text',
            'FILE'=>'required|text',
        ];
    }
}
     