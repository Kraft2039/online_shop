<?php

namespace App\Http\Controllers\Purchas;

use App\Models\Product;
use App\Models\Purchas;

class IndexController extends BaseController
{
    public function __invoke(){
        $purchases = Purchas::all();
        $products = Product::all();
        return view('purchases.index', compact('purchases', 'products'));
    }
}
