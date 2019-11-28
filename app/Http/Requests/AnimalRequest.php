<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnimalRequest extends FormRequest
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
          'description' => 'required|string|max:255',
          'sexe' => 'required',
          'age' => 'required|integer',
          'weight' => 'required|integer',
          'size' => 'required|integer',
          'race_id' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Veuillez indiquer le nom de l\'animal!',
            'description.required'  => 'Veuillez indiquer la description de l\'animal !',
            'sexe.required' => 'Ce champ est requis !',
            'age.required' => 'Ce champ est requis !',
            'weight.required' => 'Ce champ est requis !',
            'size.required' => 'Ce champ est requis !',
            'race_id.required'  => 'Ce champ est requis !',
            'race_id.integer'  => 'Vous devez indiquer un nombre !',
        ];
    }
}
