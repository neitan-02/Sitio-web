<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'title', 'content', 'rating', 'date', 'status', 'image', 'related_product_or_service'
    ];
}

