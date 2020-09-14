<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Http\Request;

class Product extends Model
{
    protected $fillable = [
        'id', 'category_id',    'subcategory_id', 'brand_id',
        'product_name', 'product_code', 'product_quantity',
        'product_details', 'product_colour', 'product_size',
        'selling_price', 'discount_price', 'video_link', 'main_slider',
        'hot_deal', 'best_rated', 'mid_slider', 'hot_new', 'trend',
        'image_one', 'image_two', 'image_three', 'image_four', 'status'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public static function checkCheckBox($request,$data = array(), $value = array())
    {
        foreach ($value as $value) {
            $newValue = $request->input($value) == 1 ? $data[$value] = 1 : $data[$value] = 0;
            array_merge($data, [$value => $newValue]);
        }
        return $data;
    }
}
