<?php

namespace App\Http\Controllers\L2Category;

use App\Http\Controllers\Controller;
use App\Http\Filters\ProductFilter;
use App\Http\Requests\Product\FilterRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\L2Category;
use App\Models\L3Category;

class ShowController extends Controller
{
    public function __invoke(L2Category $l2_category, FilterRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(ProductFilter::class, ['queryParams' => array_filter($data)]);

        $l3_categories = L3Category::where('l2_category_id', $l2_category->id)->get();
        $products = Product::where('l2_category_id', $l2_category->id)->filter($filter)->get();
        $category = Category::where('id', $l2_category->category_id)->first();
        return view('l2_category.show', compact('l2_category','category', 'l3_categories', 'products'));
    }
}
