<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Purchas;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function getReport()
    {
        return Purchas::available()->get()->append('name_prod');

        //$purchases = Purchas::available()->get()->toArray();
        //$purchases = Purchas::count();
        //$purchases = Purchas::where('product_id', 27)->count();
        //dd($purchases);
        //return response()->json($purchases);
    }
}
