<?php


namespace App\Jobs;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class TestJob implements ShouldQueue
{
    use Queueable;

    public function __construct()
    {

    }

    public function index()
    {
        info('Test job index');
        // return now();
    }

    public function handle(): void
    {
        info('Test job index handle');
    }
}
