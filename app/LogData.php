<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogData extends Model
{
    protected $table = 'logdatas';
    protected $fillable = [
        'Person',
        'IdLink',
        'LogType',
        'Gate',
        'SaldoAwal',
        'Credit',
        'Debit',
        'SaldoAkhir',
        'Status'];
}
