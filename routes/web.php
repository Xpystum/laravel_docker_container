<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/test', [TestController::class , 'test']);

Route::get('/', function () {
    return 1;
});
