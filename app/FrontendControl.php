<?php

namespace App;

use App\Model\Admin\Brand;
use App\Model\Admin\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class FrontendControl extends Model
{
    public static function getCategory()
    {
        return Category::get();
    }

    public static function getSubCategory($categoryId)
    {
        $subcategory = DB::table('subcategories')
                            ->where('category_id', $categoryId)
                            ->get();
    }

    public static function brands()
    {
        return Brand::get();
    }
}
