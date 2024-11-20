<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function submit(Request $request)
    {

        // Capture the data
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);        

        // Process the data (e.g., validation , sending email)
        
        return back()->with('success', 'Thank you for your message!');
    }
}

