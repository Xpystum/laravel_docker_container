<?php

namespace App\Jobs\Horizon;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class HorizonNewLetterJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        $this->onQueue('newletter');
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        info('newletter');
        sleep(1);
    }
}
