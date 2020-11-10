<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public static function move($data)
    {
        $order = Order::create($data);
        if($order)
        {
            foreach(Cart::get() as $cart)
            {
                $order->orderitems()->create([
                    'product_id' => $cart->product_id,
                    'product_name' => $cart->product_name,
                    'product_quantity' => $cart->product_quantity,
                    'product_price' => $cart->product_price,
                    'product_size' => $cart->product_size,
                    'product_colour' => $cart->product_colour,
                    'product_image' => $cart->product_image
                ]);
            }
        }
    }

    public static function OrderAmount($trxRef)
    {
        return Order::where('order_payment_reference', $trxRef)
            ->first()->order_price;
    }

    public static function updatePaymentSuccess($trxRef)
    {
        return Order::where('order_payment_reference', $trxRef)
            ->update([
                'order_payment_status' => 1,
                'order_status' => 2
                ]) ? true : false;
    }



}
