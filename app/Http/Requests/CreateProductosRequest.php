<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductosRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
         'seccion' =>'required' ,
         'paisOrigen' => 'required' ,
         'nombreArticulo' => 'required' ,
         'precio'=>'required'
        ];
    }

    public function messages()
    {
        return [
         'seccion.required' =>'el campo seccion es requerido' ,
         'paisOrigen.required' => 'el campo pais de origen es requerido' ,
         'nombreArticulo.required' => 'el campo nombreArticulo es requerido' ,
         'precio.required'=>'el campo precio es requerido'
        ];
    }
}
