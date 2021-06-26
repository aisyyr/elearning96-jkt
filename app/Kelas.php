<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    public $timestamps = false;

    protected $fillable = [
        'id', 
        'kelass',
    ];

    //Relasi FK dari tabel Siswa
    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'id_kelas', 'id');
    }

    //Relasi FK dari tabel Pelajaran (MANY TO MANY)
    public function pelajaran()
    {
        return $this->belongsToMany(Pelajaran::class)->withPivot();
    }

    // //Relasi fk dari table File_MTGuru (MANY TO MANY)
    // public function file_mtguru()
    // {
    //     return $this->hasMany(File_MTGuru::class, 'id_kelas', 'id');
    // }

    //Relasi fk dari table File_TSiswa
    public function file_tsiswa()
    {
        return $this->hasMany(File_TSiswa::class, 'id_kelas', 'id');
    }

    //Relasi fk dari table Nilai_Tugas
    public function nilai_tugas()
    {
        return $this->hasMany(Nilai_Tugas::class, 'id_kelas', 'id');
    }
}
