<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    /**
     * Display the contact page.
     *
     * @return void
     */
    public function index()
    {
        return view('pages.contact');
    }

    /**
     * Send a contact email.
     *
     * @return void
     */
    public function send(Request $request)
    {
        $request->validate([
            'name'      => 'required|min:3',
            'email'     => 'required|min:5',
            'subject'   => 'required|min:3',
            'message'   => 'required|min:5'
        ]);

        Mail::send('emails/contact', ['content' => $request->message], function ($message) use ($request) {
            $message->from($request->email, $request->name);
            $message->to(env('MAIL_TO'))->subject($request->subject);
        });

        return redirect('/');
    }
}
