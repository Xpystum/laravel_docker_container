<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;


class ProductPromoCodeEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public ?int $product_id;

    public function __construct(?int $product_id = null) {

        $this->product_id = $product_id;

    }


}
