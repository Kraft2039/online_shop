<?php

namespace App\Http\Controllers\Product;

use App\Http\Requests\Product\StoreRequest;
use App\Models\Product;

class UpdateController extends BaseController
{
    public function __invoke(StoreRequest $request, Product $product)
    {
        $data = $request->validated();

        $this->service->update($product, $data);

        return redirect()->route('categories.index');
    }
}
