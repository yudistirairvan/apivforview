<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Auth;
use Illuminate\Support\Facades\DB;

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
                'Picture' => '-',
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
        return view('user.profile', ['user' => $user]);
    }
    public function edit()
    {
        $id = Auth::user()->id;
        $profile = Profile::where([
            ['IdUser', $id ]
        ])->limit(1)->get();
        return view('user.profile_edit', ['profile' => $profile]);
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
}
