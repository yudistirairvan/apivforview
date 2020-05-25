<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AkunIG;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        $akunig = AkunIG::all();
        return view('admin.user', ['user' => $user,'akunig' => $akunig]);
    }
    public function tambah()
    {
        $akunig = AkunIG::all();
        return view('admin.user_tambah',['akunig' => $akunig]);
    }

    public function store(Request $request)
    {
        $this->validate($request,['email' => 'required']);

        $user = User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'hak_akses' => 'super-admin',
            'id_ig' => $request->akunig,
            ]);
        $user->assignRole('super-admin');
        return redirect('/admin/user');
    }
    public function edit($id)
    {
        $akunig = AkunIG::all();
        $user  = User::find($id);
        return view('admin.user_edit', ['user' => $user,'akunig' => $akunig]);
    }
    public function update($id, Request $request)
    {
        $this->validate($request,['email'=>'required']);

        $user = User::find($id);
        $user->name=$request->nama;
        $user->email=$request->email;
        $user->id_ig=$request->akunig;
        $user->save();
        $user->assignRole('super-admin');
        return redirect('/admin/user');
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/user');
    }
}
