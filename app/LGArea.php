<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LGArea extends Model
{
    use HasFactory;

    protected $table = 'lgareas';

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function shippingaddresses()
    {
        return $this->hasMany(ShippingAddress::class);
    }
}
