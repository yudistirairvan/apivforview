<?php

namespace App\Http\Controllers;

// use App\artikel;
// use App\ContactUS;
// use App\Subscriber;
// use App\User;
use App\Profile;
use App\Link;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

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
    public function user(){

        $id = Auth::user()->id;
        $user = DB::table('users')
        ->join('profiles','users.id', '=', 'profiles.IdUser')
        ->select(
            'users.name',
            'profiles.Saldo',
            'profiles.LastName'
        )
        ->where('IdUser', $id)
        ->get();
        return view('user', ['user' => $user]);

    }

}
