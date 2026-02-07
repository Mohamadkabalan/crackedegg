<?php
namespace App\Repositories;

use App\Models\HeroBanner;

class HeroBannerRepository
{
    public function active()
    {
        return HeroBanner::where('is_active', true)
          ->orderBy('order')
          ->get();
    }

    public function first()
    {
        return HeroBanner::where('is_active', true)
          ->orderBy('order')
          ->first();
    }
}
