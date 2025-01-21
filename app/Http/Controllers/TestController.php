<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class TestController extends Controller
{
    public function test()
    {
        dd(1);
        if(Cache::get('key'))
        {
            dd(Cache::get('key'));

        } else {

            Cache::set('key', 5);

        }

        return Cache::get('key');
    }
}
