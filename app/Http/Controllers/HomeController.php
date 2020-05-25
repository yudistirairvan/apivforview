<?php

namespace App\Http\Controllers;
use Auth;
use App\artikel;
use App\ContactUS;
use App\Subscriber;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $hak_akses=Auth::user()->hak_akses;
        if ($hak_akses=="user"){
            return view('user');
        }else if ($hak_akses=="super-admin"){
            return view('home');
        }
    
    }
}
