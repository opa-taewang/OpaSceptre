<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mid_slider_animation = [
            'fadeInRightShorter','','fadeInLeftShorter',
        ];
        $main_slider = DB::table('products')
                        ->where('status', 1)
                        ->where('main_slider', 1)
                        ->orderByRaw('RAND()')
                        ->limit(3)
                        ->get();
            // Not used yet
        $mid_slider = DB::table('products')
                        ->where('status', 1)
                        ->where('mid_slider', 1)
                        ->join('categories', 'categories.id', '=', 'products.category_id')
                        ->join('subcategories', 'subcategories.id', '=', 'products.subcategory_id')
                        ->join('brands', 'brands.id', '=', 'products.brand_id')
                        ->select('products.*', 'categories.category_name', 'subcategories.subcategory_name', 'brands.brand_name')
                        ->orderByRaw('RAND()')
                        ->limit(3)
                        // ->distinct()
                        ->get();
        $best_rated = DB::table('products')
                        ->where('status', 1)
                        ->where('best_rated', 1)
                        ->join('categories', 'categories.id', '=', 'products.category_id')
                        ->join('subcategories', 'subcategories.id', '=', 'products.subcategory_id')
                        ->join('brands', 'brands.id', '=', 'products.brand_id')
                        ->select('products.*', 'categories.category_name', 'subcategories.subcategory_name', 'brands.brand_name')
                        ->orderByRaw('RAND()')
                        ->limit(3)
                        ->get();

        $hot_deal = DB::table('products')
                        ->where('status', 1)
                        ->where('hot_deal', 1)
                        ->join('categories', 'categories.id', '=', 'products.category_id')
                        ->join('subcategories', 'subcategories.id', '=', 'products.subcategory_id')
                        ->join('brands', 'brands.id', '=', 'products.brand_id')
                        ->select('products.*', 'categories.category_name', 'subcategories.subcategory_name', 'brands.brand_name')
                        ->orderByRaw('RAND()')
                        ->limit(3)
                        ->get();

        $hot_new = DB::table('products')
                        ->where('status', 1)
                        ->where('hot_new', 1)
                        ->join('categories', 'categories.id', '=', 'products.category_id')
                        ->join('subcategories', 'subcategories.id', '=', 'products.subcategory_id')
                        ->join('brands', 'brands.id', '=', 'products.brand_id')
                        ->select('products.*', 'categories.category_name', 'subcategories.subcategory_name', 'brands.brand_name')
                        ->orderByRaw('RAND()')
                        ->limit(3)
                        ->get();
        $trend = DB::table('products')
                        ->where('status', 1)
                        ->where('trend', 1)
                        ->join('categories', 'categories.id', '=', 'products.category_id')
                        ->join('subcategories', 'subcategories.id', '=', 'products.subcategory_id')
                        ->join('brands', 'brands.id', '=', 'products.brand_id')
                        ->select('products.*', 'categories.category_name', 'subcategories.subcategory_name', 'brands.brand_name')
                        ->orderByRaw('RAND()')
                        ->limit(3)
                        ->get();
        return view('user.home', compact('main_slider', 'mid_slider', 'best_rated','hot_deal', 'hot_new', 'trend', 'mid_slider_animation'));
    }

}
