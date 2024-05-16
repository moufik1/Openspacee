<?php

namespace App\Http\Controllers\Member;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        // Send email
        Mail::to('falsheg39@gmail.com')->send(new ContactMail($data));

        // Optionally, you can store the message in the database or perform other actions

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
