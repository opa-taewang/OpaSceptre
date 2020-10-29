<?php

namespace App\Http\Controllers;

use App\ShippingAddress;
use Illuminate\Http\Request;

class ShippingAddressController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addShippingAddress(Request $request)
    {
        $data = $request->validate([
            'first_name' => ['required', 'min: 2', 'alpha'],
            'last_name' => ['required', 'min: 2', 'alpha'],
            'street_address' => ['required', 'min:5'],
            'additional_street_address' => ['nullable', 'min:5'],
            'state' => ['required','digits_between:1,2'],
            'lga' => ['required', 'digits_between:1,3'],
            'phone_number' => ['required', 'digits:10'],
            'additional_phone_number' => ['nullable', 'digits:10']
        ]);
        // dd($data);
        $cart = ShippingAddress::create($data);
        $notification = [
            'message' => "Address added successfully",
            'type' => 'success'
        ];
        return $notification;
    }

    public function checkout()
    {
        $shipping_address = [];
        return view('user.checkout', compact('shipping_address'));
    }
}
