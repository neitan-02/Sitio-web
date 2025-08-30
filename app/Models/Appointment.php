<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Appointment
 *
 * @property $id
 * @property $first_name
 * @property $last_name_father
 * @property $last_name_mother
 * @property $address
 * @property $phone
 * @property $family_phone
 * @property $consultation_reason
 * @property $age
 * @property $consulting_room_id
 * @property $service
 * @property $doctor
 * @property $appointment_date
 * @property $appointment_time
 * @property $sex
 * @property $pathology
 * @property $invoice
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Appointment extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'last_name_father', 'last_name_mother', 'address', 'phone', 'family_phone', 'consultation_reason', 'age', 'consulting_room_id', 'service', 'doctor', 'appointment_date', 'appointment_time', 'sex', 'pathology', 'invoice'];



}
