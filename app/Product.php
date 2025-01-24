<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $fillable = [

        'name', 'price',
        'views_count',

    ];

    public function incrementViewsCount() : int
    {
        return $this->increment('views_count');
    }

}
