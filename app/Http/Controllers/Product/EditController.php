<?php

namespace App\Http\Controllers\Product;

use App\Http\Requests\Product\StoreRequest;
use App\Models\L2Category;
use App\Models\L3Category;
use App\Models\Product;

class EditController extends BaseController
{
    public function __invoke(Product $product)
    {
        $l2_categories = L2Category::all();
        $l3_categories = L3Category::all();
        return view('products.edit', compact('product','l2_categories', 'l3_categories'));
    }
}
