<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'product_id',
        'product_name',
        'product_quantity',
        'product_price',
        'product_size',
        'product_colour',
        'product_image'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
