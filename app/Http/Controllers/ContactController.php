<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    // Show the contact form
    public function showForm()
    {
        return view('dashboard');
    }

    // Handle form submission and send email
    public function sendEmail(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        // Send the email
        Mail::to('jastincabudol5@gmail.com')->send(new ContactFormMail($validatedData));
        // dd($validatedData);

        // Redirect back with a success message
        return redirect()->route('dashboard')->with('success', 'Your message has been sent!');
    }
}
