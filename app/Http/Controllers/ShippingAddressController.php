<?php

namespace App\Http\Controllers;

use App\Cart;
use App\User;
use App\State;
use App\ShippingAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $data = array_replace_keys($data,[
            'additional_street_address' => 'additional_address_info',
            'state' => 'state_id',
            'lga' => 'lgarea_id',
            'phone_number' => 'contact_number',
            'additional_phone_number' => 'additional_contact_number'
        ]);
        // Save shipping address using the authenticated user
        return User::find(Auth::id())->shippingaddresses()->create($data) ? ['message' => "Address added successfully", 'type' => 'success'] : ['message' => "Address addition failed",'type' => 'warning'];
    }

    public function selectShippingAddress()
    {
        $shipping_addresses = Auth::user()->shippingaddresses;
        $shipping_addresses = ShippingAddress::where('shipping_address.user_id', Auth::id())
            ->join('states', 'states.id', '=', 'shipping_address.state_id')
            ->join('lgareas', 'lgareas.id', '=', 'shipping_address.lgarea_id')
            ->select('shipping_address.*', 'states.state_name', 'lgareas.lgarea_name', 'lgareas.shipping_fee')
            ->get();
        $carts = Cart::get();
        $total = Cart::total();
        // dd($carts);
        return view('user.shipping-address', compact('shipping_addresses', 'carts', 'total'));
    }

    public function checkout()
    {
        $shipping_address = [];
        // return view('user.checkout', compact('shipping_address'));
    }

    public function getStates()
    {
        $data = State::get();
        return response()->json($data);
    }

    public function getLGAreas($state_id)
    {
        $data = State::findOrFail($state_id)->lgareas;
        return response()->json($data);
    }

    public function makeDefaultAddress(ShippingAddress $shipping_address)
    {
        return true;
    }
}

