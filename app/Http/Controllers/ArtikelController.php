<?php

namespace App\Http\Controllers;

use App\artikel;
use App\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {

        $artikel = artikel::all()->sortByDesc('id');
        return view('artikel', ['artikel' => $artikel]);
    }
    public function tambah()
    {
        $kategori = kategori::all();
        return view('admin.artikel_tambah', ['kategori' => $kategori]);
    }
    public function store(Request $request)
    {
        // menyimpan data file yang diupload ke variabel $file
	    $file = $request->file('file');
        // nama file
        $file->getClientOriginalName();
        $namafile=$file->getClientOriginalName();
        // ekstensi file
        $file->getClientOriginalExtension();
        // real path
        $file->getRealPath();
        // ukuran file
        // $file->getSize();
        // tipe mime
        $file->getMimeType();
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$file->getClientOriginalName());


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
        $tujuan_upload = 'data_gambar';
        $gambar->move($tujuan_upload,$gambar->getClientOriginalName());


        artikel::create([
            'id_user' => '1',
            'id_kategori' => $request->idkategori,
            'judul' => $request->judul,
            'day' => $day=date("d"),
            'month' => $month=date("F"),
            'year' => $year=date("Y"),
            'edited' => '0',
            'publish' => '0',
            'konten' => $request->konten,
            'gambar' => $namagambar,
            'file' => $namafile
            ]);
        return redirect('/admin/artikel');
    }
    public function tambahtanpafile()
    {
        $kategori = kategori::all();
        return view('admin.artikel_tambah_tanpa_file', ['kategori' => $kategori]);
    }
    public function storenofile(Request $request)
    {
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
        $tujuan_upload = 'data_gambar';
        $gambar->move($tujuan_upload,$gambar->getClientOriginalName());


        artikel::create([
            'id_user' => '1',
            'id_kategori' => $request->idkategori,
            'judul' => $request->judul,
            'day' => $day=date("d"),
            'month' => $month=date("F"),
            'year' => $year=date("Y"),
            'edited' => '0',
            'publish' => '0',
            'konten' => $request->konten,
            'gambar' => $namagambar,
            'file' => 'No File'
            ]);
        return redirect('/admin/artikel');
    }
    public function edit($id)
    {
        $kategori = kategori::all();
        $artikel = artikel::find($id);
        return view('admin.artikel_edit', ['artikel' => $artikel,'kategori' => $kategori]);
    }
    public function update($id, Request $request)
    {

        $artikel = artikel::find($id);
        $artikel->id_user='1';
        $artikel->id_kategori=$request->idkategori;
        $artikel->judul=$request->judul;
        $artikel->edited=date("d/F/Y");
        $artikel->konten=$request->konten;
        $artikel->save();
        return redirect('/admin/artikel');
    }
    public function delete($id)
    {
        $artikel = artikel::find($id);
        $artikel->delete();
        return redirect('/admin/artikel');
    }
    public function publish($id)
    {
        $artikel = artikel::find($id);
        $artikel->publish='1';
        $artikel->save();
        return redirect('/admin/artikel');
    }
    public function unpublish($id)
    {
        $artikel = artikel::find($id);
        $artikel->publish='0';
        $artikel->save();
        return redirect('/admin/artikel');
    }
    public function editgambar($id)
    {
        $kategori = kategori::all();
        $artikel = artikel::find($id);
        return view('admin.artikel_editgambar', ['artikel' => $artikel,'kategori' => $kategori]);
    }
    public function progressgambar($id, Request $request)
    {
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
        $tujuan_upload = 'data_gambar';
        $gambar->move($tujuan_upload,$gambar->getClientOriginalName());



        $artikel = artikel::find($id);
        $artikel->id_user='1';
        $artikel->id_kategori=$request->idkategori;
        $artikel->judul=$request->judul;
        $artikel->edited=date("d/F/Y");
        $artikel->konten=$request->konten;
        $artikel->gambar=$namagambar;
        $artikel->save();
        return redirect('/admin/artikel');
    }
    public function editfile($id)
    {
        $kategori = kategori::all();
        $artikel = artikel::find($id);
        return view('admin.artikel_editfile', ['artikel' => $artikel,'kategori' => $kategori]);
    }
    public function progressfile($id, Request $request)
    {
        // menyimpan data file yang diupload ke variabel $file
	    $file = $request->file('file');
        // nama file
        $file->getClientOriginalName();
        $namafile=$file->getClientOriginalName();
        // ekstensi file
        $file->getClientOriginalExtension();
        // real path
        $file->getRealPath();
        // ukuran file
        // $file->getSize();
        // tipe mime
        $file->getMimeType();
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$file->getClientOriginalName());

        $artikel = artikel::find($id);
        $artikel->id_user='1';
        $artikel->id_kategori=$request->idkategori;
        $artikel->judul=$request->judul;
        $artikel->edited=date("d/F/Y");
        $artikel->konten=$request->konten;
        $artikel->file=$namafile;
        $artikel->save();
        return redirect('/admin/artikel');
    }

    public function home()
    {

        // $artikel = artikel::all()->limit('6')->orderBy('id','DESC')->get();
        // $artikel = DB::select('select * from artikels where publish = ? order by id DESC limit 6',[1]);

        $artikel = artikel::where([
            ['id_kategori', 'Blog'],
            ['publish', 1],
        ])->orWhere([
            ['id_kategori', 'Waralaba'],
            ['publish', 1],
        ])->orWhere([
            ['id_kategori', 'SDM'],
            ['publish', 1],
        ])->orWhere([
            ['id_kategori', 'Ads'],
            ['publish', 1],
        ])->orWhere([
            ['id_kategori', 'Frenchise'],
            ['publish', 1],
        ])->limit(6)->orderByDesc('id')->get();
        return view('dashboard', ['artikel' => $artikel]);
    }
    public function read($id)
    {
        $kategori = kategori::all();
        $artikel = artikel::find($id);
        return view('read', ['artikel' => $artikel,'kategori' => $kategori]);
    }

    public function listbykategori($kategoriname)
    {
        $artikel = artikel::where([
            ['id_kategori', $kategoriname],
            ['publish', 1],
        ])->orderByDesc('id')->get();
        return view('listbykategori', ['artikel' => $artikel]);
    }
    public function loker()
    {
        $artikel = artikel::where([
            ['id_kategori', 'Lowongan Kerja'],
            ['publish', 1],
        ])->orderByDesc('id')->get();
        return view('loker', ['artikel' => $artikel]);
    }
    public function readloker($id)
    {
        $kategori = kategori::all();
        $artikel = artikel::find($id);
        return view('readloker', ['artikel' => $artikel,'kategori' => $kategori]);
    }
}
