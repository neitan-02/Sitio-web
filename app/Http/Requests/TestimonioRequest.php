<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonioRequest extends FormRequest
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
			'nombre' => 'required|string',
			'titulo' => 'required|string',
			'contenido' => 'required|string',
			'fecha' => 'required',
			'estado' => 'string',
			'imagen' => 'string',
			'video' => 'string',
			'producto_servicio' => 'string',
        ];
    }
}
