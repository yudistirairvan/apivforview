<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AkunIG extends Model
{
    protected $table = 'AkunIgs';
    protected $fillable = ['NamaAkun','Followers','ProfileVisitor','Status'];
}
