<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TestController::class , 'test']);

// Route::get('/', function () {
//     return route('welcome');
// });
