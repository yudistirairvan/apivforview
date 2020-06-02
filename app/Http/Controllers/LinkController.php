<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;
use App\Profile;
use App\LogData;
use Auth;
use Illuminate\Support\Facades\DB;

class LinkController extends Controller
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
            'profiles.LastName',
            'profiles.Picture'
        )
        ->where('IdUser', $id)
        ->get();

        //get all link by user ID 
        $link = DB::table('links')
        ->where('IdUser', $id)
        ->orderByDesc('id')
        ->get();
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
            'profiles.LastName',
            'profiles.Picture'
        )
        ->where('IdUser', $id)
        ->get();
        if ($user[0]->Saldo<6){
            //jika saldo dibawah 6 maka redirect ke halaman view
            return redirect('/user/view');
        }else{
            return view('user.link_tambah', ['user' => $user]);
        }

        
    }

    public function store(Request $request)
    {
        //get id user yang login
        $id = Auth::user()->id;
        //validasi harus input field link
        $this->validate($request,['link' => 'required']);
        //get saldo user
        $user = DB::table('users')
        ->join('profiles','users.id', '=', 'profiles.IdUser')
        ->select('profiles.Saldo')
        ->where('IdUser', $id)
        ->get();
        //input data link
        $inputlink = link::create([
            'IdUser' => $id,
            'Judul' => $request->judul,
            'Link' => $request->link,
            'Waktu' => $request->waktu,
            'Status' => 'Aktif',
            ]);
        //input log    
        LogData::create([
            'Person' => $id,
            'IdLink' => $inputlink->id,
            'LogType' => 'Add Link',
            'Gate' => 'Web',
            'SaldoAwal' => $user[0]->Saldo,
            'Credit' => $request->waktu,
            'Debit' => '0',
            'SaldoAkhir' => $user[0]->Saldo-$request->waktu,
            'Status' => '1',
        ]);
        //get profile id untuk update saldo
        $profile = Profile::where([
            ['IdUser', $id ]
        ])->limit(1)->get();
        $profileid=$profile[0]->id;
        //update Saldo
        $profile = Profile::find($profileid);
        $profile->Saldo=$user[0]->Saldo-$request->waktu;
        $profile->save();

        return redirect('/user/link');
    }
    public function edit($id)
    {
        $idu = Auth::user()->id;
        $user = DB::table('users')
        ->join('profiles','users.id', '=', 'profiles.IdUser')
        ->select(
            'users.name',
            'profiles.Saldo',
            'profiles.LastName',
            'profiles.Picture'

        )
        ->where('IdUser', $idu)
        ->get();
        $link = link::find($id);
        return view('user.link_edit', ['link' => $link,'user' => $user]);
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
    public function deletemyvideo($id)
    {
        $link = link::find($id);
        $link->delete();
        return redirect('/user/myprofile');
    }
}
