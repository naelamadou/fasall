<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DemandeRequest extends FormRequest
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
            'PRENOM'=>'required|string',
            'SEXE'=>'required|string',
            'DATE'=>'required|string',
            'region'=>'required|string',
            'ADRESSE'=>'required|string',
            'TEL'=>'required|string',
            'EMAIL'=>'required|string',
            

        ];
    }
}
   