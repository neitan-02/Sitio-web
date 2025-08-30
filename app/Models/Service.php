<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Service
 *
 * @property $id
 * @property $name
 * @property $description
 * @property $status
 * @property $photo
 * @property $discount_percentage
 * @property $date_one
 * @property $date_two
 * @property $reason
 * @property $function
 * @property $complement
 * @property $effects
 * @property $procces
 * @property $goal
 * @property $duration
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Service extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'status', 'photo', 'discount_percentage', 'date_one', 'date_two', 'reason', 'function', 'complement', 'effects', 'procces', 'goal', 'duration'];



}
