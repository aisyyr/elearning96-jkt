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
    ];

    //FK id_kelas (MANY TO MANY)
    public function kelas()
    {
        return $this->belongsToMany('App\Kelas');
    }

    // //Relasi fk dari table Guru (MANY TO MANY)
    public function guru()
    {
        return $this->belongsToMany(Guru::class);
    }

    // //Relasi fk dari table File_MTGuru (MANY TO MANY)
    public function file_mtguru()
    {
        return $this->belongsToMany(File_MTGuru::class);
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
