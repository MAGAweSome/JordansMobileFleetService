<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'telephone' => 'nullable',
            'location' => 'nullable',
            'message' => 'required',
        ]);

        Mail::to('admin@jordansmobilefleetservice.com')->send(new ContactFormMail($validatedData));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
