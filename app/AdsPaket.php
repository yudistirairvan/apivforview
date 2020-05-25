<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdsPaket extends Model
{
    protected $table = 'AdsPakets';
    protected $fillable = [
        'nama_paket',
        'gambar',
        'jenis_paket',
        'harga',
        'deskripsi',
        'status_paket'];
}
