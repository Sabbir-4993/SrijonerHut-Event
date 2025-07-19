<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);

        $data = $request->only('username', 'phone', 'email', 'subject', 'message');

        Mail::send([], [], function ($message) use ($data) {
            $message->to('sabbir5795@email.com')  // ✅ Replace with your receiving email
            ->from('noreply@srijonerhut.com', 'Website Contact')
                ->subject('Contact Form: ' . $data['subject'])
                ->html("
                <h2>New Contact Form Submission</h2>
                <p><strong>Name:</strong> {$data['username']}</p>
                <p><strong>Phone:</strong> {$data['phone']}</p>
                <p><strong>Email:</strong> {$data['email']}</p>
                <p><strong>Subject:</strong> {$data['subject']}</p>
                <p><strong>Message:</strong><br>" . nl2br(e($data['message'])) . "</p>
            ");
        });

        return redirect()->back()->with('success', 'Thank you! Your message has been sent.');
    }
}
