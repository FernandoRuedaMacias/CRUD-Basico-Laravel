<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'titulo' => 'required|string|max:100',
            'contenido' => 'required|string|max:250',
            'autor' => 'required|string|max:100'
        ];
    }

    public function messages(){

        return [
            'titulo.required' => 'El titulo tiene que ser obligatorio',
            'contenido.required' => 'El contenido tiene que ser obligatorio',
            'autor.required' => 'El autor tiene que ser obligatorio',
            'titulo.max' => 'El titulo  no puede tener mas de 100 caracteres',
            'contenido.max' => 'El contenido no puede tener mas de 250 caracteres',
            'autor.max' => 'El autor no puede tener mas de 100 caracteres'
            
    ];

    }
}
