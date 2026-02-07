<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroBanner extends Model
{
    protected $fillable =[
      'heading',
      'title',
      'description',
      'image1',
      'image2',
      'image3',
      'is_active',
      'order',
    ];
}
