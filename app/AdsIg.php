<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdsIg extends Model
{
    protected $table = 'AdsIgs';
    protected $fillable = [
        'transaction',
        'id_paket',
        'jenis_iklan',
        'tanggal_pengajuan',
        'jam_pengajuan',
        'tanggal_disetujui',
        'jam_disetujui',
        'pic_email',
        'pic_phone',
        'catatan',
        'status_adsig'];
}
