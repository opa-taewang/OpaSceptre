<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function toggle($product)
    {

        $product = Product::findOrFail($product);
        $wishlist = Wishlist::where('user_id', Auth::id())
            ->where('product_id', $product->id)
            ->first();
        $data = [];
        if (isset($wishlist)) {
            $wishlist->delete();
            $data = [
                'message' => "Removed from wishlist succrssfully",
                'status' => 0
            ];
        } else {
            Wishlist::create([
                'user_id' => Auth::id(),
                'product_id' => $product->id
            ]);
            $data = [
                'message' => "Added to wishlist succrssfully",
                'status' => 1
            ];
        }

        return $data;

    }

    public function moveCartToWishlist($product)
    {
        $product = Product::findOrFail($product);
        // $wishlist = Wishlist::where('user_id', Auth::id())
        //     ->where('product_id', $product->id)
        //     ->first();

        $move = Wishlist::create([
                    'user_id' => Auth::id(),
                    'product_id' => $product->id
                ]);
        if($move){
            $cartDelete = Cart::where('user_id', Auth::id())
                ->where('product_id', $product->id)
                ->delete();
            $cartDelete ? toastr('Moved to wishlist succrssfully', 'success') : '';
        }
        return redirect()->route('cart.show');
    }
}
