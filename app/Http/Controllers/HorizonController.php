<?php

namespace App\Http\Controllers;

use App\Jobs\Horizon\HorizonNewLetterJob;
use App\Jobs\Horizon\HorizonNotificaionJob;
use Illuminate\Http\Request;

class HorizonController extends Controller
{
    public function __invoke()
    {
        for ($i=0; $i < 40; $i++) {
            dispatch(new HorizonNotificaionJob());
        }

        for ($i=0; $i < 40; $i++) {
            dispatch(new HorizonNewLetterJob());
        }

        return now();
    }
}
