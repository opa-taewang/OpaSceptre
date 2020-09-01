<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request as Request;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function profile()
    {
        return view('admin.account.profile');
    }
    public function changepassword()
    {
        return view('admin.account.changepassword');
    }

    public function submitchangepassword(Request $request)
    {
        $request->validate([
            'old_password' => ['required','min:6,'],
            'new_password' => ['required','min:6,'],
            'confirm_password' => ['required','min:6', 'same:new_password']
        ]);
        if(Hash::check($request->input('old_password'), Auth::user()->password))
        {
            $user = User::find(Auth::user()->id);
            $user->update([
                'password' => Hash::make($request->input('new_password'))
            ]);
        }else{
            return redirect()->route('admin.change-password')->with('message', 'Old Password Incorrect');
        }

        return redirect()->route('admin.change-password')->with('message', 'Password changed successfully');
    }
}
