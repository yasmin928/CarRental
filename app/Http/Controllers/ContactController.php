<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\Contact_UsMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate form data
        $validated = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:contacts,email',
            'title' => 'required|string|max:255',
            'message_content' => 'required|string',
        ]);

        // Save data to the database
        $contact = Contact::create($validated);

        // Send email
        Mail::to('info@yourdomain.com')->send(new Contact_UsMail($contact));

        // Redirect or return response
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}