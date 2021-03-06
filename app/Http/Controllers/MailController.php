<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MailController extends Controller
{
    public function __construct(Request $request)
    {
        $this->middleware('throttle:2');

        if (\Carbon\Carbon::parse($request->time)->addSeconds(5)->gt(\Carbon\Carbon::now()) || ! empty($request->my_name))
            abort(403, 'No spam');
    }

    public function contact(Request $request)
    {
        \Mail::to(config('brand.emails.info'))->send(new \App\Mail\Admin\Contact($request));
        \Mail::to($request->email)->send(new \App\Mail\Contact($request->name));

        return back()->with('success', 'Thank you, your contact has been successfully received');
    }

    public function consultation(Request $request)
    {
        \Mail::to(config('brand.emails.info'))->send(new \App\Mail\Admin\Contact($request));
        \Mail::to($request->email)->send(new \App\Mail\Contact($request->name));
        
        return back()->with('success', 'Thank you, your contact has been successfully received');
    }

    public function brochure(Request $request)
    {
        \Mail::to(config('brand.emails.info'))->send(new \App\Mail\Admin\Brochure($request->name, $request->email));
        \Mail::to($request->email)->send(new \App\Mail\Brochure($request->name));

        return view('components.forms.responses.brochure')->render();
    }
}
