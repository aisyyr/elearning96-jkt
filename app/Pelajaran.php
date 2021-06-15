<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelajaran extends Model
{
    protected $table = 'pelajaran';
    public $timestamps = false;

    protected $fillable = [
        'id', 
        'nama_pelajaran',
        'id_kelas',
    ];

    //FK id_kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    //Relasi fk dari table Guru
    public function guru()
    {
        return $this->hasMany(Guru::class, 'id_pelajaran', 'id');
    }

    //Relasi fk dari table File_MTGuru
    public function file_mtguru()
    {
        return $this->hasMany(File_MTGuru::class, 'id_pelajaran', 'id');
    }

    //Relasi fk dari table File_TSiswa
    public function file_tsiswa()
    {
        return $this->hasMany(File_TSiswa::class, 'id_pelajaran', 'id');
    }

    //Relasi fk dari table Nilai_Tugas
    public function nilai_tugas()
    {
        return $this->hasMany(Nilai_Tugas::class, 'id_pelajaran', 'id');
    }
}
