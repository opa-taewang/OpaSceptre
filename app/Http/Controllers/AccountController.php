<?php

namespace App\Http\Controllers;

use App\OTP;
use App\User;
use App\Order;
use App\Rules\OTPExists;
use App\ShippingAddress;
use App\Rules\OTPExpired;
use Illuminate\Http\Request;
use App\Mail\OneTimePasswordMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('user.account.dashboard');
    }

    public function update()
    {
        return view('user.account.update');
    }

    public function generateOTP(Request $request)
    {
        if ($request->input('email') === auth()->user()->email) {
            toastr('There is nothing to update', 'failure');
            return redirect()->back();
        }
        $request->validate([
            'email' => ['required', 'string', 'email:rfc,dns', 'max:255', 'unique:users'],
            'newsletter' => ['nullable', 'boolean'],
        ]);

        $otp = rand(10000000,99999999);
        $data = (object) [
            'email' => $request->input('email'),
            'newsletter' => $request->input('newsletter') == 1 ? 1 : 0
        ];
        OTP::where('email', $data->email)->first() ? OTP::where('email', $data->email)->delete() : '';
        OTP::create([
            'email' => $data->email,
            'token' => $otp
        ]) ? Mail::to($request->input('email'))->send(new OneTimePasswordMail($otp)) : '';
        $request->session()->flash('otp_generated', $data);
        return redirect()->back();
    }

    public function updateEmail(Request $request)
    {
        $messsages = array(
            'otp.digits' => 'One Time Password must be eight digit',
        );
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email:rfc,dns'],
            'newsletter' => ['nullable', 'boolean'],
            'otp' => ['digits:8', new OTPExists($request->input('email')), new OTPExpired($request->input('email'))]
        ], $messsages);
        // Data gotten
        $data = (object) [
            'email' => $request->input('email'),
            'newsletter' => $request->input('newsletter')
        ];
        // Redirect if validator fails
        if ($validator->fails()) {
            $request->session()->flash('otp_generated', $data);
            return redirect()->back()
                    ->withErrors($validator)
                        ->withInput();
        }
        // Unsubscribe Olde Email from Newsletter
        $user = User::find(Auth::user()->id);
        DB::table('newsletters')->where('email', $user->email) ? DB::table('newsletters')->where('email', $user->email)->delete() : '';
        // Change email
        $update = $user->update([
            'email' => $data->email
        ]);
        if($update)
        {
            OTP::where('email', $data->email)->delete();
            $data->newsletter == 1 ? DB::table('newsletters')->insert([
                'email' => $data->email,
                'created_at' => now()
            ]) : '';
            toastr('Email Changed Successfully', 'success');
        }else{
            toastr('Email Change Failed', 'failure');
        }
        return redirect()->back();
    }


    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => ['required', 'min:6,'],
            'new_password' => ['required', 'min:6,'],
            'confirm_password' => ['required', 'min:6', 'same:new_password']
        ]);
        if (Hash::check($request->input('old_password'), Auth::user()->password)) {
            $user = User::find(Auth::user()->id);
            $user->update([
                'password' => Hash::make($request->input('new_password'))
            ]);
            toastr('Password changed Successfully', 'success');
        } else {
            toastr('Old Password Incorrect', 'failure');
        }
        return redirect()->back();
    }

    public function updateInformation(Request $request)
    {
        $data = $request->validate([
            'first_name' => ['required', 'min:2,', 'alpha'],
            'middle_name' => ['required', 'min:2,', 'alpha'],
            'last_name' => ['required', 'min:2', 'alpha'],
        ]);
        $user = User::find(Auth::user()->id);
        if(($request->input('first_name') === $user->first_name) && ($request->input('middle_name') === $user->middle_name) && ($request->input('last_name') === $user->last_name)){
            toastr('There is nothing to update', 'failure');
        }else{
            $user->update($data);
            toastr('Details Updated Successfully', 'success');
        }
        return redirect()->back();
    }

    public function order()
    {
        $orders = DB::table('orders')
                    ->where('orders.user_id', Auth::id())
                    ->join('order_statuses', 'order_statuses.id', '=', 'orders.order_status')
                    ->select('orders.*', 'order_statuses.order_status_name')
                    ->orderBy('orders.created_at', 'desc')
                    ->get();
        return view('user.account.order', compact('orders'));
    }

    public function orderDetails(Order $order)
    {
        return view('user.account.orderdetails');
    }

    public function address()
    {
        $shipping_addresses = ShippingAddress::where('shipping_addresses.user_id', Auth::id())
            ->join('states', 'states.id', '=', 'shipping_addresses.state_id')
            ->join('lgareas', 'lgareas.id', '=', 'shipping_addresses.lgarea_id')
            ->select('shipping_addresses.*', 'states.state_name', 'lgareas.lgarea_name', 'lgareas.shipping_fee')
            ->orderByDesc('shipping_addresses.address_default')
            ->get();
        return view('user.account.address', compact('shipping_addresses'));
    }
}
