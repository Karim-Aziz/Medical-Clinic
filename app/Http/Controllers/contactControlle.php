<?php

namespace App\Http\Controllers;

use App\contact;
use App\settings;
use App\home_desc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class contactControlle extends Controller
{
    //
    public function index()
    {
        $settings = settings::first();
        $contacts = contact::all();
        return view('contact.index', compact(['contacts', 'settings']));
    }

    // insert new contact
    public function insert(Request $request)
    {
        $rules = contact::rules($request);
        $request->validate($rules);
        $credentials = contact::credentials($request);
        $contact = contact::create($credentials);
        if (App::isLocale('ar')) {
            $message = 'تم الاضافه بنجاح';
        } else {
            $message = 'Add success';
        }
        return redirect()->back()->with('message', $message );
    }
}