<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = kategori::all();
        return view('kategori', ['kategori' => $kategori]);
    }
    public function tambah()
    {
        return view('kategori_tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request,['namakategori' => 'required']);

        kategori::create(['kategori' => $request->namakategori]);

        return redirect('/admin/kategori');
    }
    public function edit($id)
    {
        $kategori = kategori::find($id);
        return view('kategori_edit', ['kategori' => $kategori]);
    }
    public function update($id, Request $request)
    {
        $this->validate($request,['namakategori'=>'required']);

        $kategori = kategori::find($id);
        $kategori->kategori=$request->namakategori;
        $kategori->save();
        return redirect('/admin/kategori');
    }
    public function delete($id)
    {
        $kategori = kategori::find($id);
        $kategori->delete();
        return redirect('/admin/kategori');
    }

}
