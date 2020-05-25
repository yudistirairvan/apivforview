<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdsPaket;

class AdsPaketController extends Controller
{
    public function index(){

        $paket = AdsPaket::all();
        return view('paket',['paket' => $paket]);
    }
    public function tambah()
    {
        return view('paket_tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'namapaket' => 'required',
            'jenispaket' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required']);

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
        $tujuan_upload = 'ads_data_gambar';
        $gambar->move($tujuan_upload,$gambar->getClientOriginalName());
        AdsPaket::create([
            'nama_paket' => $request->namapaket,
            'jenis_paket' => $request->jenispaket,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'gambar' => $namagambar,
            'status_paket' => '1'
            ]);

        return redirect('/admin/ads/paket');
    }
    public function edit($id)
    {
        $paket = AdsPaket::find($id);
        return view('paket_edit', ['paket' => $paket]);
    }
    public function update($id, Request $request)
    {
        $this->validate($request,[
            'namapaket' => 'required',
            'jenispaket' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required']);

        $paket = AdsPaket::find($id);
        $paket->nama_paket=$request->namapaket;
        $paket->jenis_paket=$request->jenispaket;
        $paket->harga=$request->harga;
        $paket->deskripsi=$request->deskripsi;
        $paket->save();
        return redirect('/admin/ads/paket');
    }
    public function delete($id)
    {
        $paket = AdsPaket::find($id);
        $paket->delete();
        return redirect('/admin/ads/paket');
    }
}
