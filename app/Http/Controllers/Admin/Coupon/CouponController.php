<?php

namespace App\Http\Controllers\Admin\Coupon;

use App\Model\Admin\Coupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class CouponController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $coupon = Coupon::get();
        return view('admin.coupon.view', compact('coupon'));
    }

    public function edit(Coupon $coupon)
    {
        return view('admin.coupon.edit', compact('coupon'));
    }

    public function update(Request $request, Coupon $coupon)
    {
        $data  = $request->validate([
            'coupon' => ['required', 'min:3', 'alpha'],
            'discount' => ['required', 'min:3', 'numeric']
        ]);
        $coupon_token = hash('sha1', $request->input('coupon'));
        $data = array_merge($data, ['coupon_token' => $coupon_token]);
        if ($coupon_token === $coupon->coupon_token && $request->input('discount') === $coupon->discount) {
            toast('There is nothing to update!', 'info');
        } else {
            $coupon->update($data) ? toast('Updated Successfully!', 'success') : toast('Update failed!', 'failure');
        }
        return redirect()->route('admin.coupon.show');
    }

    public function create(Request $request)
    {
        $data  = $request->validate([
            'coupon' => ['required', 'min:3', 'alpha'],
            'discount' => ['required', 'min:3', 'numeric']
        ]);
        $coupon_token = hash('sha1', $request->input('coupon'));
        $coupon = Coupon::where('coupon_token', $coupon_token)->first();
        if($coupon)
        {
            toast('Coupon code already exists!', 'warning');
        }else{
            $data = array_merge($data, ['coupon_token' => $coupon_token]);
            Coupon::create($data) ? toast('Added Successfully!', 'success') : '';
        }
        return redirect()->route('admin.coupon.show');
    }

    public function delete(Coupon $coupon)
    {
        $coupon->delete($coupon) ? toast('Deleted Successfully!', 'success') : '';
        return redirect()->route('admin.coupon.show');
    }
}
