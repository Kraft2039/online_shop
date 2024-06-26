<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Filters\ProductFilter;
use App\Http\Requests\Product\FilterRequest;
use App\Models\Category;
use App\Models\L2Category;
use App\Models\Product;

class ShowController extends Controller
{
    public function __invoke(Category $category, FilterRequest $request)
    {
        //$data = $request->validated();

        //$filter = app()->make(ProductFilter::class, ['queryParams' => array_filter($data)]);

        //$products = Product::filter($filter)->get();

        $l2_categories = L2Category::where('category_id', $category->id)->get();
        $products = Product::all();
        return view('category.show', compact('category', 'l2_categories', 'products'));
    }
}
