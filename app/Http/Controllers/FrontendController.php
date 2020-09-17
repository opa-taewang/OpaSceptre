<?php

namespace App\Http\Controllers;

use App\Model\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function menu()
    {
        $menu = DB::table('newsletters')->get();
        return $menu;
    }

    public function newsletterStore(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email','unique:newsletters']
        ]);

        DB::table('newsletters')->insert([
            'email' => $request->input('email'),
            'created_at' => now()
        ]) ? toast('you have subscribed successfullty', 'success') : '';
        return redirect()->back();
    }

    // Quickview control
    public static function quickview($productId)
    {
        Product::findOrFail($productId);
        $product = DB::table('products')
                        ->where('products.id', $productId)
                        ->where('status', 1)
                        ->join('categories', 'categories.id', '=', 'products.category_id')
                        ->join('subcategories', 'subcategories.id', '=', 'products.subcategory_id')
                        ->join('brands', 'brands.id', '=', 'products.brand_id')
                        ->select('products.*', 'categories.category_name', 'subcategories.subcategory_name', 'brands.brand_name')
                        ->first();
        return view('ajax.product-quick-view', compact('product'))->render();
    }
}
