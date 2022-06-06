<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Http\Controllers\ContactController;
use Mail;

class ContactController extends Controller
{
    public function contact()

    {
        return view('contact');
    }

    public function sendEmail(Request $request)

    {
        $details= [ 
             'name'=>$request->name,
             'email'=>$request->email,
             'phone'=>$request->phone,
             'subject'=>$request->subject,
             'message'=>$request->message,
        ];
        Mail::to('alexchambika85@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent','message was sent!');    
    
    
    }



}
