<?php
namespace App\Repositories;

use App\Models\Testimonial;

class TestimonialRepository
{
    public function active()
    {
        return Testimonial::where('is_active', true)
          ->orderBy('order')
          ->get();
    }
}
