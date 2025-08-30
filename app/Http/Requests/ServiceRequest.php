<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
			'name' => 'required|string',
			'description' => 'required|string',
			'status' => 'required|string',
			'photo' => 'required|string',
			'discount_percentage' => 'required',
			'date_one' => 'required|string',
			'date_two' => 'required|string',
			'reason' => 'required|string',
			'function' => 'required|string',
			'complement' => 'required|string',
			'effects' => 'required|string',
			'procces' => 'required|string',
			'goal' => 'required|string',
			'duration' => 'required|string',
        ];
    }
}
