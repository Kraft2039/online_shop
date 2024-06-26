<?php

namespace App\Http\Controllers\Purchas;

use App\Http\Controllers\Controller;
use App\Services\Purchas\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
