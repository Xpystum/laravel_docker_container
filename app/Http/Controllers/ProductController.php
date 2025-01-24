<?php

namespace App\Http\Controllers;

use App\Jobs\IncrementViewsCountJob;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __invoke(Request $request, Product $product)
    {

        dispatch(new IncrementViewsCountJob(product_id: $product->id, ipAddress: $request->ip()));


        return $product->toArray();
    }
}
