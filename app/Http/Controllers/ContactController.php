<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Mail\AutoReplyMail; // NEW MAIL CLASS ADDED

class ContactController extends Controller
{
    /**
     * Handles the submission of the contact form and implements dual dispatch.
     */
    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Define the production admin email address
        $adminEmail = 'Admin@jordansmobilefleetservice.com'; 
        
        // --- CLEANED UP FOR PRODUCTION USE ---
        // Removed the temporary $testAdminRequestEmail variable.

        try {
            // 1. Dispatch to Admin (Mail goes to the true admin address)
            Mail::to($adminEmail)->send(new ContactFormMail($validatedData));
            
            // 2. Dispatch Auto-Reply to User (Mail goes to the user's input email)
            Mail::to($validatedData['email'])->send(new AutoReplyMail($validatedData));
            
            return back()->with('success', 'Thank you! Your service request has been sent successfully. A confirmation email has been sent to your inbox.');
        } catch (\Exception $e) {
            \Log::error('Contact form dual email dispatch failed: ' . $e->getMessage());
            
            return back()->with('error', 'Sorry, there was an issue sending your message. Please try calling us instead.');
        }
    }
}