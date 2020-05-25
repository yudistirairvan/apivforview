<?php

namespace App\Http\Controllers;

// use App\artikel;
// use App\ContactUS;
// use App\Subscriber;
// use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{


    public function index(){

        // $jumlahartikel = artikel::where('publish', 1)->count();
        // $jumlahpesan = ContactUS::all()->count();
        // $jumlahsubscriber = Subscriber::where('status', 1)->count();
        // $jumlahuser = User::all()->count();
        // return view('admin.admdashboard', ['artikel' => $jumlahartikel,'pesan' => $jumlahpesan,'subscribe' => $jumlahsubscriber,'user' => $jumlahuser]);
        return view('admin.admdashboard' );

    }

}
