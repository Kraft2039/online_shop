<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\L2Category;
use App\Models\L3Category;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $l2_categories = L2Category::all();
        $l3_categories = L3Category::all();
        return view('products.create', compact('l2_categories','l3_categories'));
    }
}
