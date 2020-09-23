<?php

namespace App\Http\Controllers;

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
}
