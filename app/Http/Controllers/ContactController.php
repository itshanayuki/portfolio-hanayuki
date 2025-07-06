<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; // 🟢 baris penting ini
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name'    => 'required',
            'last_name'     => 'required',
            'email'         => 'required|email',
            'country_code'  => 'required',
            'phone_number'  => 'required',
            'company_name'  => 'nullable',
            'country'       => 'required',
            'heard_about'   => 'nullable',
            'message'       => 'nullable',
        ]);

        Contact::create($validated);

        return back()->with('success', 'Thank you for contacting me!');
    }
}
