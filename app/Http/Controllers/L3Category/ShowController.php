<?php

namespace App\Http\Controllers\L3Category;

use App\Http\Controllers\Controller;
use App\Http\Filters\ProductFilter;
use App\Http\Requests\Product\FilterRequest;
use App\Models\Category;
use App\Models\L2Category;
use App\Models\L3Category;
use App\Models\Product;

class ShowController extends Controller
{
    public function __invoke(L3Category $l3_category, FilterRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(ProductFilter::class, ['queryParams' => array_filter($data)]);

        $l2_category = L2Category::where('id', $l3_category->l2_category_id)->first();
        $category = Category::where('id', $l2_category->category_id)->first();
        $products = Product::where('l3_category_id', $l3_category->id)->filter($filter)->get();
        return view('l3_category.show', compact('l3_category', 'category', 'l2_category', 'products'));
    }
}
