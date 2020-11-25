<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    public function lgareas()
    {
        return $this->hasMany(LGArea::class);
    }

    public function shippingaddresses()
    {
        return $this->hasMany(ShippingAddress::class);
    }
}
