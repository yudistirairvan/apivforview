<?php

namespace App\Http\Controllers;

use App\ContactUS;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $message = ContactUS::all();
        return view('message', ['message' => $message]);
    }
    public function send(Request $request)
    {
        $this->validate($request,['email' => 'required']);

        ContactUS::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'status' => '1']);

        return redirect('/#contact-section');
    }
    public function arcive($id)
    {

        $message = ContactUS::find($id);
        $message->status='3';
        $message->save();
        return redirect('/admin/message');
    }
    public function unarcive($id)
    {

        $message = ContactUS::find($id);
        $message->status='1';
        $message->save();
        return redirect('/admin/message');
    }
    public function read($id)
    {

        $message = ContactUS::find($id);
        $message->status='2';
        $message->save();
        return redirect('/admin/message');
    }
}
