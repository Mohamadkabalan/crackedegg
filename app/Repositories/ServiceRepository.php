<?php
namespace App\Repositories;

use App\Models\Service;

class ServiceRepository
{
    public function active()
    {
        return Service::orderBy('order')
          ->get();
    }
}
