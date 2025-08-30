<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Community
 *
 * @property $id
 * @property $beneficiary
 * @property $reason
 * @property $photo
 * @property $date_one
 * @property $date_two
 * @property $gift
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Community extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['beneficiary', 'reason', 'photo', 'date_one', 'date_two', 'gift'];



}
