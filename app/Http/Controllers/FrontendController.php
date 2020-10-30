<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function menu()
    {
        $menu = DB::table('newsletters')->get();
        return $menu;
    }

    public function newsletterStore(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email','unique:newsletters']
        ]);

        DB::table('newsletters')->insert([
            'email' => $request->input('email'),
            'created_at' => now()
        ]) ? toastr('you have subscribed successfullty', 'success') : '';
        return redirect()->back();
    }
}
