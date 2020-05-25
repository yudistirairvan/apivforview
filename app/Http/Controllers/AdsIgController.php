<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\AdsIg;
use App\AdsPaket;
use App\AdsPayment;

class AdsIgController extends Controller
{
    public function index(){

        $adsig = AdsIg::all();
        $paket = AdsPaket::all();
        return view('adsig',['adsig' => $adsig,'paket' => $paket]);
    }
    public function tambah()
    {
        $paket = AdsPaket::all();
        return view('adsig_tambah',['paket' => $paket]);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'idpaket' => 'required',
            'picemail' => 'required',
            'picphone' => 'required',
            'tanggalpengajuan' => 'required',
            'jampengajuan' => 'required']);
        $string=Str::random(8);
        $transaction="WP$string";
        AdsIg::create([
            'transaction'=> $transaction,
            'id_paket' => $request->idpaket,
            'jenis_iklan' => 'Instagram',
            'tanggal_pengajuan' => $request->tanggalpengajuan,
            'jam_pengajuan' => $request->jampengajuan,
            'tanggal_disetujui' => '-',
            'jam_disetujui' => '-',
            'pic_email' => $request->picemail,
            'pic_phone' => $request->picphone,
            'catatan' => $request->catatan,
            //status 5 pengajuan iklan belum bayar, 4 pengajuan iklan telah bayar, 3 telah bayar jadwal ditolak, 2 telah bayar setuju jadwal, 1 dijadwalkan,
            'status_adsig' => 'Pengajuan iklan belum bayar'
             ]);

        AdsPayment::create([
            'transaction'=> $transaction,
            'id_paket' => $request->idpaket,
            'jenis_iklan' => 'Instagram',
            'bukti_pembayaran' => "Belum Ada",
            'status_pembayaran' => "Belum konfirmasi"

        ]);
        return redirect('/admin/ads/instagram');
    }
    public function pengajuan()
    {
        $paket = AdsPaket::all();
        return view('adsig_pengajuan',['paket' => $paket]);

    }
    public function prosespengajuan(Request $request)
    {
        $this->validate($request,[
            'idpaket' => 'required',
            'jenisiklan' => 'required',
            'picemail' => 'required',
            'picphone' => 'required',
            'tanggalpengajuan' => 'required',
            'jampengajuan' => 'required']);


        AdsIg::create([
            'id_paket' => $request->id_paket,
            'jenis_iklan' => 'Instagram',
            'tanggal_pengajuan' => $request->tanggalpengajuan,
            'jam_pengajuan' => $request->jampengajuan,
            'tanggal_disetujui' => '-',
            'jam_disetujui' => '-',
            'pic_email' => $request->picemail,
            'pic_phone' => $request->picphone,
            'catatan' => $request->catatan,
            'status_adsig' => '4'
            ]);

        return redirect('/admin/ads/instagram');
    }
    public function schedule()
    {

        return view('adsig_schedule');

    }
    public function prosesschedule($id,Request $request)
    {
        $this->validate($request,[
            'tanggaldisetuji' => 'required',
            'jamdisetujui' => 'required']);


        $adsig = AdsIg::find($id);
        $adsig->tanggal_disetujui=$request->tanggaldisetujui;
        $adsig->jam_disetujui=$request->jamdisetuji;
        $adsig->save();

        return redirect('/admin/ads/instagram');
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

        $adsig = AdsIg::find($id);
        $adsig->tanggal_disetujui=$request->tanggaldisetujui;
        $adsig->jam_disetujui=$request->jamdisetuji;
        $adsig->save();
        return redirect('/admin/ads/paket');
    }
    public function delete($id)
    {
        $adsig = AdsIg::find($id);
        $adsig->delete();
        return redirect('/admin/ads/instagram');
    }
}
