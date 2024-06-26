<?php

namespace App\Http\Controllers\Purchas;

use App\Http\Requests\Purchas\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request){

        $data = $request->validated();

        $this->service->store($data);
        return redirect()->back();
    }
}
