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
    public function show()
    {
        $cart = Cart::get();
        $total = Cart::total();
        // dd($cart, $total);
        return view('user.cart', compact('cart', 'total'));
    }
    public function addcart(Request $request, Product $product)
    {

        $price = isset($product->discount_price) ? $product->discount_price : $product->selling_price;
        $data = [
            'product_id' => $product->id,
            'product_name'=> $product->product_name,
            'product_quantity' => 1,
            'product_price' => $price,
            'product_size' => $product->product_size,
            'product_colour' => $product->product_size,
            'product_image' => $product->image_one,
        ];
        $cart = Cart::add($data);
        return $cart;
    }

    public function check()
    {
        $content = Cart::get(2);
        // dd($content);
        return response()->json($content);
    }

    public function CartAdd(Request $request, Product $product)
    {
        $data = $request->validate([
            'product_colour' =>  ['required'],
            'product_size' =>  ['required'],
            'product_quantity' => ['required','numeric']
        ]);
        $price = isset($product->discount_price) ? $product->discount_price : $product->selling_price;
        $quantity = $request->input('quantity') ? $request->input('quantity') : 1;
        $data = [
            'product_id' => $product->id,
            'product_name' => $product->product_name,
            'product_quantity' => $quantity,
            'product_price' => $price * $quantity,
            'product_size' => $product->product_size,
            'product_colour' => $product->product_size,
            'product_image' => $product->image_one,
        ];
        // dd($data);
        $cart = Cart::add($data);
        return $cart;
    }

    public function CartUpdate(Request $request, Product $product)
    {
        $request->validate([
            'product_quantity' => ['required', 'numeric']
        ]);
        $price = isset($product->discount_price) ? $product->discount_price : $product->selling_price;
        $data = [
            'product_quantity' => $request->input('product_quantity'),
            'product_price' => $price * $request->input('product_quantity'),
        ];
        // dd($data);
        $cart = Cart::updateCart($data, $product->id);
        return $cart;
    }
}
