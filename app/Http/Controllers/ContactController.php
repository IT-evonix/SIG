<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('pages.contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:30', 'regex:/^[a-zA-Z\s]+$/'],
            'email'   => ['required', 'email', 'max:100'],
            'phone'   => ['required', 'digits:10'],
            'message' => ['nullable', 'string', 'max:200'],
        ], [
            'name.required'  => 'Please enter your name.',
            'name.regex'     => 'Name must only contain letters and spaces (no numbers or special characters).',
            'name.max'       => 'Name may not be greater than 30 characters.',
            'email.required' => 'Please enter your email address.',
            'email.email'    => 'Please enter a valid email address.',
            'email.max'      => 'Email may not be greater than 100 characters.',
            'phone.required' => 'Please enter your phone number.',
            'phone.digits'   => 'Phone number must be exactly 10 digits.',
            'message.max'    => 'Message may not be greater than 200 characters.',
        ]);

        Contact::create([
            'User_Name' => $validated['name'],
            'Email'     => $validated['email'],
            'Phone_Num' => $validated['phone'],
            'Message'   => $validated['message'] ?? null,
        ]);

        return back()->with('success', 'Thank you! Your message has been sent successfully.');
    }
}
