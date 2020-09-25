<?php

namespace App\Http\Controllers;

use DB;
use App\Cart;
use App\Product;
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addcart(Request $request, Product $product)
    {
        dd(Auth::user());
        // dd(\App\MyCookie::visitorId());
        // dd(\App\MyCookie::visitorIdDelete());
        die();
        // Auth::check() ? '': Cart::visitorId();
        // dd($_COOKIE[strtolower(env('APP_NAME').'_cart')]);
        $data = [
            'id' => $product->id,
            'name'=> $product->product_name,
            'qty' => $product->product_quantity,
            'weight' => $product->product_quantity,
            'price' => isset($product->discount_price) ? $product->discount_price : $product->selling_price,
            'options' => [
                'product_size' => $product->product_size,
                'product_colour' => $product->product_size,
                'product_image' => $product->image_one,
            ]

        ];

        // dd($data);
        $cart = Cart::add($data);
        dd($cart);
    }

    public function check()
    {
        $content = Cart::content();
        dd($content);
        return response()->json($content);
    }
}
