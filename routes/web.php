<?php

use App\Http\Controllers\HorizonController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/test', [TestController::class , 'test']);

Route::get('/test-job', HorizonController::class);

Route::get('/', function () {
    return 1;
});

Route::get('/products/{product}', ProductController::class)->name('products.show ');
