<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File_MTGuru extends Model
{
    protected $table = 'file_mtguru';
    public $timestamps = false;

    protected $fillable = [
        'id', 
        'file_guru',
        'keterangan',
        'id_pelajaran',
    ];

    //FK nip_guru
    // public function guru()
    // {
    //     return $this->belongsTo(Guru::class, 'nip_guru');
    // }

    // //FK id_pelajaran (MANY TO MANY)
    public function pelajaran()
    {
        return $this->belongsToMany(Pelajaran::class);
    }

    // //FK id_kelas (MANY TO MANY)
    public function kelas()
    {
        return $this->belongsToMany(Kelas::class);
    }
}
