<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'order_quantity',
        'shipping_address_id',
        'coupon',
        'discount_price',
        'shipping_fee',
        'subtotal',
        'order_price',
        'order_payment_method',
        'order_payment_reference',
        'order_payment_status',
        'order_status'
    ];

    public function orderitems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function shippingAddress()
    {
        return $this->belongsTo(ShippingAddress::class);
    }

    public function orderStatus()
    {
        return $this->belongsTo(OrderStatus::class, 'order_status', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
