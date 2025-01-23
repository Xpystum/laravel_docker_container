<?php

namespace App\Http\Controllers;

use App\Jobs\TestJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class TestController extends Controller
{
    public function test()
    {
        dispatch(new TestJob())->delay(now()->addSeconds(5));

        return response(now());
    }
}
