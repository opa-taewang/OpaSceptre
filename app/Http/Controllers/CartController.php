<?php

namespace App\Http\Controllers;

use DB;
use App\Cart;
use App\Product;
use App\Wishlist;

use App\Model\Admin\Coupon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
        $product_size = explode(',', $product->product_size,);
        $product_colour = explode(',', $product->product_colour,);
        // dd($product_colour, $product_size);
        $data = [
            'product_id' => $product->id,
            'product_name'=> $product->product_name,
            'product_quantity' => 1,
            'product_price' => $price,
            'product_size' => $product_size[0],
            'product_colour' => $product_colour[0],
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
        $quantity = $request->input('product_quantity') ? $request->input('product_quantity') : 1;
        $data = [
            'product_id' => $product->id,
            'product_name' => $product->product_name,
            'product_quantity' => $quantity,
            'product_price' => $price * $quantity,
            'product_size' => $product->product_size,
            'product_colour' => $product->product_colour,
            'product_image' => $product->image_one,
        ];
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
        $cart = Cart::updateCart($data, $product->id);
        return $cart;
    }

    public function removeFromCart(Product $product){
        Cart::remove($product->id) ? toastr('Removed from Cart successfully', 'success') : '';
        return redirect()->route('cart.show');
    }

    public function vueRemoveCart(Product $product)
    {
        Cart::remove($product->id) ? $notification = [
                'message' => "Removed from Cart successfully",
                'type' => 'success'
            ] : '';
        return $notification;
    }

    public function couponAdd(Request $request)
    {
        $request->validate([
            'coupon_code' => ['required', 'alpha_num']
        ]);
        $coupon = Coupon::where('coupon_token', hash('sha1', $request->input('coupon_code')))->first();
        // dd($coupon);
        $coupon_name = env('APP_NAME') . '_coupon';
        // dd($coupon_name);
        if($coupon){
            Session::put($coupon_name, [
                'name' => $coupon->coupon,
                'discount' => $coupon->discount
            ]);
            toastr('Coupon applied successfully', 'success');
        }else{
            Session::forget($coupon_name);
            toastr('Invalid Coupon', 'danger');
        }
        return redirect()->back();
        // dd($coupon);
    }

    public function couponRemove(Coupon $coupon)
    {
        $coupon_name = env('APP_NAME') . '_coupon';
        Session::forget($coupon_name);
        toastr('Coupon removed successfully', 'success');
        return redirect()->back();
    }

    public function cartClear()
    {
        Cart::select()
        ->where('user_id', auth()->id())
        ->delete();
    }

}
