<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeRating
 *
 * @property $id
 * @property $service_employee
 * @property $counter_employee
 * @property $customer
 * @property $service_rating
 * @property $counter_rating
 * @property $service_feedback
 * @property $counter_feedback
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EmployeeRating extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['service_employee', 'counter_employee', 'customer', 'service_rating', 'counter_rating', 'service_feedback', 'counter_feedback'];



}
