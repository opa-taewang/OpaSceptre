<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderSuccessMail;
use KingFlamez\Rave\Facades\Rave;
use Illuminate\Support\Facades\Mail;

class RaveController extends Controller
{
    /**
     * Initialize Rave payment process
     * @return void
     */
    public function initialize()
    {
        //This initializes payment and redirects to the payment gateway
        //The initialize method takes the parameter of the redirect URL
        Rave::initialize(route('rave.callback'));
    }

    /**
     * Obtain Rave callback information
     * @return void
     */
    public function callback()
    {
        $data = json_decode(request()->resp);
        if($data->data->data && isset($data->data->data->txRef))
        {
            $payment_confirmation = $this->verify($data->data->data->txRef);
            return $payment_confirmation ? redirect()->route('payment.success') : redirect()->route('payment.failure');
        }
    }

    /**
     * Receives Rave webhook
     * @return void
     */
    public function verify($txref)
    {
        $data = Rave::verifyTransaction($txref);

        $chargeResponsecode = $data->data->chargecode;
        $chargeAmount = $data->data->amount;
        $chargeCurrency = $data->data->currency;
        $customerEmail = $data->data->custemail;

        $amount = OrderController::OrderAmount($txref);
        $currency = "NGN";
        if (($chargeResponsecode == "00" || $chargeResponsecode == "0") && ($chargeAmount == $amount)  && ($chargeCurrency == $currency) && ($customerEmail == auth()->user()->email)) {
            OrderController::updatePaymentSuccess($txref);
            (new CartController)->cartClear();
            Mail::to($customerEmail)->send(new OrderSuccessMail($txref));
            //Give Value and return to Success page
            return true;
        } else {
            return false;
        }
    }
}
