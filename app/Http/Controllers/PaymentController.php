<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderSuccessMail;
use KingFlamez\Rave\Facades\Rave;
use Illuminate\Support\Facades\Mail;
use Unicodeveloper\Paystack\Paystack;
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
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phonenumber,
            'reference' => $request->ref
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
            'order_payment_reference' => $data['reference'],
            'order_status' => 1
        ];
        OrderController::move($order);
        if($order['order_payment_method'] == 'flutterwave'){
            // $_POST = $data;
            (new RaveController)->initialize();
        }elseif($order['order_payment_method'] == 'paystack'){
            // return view('pay');
            $data['callback_url'] = route('paystack.callback');
            dd((new PayStackController)->paystack_standard($data));
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

    public function paid($trxRef, $customerEmail)
    {
        if(OrderController::updatePaymentSuccess($trxRef))
        {
            (new CartController)->cartClear();
            Mail::to($customerEmail)->send(new OrderSuccessMail($trxRef));
            //Give Value and return to Success page
            return true;
        }
        return false;
    }
}
