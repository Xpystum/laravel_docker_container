<?php

namespace App\Providers;

use App\Jobs\IncrementViewsCountJob;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;

use function Illuminate\Log\log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    public function boot(): void
    {



        RateLimiter::for('products:views', function (IncrementViewsCountJob $job) {

            log(implode('|', [$job->product_id, $job->ipAddress,]));

            $key = implode('|', [$job->product_id, $job->ipAddress,]);

            return Limit::perDay(1)->by($key);

        });
    }
}
