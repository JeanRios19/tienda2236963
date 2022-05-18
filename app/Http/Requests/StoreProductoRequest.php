<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductoRequest extends FormRequest
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
            "nombre" => 'required|alpha',
            "descripcion" => 'required|max:180',
            "precio" => 'required|numeric|max:10000',
            "categoria" => 'required',
            "Marca" => 'required' 
        ];
    }

    /*mensajes personalisados
    */
    public function messages(){
        return [
            'required' => 'Le falto aqui mi perro',
            'alpha' => 'Solo letras por favor ',
            'max' => 'Maximo :max carecteres',

        ];

    }
  
}
