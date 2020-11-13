<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Unicodeveloper\Paystack\Facades\Paystack;


class PayStackController extends Controller
{
    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */

    public function redirectToGateway()
    {
        try {
        (Paystack::getAuthorizationUrl()->redirectNow());

            return Paystack::getAuthorizationUrl()->redirectNow();
        } catch (\Exception $e) {
            return Redirect::back()->withMessage(['msg' => 'The paystack token has expired. Please refresh the page and try again.', 'type' => 'error']);
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        // $paymentDetails =(object) Paystack::getPaymentData();
        $paymentDetails = json_decode(json_encode(Paystack::getPaymentData()));
        $paymentStatus = $paymentDetails->data->status;
        $chargeAmount = $paymentDetails->data->amount ;
        $chargeCurrency = $paymentDetails->data->currency;
        $customerEmail = $paymentDetails->data->customer->email;
        $txref = $paymentDetails->data->reference;
        $amount = (OrderController::OrderAmount($txref) * 100);
        $currency = "NGN";
        if($paymentStatus && ($chargeAmount == $amount) && ($chargeCurrency == $currency) && ($customerEmail === auth()->user()->email)){
            return (new PaymentController)->paid($txref, $customerEmail) ? redirect()->route('payment.success') : redirect()->route('payment.failure');
        }else{
            return redirect()->route('payment.failure');
        }
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }

    public function paystack_standard($paymentData)
    {
        //
        // $pay = $this->input->post('pay');
        if (isset($paymentData)) {
            $result = array();
            $amount = $paymentData['amount'] * 100;
            $email = $paymentData['email'];
            $ref = $paymentData['reference'];
            $callback_url = $paymentData['callback_url'];
            $postdata =  array('email' => $email, 'amount' => $amount, "reference" => $ref, "callback_url" => $callback_url);
            $url = Config::get('paystack.paymentUrl')."/transaction/initialize";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata));  //Post Fields
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            //
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            $headers = [
                'Authorization: Bearer ' . Config::get('paystack.secretKey'),
                'Content-Type: application/json',
            ];
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $request = curl_exec($ch);
            curl_close($ch);
            //
            if ($request) {
                $result = json_decode($request, true);
            }

            $redir = $result['data']['authorization_url'];
            header("Location: " . $redir);
        }
        //
        $data = array();
        $data['title'] = "Paystack Standard Demo";
        //
        // $this->load->view('paystack_standard', $data);
    }
}
