<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
      'name',
      'company',
      'position',
      'image',
      'content',
      'rating',
      'is_active',
      'order',
    ];
}
