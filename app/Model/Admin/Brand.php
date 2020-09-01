<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'brand_name', 'brand_logo'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
