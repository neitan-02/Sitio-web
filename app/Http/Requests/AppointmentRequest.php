<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
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
			'first_name' => 'required|string',
			'last_name_father' => 'required|string',
			'last_name_mother' => 'required|string',
			'address' => 'required|string',
			'phone' => 'required|string',
			'family_phone' => 'required|string',
			'consultation_reason' => 'required|string',
			'age' => 'required',
			'consulting_room_id' => 'required',
			'service' => 'required|string',
			'doctor' => 'required|string',
			'appointment_date' => 'required',
			'appointment_time' => 'required',
			'sex' => 'required|string',
			'pathology' => 'required|string',
			'invoice' => 'required',
        ];
    }
}
