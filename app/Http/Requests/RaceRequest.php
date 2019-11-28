<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RaceRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'classification_id' => 'required|integer',
            'lifeExpectancy' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Veuillez indiquer le nom de l\'animal!',
            'classification_id.required'  => 'Veuillez indiquer la classification de l\'animal !',
            'lifeExpectancy.required' => 'Ce champ est requis !',
            'classification_id.integer' => 'Vous devez indiquer un nombre valide !',
        ];
    }
}
