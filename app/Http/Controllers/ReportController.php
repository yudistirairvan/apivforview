<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Report;
use Illuminate\Support\Carbon;

class ReportController extends Controller
{
    public function satuan()
    {   
        $id = Auth::user()->id;
        $today = Carbon::now()->format('Y-m');
        
        
        $satuan = Report::where([
            ['IdUser', $id],
            ['TypePp', 'satuan'],
            ['created_at', 'like', '%' . $today . '%'],
        ])->get();
        return view('admin.ppsatuan', ['satuan' => $satuan]);
    }
    public function tambahsatuan()
    {
        return view('admin.ppsatuan_tambah');
    }

    public function storesatuan(Request $request)
    {
        $this->validate($request,['jumlah' => 'required','via' => 'required']);
        $id = Auth::user()->id;
        $ig = Auth::user()->id_ig;
        Report::create([
            'IdUser' => $id,
            'AkunIg' => $ig,
            'Jumlah' => $request->jumlah,
            'Via' => $request->via,
            'TypePp' => 'satuan',
            'UpdatedBy' => '-',
            ]);

        return redirect('/admin/pp/satuan');
    }
    public function editsatuan($id)
    {
        $satuan = Report::find($id);
        return view('admin.ppsatuan_edit', ['satuan' => $satuan]);
    }
    public function updatesatuan($id, Request $request)
    {

        $this->validate($request,['jumlah' => 'required','via' => 'required']);
        $iduser = Auth::user()->id;

        $satuan = Report::find($id);
        $satuan->Jumlah=$request->jumlah;
        $satuan->Via=$request->via;
        $satuan->UpdatedBy=$iduser;
        $satuan->save();
        return redirect('/admin/pp/satuan');
    }
    public function deletesatuan($id)
    {
        $satuan = Report::find($id);
        $satuan->delete();
        return redirect('/admin/pp/satuan');
    }
    




    public function borongan()
    {
        $id = Auth::user()->id;
        $today = Carbon::now()->format('Y-m');
    
        $borongan = Report::where([
            ['IdUser', $id],
            ['TypePp', 'borongan'],
            ['created_at', 'like', '%' . $today . '%'],
        ])->get();
        return view('admin.ppborongan', ['borongan' => $borongan]);
    }
    public function tambahborongan()
    {
        return view('admin.ppborongan_tambah');
    }

    public function storeborongan(Request $request)
    {
        $this->validate($request,['jumlah' => 'required','via' => 'required']);
        $id = Auth::user()->id;
        $ig = Auth::user()->id_ig;
        Report::create([
            'IdUser' => $id,
            'AkunIg' => $ig,
            'Jumlah' => $request->jumlah,
            'Via' => $request->via,
            'TypePp' => 'borongan',
            'UpdatedBy' => '-',
            ]);

        return redirect('/admin/pp/borongan');
    }
    public function editborongan($id)
    {
        $borongan = Report::find($id);
        return view('admin.ppborongan_edit', ['borongan' => $borongan]);
    }
    public function updateborongan($id, Request $request)
    {

        $this->validate($request,['jumlah' => 'required','via' => 'required']);
        $iduser = Auth::user()->id;

        $borongan = Report::find($id);
        $borongan->Jumlah=$request->jumlah;
        $borongan->Via=$request->via;
        $borongan->UpdatedBy=$iduser;
        $borongan->save();
        return redirect('/admin/pp/borongan');
    }
    public function deleteborongan($id)
    {
        $borongan = Report::find($id);
        $borongan->delete();
        return redirect('/admin/pp/borongan');
    }



}
