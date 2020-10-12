<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    // Quickview control
    public function quickview($productId)
    {
        Product::findOrFail($productId);
        $product = Product::where('products.id', $productId)
            ->where('status', 1)
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->join('subcategories', 'subcategories.id', '=', 'products.subcategory_id')
            ->join('brands', 'brands.id', '=', 'products.brand_id')
            ->select('products.*', 'categories.category_name', 'subcategories.subcategory_name', 'brands.brand_name')
            ->first();
        return view('user.ajax.product-quick-view', compact('product'))->render();
    }

    public function singleProduct(Product $product)
    {
        // dd($product);
        $product = Product::where('products.id', $product->id)
            ->where('status', 1)
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->join('subcategories', 'subcategories.id', '=', 'products.subcategory_id')
            ->join('brands', 'brands.id', '=', 'products.brand_id')
            ->select('products.*', 'categories.category_name', 'subcategories.subcategory_name', 'brands.brand_name')
            ->first();
        // dd($product);
        $related_products = Product::where('products.id','!=', $product->id)
            ->where(function ($q) use ($product){
                $q->where('products.subcategory_id', $product->subcategory_id)
                    ->orWhere('products.category_id', $product->category_id);
                })
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->join('subcategories', 'subcategories.id', '=', 'products.subcategory_id')
            ->join('brands', 'brands.id', '=', 'products.brand_id')
            ->select('products.*', 'categories.category_name', 'subcategories.subcategory_name', 'brands.brand_name')
            ->limit(9)
            ->get();
        // dd($related_products);
        return view('user.single-product', compact('product', 'related_products'));
    }

    // Vue get product colour
    public function productColourSize(Product $product)
    {
        $productColour = explode(',', $product->product_colour);
        $productSize = explode(',', $product->product_size);
        $data = [
            'colours' => $productColour,
            'sizes' => $productSize,
            'quantity' => $product->product_quantity
        ];
        return response()->json($data);
    }
}
