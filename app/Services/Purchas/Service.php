<?php

namespace App\Services\Purchas;

use App\Models\Purchas;

class Service
{
    public function store($data)
    {
        Purchas::create($data);
    }
}
