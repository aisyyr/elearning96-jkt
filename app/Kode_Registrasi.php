<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kode_Registrasi extends Model
{
    protected $table = 'kode_registrasi';
    public $timestamps = false;

    protected $fillable = [
        'id', 
        'kode_regist',
        'hak_akses',
    ];

    //Relasi fk dari table Siswa
    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'id_regist', 'id');
    }

    //Relasi fk dari table Guru
    public function guru()
    {
        return $this->hasMany(Guru::class, 'id_regist', 'id');
    }
}
