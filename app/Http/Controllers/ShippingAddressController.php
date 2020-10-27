<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShippingAddressController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function checkout()
    {
        $shipping_address = [];
        return view('user.checkout', compact('shipping_address'));
    }
}
