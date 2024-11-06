<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validarCorreos extends FormRequest
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
            'asunto_registro' => 'required|string|max:255',
            'contenido_registro' => 'required|string',
            'asunto_vuelo' => 'required|string|max:255',
            'contenido_vuelo' => 'required|string',
            'asunto_hotel' => 'required|string|max:255',
            'contenido_hotel' => 'required|string', 
            'asunto_actualizacion' => 'required|string|max:255',
            'contenido_actualizacion' => 'required|string',
        ];
    }
}
