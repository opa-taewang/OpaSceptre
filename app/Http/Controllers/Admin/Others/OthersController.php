<?php

namespace App\Http\Controllers\Admin\Others;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class OthersController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    // Newsletter view
    public function newsletter()
    {
        $newsletter = DB::table('newsletters')->get();
        return view('admin.others.newsletter', compact('newsletter'));
    }

    // NewsLetter edit
    public function newsletterEdit($newsletter)
    {
        DB::table('newsletters')->find($newsletter) ?  $newsletter = DB::table('newsletters')->find($newsletter) : abort(404);
        return view('admin.others.newsletter_edit', compact('newsletter'));
    }

    // NewsLetter edit
    public function newsletterUpdate(Request $request, $newsletter)
    {

        DB::table('newsletters')->find($newsletter) ?  $newsletter = DB::table('newsletters')->find($newsletter) : abort(404);
        if($request->input('email') === $newsletter->email)
        {
            toastr('There is nothing to update', 'info');
        }else {
            $request->validate([
                'email' => ['required', 'email', 'unique:newsletters']
            ]);

            DB::table('newsletters')->where('id', $newsletter->id)->update([
                'email' => $request->input('email'),
                'updated_at' => now()
            ]) ? toastr('you have updated subscriber successfullty', 'success') : '';
        }
        return redirect()->route('admin.newsletter.show');
    }

    public function newsletterDelete($newsletter)
    {

        DB::table('newsletters')->find($newsletter) ?  $newsletter = DB::table('newsletters')->find($newsletter) : abort(404);

        DB::table('newsletters')->where('id', $newsletter->id)->delete() ? toastr('you have deleted subscriber successfullty', 'success') : '';
        return redirect()->route('admin.newsletter.show');
    }
}
