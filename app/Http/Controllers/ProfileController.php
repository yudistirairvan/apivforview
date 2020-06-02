<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Auth;
use Illuminate\Support\Facades\DB;
use App\User;

class ProfileController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $profile = Profile::where([
            ['IdUser', $id ]
        ])->limit(1)->get();
        if ($profile->isEmpty()){
            
            Profile::create([
                'IdUser' => $id,
                'LastName' => '-',
                'Picture' => 'person_1.jpg',
                'Saldo' => '-',
                'Phone' => '-',
                'Chanellink' => '-',
                'Instagramlink' => '-',
                'facebooklink' => '-',
                ]);
    
            return redirect('/user/myprofile');


        }else {


            return redirect('/user/myprofile');
        }
        
    }
    public function myprofile()
    {      
        $id = Auth::user()->id;
        $user = DB::table('users')
        ->join('profiles','users.id', '=', 'profiles.IdUser')
        ->select(
            'users.id',
            'users.name',
            'users.email',
            'profiles.Saldo',
            'profiles.LastName',
            'profiles.Picture',
            'profiles.Chanellink',
            'profiles.Instagramlink',
            'profiles.facebooklink',
            'profiles.Phone'
            
        )
        ->where('IdUser', $id)
        ->get();
        $mylink = DB::table('links')
        ->where('IdUser', $id)
        ->orderByDesc('id')
        ->get();
        return view('user.profile', ['user' => $user,'links' => $mylink]);
    }
    public function edit()
    {
        $id = Auth::user()->id;
        $profile = Profile::where([
            ['IdUser', $id ]
        ])->limit(1)->get();
        return view('user.profile_edit', ['profile' => $profile]);
    }
    public function editfoto()
    {
        $id = Auth::user()->id;
        $user = Profile::where([
            ['IdUser', $id ]
        ])
        ->select(
            'Picture'
        )
        ->limit(1)->get();
        return view('user.edit_foto', ['user' => $user]);
    }
    public function updatefoto( Request $request)
    {   
        $id = Auth::user()->id;
         // menyimpan gambar yang diupload ke variabel $file
	    $gambar = $request->file('gambar');
        // nama file
        $gambar->getClientOriginalName();
        $namagambar=$gambar->getClientOriginalName();
        // ekstensi file
        $gambar->getClientOriginalExtension();
        // real path
        $gambar->getRealPath();
        // ukuran file
        // $file->getSize();
        // tipe mime
        $gambar->getMimeType();
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'images/users';
        $gambar->move($tujuan_upload,$gambar->getClientOriginalName());

        Profile::where('IdUser',$id)->update([
            'Picture' =>  $namagambar
            ]);
        return redirect('/user/myprofile');
    }
    public function update($id, Request $request)
    {
        $profile = Profile::find($id);
        
        $profile->LastName=$request->lastname;
        $profile->Phone=$request->phone;
        $profile->Chanellink=$request->channel;
        $profile->Instagramlink=$request->instagram;
        $profile->facebooklink=$request->fb;
        $profile->save();
        return redirect('/user/myprofile');
    }
    public function updateuser($id, Request $request)
    {
        
        $user = User::find($id);
        $user->name=$request->name;
        $user->save();

        Profile::where('IdUser',$id)->update([
            'LastName' => $request->lastname,
            'Phone' => $request->phone,
            'Chanellink' => $request->channel,
            'Instagramlink' => $request->instagram,
            'facebooklink' => $request->fb,

            ]);
        return redirect('/user/myprofile');
    }
    
}
