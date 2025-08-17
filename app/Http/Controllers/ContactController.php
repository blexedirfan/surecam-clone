<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'subject' => 'required|string|max:150',
            'message' => 'required|string|max:500',
        ]);

        // Example: store in database or send email
        // For now, let’s just flash a success message
        return back()->with('success', 'Thank you! Your message has been sent.');
    }
}
