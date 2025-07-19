<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validate the input
        $request->validate([
            'email' => 'required|email',
        ]);

        // Send email
        $email = $request->input('email');
        Mail::to('creativex71@gmail.com')->send(new \App\Mail\NewsletterSubscription($email));

        // You may add a success message or redirect back to the form page
        return back()->with('success', 'Thank you for subscribing to our newsletter!');
    }
}
