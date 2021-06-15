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
        'nip_guru', 
        'id_pelajaran',
        'id_kelas',
    ];

    //FK nip_guru
    public function guru()
    {
        return $this->belongsTo(Guru::class, 'nip_guru');
    }

    //FK id_pelajaran
    public function pelajaran()
    {
        return $this->belongsTo(Pelajaran::class, 'id_pelajaran');
    }

    //FK id_kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
}
