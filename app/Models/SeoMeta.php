<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
class SeoMeta extends Model
{
    protected $fillable = [
      'title',
      'description',
      'keywords',
      'og_image',
    ];

    public function seoable(): MorphTo
    {
        return $this->morphTo();
    }
}
