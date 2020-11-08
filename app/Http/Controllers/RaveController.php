<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use KingFlamez\Rave\Facades\Rave;

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
            // $ver = Rave::verifyTransaction($data->data->data->txRef);
            $oda = $this->verify($data->data->data->txRef);
        }
        // dd(request()->txRef);
        // dd($data['resp']);

        // dd($data);
        // Get the transaction from your DB using the transaction reference (txref)
        // Check if you have previously given value for the transaction. If you have, redirect to your successpage else, continue
        // Comfirm that the transaction is successful
        // Confirm that the chargecode is 00 or 0
        // Confirm that the currency on your db transaction is equal to the returned currency
        // Confirm that the db transaction amount is equal to the returned amount
        // Update the db transaction record (includeing parameters that didn't exist before the transaction is completed. for audit purpose)
        // Give value for the transaction
        // Update the transaction to note that you have given value for the transaction
        // You can also redirect to your success page from here

    }

    /**
     * Receives Rave webhook
     * @return void
     */
    public function verify($txref)
    {
        // $txref = "opasceptre_5fa70d150bb77";

        $data = Rave::verifyTransaction($txref);
        dd($data);

        $chargeResponsecode = $data->data->chargecode;
        $chargeAmount = $data->data->amount;
        $chargeCurrency = $data->data->currency;

        $amount = 5000;
        $currency = "NGN";
        if (($chargeResponsecode == "00" || $chargeResponsecode == "0") && ($chargeAmount == $amount)  && ($chargeCurrency == $currency)) {
            dd('Transaction Successfull');
            // transaction was successful...
            // please check other things like whether you already gave value for this ref
            // if the email matches the customer who owns the product etc
            //Give Value and return to Success page

            return redirect('/success');
        } else {
            dd('Transaction failed');
            //Dont Give Value and return to Failure page

            return redirect('/failed');
        }
    }
}
