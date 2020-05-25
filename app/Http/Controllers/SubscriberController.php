<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function index()
    {
        $subscriber = Subscriber::all();
        return view('subscriber', ['subscriber' => $subscriber]);
    }
    public function add(Request $request)
    {
        $this->validate($request,['email' => 'required']);

        Subscriber::create([
            'email' => $request->email,
            'status' => '1']);

        return redirect('/');
    }
    public function subscribe($id)
    {

        $subscriber = Subscriber::find($id);
        $subscriber->status='1';
        $subscriber->save();
        return redirect('/admin/subscriber');
    }
    public function unsubscribe($id)
    {

        $subscriber = Subscriber::find($id);
        $subscriber->status='0';
        $subscriber->save();
        return redirect('/admin/subscriber');
    }
}
