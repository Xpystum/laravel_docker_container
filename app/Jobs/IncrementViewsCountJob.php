<?php

namespace App\Jobs;

use App\Product;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\Attributes\WithoutRelations;
use Illuminate\Queue\Middleware\RateLimited;

#[WithoutRelations]
class IncrementViewsCountJob implements ShouldQueue
{
    use Queueable;

    protected ?Product $product;

    public function middleware() : array
    {
        return [(new RateLimited('products:views'))->dontRelease()];
    }


    public function __construct(
        public string $product_id,
        public string $ipAddress,
    ) {
        $this->product = Product::find($product_id);
        $this->onQueue('products');
    }


    public function handle(): void
    {
        $this->product->incrementViewsCount();
    }
}
