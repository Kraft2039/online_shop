<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Filters\ProductFilter;
use App\Http\Requests\Product\FilterRequest;
use App\Models\Category;
use App\Models\L2Category;
use App\Models\L3Category;
use App\Models\Product;

class IndexController extends Controller
{

    /**
     * @throws BindingResolutionException
     */
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(ProductFilter::class, ['queryParams' => array_filter($data)]);

        $products = Product::filter($filter)->get();

        $categories = Category::all();
        $l2_categories = L2Category::all();
        $l3_categories = L3Category::all();
        return view('category.index', compact('categories', 'products', 'l2_categories', 'l3_categories'));
    }
}
