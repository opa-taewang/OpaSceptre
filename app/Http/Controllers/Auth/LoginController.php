<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
     protected $redirectTo;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // Events on login
    public function authenticated()
    {
        if (Auth::check() && Auth::user()->role->id == 1) {
            $this->redirectTo = route('admin.dashboard');
        } else {
            $this->redirectTo = RouteServiceProvider::HOME;
        }
        // Move visitor's cart to user
        $update = DB::table('carts')
            ->where('identifier', $_COOKIE[strtolower(env('APP_NAME').'_cart')])
            ->update([
                'user_id' => Auth::id(),
                'identifier' => NULL
                ]);
        \App\MyCookie::visitorIdDelete();
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
