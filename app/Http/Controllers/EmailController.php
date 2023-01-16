<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = array('name' => 'Testing', 'email' => $request->email, 'subject' => $request->subject);
        Mail::send(['text' => 'home'], $data, function ($message) {
            $message->to('riegerlukas1945@gmail.com', 'Akbar R')->subject('Testing');
            $message->from('test@gmail.com', 'Testing');
        });

        return redirect()->route('home')->with('success', 'Email sent successfully !');
    }
}
