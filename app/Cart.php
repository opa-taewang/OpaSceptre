<?php

namespace App;


use App\MyCookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    protected $hidden = ['id','user_id', 'identifier'];

    protected $fillable = [
        'user_id', 'identifier','product_id','product_name','product_quantity','product_price','product_size','product_colour','product_image'
    ];

    protected static function checkIfExists($product_id)
    {
        $cookie = strtolower(env('APP_NAME') . '_cart');
        $identifier = Auth::check() ? ['user_id' => Auth::id()] : ['identifier' => MyCookie::get($cookie)];
        $content = self::select()
            ->where('product_id', $product_id)
            ->where($identifier)->count();
        return $content > 0 ? true : false;
    }

    protected static function add(array $data)
    {
        $cookie = strtolower(env('APP_NAME') . '_cart');
        $data = Auth::check() ? array_merge(['user_id' => Auth::id()], $data) : array_merge(['identifier' => MyCookie::get($cookie)], $data);
        if (self::checkIfExists($data['product_id'])) {
            $notification = [
                'message' => $data['product_name'] . " already in cart",
                'type' => 'warning'
            ];
        } else {
            Cart::create($data);
            $notification = [
                'message' => $data['product_name'] . " added to cart successfully",
                'type' => 'success'
            ];
        }
        return $notification;
    }

    // Delete from cart
    protected static function remove(string $product_id)
    {
        $cookie = strtolower(env('APP_NAME') . '_cart');
        $identifier = Auth::check() ? ['user_id' => Auth::id()] : ['identifier' => MyCookie::get($cookie)];
        $cart = self::select()
        ->where('product_id', $product_id)
        ->where($identifier)->delete();
        return $cart ?  true : false;
    }

    protected static function get($lmt = NULL)
    {
        // $limi = 2;
        $cookie = strtolower(env('APP_NAME') . '_cart');
        $identifier = Auth::check() ? ['user_id' => Auth::id()] : ['identifier' => MyCookie::get($cookie)];
        $cart = self::select('product_id', 'product_name', 'product_quantity', 'product_price', 'product_size', 'product_colour', 'product_image')
        ->where($identifier)
            ->orderByDesc('created_at')
            ->limit($lmt)
            ->get();
        return $cart;
    }

    protected static function total()
    {
        if(Auth::check())
        {
            return self::select(DB::raw("SUM(product_price) as total_price, SUM(product_quantity) as cart_quantity"))
                        ->where('user_id', Auth::id())
                        ->get()
                        ->first();
        }else {
            $cookie = strtolower(env('APP_NAME') . '_cart');
            return self::select(DB::raw("SUM(product_price) as total_price, SUM(product_quantity) as cart_quantity"))
                ->where('identifier', MyCookie::get($cookie))
                ->get()
                ->first();
        }
    }

    // Update Cart
    protected static function updateCart(array $data,string $product_id)
    {
        $notification = [];
        $cookie = strtolower(env('APP_NAME') . '_cart');
        // dd(MyCookie::get($cookie));
        $identifier = Auth::check() ? ['user_id' => Auth::id()] : ['identifier' => MyCookie::get($cookie)];
        // dd($identifier);
        $cart = self::select()
            ->where('product_id', $product_id)
            ->where($identifier)->first();
        if($cart){
            $cart->product_quantity = $data['product_quantity'];
            $cart->product_price = $data['product_price'];
            $cart->save();
            $notification = [
                'message' => "Product Updated successfully",
                'type' => 'success'
            ];
        }
        return $notification;
    }

}
