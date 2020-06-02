<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        //get id user yang login
        $id = Auth::user()->id;
        //get profile
        $user = DB::table('users')
        ->join('profiles','users.id', '=', 'profiles.IdUser')
        ->select(
            'users.name',
            'profiles.Saldo',
            'profiles.Picture',
            'profiles.LastName'
        )
        ->where('IdUser', $id)
        ->get();

        //get all link by user ID 
        $link = DB::table('links')
        ->join('users','links.IdUser', '=', 'users.id')
        ->select(
            'users.name',
            'links.id',
            'links.Judul',
            'links.Waktu',
            'links.Status',
            'links.created_at'
        )
        ->where('IdUser','!=', $id)
        ->orderByDesc('links.id')
        ->get();
        return view('user.view', ['link' => $link, 'user' => $user]);
    }
    public function play($idlink)
    {
        //get id user yang login
        $id = Auth::user()->id;
        //get profile
        $user = DB::table('users')
        ->join('profiles','users.id', '=', 'profiles.IdUser')
        ->select(
            'users.name',
            'profiles.Saldo',
            'profiles.Picture',
            'profiles.LastName'
            
        )
        ->where('IdUser', $id)
        ->get();

        //get all link by user ID 
        $link = DB::table('links')
        ->where('id', $idlink)
        ->orderByDesc('id')
        ->get();
        return view('user.play', ['link' => $link, 'user' => $user]);
    }
    public function myvideo($id)
    {
                //get id user yang login
        $idu = Auth::user()->id;
        //get profile
        $user = DB::table('users')
        ->join('profiles','users.id', '=', 'profiles.IdUser')
        ->select(
            'users.name',
            'profiles.Picture',
            'profiles.LastName'
        )
        ->where('IdUser', $idu)
        ->get();
        $myvideo = Link::find($id);
        return view('user.myvideo', ['myvideo' => $myvideo, 'user' => $user]);
    }

}
