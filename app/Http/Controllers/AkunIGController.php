<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AkunIG;

class AkunIGController extends Controller
{
    public function index()
    {
        $akunig = AkunIG::all();
        return view('admin.akunig', ['akunig' => $akunig]);
    }
    public function tambah()
    {
        return view('admin.akunig_tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request,['namaakun' => 'required']);

        AkunIG::create([
            'NamaAkun' => $request->namaakun,
            'Followers' => $request->followers,
            'ProfileVisitor' => $request->profilevisitor,
            'Status' => '1',
            ]);

        return redirect('/admin/akun');
    }
    public function edit($id)
    {
        $akunig = AkunIG::find($id);
        return view('admin.akunig_edit', ['akunig' => $akunig]);
    }
    public function update($id, Request $request)
    {
        $this->validate($request,['namaakun'=>'required']);

        $akunig = AkunIG::find($id);
        $akunig->NamaAkun=$request->namaakun;
        $akunig->Followers=$request->followers;
        $akunig->ProfileVisitor=$request->profilevisitor;
        $akunig->save();
        return redirect('/admin/akun');
    }
    public function delete($id)
    {
        $akunig = AkunIG::find($id);
        $akunig->delete();
        return redirect('/admin/akun');
    }
}
