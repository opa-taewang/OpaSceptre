<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public static function productColourSize($product)
    {
        $product = Product::findOrFail($product);
        $quantities = [];
        for ($i = 1; $i < $product->product_quantity; $i++) {
            array_push($quantities, $i);
        }
        return $quantities;
    }
}
