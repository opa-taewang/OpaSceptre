<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = ['coupon', 'coupon_token', 'discount'];
}
