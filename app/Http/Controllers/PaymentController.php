<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\RaveController;

class PaymentController extends Controller
{

    public function paymentMethod(Request $request)
    {
        if($request->input('payment_method') == 1){
            // return redirect()->route('pay.rave');
            return view('user.payment.rave');
            // $this->flutterwave();
        }elseif($request->input('payment_method') == 2){
            $this->paystack();
        }
    }

    public function flutterwave()
    {
        return view('user.payment.rave');
        // $raveController = new RaveController();
        // $raveController->initialize();
    }
    public function paystack()
    {
        dd('this is paystack');
    }

}
