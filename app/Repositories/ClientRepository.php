<?php
namespace App\Repositories;

use App\Models\Client;

class ClientRepository
{
    public function active()
    {
        return Client::where('is_active', true)
          ->orderBy('order')
          ->get();
    }
}
