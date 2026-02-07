<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    protected $fillable = [
      'category_id',
      'title',
      'slug',
      'excerpt',
      'content',
      'featured_image',
      'is_featured',
      'is_published',
      'published_at',
    ];

    protected $casts = [
      'is_published' => 'boolean',
      'published_at' => 'datetime',
    ];
    protected $with = ['seoMeta'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function seoMeta(): MorphOne
    {
        return $this->morphOne(SeoMeta::class, 'seoable');
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProjectImage::class)->orderBy('sort_order');
    }

    public function videos(): HasMany
    {
        return $this->hasMany(ProjectVideo::class)->orderBy('sort_order');
    }

}
