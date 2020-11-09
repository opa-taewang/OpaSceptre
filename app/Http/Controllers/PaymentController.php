<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use KingFlamez\Rave\Facades\Rave;
// use App\Http\Controllers\RaveController;

class PaymentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function paymentMethod(Request $request)
    {
        $data = [
            'amount' => $request->amount,
            'description' => $request->description,
            'country' => $request->country,
            'currency' => $request->currency,
            'email' => $request->email,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phonenumber' => $request->phonenumber,
            'ref' => $request->ref
        ];
        $order = [
            'user_id' => auth()->id(),
            'order_quantity' => $request->quantity,
            'shipping_address_id' => $request->shipping_address,
            'coupon' => $request->coupon,
            'discount_price' => $request->discount_price,
            'shipping_fee' => $request->shipping_fee,
            'subtotal' => $request->sub_total,
            'order_price' => $data['amount'],
            'order_payment_method' =>  $request->payment_method,
            'order_payment_reference' => $data['ref'],
            'order_status' => 1
        ];
        OrderController::move($order);
        // dd($order);
        if($order['order_payment_method'] == 'flutterwave'){
            $_POST = $data;
            // $raveController = new RaveController();
            (new RaveController)->initialize();
        }elseif($order['order_payment_method'] == 'paystack'){
            $this->paystack();
        }
    }

    public function paymentSuccess()
    {
        toastr('Payment Successful', 'success');
        return view('user.payment-message.success');
    }
    public function paymentFailure()
    {
        toastr('Payment Failed', 'failure');
        return view('user.payment-message.failure');
    }
}
