<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdsPayment extends Model
{
    protected $table = 'Payments';
    protected $fillable = [
        'transaction',
        'id_paket',
        'jenis_iklan',
        'bukti_pembayaran',
        'status_pembayaran'];
}
