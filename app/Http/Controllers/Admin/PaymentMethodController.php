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

    public function store(Request $request)
    {
        $data = $request->validate([
            'payment_name' => ['required', 'min:3', 'alpha', 'unique:payment_methods'],
            'payment_logo' => ['required', 'min:3', 'image']
        ]);
        $payment_info = [$request->input('public_key')];
        $payment_logo = $request->file('payment_logo')->getRealPath();
        $payment_logo = Cloudinary\Uploader::upload($payment_logo, array(
            "width" => 2048,
            "height" => 1024,
            "crop" => "scale",
            "use_filename" => true,
            "folder" => "payment_method/"
        ));
        PaymentMethod::create([
            'brand_name' => $request->input('brand_name'),
            'brand_logo' => $payment_logo['public_id']
        ]) ? toastr('Brand added successfully') : '';
        return redirect()->route('paymentMethod.show');
    }

    public function edit(PaymentMethod $paymentMethod)
    {
        return view('admin.paymentmethod.edit', compact('paymentMethod'));
    }

    public function update(PaymentMethod $paymentMethod, Request $request)
    {
        $data  = $request->validate([
            'brand_name' => ['required', 'min:3', 'alpha'],
            'brand_logo' => ['image', 'nullable']
        ]);
        if ($request->input('brand_name') === $paymentMethod->brand_name && !request('brand_logo')) {
            toastr('There is nothing to update!', 'info');
        } else {
            // Update brand logo
            if (request('brand_logo')) {
                $ch = curl_init('https://res.cloudinary.com/opasceptre/image/upload/v1600627348/' . $paymentMethod->brand_logo);
                curl_exec($ch);
                curl_getinfo($ch, CURLINFO_HTTP_CODE) == 200 ? Cloudinary\Uploader::destroy($paymentMethod->brand_logo) : '';
                $brand_logo = $request->file('brand_logo')->getRealPath();
                $brand_logo = Cloudinary\Uploader::upload($brand_logo, array(
                    "width" => 140,
                    "height" => 60,
                    "crop" => "pad",
                    "use_filename" => false,
                    "folder" => "brands/"
                ));
                $paymentMethod->update(['brand_logo' => $brand_logo['public_id']]) ? toastr('Updated Successfully!', 'success') : toastr('Update failed!', 'failure');
            }
            // Update brand name
            $paymentMethod->update(['brand_name' => $request->input('brand_name')]) ? toastr('Updated Successfully!', 'success') : toastr('Update failed!', 'failure');
            return redirect()->route('admin.brand.show');
        }
        return redirect()->route('admin.paymentMethod.show');;
    }

    public function delete(PaymentMethod $paymentMethod)
    {
        $ch = curl_init('https://res.cloudinary.com/opasceptre/image/upload/v1600627348/' . $paymentMethod->payment_logo);
        curl_exec($ch);
        curl_getinfo($ch, CURLINFO_HTTP_CODE) == 200 ? Cloudinary\Uploader::destroy($paymentMethod->payment_logo) : '';
        $paymentMethod->delete($paymentMethod) ? toastr('Deleted Successfully!', 'success') : '';
        return redirect()->route('admin.paymentMethod.show');
    }
}
