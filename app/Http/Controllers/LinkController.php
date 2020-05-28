<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;
use Auth;
use Illuminate\Support\Facades\DB;

class LinkController extends Controller
{
    public function index()
    {
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
        $link = Link::all();
        return view('user.link', ['link' => $link, 'user' => $user]);
    }
    public function tambah()
    {
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
        return view('user.link_tambah', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $id = Auth::user()->id;
        $this->validate($request,['link' => 'required']);

        link::create([
            'IdUser' => $id,
            'Judul' => $request->judul,
            'Link' => $request->link,
            'Waktu' => $request->waktu,
            'Status' => 'Aktif',
            ]);

        return redirect('/user/link');
    }
    public function edit($id)
    {
        $link = link::find($id);
        return view('user.link_edit', ['link' => $link]);
    }
    public function update($id, Request $request)
    {
        $this->validate($request,['link'=>'required']);

        $link = link::find($id);
        $link->Judul=$request->judul;
        $link->Link=$request->link;
        $link->save();
        return redirect('/user/link');
    }
    public function delete($id)
    {
        $link = link::find($id);
        $link->delete();
        return redirect('/user/link');
    }

}
