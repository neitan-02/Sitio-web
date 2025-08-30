<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Cambiar a true si se necesita autorización
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
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'date' => 'required|date',
            'status' => 'required|boolean',
            'image' => 'nullable|image|max:2048', 
            'video' => 'nullable|mimes:mp4,avi,wmv,mov,flv', 
            'related_product_or_service' => 'required|string|max:255',
        ];
    }
}

