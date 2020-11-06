<?php

namespace App\Http\Controllers\Admin;

use Cloudinary;
use App\PaymentMethod;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentMethodController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function show()
    {
        $payment_methods = PaymentMethod::get();
        return view('admin.paymentmethod.view', compact('payment_methods'));
    }

    public function edit(PaymentMethod $paymentMethod)
    {
        return view('admin.paymentmethod.edit', compact('paymentMethod'));
    }

    public function updateImage(Request $request, PaymentMethod $paymentMethod)
    {
        $data = $request->validate([
            'payment_logo' => ['required', 'min:3', 'image']
        ]);
        if (request('payment_logo')) {
            $ch = curl_init('https://res.cloudinary.com/opasceptre/image/upload/v1600627348/' . $paymentMethod->paymnet_logo);
            curl_exec($ch);
            curl_getinfo($ch, CURLINFO_HTTP_CODE) == 200 ? Cloudinary\Uploader::destroy($paymentMethod->payment_logo) : '';
            $payment_logo = $request->file('payment_logo')->getRealPath();
            $payment_logo = Cloudinary\Uploader::upload($payment_logo, array(
                "width" => 2048,
                "height" => 1024,
                "crop" => "scale",
                "background_removal" => "cloudinary_ai",
                "use_filename" => true,
                "folder" => "payment_method/"
            ));
            $paymentMethod->update(['brand_logo' => $payment_logo['public_id']]) ? toastr($paymentMethod->payment_name.'Logo Updated Successfully', 'success') : toastr($paymentMethod->payment_name.'Logo Updated Successfully failed!', 'failure');
        }
        return redirect()->route('admin.paymentMethod.show');
    }

    public function updateStatus(PaymentMethod $paymentMethod)
    {
        $paymentMethod->payment_status = ($paymentMethod->payment_status == 1) ? 0 : 1;
        dd($paymentMethod->save());
        ($paymentMethod->status == 1) ? toastr(ucfirst($paymentMethod->payment_name) ." Activated successfully", 'success') :
            toastr(ucfirst($paymentMethod->payment_name) ." Deactivated successfully", 'success');
        return $paymentMethod->status;
    }
}
