<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas_pelajaran extends Model
{
    protected $table = 'kelas_pelajaran';

    protected $fillable = [
        'id', 
        'kelas_id',
        'pelajaran_id',
    ];
}
