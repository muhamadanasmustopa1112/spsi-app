<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\SendMessage;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
            'subject' => 'required|string|max:255',
        ]);

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
            'subject' => $request->input('subject'),
        ];

        try {
            Mail::to('muhamadanasmustopa@ptspsi.co.id')->send(new SendMessage($data)); 

            return redirect()->route('contact')->with('success', 'Email sent successfully!');

        } catch (\Exception $e) {
            Log::error('Email sending failed: ' . $e->getMessage());
            return redirect()->route('contact')->with('error', $e->getMessage());
        }
    }
}
