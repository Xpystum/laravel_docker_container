<?php

namespace App\Jobs\Horizon;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class HorizonNotificaionJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        $this->onQueue('notification');
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        info('NotificationsJob');

        sleep(1);
    }
}
