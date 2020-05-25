<?php

namespace App;

use App\Hashers\ArtikelHasher;
use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    protected $table = 'artikels';
    protected $fillable = [
        'id_artikel',
        'id_user',
        'id_kategori',
        'judul',
        'day',
        'month',
        'year',
        'edited',
        'publish',
        'konten',
        'gambar',
        'file'
    ];

    public function getHashId()
    {
        return ArtikelHasher::encode($this->id);
    }
}
